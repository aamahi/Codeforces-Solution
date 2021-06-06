<?php

$TC=readline();
$TCs=str_split($TC);

$cards=readline();
$card=explode(" ",$cards);

$l=count($card);
$c=0;

for($i=0;$i<$l;$i++){
    $s=str_split($card[$i]);
    if($s[0]==$TCs[0] || $s[1]==$TCs[1]){
        $c=1;
        break;
    }
}

if($c==1){
    echo "YES";
}
else{
    echo "NO";
}