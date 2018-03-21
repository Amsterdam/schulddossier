
(function () {
document.addEventListener("DOMContentLoaded", function(e) {
	haalSchuldeiserLijst();
	$('nieuweSchuld').onclick = nieuweSchuld;
	berekenTotaleSchuld();
	var formulieren  = document.querySelector('.accordeon');
	formulieren.addEventListener('click',handelFormulierenAf,false);
	$('uploadVenster').addEventListener('click',creeernieuweSchuldEiser,false);
},false);

function haalSchuldeiserLijst() {
	var lijstSrc = '/app/schuldeiser/';
	sendRequest(lijstSrc,function(req) {
		if (req.status === 200) {
			creeerSchuldEiserLijst(JSON.parse(req.response));
		}
	});
}

function nieuweSchuld() {
	var wr = document.querySelector('.accordeon');
	var h3 = document.createElement('h3');
	h3.innerText = h3.textContent = 'Nieuwe schuld';
	var div = document.createElement('div');
	div.className = 'container';
	h3.container = div;
	div.header = h3;
	wr.appendChild(h3);
	wr.appendChild(div);
	h3.click();
}

function berekenTotaleSchuld() {
	var schulden  = document.querySelectorAll('h3');
	var totaleSchuld = 0;
	for (var i=0,schuld;schuld=schulden[i];i+=1) {
		var bedrag = (schuld.dataset.schuld*1) || 0;
		totaleSchuld += bedrag;
		var span = schuld.querySelector('span');
		if (!span) {
			span = document.createElement('span');
			schuld.appendChild(span);
		}
		span.innerText = span.textContent = '€ ' + nummerNaarPrint(bedrag)
	}
	$('totaleSchuld').innerText = $('totaleSchuld').textContent = '€ ' + nummerNaarPrint(totaleSchuld);
	
	function nummerNaarPrint(nummer) {
		return nummer.toFixed(2).replace(/\./,',');
	}
}

function nieuwSchuldBedrag() {
	var container = goUp(this,'DIV');
	container.header.dataset.schuld = this.value;
	berekenTotaleSchuld();
	this.onblur = null;
}

function creeernieuweSchuldEiser(e) {
	stuurFormulier(e.target);
	e.preventDefault();
}

var schuldEisersLijst = {},alfabetisch = [];

function creeerSchuldEiserLijst(json) {
	for (var i=0;i<json.length;i+=1) {
		alfabetisch.push(json[i].bedrijfsnaam);
		schuldEisersLijst[json[i].bedrijfsnaam] = {};
		schuldEisersLijst[json[i].bedrijfsnaam].id = json[i].id;
		schuldEisersLijst[json[i].bedrijfsnaam].rekening = json[i].rekening;
	}
	alfabetisch.sort();
	return;
	var dataContainer = document.querySelector('datalist#schuldeiserdata');
	if (dataContainer) {
		for (var i=0,eiser;eiser=schuldEisersLijst[alfabetisch[i]];i+=1) {
			var opt = document.createElement('option');
			opt.setAttribute('label',alfabetisch[i]);
			opt.setAttribute('value',alfabetisch[i]);
			dataContainer.appendChild(opt);
		}
	}
	console.log(dataContainer);
	dataContainer.style.display = 'block';
	dataContainer.style.border = '10px solid red';
	dataContainer.onclick = function (e) {
		console.log(e.target);
	}
}

function handelFormulierenAf(e) {
	var button = e.target;
	if (button.nodeName === 'INPUT' && button.type === 'submit') {
		console.log('Submit formulier');
		stuurFormulier(button);
		e.preventDefault();
	} else if (button.id === "schuldeiserdata" ) {
		if (!button.initialized) {
			horsey(button, {
				source: [{ list: alfabetisch }]
			});
			button.initialized = true;
		}
	} else if (button.name === "schuld_item_form[bedrag]" ) {
		button.onblur = nieuwSchuldBedrag;	
		e.preventDefault();
	} else if (button.classList.contains('verwijderen')) {
		console.log('Verwijder schuld');
		var form = goUp(button,'FORM');
		form.elements['schuld_item_form[verwijderd]'].checked = true;
		stuurFormulier(button);
		e.preventDefault();
	} else if (button.classList.contains('annuleren')) {
		console.log('Annuleer formulier');
		return;		
	}
}

function stuurFormulier(source) {
	var form = goUp(source,'FORM');
	var data = new FormData(form);
	console.log('Zend formulier');
	sendRequest(form.action,function (req) {
//		form.querySelector('.spinnerContainer').style.display = '';
		console.log(req.status);
	},data)
}
})();