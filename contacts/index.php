<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p>
	 Обратитесь к нашим специалистам для создания чего угодно
</p>
<p>
	Можете написать или позвонить 
</p>
<h2>Телефоны</h2>
<ul>
	<li>Телефон/факс:
	<ul>
		<li><b>8 (493) 232-25-96</b></li>
	</ul>
 </li>
	
<h2>Форма обратной связи</h2>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	".default", 
	array(
		"EMAIL_TO" => "test@test.ru",
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"USE_CAPTCHA" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>&nbsp;<br>
<h2>Офис в Москве</h2>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view",
	".default",
	Array(
		"CONTROLS" => array(0=>"LARGE_MAP_CONTROL",1=>"MINIMAP",2=>"HTYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "NORMAL",
		"KEY" => "ABQIAAAAOSNukcWVjXaGbDo6npRDcxS1yLxjXbTnpHav15fICwCqFS-qhhSby0EyD6rK_qL4vuBSKpeCz5cOjw",
		"MAP_DATA" => "a:3:{s:10:\"google_lat\";s:7:\"55.7383\";s:10:\"google_lon\";s:7:\"37.5946\";s:12:\"google_scale\";i:13;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "600",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>