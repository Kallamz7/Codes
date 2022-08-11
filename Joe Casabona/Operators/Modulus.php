<?php
$a = 4;
if ($a % 2 == 0) {
    echo "<p>$a is an even number</p>";
} else {
    echo "<p>$a is an odd number</p>";
}

$b = 15;
$c = 15;

echo ($b % $c == 0) ? "<p>$c is a factor of $b" : "<p>$c is not a factor of $b</p>";

$d = 4;
echo ($d / $d == 1 || $d / 1 == $d) ? "<p>$d is a prime number" : "<p>$d is not a prime number</p>";

// cannot use it to test for prime numbers