<?php
function double($a)
{
    return $a * 2;
}

function tripple(&$a)
{
    $a *= 3;
}

function quadriple()
{
    // global $a;
    $GLOBALS['a'] *= 4;
}

$a = 5;

echo double($a);
echo "<p>$a</p>";

tripple($a);
echo "<p>$a</p>";

$b = 10;
$c = &$b;
$c = 7;

echo "<p>$b</p>";

$bless = array(2, 4, 6);
foreach ($bless as &$jah) {
    tripple($jah);
}

print_r($bless);

$a = 5;
quadriple();
echo "<p>$a</p>";
