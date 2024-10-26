<!DOCTYPE html>
<html>
<head>
    <title>DB pull</title>
</head>
<body>


<?php
    $server = "localhost";
    $username = "bogdan";
    $password = "voidnul0";
    $database = "storage";
    $brand = ($_GET["brand"]);
    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "select * from phones";
    $result = mysqli_query($conn, $sql);

    foreach ($result as $row) 
    {
        if ($row["brand"] == $brand) 
        {
            echo "{$row['brand']}'s newest phone is the {$row['model']}, it features the {$row['cpu']} chipset.";
        }
        else 
        {
            echo "Sorry your entry is invalid, please try again."
        }

    mysqli_close($conn);
?>