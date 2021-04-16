<?php

$n=readline();
$string=readline();
$s=str_split($string);

$ans="";
$a=0;

for ($i=0;$i<$n-1;$i++){
    $b=0;
    for ($j=0;$j<$n-1;$j++){
        if($s[$i]==$s[$j] && $s[$i+1]==$s[$j+1]){
            $b++;
            if($a<$b){
                $a=$b;
                $ans=$s[$i].$s[$i+1];
            }
        }
    }
}
echo $ans;