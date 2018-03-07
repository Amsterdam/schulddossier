
window.onload = function () {
	if (document.body.classList.contains('voorlegger')) {
		autoSave();
	}
}

function autoSave() {

	document.onclick = logClick;
	document.onkeyup = logKeys;
	document.addEventListener('change',logChange,true);
	
	var saveTimer;
	var wachttijd = 1;

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
		saveTimer = setTimeout(autoSave,wachttijd*1000)
	}

	function autoSave() {
		var data = verzamelData();
		sendRequest(location.href,function (req) {
			console.log(req.status);		
		},data);
	}
	
	function verzamelData() {
		var els = document.forms[0].elements;
		var formData = [];
		for (var i=0;i<els.length;i+=1) {
			formData.push(encodeURIComponent(els[i].name) + '=' + encodeURIComponent(els[i].value));
		}
		return formData;
	}
	
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
		if (req.status != 200 && req.status != 304) {
			return;
		}
		callback(req);
	}
	if (req.readyState == 4) return;
	req.send(postData);
}