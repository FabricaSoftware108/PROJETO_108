<?php
// session_start();
include '../db/connection.php';
include 'verificacao.php';

$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if(empty($nome) || empty($email)){
    echo "<script>alert('Insira os dados corretamente');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/cadastroAdm.php'; }, 1000);</script>";
    exit();
}


$checkQuery = "SELECT * FROM admin WHERE email = '$email'";
$checkResult = mysqli_query($connection, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    echo "<script>alert('Este email já está cadastrado.');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/cadastroAdm.php'; }, 1000);</script>";
    exit();
}

$senhacrip = password_hash($senha, PASSWORD_DEFAULT);

$query = "INSERT INTO admin (email, senha, nome, telefone, estado) VALUES ('$email', '$senhacrip', '$nome', '$telefone', true)";
$result = mysqli_query($connection, $query);

if ($result){
    echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/cadastroAdm.php'; }, 1000);</script>";
    exit();
} else {
    echo "<script>alert('ERRO AO CADASTRAR: " . $connection->error . "');</script>";
    header("location: ../../pages/adm/cadastroAdm.php");
    exit();
}
?>