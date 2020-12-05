<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>

<div class="sb_reviewed">
    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="sb_rw_avatar" alt=""/>
    <span class="sb_rw_name"><a  style="text-decoration: none" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></span>
    <div class="sb_rw_job">
        <?echo $arItem["PROPERTIES"]["LEVEL"]["VALUE"]?>
        <?echo $arItem["PROPERTIES"]["COMPANY"]["VALUE"]?>
    </div>
    <p><?echo $arItem["PREVIEW_TEXT"]?></p>

    <div class="clearboth"></div>
    <div class="sb_rw_arrow"></div>
</div>

<?endforeach;?>



