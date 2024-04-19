<?php
session_start();
include '';


$nomeBancodeTalentos = mysqli_real_escape_string($con,$_POST['nomeBancodeTalentos']);
$cpfBancodeTalentos = mysqli_real_escape_string($con,$_POST['CPFBancodeTalentos']);
$escolaridadeBancodeTalentos = mysqli_real_escape_string($con,$_POST['EcolaridadeBancodeTalentos']);
$dataDeNascimentoBancodeTalentos = mysqli_real_escape_string($con,$_POST['$dataDeNascimentoBancodeTalentos']);
$emailBancodeTalentos = mysqli_real_escape_string($con,$_POST['emailBancodeTalentos']);
$telefoneBancodeTalentos = mysqli_real_escape_string($con,$_POST['telefoneBancodeTalentos']);

//window alert 
if(empty($nomeBancodeTalentos) || empty($cpfBancodeTalentos) || empty($escolaridadeBancodeTalentos) || 
empty($dataDeNascimentoBancodeTalentos) || empty($emailBancodeTalentos) || empty($telefoneBancodeTalentos )){
    header("location:../../../pages/editais/pagBancoTalentos.html");
    exit();
}


// mudar o nome da tabela para o nome do banco 

$sql = "INSERT INTO bancosTalentos () 
VALUES ('$nomeBancodeTalentos','$cpfBancodeTalentos','$escolaridadeBancodeTalentos','$dataDeNascimentoBancodeTalentos',
       '$emailBancodeTalentos','$telefoneBancodeTalentos')";
$result = mysqli_query($con,$sql);
$row=mysqli_num_rows($result);


 