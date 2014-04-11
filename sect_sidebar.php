
<div class="sidebar"> <?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"left_form",
	Array(
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	Array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"LEFT_MENU_TITLE" => "Sidebar Menu",
		"LEFT_MENU_DESCRIPTION" => "SPONSORS_DESCRIPTION",
		"LEFT_MENU_ALWEYS_BOLD" => "N",
		"LEFT_MENU_BOLD" => "LEFT_MENU_BOLD_PARAMETR"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	Array(
		"ROOT_MENU_TYPE" => "left2",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"LEFT_MENU_TITLE" => "Sponsors",
		"LEFT_MENU_DESCRIPTION" => "SPONSORS_DESCRIPTION",
		"LEFT_MENU_ALWEYS_BOLD" => "Y"
	)
);?> </div>

<div class="clr"></div>
