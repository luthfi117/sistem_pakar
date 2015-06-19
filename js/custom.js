large();
var siji;
var loro;
var telu;
var papat;
var limo;
var enam;
var tujuh;
var delapan;
var sembilan;
var sepuluh;

$(document).ready(function() {
	$('.dua').hide()
	$('.tiga').hide()

	$('.submit_satu').click(function() {
		$('.satu').hide()
		new WOW().init()
		$('.dua').show()
	})

	$('.submit_dua').click(function() {
		$('.dua').hide()
		new WOW().init()
		$('.tiga').show()
	})


	$('.submit_tiga').click(function() {
		$('.dua').hide()
		new WOW().init()
		$('.tiga').show()
	})

})

function large() {
	width = window.innerWidth;
        height = window.innerHeight;
        target = {x: 0, y: height};

        largeHeader = document.getElementById('large-header');
        largeHeader.style.height = height+'px';
}