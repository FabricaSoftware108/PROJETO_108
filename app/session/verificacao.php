<?php

session_start();

if (!$_SESSION['login']){ /* perguntar na daily */
    header('location: index.html'); /* perguntar na daily */
    exit();
}

?>