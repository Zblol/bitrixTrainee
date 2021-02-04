<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>


<?


$cUser = $USER::GetList(
    $by="login",
    $order="desc",
    [
        'EMAIL' => $_GET["LOGIN"]
    ],
    [
        'SELECT' => [
            'LOGIN'
        ]
    ]

)->fetch();


$rsUser = CUser::GetByLogin($cUser["LOGIN"]);
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
