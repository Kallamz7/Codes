<?php
$Brothers = array(
    'Unde' => array(
        'Job' => 'Student',
        'DOB' => '26-July-2001',
        'City' => 'Warri',
    ),

    'Noah' => array(
        'Job' => 'Teacher',
        'DOB' => '12-Nov-2001',
        'City' => 'Lubumbasha',
    ),

    'Justice' => array(
        'Job' => 'Worker/Student',
        'DOB' => '27-Aug-2003',
        'City' => 'Warri',
    ),

    'Victor' => array(
        'Job' => 'Civil Servant',
        'DOB' => '26-Dec-1993',
        'City' => 'Jos',
    ),
);

echo '<pre>';
print_r($Brothers);
echo '</pre>';

echo '<p>' . $Brothers['Noah']['City'];

echo '<p>' . '<blockquote>' . $Brothers['Justice']['DOB'] . '</blockquote>' . '</p>';

echo '<p>' . '<cite>' . $Brothers['Victor']['Job'] . '</cite>' . '</p>';

echo '<pre>';
print_r($Brothers['Victor']);
echo '</pre>';
