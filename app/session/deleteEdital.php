<?php 
include '../db/connection.php';

if($_GET["editalCode"] != "undefined"){
    $editalCode =  $_GET["editalCode"];
    $queryStudents = "DELETE FROM alunosPsg WHERE codigoEdital = '$editalCode'";
    $queryEdital = "DELETE FROM editais WHERE codigo = '$editalCode'";
    $resultStudents = mysqli_query($connection, $queryStudents);
    $resultEdital = mysqli_query($connection, $queryEdital);
    echo "<script>location.href = '../../pages/adm/cadastroAdmEdital.php'; alert('Edital $editalCode excluido com sucesso.')</script>";
}
else{

    echo "<script>location.href = '../../pages/adm/cadastroAdmEdital.php'; alert('Edital não pode ser apagado.')</script>";
}
