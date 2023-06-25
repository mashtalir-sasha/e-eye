<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="utf-8">
	<title>{{ trans('main.title') }}</title>
	<meta name="description" content="{{ trans('main.description') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="{{ asset('images/favicon/16.png') }}" type="image/x-icon">
	<link rel="icon" href="{{ asset('images//favicon/16.png') }}" type="image/x-icon"> 
	<link rel="apple-touch-icon" href="{{ asset('images/favicon/16.png') }}">
	<link rel="apple-touch-icon" sizes="32x32" href="{{ asset('images/favicon/32.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon/72.png') }}"> 

	<meta name="theme-color" content="#08040E">

	<link rel="stylesheet" href="{{ mix('/css/main.css') }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta property="og:title" content="{{ trans('main.title') }}">
	<meta property="og:description" content="{{ trans('main.description') }}">
	<meta property="og:type" content="website">
	<meta property="og:url" content="{{ Request::url() }}">
	<meta property="og:image" content="{{ asset('images/preload.jpg') }}">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WZHF6K7');</script>
	<!-- End Google Tag Manager -->


</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZHF6K7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
									<a href="{{ route('home') }}">{{ trans('main.menu1') }}</a>
								</li>
								<li class="nav-list__li">
									<a href="#bpla" class="anchor">{{ trans('main.menu2') }}</a>
								</li>
								<li class="nav-list__li">
									<a href="#use" class="anchor">{{ trans('main.menu3') }}</a>
								</li>
								<li class="nav-list__li">
									<a href="#about" class="anchor">{{ trans('main.menu4') }}</a>
								</li>
								<li class="nav-list__li">
									<a href="#gallery" class="anchor">{{ trans('main.menu5') }}</a>
								</li>
								<li class="nav-list__li">
									<a href="#contacts" class="anchor">{{ trans('main.menu6') }}</a>
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
						<h1 class="header__title">{{ Helpers::getLangString($main, 'title') }}</h1>
						<div>
							<h2 class="header__subtitle">{{ Helpers::getLangString($main, 'text') }}</h2>
							<a href="#modal1" class="header__btn fancybox"><span>{{ trans('main.main_btn') }}</span></a>
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
					<h3 class="benefits__title fadeIn">{{ trans('main.benefits_title') }}</h3>
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
						<p class="benefits-item__text">{{ Helpers::getLangString($benefit, 'item1') }}</p>
					</div>
					<div class="benefits-item benefits-item_i2 fadeIn fadeIn_i2">
						<span class="benefits-item__numb">02</span>
						<p class="benefits-item__text">{{ Helpers::getLangString($benefit, 'item2') }}</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="benefits-item benefits-item_i3 fadeIn fadeIn_i3">
						<span class="benefits-item__numb">03</span>
						<p class="benefits-item__text">{{ Helpers::getLangString($benefit, 'item3') }}</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="d-flex flex-column">
						<div class="benefits-item benefits-item_i5 order-2 order-md-1 fadeIn fadeIn_i5">
							<span class="benefits-item__numb">05</span>
							<p class="benefits-item__text">{{ Helpers::getLangString($benefit, 'item5') }}</p>
						</div>
						<div class="benefits-item benefits-item_i4 order-1 order-md-2 fadeIn fadeIn_i4">
							<span class="benefits-item__numb">04</span>
							<p class="benefits-item__text">{{ Helpers::getLangString($benefit, 'item4') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="use" class="directions scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="pos-sticky fadeIn">
						<h3 class="directions__title">{{ trans('main.directions_title') }}</h3>
						<p class="directions__text">{{ trans('main.directions_text1') }}</p>
						<p class="directions__note">{!! trans('main.directions_text2') !!}</p>
						<div class="directions-logo">
							<img src="{{ asset('images/directions_logo2.svg') }}" alt="logo" class="directions-logo__logo pulse">
							<img src="{{ asset('images/directions_sircle2.svg') }}" alt="logo" class="directions-logo__sircle rotate">
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 fadeIn">
					@foreach($directions as $item)
					<div class="directions-item">
						<div class="directions-item__title">
							<img src="{{ asset($item->ico) }}" alt="ico">
							<p>{{ Helpers::getLangString($item, 'title') }}</p>
						</div>
						<div class="directions-item__text">{!! Helpers::getLangString($item, 'text') !!}</div>
					</div>
					@endforeach
				</div>
			</div>
			<img src="{{ asset('images/directions_img.svg') }}" alt="img" class="directions__image d-none d-lg-block">
		</div>
	</section>

	<section id="bpla" class="bpla scroll">
		<div class="container">
			<div class="row justify-content-around">
				<div class="col-lg-4 col-md-6 order-2 order-md-1 fadeInLeft">
					<p class="bpla__text bpla__text_mini">{{ Helpers::getLangString($bpla, 'text1') }}</p>
				</div>
				<div class="col-lg-5 col-md-6 order-1 order-md-2 fadeInRight">
					@if(app()->getLocale() == 'uk')
						<img src="{{ asset('images/bpla_img.svg') }}" alt="bpla" class="bpla__image">
					@else
						<img src="{{ asset('images/uavs.svg') }}" alt="bpla" class="bpla__image">
					@endif
					<p class="bpla__text">{{ Helpers::getLangString($bpla, 'text2') }}</p>
				</div>
			</div>
		</div>
	</section>

	<section class="catalog">
		<div class="container">
			@foreach($catalog as $item)
				@if( $loop->iteration % 2 === 0 )
				<div class="row align-items-center scroll">
				<div class="col-lg-5 offset-lg-1 col-md-6 order-2 order-md-1 catalog-item__line fadeIn">
					<h3 class="catalog-item__title">{{ Helpers::getLangString($item, 'title') }}</h3>
					<div class="catalog-item__text">{!! Helpers::getLangString($item, 'text') !!}</div>
					<div class="catalog-button">
						<a href="#details{{ $item->id }}" class="catalog-button__btn catalog-button__btn_first fancybox">{{ trans('main.catalog_btn2') }}</a>
						<a href="#modal1" class="catalog-button__btn fancybox">{{ trans('main.catalog_btn3') }}</a>
					</div>
				</div>
				<div class="col-md-6 order-1 order-md-2 fadeIn">
					<img src="{{ asset($item->image) }}" alt="shulika" class="catalog-item__image">
					@if( isset($item->photo) )
						<img src="{{ asset($item->photo) }}" alt="kruk" class="catalog-item__note catalog-item__note_i2">
					@endif
					@if( isset($item->video) )
						<a href="{{ $item->video }}" class="catalog-youtube catalog-youtube_i2" data-fancybox>
							<img src="{{ asset('images/youtube_btn.svg') }}" alt="youtube" class="catalog-youtube__ico">
							<p class="catalog-youtube__text">{{ trans('main.catalog_btn1') }}</p>
						</a>
					@endif
				</div>
			</div>
				@else
				<div class="row align-items-center scroll">
					<div class="col-md-6 fadeIn">
						<img src="{{ asset($item->image) }}" alt="kruk" class="catalog-item__image">
						@if( isset($item->photo) )
							<img src="{{ asset($item->photo) }}" alt="kruk" class="catalog-item__note">
						@endif
						@if( isset($item->video) )
							<a href="{{ $item->video }}" class="catalog-youtube" data-fancybox>
								<img src="{{ asset('images/youtube_btn.svg') }}" alt="youtube" class="catalog-youtube__ico">
								<p class="catalog-youtube__text">{{ trans('main.catalog_btn1') }}</p>
							</a>
						@endif
					</div>
					<div class="col-lg-5 col-md-6 catalog-item__line fadeIn">
						<h3 class="catalog-item__title">{{ Helpers::getLangString($item, 'title') }}</h3>
						<div class="catalog-item__text">{!! Helpers::getLangString($item, 'text') !!}</div>
						<div class="catalog-button">
							<a href="#details{{ $item->id }}" class="catalog-button__btn catalog-button__btn_first fancybox">{{ trans('main.catalog_btn2') }}</a>
							<a href="#modal1" class="catalog-button__btn fancybox">{{ trans('main.catalog_btn3') }}</a>
						</div>
					</div>
				</div>
				@endif
			@endforeach
			<div class="row justify-content-center scroll">
				<div class="col-lg-10 fadeIn">
					<p class="catalog-last__text"><span>{{ Helpers::getLangString($after, 'text1') }}</span><br>{{ Helpers::getLangString($after, 'text2') }}</p>
					<a href="{{ Helpers::getLangString($after, 'link') }}" target="_blank" class="catalog-last__btn"><span>{{ trans('main.uav-last_btn') }}</span></a>
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
					<p class="form__text">{!! trans('main.form_text1') !!}</p>
				</div>
			</div>
			<div class="row form__wrap fadeIn">
				<div class="col-lg-8 offset-lg-3">
					<h3 class="form__title">{!! trans('main.form_text2') !!}</h3>
					<form class="form-content form_check" autocomplete="false">
					<input type="hidden" name="title" value="{{ trans('main.form1') }}">
						<label class="rline">
							<p>{{ trans('main.name') }}</p>
							<input type="text" class="form-content__input rfield" name="name">
						</label>
						<span class="rline__line"></span>
						<label class="rline">
							<input type="text" class="form-content__input rfield" name="phone" placeholder="{{ trans('main.placeholder') }}">
						</label>
						<button type="submit" class="form-content__btn btnsubmit">{{ trans('main.submit') }}</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section id="about" class="about">
		<div class="container">
			<div class="row justify-content-center scroll">
				<div class="col-lg-10 about__wrap">
					<div class="row">
						<div class="col fadeIn">
							<h3 class="about__title">{{ trans('main.about_title') }}</h3>
							<div class="about__text">{!! Helpers::getLangString($about, 'text1') !!}</div>
						</div>
					</div>
					<div class="row scroll">
						@foreach($about->images as $item)
						@if($loop->iteration == 1 || $loop->iteration == 4)
						<div class="col-md-4 col-sm-6 fadeIn fadeIn_i1">
						@elseif($loop->iteration == 2 || $loop->iteration == 5)
						<div class="col-md-4 col-sm-6 fadeIn fadeIn_i3">
						@elseif($loop->iteration == 3 || $loop->iteration == 6)
						<div class="col-md-4 col-sm-6 fadeIn fadeIn_i5">
						@else
						<div class="col-md-4 col-sm-6 fadeIn fadeIn_i1">
						@endif
							<img src="{{ asset($item) }}" alt="about" class="about__img">
						</div>
						@endforeach
					</div>
					<div class="row align-items-center scroll">
						<div class="col-md-6 fadeIn fadeIn_i1">
							<img src="{{ asset('images/about_img.png') }}" alt="about" class="about-last__img">
						</div>
						<div class="col-md-6 fadeIn fadeIn_i3">
						<div class="about-last__text">{!! Helpers::getLangString($about, 'text2') !!}</div>
						<div class="about-last__text">{!! Helpers::getLangString($about, 'text3') !!}</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="gallery" class="review">
		<div class="container">
			<div class="row justify-content-center scroll">
				<div class="col-md-10">
					<h3 class="review__title fadeInRight">{{ trans('main.review_title') }}</h3>
					<div class="review__wrap fadeInRight">
						<p class="review__text">{{ trans('main.review_text') }}</p>
						<img src="{{ asset('images/review_img.svg') }}" alt="review" class="review__img d-none d-sm-block">
					</div>
					<div class="review-content scroll">
						<p class="review-content__text">{{ trans('main.photo') }}</p>
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
						<p class="review-content__text">{{ trans('main.video') }}</p>
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
					<h3 class="form2__title fadeIn fadeIn_i1">{!! trans('main.form2_text') !!}</span></h3>
					<form class="form-content form_check fadeIn fadeIn_i3" autocomplete="false">
					<input type="hidden" name="title" value="{{ trans('main.form2') }}">
						<label class="rline">
							<p>{{ trans('main.name') }}</p>
							<input type="text" class="form-content__input rfield" name="name">
						</label>
						<span class="rline__line"></span>
						<label class="rline">
							<input type="text" class="form-content__input rfield" name="phone" placeholder="{{ trans('main.placeholder') }}">
						</label>
						<button type="submit" class="form-content__btn btnsubmit">{{ trans('main.submit') }}</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer id="contacts" class="foot">
		<div class="container">
			<div class="row justify-content-between align-items-end">
				<div class="col-lg-9">
					<ul class="foot-menu">
						<li class="foot-menu__item">
							<a href="#">{{ trans('main.menu1') }}</a>
						</li>
						<li class="foot-menu__item">
							<a href="#bpla" class="anchor">{{ trans('main.menu2') }}</a>
						</li>
						<li class="foot-menu__item">
							<a href="#use" class="anchor">{{ trans('main.menu3') }}</a>
						</li>
						<li class="foot-menu__item">
							<a href="#about" class="anchor">{{ trans('main.menu4') }}</a>
						</li>
						<li class="foot-menu__item">
							<a href="#gallery" class="anchor">{{ trans('main.menu5') }}</a>
						</li>
						<li class="foot-menu__item">
							<a href="#contacts" class="anchor">{{ trans('main.menu6') }}</a>
						</li>
					</ul>
					<div class="foot__wrap">
						<div class="foot-item">
							<img src="{{ asset('images/foot_addr.svg') }}" alt="addr">
							<p>{{ Helpers::getLangString($contact, 'address') }}</p>
						</div>
						<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone1']) }}" class="foot-item">
							<img src="{{ asset('images/foot_phone.svg') }}" alt="addr">
							<p>{{ $contact->phone1 }}</p>
						</a>
						@if( isset($contact->phone2) )
						<a href="tel:+{{ preg_replace('~[^0-9]~','',$contact['phone2']) }}" class="foot-item">
							<img src="{{ asset('images/foot_phone.svg') }}" alt="addr">
							<p>{{ $contact->phone2 }}</p>
						</a>
						@endif
						<a href="mailto:{{ $contact->email }}" class="foot-item">
							<img src="{{ asset('images/foot_email.svg') }}" alt="addr">
							<p>{{ $contact->email }}</p>
						</a>
					</div>
					<form class="form-content form_check" autocomplete="false">
						<input type="hidden" name="title" value="{{ trans('main.form3') }}">
						<label class="rline">
							<p>{{ trans('main.contact_form') }}</p>
							<span class="rline__line"></span>
							<input type="text" class="form-content__input rfield" name="email" placeholder="{{ trans('main.email') }}">
						</label>
						<button type="submit" class="form-content__btn btnsubmit">{{ trans('main.submit') }}</button>
					</form>
				</div>
				<div class="col-lg-2">
					<p class="foot-soc__title">{{ trans('main.soc') }}</p>
					<div class="foot-soc">
						@if( isset($contact->facebook) )
						<a href="{{ $contact->facebook }}" target="_blank" class="foot-soc__link">
							<img src="{{ asset('images/facebook.svg') }}" alt="facebook">
						</a>
						@endif
						@if( isset($contact->instagram) )
						<a href="{{ $contact->instagram }}" target="_blank" class="foot-soc__link">
							<img src="{{ asset('images/instagram.svg') }}" alt="instagram">
						</a>
						@endif
						@if( isset($contact->youtube) )
						<a href="{{ $contact->youtube }}" target="_blank" class="foot-soc__link">
							<img src="{{ asset('images/youtube.svg') }}" alt="youtube">
						</a>
						@endif
						@if( isset($contact->twiter) )
						<a href="{{ $contact->twiter }}" target="_blank" class="foot-soc__link">
							<img src="{{ asset('images/twiter.svg') }}" alt="twiter">
						</a>
						@endif
						@if( isset($contact->tiktok) )
						<a href="{{ $contact->tiktok }}" class="foot-soc__link">
							<img src="{{ asset('images/tiktok.svg') }}" alt="tiktok">
						</a>
						@endif
					</div>
					<a href="https://wamp.com.ua/" rel="nofollow" target="_blank" class="dev">
						<p class="dev__text">{{ trans('main.dev') }}</p>
						<img src="{{ asset('images/dev_logo.svg') }}" alt="wamp" class="dev__ico">
					</a>
				</div>
			</div>
		</div>
	</footer>
	
	<footer class="cprt">
		<p class="cprt__text">{{ trans('main.cprt') }} © {{ date('Y') }}.</p>
	</footer>
	
</div>

<div class="d-none">
	@foreach($catalog as $item)
	<div id="details{{ $item->id }}" class="details">
		<div class="details__wrap">
			<h3 class="details__title">{{ trans('main.details_title') }} {{ $item->title }}</h3>
			<table class="details-table">
			@if( app()->getLocale() == 'uk')
			@foreach( json_decode($item->list) as $item )
				<tr>
					<td>{{ $item->key }}</td>
					<td>{{ $item->value }}</td>
				</tr>
			@endforeach
			@else
			@foreach( json_decode($item->listEN) as $item )
				<tr>
					<td>{{ $item->key }}</td>
					<td>{{ $item->value }}</td>
				</tr>
			@endforeach
			@endif
			</table>
		</div>
	</div>
	@endforeach

	<div id="modal1" class="modal">
		<div class="modal__wrap">
			@if(app()->getLocale() == 'uk')
			<img src="{{ asset('images/modal_bpla.svg') }}" alt="bpla" class="modal__ico">
			@else
			<img src="{{ asset('images/modal_bpla2.svg') }}" alt="bpla" class="modal__ico">
			@endif
			<div class="modal-content">
				<img src="{{ asset('images/modal_img.svg') }}" alt="bpla" class="modal-content__img">
				<p class="modal-content__text">{{ trans('main.modal_title') }}</p>
			</div>
			<h3 class="modal__title">{{ trans('main.modal_text') }}</h3>
			<form class="form-content form_check" autocomplete="false">
				<input type="hidden" name="title" value="{{ trans('main.form4') }}">
				<label class="rline">
					<p>{{ trans('main.name') }}</p>
					<input type="text" class="form-content__input rfield" name="name">
				</label>
				<span class="rline__line"></span>
				<label class="rline">
					<input type="text" class="form-content__input rfield" name="phone" placeholder="{{ trans('main.placeholder') }}">
				</label>
				<button type="submit" class="form-content__btn btnsubmit">{{ trans('main.submit') }}</button>
			</form>
		</div>
	</div>

	<div id="thn" class="thn">
		<h3>{{ trans('main.thn_title') }}</h3>
		<p>{{ trans('main.thn_text') }}</p>
	</div>
</div>



<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>