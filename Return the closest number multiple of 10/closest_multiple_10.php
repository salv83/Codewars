<?php
function closest_multiple_10($n)
{
    (int) $min = $n;
    (int) $max = $n;
    $modulemax = -1;
    $modulemin = -1;
    while ($modulemax != 0) {
        $max++;
        $modulemax = $max % 10;
        
    }
    while ($modulemin != 0) {
        $min--;
        $modulemin = $min % 10;
        
    }
    $array       = str_split($n);
    $digitnumber = sizeof($array);
    
    if ($array[$digitnumber - 1] == 0) {
        return $n;
    } else {
        if ($array[$digitnumber - 1] < 5) {
            if ($min < 0)
                return 0;
            else
                return $min;
        } else {
            return $max;
        }
    }
}

for ($i = 0; $i < 10; $i++) {
    $test = rand(1, 100);
    echo ($test);
    echo ("<br>");
    echo closest_multiple_10($test);
    echo ("<br>");
    echo ("<br>");
}
?>