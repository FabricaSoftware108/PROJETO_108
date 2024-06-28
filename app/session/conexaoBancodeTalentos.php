<?php

session_start();
include '../db/connection.php';

// Verifica se os valores foram recebidos do formulário antes de usá-los
if (empty($_POST["nome"]) && empty($_POST["cep"]) && empty($_POST["cpf"]) && empty($_POST["escolaridade"]) && empty($_POST["dataNascimento"]) && empty($_POST["email"]) && 
    empty($_POST["telefone"]) && empty($_POST["uf"]) && empty($_POST["rua"]) && empty($_POST["bairro"]) && empty($_POST["cidade"]) && empty($_POST["numero"]) && 
    empty($_POST["github"]) && empty($_POST["linkedin"])) {


    echo "<script language='javascript'>window.alert('Não foi possível efetuar o cadastro'); window.location.href='../../pages/editais/pagBancoTalentos.html';</script>";


} else {
    
    $nome = $_POST["nome"];
    $cep = $_POST["cep"];
    $cpf = $_POST["cpf"];
    $escolaridade = $_POST["escolaridade"];
    $dataNascimento = $_POST["dataNascimento"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $estado = $_POST["uf"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $numero = $_POST["numero"];
    $github = $_POST["github"];
    $linkedin = $_POST["linkedin"];

    $query = "INSERT INTO bancosTalentos (cpf, nome, cep, escolaridade, dataNascimento, email, telefone, estado, cidade, bairro, rua, numero, github, linkedin) 
              VALUES ('$cpf', '$nome', '$cep', '$escolaridade', '$dataNascimento', '$email', '$telefone', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$github', '$linkedin')";

    $result = mysqli_query($connection, $query);
    
    echo "<script language='javascript'>window.alert('Cadastro efetuado com sucesso'); window.location.href='../../pages/editais/pagBancoTalentos.html';</script>";
} 
// echo "<script language='javascript'>window.alert('Por favor, preencha todos os campos do formulário'); window.location.href='../../pages/editais/pagBancoTalentos.html';</script>";

exit();
