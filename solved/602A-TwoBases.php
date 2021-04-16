<?php

$param1=readline();
$xnum=readline();
$param2=readline();
$ynum=readline();

$param1_line=explode(" ",$param1);
$param2_line=explode(" ",$param2);

$n=$param1_line[0];
$bx=$param1_line[1];


$m=$param2_line[0];
$by=$param2_line[1];


$x=explode(" ",$xnum);
$y=explode(" ",$ynum);

$x_value=0;
$y_value=0;
if($bx!=10){
    for($i=0;$i<$n;$i++){
        $p1=1;
        $loop=$n-1;
        for($j=$i;$j<$loop;$j++){
            if($i==$n-1){
                $bx=1;
            }
            else{
                $p1=$p1*$bx;
            }

        }
        $x_value=$x_value+($x[$i]*$p1);
    }

}
else{
    $x_value=implode($x);

}
if($by!=10){
    for($i=0;$i<$m;$i++){
        $p1=1;
        $loop=$m-1;
        for($j=$i;$j<$loop;$j++){
            if($i==$m-1){
                $by=1;
            }
            else{
                $p1=$p1*$by;
            }

        }
        $y_value=$y_value+($y[$i]*$p1);
    }

}
else{
    $y_value=implode($y);

}

if($x_value>$y_value){
    echo ">";
}
elseif($x_value<$y_value){
    echo "<";
}
else{
    echo "=";
}