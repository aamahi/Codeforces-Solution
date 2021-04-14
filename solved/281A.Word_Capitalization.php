<?php

$string =readline();
$s=str_split($string);
$length= strlen($string);
if(ord($s[0])>=97 && ord($s[0])<=122) {
    for($i=0;$i<$length;$i++){
        if($i==0){
            $ascii = ord($s[0]);
            $n = $ascii - 32;
            $s[$i]=chr($n);
        }
        echo $s[$i];
    }

}
else
    echo $string;