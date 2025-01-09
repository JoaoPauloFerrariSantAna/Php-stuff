<?php

// sets a date with the timezone of UTC
$current_time = new Datetime("UTC");

// formats $current_time to ISO 8001 standard
echo $current_time->format("c") . "<br>";

// formats $current_time to ISO 8001 standard by hand
echo $current_time->format("Y-m-d\TG:i:sP") . "<br>";

echo $current_time->getTimestamp();

echo "<br>";

// set the date to UTC
date_default_timezone_set("UTC");
// formats $current_time to ISO 8001 standard by hand
$current_date = date("Y-m-d\TG:i:sP");

echo $current_date;


?>
