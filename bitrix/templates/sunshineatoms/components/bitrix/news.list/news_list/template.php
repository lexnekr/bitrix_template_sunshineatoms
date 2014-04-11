<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);?>




<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="article" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<h2><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h2>
			<?else:?>
				<h2><?echo $arItem["NAME"]?></h2>
			<?endif;?>
		<?endif;?>

		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<p class="infopost">
			<?=GetMessage('NEWS_POSTED');?> <span class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span><?if($arParams["DISPLAY_AUTHORS_NAME"]!="N" && !empty($arItem['PROPERTIES']['NEWS_AUTHOR']['~VALUE'])):?>, <?=GetMessage('NEWS_AUTHORED_BY');?> <?=$arItem['PROPERTIES']['NEWS_AUTHOR']['~VALUE']?><?endif?>
			</p>
		<?else:?>
			<p class="infopost">
			<?if($arParams["DISPLAY_AUTHORS_NAME"]!="N" && !empty($arItem['PROPERTIES']['NEWS_AUTHOR']['~VALUE'])):?><?=GetMessage('NEWS_AUTHORED_BY');?> <?=$arItem['PROPERTIES']['NEWS_AUTHOR']['~VALUE']?><?endif?>
			</p>
		<?endif?>
	
		<div class="clr"></div>

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<div class="img"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						class="fl"
						/></a></div>
			<?else:?>
				<div class="img"><img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					class="fl"
					/></div>
			<?endif;?>
		<?endif?>


		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<div class="post_content">
			<?echo $arItem["PREVIEW_TEXT"];?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<p class="spec"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="rm"><?=GetMessage('READ_MORE');?></a></p>
			<?endif;?>
			</div>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div class="clr"></div>
		<?endif?>

	</div>




<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
