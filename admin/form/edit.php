
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
    <script type="text/javascript" src="/bitrix/js/main/ajax.js"></script>


    <div class="popup_edit">



    <?$APPLICATION->IncludeComponent("bitrix:form.result.edit", "form_edit", Array(
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_SHADOW" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"EDIT_ADDITIONAL" => "Y",	// Выводить на редактирование дополнительные поля
		"EDIT_STATUS" => "Y",	// Выводить форму смены статуса
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"LIST_URL" => "index.php",	// Страница со списком результатов
		"RESULT_ID" => $_REQUEST[RESULT_ID],	// ID результата
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
		"VIEW_URL" => "view.php",	// Страница просмотра результата
	),
	false
);?>

    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>