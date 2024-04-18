<?php
session_start();
include '../db/connection.php';

#Dados Pessoais
$nomeAluno = mysqli_real_escape_string($con,$_POST['nomeAluno']);
$cpfAluno = mysqli_real_escape_string($con,$_POST['CPFaluno']);
$rgAluno = mysqli_real_escape_String($con,$_POST['RGaluno']);
$emailAluno = mysqli_real_escape_string($con,$_POST['emailAluno']);
$telefoneAluno = mysqli_real_escape_string($con,$_POST['TelefoneAluno']);
$nomePai = mysqli_real_escape_String($con,$_POST['NomePai']);
$nomeMae = mysqli_real_escape_String($con,$_POST['NomeMãe']);

#Endereço
$ruaAluno = mysqli_real_escape_String($con,$_POST['Rua']);
$bairroAluno = mysqli_real_escape_String($con,$_POST['Bairro']);
$numeroEnderecoAluno = mysqli_real_escape_String($con,$_POST['Número']);
$cepAluno = mysqli_real_escape_String($con,$_POST['Cep']);
$complementoAluno = mysqli_real_escape_String($con,$_POST['Complemento']);

// dar um window alert para orientar o aluno
if(empty($nome) || empty($cpfAluno) || empty($rgAluno) || empty($telefoneAluno) || empty($emailAluno) || empty($nomeMae) || empty($nomePai) || empty($ruaAluno) || empty($bairroAluno)|| empty($numeroEnderecoAluno) || empty($cepAluno) || empty($complementoAluno)){
    header("location:../../pages/editais/cadastroAlunoPsg.php");
    exit();
}

$query = "INSERT INTO alunosPsg (cpf, nome, rg, telefone, email, nomeMae, nomePai, rua, bairro, numero, cep, complemento) 

VALUES ('$nomeAluno','$cpfAluno','$rgAluno','$emailAluno','$telefoneAluno','$nomePai','$nomeMae',
'$ruaAluno','$bairroAluno','$numeroEnderecoAluno','$cepAluno','$complementoAluno')";

$result = mysqli_query($con,$query);


if ($result){
    echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/editais/cadastroAlunoPsg.php'; }, 1000);</script>";
    exit();
} else {
    echo "<script>alert('ERRO AO CADASTRAR: " . $connection->error . "');</script>";
    header("location: ../../pages/editais/cadastroAlunoPsg.php");
    exit();
}
?>

 