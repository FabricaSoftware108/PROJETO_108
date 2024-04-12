<?php

session_start();

if (!$_SESSION['login']){ /* perguntar na daily */
    header('location: ../../pages/adm/loginAdm.html'); /* perguntar na daily */
    exit();
}

?>