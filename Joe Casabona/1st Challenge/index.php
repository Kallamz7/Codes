<?php
$name = "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Challenge</title>
</head>

<body>
    <h1>A Story About <?php echo $name ?></h1>
    <p>
        This is a story about a girl named <?php echo $name ?>.
        One day she went on a trip to <?php echo $city ?> to watch a movie in the Cinema's there.
        The name of the movie is called <i><?php echo $movie ?></i> and it was a movie that <?php echo $name ?> loved so much.
        She went with <b><?php echo $friend ?></b>, a friend of hers who lived in <?php echo $city ?>. Before watching the movie, she bought a <?php echo $candy ?> candy snack to take with her into the movie.
    </p>
</body>

</html>

<?php
echo "<h1>Hello, $name! </h1>\n\n";

echo "<p>So glad you could join us in $city today. You will be <b>$friend's</b> guide as you do a range of activities.</p>\n\n";

echo "<p>You will end your day by seeing $movie at 4:00pm. Make sure to bring the money you've been provided. This movie costs \$20. <b>$friend's</b> favourite candy is $candy so make sure to get some before the movie starts.</p>\n\n";

echo '<p>And also ........ "May the force be with you!"</P>';
