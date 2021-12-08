<?php

function requireValidSession() {
    $user = $_SESSION['DbValidation'];
    if(!isset($user)) {
        header('Location: login.php');
        exit();
    } 
}