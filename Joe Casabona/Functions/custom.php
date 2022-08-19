<?php
function is_palindrome($string)
{
    $string = str_replace(' ', '', strtolower($string));

    return ($string == strrev($string));
}

$check_string = 'Race car';

if (is_palindrome($check_string)) {
    echo "$check_string is a palindrome";
} else {
    echo 'Please find another word.';
}
