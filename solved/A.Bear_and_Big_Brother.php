<?php
$input      = readline();
$input_line = explode(' ', $input);
$a          = (int)($input_line[0]);
$b          = (int)($input_line[1]);
$year       = 0;

while($a<=$b){
    $a = $a*3;
    $b = $b*2;
    $year ++;
}
echo $year."\n";

