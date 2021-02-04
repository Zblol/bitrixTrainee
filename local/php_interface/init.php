<?

include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/wsrubi.smtp/classes/general/wsrubismtp.php");

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/function.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/function.php");
}

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/crop_text.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/crop_text.php");
}


if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/similarText.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/similarText.php");
}

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/makeDate.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/makeDate.php");
}

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/eventRegistr.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/eventRegistr.php");
}

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/eventEmailNewUser.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/eventEmailNewUser.php");
}

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/reportNewUserAgent.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/reportNewUserAgent.php");
}

?>
