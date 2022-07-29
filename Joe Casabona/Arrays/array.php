<?php

//Indexible Arrays
$Colours = array('red', 'blue', 'yellow', 'green', 'brown');

echo '<pre>';
print_r($Colours);
echo '</pre>';

echo '<p>' . $Colours[0] . '</p>', '<p>' . $Colours[3] . '</p>';

$Colours[] = 'orange';

echo '<pre>';
print_r($Colours);
echo '</pre>';

//Associative Arrays
$Home_town = array(
    'Abraham' => 'Jos, Plateau',
    'Tega' => 'Warri, Delta',
    'Timothy' => 'Benin, Edo',
);

echo '<pre>';
print_r($Home_town);
echo '</pre>';

echo '<p>' . $Home_town['Abraham'] . '</P>';

echo '<p>' . $Home_town['Timothy'] . '</P>';
