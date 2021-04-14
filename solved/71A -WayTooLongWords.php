<?php

$n    =(int)readline();
$words=array($n);

for ( $i=0; $i<$n; $i++ ){

    $words[$i]= readline();
}

foreach ($words as $word){

    $b=strlen($word);

    if($b>10) {
        $c = str_split($word);
        echo $c[0];
        echo $b - 2;
        echo $c[$b - 1];
        echo "\n";
    }
    else{
        echo $word;
        echo "\n";
    }

}