<?php
session_start();
include '../db/connection.php';

#Dados Pessoais
$nomeAluno = ($_POST['nome']);
$cpfAluno = ($_POST['cpf']);
$rgAluno = ($_POST['rg']);
$emailAluno = ($_POST['email']);
$telefoneAluno = ($_POST['telefone']);
$nomePai = ($_POST['nomePai']);
$nomeMae = ($_POST['nomeMae']);

#Endereço
$ruaAluno = ($_POST['rua']);
$bairroAluno = ($_POST['bairro']);
$numeroEnderecoAluno = ($_POST['numero']);
$cepAluno = ($_POST['cep']);
$complementoAluno = ($_POST['complemento']);

// dar um window alert para orientar o aluno
if(empty($nomeAluno) || empty($cpfAluno) || empty($rgAluno) || empty($telefoneAluno) || empty($emailAluno) || empty($nomeMae) || empty($nomePai) || empty($ruaAluno) || empty($bairroAluno)|| empty($numeroEnderecoAluno) || empty($cepAluno) || empty($complementoAluno)){
    echo "<script>alert('TODOS ESPAÇOS DEVEM ESTAR PREENCHIDOS');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/editais/pagEdital.php'; }, 5);</script>";
    exit();
}


$query = "INSERT INTO alunosPsg () VALUES (null,'$cpfAluno','$nomeAluno','$rgAluno','$telefoneAluno','$emailAluno','$nomePai','$nomeMae','$ruaAluno','$bairroAluno','$numeroEnderecoAluno','$complementoAluno','$cepAluno','{$_SESSION["editalCode"]}');";

$result = mysqli_query($connection, $query);


if ($result){
    echo "<script>alert('CADASTRO FEITO COM SUCESSO');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/editais/pagEdital.php'; }, 5);</script>";
    exit();
} else {
    echo "<script>alert('ERRO AO CADASTRAR');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/editais/pagEdital.php'; }, 5);</script>";
    exit();
}
