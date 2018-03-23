

document.addEventListener("DOMContentLoaded", function(e) {
	schuldenLijst();
},false);

function schuldenLijst() {

	var actiefFormulier;
	var lijstSrc = '/app/schuldeiser/';
	sendRequest(lijstSrc,function(req) {
		if (req.status === 200) {
			creeerSchuldEiserLijst(JSON.parse(req.response));
		}
	});
	berekenTotaleSchuld();
	var formulieren  = document.querySelector('.accordeon');
	document.addEventListener('click',handelEventsAf,false);
	document.addEventListener('blur',handelEventsAf,true);

	function handelEventsAf(e) {
		var element = e.target;
		var elementID = element.id;
		var type = e.type;
		if (elementID && eventHandlers[elementID] && eventHandlers[elementID][type]) {
			eventHandlers[elementID][type](element);
			e.preventDefault();
		}
	}

	var eventHandlers = {
		'opslaan': {
			'click': function (element) {
				stuurFormulier(element);		
			},
		},
		'schuldeiserVeld': {
			'click': function (element) {
				if (!element.initialized) {
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
					element.initialized = true;
				}
			},
			'blur': function (element) {
				if (!schuldEisersLijst[element.value]) {
					console.log('Schuldeiser bestaat niet!');
					// doe iets
				}				
			}
		},
		'verwijderen': {
			'click': function (element) {
				var form = goUp(element,'FORM');
				form.elements['schuld_item_form[verwijderd]'].checked = true;
				var accordeon = goUp(form,'SECTION');
				stuurFormulier(element,function () {
					console.log('Schuld verwijderd');
					accordeon.removeChild(form.container);
					accordeon.removeChild(form.header);
				});
			},
		},
		'annuleren': {
			'click': function () {
				console.log('Annuleer formulier');
				// nog te schrijven
			},
		},
		'nieuweSchuldeiser': {
			'click': function () {
				var venster = $('uploadVenster');
				var dims = [venster.offsetWidth/2,venster.offsetHeight/2];
				var vp = [document.documentElement.clientWidth/2,document.documentElement.clientHeight/2];
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
				$('uploadVenster').style.visibility = 'hidden';
				var els = goUp(element,'FORM').elements;
				for (var i=0,el;el=els[i];i+=1) {
					if (el.type === 'text') {
						el.value = '';
					}
				}
			},
		},
		'uploadAanmaken': {
			'click': function (element) {
				stuurFormulier(element,function (req) {
					console.log(req);
					$('uploadVenster').style.visibility = 'hidden';
					var velden = $('uploadVenster').querySelectorAll('input');
					var nieuweSchuldEiser = velden[0].value;
					actiefFormulier.elements['schuld_item_form[schuldeiser]'].value = velden[0].value;
					for (var i=0;i<velden.length;i+=1) {
						velden[i].value = '';
					}
				});		
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

	function stuurFormulier(source,fn) {
		var form = goUp(source,'FORM');
		var data = new FormData(form);
		var schuldEiserNaam = data.getAll('schuld_item_form[schuldeiser]');
		if (schuldEiserNaam) {
			var ID = schuldEiserNaam.join('') && schuldEisersLijst[schuldEiserNaam.join('')].id;
			if (ID) {
				data.set('schuld_item_form[schuldeiser]',ID);
			}
		}
		console.log('Zend formulier');
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
		sendRequest(form.action,function (req) {
			spinner.style.display = '';
			console.log(req.status);
			if (fn) {
				fn(req);
			}
		},data)
	}

}