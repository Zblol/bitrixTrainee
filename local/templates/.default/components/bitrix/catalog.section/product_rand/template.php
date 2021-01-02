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

<script>
    BX.ready(function(){

        $(document).on('click', '[data-show-more]', function(){
            var btn = $(this);
            var page = btn.attr('data-next-page');
            var id = btn.attr('data-show-more');
            var bx_ajax_id = btn.attr('data-ajax-id');
            var block_id = "#comp_"+bx_ajax_id;

            var data = {
                bxajaxid:bx_ajax_id
            };
            data['PAGEN_'+id] = page;

            $.ajax({
                type: "GET",
                url: window.location.href,
                data: data,
                timeout: 10000,
                success: function(data) {
                    $("#btn_"+bx_ajax_id).remove();
                    $(block_id).append(data);
                }
            });
        });

    });
</script>

<?$bxajaxid = CAjax::GetComponentID($component->__name, $component->__template->__name, $component->arParams['AJAX_OPTION_ADDITIONAL']);
?>

<?if($arResult["NAV_RESULT"]->nEndPage > 1 && $arResult["NAV_RESULT"]->NavPageNomer<$arResult["NAV_RESULT"]->nEndPage):?>
    <div id="btn_<?=$bxajaxid?>">
        <a data-ajax-id="<?=$bxajaxid?>" href="javascript:void(0)" data-show-more="<?=$arResult["NAV_RESULT"]->NavNum?>" data-next-page="<?=($arResult["NAV_RESULT"]->NavPageNomer + 1)?>" data-max-page="<?=$arResult["NAV_RESULT"]->nEndPage?>">Показать еще</a>
    </div>
<?endif?>

<div class="catalog-section">

<table class="data-table" cellspacing="0" cellpadding="0" border="0" width="50%">
	<?foreach($arResult["ITEMS"] as $arElement):?>
<?if($arElement["SHOW_COUNTER"] == null):?>
	<tr >
		<td>
<!--            --><?//test_dump($arElement);?>
            <?test_dump($arElement["SHOW_COUNTER"]);?>
            <span> <img src="<?=$arElement['DETAIL_PICTURE']['SRC']?>"></span>
            <a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a>
            <h3><?=$arElement['PREVIEW_TEXT'];?></h3>
        </td>
	</tr>
<?endif;?>
        <?endforeach;?>


</table>

</div>
