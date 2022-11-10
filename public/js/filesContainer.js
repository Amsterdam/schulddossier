window.schuldhulp = window.schuldhulp || {};

window.schuldhulp.filesContainer = {};

window.schuldhulp.filesContainer.add = function (dom) {
    var counter = dom.getAttribute('data-counter') || -1;
    var prototype = dom.querySelector('.prototype').cloneNode(true);
    var addButton = dom.querySelector('[href$="#add"]');
    
    counter = counter + 1;
    
    prototype.classList.remove('prototype');
    prototype.setAttribute('data-name', prototype.getAttribute('data-name').replace('__name__', 'n' + counter));
    prototype.querySelector('input[type="text"]').setAttribute('name', prototype.querySelector('input[type="text"]').getAttribute('name').replace('__name__', 'n' + counter));
    prototype.querySelector('input[type="file"]').setAttribute('name', prototype.querySelector('input[type="file"]').getAttribute('name').replace('__name__', 'n' + counter));
    dom.insertBefore(prototype, addButton);
    
    window.schuldhulp.pdfSplitter.dragula.containers.push(prototype.querySelector('.drop-area'));
    
    prototype.addEventListener('filled', function (event) {
        var elm = prototype.querySelector('input[type="text"]');
        if (elm.value === '' || elm.value === null) {
            elm.value = prototype.parentNode.getAttribute('data-default-document-naam');
            elm.focus();
        }
    });
    
    prototype.querySelector('input[type="file"]').addEventListener('change', function (event) {
        if (event.target.value) {
            if (prototype.querySelector('.drop-area')) {
                prototype.removeChild(prototype.querySelector('.drop-area'));
            }
            prototype.classList.add('files-only');
            var button = prototype.querySelector('button');
            button.textContent = event.target.value.replace('/', '\\').split('\\').pop();
            
            var event = new Event('filled');
            prototype.dispatchEvent(event);
        }
    });
    
    dom.setAttribute('data-counter', counter);
};

document.addEventListener('click', function (event) {
    if (window.schuldhulp._.matches(event.target, 'a[href$="#add"]') && window.schuldhulp._.matches(event.target.parentNode, '.files-container')) {
        window.schuldhulp.filesContainer.add(event.target.parentNode);
        event.preventDefault();
    }
});
