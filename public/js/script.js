
window.onload = function () {
	if (document.body.classList.contains('voorlegger')) {
		autoSave();
		uploadDocument();
	}
}

function uploadDocument() {

	var uploadFormulier = $('uploadForm');
	var uploadVeld = $('uploadVeld');
	var dimensions = [uploadFormulier.offsetWidth/2,uploadFormulier.offsetHeight/2];
	uploadFormulier.querySelector('button').onclick = breekAf;
	var categorie = '';


	document.addEventListener('click',function (e) {
		if (e.target.className === 'upload') {		
			e.target.appendChild(uploadVeld);
			startUpload();
			categorie = goUp(e.target,'TR').querySelector('input[type=checkbox]').name;
			var regexp = new RegExp(/.*[(.*)]/);
			var result = regexp.exec(categorie);
			console.log(result);
			// detail_dossier_form[voorlegger][legitimatieOntvangenMadi]
		}
	},true);


	function startUpload() {
		console.log('start upload');
		var coors = findPos(uploadVeld);
		uploadFormulier.style.left = (coors[0] - dimensions[0]) + 'px';
		uploadFormulier.style.top = (coors[1] - dimensions[1]) + 'px';
		uploadFormulier.style.visibility = 'visible';
		uploadVeld.onchange = metaData;
	}
	
	function metaData() {
		console.log('Metadata');
		$('uploadNaam').value = this.value.substring(this.value.lastIndexOf('\\')+1);
		$('uploadCategorie').value = categorie; // checkboxtext
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
		var data = verzamelData();
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
	
	function verzamelData() {
		var els = document.forms[0].elements;
		var formData = [];
		for (var i=0;i<els.length;i+=1) {
			if (els[i].type === 'checkbox' && els[i].checked) {
				formData.push(encodeURIComponent(els[i].name) + '=on');
			} else if (els[i].type !== 'checkbox') {
				formData.push(encodeURIComponent(els[i].name) + '=' + encodeURIComponent(els[i].value));
			}
		}
		return formData.join('&');
	}
	
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
	if (postData)
		req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	req.onreadystatechange = function () {
		if (req.readyState !== 4) return;
//		if (req.status != 200 && req.status != 304) {
//			return;
//		}
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
