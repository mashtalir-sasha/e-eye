$(function() {

	window.onload = function () {
		document.body.classList.add('loaded_hiding');
		window.setTimeout(function () {
			document.body.classList.add('loaded');
			document.body.classList.remove('loaded_hiding');
		}, 500);
	}

    const navHeight = $('.nav').innerHeight()
	$('.mainHeader').css({
		'min-height': 'calc(100vh - '+navHeight+'px)',
	})

    let toggle = document.querySelector('.nav__btn')
	let navMob = document.querySelector('.nav-block')
	let nav = document.querySelector('.nav')
	toggle.addEventListener('click', function(e) {
		this.classList.toggle('open')
		navMob.classList.toggle('open')
	})

	let navLink = document.querySelector('.nav-lang__item')
	let navMenu = document.querySelector('.nav-lang__show')
	navLink.addEventListener('click', function(e) {
		navMenu.classList.toggle('active')
	})

	$('.review-slider').slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		//dots: true,
		arrows: true,
		fade: true
	})

	$('.review-slider_mob').slick({
		infinite: false,
		rows: 2,
		slidesPerRow: 2,
		autoplay: true,
		//dots: true,
		arrows: true,
		fade: true,
		responsive: [
			{
			  breakpoint: 575,
			  settings: {
				slidesPerRow: 1,
			  }
			},
		]
	})

	$('.video-slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			  }
			},
		]
	})

	$('.fancybox').fancybox({
		margin: 0,
		padding: 0,
		touch: false
	})

	// Функция для анимации
	$(".scroll").each(function () {
		var block = $(this)
		$(window).scroll(function() {
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				var top = block.offset().top+300
			} else {
				var top = block.offset().top+300
			}
			var bottom = block.height()+top;
			top = top - $(window).height();
			var scroll_top = $(this).scrollTop();
			if ((scroll_top > top) && (scroll_top < bottom)) {
				if (!block.hasClass("animated")) {
					block.addClass("animated")
					block.trigger('animatedIn')
				}
			}
		})
	})

	// Отправка формы
	$('form').submit(function() {
		let data = $(this).serialize()
		data += '&ajax-request=true'
		$.ajax({
			type: 'POST',
			url: '/mail.php',
			dataType: 'json',
			data: data,
			success: (function() {
				$.fancybox.close()
				$.fancybox.open({src:'#thn'})
			})()
		})
		return false
	})

})
