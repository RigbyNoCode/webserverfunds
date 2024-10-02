<!DOCTYPE html>
<html>
    
<head>
    <title> Form Respnse </title>
    <body>
        <p>GET: <?= var_dump($_GET) ?></p>
        <p>POST: <?= var_dump($_POST) ?></p>

        <p> Your Name is: <?= htmlspecialchars ($_POST['name']) ?></p>
        <p> Your Age is: <?= htmlspecialchars ($_POST['age']) ?></p>
        <p> Your Card Number: <?= htmlspecialchars ($_POST['Cnbr']) ?></p>
        <p> Expiration: <?= htmlspecialchars ($_POST['expire']) ?></p>
        <P> CVV: <?= htmlspecialchars ($_POST['cvv']) ?></p>
        <p> your consent <?= htmlspecialchars ($_POST['rights']) ?></p>
    </body> 
</head>
</html>