<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/otkroy-kamchatku/territorii/([a-zA-Z0-9\\-\\_]+)\\/?\\??.*#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/otkroy-kamchatku/territorii/detail.php",
	),
	array(
		"CONDITION" => "#^/otkroy-kamchatku/multimedia/videogalereya/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/otkroy-kamchatku/multimedia/videogalereya/index.php",
	),
	array(
		"CONDITION" => "#^/bitrix/services/ymarket/#",
		"RULE" => "",
		"ID" => "",
		"PATH" => "/bitrix/services/ymarket/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>