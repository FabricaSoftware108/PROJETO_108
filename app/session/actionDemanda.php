<?php
session_start();
if($_POST['demandaCode']){
    
    $_SESSION['demandaCode'] = $_POST['demandaCode'];

    header('location: ../../pages/adm/relatorioDetalhadoEmpresa.php');
    exit();
}
else{
    header('location: ../../pages/adm/relatorioeditaladm.php');
    exit();
}