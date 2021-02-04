<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?


$rsAnswers = CForm::GetResultAnswerArray(
    1,
    $arrColumns,
    $arrAnswers,
    $arrAnswersSID,
    array("FIELD_ID" => "2")
);

$arResult = $arrAnswers;

function getParamAnswer($result_id)
{

    $arAnsw = CFormResult::GetDataByID( $result_id,
        array(),
        $arResults,
        $arAnswer2);

    return $arResults;
}




?>



