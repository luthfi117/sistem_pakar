large();

$(document).ready(function() {
	$('.satu').hide()
	$('.dua').hide()
	$('.tiga').hide()
	$('.empat').hide()
	$('.lima').hide()
	$('.enam').hide()
	$('.tujuh').hide()
	$('.delapan').hide()
	$('.sembilan').hide()
	$('.sepuluh').hide()

	$('.submit_awal').click(function() {
		$('.awal').hide()
		new WOW().init()
		$('.satu').show()
	})

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
		$('.tiga').hide()
		new WOW().init()
		$('.empat').show()
	})

	$('.submit_empat').click(function() {
		$('.empat').hide()
		new WOW().init()
		$('.lima').show()
	})

	$('.submit_lima').click(function() {
		$('.lima').hide()
		new WOW().init()
		$('.enam').show()
	})

	$('.submit_enam').click(function() {
		$('.enam').hide()
		new WOW().init()
		$('.tujuh').show()
	})

	$('.submit_tujuh').click(function() {
		$('.tujuh').hide()
		new WOW().init()
		$('.delapan').show()
	})

	$('.submit_delapan').click(function() {
		$('.delapan').hide()
		new WOW().init()
		$('.sembilan').show()
	})

	$('.submit_sembilan').click(function() {
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