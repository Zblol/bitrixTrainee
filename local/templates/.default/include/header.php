<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile(__FILE__);
?>

<div class="hd_header">
    <table>
        <tr>
            <td rowspan="2" class="hd_companyname">
                <h1>

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/logo.php"
                        )
                    ); ?>

                </h1>
            </td>
            <td rowspan="2" class="hd_txarea">
                        <span class="tel">

                            <? $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/phone.php"
                                )
                            ); ?>
                        </span> <br/><?= GetMessage("WORKING_TIME") ?><span
                        class="workhours"> ежедневно с 8-00 до 21-00</span>
                <!--                product name-->
                <span> <? $APPLICATION->ShowViewContent("prod_name"); ?> </span>
            </td>
            <td style="width:232px">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "head",
                    array()
                ); ?>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 11px;">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    ".default",
                    array(
                        "FORGOT_PASSWORD_URL" => " /user/",
                        "PROFILE_URL" => "/user/profile.php",
                        "REGISTER_URL" => "/user/registration.php",
                        "SHOW_ERRORS" => "Y",
                        "COMPONENT_TEMPLATE" => ".default"
                    ),
                    false,
                    array(
                        "ACTIVE_COMPONENT" => "N"
                    )
                ); ?><br>
                <br>
            </td>
        </tr>
    </table>
    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top_multi",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "2",
            "MENU_CACHE_GET_VARS" => "",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N"
        )
    ); ?>


</div>