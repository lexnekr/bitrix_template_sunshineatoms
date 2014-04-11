

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

</div>
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "sect",
	"AREA_FILE_SUFFIX" => "sidebar",
	"AREA_FILE_RECURSIVE" => "Y",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>

</div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
<?$APPLICATION->IncludeComponent("bitrix:news.list", "footer_links", array(
	"IBLOCK_TYPE" => "-",
	"IBLOCK_ID" => "FOOTER_PHOTO",
	"NEWS_COUNT" => "6",
	"SORT_BY1" => "ACTIVE_FROM",
	"SORT_ORDER1" => "DESC",
	"SORT_BY2" => "SORT",
	"SORT_ORDER2" => "ASC",
	"FILTER_NAME" => "",
	"FIELD_CODE" => array(
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "",
		1 => "FOOTER_PHOTOS_LINK",
		2 => "",
	),
	"CHECK_DATES" => "Y",
	"DETAIL_URL" => "",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "N",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
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
	"PAGER_TEMPLATE" => ".default",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Новости",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "N",
	"FOOTER_PHOTOS_TITLE" => "Наши услуги",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?></div>
      <div class="col c2">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/col2.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
      </div>
      <div class="col c3">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/col3.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>

      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">
<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "file",
	"PATH" => SITE_TEMPLATE_PATH."/include/Copyright.php",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
</p>
      <p class="rf"><a href="http://кофедизайн.рф/">Интеграция шаблона и 1С-Битрикс</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
