<?php

session_start();

if (!$_SESSION["editalCode"]){ 
    header('location: ../../pages/editais/pagEdital.php'); 
    exit();
}

