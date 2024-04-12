<?php

session_start();

if (!$_SESSION['login']){ /* to do */
    header('location: ../../pages/adm/loginAdm.html'); 
    exit();
}

?>