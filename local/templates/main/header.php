<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$APPLICATION->ShowTitle()?></title>
	    <!-- fonts -->
	    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">

    	<!-- bootstrap -->
    	<link href="/local/templates/.default/styles/bootstrap.css" rel="stylesheet">

    	<!-- slick -->
    	<link href="/local/templates/.default/js/slick/slick.css" rel="stylesheet">

		
    	<!-- styles -->
    	<link href="/local/templates/.default/styles/style.css" rel="stylesheet">
    	<?
            $APPLICATION->ShowCSS();
			$APPLICATION->ShowHeadStrings();
			$APPLICATION->ShowMeta("keywords");
			$APPLICATION->ShowMeta("description");
    	?>

	</head>
	<body>
	    <? $APPLICATION->ShowPanel(); ?>
		<div class="sitewrap">
		    <?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => "/include/header.php",
					"EDIT_TEMPLATE" => ""
				),
			false
			);?>			
			<!-- main slider -->
			<div class="main-slider__wrap">
				<div class="main-slider">
					<div class="main-slider__item">
						<img src="/local/templates/.default/images/slider/slide1.jpg" alt="">
						<div class="slide-content">
							<div class="container">
								<div class="slide-caption">Кальдера вулкана Узон</div>
								<div class="slide-description">Высота пика Бараний, высшей точкаи борта кальдеры —  1&nbsp;617 м над уровнем моря</div>
							</div>
						</div>
					</div>
					<div class="main-slider__item">
						<img src="/local/templates/.default/images/slider/slide2.jpg" alt="">
						<div class="slide-content ">
							<div class="container">
								<div class="slide-caption">Кальдера вулкана Узон</div>
								<div class="slide-description">Высота пика Бараний, высшей точкаи борта кальдеры —  1&nbsp;617 м над уровнем моря</div>
							</div>
						</div>
					</div>
					<div class="main-slider__item">
						<img src="/local/templates/.default/images/slider/slide3.jpg" alt="">
						<div class="slide-content shadow">
							<div class="container">
								<div class="slide-caption">Кальдера вулкана Узон</div>
								<div class="slide-description">Высота пика Бараний, высшей точкаи борта кальдеры —  1&nbsp;617 м над уровнем моря</div>
							</div>
						</div>
					</div>
					<div class="main-slider__item">
						<img src="/local/templates/.default/images/slider/slide4.jpg" alt="">
						<div class="slide-content">
							<div class="container">
								<div class="slide-caption">Кальдера вулкана Узон</div>
								<div class="slide-description">Высота пика Бараний, высшей точкаи борта кальдеры —  1&nbsp;617 м над уровнем моря</div>
							</div>
						</div>
					</div>
					<div class="main-slider__item">
						<img src="/local/templates/.default/images/slider/slide5.jpg" alt="">
						<div class="slide-content">
							<div class="container">
								<div class="slide-caption">Кальдера вулкана Узон</div>
								<div class="slide-description">Высота пика Бараний, высшей точкаи борта кальдеры —  1&nbsp;617 м над уровнем моря</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- news slider -->
			<div class="main-news__wrap">
				<div class="container">
					<div class="news-slider">
						<div class="news-slide">
							<div class="news-item">
								<a href="" class="news-item__img">
									<img src="http://placehold.it/600x300">
								</a>
								<div class="news-item__content">
									<div class="news-item___social">
										<a class="vk" href=""></a>
										<a class="fb" href=""></a>
										<a class="twi" href=""></a>
									</div>
									<div class="date">06.04.2016</div>	
									<a href="" class="caption">Вулканы под&nbsp;присмотром</a>	
									<div class="descr cut-block">Ценные сведения вулканологам и сейсмологам передают сотрудники Кроноцкого заповедника сотрудники Кроноцкого заповедника сотрудники Кроноцкого заповедника<span>&nbsp;»</span></div>
								</div>
							</div>
						</div>
					
						<div class="news-slide">
							<div class="news-item">
								<a href="" class="news-item__img">
									<img src="http://placehold.it/600x300">
								</a>
								<div class="news-item__content cut-block cut-block">
									<div class="news-item___social">
										<a class="vk" href=""></a>
										<a class="fb" href=""></a>
										<a class="twi" href=""></a>
									</div>
									<div class="date">06.04.2016</div>	
									<a href="" class="caption">Вулканы под&nbsp;присмотром</a>	
									<div class="descr">Ценные сведения вулканологам и сейсмологам передают сотрудники Кроноцкого заповедника<span>&nbsp;»</span></div>
								</div>
							</div>
						</div>
					
						<div class="news-slide">
							<div class="news-item">
								<a href="" class="news-item__img">
									<img src="http://placehold.it/600x300">
								</a>
								<div class="news-item__content cut-block">
									<div class="news-item___social">
										<a class="vk" href=""></a>
										<a class="fb" href=""></a>
										<a class="twi" href=""></a>
									</div>
									<div class="date">06.04.2016</div>	
									<a href="" class="caption">Вулканы под&nbsp;присмотром</a>	
									<div class="descr">Ценные сведения вулканологам и сейсмологам передают сотрудники Кроноцкого заповедника<span>&nbsp;»</span></div>
								</div>
							</div>
						</div>
					
						<div class="news-slide">
							<div class="news-item">
								<a href="" class="news-item__img">
									<img src="http://placehold.it/600x300">
								</a>
								<div class="news-item__content cut-block">
									<div class="news-item___social">
										<a class="vk" href=""></a>
										<a class="fb" href=""></a>
										<a class="twi" href=""></a>
									</div>
									<div class="date">06.04.2016</div>	
									<a href="" class="caption">Вулканы под&nbsp;присмотром</a>	
									<div class="descr">Ценные сведения вулканологам и сейсмологам передают сотрудники Кроноцкого заповедника<span>&nbsp;»</span></div>
								</div>
							</div>
						</div>

						<div class="news-slide">
							<div class="news-item">
								<a href="" class="news-item__img">
									<img src="http://placehold.it/600x300">
								</a>
								<div class="news-item__content cut-block">
									<div class="news-item___social">
										<a class="vk" href=""></a>
										<a class="fb" href=""></a>
										<a class="twi" href=""></a>
									</div>
									<div class="date">06.04.2016</div>	
									<a href="" class="caption">Вулканы под&nbsp;присмотром</a>	
									<div class="descr">Ценные сведения вулканологам и сейсмологам передают сотрудники Кроноцкого заповедника<span>&nbsp;»</span></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- first main block  -->
		<div class="first-main">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="first-block first-map">
							<div class="map-header">Информация о заповеднике</div>
							<div class="map-descr" id="descr-zap3">
								<div class="mapd-header">Южно-Камчатский заказник</div>
								<ul>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
								</ul>
							</div>
							<div class="map-descr" id="descr-zap2">
								<div class="mapd-header">Кроноцкий заповедник</div>
								<ul>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
								</ul>
							</div>

							<div class="map-descr" id="descr-zap1">
								<div class="mapd-header">Корякский заповедник</div>
								<ul>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
									<li>Общая площадь: 1 147 619,37 га</li>
								</ul>
							</div>
							<div class="map-img">
								<div class="map-img-wrap">
									<img src="/local/templates/.default/images/map.jpg" alt=""  usemap="#map">
									<!-- в href вставить ссылки на соотв. территории!!!!!11-->
									<map name="map">
										<area class="map-area" shape="poly" coords="181,34,182,38,187,40,189,32,195,32,200,31,202,26,200,24,200,22,197,21,196,22,191,21,188,23,183,24,180,27" alt="zap11" data-map="zap1"  href="#" />
										<area class="map-area" shape="poly" coords="206,49,206,58,204,59,204,67,210,64,213,57,224,48,221,39,219,37,217,43,212,45,208,47,208,48" alt="zap12" data-map="zap1"  href="#" />
										<area class="map-area" shape="poly" coords="135,171,137,169,140,169,141,171,147,174,158,172,165,178,160,189,152,189,148,186,135,198,131,183,135,178,135,174" alt="zap2" data-map="zap2"  href="#" />
										<area class="map-area" shape="poly" coords="89,250,97,247,106,250,101,259,90,267,90,269" alt="zap3"  data-map="zap3" href="#" />
									</map>
									<span class="map-area" data-map="zap1" style="top:35px;left:71px;">Корякский заповедник</span>
									<span class="map-area" data-map="zap2" style="top:145px; left:40px;">Кроноцкий заповедник</span>
									<span class="map-area" data-map="zap3" style="top:240px; left:110px;">Южно-Камчатский заказник</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<a href class="first-block first-info">
							<div class="info-img" style="background-image: url('/local/templates/.default/images/akcii.jpg')">
							
							</div>
							<div class="info-content">
								<div class="section">Акции</div>
								<div class="caption">Участники конкурса «наши соседи – морские звери»</div>
								<div class="descr">Поддержите конкурсную работу воспитанников детского сада № 56 г. города Петропавловска-Камчатского&nbsp;<span>&nbsp;»</span></div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="first-block first-tour">
							<div class="info-img" style="background-image: url('/local/templates/.default/images/tour-img.jpg')">
								
							</div>
							<div class="info-content">
								<div class="section">Виртуальный тур по заповеднику</div>
								<ul class="tour-list">
									<li><a href="">Долина Гейзеров</a></li>
									<li><a href="">Кальдера вулкана Узон</a></li>
									<li><a href="">Кальдера Вулкана Узон (airpano)</a></li>
									<li><a href="">Курильское Озеро</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- second main block -->
		<div class="second-main">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-6">
						<a href="" class="second-block stories" style="background-image: url('/local/templates/.default/images/story-cover.jpg')">
							<div class="section">Истории</div>
						</a>
					</div>
					<div class="col-md-2 col-sm-6 col-xs-6">
						<a href="" class="second-block weather">
							<div class="section">Погода</div>
							<div class="ww-content">
								<div class="ww-ico sun"></div>
								<!-- классы для иконок
									солнечно .sun
									проливной дождь .rain
									небольшой дождь .lrain
									снег .snow
									облачно .cloudy
									малооблачно .lcloudy 
								 -->
								<div class="ww-degree">+14<sup>°C</sup></div>
								<div class="ww-descr">
									<span>757 мм давление</span>
									<span>63% влажность</span>
									<span>10°C t воды</span>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="" class="second-block main-route" style="background-image:url('/local/templates/.default/images/route-bg.jpg')">
							<div class="route-content">
								<div class="section">Экскурсионные маршруты</div>
								<div class="caption">Гейзеры кроноцкого заповедника</div>
								<div class="content-item">Однодневный экскурсионный маршрут</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="" class="second-block main-vac">
							<div class="vac-img" style="background-image: url(/local/templates/.default/images/vac-bg.jpg)"></div>
							<div class="vac-content">
								<div class="section">Вакансии</div>
								<div class="descr">Кроноцкий Заповедник приглашает на работу</div>
								<div class="content-item">Инспектор охраны</div>	
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<a href="" class="second-block main-vac">
							<div class="vac-img" style="background-image: url(/local/templates/.default/images/volont-bg.jpg)"></div>
							<div class="vac-content">
								<div class="section">Волонтерство</div>
								<div class="descr">Желающим оказать безвозмездную помощь заповеднику:</div>
								<div class="content-item">Заполни анкету волонтера</div>	
							</div>
						</a>
					</div>
					<div class="col-md-2 col-xs-6">
						<a href="" class="second-block video-block" style="background-image:url('/local/templates/.default/images/video-bg.jpg')">
							<div class="gal-content">
								<div class="ico"></div>
								<div class="text">Видео</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 col-xs-6">
						<a href="" class="second-block gallery-block" style="background-image:url('/local/templates/.default/images/photo-bg.jpg')">
							<div class="gal-content">
								<div class="ico"></div>
								<div class="text">Фото</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 col-xs-12">
						<div class="second-block webcam-block" style="background-image:url('/local/templates/.default/images/webcam.jpg')">
							<div class="gal-content">
								<div class="ico"></div>
								<div class="text">Веб-камера</div>
							</div>
							<div class="links-content">
								<ul class="webcam-list">
									<li class="webcam-item">
										<a href="">Долина гейзеров</a>
									</li>
									<li class="webcam-item">
										<a href="">Курильское озеро</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="partner-logo">
							<a class="unesco-logo" href="http://whc.unesco.org/" target="_blank"></a>
							<a class="mab-logo" href="http://www.unesco.org/new/en/natural-sciences/environment/ecological-sciences/man-and-biosphere-programme/" target="_blank"></a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="footer-social">
							<span>Мы в социальных сетях</span>
							<div class="footer-social__links">
								<a class="vk" href=""></a>
								<a class="fb" href=""></a>
								<a class="tw" href=""></a>
								<a class="lj" href=""></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="footer-mail"><a href=""><i class="ico"></i>Подписаться на почтовую рассылку</a></div>
						<div class="footer-forum"><a href=""><i class="ico"></i>Форум Кроноцкого заповедника</a></div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="copy">ФГБУ «Кроноцкий государственный заповедник» 2008–2016</div>
						<div class="copy">
							684000, Россия, Камчатский край, г. Елизово, ул. Рябикова,&nbsp;48 <br>
							<a href="tel:+7 (41531) 7-39-05">+7 (41531) 7-39-05</a>, <a href="tel:+7 (41531) 7-16-52">+7 (41531) 7-16-52</a> <br>
							<a href="mailto:zapoved@mail.kamchatka.ru">zapoved@mail.kamchatka.ru</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="copy">
							Все права на любые материалы, опубликованные на сайте, защищены в соответствии с российским и международным законодательством об авторском праве и смежных правах.
						</div>
					</div>
					<div class="col-sm-4">
						<div class="copy">
							О чрезвычайных ситуациях в Кроноцком заповеднике и Южно-Камчатском заказнике просьба сообщать по телефону оперативного дежурного ФГБУ «Кроноцкий государственный заповедник»:<br>
							<a class="footer-phone" href="">8-914-628-73-24</a>
						</div>
					</div>
				</div>
			</div>			
		</div>

		</div>	
		<script src="/local/templates/.default/js/jquery-3.1.1.min.js"></script>
		<script src="/local/templates/.default/js/slick/slick.min.js"></script>
		<script src="/local/templates/.default/js/jquery.dotdotdot.min.js"></script>
		<script src="/local/templates/.default/js/main.js"></script>

	</body>
</html>					
