
window.onload = function () {
	if (document.body.classList.contains('voorlegger')) {
		autoSave();
		uploadDocument();
	}
}

function uploadDocument() {

	var uploadFormulier = $('uploadForm');
	var uploadVenster = $('uploadVenster');
	var uploadVeld = $('dossier_document_form_document_file');
	var dimensions = [uploadVenster.offsetWidth/2,uploadVenster.offsetHeight/2];
	uploadFormulier.querySelector('button').onclick = breekAf;
	uploadFormulier.onsubmit = upload;
	var categorie = '';


	document.addEventListener('click',function (e) {
		if (e.target.className === 'upload') {		
			e.target.appendChild(uploadVeld);
			toonFormulier();
			categorie = goUp(e.target,'TR').querySelector('input[type=checkbox]').name;
			var regexp = new RegExp(/.*\[(.*)\]/);
			var result = regexp.exec(categorie);
			console.log(result);
			// detail_dossier_form[voorlegger][legitimatieOntvangenMadi]
		}
	},true);


	function toonFormulier() {
		console.log('toonFormulier');
		var coors = findPos(uploadVeld);
		uploadVenster.style.left = (coors[0] - dimensions[0]) + 'px';
		uploadVenster.style.top = (coors[1] - dimensions[1]) + 'px';
		uploadVenster.style.visibility = 'visible';
		uploadVeld.onchange = startUpload;
	}
	
	function startUpload() {
		console.log('startUpload');
		$('dossier_document_form_document_naam').value = this.value.substring(this.value.lastIndexOf('\\')+1);
//		$('uploadCategorie').value = categorie; // checkboxtext
	}
	
	function upload() {
		console.log('upload');
		this.appendChild(uploadVeld);
		var data = verzamelData(uploadFormulier);
		sendRequest(uploadFormulier.action,function () {
			console.log('Upload klaar');
			breekAf();
		},data);
		return false;
	}
	
	function breekAf() {
		uploadFormulier.style.visibility = 'hidden';
		if (uploadVeld.value) {
			vernieuwVeld();
		}
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
		if (req.readyState !== 4) return;
		var token = req.getResponseHeader('X-Debug-Token-Link');
		if (token) {
			console.log(token);
		}
		callback(req);
	}
	if (req.readyState == 4) return;
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
