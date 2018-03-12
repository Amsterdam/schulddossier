
var docs=

window.onload = function () {
	if (document.body.classList.contains('voorlegger')) {
//		autoSave();
		uploadDocument();
		docs = documentLinks();
	}
}



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
		var li = document.createElement('li');
		var a = document.createElement('a')
		li.dataset.onderwerp  = data.onderwerp;
		a.href = data.href;
		a.innerHTML = data.tekst;
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
	uploadFormulier.querySelector('button').onclick = breekAf;
	uploadFormulier.onsubmit = upload;
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
			console.log('Click on upload');		
			tgt.appendChild(uploadVeld);
			toonFormulier();
			categorie = goUp(e.target,'TR').querySelector('input[type=checkbox]').name;
//			console.log(categorie);
		}
	},true);


	function toonFormulier() {
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
		console.log('startUpload');
		$('dossier_document_form_document_naam').value = this.value.substring(this.value.lastIndexOf('\\')+1);
		for (var i=0;i<categorieLijst.length;i+=1) {
			var waarde = categorieLijst.options[i].value;
			if (categorie.indexOf(waarde) !== -1) {
				categorieLijst.options[i].selected = true;
			}
		}
		
	}
	
	function upload() {
		console.log('upload');
		this.appendChild(uploadVeld);
		naam = $('dossier_document_form_document_naam').value;
		$('spinnerContainer').appendChild(spinner);
		var data = verzamelData(uploadFormulier);
		sendRequest(uploadFormulier.action,function (req) {
			console.log('Upload klaar');
			$('spinnerContainer').removeChild(spinner);
			if (req.responseURL) {
				docs.voegDocToe({
					href: req.responseURL,
					onderwerp: categorie,
					tekst: naam,
				});
			}
			breekAf();
		},data);
		return false;
	}
	
	function breekAf() {
		uploadVenster.style.visibility = 'hidden';
		if (uploadVeld.value) {
			vernieuwVeld();
		}
//		window.location.reload();
		return false;
	}
	
	function vernieuwVeld() {
		uploadVeld.parentNode.removeChild(uploadVeld);
		uploadVeld = document.createElement('input');
		uploadVeld.type = 'file';
		uploadFormulier.appendChild(uploadVeld);
		uploadFormulier.querySelector('input').value = '';
	}
	
}

function autoSave() {

	document.addEventListener('click',logClick,false);
	document.addEventListener('keyup',logKeys,false);
	document.addEventListener('change',logChange,true);
	
	var saveTimer;
	var wachttijd = 5;
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
		// + als save in progress en er verandert iets: nieuwe save schedulen
		// + saveInProgress testen
		// + response OK -> 'Autosaved'
	}

	function autoSave() {
		saveInProgress = true;
		var data = verzamelData(document.detail_dossier_form);
		sendRequest(location.href,function (req) {
			if (req.status === 400) {
				console.log('Vaudt! ' + req.responseText)
			}
			saveInProgress = false;
			if (scheduleNewSave) {
				prepareAutoSave();
				scheduleNewSave = false;
			}
		},data);
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
