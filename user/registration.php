<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?php
$APPLICATION->IncludeComponent(     // Настраиваемая регистрация
    "bitrix:main.register",
    "",
    Array(
        "AUTH" => "Y",              // Автоматически авторизовать пользователей
        "REQUIRED_FIELDS" => array( // Поля, обязательные для заполнения
            0 => "EMAIL",
            1 => "NAME",
            2 => "LAST_NAME",
        ),
        "SET_TITLE" => "Y",         // Устанавливать заголовок страницы
        "SHOW_FIELDS" => array(     // Поля, которые показывать в форме
            0 => "EMAIL",
            1 => "NAME",
            2 => "LAST_NAME",
        ),
        "SUCCESS_PAGE" => "",       // Страница окончания регистрации
        "USER_PROPERTY" => "",      // Показывать дополнительные свойства
        "USER_PROPERTY_NAME" => "", // Название блока пользовательских свойств
        "USE_BACKURL" => "N",       // Отправлять пользователя по обратной ссылке
    ),
    false
);
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>