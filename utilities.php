<?php

function checkEmail($email){
    if(str_contains($email,'@') && str_contains($email, '.')){
        echo 'your email is correct';
    }else{
        echo 'your email is not correct';
    };
}