<?
$res = CIBlockElement::GetByID($arResult['ID']);
if($ar_res = $res->GetNext()){
	$arResult['HISTORY_FACE'] = $ar_res;
}