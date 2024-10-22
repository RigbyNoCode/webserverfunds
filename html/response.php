<!DOCTYPE html>
<html>
<head>
    <title>Form Response</title>
</head>
<body>
<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $server = "localhost";
    $username = "bogdan";
    $password = "voidnul0";
    $database = "storage";

    $conn = mysqli_connect($server, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";

    // Select and display data
    $sql = "SELECT * FROM user_data;";
    $result = mysqli_query($conn, $sql);
    echo "Number of records: " . mysqli_num_rows($result) . "<br>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: {$row['id']} | ";
        echo "Name: {$row['user_name']} | ";
        echo "Age: {$row['age']} | ";
        echo "Card Number: {$row['card_number']} | ";
        echo "Expiration: {$row['card_expiration']} | ";
        echo "CVV: {$row['cvv']}<br>";
    }

    // Insert data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $card_number = mysqli_real_escape_string($conn, $_POST['Cnbr']);
    $expire = mysqli_real_escape_string($conn, $_POST['expire']);
    $cvv = mysqli_real_escape_string($conn, $_POST['cvv']);

    $sql = "INSERT INTO user_data (user_name, age, card_number, card_expiration, cvv) 
            VALUES ('$name', '$age', '$card_number', '$expire', '$cvv');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
</body>
</html>