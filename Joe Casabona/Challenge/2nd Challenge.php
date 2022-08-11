<?php
$min = 1;
$max = 50;
$guess = 17; //Change this value to test!
$num = 17; // Change this value to test!

// If you really want to go nuts, try this:
// $num = rand($min, $max);

if ($guess < $min || $guess > $max) {
    echo '<p>You went too far!</p>';
} else {
    if ($num == $guess) {
        echo '<h3>You are a genius!</h3>';
    } else if ($num > $guess) {
        echo '<p>Your guess is too low!</p>';
    } else {
        echo '<p>Your guess is too High!</p>';
    }
}

print_r($num);
