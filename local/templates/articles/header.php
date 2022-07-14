<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;

Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>" >
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?$APPLICATION->ShowHead();?>
    <?
    CJSCore::Init( array("jquery") );
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH. "/js/bootstrap/bootstrap.js");

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/bootstrap/bootstrap.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/bootstrap-icons.css");
    ?>

	<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>

<div id="page-wrapper">
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<div id="header">

            <div id="top-menu" class="container">
				<div id="top-menu-inner">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "Y",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_TIME" => "36000000",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => ""
                    ),
                    false,
                    array(
                    "ACTIVE_COMPONENT" => "Y"
                    )
                );?>
				</div>
			</div>
		</div>
		
		<div id="content">
			<div id="workarea" class="container">
				<!--<h2 class="subtitle-1"><?/*$APPLICATION->ShowTitle(false);*/?></h2>-->