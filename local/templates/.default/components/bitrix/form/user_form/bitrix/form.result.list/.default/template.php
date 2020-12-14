<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Форма Пользователей");


?>

<script>
   BX.ready(function() {
        $('a.popup').fancybox({
            "frameWidth" : 510,
            "frameHeight" : 400,
            "hideOnContentClick" :false,
            "type":"ajax"
        });
        $("a.popup_edit").fancybox(
            {
                "frameWidth" : 510,
                "frameHeight" : 400,
                "hideOnContentClick" :false,
                "type":"ajax"

            });

        $("a.popup_view").fancybox(
            {
                "frameWidth" : 510,
                "frameHeight" : 400,
                "hideOnContentClick" :false,
                "type":"ajax"
            });
       $.ajax({
           url: 'index.php',
           success: function(){
               alert('РЕЗУЛЬТАТ СОХРАНЁН');
           },
           error: function(){
               alert('failure');
           }
       });
    });

</script>


<a href="/admin/form/new.php" class="popup">Создать</a>


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


    <?

    $rsAnswers = CForm::GetResultAnswerArray(
        2,
        $arrColumns,
        $arrAnswers,
        $arrAnswersSID,
        array("FIELD_ID" => "1")
    );


    foreach ($arrAnswers as $arrAns ):
        foreach ($arrAns as $ar) :

            foreach ($ar as $RR) :

                $answer  = $RR["USER_TEXT"];

                $rsResult = CFormResult::GetByID($RR["RESULT_ID"]);
                $arResult = $rsResult->Fetch();

                $status = $arResult["STATUS_TITLE"];
                $date = $arResult["DATE_CREATE"];


                ?>

    <tbody>
                <td class="td_form"><br/>

                    <?
                    echo $date;
                    ?>

                </td>

                <td class="td_form">


         <a class="popup_edit" href="/admin/form/edit.php?WEB_FORM_ID=2&RESULT_ID=<?echo $RR["RESULT_ID"]?>&formresult=editok" style="text-decoration: none;"> <? echo $answer?></a>


                </td>

                <td class="td_form">

                    <? echo $status; ?>

                </td>
                </tr>

            <?endforeach;
        endforeach;
    endforeach; ?>

    </tbody>
</table>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
