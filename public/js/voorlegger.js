
window.onload = function () {
	return;
	document.onclick = checkToggle;
	var sections = document.querySelectorAll('section');
	sections.forEach(function (el) {
		toggleSection(el);
	});
}

function checkToggle(e) {
	if (e.target.nodeName === 'INPUT') {
		var section = e.target;
		while (section.nodeName !== 'SECTION') {
			section = section.parentNode;
		}
		toggleSection(section);
	}
}

function toggleSection(section) {
	var toDo = false;
	var radios = section.querySelectorAll('input[type=radio]');
	for (var i=0,radio;radio=radios[i];i+=1) {
		if (radio.checked && radio.value === 'nee') {
			toDo = true;
			break;
		}
	}
	console.log(toDo);
	if (toDo) {
		section.classList.add('tedoen');
	} else {
		section.classList.remove('tedoen');	
	}
	
	
	
}