<?php

$number = readline();
$str    = readline();

for ($i =0; $i<$number; $i++){
    $d = '';
   if(($number-$i) %2 ){
       $d = $d + $str[$i];
   }else{
       $d = $str[$i]+$d;
   }
}
echo $d;

?>