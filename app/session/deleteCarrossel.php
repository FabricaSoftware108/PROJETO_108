<?php 
session_start();
include '../db/connection.php';

$carrosselTitle = $_GET["carrosselTitle"];

$querys = array(
    "SELECT * FROM carroselSoftware WHERE titulo = '$carrosselTitle'",
    "SELECT * FROM carroselJogos WHERE titulo = '$carrosselTitle'",
    "SELECT * FROM carroselCgi WHERE titulo = '$carrosselTitle'",
    "SELECT * FROM carroselAudioVideo WHERE titulo = '$carrosselTitle'",
);

$tables = array(
    "carroselSoftware",
    "carroselJogos",
    "carroselCgi",
    "carroselAudioVideo",
);


$rowCheck = 0;
$table;
$count = 0;
$rowCarrossel;

while($rowCheck != 1){
    $rowCheck = mysqli_num_rows(mysqli_query($connection, $querys[$count]));
    if($rowCheck == 1){
        $table = $tables[$count];
        $rowCarrossel = mysqli_fetch_array(mysqli_query($connection, $querys[$count]));
    }
    $count++;
}

$queryDeleteCarrossel = "DELETE FROM $table WHERE id = ".$rowCarrossel['id'];

if(mysqli_query($connection, $queryDeleteCarrossel)){
    $_SESSION["alertCarrossel"] = $rowCarrossel['titulo']." foi excluido com sucesso.";
}else{
    $_SESSION["alertCarrossel"] = "Erro ao excluir o carrossel.";
}
header("location: ../../pages/adm/editarCarrosselAdm.php");