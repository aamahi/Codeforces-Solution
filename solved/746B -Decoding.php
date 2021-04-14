<?php
$n =(int)readline();

$string=readline();

$string_line=str_split($string);
$size=$n;
$odd=[];
$even=[];
$o=[];
$e=[];
$i=0;

for($n=$size;$n>=1;$n--){

        if($n%2!=0){
            $o[$i] =$string_line[$i];


        }
        else{
            $e[$i] =$string_line[$i];

        }
        $i++;

}

$olenght =count($o);
foreach ($o as $value){

        $odd[] =$value;

}
$elenght=count($e);
foreach ($e as $value){

        $even[] =$value;

}
if($size==1){
    echo $string;
}
else{
    for($i=$elenght-1;$i>=0;$i--){
        echo $even[$i];
    }
    for($i=0;$i<$olenght;$i++){
        echo $odd[$i];
    }
}




