<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Пользователи");
?><br>

<form action="/admin/users/" method="GET">
    <input type="text" name="LOGIN">
    <p><input type="submit" value="Поиск">
</form>
    <br/>

    <style>
        #user {
            width: 500px;
        }

        #user_head {
            border: 5px solid black;
        }

    </style>

    <table id="user">
        <thead>
        <tr id="user_head">
            <th>
                ID
            </th>
            <th>
                ЛОГИН
            </th>
            <th>
                ИМЯ
            </th>
            <th>
                ФАМИЛИЯ
            </th>
            <th>
                ПОЧТА
            </th>
        </tr>
        </thead>
        <tbody>


        <?
        $filter = array(

            "GROUPS_ID" => array(7)
        );

        $rsUsers = CUser::GetList(($by = "login"), ($order = "desc"), $filter);
        $is_filtered = $rsUsers->is_filtered;

        $rsUsers->NavStart(50);
        echo $rsUsers->NavPrint(GetMessage("PAGES"));

        while ($rsUsers->NavNext(true, "f_")):
            ?>

            <tr>
                <td>
                    <? echo $f_ID; ?>
                </td>
                <td>
                    <a href="/admin/users/?LOGIN=<? echo $f_LOGIN; ?>" style="text-decoration: none;"> <? echo $f_LOGIN ?></a>
                </td>
                <td>
                    <? echo $f_NAME ?>
                </td>
                <td>
                    <? echo $f_LAST_NAME; ?>
                </td>
                <td>
                    <? echo $f_EMAIL; ?>
                </td>
            </tr>

        <?


        endwhile;


        ?>


        </tbody>
    </table>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>