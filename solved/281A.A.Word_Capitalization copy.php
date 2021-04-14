<?php

$line = readline();

$output  =  '';
$output .= strtoupper($line[0]);
$output .= substr($line,1);
echo $output;

