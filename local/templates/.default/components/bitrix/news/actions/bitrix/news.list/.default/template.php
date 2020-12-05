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
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

    <div id="<?=$this->GetEditAreaId($arItem['ID']);?>">

        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img style="float: left" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></a>

        <div class="ps_head">

                <h2 class="ps_head_h"><?= $arItem["NAME"] ?></h2>

            </a>
            <span class="ps_date">
            <?=$arItem["DISPLAY_ACTIVE_FROM"] ?>
            </span>
        </div>
            <h4><? echo $arItem["PREVIEW_TEXT"]; ?></h4><br/>

    </div>

    <span> <a  href="<?=$arItem["DETAIL_PAGE_URL"]?>"><h5>Подробнее</h5></a></span>
<? endforeach; ?>


