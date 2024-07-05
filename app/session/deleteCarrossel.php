<?php 
session_start();
include '../db/connection.php';

$carrosselIndex = $_GET["carrosselTitle"];
$carrosselId = $_GET["carrosselId"];

$fabricas = array(
    "carroselSoftware",
    "carroselJogos",
    "carroselCgi",
    "carroselAudioVideo",
);

echo $fabricas[$carrosselIndex]." ".$carrosselId;
// $queryDeleteCarrossel = "DELETE FROM $table WHERE titulo = '".$carrosselTitle."';";

// if(mysqli_query($connection, $queryDeleteCarrossel)){
//     $_SESSION["alertCarrossel"] = $rowCarrossel['titulo']." foi excluido com sucesso.";
// }else{
//     $_SESSION["alertCarrossel"] = "Erro ao excluir o carrossel.";
// }
// header("location: ../../pages/adm/editarCarrosselAdm.php");