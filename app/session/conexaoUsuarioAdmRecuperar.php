<?php 
include "../../app/db/connection.php";
include "../../app/session/verificacao.php";
// include "../../app/session/conexaoCadastroAdm.php";

$senhaAntiga = $_POST['oldPassword'];
$senhaNova = $_POST['newPassword'];
$confirmPassword = $_POST['confirmNewPassword'];


if (!empty($senhaAntiga and !empty($senhaNova) and !empty($confirmPassword))){

    $select_query = "SELECT senha FROM admin WHERE email ='{$_SESSION["email"]}' ";
    echo $select_query;

    if ($select_query == $senhaAntiga  ){

                              
            if ($senhaNova == $confirmPassword){
    
                $query = "UPDATE admin SET senhaNova ='$confirmPassword' WHERE email ='{$_SESSION["email"]}' and senhaNova = '{$_SESSION["senhaNova"]}'";
                $result = mysqli_query($connection, $query);
                
                if ($result){
                    echo "<script>alert('SENHA ALTERADA COM SUCESSO!');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/loginAdm.html'; }, 5);</script>";
                    exit();}
                    
                }
                else {
                    echo "<script>alert('ERRO AO CADASTRAR');</script>";
                    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
                    exit();}
        
    }
    elseif (empty ($senhaNova) || empty($confirmPassword)){
        echo "<script>alert('CADASTRO EM BRANCO');</script>";
        echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
        exit();}
}

elseif (empty($senhaAntiga)){
    echo "<script>alert('DIGITE SUA SENHA ANTIGA');</script>";
    echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdmRecuperar.php'; }, 5);</script>";
    exit();}
?>