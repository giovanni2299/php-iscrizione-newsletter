<?php
$email = $_POST['email']?? null;
// var_dump($email);

include __DIR__ . '/utilities.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Iscrizione-NewsLetter</title>
</head>
<body style="background-color: #aaaaaa;">
    <nav class="text-center pt-4">
        <form  class="mb-3" action="" method="post">
            <label class="d-block pb-1" for="email">Inserisci la tua mail: </label>
            <input type="email" name="email" id="email" placeholder="inserisci la mail">
            <button class="btn btn-primary">invia</button>
        </form>

    </nav>
    <div class="container-fluid text-center">

        <h1><?php echo checkEmail($email)?></h1>
    </div>
</body>
</html>