

window.onload = function () {
	maakUploadWizard();
}

function maakUploadWizard() {
	var scale = 3; // nog te bekijken

	$('completeDocument').onchange = function () {
		var URL = window.URL.createObjectURL(this.files[0]);
		laadPDF(URL);
	}
	
	var headers = document.querySelectorAll('.naast h3'),
		container;
	for (var i=0,header;header=headers[i];i+=1) {
		container = header.nextElementSibling;
		if (container.nodeName === 'DIV') {
			header.container = container;
			container.header = header;
			if (headers[i+1]) {
				header.nextHeader = headers[i+1];
			}
		} else {
			console.log('Structuurfout bij header ' + header.textContent);
		}
	}
	
	function laadPDF(URL) {
	
		var template = document.createElement('div');
		template.appendChild(document.createElement('div')).className = 'loep';
		
		var pages;
		PDFJS.getDocument(URL).then(function (pdf) {
			console.log('pdf object');
			var wr = $('canvases');
			pages = pdf.numPages;
			for (var i=1;i<=pages;i+=1) {
				pdf.getPage(i).then(function (page) {
//					showOnce(page);
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

//	var groteCanvas = $('groot');
//	var nieuweContext = groteCanvas.getContext('2d');
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
			div.classList.add('actief');
			if (actiefFormulier) {
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
			}
		}
	}

	var actiefFormulier;
	document.querySelector('.naast').addEventListener('click',function (e) {
		var source = e.target;
		if (source.nodeName === 'A') {
			return true;
		}
		if (source.nodeName === 'H3') {
			wijzigActiefFormulier(source);
		} else if (source.classList.contains('nieuwDocument')) {
			var huidigeHeader = source.form.header;
			stuurFormulier(source,function () {
				wijzigActiefFormulier(huidigeHeader);
			});
		} else if (source.classList.contains('upload')) {
			var nieuweHeader = source.form.header.nextHeader
			stuurFormulier(source,function () {
				if (nieuweHeader) {
					wijzigActiefFormulier(nieuweHeader);
				}
			});
		}
		e.preventDefault();
	},false);
	headers[0].click();


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
		console.log(canvasIDs);
		var linkData = {};
		linkData.container = form;
		linkData.naam = naamSource.value;
		linkData.onderwerp = form.parentNode.dataset.systeemnaam;
		console.log(linkData.onderwerp);
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

	function maakLink(data) {
		var link = document.createElement('a');
		link.href =  data.link;
		link.innerHTML = data.naam;
		data.container.appendChild(link);
		var knoppen = data.container.querySelector('.knoppenbalk');
		data.container.removeChild(knoppen);
		data.container.classList.remove('leegFormulier');
		return;
	
	
		var div = $('resultaatTemplate').cloneNode(true);
		div.id = '';
		div.querySelector('span').innerHTML = data.onderwerp;
		var link = div.querySelector('a');
		link.href = data.link;
		link.innerHTML = data.naam;
		var form = data.container;
		form.parentNode.insertBefore(div,form);
		form.parentNode.removeChild(form);
	}

	function wijzigActiefFormulier(source) {
		console.log(source.nodeName);
		if (actiefFormulier) {
			actiefFormulier.style.display = '';
			actiefFormulier.header.classList.remove('uitgeklapt');
		}
		var tgt = source.container;
		if (!tgt.querySelector('form.leegFormulier')) {
			var nieuwForm = $('templateForm').cloneNode(true);
			nieuwForm.id = '';
			nieuwForm.className = 'leegFormulier';
			nieuwForm.header = source;
			source.classList.add('uitgeklapt');
			tgt.appendChild(nieuwForm);
		}
		tgt.style.display = 'block';
		tgt.onderwerp = source.textContent
		actiefFormulier = tgt;
	}
	
/*	var groteCanvas = document.createElement('canvas');
	groteCanvas.id = 'groot';
	document.body.appendChild(groteCanvas); */
	
	function toonGrotePDF(pdf) {
		// aanname: pdf is eigenlijk canvas-element
//		groteCanvas
	}
	
	
}

function showAPI(obj) {
var tmp = [];
	for (var i in obj) {
		tmp.push(i);
		if (typeof obj[i] === 'object') {
			for (var j in obj[i]) {
				tmp.push(i + '.' + j);
			}
		}
	}
	tmp.sort();
	for (var i=0;i<tmp.length;i+=1) {
		console.log(tmp[i]);
//		console.log(tmp[i] + ': ' + typeof PDFJS[tmp[i]]);
	
	}
}
//	showAPI(PDFJS);

function showOnce(obj) {
	showOnce = function () {};
	return showAPI(obj);
}


/*
	return;
	var actiefFormulier;
	$('nieuwForm').onclick = function () {
		var newForm = $('templateForm').cloneNode(true);
		newForm.id = '';
		newForm.querySelector('.activeer').onclick = function () {
			if (actiefFormulier) {
				actiefFormulier.classList.remove('actief');
			}
			if (actiefFormulier === newForm) {
				actiefFormulier = null;
				return false;
			}
			actiefFormulier = newForm;
			newForm.uploadList = {};
			newForm.classList.add('actief');
			return false;
		}
		newForm.onsubmit = stuurFormulier;
		newForm.querySelector('input[type=file]').required = false;
		$('insertForm').parentNode.insertBefore(newForm,$('insertForm'))
	}
	$('nieuwForm').onclick();
*/

