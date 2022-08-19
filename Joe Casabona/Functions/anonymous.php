<?php
$Kell = 'Kell';
$Tiga = 'Tiga';
$Tasha = 'Tasha';
$Sam = 'Sam';
$Friends = array($Kell, $Tiga, $Tasha, $Sam);

usort($Friends, function ($a, $b) {
    return $a[1] <=> $b[1];
});
?>

<pre>
    <?php print_r($Friends); ?>
</pre>