<?php

$looper = readline();
$solved = 0;

while($looper--){
    $ok = 0;
    $line = readline();
    $line_array = explode(' ', $line);
    $ok += array_sum($line_array);

    if ( $ok >= 2) {
        $solved = $solved +1;
    }
}
echo $solved."\n";

