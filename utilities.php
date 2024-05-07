<?php

function checkEmail()
{
    $email = $_POST['email']?? null;

    if($email === null){
        echo 'insierisci la tua email';
    }else{
        if (str_contains($email, '@') && str_contains($email, '.')) {
            return true;
            
        } else {
            return false;
            
        };

    }
}
