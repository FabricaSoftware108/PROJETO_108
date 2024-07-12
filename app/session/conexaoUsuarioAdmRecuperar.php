<?php 
include "../../app/db/connection.php";
include "../../app/session/verificacao.php";

$senhaAntiga = $_POST['oldPassword'];
$senhaNova = $_POST['newPassword'];
$confirmPassword = $_POST['confirmNewPassword'];

if (!empty($senhaAntiga) and !empty($senhaNova) and !empty($confirmPassword)) {
    if ($senhaNova != $confirmPassword) {
        echo "<script>alert('Senhas não são idênticas');</script>";
        echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
        exit();
    } elseif ($senhaNova == $senhaAntiga) {
        echo "<script>alert('Senha nova deve ser diferente da antiga');</script>";
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
            echo "<script>alert('Senha alterada com sucesso!');</script>";
            echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/loginAdm.php'; }, 5);</script>";
            exit();
        } else {
            echo "<script>alert('Erro ao alterar a senha!');</script>";
            echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
            exit();
        }
    } else {
        echo "<script>alert('Senha antiga inválida!');</script>";
        echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
        exit();
    }
} else {
    echo "<script>alert('Preencha todos os campos!');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
    exit();
}

