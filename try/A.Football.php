<?php

$s = readline();
$contiguous = 1;

for($i =1 ; $i < strlen($s); ++$i){
    if ($s[$i] == $s[$i - 1])
    {
        $contiguous += 1;
        if ($contiguous == 7)
        {
            echo "YES";
        }
    }
    else
    {
        $contiguous = 1;
    }
}
echo "NO";

