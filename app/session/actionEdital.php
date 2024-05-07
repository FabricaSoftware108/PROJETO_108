<?php
session_start();
if($_POST['editalCode']){
    $_SESSION['editalCode'] = $_POST['editalCode'];

    header('location: ../../pages/adm/relatorioDetalhadoVagasEmprego.php');
    exit();
}
else{
    header('location: ../../pages/adm/relatorioVagasEmprego.php');
    exit();
}