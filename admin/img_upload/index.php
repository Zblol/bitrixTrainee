<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");


$APPLICATION->SetTitle("Загрузить Изображение");
?>



    <form method="post"  action="/admin/img_upload/index.php"  enctype="multipart/form-data" id="upl_img">
        <input type="file" name="file" id="file" >
        <input type="submit" id="submit" value="сохранить">
    </form>
    <br>



<?

$arr_file = array(
    "name" => $_FILES['file']["name"],
    "size" => $_FILES['file']["size"],
    "tmp_name" => $_FILES['file']["tmp_name"],
    "type" => "",
    "old_file" => "",
    "del" => "Y",
    "MODULE_ID" => "img_up");

$fid = CFile::SaveFile($arr_file, '', "/admin/img_upload/");

$res = CFile::GetList(array("ID" => "desc"), array("MODULE_ID" => "img_up"));


$arResult = array();


while ($arRes = $res->GetNext()):

    $arResult = $arRes;

    ?>
    <? if ($USER->IsAuthorized()): ?>

    <a download href="<? echo CFile::GetPath($arResult["ID"]) ?>"> Скачать изображение № <?= $arResult["ID"] ?> <br/>
    </a>
<? else: ?>

    <a href="/404.php"> Скачать изображение № <?= $arResult["ID"] ?> <br> </a>

<?endif; ?>


<?
endwhile;


if(isset($_FILES['file'])){
    header('Location: index.php',);

}


?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>