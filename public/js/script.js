
window.onload = function () {
	if (document.body.classList.contains('voorlegger')) {
//		autoSave();
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
			categorie = e.target.parentNode.querySelector('h3').textContent;
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
		$('uploadNaam').value = this.value.substring(this.value.lastIndexOf('\\'));
		$('uploadCategorie').value = categorie;
	}
	
	function breekAf() {
		uploadFormulier.style.visibility = 'hidden';
		if (uploadVeld.value) {
			nieuwVeld();
		}
		return false;
	}
	
	function nieuwVeld() {
		uploadVeld.parentNode.removeChild(uploadVeld);
		uploadVeld = document.createElement('input');
		uploadVeld.type = 'file';
		uploadFormulier.appendChild(uploadVeld);
		uploadFormulier.querySelector('input').value = '';
	}
	
}


function autoSave() {

	document.addEventListener('click',logClick,false);
	document.onkeyup = logKeys;
	document.addEventListener('change',logChange,true);
	
	var saveTimer;
	var wachttijd = 1;
	var saveInProgress = false;

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
		}
		// + als save in progress en er verandert iets: nieuwe save schedulen
	}

	function autoSave() {
		var data = verzamelData();
		sendRequest(location.href,function (req) {
/*			for (var i in req) {
				if (i === 'response' || i === 'responseText') continue;
				console.log(i + ': ' + req[i]);
			} */
		},data);
	}
	
	function verzamelData() {
		var els = document.forms[0].elements;
		var formData = [];
		for (var i=0;i<els.length;i+=1) {
			if (els[i].type === 'checkbox') {
				formData.push(encodeURIComponent(els[i].name) + '=' + encodeURIComponent(els[i].checked ? 'on' : ''));			
			} else {
				formData.push(encodeURIComponent(els[i].name) + '=' + encodeURIComponent(els[i].value || ''));
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
	if (postData)
		req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
	req.onreadystatechange = function () {
		if (req.readyState !== 4) return;
		console.log('Status is ' + req.status);
		if (req.status != 200 && req.status != 304) {
//			return;
		}
		saveInProgress = false;
		callback(req);
	}
	if (req.readyState == 4) return;
	req.send(postData);
	saveInProgress = true;
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
