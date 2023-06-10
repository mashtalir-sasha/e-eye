<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>Розробляємо БПЛА в Україні</title>
	<meta name="description" content="Ми самостійно розвиваємо в Україні ринок БПЛА, співпрацюємо з благодійними фондами, волонтерськими організаціями, державними програмами і приватними інвесторами.">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- <link rel="shortcut icon" href="img/favicon/16.png" type="image/x-icon">
	<link rel="icon" href="/img/favicon/16.png" type="image/x-icon"> 
	<link rel="apple-touch-icon" href="/img/favicon/16.png">
	<link rel="apple-touch-icon" sizes="32x32" href="/img/favicon/32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/72.png">  -->

	<meta name="theme-color" content="#08040E">

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

<div class="preloader">
	<div class="preloader__item">
		<img src="{{ asset('images/logo.svg') }}" alt="logo">
		<p>U-eye</p>
	</div>
	
</div>

<div class="content">

	<header class="header">
		<video class="header__video d-none d-md-block" autoplay muted loop playsinline>
			<source src="{{ asset('files/bgvideo.mp4') }}" type="video/mp4">
		</video>
		<video class="header__video d-md-none" autoplay muted loop playsinline>
			<source src="{{ asset('files/bgvideo_xs.mp4') }}" type="video/mp4">
		</video>

		<nav class="nav">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-md-2 col-6">
						<a href="{{ route('home') }}" class="nav-logo">
							<img src="{{ asset('images/logo.svg') }}" alt="logo" class="nav-logo__img">
							<p class="nav-logo__title">U-eye</p>
						</a>
					</div>
					<div class="col-6 d-md-none">
						<div class="nav__btn">
							<svg viewBox="0 0 100 100">
								<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
								<path class="line line2" d="M 20,50 H 80" />
								<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
							</svg>
						</div>
					</div>
					<div class="col-md-9">
						<div class="nav-block">
							<ul class="nav-list">
								<li class="nav-list__li">
									<a href="{{ route('home') }}">Головна</a>
								</li>
								<li class="nav-list__li">
									<a href="#bpla" class="anchor">БПЛА</a>
								</li>
								<li class="nav-list__li">
									<a href="#use" class="anchor">Використання</a>
								</li>
								<li class="nav-list__li">
									<a href="#about" class="anchor">Про нас</a>
								</li>
								<li class="nav-list__li">
									<a href="#gallery" class="anchor">Галерея</a>
								</li>
								<li class="nav-list__li">
									<a href="#contacts" class="anchor">Контакти</a>
								</li>
							</ul>
							<div class="nav-lang">
								@if(localization()->getCurrentLocale() == 'uk')
									<a class="nav-lang__item active">UA</a>
									<div class="nav-lang__show">
										<a href="{{ localization()->getLocalizedURL('en') }}">EN</a>
									</div>
								@else
									<a class="nav-lang__item active">EN</a>
									<div class="nav-lang__show">
										<a href="{{ localization()->getLocalizedURL('uk') }}">UA</a>
									</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row align-items-sm-center mainHeader">
				<div class="col-md-9 col-lg-7 col-xl-6">
					<div class="header-block">
						<h1 class="header__title">Виробництво і розробка безпілотних літальних апаратів</h1>
						<div>
							<h2 class="header__subtitle">Ми самостійно розвиваємо в Україні ринок БПЛА та співпрацюємо з волонтерськими організаціями, благодійними фондами, державними програмами і приватними інвесторами</h2>
							<a href="#modal1" class="header__btn fancybox"><span>Замовити дрон</span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="benefits scroll">
		<div class="benefits__bg"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<h3 class="benefits__title fadeIn">Наші переваги:</h3>
				</div>
			</div>
		</div>
		<div class="container benefits__wrap">
			<img src="{{ asset('images/benefits_ico1.svg') }}" alt="ico" class="benefits__ico benefits__ico_i1 d-none d-md-block">
			<img src="{{ asset('images/benefits_ico2.svg') }}" alt="ico" class="benefits__ico benefits__ico_i2 d-none d-md-block">

			<img src="{{ asset('images/benefits_elipse.png') }}" alt="dron" class="benefits__elipse fadeIn">
			<img src="{{ asset('images/benefits_elipse2.png') }}" alt="dron" class="benefits__elipse2 fadeIn">
			<img src="{{ asset('images/benefits_img.png') }}" alt="dron" class="benefits__image fadeIn">
			<div class="row">
				<div class="col-md-4">
					<div class="benefits-item benefits-item_i1 fadeIn fadeIn_i1">
						<span class="benefits-item__numb">01</span>
						<p class="benefits-item__text">Невразливість до засобів придушення комерційних дронів типу DJI/Autel (Aeroscope та похідні)</p>
					</div>
					<div class="benefits-item benefits-item_i2 fadeIn fadeIn_i2">
						<span class="benefits-item__numb">02</span>
						<p class="benefits-item__text">Гнучке апаратне забезпечення для передачі інформації з поля бою</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="benefits-item benefits-item_i3 fadeIn fadeIn_i3">
						<span class="benefits-item__numb">03</span>
						<p class="benefits-item__text">Можливість заміни окремих компонентів комплексу в разі їх втрати  (економія до 25% при заміні втраченого дрона)</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="d-flex flex-column">
						<div class="benefits-item benefits-item_i5 order-2 order-md-1 fadeIn fadeIn_i5">
							<span class="benefits-item__numb">05</span>
							<p class="benefits-item__text">Конструювання, виготовлення та ремонт здійснюються в Україні</p>
						</div>
						<div class="benefits-item benefits-item_i4 order-1 order-md-2 fadeIn fadeIn_i4">
							<span class="benefits-item__numb">04</span>
							<p class="benefits-item__text">Технічна підтримка та обслуговування 24/7</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="directions scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="pos-sticky fadeIn">
						<h3 class="directions__title">Напрямки використання</h3>
						<p class="directions__text">Варіативність платформ дозволяє комплектувати наші коптери обладнанням для використання в різних сферах</p>
						<p class="directions__note">Доступна <span>модифікація БПЛА</span> під індивідуальні потреби замовника</p>
						<div class="directions-logo">
							<img src="{{ asset('images/directions_logo.svg') }}" alt="logo" class="directions-logo__logo pulse">
							<img src="{{ asset('images/directions_sircle.svg') }}" alt="logo" class="directions-logo__sircle rotate">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 fadeIn">
					<div class="directions-item">
						<div class="directions-item__title">
							<img src="{{ asset('images/directions_ico1.svg') }}" alt="ico">
							<p>Сили оборони</p>
						</div>
						<div class="directions-item__text">Розроблені у даний момент БПЛА є повноцінними бойовими машинами та можуть виконувати наступні задачі:<ul><li>Розвідка ближнього краю</li><li>Артилерійське коригування у глибині до 10 км</li><li>Вогневе ураження боєприпасами зі спеціальної системи скиду</li></div>
					</div>
					<div class="directions-item">
						<div class="directions-item__title">
							<img src="{{ asset('images/directions_ico2.svg') }}" alt="ico">
							<p>Агросектор</p>
						</div>
						<div class="directions-item__text">Дрон призначенний для оприскування сільськогосподарських угідь та моніторингу їх стану</div>
					</div>
					<div class="directions-item">
						<div class="directions-item__title">
							<img src="{{ asset('images/directions_ico3.svg') }}" alt="ico">
							<p>Служби охорони</p>
						</div>
						<div class="directions-item__text">Охорона стаціонарних та стратегічних об'єктів.<br>Системи повітряного спостереження та моніторингу</div>
					</div>
					<div class="directions-item">
						<div class="directions-item__title">
							<img src="{{ asset('images/directions_ico4.svg') }}" alt="ico">
							<p>Рятувальні служби</p>
						</div>
						<div class="directions-item__text">Розмінування території, моніторинг надзвичайних ситуацій</div>
					</div>
					<div class="directions-item">
						<div class="directions-item__title">
							<img src="{{ asset('images/directions_ico5.svg') }}" alt="ico">
							<p>Промисловий сектор</p>
						</div>
						<div class="directions-item__text">Моніторинг та інспекція промислових об'єктів</div>
					</div>
				</div>
			</div>
			<img src="{{ asset('images/directions_img.svg') }}" alt="img" class="directions__image d-none d-lg-block">
		</div>
	</section>

	<section class="bpla scroll">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-4 col-md-6 order-2 order-md-1 fadeInLeft">
					<p class="bpla__text bpla__text_mini">Наші БПЛА розроблені з урахуванням довготривалих консультацій з представниками різних підрозділів Сил оборони: механізованих, артилерійських, єгерських бригад, бригад морської піхоти, а також операторів ССО ЗСУ.  Відповідно, апарати максимально відповідають побажанням замовників з різних силових структур - розроблені у даний момент БПЛА є повноцінними бойовими машинами, що протестовані досвідченими операторами, які мають досвід бойової роботи і підтвердили придатність апаратів до бойового використання.</p>
				</div>
				<div class="col-lg-5 col-md-6 order-1 order-md-2 fadeInRight">
					<img src="{{ asset('images/bpla_img.svg') }}" alt="bpla" class="bpla__image">
					<p class="bpla__text">Архітектура наших безпілотних комплексів побудована на основі трьох основних компонентів: контролера (пульта керування), літального апарата та додаткових засобів для транспортування (кейс/рюкзак) і подовження польотного ресурсу (резервні акумуляторні батареї, ЗІП тощо). Комплекс є портативним (переноситься однією особою) і в момент поставки містить усе необхідне і налаштоване для зручної роботи програмне забезпечення.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="catalog">
		<div class="container">
			<div class="row align-items-center scroll">
				<div class="col-md-6 fadeIn">
					<img src="{{ asset('images/kruk.png') }}" alt="kruk" class="catalog-item__image">
					<img src="{{ asset('images/kruk_note.svg') }}" alt="kruk" class="catalog-item__note">
					<a href="https://www.youtube.com/watch?v=CWomYft5Sr0" class="catalog-youtube" data-fancybox>
						<img src="{{ asset('images/youtube_btn.svg') }}" alt="youtube" class="catalog-youtube__ico">
						<p class="catalog-youtube__text">дивитись відео</p>
					</a>
				</div>
				<div class="col-lg-5 col-md-6 catalog-item__line fadeIn">
					<h3 class="catalog-item__title">U-Eye Kruk</h3>
					<div class="catalog-item__text">БПЛА-квадрокоптер, призначений для виконання задач артилерійського коригування, спостереження і розвідки у ближній тактичній глибині на відстані до 7-10 км.<br>За рахунок великого діаметру пропелерів і потужної силової установки дрон може виконувати задачі спостереження на висоті понад 300 м, поза межею видимості апарата, що робить БПЛА менш помітним порівняно з аналогічними коптерами для коригування.<br>30-кратна камера та силова установка дрона дозволяють здійснювати спостереження і коригування на висотах до 1500 м.</div>
					<div class="catalog-button">
						<a href="#details1" class="catalog-button__btn catalog-button__btn_first fancybox">Характеристики</a>
						<a href="#modal1" class="catalog-button__btn fancybox">Замовити</a>
					</div>
				</div>
			</div>
			<div class="row align-items-center scroll">
				<div class="col-lg-5 offset-lg-1 col-md-6 order-2 order-md-1 catalog-item__line fadeIn">
					<h3 class="catalog-item__title">U-Eye Shulika</h3>
					<div class="catalog-item__text">Ударний БПЛА-квадрокоптер, розвідник ближнього краю з можливістю спорядження гранатометними боєприпасами ВОГ-17М для роботи по живій силі та не броньованій техніці супротивника. Вертикальне розташування боєприпасів на дроні дозволяє збільшити точність скидання у порівнянні з аналогами. Конструкція системи скиду є не кустарним доповненням, а повноцінною розробленою підсистемою дрона, що забезпечує надійність і зручність у користуванні.</div>
					<div class="catalog-button">
						<a href="#details2" class="catalog-button__btn catalog-button__btn_first fancybox">Характеристики</a>
						<a href="#modal1" class="catalog-button__btn fancybox">Замовити</a>
					</div>
				</div>
				<div class="col-md-6 order-1 order-md-2 fadeIn">
					<img src="{{ asset('images/shulika.png') }}" alt="shulika" class="catalog-item__image">
					<img src="{{ asset('images/shulika_note.svg') }}" alt="kruk" class="catalog-item__note catalog-item__note_i2">
					<a href="#" class="catalog-youtube catalog-youtube_i2">
						<img src="{{ asset('images/youtube_btn.svg') }}" alt="youtube" class="catalog-youtube__ico">
						<p class="catalog-youtube__text">дивитись відео</p>
					</a>
				</div>
			</div>
			<div class="row justify-content-center scroll">
				<div class="col-lg-10 fadeIn">
					<p class="catalog-last__text"><span>Ми надаємо комплексне обслуговування своїх виробів, ремонт та модернізація апаратів здійснюються на власних виробничих потужностях в Україні.</span><br>Дрони є адаптованими під потреби замовника, побудованими на ретельно протестованій платформі з визначеними характеристиками та можуть бути полагоджені і продіагностовані в Україні. Виробники масових комерційних дронів не мають такої гнучкості, яку надаємо ми. Наш ключовий метод вдосконалення виробу - тісна взаємодія із користувачем, націлення не на масові, а індивідуальні потреби.</p>
					<a href="https://docs.google.com/presentation/d/1hBHVwOZELQ_7NSD5f8RERQCbcTQxIbTyH1S0ucXWw8g/edit?usp=drivesdk" target="_blank" class="catalog-last__btn"><span>Подивитись всі характеристики</span></a>
				</div>
			</div>
		</div>
	</section>

	<section class="form scroll">
		<div class="container">
			<img src="{{ asset('images/form_bg.svg') }}" alt="form" class="form__bg fadeIn">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6 fadeIn">
					<img src="{{ asset('images/form_img.png') }}" alt="dron" class="form__img">
				</div>
				<div class="col-lg-5 col-md-6 fadeIn">
					<p class="form__text"><span>Випробування та демонстрація</span> апаратів <span>відбуваються з умовами, необхідними для імітації роботи БПЛА у робочому середовищі,</span> для максимальної відповідності та синхронізації з потребами замовника</p>
				</div>
			</div>
			<div class="row form__wrap fadeIn">
				<div class="col-lg-8 offset-lg-3">
					<h3 class="form__title">Можемо здійснювати виїзди до клієнтів за попередньою домовленостю,  <span>залишайте заявку, ми відповімо на всі запитання!</span></h3>
					<form class="form-content form_check">
					<input type="hidden" name="title" value="Консультація">
						<label class="rline">
							<p>Ваше ім'я:</p>
							<input type="text" class="form-content__input rfield" name="name">
						</label>
						<span class="rline__line"></span>
						<label class="rline">
							<input type="text" class="form-content__input rfield phonefield" name="phone" placeholder="+38 (0__) ___-__-__">
						</label>
						<button type="submit" class="form-content__btn btnsubmit">Відправити</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="about">
		<div class="container">
			<div class="row justify-content-center scroll">
				<div class="col-lg-10 about__wrap">
					<div class="row">
						<div class="col fadeIn">
							<h3 class="about__title">Про нас</h3>
							<p class="about__text"><span>U-Eye виникла як волонтерська ініціатива зі створення БПЛА для розвідки, спостереження і коригування для зростаючих потреб Сил оборони України,</span> що виникли влітку 2022 року. <span>Заснована спеціалістами з експериментального авіа- і ракетобудування,</span> ініціатива займається адаптацією своїх попередніх розробок для використання у найбільш актуальний оборонній галузі. <span>Командою спеціалістів ініціативи була розроблена платформа - БПЛА-квадрокоптер, що могла використовуватись у широкому спектрі задач - від розвідувальних</span> (з використанням належних засобів спостереження) до ударних (для коптера була розроблена спеціальна система скиду боєприпасів).</p>
						</div>
					</div>
					<div class="row scroll">
						<div class="col-md-4 col-sm-6 fadeIn fadeIn_i1">
							<img src="{{ asset('images/about1.jpg') }}" alt="about" class="about__img">
						</div>
						<div class="col-md-4 col-sm-6 fadeIn fadeIn_i3">
						<img src="{{ asset('images/about2.jpg') }}" alt="about" class="about__img">
						</div>
						<div class="col-md-4 col-sm-6 fadeIn fadeIn_i5">
						<img src="{{ asset('images/about3.jpg') }}" alt="about" class="about__img">
						</div>
					</div>
					<div class="row align-items-center scroll">
						<div class="col-md-6 fadeIn fadeIn_i1">
							<img src="{{ asset('images/about_img.png') }}" alt="about" class="about-last__img">
						</div>
						<div class="col-md-6 fadeIn fadeIn_i3">
						<p class="about-last__text">У даний момент ініціатива трансформувалась у повноцінну інженерну команду, що розробляє платформи мультироторного типу для використання у різних галузях промисловості.</p>
						<p class="about-last__text"><span>Після 24.02.2022 ми вирішили зміцнити обороноздатність нашої країни та допомогти нашій армії власноруч розробленими засобами спостереження, коригування та вогневого ураження.</span> Так народився прототип мультироторної платформи, що згодом еволюціонував у бойові коптери - <span>дрони Kruk 1.0 і Shulika 1.0.</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="review">
		<div class="container">
			<div class="row justify-content-center scroll">
				<div class="col-md-10">
					<h3 class="review__title fadeInRight">Огляд БПЛА</h3>
					<div class="review__wrap fadeInRight">
						<p class="review__text">Усе виробництво має адаптивний характер - ми розглядаємо індивідуальний запит замовника і вирішуємо окрему інженерну задачу зі спорядження мультироторної платформи необхідним для роботи обладнанням.</p>
						<img src="{{ asset('images/review_img.svg') }}" alt="review" class="review__img d-none d-sm-block">
					</div>
					<div class="review-content scroll">
						<p class="review-content__text">фото</p>
						<div class="review-slider d-none d-md-block fadeIn">
						@foreach($gallery as $item)
							<div class="review-slider__slide">
								<div class="row">
									<div class="col-md-3">
										<a href="{{ asset($item->image1) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image1, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image1)}}" alt="gallery"></a>
									</div>
									<div class="col-md-3">
										<a href="{{ asset($item->image2) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image2, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image2)}}" alt="gallery"></a>
									</div>
									<div class="col-md-3">
										<a href="{{ asset($item->image3) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image3, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image3)}}" alt="gallery"></a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<a href="{{ asset($item->image4) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image4, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image4)}}" alt="gallery"></a>
									</div>
									<div class="col-md-3">
										<a href="{{ asset($item->image5) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image5, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image5)}}" alt="gallery"></a>
									</div>
									<div class="col-md-3">
										<a href="{{ asset($item->image6) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image6, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image6)}}" alt="gallery"></a>
									</div>
									<div class="col-md-3">
										<a href="{{ asset($item->image6) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image7, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image7)}}" alt="gallery"></a>
									</div>
								</div>
							</div>
						@endforeach
						</div>

						<div class="review-slider_mob d-block d-md-none fadeIn">
						@foreach($gallery as $item)
							<a href="{{ asset($item->image1) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image1, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image1)}}" alt="gallery"></a>
							<a href="{{ asset($item->image2) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image2, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image2)}}" alt="gallery"></a>
							<a href="{{ asset($item->image3) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image3, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image3)}}" alt="gallery"></a>
							<a href="{{ asset($item->image4) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image4, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image4)}}" alt="gallery"></a>
							<a href="{{ asset($item->image5) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image5, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image5)}}" alt="gallery"></a>
							<a href="{{ asset($item->image6) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image6, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image6)}}" alt="gallery"></a>
							<a href="{{ asset($item->image7) }}" data-fancybox="gallery"><img src="/{{ pathinfo($item->image7, PATHINFO_DIRNAME) }}/thumb/{{basename($item->image7)}}" alt="gallery"></a>
							@endforeach
						</div>
					</div>

					<div class="review-content review-content__flex scroll">
						<p class="review-content__text">відео</p>
						<div class="video-slider fadeIn">
						@foreach($videos as $item)
							<div class="video-slider__slide">
								<a href="https://www.youtube.com/watch?v={{ $item->link }}" data-fancybox><img src="https://img.youtube.com/vi/{{ $item->link }}/maxresdefault.jpg" alt="youtbe"></a>
							</div>
						@endforeach
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<section class="form2 scroll">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 offset-lg-1">
					<h3 class="form2__title fadeIn fadeIn_i1">Ми самостійно розвиваємо в Україні ринок мультироторних БПЛА,   співпрацюємо з благодійними фондами, волонтерськими організаціями, державними програмами і приватними інвесторами. <span>Бажаєте співпрацювати? Надсилайте заявку за формою:</span></h3>
					<form class="form-content form_check fadeIn fadeIn_i3">
					<input type="hidden" name="title" value="Заявка на співпрацю">
						<label class="rline">
							<p>Ваше ім'я:</p>
							<input type="text" class="form-content__input rfield" name="name">
						</label>
						<span class="rline__line"></span>
						<label class="rline">
							<input type="text" class="form-content__input rfield phonefield" name="phone" placeholder="+38 (0__) ___-__-__">
						</label>
						<button type="submit" class="form-content__btn btnsubmit">Відправити</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer class="foot">
		<div class="container">
			<div class="row justify-content-between align-items-end">
				<div class="col-lg-9">
					<ul class="foot-menu">
						<li class="foot-menu__item">
							<a href="#">Головна</a>
						</li>
						<li class="foot-menu__item">
							<a href="#">БПЛА</a>
						</li>
						<li class="foot-menu__item">
							<a href="#">Використання</a>
						</li>
						<li class="foot-menu__item">
							<a href="#">Про нас</a>
						</li>
						<li class="foot-menu__item">
							<a href="#">Галерея</a>
						</li>
						<li class="foot-menu__item">
							<a href="#">Контакти</a>
						</li>
					</ul>
					<div class="foot__wrap">
						<div class="foot-item">
							<img src="{{ asset('images/foot_addr.svg') }}" alt="addr">
							<p>Україна м.Київ</p>
						</div>
						<a href="tel:+380676340919" class="foot-item">
							<img src="{{ asset('images/foot_phone.svg') }}" alt="addr">
							<p>+380676340919</p>
						</a>
						<a href="tel:+380969603434" class="foot-item">
							<img src="{{ asset('images/foot_phone.svg') }}" alt="addr">
							<p>+380969603434</p>
						</a>
						<a href="mailto:u.eye.aero@gmail.com" class="foot-item">
							<img src="{{ asset('images/foot_email.svg') }}" alt="addr">
							<p>u.eye.aero@gmail.com</p>
						</a>
					</div>
					<form class="form-content form_check">
						<input type="hidden" name="title" value="Напишіть нам">
						<label class="rline">
							<p>Напишіть нам</p>
							<span class="rline__line"></span>
							<input type="text" class="form-content__input rfield" name="email" placeholder="Ваш e-mail">
						</label>
						<button type="submit" class="form-content__btn btnsubmit">Відправити</button>
					</form>
				</div>
				<div class="col-lg-2">
					<p class="foot-soc__title">Соціальні мережі</p>
					<div class="foot-soc">
						<a href="#" class="foot-soc__link">
							<img src="{{ asset('images/facebook.svg') }}" alt="facebook">
						</a>
						<a href="https://instagram.com/u.eye.aero" class="foot-soc__link">
							<img src="{{ asset('images/instagram.svg') }}" alt="instagram">
						</a>
						<a href="https://www.youtube.com/@U-Eye" class="foot-soc__link">
							<img src="{{ asset('images/youtube.svg') }}" alt="youtube">
						</a>
						<a href="https://twitter.com/UEyeAero" class="foot-soc__link">
							<img src="{{ asset('images/twiter.svg') }}" alt="twiter">
						</a>
						<!-- <a href="#" class="foot-soc__link">
							<img src="{{ asset('images/tiktok.svg') }}" alt="tiktok">
						</a> -->
					</div>
					<a href="https://wamp.com.ua/" rel="nofollow" target="_blank" class="dev">
						<p class="dev__text">Розробка сайту:</p>
						<img src="{{ asset('images/dev_logo.svg') }}" alt="wamp" class="dev__ico">
					</a>
				</div>
			</div>
		</div>
	</footer>
	
	<footer class="cprt">
		<p class="cprt__text">Всі права захищено. Україна, Київ © {{ date('Y') }}.</p>
	</footer>
	
</div>

<div class="d-none">
	<div id="details1" class="details">
		<div class="details__wrap">
			<h3 class="details__title">Загальні характеристики Kruk</h3>
			<table class="details-table">
				<tr>
					<td>Маса (з наванттаженням, 30x оптика)</td>
					<td>3.6 кг</td>
				</tr>
				<tr>
					<td>Корисне навантаження</td>
					<td>1 кг</td>
				</tr>
				<tr>
					<td>Час польоту</td>
					<td>32 хв</td>
				</tr>
				<tr>
					<td>Час зарядки акумулятора 5000 mAh (НОТА D6pro, 5A)</td>
					<td>65 хв</td>
				</tr>
				<tr>
					<td>Роздільна здантість зйомки</td>
					<td>FullHD 1080р</td>
				</tr>
				<tr>
					<td>Оптичний зум</td>
					<td>10х</td>
				</tr>
				<tr>
					<td>Гібрідний зум</td>
					<td>30х</td>
				</tr>
				<tr>
					<td>ПЗ керування</td>
					<td>QGroundControl (open source)/SIYI FPV</td>
				</tr>
				<tr>
					<td>Бойовий радіус</td>
					<td>7 км</td>
				</tr>
				<tr>
					<td>Максимална швідість польоту</td>
					<td>20 м/с (72 км/год)</td>
				</tr>
			</table>
		</div>
		
	</div>

	<div id="details2" class="details">
		<div class="details__wrap">
			<h3 class="details__title">Загальні характеристики Shulika</h3>
			<table class="details-table">
				<tr>
					<td>Маса (з наванттаженням, камера+2 ВОГ -17М)</td>
					<td>4.2 кг</td>
				</tr>
				<tr>
					<td>Корисне навантаження</td>
					<td>1 кг</td>
				</tr>
				<tr>
					<td>Час польоту</td>
					<td>25 хв</td>
				</tr>
				<tr>
					<td>Час зарядки акумулятора батарії 2x3700 mAh (НОТА D6pro, 2x3.7A)</td>
					<td>65 хв</td>
				</tr>
				<tr>
					<td>Роздільна здантість зйомки</td>
					<td>720р</td>
				</tr>
				<tr>
					<td>Можливість стрімінгу</td>
					<td>Так</td>
				</tr>
				<tr>
					<td>ПЗ керування</td>
					<td>QGroundControl SIYI FPV (Andriod)</td>
				</tr>
				<tr>
					<td>Бойовий радіус</td>
					<td>5 км</td>
				</tr>
				<tr>
					<td>Максимална швідість польоту</td>
					<td>15 м/с (54 км/год)</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="modal1" class="modal">
		<div class="modal__wrap">
			<img src="{{ asset('images/modal_bpla.svg') }}" alt="bpla" class="modal__ico">
			<div class="modal-content">
				<img src="{{ asset('images/modal_img.svg') }}" alt="bpla" class="modal-content__img">
				<p class="modal-content__text">Ми робимо бойові БПЛА під кожні потреби та об’єми індивідуально</p>
			</div>
			<h3 class="modal__title">Залишіть ваш контактий номер та ми проговоримо ціну та терміни виготовлення</h3>
			<form class="form-content form_check">
				<input type="hidden" name="title" value="Обговорити ціну та терміни">
				<label class="rline">
					<p>Ваше ім'я:</p>
					<input type="text" class="form-content__input rfield" name="name">
				</label>
				<span class="rline__line"></span>
				<label class="rline">
					<input type="text" class="form-content__input rfield phonefield" name="phone" placeholder="+38 (0__) ___-__-__">
				</label>
				<button type="submit" class="form-content__btn btnsubmit">Відправити</button>
			</form>
		</div>
	</div>

	<div id="thn" class="thn">
		<h3>Дякуємо! Заявка відправлена!</h3>
		<p>Ми з вами зв'яжемось найюлижчим часом.</p>
	</div>
</div>



<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>