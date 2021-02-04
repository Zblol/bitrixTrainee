<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тест");
?>
<?$APPLICATION->IncludeComponent(
	"usersite:users.new",
	"",
	Array(
		"CACHE_TIME" => "1200",
		"CACHE_TYPE" => "A",
		"SET_TITLE" => "N"
	)
);?><br>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>