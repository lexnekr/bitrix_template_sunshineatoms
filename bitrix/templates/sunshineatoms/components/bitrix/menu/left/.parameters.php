<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arTemplateParameters = array(
	"LEFT_MENU_TITLE" => Array(
		"NAME" => GetMessage("LEFT_MENU_TITLE"),
		"TYPE" => "HTML",
		"DEFAULT" => "Sidebar Menu",
	),
	"LEFT_MENU_DESCRIPTION" => Array(
		"NAME" => GetMessage("LEFT_MENU_DESCRIPTION"),
		"TYPE" => "HTML",
		"DEFAULT" => "SPONSORS_DESCRIPTION",
	),
	"LEFT_MENU_ALWEYS_BOLD" => Array(
		"NAME" => GetMessage("LEFT_MENU_ALWEYS_BOLD"),
		"TYPE" => "CHECKBOX",
		"MULTIPLE" => "N",
		"VALUE" => "Y",
		"DEFAULT" =>"N",
		"REFRESH"=> "Y",
	),	
);



if ($arCurrentValues["LEFT_MENU_ALWEYS_BOLD"] == "N")
{
$arTemplateParameters["LEFT_MENU_BOLD"] = array(
		"NAME" => GetMessage("LEFT_MENU_BOLD"),
		"TYPE" => "HTML",
		"DEFAULT" => "LEFT_MENU_BOLD",
	);
}

?>