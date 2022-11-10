window.schuldhulp = window.schuldhulp || {};

window.schuldhulp.formSubmit = function (event, formDataCallback, successCallback) {
    var dom = event.target;
    successCallback = successCallback || function () {};
    event.preventDefault();
    
    // vang dubbel click e.d. af
    if (dom.classList.contains('in-progress')) {
        return;
    }
    
    // stel formulier in op in progress
    dom.classList.add('in-progress');
    
    // verwijder bestaande validatie berichten
    var errors = dom.querySelectorAll('.errors');
    for (var i = 0; i < errors.length; i++) {
        errors.item(i).parentNode.removeChild(errors.item(i));
    }
    
    // leeg request maken
    var request = new XMLHttpRequest();
    
    // data uit document verzamellen
    var name = dom.getAttribute('name');
    var method = dom.getAttribute('method');
    var action = dom.getAttribute('action') ? dom.getAttribute('action') : window.location.href;
    var data = new FormData(dom);
    
    // voeg canvas pdf's toe
    var fileContainers = dom.querySelectorAll('.file-container');
    for (var i = 0; i < fileContainers.length; i ++) {
        var canvasElms = fileContainers.item(i).querySelectorAll('canvas.upload-as-pdf');
        if (canvasElms.length > 0) {
            var pdf = new jsPDF('portrait', 'mm', 'a4');
            for (var j = 0; j < canvasElms.length; j ++) {
                if (j > 0) {
                    pdf.addPage();
                }
                var imgData = canvasElms.item(j).toDataURL("image/jpeg");
                //(imageData, format, x, y, w, h, alias, compression, rotation)
                pdf.addImage(imgData, 'JPEG', 0, 0, 210, 297);
            }
            data.append(fileContainers.item(i).getAttribute('data-name'), pdf.output('blob'), 'document.pdf');
        }
    }
    
    // voer callback op form data uit
    data = formDataCallback ? formDataCallback(data, dom, event) : data;
    
    // voer request uit
    request.open(method, action, true);
    request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    request.onload = function() {
        // in progress state verwijderen
        dom.classList.remove('in-progress');
        dom.classList.remove('form-changed');
        
        if (request.status >= 200 && request.status < 400) {
            var resp = request.responseText;
            if (request.getResponseHeader('Content-type').indexOf('text/html') > -1) {
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = request.response.trim();
                resp = tempDiv.childNodes;
            } else if (request.getResponseHeader('Content-type').indexOf('application/json') > -1) {
                resp = JSON.parse(request.responseText);
            }
            successCallback(resp, data, dom, event);
        } else if (request.status >= 400 && request.status < 500) {
            // validatie error afhandeling
            var validatie = JSON.parse(request.responseText);
            for (var key in validatie.errors) {
                if (validatie.errors.hasOwnProperty(key)) {
                    var elm = dom.querySelector('[name="' + name + key + '"]');
                    if (elm !== null) {
                        var errorList = document.createElement('ul');
                        errorList.classList.add('errors');
                        for (var i = 0; i < validatie.errors[key].length; i ++) {
                            var error = document.createElement('li');
                            error.appendChild(document.createTextNode(validatie.errors[key][i]));
                            errorList.appendChild(error);
                        }
                        if (elm.classList.contains('lookup')) {
                            elm.parentNode.parentNode.parentNode.parentNode.appendChild(errorList);
                        } else if (elm.parentNode.classList.contains('file-container')) {
                            elm.parentNode.insertBefore(errorList, elm.nextSibling);
                        } else {
                            elm.parentNode.parentNode.appendChild(errorList);
                        }
                    } else {
                        console.log('Can not write validation error ' + key);
                    }
                }
            }
        } else if (request.status >= 500 && request.status < 600) {
            alert('Er is een serverfout opgetreden');
        } else {
            alert('Onbekende fout opgetreden in antwoord van de server');
        }
    };
    request.onerror = function() {
        alert('Onbekende fout opgetreden bij het maken van de verbinding');
    };
    request.send(data);
};

document.addEventListener('submit', function (event) {
    // implementatie voor schuldeiser
    if (window.schuldhulp._.matches(event.target, '.ajax[name="schuldeiser_form"]')) {
        window.schuldhulp.formSubmit(event, null, function (response, data, dom, event) {
            window.location.replace(window.location.href.split('#')[0]);
        });
    }
    
    // implementatie voor voorlegger
    if (window.schuldhulp._.matches(event.target, '.ajax[name^="voorlegger_"]')) {
        window.schuldhulp.formSubmit(event, null, function (response, data, dom, event) {
            dom.parentNode.replaceChild(response[0], dom);
        });
        return;
    }
    
    // implementatie voor schuld item
    if (window.schuldhulp._.matches(event.target, '.ajax[name="schuld_item_form"]')) {
        window.schuldhulp.formSubmit(event, function (data, dom, event) {
            if (document.activeElement.classList.contains('remove')) {
                data.append(document.activeElement.getAttribute('name'), document.activeElement.value);
            }
            return data;
        }, function (response, data, dom, event) {
            if (data.get('schuld_item_form[verwijderd]') == true) {
                dom.parentNode.parentNode.parentNode.parentNode.removeChild(dom.parentNode.parentNode.parentNode);
            } else {
                // datepicker opnieuw toewijzen
                elms = response[0].querySelectorAll('.rome');
                for (var i = 0; i < elms.length; i ++) {
                    window.schuldhulp._.datePicker(elms.item(i));
                }
                
                var original = dom.parentNode.parentNode.parentNode.parentNode.querySelector('#' + response[0].getAttribute('id'));
                if (original) {
                    original.parentNode.replaceChild(response[0], original);
                } else {
                    dom.parentNode.parentNode.parentNode.querySelector('.accordion-container').appendChild(response[0]);
                    dom.reset();
                }
            }
        });
        return;
    }
    
    // algemene implementatie
    if (window.schuldhulp._.matches(event.target, '.ajax')) {
        window.schuldhulp.formSubmit(event, null, function () {});
        return;
    }
});
