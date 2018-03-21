
(function () {
document.addEventListener("DOMContentLoaded", function(e) {
	schuldeiserLijst();
	$('nieuweSchuldeiser').onclick = nieuweSchuldeiser;
	berekenTotaleSchuld();
	var formulieren  = document.querySelector('.accordeon');
	formulieren.addEventListener('click',handelFormulierenAf,false);
},false);

function schuldeiserLijst() {
	console.log('Laadn schuldeiserlijst');
	var lijstSrc = '/app/schuldeiser/';
	
	// laad lijst en stop 'm in variabele
	
	// maak autocorrect/datalist/whatever van schuldeiser-velden
	
}

function nieuweSchuldeiser() {
	var wr = document.querySelector('.accordeon');
	var h3 = document.createElement('h3');
	h3.innerText = h3.textContent = 'Nieuwe schuldeiser';
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

function nieuweSchuld() {
	var container = goUp(this,'DIV');
	container.header.dataset.schuld = this.value;
	berekenTotaleSchuld();
	this.onblur = null;
}

function handelFormulierenAf(e) {
	var button = e.target;
	if (button.nodeName === 'INPUT' && button.type === 'submit') {
		console.log('Submit formulier');
		stuurFormulier(button);
		e.preventDefault();
	} else if (button.name === "schuld_item_form[bedrag]" ) {
		button.onblur = nieuweSchuld;	
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