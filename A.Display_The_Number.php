<?php

$t = readline();

while ( $t--){
    
    $n = (int) readline(); 
    $digits1 = $n/2;
    if($n%2==0) {
        $ans = $n/2;
        while($ans--) {
            echo "1\n";
        }
    }else{
        $ans = ($n-3)/2;
        echo "7\n";

        while($ans--) {
            echo "1\n";
        }
    }
}