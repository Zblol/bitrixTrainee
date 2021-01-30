
<?
function AgentReportNewUser()
{
    $time1 = strtotime("-24 hours");
    $time2 = strtotime("now");
    $filter = array(
        ">=DATE_REGISTER" => date('d.m.Y H:i:s', $time1),
        "<=DATE_REGISTER" => date('d.m.Y H:i:s', $time2),
    );
    $result = Bitrix\Main\UserTable::getList(array(
        "select" => array("ID", "DATE_REGISTER", "LOGIN", "EMAIL"),
        "filter" => $filter,
    ));

    while ($rsUser = $result->Fetch()) {
        $arDataEmail [] = array(
            $rsUser["EMAIL"],
            $rsUser["DATE_REGISTER"]->toString(),
        );
    }
    if ( $arDataEmail !== null) {
        Bitrix\Main\Mail\Event::send(array(
            "EVENT_NAME" => "NEW_USER",
            "LID" => "s1",
            "C_FIELDS" => array(
                "EMAIL_DATE" =>  $arDataEmail,
            ),
        ));
    }
    return "AgentReportNewUser();";
}