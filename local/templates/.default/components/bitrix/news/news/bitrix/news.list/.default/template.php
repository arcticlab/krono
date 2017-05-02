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

<div class="main-block">
	<div class="main-block__bg" style="background-image: url('/bitrix/templates/.default/images/slider/slide1.jpg')"></div>
			<div class="container white-bg">
				<div class="row">
					<div class="col-md-4">
						<div class="news-side-list">
							<h1>Новости</h1>

							<?foreach($arResult["ITEMS"] as $arItem):?>
								<?
								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

								?>
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-item hnews" data-id="id<?=$arItem['ID']?>">
									<div class="date">
									    <?if($arItem["DISPLAY_ACTIVE_FROM"]!=''){echo $arItem["DISPLAY_ACTIVE_FROM"];}else{echo ConvertDateTime($arItem["DATE_CREATE"], "DD.MM.YYYY", "ru");}?>
							        </div>
									<div class="caption"><?=$arItem["NAME"]?></div>
									<div class="news-content"><?=$arItem["PREVIEW_TEXT"]?><span>&nbsp;»</span></div>
								</a>

							<?endforeach;?>

                        </div>
					</div>
					<div class="col-md-8">
						<div class="content-wrap">
							<div class="cns-wrap hidden-xs">
							    <?foreach($arResult["ITEMS"] as $key => $arItem):?>
								<?
								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

								?>
								<div class="content-news-slide dnews <?if($key == 0){echo 'active';}?>" id="id<?=$arItem['ID']?>" <?if($key == 0){echo 'style="display:block"';}else{echo 'style="display:none"';}?>>
									<div class="cns-img">
										<img src="<?=$arItem['FIELDS']['DETAIL_PICTURE']['SRC']?>" alt="<?=$arItem["NAME"]?>">
										<div class="cns-img-descr">
											<div class="views"><?=$arItem['SHOW_COUNTER']?></div>
											<?=$arItem['FIELDS']['DETAIL_PICTURE']['DESCRIPTION']?>
										</div>
									</div>
									<div class="cns-date">
									    <?if($arItem["DISPLAY_ACTIVE_FROM"]!=''){echo $arItem["DISPLAY_ACTIVE_FROM"];}else{echo ConvertDateTime($arItem["DATE_CREATE"], "DD.MM.YYYY", "ru");}?>
									</div>
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="cns-caption"><?=$arItem["NAME"]?></a>
									<div class="cns-descr"><?=$arItem["PREVIEW_TEXT"]?><span>&nbsp;»</span></div>
								</div>

							    <?endforeach;?>
							</div> 
						</div>	
					</div>
				</div>	   
	    </div>
	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>