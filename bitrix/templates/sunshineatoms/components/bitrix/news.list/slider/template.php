<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="slider"><div id="coin-slider">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

<a href="<?=$arItem['PROPERTIES']['SLIDER_LINK']['VALUE']?>">
<img
src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
width="940"
height="310"
alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
/>
</a> 

<?endforeach;?>

</div><div class="clr"></div></div>