<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="mm-list">

<?

foreach($arResult as $key => $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<div class="mm-item active"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></div>
	<?else:?>
		<div class="mm-item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
	<?endif?>
<?endforeach?>

</div>
<?endif?>