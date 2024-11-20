<!DOCTYPE html>
<html?>
<head>
<title>Toggle</title>
</head>
<body>
<?php
$output = shell_exec("gpio toggle 0");

if ($output !== null) {
    echo "LED toggled successfully!";
} else {
    echo "Error toggling LED.";
}
?>
</body>
</html>
