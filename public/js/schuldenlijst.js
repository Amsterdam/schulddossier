
document.addEventListener("DOMContentLoaded", function(e) {
	schuldenLijst();
},false);

var schuldEisersLijst = {},alfabetisch = [];

function schuldenLijst() {
	var lijstSrc = '/app/schuldeiser/';
	sendRequest(lijstSrc,function(req) {
		if (req.status === 200) {
			creeerSchuldEiserLijst(JSON.parse(req.response));
		}
	});
	berekenTotaleSchuld();
	document.addEventListener('click',handelEventsAf,false);
	document.addEventListener('blur',handelEventsAf,true);
	document.addEventListener('focus',handelEventsAf,true);

	function handelEventsAf(e) {
		var element = e.target;
		var elementID = element.id;
		var type = e.type;
		if (elementID && eventHandlers[elementID] && eventHandlers[elementID][type]) {
//			console.log(elementID + ' ' + type);
			eventHandlers[elementID][type](element);
			e.preventDefault();
		}
	}

	var eventHandlers = {
		'verwijderen': {
			'click': function (element) {
				var form = goUp(element,'FORM');
				form.elements['schuld_item_form[verwijderd]'].checked = true;
				var formData = new FormData(form);
				var schuldEiserVelden = ['schuldeiser','incassant'];
				for (var i=0;i<schuldEiserVelden.length;i+=1) {
					var veldNaam = 'schuld_item_form[' + schuldEiserVelden[i] + ']';
					if (form.elements[veldNaam].value && !controleerSchuldEiserNaam(formData,veldNaam)) {
						handelSchuldeiserFoutAf(form.elements[veldNaam]);
						return;
					}	
				}
				var accordeon = goUp(form,'SECTION');
				stuurFormulier({
					form: form,
					data: formData,
					success: function () {
						accordeon.removeChild(form.container);
						accordeon.removeChild(form.header);					
					}
				});
			},
		},
		'schuldeiserVeld': {
			'click': function (element) {
				if (schuldEisersLijst) {
					var lijst = [];
					for (var i=0,item;item=alfabetisch[i];i+=1) {
						var tmp = {};
						tmp.text = alfabetisch[i];
						tmp.value = schuldEisersLijst[alfabetisch[i]].id;
						lijst.push(tmp);
					}
					horsey(element, {
						source: [{ list: lijst}],
						getText: 'text',
						getValue: 'value',
					});
				}
			},
			'blur': function (element) {
				setTimeout(function () {
					if (!element.value) return;
					if (!schuldEisersLijst[element.value]) {
						handelSchuldeiserFoutAf(element);
					}				
				},200)
			},
			'focus': function (element) {
				var error = element.parentNode.querySelector('p.foutmelding');
				if (error) {
					error.parentNode.removeChild(error);
				}
				element.classList.remove('error');
			},
		},
		'annuleren': {
			'click': function () {
				console.log('Annuleer formulier');
				// nog te schrijven
			},
		},
		'nieuweSchuldeiser': {
			'click': function (element) {
				var form = goUp(element,'FORM');
				var venster = $('uploadVenster');
				form.appendChild(venster);
				var dims = [venster.offsetWidth/2,venster.offsetHeight/2];
				var vp = [form.offsetWidth/2,form.offsetHeight/2];
				venster.style.left = vp[0] - dims[0] + 'px';
				venster.style.top = vp[1] - dims[1] + 'px';
				venster.style.visibility = 'visible';
			},
		},
		'schuld_item_form_bedrag': {
			'blur': function (element) {
				var container = goUp(element,'DIV');
				container.header.dataset.schuld = element.value;
				berekenTotaleSchuld();
			},
		},
		'uploadAnnuleren': {
			'click': function (element) {
				var venster = $('uploadVenster');
				venster.style.visibility = 'hidden';
				var els = goUp(element,'FORM').elements;
				for (var i=0,el;el=els[i];i+=1) {
					if (el.type === 'text') {
						el.value = '';
					}
				}
				var statusMsg = venster.querySelector('.status');
				if (statusMsg) {
					statusMsg.parentNode.removeChild(statusMsg);
				}
				var errors = venster.querySelectorAll('p.foutmelding');
				for (var i=0,error;error=errors[i];i+=1) {
					error.parentNode.removeChild(error);
				}
			},
		},
		'nieuweSchuld': {
			'click': function () {
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
				actiefFormulier = div.querySelector('form');
				submitAanmeldFormulieren(actiefFormulier);
//				actiefFormulier.onsubmit = zendSchuldenFormulier;
				actiefFormulier.container = div;		
				actiefFormulier.header = h3;		
			}
		}
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

	function creeerSchuldEiserLijst(json) {
		for (var i=0;i<json.length;i+=1) {
			alfabetisch.push(json[i].bedrijfsnaam);
			schuldEisersLijst[json[i].bedrijfsnaam] = {};
			schuldEisersLijst[json[i].bedrijfsnaam].id = json[i].id;
			schuldEisersLijst[json[i].bedrijfsnaam].rekening = json[i].rekening;
		}
		alfabetisch.sort();
	}

}

/*
		var fileField = forms[i].querySelectorAll('input[type=file]');
		for (var j=0;j<fileField.length;j+=1) {
			fileField[j].onchange = function () {
				var value = this.value.substring(this.value.lastIndexOf('\\')+1);
				this.form.querySelector('#tekst').innerText = this.form.querySelector('#tekst').textContent = 'Document ' + value + '  bijgevoegd';
				console.log(value);
			}
		} */
	
