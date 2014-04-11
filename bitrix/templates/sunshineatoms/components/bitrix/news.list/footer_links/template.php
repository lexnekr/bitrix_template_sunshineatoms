<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arParams["FOOTER_PHOTOS_TITLE"])):?><h5><?=$arParams['FOOTER_PHOTOS_TITLE']?></h5><?endif?>



<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<?if (!empty($arItem['PROPERTIES']['FOOTER_PHOTOS_LINK']['VALUE'])):?>
<a href="<?=$arItem['PROPERTIES']['FOOTER_PHOTOS_LINK']['VALUE']?>" ><img
id="<?=$this->GetEditAreaId($arItem['ID']);?>"
src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
width="75"
height="75"
alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
class="gal"
/></a>
<?else:?>
<img
id="<?=$this->GetEditAreaId($arItem['ID']);?>"
src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
width="75"
height="75"
alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
class="gal"
/>
<?endif;?>

<?=$arItem['FOOTER_PHOTOS_LINK']?>

<?endforeach;?>


