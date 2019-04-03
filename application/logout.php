<?php

require 'vendor/autoload.php';
use rcastera\Browser\Session\Session;

$userSession = new Session();
if($userSession->isRegistered()){
    $userSession->end();
    header('location: ./');
    exit;
}else{
    header('location: ./');
    exit;
}