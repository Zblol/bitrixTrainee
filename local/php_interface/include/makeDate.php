<?function makeDate($date1,$date2)
{

    $a = strtotime($date1);
    $b = strtotime($date2);
    $diff = $a - $b;
    $diff = abs($diff);

    $diff_m = intval($diff / 60 );
    $diff_M = $diff_m % 60;
    $diff_h = intval($diff / 3600);
    $diff_H = $diff_h % 3600;
    $diff_d = intval($diff / 86400);
    $diff_D = $diff_d % 86400;
    for ($i = 0; $diff_H >= 24; $i++){
        $diff_D++;
        $diff_H = $diff_H - 24;

    }

    $time = "Днeй: ".$diff_D." Часов: ".$diff_H." Минут: ".$diff_M;

    return $time;
}?>