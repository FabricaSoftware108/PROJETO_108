<?php

session_start();
include '../db/connection.php';

// Verifica se os valores foram recebidos do formulário antes de usá-los
if (!empty($_POST["nome"]) && !empty($_POST["sobrenome"]) && !empty($_POST["cpf"]) && !empty($_POST["escolaridade"]) && !empty($_POST["dataNascimento"]) && !empty($_POST["email"]) && !empty($_POST["telefone"]) && !empty($_POST["uf"]) && !empty($_POST["rua"]) && !empty($_POST["bairro"]) && !empty($_POST["cidade"]) && !empty($_POST["numero"]) && !empty($_POST["github"]) && !empty($_POST["linkedin"])) {
    $nome = mysqli_real_escape_string($connection, $_POST["nome"]);
    $sobrenome = mysqli_real_escape_string($connection, $_POST["sobrenome"]);
    $cpf = mysqli_real_escape_string($connection, $_POST["cpf"]);
    $escolaridade = mysqli_real_escape_string($connection, $_POST["escolaridade"]);
    $dataNascimento = mysqli_real_escape_string($connection, $_POST["dataNascimento"]);
    $email = mysqli_real_escape_string($connection, $_POST["email"]);
    $telefone = mysqli_real_escape_string($connection, $_POST["telefone"]);
    $estado = mysqli_real_escape_string($connection, $_POST["uf"]);
    $rua = mysqli_real_escape_string($connection, $_POST["rua"]);
    $bairro = mysqli_real_escape_string($connection, $_POST["bairro"]);
    $cidade = mysqli_real_escape_string($connection, $_POST["cidade"]);
    $numero = mysqli_real_escape_string($connection, $_POST["numero"]);
    $github = mysqli_real_escape_string($connection, $_POST["github"]);
    $linkedin = mysqli_real_escape_string($connection, $_POST["linkedin"]);

    $query = "INSERT INTO bancosTalentos (cpf, nome, sobrenome, escolaridade, dataNascimento, email, telefone, estado, cidade, bairro, rua, numero, github, linkedin) 
              VALUES ('$cpf', '$nome', '$sobrenome', '$escolaridade', '$dataNascimento', '$email', '$telefone', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$github', '$linkedin')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        echo "<script language='javascript'>window.alert('Não foi possível efetuar o cadastro'); window.location.href='../../pages/editais/pagBancoTalentos.html    ';</script>";
    } else {
        echo "<script language='javascript'>window.alert('Cadastro efetuado com sucesso'); window.location.href='../../pages/editais/pagBancoTalentos.html';</script>";
    }
} else {
    echo "<script language='javascript'>window.alert('Por favor, preencha todos os campos do formulário'); window.location.href='../../pages/editais/pagBancoTalentos.html';</script>";
}

exit();
?>
