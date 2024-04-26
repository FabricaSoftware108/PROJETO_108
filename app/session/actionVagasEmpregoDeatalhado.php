<?php
session_start();
if($_POST['vagasEmpregoCodigo']){
    $_SESSION['vagasEmpregoCodigo'] = $_POST['vagasEmpregoCodigo'];

    header('location: ../../pages/adm/relatorioDetalhadoVagasEmprego.php');
    exit();
}
else{
    header('location: ../../pages/adm/relatorioVagasEmprego.php');
    exit();
}