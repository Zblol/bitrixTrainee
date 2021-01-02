<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");


$APPLICATION->SetTitle("Загрузить Изображение");

?>
    <script>
        BX.ready(function () {
            $('form').submit(function (e) {
                $.ajax({
                    url: '/admin/img_upload/index.php',
                    success: function () {
                        alert("GOOD");
                    },
                    error: function () {
                        alert('failure');
                    }
                });
            });
        });
    </script>


    <form method="post" enctype='multipart/form-data' id="upl_img">
        <?= CFile::InputFile("IMAGE_ID", 20, $str_IMAGE_ID); ?>

        <input type="submit" id="submit" value="сохранить">
    </form>
    <br/>


<?
$arr_file = array(
    "name" => $_FILES["IMAGE_ID"]["name"],
    "size" => $_FILES["IMAGE_ID"]["size"],
    "tmp_name" => $_FILES["IMAGE_ID"]["tmp_name"],
    "type" => "",
    "old_file" => "",
    "del" => "Y",
    "MODULE_ID" => "img_up");

$fid = CFile::SaveFile($arr_file, "/admin/img_upload/");

$res = CFile::GetList(array("ID" => "desc"), array("MODULE_ID" => "img_up"));


$arResult = array();


while ($arRes = $res->GetNext()):

    $arResult = $arRes;

    ?>

    <? if ($USER->IsAuthorized()): ?>

    <a download href="<? echo CFile::GetPath($arResult["ID"]) ?>"> Скачать изображение № <?= $arResult["ID"] ?> <br/>
    </a>

<? else: ?>

    <a href="/404.php"> Скачать изображение № <?= $arResult["ID"] ?> <br/> </a>

<?endif; ?>


<?
endwhile;
?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>