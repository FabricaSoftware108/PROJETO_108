<?php
session_start();
session_destroy();
header('location: ../../pages/adm/loginAdm.html');
exit();
?>
