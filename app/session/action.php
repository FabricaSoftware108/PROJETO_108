<?php

include '../db/connection.php';
session_start();

$email = mysqli_real_escape_string($connection,$_POST["email"]);
$senha = mysqli_real_escape_string($connection,$_POST["senha"]);

if(empty($email) || empty($senha)){
    header("location: ../../pages/adm/loginAdm.php");
    exit();
}

$query = "SELECT * FROM admin WHERE email = '{$email}'";

$result = mysqli_query($connection, $query);

if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['senha'];
    
    if(password_verify($senha, $hashed_password) && $row['estado'] == 1){
        $_SESSION['email'] = $row['email'];
        $_SESSION['senha'] = $hashed_password; 
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['telefone'] = $row['telefone'];
        $_SESSION['estado'] = $row['estado'];
        
        header("location: ../../pages/adm/admHome.php");
        exit();
    } elseif($row['estado'] == 0) {
        header("location: ../../pages/adm/loginAdm.php?erro=desativado");
        exit();
    } else {
        header("location: ../../pages/adm/loginAdm.php?erro=incorreto");
        exit();
    }
} else {
    header("location: ../../pages/adm/loginAdm.php?erro=incorreto");
    exit();
}

?>
