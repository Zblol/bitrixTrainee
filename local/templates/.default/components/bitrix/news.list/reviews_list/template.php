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

<li>
    <div class="rw_message">

        <?if(is_array($arItem["PREVIEW_PICTURE"])):?>
        <img  src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="rw_avatar" alt=""/>
        <?endif;?>
        <span class="rw_name"><?echo $arItem["NAME"]?></span>
        <div class="rw_job">
            <?echo $arItem["PROPERTIES"]["LEVEL"]["VALUE"]?>
            <?echo $arItem["PROPERTIES"]["COMPANY"]["VALUE"]?>
        </div>
        <p><?echo $arItem["PREVIEW_TEXT"]?></p>
        <a  href="<?=$arItem["DETAIL_PAGE_URL"]?>">
        <div class="clearboth"></div>
        <div class="rw_arrow"></div>

    </div>

</li>
<?endforeach;?>

