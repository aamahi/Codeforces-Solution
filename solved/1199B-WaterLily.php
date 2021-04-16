<?php
$parameter =readline();
$parameter_line = explode(" ",$parameter);

$h=(float)$parameter_line["0"];
$l=(float)$parameter_line["1"];

$x = (float)((($l*$l)-($h*$h))/(2*$h));
echo $x;