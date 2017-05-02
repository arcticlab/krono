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
		
		<div class="main-block">
			<div class="main-block__bg" style="background-image: url('/local/templates/.default/images/slider/slide1.jpg')"></div>
			<div class="container white-bg">
				<div class="row">
					<div class="col-md-4">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "left", Array(
							"ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
								"MAX_LEVEL" => "1",	// Уровень вложенности меню
								"CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
								"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								"DELAY" => "N",	// Откладывать выполнение шаблона меню
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
								"MENU_CACHE_TYPE" => "N",	// Тип кеширования
								"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
								"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
								"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
							),
							false
						);?>
					</div>
					<div class="col-md-8">
						<div class="content-wrap">							
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "sect",
									"AREA_FILE_SUFFIX" => "inc_inner_baner",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => ""
								),
							false
							);?>
							<h1><?=$APPLICATION->ShowTitle(false)?></h1>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="side-img hidden-sm hidden-xs">		
						    <?$APPLICATION->IncludeComponent(
								"bitrix:main.include",
								"",
								Array(
									"AREA_FILE_SHOW" => "sect",
									"AREA_FILE_SUFFIX" => "inc_left_map",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => ""
								),
							false
							);?>				    
						</div>
					</div>
					<div class="col-md-8">
						<div class="content">
							