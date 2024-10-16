<!DOCTYPE html>
<html>
    
<head>
    <title> Form Response </title>
    <body>
    <?php
        $server = "localhost";
        $username = "bogdan";
        $password = "voidnul0";
        $database = "storage";
        $conn = mysqli_connect($server, $username, $password, $database);
        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }
        echo "Connected successfully";

        
        $sql = "select * from user_data;"; 
        $result = mysqli_query($conn, $sql);
        echo mysqli_num_rows($result);

        foreach ($result as $row) {
            echo "ID: {$row['id']} | ";
            echo "Name: {$row['user_name']} | ";
            echo "Age: {$row['age']} | ";
            echo "Card Number: {$row['card_number']} | ";
            echo "Expiration: {$row['card_expiration']} | ";
            echo "CVV: {$row['cvv']}<br>";
        }
        $sql = "INSERT INTO user_data (user_name, age, card_number, card_expiration, cvv)
VALUES ($_POST['name'], $_POST['age'], $_POST['Cnbr'], $_POST['expire'], $_POST['cvv']);";

mysqli_close($conn);
?>
</body> 
</head>
</html>