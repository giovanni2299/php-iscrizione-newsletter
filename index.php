<?php
$email = $_POST['email']?? null;
var_dump($email);

include __DIR__ . '/utilities.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iscrizione-NewsLetter</title>
</head>
<body>
    <form action="" method="post">
        <input type="emial" name="email" id="email" placeholder="inserisci la mail">
        <button>invia</button>
    </form>
    <h1><?php echo checkEmail($email)?></h1>
</body>
</html>