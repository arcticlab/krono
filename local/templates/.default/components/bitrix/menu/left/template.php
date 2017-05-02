<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="side-menu">
	<div class="side-menu__header">Открой Камчатку</div>
	<div class="side-menu__list">

		<?
		foreach($arResult as $key => $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
				continue;
		?>
			<?if($arItem["SELECTED"]):?>
				<a href="<?=$arItem["LINK"]?>" class="selected"><span><?=$arItem["TEXT"]?></span></a>
			<?else:?>
				<a href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
			<?endif?>
		<?endforeach?>

	</div>
</div>
<?endif?>