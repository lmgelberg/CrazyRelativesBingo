<?php
$visits_file = "visits.txt";
$counter = fopen($visits_file, "r");
$total = fread($counter, filesize($visits_file));
fclose($counter);
$total++;
$counter = fopen($visits_file, "w");
fwrite($counter, $total);
fclose($counter);
?>