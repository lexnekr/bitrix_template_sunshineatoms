<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
<div class="gadget">
<?if (!empty($arParams["LEFT_MENU_TITLE"])):?>
  <h2 class="star"><?=$arParams['LEFT_MENU_TITLE']?></h2>
  <div class="clr"></div>
<?endif?>

	<?if ($arParams['LEFT_MENU_ALWEYS_BOLD']==Y):?>
	<ul class="ex_menu">
	<?else:?>
	<ul class="sb_menu">
	<?endif?>

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>


	<?if ($arItem['PARAMS'][$arParams['LEFT_MENU_BOLD']]==Y):?>
	  <li><b><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></b>
			<?if (!empty($arItem['PARAMS'][$arParams['LEFT_MENU_DESCRIPTION']])):?>
				<br/><?=$arItem['PARAMS'][$arParams['LEFT_MENU_DESCRIPTION']]?>
			<?endif?>
		</li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<?if (!empty($arItem['PARAMS'][$arParams['LEFT_MENU_DESCRIPTION']])):?>
				<br/><?=$arItem['PARAMS'][$arParams['LEFT_MENU_DESCRIPTION']]?>
			<?endif?>
		</li>
	<?endif?>
	
<?endforeach?>

</ul></div>
<?endif?>