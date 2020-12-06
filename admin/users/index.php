<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>


<?


    $rsUser = CUser::GetByLogin($_GET["LOGIN"]);
    $arUser = $rsUser->Fetch();


?>


<h3><?echo $arUser["NAME"]?>  <?echo $arUser["LAST_NAME"]?></h3>
<ul>
    <li>ID: <?echo $arUser["ID"]?> </li>
    <li>Логин: <?echo $arUser["LOGIN"]?> </li>
    <li>Телефон: <?echo $arUser["PERSONAL_PHONE"]?> </li>
    <li>Почта: <?echo $arUser["EMAIL"]?> </li>



</ul>




<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
