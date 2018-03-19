
document.addEventListener("DOMContentLoaded", function(event) {
	if (document.querySelector('main.voorlegger')) {
		autoSave();
		uploadDocument();
		docs = documentLinks();
	}
},false);



function documentLinks() {

	var onderwerpTemplate = document.createElement('tr');
	onderwerpTemplate.classList.add('documenten');
	var cell  = onderwerpTemplate.appendChild(document.createElement('td'));
	var cellMadi = document.createElement('td');
	cellMadi.classList.add('madi');
	onderwerpTemplate.appendChild(cellMadi);
	var cellGka = document.createElement('td');
	cellGka.classList.add('gka');
	onderwerpTemplate.appendChild(cellGka);
//	onderwerpTemplate.appendChild(document.createElement('td'));
	var ulDom = document.createElement('ul');
	//ulDom.classList.add('documenten');
	cell.appendChild(ulDom);

	var links = $('documenten').querySelectorAll('li'),
		checkboxes = document.querySelectorAll('.main input[type=checkbox]'),
		insertPoint,
		onderwerp;
	for (var i=0,link;link=links[i];i+=1) {
		plaatsDocument(link);
	}

	function plaatsDocument(link) {
		onderwerp = link.dataset.onderwerp;
		if (!$(onderwerp+'Documenten')) {
			for (var j=0,box;box=checkboxes[j];j+=1) {
				if (box.name.indexOf(onderwerp) !== -1) {
					insertPoint = goUp(box,'TR');
				}
			}
			if (!insertPoint) return;
			var newTR = onderwerpTemplate.cloneNode(true)
			insertPoint.parentNode.insertBefore(newTR,insertPoint.nextSibling);
			newTR.querySelector('ul').id = onderwerp+'Documenten';
		}
		$(onderwerp+'Documenten').appendChild(link);

	}
	
	function creeerLink(data) {
		var li, a;
		
		li = document.createElement('li');
		li.dataset.onderwerp  = data.onderwerp;
		
		a = document.createElement('a')
		a.href = data.href;
		a.appendChild(document.createTextNode(data.tekst));
		li.appendChild(a);
		
		li.appendChild(document.createTextNode(' | '));
		
		a = document.createElement('a');
		a.href = window.schuldhulp.routes.appdossier_movedocumenttoprullenbak.replace('__DOCUMENTID__', data.id);
		a.setAttribute('data-token', window.schuldhulp.tokens.appdossier_movedocumenttoprullenbak);
		a.classList.add('link-as-submit');
		a.appendChild(document.createTextNode('verwijderen'));
		new window.schuldhulp.linkAsSubmit(a);
		li.appendChild(a);
		
		return li;
	}
	
	return {
		voegDocToe: function (data) {
			var nieuweLI = creeerLink(data);
			plaatsDocument(nieuweLI);
		}
	}

}

function uploadDocument() {

	var uploadFormulier = $('uploadForm');
	var uploadVenster = $('uploadVenster');
	var uploadVeld = $('dossier_document_form_document_file');
	var categorieLijst = $('dossier_document_form_onderwerp');
	var dimensions = [uploadVenster.offsetWidth/2,uploadVenster.offsetHeight/2];
	uploadFormulier.querySelector('.cancel').onclick = breekAf;
	var categorie = '',naam = '';
	var labelHTML= '<label class="upload"><span>+</span> Voeg document toe</label>';
	
	var spinner = document.createElement('img');
	spinner.src = '/pix/spinner.gif';

	var items = document.querySelectorAll('h3');
	for (var i=0;i<items.length;i+=1) {
		items[i].parentNode.innerHTML += labelHTML;
	}

	document.addEventListener('click',function (e) {
		var tgt = goUp(e.target,'LABEL');
		if (tgt.className === 'upload') {
			tgt.appendChild(uploadVeld);
			toonFormulier();
			categorie = goUp(e.target,'TR').querySelector('input[type=checkbox]').name;
		}
	},true);


	function toonFormulier() {
		var userCancellation = false;
		var coors = findPos(uploadVeld);
		uploadVenster.style.left = (coors[0] - dimensions[0]) + 'px';
		uploadVenster.style.top = (coors[1] - dimensions[1]) + 'px';
		uploadVenster.style.visibility = 'visible';
		uploadVeld.onchange = startUpload;
		document.addEventListener('keydown',function (e) {
			if (e.keyCode === 27) {
				breekAf();
			}
		},false);
	}
	
	function startUpload() {
		$('dossier_document_form_document_naam').value = uploadVeld.value.substring(uploadVeld.value.lastIndexOf('\\')+1);
		$('dossier_document_form_document_naam').focus();
		for (var i=0;i<categorieLijst.length;i+=1) {
			var waarde = categorieLijst.options[i].value;
			if (categorie.indexOf(waarde) !== -1) {
				categorieLijst.options[i].selected = true;
			}
		}
		
	}
	
	uploadFormulier.addEventListener('submit', function (event) {
		event.preventDefault();
		this.appendChild(uploadVeld);
		naam = $('dossier_document_form_document_naam').value;
		$('spinnerContainer').appendChild(spinner);
		var data = verzamelData(uploadFormulier);
		sendRequest(uploadFormulier.action,function (req) {
			console.log('Upload klaar');
			$('spinnerContainer').removeChild(spinner);
			console.log(req);
			if (req.status === 201) {
				var data = {};
				try {
					data = JSON.parse(req.response);
					docs.voegDocToe({
						href: data.document.url,
						onderwerp: data.onderwerp,
						tekst: data.document.naam,
						id: data.document.id
					});
				} catch (e) {
					console.log(e);
				}
			}
			breekAf();
		},data);
		return false;
	});
	
	function breekAf() {
		uploadVenster.style.visibility = 'hidden';
		if (uploadVeld.value) {
			vernieuwVeld();
		}
		return false;
	}
	
	function vernieuwVeld() {
		var oldName = uploadVeld.name;
		uploadVeld.parentNode.removeChild(uploadVeld);
		uploadVeld = document.createElement('input');
		uploadVeld.type = 'file';
		uploadVeld.name = oldName;
		uploadFormulier.appendChild(uploadVeld);
		uploadFormulier.querySelector('input').value = '';
	}
	
}

function autoSave() {

	document.getElementById('voorlegger_mainform').addEventListener('click', logClick, false);
	document.getElementById('voorlegger_mainform').addEventListener('keypress', logKeys, false);
	document.getElementById('voorlegger_mainform').addEventListener('change', logChange, true);
	
	var saveTimer;
	var wachttijd = 1;
	var saveInProgress = false;
	var scheduleNewSave = false;

	function logClick(e) {
		if (e.target.nodeName === 'INPUT' && e.target.type === 'checkbox') {
			prepareAutoSave();
		}
	}

	function logChange(e) {
		if (e.target.nodeName === 'SELECT') {
			prepareAutoSave();
		}
	}

	function logKeys(e) {
		if ((e.target.nodeName === 'INPUT' && e.target.type === 'text') || e.target.nodeName === 'TEXTAREA') {
			prepareAutoSave();
		}
	}

	function prepareAutoSave() {
		if (saveTimer) {
			clearTimeout(saveTimer)
		}
		if (!saveInProgress) {
			saveTimer = setTimeout(autoSave,wachttijd*1000)
		} else {
			scheduleNewSave = true;	
		}
		// + saveInProgress testen
	}

	function autoSave() {
		console.log('Save begint');
		saveInProgress = true;
		var data = verzamelData(document.detail_dossier_form);
		sendRequest(location.href,function (req) {
			if (req.status === 400) {
				console.log('Vaudt! ' + req.responseText)
			} else {
				bevestigSave();
			}
			console.log('Save eindigt');
			saveInProgress = false;
			if (scheduleNewSave) {
				prepareAutoSave();
				scheduleNewSave = false;
			}
		},data);
	}
	
	var bevestigTekst = $('autoSaveBevestig');
	var pos = bevestigTekst.offsetWidth/2;
	
	
	function bevestigSave() {
		var positie = (document.documentElement.clientWidth/2) - pos;
		bevestigTekst.style.visibility = 'visible';
		bevestigTekst.style.left = positie + 'px';
		setTimeout(function () {
			bevestigTekst.style.visibility = 'hidden';		
		},5000);
	}
	
	
}

function verzamelData(form) {
	var data = new FormData(form);
	console.log(data);
	return data;
}

function $(id) {
	return document.getElementById(id);
}

function sendRequest(url,callback,postData) {
	var req = new XMLHttpRequest();
	if (!req) return;
	var method = (postData) ? "POST" : "GET";
	req.open(method,url,true);
	req.setRequestHeader('X-Requested-With','XMLHttpRequest');
	if (postData) {
		var sBoundary = "---------------------------" + Date.now().toString(16);
		req.setRequestHeader('Content-Disposition','multipart/form-data; boundary=' + sBoundary);
	}
	req.onreadystatechange = function () {
		if (req.readyState !== 4) {
			return;
		}
		var token = req.getResponseHeader('X-Debug-Token-Link');
		if (token) {
			console.log(token);
		}
		callback(req);
	}
	if (req.readyState == 4) {
		return;
	}
	req.send(postData);
}

function goUp(node,tagName) {
	while (node.nodeName !== tagName) {
		node = node.parentNode;
		if (node.nodeName === 'BODY') {
			return false;
		}
	}
	return node;
}

function findPos(obj) {
	var curleft = 0,curtop = 0;
	if (obj.offsetParent) {
	do {
			curleft += obj.offsetLeft;
			curtop += obj.offsetTop;

		} while (obj = obj.offsetParent);
	}
	return [curleft,curtop];
}

window.schuldhulp = window.schuldhulp || {};

window.schuldhulp.flashMessage = function (flashDom) {
    window.setTimeout(function () {
        flashDom.remove();
    }, 9000);
    flashDom.querySelector('a[href="#close-flash"]').addEventListener('click', (function (event) {
        flashDom.remove();
        event.preventDefault();
    }));
};

document.addEventListener('DOMContentLoaded', function(event) {
    var flashDoms = document.getElementsByClassName('flash-message');
    for (var i = 0; i < flashDoms.length; i ++) {
        new window.schuldhulp.flashMessage(flashDoms.item(i));
    }
});

window.schuldhulp.linkAsSubmit = function (linkDom) {
    linkDom.addEventListener('click', function (event) {
        event.preventDefault();
        var token = '';
        
        var formDom = document.createElement('form');
        formDom.setAttribute('action', linkDom.getAttribute('href'));
        formDom.setAttribute('method', 'post');
        if (linkDom.hasAttribute('data-token')) {
            var tokenDom = document.createElement('input');
            tokenDom.setAttribute('type', 'hidden');
            tokenDom.setAttribute('name', 'token');
            tokenDom.value = linkDom.getAttribute('data-token')
            formDom.appendChild(tokenDom);
        }
        document.getElementsByTagName('body')[0].appendChild(formDom);
        formDom.submit();
    });
};

document.addEventListener('DOMContentLoaded', function (event) {
    var linkDoms = document.getElementsByClassName('link-as-submit');
    for (var i = 0; i < linkDoms.length; i ++) {
        new window.schuldhulp.linkAsSubmit(linkDoms.item(i));
    }
});