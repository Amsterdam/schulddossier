
document.addEventListener("DOMContentLoaded", function(event) {
	if (document.querySelector('main.voorlegger')) {
		maakUploadWizard();
	}
	var accordeons = document.querySelectorAll('.accordeon');
	for (var i=0;i<accordeons.length;i+=1) {
		maakAccordeon(accordeons[i]);
	}
	zetDatumWidget();
	var forms = document.forms;
	for (var i=0;i<forms.length;i+=1) {
		submitAanmeldFormulieren(forms[i]);
	}
},false);

function submitAanmeldFormulieren(form) {

	if (form.classList.contains('schuldenformulier')) {
		form.onsubmit = verstuurSchuldenFormulier;
	} else if (form.id === 'voorlegger_mainform') {
		form.onsubmit = verstuurClientFormulier;
	} else if (form.classList.contains('nieuweSchuldeiser')) {
		form.onsubmit = verstuurNieuweSchuldeiserFormulier;
	} else if (form.classList.contains('aanmeldformulier')) {
		form.onsubmit = verstuurAanmeldFormulier;
	} 
	else {
		form.onsubmit = function (e) {
			e.preventDefault();
			console.log('Nog niet aangesloten');
		}
	}
}

function verstuurNieuweSchuldeiserFormulier(e) {
	e.preventDefault();
	var formData = new FormData(this);
	stuurFormulier({
		form: this,
		data: formData,
		success: function (req,serverBoodschap) {
			var venster = $('uploadVenster');
			venster.style.visibility = 'hidden';
			var statusMsg = venster.querySelector('.status');
			if (statusMsg) {
				statusMsg.parentNode.removeChild(statusMsg);
			}
			var velden = venster.querySelectorAll('input');
			var nieuweSchuldEiser = velden[0].value;
			var foutiefVeld = venster.parentNode.querySelector('input.error');
			if (foutiefVeld) {
				foutiefVeld.value = velden[0].value;
				foutiefVeld.focus();
			}
			for (var i=0;i<velden.length;i+=1) {
				velden[i].value = '';
			}
			if (serverBoodschap.bedrijfsnaam) {
				alfabetisch.push(serverBoodschap.bedrijfsnaam);
				schuldEisersLijst[serverBoodschap.bedrijfsnaam] = {};
				schuldEisersLijst[serverBoodschap.bedrijfsnaam].id = serverBoodschap.id || '';
				schuldEisersLijst[serverBoodschap.bedrijfsnaam].rekening = serverBoodschap.rekening || '';
				alfabetisch.sort();
			}
		}
	});
}
		
function verstuurSchuldenFormulier(e) {
	e.preventDefault();
	var formData = new FormData(this);
	var schuldEiserVelden = ['schuldeiser','incassant'];
	for (var i=0;i<schuldEiserVelden.length;i+=1) {
		var veldNaam = 'schuld_item_form[' + schuldEiserVelden[i] + ']';
		if (this.elements[veldNaam].value && !controleerSchuldEiserNaam(formData,veldNaam)) {
			handelSchuldeiserFoutAf(this.elements[veldNaam]);
			console.log('Value is ' + this.elements[veldNaam].value);
			return;
		}
	}
	
	var PDFData = verzamelCanvases(this);
	if (PDFData.cancel) {
		return;
	}
	var linkData = {};
	if (PDFData.data) {
		var fileSource = this.name + '[file]';
		if (this.classList.contains('schuldenformulier')) {
			fileSource += '[0]';
		}
		formData.append(fileSource,PDFData.data.output('blob'),'document');
		linkData.container = this;
		linkData.naam = (PDFData.naamSource && PDFData.naamSource.value) || 'Document';
		linkData.onderwerp = this.container.dataset.systeemnaam;
	}
	var that = this;
	stuurFormulier({
		form: this,
		data: formData,
		success: function (req,serverBoodschap) {
			PDFUploadSuccess({
				serverBoodschap: serverBoodschap,
				PDFData: PDFData,
				form: that,
				linkData: linkData,
			});
		},
	});
}

function verstuurClientFormulier(e) {
	e.preventDefault();
	var formData = new FormData(this);
	stuurFormulier({
		form: this,
		data: formData,
	});	
}

function verstuurAanmeldFormulier(e) {
	e.preventDefault();
	var formData = new FormData(this);
	var PDFData = verzamelCanvases(this);
	if (PDFData.cancel) {
		return;
	}
	var linkData = {};
	if (PDFData.data) {
		var fileSource = this.name + '[file]';
		if (this.classList.contains('schuldenformulier')) {
			fileSource += '[0]';
		}
		formData.append(fileSource,PDFData.data.output('blob'),'document');
		linkData.container = this;
		linkData.naam = (PDFData.naamSource && PDFData.naamSource.value) || 'Document';
		linkData.onderwerp = this.container.dataset.systeemnaam;
	}
	var that = this;

	stuurFormulier({
		form: this,
		data: formData,
		success: function (req,serverBoodschap) {
			PDFUploadSuccess({
				serverBoodschap: serverBoodschap,
				PDFData: PDFData,
				form: that,
				linkData: linkData,
			});
		},
	});	
}

function PDFUploadSuccess(obj) {
	if (obj.PDFData.destroy) {
		obj.PDFData.destroy();
	}
	var linkData = obj.linkData;
	var documentData = obj.serverBoodschap.document;
	if (documentData && documentData.url) {
		linkData.link = documentData.url;
	}
	if (linkData.link) {
		var li = document.createElement('li');
		var link = document.createElement('a');
		link.href =  linkData.link;
		link.textContent = link.innerText = linkData.naam;
		li.appendChild(link);
		var documentenLijst = obj.form.querySelector('.documentenLijst');
		if (!documentenLijst) {
			documentenLijst = $('documentenLijstTemplate').cloneNode(true);
			documentenLijst.id = '';
			var insert = obj.form.querySelector('.insertDocumentenLijst');
			insert.parentNode.insertBefore(documentenLijst,insert);
			insert.parentNode.removeChild(insert);
		}
		documentenLijst.appendChild(li);
		console.log(obj.form.querySelector('.uploadCanvases').innerHTML);
		obj.form.querySelector('.uploadCanvases').innerHTML = '';
		var aantalDocumenten = documentenLijst.querySelectorAll('li').length;
		var huidigeTeller = obj.form.header.querySelector('span.aantal');
		if (huidigeTeller) {
			huidigeTeller.innerText = huidigeTeller.textContent = aantalDocumenten 
		}
		if (obj.PDFData.naamSource) {
			obj.PDFData.naamSource.value = '';
			obj.PDFData.naamSource.placeholder = '';
		}
		for (var i=0,cv;cv=obj.PDFData.IDs[i];i+=1) {
			$(cv).parentNode.classList.add('upgeload');
			$(cv).parentNode.classList.remove('actief');
		}
	}
}

function verzamelCanvases(form) {
	var canvases = form.querySelectorAll('canvas');
	if (canvases.length === 0) {
		return {};
	}
	var canvasIDs = [];
	var naamSource = form.querySelector('#' + form.name + '_fileNaam') || undefined;
	if (naamSource && !naamSource.value) {
		naamSource.placeholder = 'Vul aub. een naam in';
		naamSource.focus();
		return {
			cancel: true,
		};
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
	return {
		data: newPDF,
		IDs: canvasIDs,
		naamSource: naamSource,
		destroy: function () {
			newPDF = null;
		}
	};
}

function controleerSchuldEiserNaam(formData,veldNaam) {
	var schuldEiserNaam = formData.getAll(veldNaam);
	if (schuldEiserNaam) {
		var entry = schuldEisersLijst[schuldEiserNaam.join('')];
		if (!entry) {
			return false;
		}
		formData.set('schuld_item_form[schuldeiser]',entry.id);
		return true;
	}
	return true;
}

function handelSchuldeiserFoutAf(element) {
	var p = element.parentNode.querySelector('.foutmelding');
	if (!p) {
		var p = document.createElement('p');
		p.className = 'foutmelding';
		element.parentNode.appendChild(p);
	}
	p.innerHTML = 'Deze schuldeiser bestaat nog niet. Maak een nieuwe aan.';
	var maakaan = element.form.querySelector('#nieuweSchuldeiser');
	if (maakaan) {
		maakaan.focus();
	}
	element.classList.add('error');
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
//					console.log(viewport.width + ' ' + viewport.height);
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

/* UTILITIES */

/*
	obj:
	-	form: het <form> element
	-	data: de form-data als new Formdata();
	-	success: success callback (200 of 201)
	-	fail: fail callback (400 of 500)
*/

function stuurFormulier(obj) {
	verwijderStatusMessage();
	var spinner = obj.form.querySelector('.spinnerContainer');
	if (!spinner) {
		spinner = document.createElement('span');
		spinner.className = 'spinnerContainer';
		var img = document.createElement('img');
		img.src= '/pix/spinner.gif'
		spinner.appendChild(img);
		obj.form.appendChild(spinner);
	}
	spinner.style.display = 'block';
	sendRequest(obj.form.action,function (req) {
		console.log('Response: ' + req.response);
		verwijderFormulierVeldErrors();
		var serverBoodschap = {};
		try {
			serverBoodschap = JSON.parse(req.response);
		} catch (e) {
			console.log('Geen JSON teruggekregen; status ' + req.status);
		};
		spinner.style.display = 'none';
		if (req.status === 200 || req.status === 201) {
			zetStatusMessage('Uw wijzigingen zijn opgeslagen');
			if (obj.success) {
				obj.success(req,serverBoodschap);
			}
		} else if (req.status === 400) {
			zetStatusMessage('Er zitten nog fouten in het formulier. Verbeter deze aub.');
			if (obj.fail) {
				obj.fail(req,serverBoodschap);
			}
			if (serverBoodschap.errors) {
				for (var i in serverBoodschap.errors) {
					zetFormulierVeldError({
						veld: obj.form.elements[obj.form.name + '[' + i + ']'],
						message: serverBoodschap.errors[i].join('<br>'),
					});
				}
			}
		} else if (req.status === 500) {
			zetStatusMessage('Helaas, uw wijzigingen zijn niet opgeslagen. (500 error)');		
			if (obj.fail) {
				obj.fail(req,serverBoodschap);
			}
		}
	},obj.data);
	
	function zetFormulierVeldError(obj) {
		if (obj.veld && obj.message) {
			var container = obj.veld.parentNode;
			var foutmelding = container.querySelector('p.foutmelding');
			if (!foutmelding) {
				foutmelding = document.createElement('p');
				foutmelding.className = 'foutmelding';
				container.appendChild(foutmelding);
			}
			foutmelding.innerText = foutmelding.textContent = obj.message;		
		}
		else {
			console.log('Veld bestaat niet');
		}
	}
	
	function verwijderFormulierVeldErrors() {
		var errors = obj.form.querySelectorAll('.foutmelding');
		for (var i=0,error;error=errors[i];i+=1) {
			error.parentNode.removeChild(error);
		}
	}
	
	function zetStatusMessage(msg) {
		var statusVeld = obj.form.querySelector('.status');
		if (!statusVeld) {
			statusVeld = document.createElement('p');
			statusVeld.className = 'status';
			obj.form.appendChild(statusVeld);
		}
		statusVeld.innerText = statusVeld.textContent = msg;
	}
	
	function verwijderStatusMessage() {
		var statusVeld = obj.form.querySelector('.status');
		if (statusVeld) {
			statusVeld.innerHTML = '';
		}	
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