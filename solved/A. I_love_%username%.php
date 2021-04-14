<?php

$n=(int)readline();

$score=readline();

$score_line=explode(" ",$score);

$max = $score_line[0];
$min = $score_line[0];

$flag=0;

for($i=0;$i<$n;$i++){
    if($score_line[$i]>$max){
        $max =$score_line[$i];
        $flag++;
    }
    if($score_line[$i]<$min){
        $min =$score_line[$i];
        $flag++;
    }

}
echo $flag;