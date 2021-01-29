<?php
AddEventHandler("main", "OnBeforeUserRegister", "OnBeforeUserRegisterHandler");

function OnBeforeUserRegisterHandler(&$arFields)
{

    if(preg_match("/rambler.ru/",$arFields['EMAIL']) == 1 || preg_match("/list.ru/", $arFields['EMAIL']) == 1)
    {
        $GLOBALS['APPLICATION']->ThrowException('Указаный домент недопустим для регистрации');

        return false;
    }

    return true;
}
