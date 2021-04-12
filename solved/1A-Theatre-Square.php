<?php
 
$line  = readline();
$n_m_a = explode(' ', $line);
$n = (int) $n_m_a[0];
$m = (int) $n_m_a[1];
$a = (int) $n_m_a[2];
 
echo (bcmul ( strval(ceil($n/$a)) , strval(ceil($m/$a)) ));
