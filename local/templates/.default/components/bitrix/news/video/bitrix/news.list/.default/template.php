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
<?//debugmessage($arResult);?>
<div class="main-block">
	<div class="main-block__bg" style="background-image: url('/bitrix/templates/.default/images/slider/slide1.jpg')"></div>
	<div class="container white-bg">
		<div class="video-wrap">
			<h1>Видеогалерея</h1>
			<div class="video-content">
				
				<div class="row">
					<div class="col-md-4">
						<div class="side-menu filter">
							<div class="side-menu__header">Категории</div>
							<?$APPLICATION->IncludeComponent(
								"bitrix:catalog.section.list", 
								"cat_video", 
								array(
									"VIEW_MODE" => "TEXT",
									"SHOW_PARENT_NAME" => "Y",
									"IBLOCK_TYPE" => "otkroy_kamchatku",
									"IBLOCK_ID" => "9",
									"SECTION_ID" => "",
									"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
									"SECTION_URL" => "",
									"COUNT_ELEMENTS" => "N",
									"TOP_DEPTH" => "1",
									"SECTION_FIELDS" => array(
										0 => "",
										1 => "",
									),
									"SECTION_USER_FIELDS" => array(
										0 => "",
										1 => "",
									),
									"ADD_SECTIONS_CHAIN" => "Y",
									"CACHE_TYPE" => "A",
									"CACHE_TIME" => "36000000",
									"CACHE_GROUPS" => "Y",
									"COMPONENT_TEMPLATE" => ".default"
								),
								false
							);?>
						</div>
					</div>
					<div class="col-md-8">
						<div class="content-wrap">
							<div class="content">
								<h2><?=$APPLICATION->ShowTitle(false)?></h2>
								<p><?=$arResult["DESCRIPTION"]?></p>
							</div>
						</div>	
						<div class="video-list content-video-list">

						    <?foreach($arResult["ITEMS"] as $arItem):?>
							<?
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
							?>
                                <div class="gallery-item">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" data-fancybox="group" class="gallery-item__inner">
										<div class="gallery-item__img" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>')"></div>
										<div class="gallery-item__content">
											<div class="gi__author"><?if($arItem["DISPLAY_ACTIVE_FROM"]!=''){echo $arItem["DISPLAY_ACTIVE_FROM"];}else{echo ConvertDateTime($arItem["DATE_CREATE"], "DD.MM.YYYY", "ru");}?></div>
											<div class="gi__views"><?=$arItem['SHOW_COUNTER']?></div> 
											<div class="gi__caption cut-caption"><?=$arItem['NAME']?></div>
											<div class="gi__author gi__bottom">Автор: <?=$arItem['PROPERTIES']['AUTOR']['VALUE']?></div>
										</div>
									</a>
								</div>
							<?endforeach;?>
							<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
								<br /><?=$arResult["NAV_STRING"]?>
							<?endif;?>

						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>