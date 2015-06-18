large();
$(document).ready(function() {
	$('.dua').hide()
	$('.first').click(function() {
		$('.satu').hide()
		new WOW().init()
		$('.dua').show()
	})
})

function large() {
	width = window.innerWidth;
        height = window.innerHeight;
        target = {x: 0, y: height};

        largeHeader = document.getElementById('large-header');
        largeHeader.style.height = height+'px';
}