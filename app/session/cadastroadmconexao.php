<?php
session_start();
include '../db/connection.php';
include 'verificacao.php';

$senha = ($_POST['senha']);
$nome = ($_POST['nome']);
$email = ($_POST['email']);
$telefone = ($_POST['telefone']);

if(empty($nome) || empty($email)){
    echo "<script>alert('Insira os dados corretamente');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}

$query = "INSERT INTO admin (email, senha, nome, telefone, estado) VALUES ('$email', '$senha', '$nome', '$telefone', true)";
$result = mysqli_query($connection, $query);

if ($result){
    echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
} else {
    echo "<script>alert('ERRO AO CADASTRAR');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
}
?>
