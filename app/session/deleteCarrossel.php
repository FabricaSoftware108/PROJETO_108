<?php 
session_start();
include '../db/connection.php';

$carrosselIndex = $_GET["carrosselIndex"];
$carrosselId = $_GET["carrosselID"];

$fabricas = array(
    "carroselSoftware",
    "carroselJogos",
    "carroselCgi",
    "carroselAudioVideo",
);

$queryDeleteCarrossel = "DELETE FROM {$fabricas[$carrosselIndex]} WHERE id = $carrosselId";
if(mysqli_query($connection, $queryDeleteCarrossel)){
    $_SESSION["alertCarrossel"] = "Carrossel foi excluido com sucesso.";
}
else{
    $_SESSION["alertCarrossel"] = "Erro ao excluir o carrossel.";
}
header("location: ../../pages/adm/editarCarrosselAdm.php");
