<?php
$raw = `./bme280`;
echo $raw;
$deserialized = json_decode($raw, true);
var_dump($deserialized);
echo $deserialized["temperature"];
echo $deserialized["altitude"];
echo $deserialized["pressure"];
?>