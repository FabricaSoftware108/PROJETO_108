<?php
session_start();
if($_POST['bancoTalentosCodigo']){
    $_SESSION['bancoTalentosCodigo'] = $_POST['bancoTalentosCodigo'];

    header('location: ../../pages/adm/relatoriodetalhadobancodetalentos.php');
    exit();
}
else{
    header('location: ../../pages/adm/relatorioBancoTalentos.php');
    exit();
}