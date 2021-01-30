<?php

AddEventHandler("main", "OnAfterUserRegister", "OnAfterUserRegisterHandler");

function OnAfterUserRegisterHandler(&$arFields){

    if(preg_match("/yandex.ru/",$arFields['EMAIL']) == 1)
    {

        return false;

    }


        $rsUser = CUser::GetByLogin($arFields['LOGIN']);
        $arUser = $rsUser->Fetch();

        $arEventFields = array(

            "DATE" => $arUser['DATE_REGISTER'],
            "LOGIN" => $arFields['LOGIN'],
            "EMAIL" => $arFields['EMAIL'],
            "FROM_SITE" => $_SERVER['HTTP_REFERER']

        );

    BXClearCache(true, "/admin/user_new/");

        CEvent::Send("NEW_USER", 's1', $arEventFields);

    CBitrixComponent::clearComponentCache('usersite::users.new');

}