<?php
$email = $_POST['email']?? null;
var_dump($email);

function checkEmail($email){
    if(str_contains($email,'@') && str_contains($email, '.')){
        echo 'your email is correct ';
    }else{
        echo 'your email is not correct';
    };
}
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
    <p><?php echo checkEmail($email)?></p>
</body>
</html>