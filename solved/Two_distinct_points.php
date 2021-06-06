<?php

$q=readline();

for($i=0;$i<$q;$i++){
    $string=readline();
    $s=explode(" ",$string);
    $l1=$s[0];
    $r1=$s[1];
    $l2=$s[2];
    $r2=$s[3];

    if ($l1 != $l2)
        echo $l1." ".$l2;
    elseif($l1 != $r2)
        echo $l1." ".$r2;
    elseif ($r1 != $l2)
        echo $r1." ".$l2;
    elseif ($r1 != $r2)
        echo $r1." ".$r2;

    echo "\n";
}