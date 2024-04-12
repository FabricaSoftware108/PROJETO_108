<?php

session_start();

if (!$_SESSION['login']){ /* perguntar na daily */
    header('location: loginAdm.html'); /* perguntar na daily */
    exit();
}

?>