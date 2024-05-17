<?php

session_start();

if (!$_SESSION['email']){ 
    header('location: ../../pages/adm/loginAdm.php'); 
    exit();
}
