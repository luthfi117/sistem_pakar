large();
var siji;
var loro;
var telu;
var papat;
var limo;
var enem;
var pitu;
var wolu;
var songo;
var sepuluh;

$(document).ready(function() {
	$('.dua').hide()
	$('.tiga').hide()
	$('.empat').hide()
	$('.lima').hide()
	$('.enam').hide()
	$('.tujuh').hide()
	$('.delapan').hide()
	$('.sembilan').hide()
	$('.sepuluh').hide()


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

	$('.submit_empat').click(function() {
		$('.tiga').hide()
		new WOW().init()
		$('.empat').show()
	})

	$('.submit_lima').click(function() {
		$('.empat').hide()
		new WOW().init()
		$('.lima').show()
	})

	$('.submit_enam').click(function() {
		$('.lima').hide()
		new WOW().init()
		$('.enam').show()
	})

	$('.submit_tujuh').click(function() {
		$('.enam').hide()
		new WOW().init()
		$('.tujuh').show()
	})

	$('.submit_delapan').click(function() {
		$('.tujuh').hide()
		new WOW().init()
		$('.delapan').show()
	})

	$('.submit_sembilan').click(function() {
		$('.delapan').hide()
		new WOW().init()
		$('.sembilan').show()
	})

	$('.submit_sepuluh').click(function() {
		$('.sembilan').hide()
		new WOW().init()
		$('.sepuluh').show()
	})
})

function large() {
	width = window.innerWidth;
        height = window.innerHeight;
        target = {x: 0, y: height};

        largeHeader = document.getElementById('large-header');
        largeHeader.style.height = height+'px';
}