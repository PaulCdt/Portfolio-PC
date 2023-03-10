<?php


if(isConnected() == true){
    $userFirstname = $userData['firstname'];
}
else{
    $userFirstname = "";
}


$template = 'portfolio';
include '../templates/base.phtml';