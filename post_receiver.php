<?php
echo "<pre>";
    print_r($_POST);
echo "</pre>";

$myFile = "gotcha.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
//$stringData = "Vals: \r\n";
//fwrite($fh, $stringData);
//$stringData = "New Stuff 2\n";
date_default_timezone_set("America/Chicago");

$stringData = date("Y-m-d") . " " . date("h:i:sa") . " " . print_r($_POST, true). "\r\n"; 
fwrite($fh, $stringData);
fclose($fh);
?>