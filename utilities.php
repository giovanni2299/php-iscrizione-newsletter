<?php

function checkEmail($email)
{
    if($email === null){
        echo 'insierisci la tua email';
    }else{
        if (str_contains($email, '@') && str_contains($email, '.')) {
            echo '<div class="alert alert-success" role="alert">
            success !
            </div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">
            warning alert—check it out you missed a . or @ !
            </div>';
        };

    }
}
