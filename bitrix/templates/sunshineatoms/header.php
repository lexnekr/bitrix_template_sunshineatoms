<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<html lang="<?=LANGUAGE_ID;?>-<?=strtoupper(LANGUAGE_ID);?>">
<head>
<title><?$APPLICATION->ShowTitle()?></title>

<?$APPLICATION->ShowHead();

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/coin-slider.css'); 

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/cufon-yui.js"); 
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/droid_sans_400-droid_sans_700.font.js"); 
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.4.2.min.js"); 
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js"); 
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/coin-slider.min.js"); 
?> 


</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="main">
  <div class="header">
    <div class="header_resize">
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "3600",
	"MENU_CACHE_USE_GROUPS" => "Y",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "N",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
);?>
      <div class="logo">
        <h4><a href="/">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/logo.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
<small>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/slogan.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</small></a></h4>
      </div>
      <div class="clr"></div>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "-",
		"IBLOCK_ID" => "SLIDER",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => "",
		"PROPERTY_CODE" => array(0=>"SLIDER_LINK",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
<div class="content_resize">
<div class="mainbar">

