<?php
$a = 10 > 5;
$b = 3 != 3;
$c = $a && $b;
$d = $a || $b;
$e = $a && $c;
$f = $a || $d;
$g = $a && $d && $f;
$h = $a ^ $d ^ $f;


$logic = array($a, $b, $c, $d, $e, $f, $g, $h);

echo '<pre>';
var_dump($logic);
echo '</pre>';
