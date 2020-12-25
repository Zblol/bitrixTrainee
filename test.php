<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>



<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

//echo "<pre>arParams: "; print_r($arParams); echo "</pre>";
//echo "<pre>arResult: "; print_r($arResult); echo "</pre>";

//echo "<pre>"; print_r($arResult["arrFORM_FILTER"]); echo "</pre>";
?>


    <br/>

    <style>
        #user {
            width: 500px;
        }

        #user_head {
            border: 5px solid black;
        }

        #button_create {
            width: 100px;
            height: 50px;
        }


        .td_form {
            padding: 10px 10px;
            border-bottom: 2px solid black;
        }

    </style>


    <form action="new.php" method="">
        <p><input type="submit" value="Coздать">
    </form>

    <br/>
    <br/>
    <table id="user">
        <thead>
        <tr id="user_head">
            <th>
                Дата Результата
            </th>
            <th>
                ФИО
            </th>
            <th>
                Статус
            </th>
        </tr>
        </thead>


<? foreach ($arResult["arrResults"] as $arRes): ?>
    <td class="td_form">

        <? echo $arRes["TSX_0"] ?>

    </td>


    <td class="td_form">

        <?
        foreach ($arResult["arrColumns"] as $FIELD_ID => $arrC) {

            $FIELD_ID = 1;

            $arrAnswer = $arResult["arrAnswers"][$arRes["ID"]][$FIELD_ID];

            foreach ($arrAnswer as $key => $arrA) {

            }
        }

        $userFIO = $arrA["USER_TEXT"];
        ?>

        <? echo $userFIO; ?>

    </td>
    <td class="td_form">

        <? foreach ($arResult["arrResults"] as $arRes)



            ?>

        <?echo  $arRes["STATUS_TITLE"];?>

    </td>
    </tr>

<? endforeach; ?>

    </tbody>
    </table>






<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>