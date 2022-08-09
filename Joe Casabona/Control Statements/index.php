<?php
if (10 < 2) {
    echo "This is the winner!\n\n";
} else if (10 < 3) {
    echo "This is the winner 2!\n\n";
} else if (10 < 3) {
    echo "This is the winner 3!\n\n";
} else if (10 < 30) {
    echo "This is the winner 4!\n\n";
} else {
    echo "Everyone losses!\n\n";
}


$is_logged_in = false;

if ($is_logged_in) {
    echo "<p>Welcome to my website!</p>\n\n";
} else {
    echo "<p>Awwn try again</p>\n\n";
}

$i = 10;

if (11 == $i) {
    echo "<p>Welcome to my website!</p>\n\n";
} else {
    echo "<p>Awwn try again</p>\n\n";
}
?>

<?php $login_to_webpage = true; ?>

<?php if ($login_to_webpage) : ?>
    <header>
        <h3>Welcome to my Webpage.</h3>
        <p>So glad you could join us.</p>
    </header>
<?php endif ?>