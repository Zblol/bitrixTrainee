<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новые Пользователи");
?>

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

        <?foreach ($arResult as $key => $item):?>
            <tr>
                <td>
                    <? echo $item['ID']; ?>
                </td>
                <td>
                    <a href="/admin/users/?LOGIN=<? echo $item['LOGIN']; ?>"
                       style="text-decoration: none;"> <? echo $item['LOGIN']; ?></a>
                </td>
                <td>
                    <? echo $item['NAME']; ?>
                </td>
                <td>
                    <? echo $item['LAST_NAME']; ?>
                </td>
                <td>
                    <? echo $item['EMAIL']; ?>
                </td>
            </tr>

        <? endforeach; ?>

        </tbody>
    </table>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>