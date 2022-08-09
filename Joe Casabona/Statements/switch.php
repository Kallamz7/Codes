<?php
$total = 1;
switch ($total) {
    case 1:
        echo 'The total is 1';
        break;
    case 2:
        echo 'The total is 2';
        break;
    case 3:
        echo 'The total is 3';
        break;
    case 4:
        echo 'The total is 4';
        break;
    default:
        echo 'Too Expensive!';
}

$Turtles = 'Raph';
$Bandana = '';
switch ($Turtles) {
    case 'Leo':
        $Bandana = 'Blue';
        break;
    case 'Raph':
        $Bandana = 'Red';
        break;
    case 'Mikey':
        $Bandana = 'Orange';
        break;
    case 'Donnie':
        $Bandana = 'Purple';
        break;
}

echo "<p>$Bandana</p>";
