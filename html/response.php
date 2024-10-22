<!DOCTYPE html>
<html>
<head>
    <title>Form Response</title>
</head>
<body>
<?php

    $server = "localhost";
    $username = "bogdan";
    $password = "voidnul0";
    $database = "storage";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";


    $sql = "SELECT * FROM user_data;";
    $result = mysqli_query($conn, $sql);
    echo "Number of records: " . mysqli_num_rows($result) . "<br>";

/*  
  foreach($result as $row) {
        echo "ID: {$row['id']} | ";
        echo "Name: {$row['user_name']} | ";
        echo "Age: {$row['age']} | ";
        echo "Card Number: {$row['card_number']} | ";
        echo "Expiration: {$row['card_expiration']} | ";
        echo "CVV: {$row['cvv']}<br>";
    }
*/

    $name = ($_POST['name']);
    $age = ($_POST['age']);
    $card_number = ($_POST['Cnbr']);
    $expire = ($_POST['expire']);
    $cvv = ($_POST['cvv']);

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