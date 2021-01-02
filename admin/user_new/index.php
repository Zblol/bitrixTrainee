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

        <?
        $cache = new CPHPCache();
        $cache_time = 20 * 60;
        $cache_id = "/";
        $cache_path = '/cache/';

        if (!is_array($rsUsers)) {

            if ($cache_time > 0) {
                $cache->StartDataCache($cache_time, $cache_id, $cache_path);
                $cache->EndDataCache(array($rsUsers));

            $filter = array(

                "GROUPS_ID" => array(7)
            );

            $rsUsers = CUser::GetList(($by = "date_register"), ($order = "desc"), $filter);
            $is_filtered = $rsUsers->is_filtered;

            $rsUsers->NavStart(3);

            while ($rsUsers->NavNext(true, "f_")):
                ?>

                <tr>
                    <td>
                        <? echo $f_ID; ?>
                    </td>
                    <td>
                        <a href="/admin/users/?LOGIN=<? echo $f_LOGIN; ?>"
                           style="text-decoration: none;"> <? echo $f_LOGIN ?></a>
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



                test_dump($cache_time);
                test_dump($cache);
            }
        }
        ?>

        </tbody>
    </table>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>