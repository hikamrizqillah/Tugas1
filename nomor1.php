<?php

$a = 3;
$b = 26;

//cara1
$c = $a; //3
$a = $b; //26
$b = $c; //3

echo "Hasil cara pertama = ".$a." dan ".$b;

echo "<br>";

//cara2

$a = 3;
$b = 26;

$a += $b; //7
$b = $a - $b; //3
$a = $a - $b; //26

echo "Hasil cara kedua = ".$a." dan ".$b;