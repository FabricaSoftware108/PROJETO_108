<?php
session_start();
session_destroy();
header('location:index.html');/* perguntar na daily */
exit();
?>
