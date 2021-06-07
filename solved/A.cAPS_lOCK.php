<?php

$string =readline();

$s=str_split($string);
$l=strlen($string);
$c=0;
$d=0;

for($i=1;$i<$l;$i++){
    if(ord($s[$i])>=97 && ord($s[$i])<=122){
        $c++;
    }
}
for($i=0;$i<$l;$i++){
    if(ord($s[$i])>=65 && ord($s[$i])<=90){
        $d++;
    }
}

if((ord($s[0])>=97 && ord($s[0])<=122) && $c==0){

            $ascii = ord($s[0]);
            $n = $ascii - 32;
            $s[0]=chr($n);
            echo $s[0];

        for ($j=1;$j<$l;$j++){
            $ascii = ord($s[$j]);
            $n = $ascii + 32;
            $s[$j]=chr($n);
            echo $s[$j];
        }

}
elseif ($d==$l){
    for ($j=0;$j<$l;$j++){
        $ascii = ord($s[$j]);
        $n = $ascii + 32;
        $s[$j]=chr($n);
        echo $s[$j];
    }
}
else{
    echo $string;
}