<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
//это запрос на получение массива с результатами ответов
$rsAnswers = CForm::GetResultAnswerArray(
    2,
    $arrColumns,
    $arrAnswers,
    $arrAnswersSID,
    array("FIELD_ID" => "1")// фильтр чтобы были ответы только по первому вопросу
);


$arResult = $arrAnswers;


function getDataItem( $result_id){


    $arAnsw = CFormResult::GetDataByID( $result_id,
        array(),
        $arResults,
        $arAnswer2);

    return $arResults;
}

?>



