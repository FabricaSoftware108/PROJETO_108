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
    header("location:../../pages/editais/cadastroAlunoPsg.php");
    exit();
}


$query = "INSERT INTO alunosPsg () VALUES (null,'$cpfAluno','$nomeAluno','$rgAluno','$telefoneAluno','$emailAluno','$nomePai','$nomeMae','$ruaAluno','$bairroAluno','$numeroEnderecoAluno','$complementoAluno','$cepAluno','50/2024');";

$result = mysqli_query($connection, $query);


if ($result){
    header("location: ../../pages/editais/cadastroAlunoPsg.php");
    exit();
} else {
    echo "<script>alert('ERRO AO CADASTRAR: " . $connection->error . "');</script>";
    header("location: ../../pages/editais/cadastroAlunoPsg.php");
    exit();
}
?>

 