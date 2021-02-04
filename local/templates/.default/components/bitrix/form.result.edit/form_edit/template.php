<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<script>
    BX.ready(function () {
        $("a.popup_view").fancybox(
            {
                "frameWidth": 510,
                "frameHeight": 400,
                "hideOnContentClick": false,
                "type": "ajax"
            });
    });
</script>

<?
if ($arParams["VIEW_URL"]) {
    $href = $arParams["SEF_MODE"] == "Y" ? str_replace("#RESULT_ID#", $arParams["RESULT_ID"], $arParams["VIEW_URL"]) : $arParams["VIEW_URL"] . (strpos($arParams["VIEW_URL"], "?") === false ? "?" : "&") . "RESULT_ID=" . $arParams["RESULT_ID"] . "&WEB_FORM_ID=" . $arParams["WEB_FORM_ID"];
    ?>
    <p>[&nbsp;<a class="popup_view" href="<?= $href ?>"><?= GetMessage("FORM_VIEW") ?></a>&nbsp;]</p>
    <?
}
?>
<table class="form-info-table data-table">
    <?
    if ($arResult["isAccessFormParams"] == "Y")
    {
    ?>
    <thead>
    <tr>
        <th colspan="2">&nbsp</th>
    </tr>
    </thead>
    <tbody>

    <?
    }
    ?>
    <tr>
        <td><b><?= GetMessage("FORM_DATE_CREATE") ?></b></td>
        <td><?= FormatDateFromDB($arResult["RESULT_DATE_CREATE"]) ?>
            <?
            if ($arResult["isAccessFormParams"] == "Y") {
                ?>&nbsp;&nbsp;&nbsp;<?
                if (intval($arResult["RESULT_USER_ID"]) > 0) {
                    $userName = array("NAME" => $arResult["RESULT_USER_FIRST_NAME"], "LAST_NAME" => $arResult["RESULT_USER_LAST_NAME"], "SECOND_NAME" => $arResult["RESULT_USER_SECOND_NAME"], "LOGIN" => $arResult["RESULT_USER_LOGIN"]);
                    ?>
                    [<a title='<?= GetMessage("FORM_EDIT_USER") ?>'
                        href='/bitrix/admin/user_edit.php?lang=<?= LANGUAGE_ID ?>&ID=<?= $arResult["RESULT_USER_ID"] ?>'><?= $arResult["RESULT_USER_ID"] ?></a>] (<?= $arResult["RESULT_USER_LOGIN"] ?>) <?= CUser::FormatName($arParams["NAME_TEMPLATE"], $userName) ?>
                    <? if ($arResult["RESULT_USER_AUTH"] == "N"): ?> <?= GetMessage("FORM_NOT_AUTH") ?><? endif; ?>
                    <?
                } else {
                    ?>
                    <?= GetMessage("FORM_NOT_REGISTERED") ?>
                    <?
                }
                ?>
                <?
            }
            ?></td>
    </tr>
    <tr>
        <td><b><?= GetMessage("FORM_TIMESTAMP") ?></b></td>
        <td><?= FormatDateFromDB($arResult["RESULT_TIMESTAMP_X"]) ?></td>
    </tr>
    <?
    if ($arResult["isAccessFormParams"] == "Y") {
        if ($arResult["isStatisticIncluded"] == "Y") {
            ?>
            <?
        }
        ?>
        <?
    }
    ?>
    </tbody>
</table>
<?= $arResult["FORM_HEADER"] ?>
<?= bitrix_sessid_post() ?>

<? if ($arResult["FORM_SIMPLE"] == "N" && $arResult["isResultStatusChangeAccess"] == "Y" && $arParams["EDIT_STATUS"] == "Y") {
    ?>
    <p>
        <b><?= GetMessage("FORM_CURRENT_STATUS") ?></b>
        [<?= $arResult["RESULT_STATUS"] ?>]
        <?= GetMessage("FORM_CHANGE_TO") ?>
        <?= $arResult["RESULT_STATUS_FORM"] ?>
    </p>
    <?
}
?>
<table>
    <?
    if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y") {
        ?>
        <tr>
            <td><?
                /***********************************************************************************
                 * form header
                 ***********************************************************************************/
                if ($arResult["isFormTitle"]) {
                    ?>
                    <?
                } //endif ;

                if ($arResult["isFormImage"] == "Y") {
                    ?>
                    <a href="<?= $arResult["FORM_IMAGE"]["URL"] ?>" target="_blank"
                       alt="<?= GetMessage("FORM_ENLARGE") ?>"><img src="<?= $arResult["FORM_IMAGE"]["URL"] ?>"
                                                                    <? if ($arResult["FORM_IMAGE"]["WIDTH"] > 300): ?>width="300"
                                                                    <? elseif ($arResult["FORM_IMAGE"]["HEIGHT"] > 200): ?>height="200"<? else: ?><?= $arResult["FORM_IMAGE"]["ATTR"] ?><? endif;
                        ?> hspace="3" vscape="3" border="0"/></a>
                    <? //=$arResult["FORM_IMAGE"]["HTML_CODE"]
                    ?>
                    <?
                } //endif
                ?>

                <p><?= $arResult["FORM_DESCRIPTION"] ?></p>
            </td>
        </tr>
        <?
    } // endif
    ?>
</table>
<br/>
<?

/***********************************************************************************
 * Form questions
 ***********************************************************************************/
?>
<? if ($arResult["FORM_NOTE"]): ?><?= $arResult["FORM_NOTE"] ?><? endif ?>
<? if ($arResult["isFormErrors"] == "Y"): ?><?= $arResult["FORM_ERRORS_TEXT"]; ?><? endif; ?>
<table class="form-table data-table">
    <thead>
    <tr>
        <th colspan="2">&nbsp;</th>
    </tr>
    </thead>
    <tbody>

     <?
        foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {


           $htmlDate = $arResult["QUESTIONS"]["date_editor"]["HTML_CODE"];
           $htmlComment = $arResult["QUESTIONS"]["COMMENT"]["HTML_CODE"];

        if ($FIELD_SID == "COMMENT"  && $arResult['arResultData']["STATUS_ID"]== 1 ||$FIELD_SID == "date_editor"  && $arResult['arResultData']["STATUS_ID"]== 1 ) {

            $htmlComment = 'style="display: none"';
            $htmlDate = 'style="display: none"';

     } else{


            ?>
        <tr>
            <td>
                <? if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])): ?>
                    <span class="error-fld"
                          title="<?= htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID]) ?>"></span>
                <? endif; ?>
                <?= $arQuestion["CAPTION"] ?><?= $arResult["arQuestions"][$FIELD_SID]["REQUIRED"] == "Y" ? $arResult["REQUIRED_SIGN"] : "" ?>
                <?= $arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />" . $arQuestion["IMAGE"]["HTML_CODE"] : "" ?>
            </td>
            <td>

                <?if($FIELD_SID == "date_editor"  && $arResult['arResultData']["STATUS_ID"]== 2):?>

                    <?$htmlDate = makeDate($arResult["RESULT_TIMESTAMP_X"],$arResult["RESULT_DATE_CREATE"]);

                    $arQuestion["HTML_CODE"] = $htmlDate; ?>

                <?endif;?>
                <?= $arQuestion["HTML_CODE"] ?>

            </td>
        </tr>
        <?
        }
    }//endwhile
    ?>
    </tbody>
    <tfoot>
    <tr>
        <th colspan="2">
            <input type="submit" name="web_form_submit"
                   value="<?= htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>"/>
            &nbsp;<input type="hidden" name="web_form_apply" value="Y"/><input type="submit" name="web_form_apply" value="<?= GetMessage("FORM_APPLY") ?>"/>
            &nbsp;<input type="reset" value="<?= GetMessage("FORM_RESET"); ?>"/>
        </th>
    </tr>
    </tfoot>
</table>


<p>
    <?= $arResult["REQUIRED_SIGN"] ?> - <?= GetMessage("FORM_REQUIRED_FIELDS") ?>
</p>
<?= $arResult["FORM_FOOTER"] ?>
