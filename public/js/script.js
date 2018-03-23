
document.addEventListener("DOMContentLoaded", function(event) {
	if (document.querySelector('main.voorlegger')) {
		//autoSave();
		//uploadDocument();
		//docs = documentLinks();
		maakUploadWizard();
	}
	var accordeons = document.querySelectorAll('.accordeon');
	for (var i=0;i<accordeons.length;i+=1) {
		maakAccordeon(accordeons[i]);
	}
	zetDatumWidget();
	submitAanmeldFormulieren();
	
},false);

function submitAanmeldFormulieren() {
	var submits = document.querySelectorAll('input[type=submit].detailOpslaan');
	for (var i=0;i<submits.length;i+=1) {
		submits[i].form.onsubmit = slaFormulierOp;
	}
	
	var succesMessage = document.createElement('p');
	succesMessage.className = 'succesMessage';
	succesMessage.innerHTML = 'Uw wijzigingen zijn opgeslagen.';
	
	function slaFormulierOp() {
		var form = this;
		var canvases = form.querySelectorAll('canvas');
		var canvasIDs = [];
		var naamSource = form.querySelector('#' + form.name + '_fileNaam');
		var fileSource = form.name + '[file]';
		if (canvases.length && !naamSource.value) {
			naamSource.placeholder = 'Vul aub. een naam in';
			naamSource.focus();
			return false;
		}
		var	newPDF = new jsPDF(),
			imgData
		;
		for (var i=0,cv;cv=canvases[i];i+=1) {
			canvasIDs.push(cv.id.replace(/copy/g,''));
			if (i > 0) {
				newPDF.addPage();
			}
			imgData = cv.toDataURL("image/jpeg");
			newPDF.addImage(imgData, 'JPEG', 15, 40, 180, 180);
		}
		var data = new FormData(form);
		data.append(fileSource,newPDF.output('blob'),'document');
		var linkData = {};
		linkData.container = form;
		linkData.naam = naamSource.value;
		linkData.onderwerp = form.container.dataset.systeemnaam;
		console.log('Uploaden');
/*		var schuldEiserNaam = data.getAll('schuld_item_form[schuldeiser]');
		if (schuldEiserNaam) {
			var ID = schuldEiserNaam.join('') && schuldEisersLijst[schuldEiserNaam.join('')].id;
			if (ID) {
				data.set('schuld_item_form[schuldeiser]',ID);
			}
		} */
		var spinner = form.querySelector('.spinnerContainer');
		if (!spinner) {
			spinner = document.createElement('span');
			spinner.className = 'spinnerContainer';
			var img = document.createElement('img');
			img.src= '/pix/spinner.gif'
			spinner.appendChild(img);
			form.appendChild(spinner);
		}
		spinner.style.display = 'block';
		var succes = succesMessage.cloneNode(true);
		sendRequest(form.action,function (req) {
			newPDF = null;
			console.log(req);
			var parsedJSON = JSON.parse(req.response);
			var errors = parsedJSON.errors;
			if (errors) {
				console.log(parsedJSON.errors);
			} else {
				console.log('Geen errors');
			}
			var documentData = parsedJSON.document;
			if (documentData) {
				console.log(parsedJSON.document);
				linkData.link = documentData.url;
				console.log(linkData.link);
			}
			spinner.style.display = '';
			form.appendChild(succes);
			setTimeout(function () {
				form.removeChild(succes);
			},5000)
			var resp = JSON.parse(req.response);
			if (linkData.link) {
				var li = document.createElement('li');
				var link = document.createElement('a');
				link.href =  linkData.link;
				link.textContent = link.innerText = linkData.naam;
				li.appendChild(link);
				console.log(li);
				form.querySelector('.documentenLijst').appendChild(li);
				form.querySelector('.uploadCanvases').innerHTML = '';
				naamSource.value = '';
				for (var i=0,cv;cv=canvasIDs[i];i+=1) {
					$(cv).parentNode.classList.add('upgeload');
					$(cv).parentNode.classList.remove('actief');
				}
			}
		},data);
		return false;
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

/*	var items = document.querySelectorAll('h3');
	for (var i=0;i<items.length;i+=1) {
		items[i].parentNode.innerHTML += labelHTML;
	} */

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

function maakUploadWizard() {
	var scale = 3; // nog te bekijken
	
	var uploadVeld = $('completeDocument');
	if (uploadVeld) {
		uploadVeld.onchange = function () {
			var URL = window.URL.createObjectURL(this.files[0]);
			laadPDF(URL);
		}
	}
	
	
	function laadPDF(URL) {
	
		var template = document.createElement('div');
//		template.appendChild(document.createElement('div')).className = 'loep';
		
		var pages;
		PDFJS.getDocument(URL).then(function (pdf) {
			var wr = $('canvases');
			pages = pdf.numPages;
			for (var i=1;i<=pages;i+=1) {
				pdf.getPage(i).then(function (page) {
					var div = template.cloneNode(true);
					var canvas = document.createElement('canvas');
					canvas.id = 'id'+page.pageIndex;
					var viewport = page.getViewport(scale);
					var context = canvas.getContext('2d');
					canvas.width = viewport.width;
					canvas.height = viewport.height;
					console.log(viewport.width + ' ' + viewport.height);
					var renderContext = {
						canvasContext: context,
						viewport: viewport
					};
					page.render(renderContext);
					div.appendChild(canvas);
					wr.appendChild(div);
				});
			}
		});
	}
	
	if ($('canvases')) {
		$('canvases').onclick = function (e) {
		var div = canvas = e.target;
		if (div.classList.contains('loep')) {
//			toonGrotePDF(canvas);
			console.log('Vergroot');
			return false;
		}
		if (div.nodeName === 'DIV') {
			canvas = div.querySelector('canvas');		
		} else if (div.nodeName === 'CANVAS') {
			div = div.parentNode;
		}

		if (div.classList.contains('upgeload')) {
			return false;
		}


		if (div.classList.contains('actief')) {
			div.classList.remove('actief');
			var kopie = $(canvas.id+'copy')
			if (kopie && kopie.parentNode) {
				kopie.parentNode.removeChild(kopie);
			}
		} else {
			if (actiefFormulier) {
				div.classList.add('actief');
				var nieuwID = canvas.id + 'copy';
				console.log(nieuwID);
				var canvasNode;
				if ($(nieuwID)) {
					canvasNode = $(nieuwID);
				} else {
					canvasNode = document.createElement('canvas');
					var thumbContext = canvasNode.getContext('2d');
					canvasNode.width = canvas.width;
					canvasNode.height = canvas.height;
					thumbContext.drawImage(canvas,0,0);
					canvasNode.id = nieuwID;
				}
				actiefFormulier.querySelector('.uploadCanvases').appendChild(canvasNode);
			} else {
				// waarschuw gebruiker
			}
		}
	}
	}

	function stuurFormulier(source,fn) {
		var form = goUp(source,'FORM');
		var canvases = form.querySelectorAll('canvas');
		if (!canvases.length) {
			return false; // iets van een foutmelding
		}
		var naamSource = form.querySelector('input[type=text]');
		if (!naamSource.value) {
			naamSource.placeholder = 'Vul aub. een naam in';
			naamSource.focus();
			return false;
		}
		var	newPDF = new jsPDF(),
			imgData
		;
		var canvasIDs = [];
		for (var i=0,cv;cv=canvases[i];i+=1) {
			canvasIDs.push(cv.id.replace(/copy/g,''));
			if (i > 0) {
				newPDF.addPage();
			}
			imgData = cv.toDataURL("image/jpeg");
			newPDF.addImage(imgData, 'JPEG', 15, 40, 180, 180);
		}
		var linkData = {};
		linkData.container = form;
		linkData.naam = naamSource.value;
		linkData.onderwerp = form.container.dataset.systeemnaam;
		var echtFormulier = $('uploadForm');
		echtFormulier.querySelector('input[type=text]').value = linkData.naam;
		echtFormulier.querySelector('select').value = linkData.onderwerp;
		var data = new FormData(echtFormulier);
		data.append('dossier_document_form[document][file]',newPDF.output('blob'),'document');
		form.querySelector('.spinnerContainer').style.display = 'block'
		sendRequest(location.href,function (req) {
			form.querySelector('.spinnerContainer').style.display = '';
			if (req.status === 201) {
				var resp = JSON.parse(req.response);
				linkData.link = resp.document.url;
				newPDF = null;
				maakLink(linkData);
				for (var i=0,cv;cv=canvasIDs[i];i+=1) {
					$(cv).parentNode.classList.add('upgeload');
					$(cv).parentNode.classList.remove('actief');
				}
				if (fn) {
					fn();
				}
			} else {
				console.log('\'t Is mis. Fout ' + req.status);
			}
		},data)
		return false;
	}	
}


function autoSave() {


	return;

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

var actiefFormulier;
function maakAccordeon(block) {

	var headers = block.querySelectorAll('h3'),
		container;
	for (var i=0,header;header=headers[i];i+=1) {
		container = header.nextElementSibling;
		if (container.nodeName === 'DIV') {
			header.container = container;
			container.header = header;
			var form = container.querySelector('form');
			if (form) {
				form.container = container;
				form.header = header;
			}
			if (headers[i+1]) {
				header.nextHeader = headers[i+1];
			}
		} else {
			console.log('Structuurfout bij header ' + header.textContent);
		}
	}
	
	block.addEventListener('click',function (e) {
		var header = goUp(e.target,'H3');
		if (header.nodeName === 'H3') {
			if (actiefFormulier) {
				actiefFormulier.container.style.display = '';
				actiefFormulier.header.classList.remove('uitgeklapt');
			}
			header.container.style.display = 'block';
			header.classList.add('uitgeklapt');
			var nieuwForm = header.container.querySelector('form');
			if (!nieuwForm) {
				nieuwForm = $('templateForm').cloneNode(true);
				nieuwForm.id = '';
				nieuwForm.header = header;
				nieuwForm.container = header.container;
				header.container.appendChild(nieuwForm);
			}
			actiefFormulier = nieuwForm;
		}
	},false);
	

}

function zetDatumWidget() {
	var widgetNodig = false;
	var testDate = document.querySelector('input[type=date]');
	if (testDate) {
		if (testDate.getAttribute('type') === 'date' && testDate.type !== 'date') {
			document.addEventListener('click',function (e) {
				var tgt = e.target;
				if (tgt.nodeName === 'INPUT' && tgt.getAttribute('type') === 'date') {
					if (!tgt.datePicker) {
						var fp = flatpickr(tgt,{
							clickOpens: true,
						});
						fp.open();
						tgt.datePicker = true;
					}
				}
			},false);
		}
	}
}

function verzamelData(form) {
	var data = new FormData(form);
	return data;
}

/* UTILITIES */

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