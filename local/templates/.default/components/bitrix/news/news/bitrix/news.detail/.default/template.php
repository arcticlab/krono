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
<div class="container">
	<div class="news-head-img">
		<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>">
	</div>
</div>
<div class="main-block no-padding-top">
	<div class="container white-bg">
		<div class="row">
			<div class="col-md-4">
				<div class="news-img-descr">
					<?=$arResult['FIELDS']['DETAIL_PICTURE']['DESCRIPTION']?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="content-wrap">
					<div class="news-info">
						<div class="vi__item vi__views"><?=$arResult['SHOW_COUNTER']?></div>
						<div class="vi__item vi__social">
						    <script>
							if (__function_exists('fbs_click') == false) 
							{
							function fbs_click(url, title) 
							{ 
							window.open('http://www.facebook.com/share.php?u='+encodeURIComponent(url)+'&t='+encodeURIComponent(title),'sharer','toolbar=0,status=0,width=626,height=436'); 
							return false; 
							} 
							}
							</script>
							<a href="http://www.facebook.com/share.php?u=http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>&amp;t=<?=$arResult['NAME']?>" onclick="return fbs_click('http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>', '<?=$arResult['NAME']?>');" target="_blank" class="fb" title="Facebook"></a>
							</td><td class="bookmarks"><script>
							if (__function_exists('twitter_click_1') == false) 
							{
							function twitter_click_1(longUrl) 
							{ 
							BX.loadScript('http://bit.ly/javascript-api.js?version=latest&login=o_4k430toofj&apiKey=bit.ly/2oukbrN bit.ly/2o',
							function () 
							{
							BitlyClient.shorten(longUrl, '__get_shorten_url_twitter_1');
							}
							);
							return false; 
							} 
							}
							function __get_shorten_url_twitter_1(data) 
							{
							var first_result;
							var shortUrl;
							for (var r in data.results) 
							{
							first_result = data.results[r]; 
							break;
							}
							if (first_result != null)
							{
							shortUrl = first_result.shortUrl.toString();
							}
							window.open('http://twitter.com/home/?status='+encodeURIComponent(shortUrl)+encodeURIComponent('<?=$arResult['NAME']?>'),'sharer','toolbar=0,status=0,width=726,height=436'); 
							}
							</script>
							<a href="http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>+<?=$arResult['NAME']?>" onclick="return twitter_click_1('http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>');" target="_blank" class="twi" title="Twitter"></a>
							</td><td class="bookmarks"><script>
							if (__function_exists('vk_click') == false) 
							{
							function vk_click(url) 
							{ 
							window.open('http://vkontakte.ru/share.php?url='+encodeURIComponent(url),'sharer','toolbar=0,status=0,width=626,height=436'); 
							return false; 
							} 
							}
							</script>
							<a href="http://vkontakte.ru/share.php?url=http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>" onclick="return vk_click('http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>');" target="_blank" class="vk" title="ВКонтакте"></a>
							</td><td class="bookmarks"><script>
							if (__function_exists('lj_click') == false) 
							{
							function lj_click(url, title) 
							{ 
							window.open('http://www.livejournal.com/update.bml?event='+encodeURIComponent(url)+'&subject='+encodeURIComponent(title),'sharer','toolbar=0,status=0,resizable=1,scrollbars=1,width=700,height=436'); 
							return false; 
							} 
							}
							</script>
							<a href="http://www.livejournal.com/update.bml?event=http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>&amp;subject=<?=$arResult['NAME']?>" onclick="return lj_click('http://<?=$_SERVER["HTTP_HOST"]?><?=$arResult["DETAIL_PAGE_URL"]?>', '<?=$arResult['NAME']?>');" target="_blank" class="lj" title="Livejournal"></a>
						</div>
					</div>
					<div class="news-inner-date"><?if($arResult["DISPLAY_ACTIVE_FROM"]!=''){echo $arResult["DISPLAY_ACTIVE_FROM"];}else{echo ConvertDateTime($arResult["DATE_CREATE"], "DD.MM.YYYY", "ru");}?></div>
					<div class="content">
						<h1><?=$arResult['NAME']?></h1>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="side-blocks hidden-sm hidden-xs">
					<a href="<?=$arResult['HISTORY_FACE']['DETAIL_PAGE_URL']?>" class="side-block__item">
						<div class="sb-item__img" style="background-image: url(<?=CFile::GetPath($arResult['HISTORY_FACE']['DETAIL_PICTURE']['SRC'])?>)"></div>
						<div class="sb-item__content">
							<div class="section">
								История в лицах
							</div>
							<div class="caption"><?=$arResult['HISTORY_FACE']['NAME']?></div>
							<div class="descr">
								<?=$arResult['HISTORY_FACE']['PREVIEW_TEXT']?><span> »</span>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-8">
				<div class="content-wrap">
					<div class="content">	
						<?=$arResult['DETAIL_TEXT']?>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>