<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>



<?= $arResult['NAV_STRING'] ?>

<div class="catalog">

    <? foreach ($arResult["ITEMS"] as $arElement): ?>

        <div class="catalog__item" style="width: 50%;">
            <span> <img src="<?= $arElement['PREVIEW_PICTURE']['SRC'] ?>"></span>
            <h4 hidden class="product_id"><?= $arElement['ID'] ?></h4>
            <a href="<?= $arElement["DETAIL_PAGE_URL"] ?>"><?= $arElement["NAME"] ?></a>
            <h3><?= $arElement['PREVIEW_TEXT']; ?></h3>
        </div>

    <? endforeach;?>

</div>


