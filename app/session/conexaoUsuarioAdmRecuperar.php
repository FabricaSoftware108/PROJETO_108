<?php 
include "../../app/db/connection.php";
include "../../app/session/verificacao.php";

$senhaAntiga = $_POST['oldPassword'];
$senhaNova = $_POST['newPassword'];
$confirmPassword = $_POST['confirmNewPassword'];

if (!empty($senhaAntiga) and !empty($senhaNova) and !empty($confirmPassword)) {
    if ($senhaNova != $confirmPassword) {
        echo "<script>alert('SENHAS NÃO SÃO IDÊNTICAS');</script>";
        echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
        exit();
    } elseif ($senhaNova == $senhaAntiga) {
        echo "<script>alert('SENHA NOVA DEVE SER DIFERENTE DA ANTIGA');</script>";
        echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
        exit();
    }

    $select_query = "SELECT senha FROM admin WHERE email ='{$_SESSION["email"]}'";
    $retorno = mysqli_query($connection, $select_query);
    $row = mysqli_fetch_array($retorno);

    if (password_verify($senhaAntiga, $row["senha"])) {
        $hashedPassword = password_hash($confirmPassword, PASSWORD_DEFAULT);
        $query = "UPDATE admin SET senha ='$hashedPassword' WHERE email ='{$_SESSION["email"]}'";
        $result = mysqli_query($connection, $query);
        
        if ($result) {
            echo "<script>alert('SENHA ALTERADA COM SUCESSO!');</script>";
            echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/loginAdm.php'; }, 5);</script>";
            exit();
        } else {
            echo "<script>alert('ERRO AO ALTERAR A SENHA!');</script>";
            echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
            exit();
        }
    } else {
        echo "<script>alert('SENHA ANTIGA INVÁLIDA!');</script>";
        echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
        exit();
    }
} else {
    echo "<script>alert('PREENCHA TODOS OS CAMPOS!');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
    exit();
}

