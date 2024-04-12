<?php
session_start();
session_destroy();
header('location: loginAdm.html');/* perguntar na daily */
exit();
?>
