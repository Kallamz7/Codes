<?php
$logged_in = true;
$name = 'Joanne';
// if ($logged_in) {
//     $message = "Welcome Back!";
// } else {
//     $message = "Hello There!";
// }

echo 'Welcome' . ($logged_in ? ' Back!' : '!');

$name = " $name" ?: ' User';

// echo $message;

echo $name;
