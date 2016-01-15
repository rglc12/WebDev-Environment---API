function addSelected(elem) {
	elem.className = ele.className + " selected";
}

function removeSelected(elem) {
	elem.className.replace(/\bselected\b/, '');
}

function toggleItem(elem) {
	for (var i = 0; i < elem.length; i++) {
		elem[i].addEventListener("click", function(e) {
			var current = this;
			for (var i = 0; i < elem.length; i++) {
				if (current != elem[i]) {
					elem[i].classList.remove('selected');
				} else if (current.classList.contains('selected') === true) {
					current.classList.remove('selected');
				} else {
					current.classList.add('selected')
				}
			}
			e.preventDefault();
		});
	}
}
toggleItem(document.querySelectorAll('li'));