<!DOCTYPE html>
<html>
    
<head>
    <title> Form Respnse </title>
    <body>
    <?php
        $servername = "localhost"
        $username = "bogdan"
        $password = "voidnul0";
        $database = "storage";
        $conn = mysqli_connect($server, $username, $password, $database);
        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }
        echo "Connected successfully";
        
        $sql = "select * from user_data;"; 
        $sql = "INSERT INTO user_data (user_name, age, card_number, card_expiration, cvv)
VALUES ($_POST['name'], $_POST['age'], $_POST['Cnbr'] $_POST['expire'], $_POST['cvv'])   );";

mysqli_close($conn);
?>
    </body> 
</head>
</html>