<?php

session_start();

if (!$_SESSION['o que vai aqui?']){
    header('location: index.html');
    exit();
}

?>