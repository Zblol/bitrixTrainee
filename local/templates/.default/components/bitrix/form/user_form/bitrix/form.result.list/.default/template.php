<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Форма Пользователей");


?>

<script>
    BX.ready(function () {
        $('a.popup').fancybox({
            "frameWidth": 510,
            "frameHeight": 400,
            "hideOnContentClick": false,
            "type": "ajax"
        });
        $("a.popup_edit").fancybox(
            {
                "frameWidth": 510,
                "frameHeight": 400,
                "hideOnContentClick": false,
                "type": "ajax"

            });

        $("a.popup_view").fancybox(
            {
                "frameWidth": 510,
                "frameHeight": 400,
                "hideOnContentClick": false,
                "type": "ajax"
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


    foreach ($arResult as $arAnswers) :
    foreach ($arAnswers as $arAnswer => $arParam):

    $arItems = getParamAnswer($arParam[2]["RESULT_ID"]);

    ?>
    <tbody>
    <td class="td_form"><br/>

        <?

        echo $arItems["DATE_CREATE"];
        ?>
    </td>

    <td class="td_form">


        <a class="popup_edit"
           href="/admin/form/edit.php?WEB_FORM_ID=2&RESULT_ID=<? echo $arParam[2]["RESULT_ID"] ?>&formresult=editok"
           style="text-decoration: none;"> <? echo $arParam[2]["USER_TEXT"]; ?></a>


    </td>

    <td class="td_form">

        <? echo $arItems["STATUS_TITLE"]; ?>


    </td>
    </tr>

    <? endforeach;?>
    <? endforeach; ?>

    </tbody>
</table>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
