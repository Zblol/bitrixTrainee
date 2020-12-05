<?
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/function.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/function.php");
}

if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/crop_text.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/crop_text.php");
}


if(file_exists($_SERVER["DOCUMENT_ROOT"]."/local/php_interface/include/similarText.php")){
    require_once($_SERVER["DOCUMENT_ROOT"] . "/local/php_interface/include/similarText.php");
}
?>
