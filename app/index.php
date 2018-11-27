<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>ЖК Чистая Слобода</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.jpg">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	<!-- <script src="https://maps.api.2gis.ru/2.0/loader.js?lazy=true"></script> -->
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#fff">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<header class="header">
		<div class="header__top">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="header__top-logo">
							<img class="header__top-logo-img" src="img/logo-chsloboda.png" alt="">
							<img class="header__top-logo-img" src="img/logo-kva-black-bg-none.png" alt="">
						</div>
					</div>
					<div class="col-md-3">
						<div class="header__top-phone">
							<a class="header__top-phone-top" href="tel:+73832588444">
								<div class="animation-icon-box"><i class="fas fa-phone"></i></div> +7 (383) 258-84-44
							</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="header__top-button">
							<div class="button-move" data-toggle="modal" data-target="#myModal-ekskur">
								Записаться на экскурсию
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header__body">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-7 col-lg-7">
						<div class="header__body-text">
							<div>
								<h1 class="h1">Квартиры в<br>Чистой слободе</h1>
								<p class="fz2rem">от 5 665 р./мес.*</p>
								<p class="fz2rem">Оформление ипотеки без комиссий</p>
								<p class="fz08rem">*платеж по программе «Ипотечные каникулы» от ПАО «БАНК УРАЛСИБ», ставка 11,5 % годовых, с
									первоначальным
								взносом 20 % на 20 лет</p>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-5 col-lg-5">
						<div class="header__body-form">
							<div>
								<form class="transparent form-zayvka gform">
									<div class="form-title">Мы расскажем, как выгодно купить квартиру!</div>

									<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
									<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
									<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
									<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
									<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

									<div><input type="hidden" name="field2" value="Заказать звонок"></div>
									<div><input type="hidden" name="field3" value="header"></div>

									<div class="field">
										<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
										<i class="fas fa-user"></i>
									</div>
									<div class="field">
										<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
										<i class="fas fa-phone"></i>
									</div>
									<div class="field">
										<button class="button-move" type="submit">Отправить</button>
									</div>
									<p class="declaration">Нажимая на кнопку «ОТПРАВИТЬ», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
										target="_blank">персональных данных</a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header__body-downtext">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/0procent.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											Без комисии, без переплат!
										</div>
										<div class="header__body-downtext-block-anons">
											При покупке квартиры в ЖК Чистая Слобода, Вы не платитите комиссию агентству недвижимости.
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/clipboards.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											ИПОТЕКА от 6% !!!
										</div>
										<div class="header__body-downtext-block-anons">
											Ипотека на строящееся жилье - от 6 тыс. руб в месяц, на сданное в домах — от 20 тыс. руб. в месяц.
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="header__body-downtext-block">
									<img src="img/refreshing.png" alt="" class="img-responsive">
									<div>
										<div class="header__body-downtext-block-title">
											Trade-in: обмен старого жилья.
										</div>
										<div class="header__body-downtext-block-anons">
											Вы можете переехать из старой хрущевки в новую квартиру комфорт-класса - всего за 5 дней!
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="advantages">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="advantages__title">
							<h2 class="h2">Основные преимущества «Чистой Слободы»</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<img src="img/ecology.png" alt="Экология" class="img-responsive">
							</div>
							<div class="advantages__cart-text">
								Экологически чистое место для вас и ваших детей.
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<img src="img/bus.png" alt="Транспорт" class="img-responsive">
							</div>
							<div class="advantages__cart-text">
								Отличная транспортная доступность
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<img src="img/paint-brush.png" alt="Ремонт" class="img-responsive">
							</div>
							<div class="advantages__cart-text">
								Удобные планировки, отделка под ключ
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="advantages__cart">
							<div class="advantages__cart-img">
								<img src="img/skyline.png" alt="Инфраструктура" class="img-responsive">
							</div>
							<div class="advantages__cart-text">
								Развитая инфраструктура для комфортной жизни
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="media">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-6">
						<div class="media__item" data-toggle="modal" data-target="#myModal-video">
							<div class="media__item-wrap">
								<div class="media__item-icon"><i class="fas fa-video"></i><span>видео</span></div>
								<div class="media__item-text">Сделайте выбор в пользу надежности, юридической чистоты сделки и комфортной жизни
								в динамично развивающемся микрорайоне.</div>
							</div>
						</div>
						<div class="modal" id="myModal-video" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
							<div class="modal-dialog" role="dialog">
								<div class="modal-content">
									<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close" id="myModal-video-bt"><span
										aria-hidden="true">&times;</span></button>
										<iframe width="560" height="315" src="https://www.youtube.com/embed/vmhUAv3Y3n0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
										allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div class=" col-md-6">
							<div class="media__item" id="object-images">
								<div class="media__item-wrap">
									<div class="media__item-icon"><i class="fas fa-image"></i><span>фото</span></div>
									<div class="media__item-text">Все квартиры выполнены с отделкой «под ключ», предоставляя возможность
									заселиться в новую квартиру сразу после получения ключей.</div>
								</div>
							</div>
						</div> -->
						<div class="col-sm-4 col-md-4">
						<div class="media__item" data-toggle="modal" data-target="#myModal-video">
							<div class="media__item-wrap">
								<div class="media__item-icon"><i class="fas fa-video"></i><span>видео</span></div>
								<div class="media__item-text">Видео</div>
							</div>
						</div>
						<div class="modal" id="myModal-video" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
							<div class="modal-dialog" role="dialog">
								<div class="modal-content">
									<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close" id="myModal-video-bt"><span
										aria-hidden="true">&times;</span></button>
										<iframe width="560" height="315" src="https://www.youtube.com/embed/vmhUAv3Y3n0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
										allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="media__item" id="object-photo">
								<div class="media__item-wrap">
									<div class="media__item-icon"><i class="fas fa-image"></i><span>фото</span></div>
									<div class="media__item-text">Фото</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-md-4">
							<div class="media__item" id="flats-repairs">
								<div class="media__item-wrap">
									<div class="media__item-icon"><i class="fas fa-image"></i><span>ремонт</span></div>
									<div class="media__item-text">Ремонт</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="map">
				<div class="map__bg"></div>
				<div class="map__body">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-7">
								<div class="map__body-desc">
									<div class="map__body-desc-title">Расположение</div>
									<div class="map__body-desc-text">
										<b>Чистая слобода</b> - жилой микрорайон комплексной застройки в Новосибирске в Ленинском районе,
										расположенный
										на улице Титова.
									</div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="map__body-icoloco">
									<div class="popup-link" data-toggle="modal" data-target="#myModal-map" id="create">
										<svg version="1.1" id="map-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
										x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;"
										xml:space="preserve">
										<g id="road">
											<path class="st0" d="M141.98,71.904l21.465,100.993" />
											<polyline class="st0" points="36.305,137.309 128.621,117.686 128.621,117.686 119.889,76.599 	" />
											<polyline class="st0" points="141.355,177.59 133.316,139.777 41.001,159.4 	" />
										</g>
										<g id="point">
											<circle class="st1" cx="72.462" cy="55.02" r="13.07" />
											<path class="st3" d="M102.463,55.02c0,16.569-30,54.98-30,54.98s-30-38.412-30-54.98s13.431-30,30-30 C89.031,25.02,102.463,38.451,102.463,55.02z" />
										</g>
									</svg>
								</div>
								<div class="modal" id="myModal-map" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
									<div class="modal-dialog map-modal" role="dialog">
										<div class="modal-content">
											<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4f9a5a6599beda8d9855a227bda0f0bd1087d9be19b9dadd54bb37189e406008&amp;source=constructor"
											"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="fflats">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/st_21_89_.jpg" alt="Студия">
								<img src="img/flats/st_22_13.jpg" alt="Студия">
								<img src="img/flats/st_23_99.jpg" alt="Студия">
								<img src="img/flats/st_24_06.jpg" alt="Студия">
								<img src="img/flats/st_24_07.jpg" alt="Студия">
								<img src="img/flats/st_24_14.jpg" alt="Студия">
								<img src="img/flats/st_24_15.jpg" alt="Студия">
								<img src="img/flats/st_24_22.jpg" alt="Студия">
								<img src="img/flats/st_30_75.jpg" alt="Студия">
								<img src="img/flats/st_30_81.jpg" alt="Студия">
								<img src="img/flats/st_30_95.jpg" alt="Студия">
								<img src="img/flats/st_34_42.jpg" alt="Студия">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">1 комнатная студия</div>
								<div class="cost-flat">от 1 270 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/1k_32_73.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_35_18.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_35_65_1000kh1000.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_37_38.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_38_43_1000kh1000.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_38_96.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_40_75.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_40_94.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_41_01.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_43_67.jpg" alt="1 ком. квартира">
								<img src="img/flats/1k_47_51.jpg" alt="1 ком. квартира">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">1 комнатная квартира</div>
								<div class="cost-flat">от 1 730 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/2s_39_51.jpg" alt="2 студия">
								<img src="img/flats/2s_41_11.jpg" alt="2 студия">
								<img src="img/flats/2s_42_06_1000kh1000.jpg" alt="2 студия">
								<img src="img/flats/2st_38_28.jpg" alt="2 студия">
								<img src="img/flats/2st_42_15.jpg" alt="2 студия">
								<img src="img/flats/2st_48_29.jpg" alt="2 студия">
								<img src="img/flats/2st_54_15.jpg" alt="2 студия">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">2 комнатная студия</div>
								<div class="cost-flat">от 1 940 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/2k_45_92.jpg" alt="2 ком. квартира">
								<img src="img/flats/2k_54_48.jpg" alt="2 ком. квартира">
								<img src="img/flats/2k_56_14.jpg" alt="2 ком. квартира">
								<img src="img/flats/2k_59_69.jpg" alt="2 ком. квартира">
								<img src="img/flats/2k_67_66.jpg" alt="2 ком. квартира">
								<img src="img/flats/2k_71_53.jpg" alt="2 ком. квартира">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">2 комнатная квартира</div>
								<div class="cost-flat">от 2 480 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/3st_58_31.jpg" alt="3 студия">
								<img src="img/flats/3st_67_66.jpg" alt="3 студия">
								<img src="img/flats/3st_70_76.jpg" alt="3 студия">
								<img src="img/flats/3st_70_91.jpg" alt="3 студия">
								<img src="img/flats/3st_71_53.jpg" alt="3 студия">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">3 комнатная студия</div>
								<div class="cost-flat">от 2 840 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="fflats__thumbnail">
							<div class="owl-carousel">
								<img src="img/flats/3k_77_16.jpg" alt="3 ком. квартира">
								<img src="img/flats/3k_80_34.jpg" alt="3 ком. квартира">
								<img src="img/flats/3k_80_41.jpg" alt="3 ком. квартира">
								<img src="img/flats/3k_80_89.jpg" alt="3 ком. квартира">
							</div>
							<div class="fflats__thumbnail-body">
								<div class="title-flat">3 комнатная квартира</div>
								<div class="cost-flat">от 3 400 000 руб.</div>
							</div>
							<div class="fflats__thumbnail-button" data-toggle="modal" data-target="#myModal-cart">
								<div>Подробнее <i class="fas fa-key"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="purchase">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="purchase__title">
							<h2 class="h2">Как купить квартиру в «Чистой Слободе»</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Ипотека</span></div>
							<div class="purchase__method-text">
								Микрорайно «Чистая Слобода» имеет аккредитацию во всех ведущих банках города. Минимальный первоначальные
								взнос от 15%.
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Рассрочка</span></div>
							<div class="purchase__method-text">
								Квартиры в «Чистой Слободе» можно приобрести по программе рассрочки. Условия программы индивидуальны и
								предоставляються по запросу.
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Материнский капитал</span></div>
							<div class="purchase__method-text">
								Направить материнский капитал на дом для своей семьи - разумное решение. Сертификат может стать
								первоначальным взносом по ипотеки, доплатой при обмене на квартиру большей площади. Наша специалисты
								помогут разумно использовать материнский капитал и улучшить свои жилищные условия прямо сейчас.
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="purchase__method">
							<div class="purchase__method-title"><span>Trade-in</span></div>
							<div class="purchase__method-text">
								У Вас уже есть квартира, и Вы планируете переезд? Именно для Вас предлогаеться программа, которая
								позволяет взять займ на первоначальные взнос в ипотеку под имеющееся жильё и проживать в своей квартире
								до новоселья! Продать уже имеющуюся квартиру помогут наши специалисты.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="request">
			<div class="request__bg"></div>
			<div class="request__body">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
							<div class="request__body-title">
								<h2>Сопровождение сделки бесплатно!</h2>
								<p>От выбора квартиры до регистрации договора.</p>
							</div>
						</div>
						<div class="col-md-10 offset-md-1">
							<div class="request__body-form">
								<form class="transparent form-zayvka gform">

									<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
									<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
									<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
									<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
									<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

									<div><input type="hidden" name="field2" value="Заказать экскурсию"></div>
									<div><input type="hidden" name="field3" value="топ меню"></div>

									<div class="field">
										<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
										<i class="fas fa-user"></i>
									</div>
									<div class="field phone">
										<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
										<i class="fas fa-phone"></i>
									</div>
									<div class="field">
										<button class="button-move" type="submit">Отправить</button>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-8 offset-md-2">
							<span class="request__body-declaration">Нажимая на кнопку «отправить»,<br> Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/" target="_blank">персональных данных</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>





		<footer class="footer">
			<div class="container">
				<div class="footer__body">
					<div class="row">
						<div class="col-md-7">
							<div class="footer__body-text">
								<p>1994–2018 © Агентство недвижимости КВАДРОТЕКА™ <span>(OOO "Сибакадемстрой Недвижимость")</span></p>
								<a href="http://www.sasn.ru/about/personaldata/" target="_blank">Положения об обработке персональных данных</a>
							</div>
						</div>
						<div class="col-md-5">
							<ul class="footer__body-social">
								<li><a href="http://vk.com/sasn_nsk" target="_blank"><i class="fab fa-vk"></i></a></li>
								<li><a href="https://www.facebook.com/groups/kvadroteka/" target="_blank"><i class="fab fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/kvadroteka/" target="_blank"><i class="fab fa-instagram"></i></a></li>
								<li><a href="http://www.youtube.com/user/wwwwSASNru" target="_blank"><i class="fab fa-youtube"></i></a></li>
								<li><a href="https://ok.ru/kvadroteka" target="_blank"><i class="fab fa-odnoklassniki"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>



		<!-- Modal заказать экскурсию топ меню-->

		<div class="modal" id="myModal-ekskur" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
			<div class="modal-dialog" role="dialog">
				<div class="modal-content">
					<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-body">
						<div class="modal-body-title">
							Отправить заявку
						</div>
						<form class="transparent form-zayvka gform">

							<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
							<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
							<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
							<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
							<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

							<div><input type="hidden" name="field2" value="Заказать экскурсию"></div>
							<div><input type="hidden" name="field3" value="топ меню"></div>

							<div class="field">
								<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
								<i class="fas fa-user"></i>
							</div>
							<div class="field phone">
								<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
								<i class="fas fa-phone"></i>
							</div>
							<div class="field">
								<button class="button-move" type="submit">Отправить</button>
							</div>
							<p class="declaration">Нажимая на кнопку «Отправить», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
								target="_blank">персональных данных</a></p>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal END заказать экскурсию топ меню-->

			<!-- Modal cart flat -->

			<div class="modal" id="myModal-cart" tabindex="-1" role="dialog" aria-labelledby="my_modalLabel">
				<div class="modal-dialog" role="dialog">
					<div class="modal-content">
						<button type="button" class="close clickclose" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<div class="modal-body">
							<div class="modal-body-title">
								Наши специалисты ответят на любые Ваши вопросы
							</div>
							<form class="transparent form-zayvka gform">

								<input type="hidden" name="utm_source" value="<?php $utm_source = $_GET['utm_source']; echo $utm_source; ?>">
								<input type="hidden" name="utm_medium" value="<?php $utm_medium = $_GET['utm_medium']; echo $utm_medium; ?>">
								<input type="hidden" name="utm_campaign" value="<?php $utm_campaign = $_GET['utm_campaign']; echo $utm_campaign; ?>">
								<input type="hidden" name="utm_content" value="<?php $utm_content = $_GET['utm_content']; echo $utm_content; ?>">
								<input type="hidden" name="utm_term" value="<?php $utm_term = $_GET['utm_term']; echo $utm_term; ?>">

								<div><input type="hidden" name="field2" value="Заказать звонок"></div>
								<div><input type="hidden" name="field3" value="инфо квартиры"></div>

								<div class="field">
									<input type="text" class="nameclient-form" placeholder="Ваше Имя" name="field5">
									<i class="fas fa-user"></i>
								</div>
								<div class="field phone">
									<input type="text" class="tel phone-form" placeholder="Ваш телефон" name="field6">
									<i class="fas fa-phone"></i>
								</div>
								<div class="field">
									<button class="button-move" type="submit">Отправить</button>
								</div>
								<p class="declaration">Нажимая на кнопку «Отправить», Вы соглашаетесь на обработку <a href="http://www.sasn.ru/about/personaldata/"
									target="_blank">персональных данных</a></p>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal END cart flat -->

				<div class="top-move-bt">
					<i class="fas fa-angle-double-up"></i>
				</div>


				<script src="js/scripts.min.js"></script>

			</body>

			</html>