<?php
session_start();
if($_POST['bancoTalentosCodigo']){
    $_SESSION['bancoTalentosCodigo'] = $_POST['bancoTalentosCodigo'];
    $index = $_POST['bancoTalentosCodigo'];

    header("location: ../../pages/adm/relatoriodetalhadobancodetalentos.php?index=$index");
    exit();
}
else{
    header('location: ../../pages/adm/relatorioBancoTalentos.php');
    exit();
}