<?php
$colors = array('red', 'blue', 'green', 'brown');

for ($i = 0; $i < sizeof($colors); $i++) {
    echo '<p>' . $colors[$i] . '</p>';
}

foreach ($colors as $color) {
    echo "<p>$color</p>";
}

$Home_town = array(
    'Abraham' => 'Jos, Plateau',
    'Tega' => 'Warri, Delta',
    'Timothy' => 'Benin, Edo',
);

foreach ($Home_town as $name => $town) {
    echo "<p>$name stays in $town</p>";
}
