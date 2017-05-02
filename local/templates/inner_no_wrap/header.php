<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title><?$APPLICATION->ShowTitle();?></title>

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