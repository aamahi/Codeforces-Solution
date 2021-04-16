<?php
$n=(int)readline();
$m=$n-1;
$problems=[];
$flag=0;
$flag2=0;

for($i=0;$i<$n;$i++){
    $line=readline();
    $line_array=explode(" ",$line);

    if($line_array['0']!=$line_array['1']){
        $flag++;
    }
    for($j=0; $j<2; $j++){

        $problems[$i][$j]= (int)$line_array[$j];

    }


}
if($flag==0) {
    for ($i = 0; $i < $n; $i++) {
        $j = 0;
       if($problems[$i][$j]<$problems[$i+1][$j]){
           $flag2++;
       }


    }
    if($flag2==0){
        echo "maybe";
    }
    else{
        echo "unrated";
    }


}
else{
    echo "rated";
}