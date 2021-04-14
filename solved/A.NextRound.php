<?php

$parameter = readline();
$parameter_line=explode(" ",$parameter);

$sum=0;

$n= (int)$parameter_line['0'];
$k=(int)$parameter_line['1'];

    $values = readline();


        $values_array=array_pad(explode(" ",$values),2,null) ;


for($i=0;$i<$n;$i++){
    if($values_array[$i]!=0) {
        if ($values_array[$i] >= $values_array[$k-1]) {
            $sum++;
        }
    }
}
echo $sum;




