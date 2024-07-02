<?php
session_start();

if (isset($_POST['alunoCode'])) {
    $_SESSION['alunoCode'] = $_POST['alunoCode'];
    $index = $_POST['index'];
    $alunoCode = $_POST['alunoCode'];
    header("location: ../../pages/adm/relatorioDetalhadoAluno.php?index=$index&alunoCode=$alunoCode");
    exit();
} else {
    header('location: ../../pages/adm/relatorioDetalhadoAluno.php');
    exit();
}
?>