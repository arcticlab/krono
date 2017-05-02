<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="territory-wrap">
	<div class="row">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="col-md-6 territory-wrap__inner">
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="territory-link" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')">
			<div class="territory-link__content">
				<div class="territory-link__caption"><?echo $arItem["NAME"]?></div>
				<div class="territory-link__desc"><?echo $arItem["PREVIEW_TEXT"];?>&nbsp;»</div>
			</div>
		</a>
	</div>
<?endforeach;?>
</div>
</div>
