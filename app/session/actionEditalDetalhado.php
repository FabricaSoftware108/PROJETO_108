<?php
session_start();
if($_POST['alunoCode']){
    
    $_SESSION['alunoCode'] = $_POST['alunoCode'];

    header('location: ../../pages/adm/relatorioDetalhadoAluno.php');
    exit();
}
else{
    header('location: ../../pages/adm/relatorioDetalhadoAluno.php');
    exit();
}