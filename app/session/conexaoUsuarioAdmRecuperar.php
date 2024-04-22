<?php 
include "../../app/db/connection.php";
include "../../app/session/verificacao.php";

$senha = $_POST['newPassword'];
$confirmPassword = $_POST['confirmNewPassword'];

if (!empty($senha) || !empty($confirmPassword)){
    if ($senha == $confirmPassword){

        $query = "UPDATE admin set senha ='$confirmPassword' WHERE email ='{$_SESSION["email"]}' and senha = '{$_SESSION["senha"]}'";
        $result = mysqli_query($connection, $query);
        
        if ($result){
            echo "<script>alert('SENHA ALTERADA COM SUCESSO!');</script>";
            echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
            exit();}

        }
else {
    echo "<script>alert('ERRO AO CADASTRAR:');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
    exit();}
}
?>