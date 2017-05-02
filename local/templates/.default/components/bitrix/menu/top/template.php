<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="menu">

<?
$cnt = count($arResult);
foreach($arResult as $key => $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<div class="menu__item active"><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></div>
	<?else:?>
		<div class="menu__item"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
	<?endif?>
	<?if($cnt-1!=$key){?>
		<div class="menu__item">
			<span>|</span>
		</div>
	<?}?>
<?endforeach?>

</div>
<?endif?>