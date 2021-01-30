<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//** проверка на актуальный кеш */
if ($this->startResultCache($arParams['CACHE_TIME'])) {


    $arParams = array(
        "FIELDS" => array(
            "ID",
            "NAME",
            "LAST_NAME",
            "EMAIL",
            "LOGIN",
            "DATE_REGISTER"
        ),
        "NAV_PARAMS" =>array('nTopCount' => 3),
    );

    $filter = array(

        "GROUPS_ID" => array(7)
    );

    $rsUsers = CUser::GetList(($by = "date_register"), ($order = "desc"), $filter, $arParams);
    $is_filtered = $rsUsers->is_filtered;

    while ($arItem = $rsUsers->GetNext()) {
        $arUsers [] = $arItem;
    }
    $arResult = $arUsers;
    $this->IncludeComponentTemplate();  //connection template
}

