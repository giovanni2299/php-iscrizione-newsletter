<?php


function checkEmail($email)
{

    if($email === ''){
        return false;
    }else{
        if (str_contains($email, '@') && str_contains($email, '.')) {
            return true;
            
        } else {
            return false;
            
        };

    }
}
