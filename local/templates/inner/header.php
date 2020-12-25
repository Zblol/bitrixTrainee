<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>

    <link rel="stylesheet" href="/local/templates/.default/template_styles.css"/>
    <link rel="stylesheet" href="/bitrix/templates/.default/js/fancybox/jquery.fancybox-1.3.4.css"/>


    <script type="text/javascript" src="/local/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/functions.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="/local/templates/.default/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="/local/templates/.default/favicon.ico">

    <!--[if gte IE 9]>
    <style type="text/css">.gradient {
        filter: none;
    }</style><![endif]-->
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<div class="wrap">
    <div class="hd_header_area">
        <? include_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/templates/.default/include/header.php"); ?>

    </div>

    <!--- // end header area --->
    <? $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"nav", 
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "nav"
	),
	false
); ?>
    <div class="main_container page">
        <div class="mn_container">
            <div class="mn_content">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?=$APPLICATION->ShowTitle()?></p>
                    </div>