<?php

$n =(int)readline();
$values =readline();
$length =strlen($values);
$value_line =explode(" ",$values);
$flag=0;
$police=0;

for($i=0;$i<$length;$i++){
    if($value_line[$i]>=1){
        $police+=$value_line[$i];
    }
    if($value_line[$i]==-1){
        if($police>0){
            $police=$police-1;
        }
        else{
            $flag++;
        }
    }

}
echo $flag;