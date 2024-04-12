<?php

include '../db/connection.php';
session_start();

$email = mysqli_real_escape_string($connection,$_POST["email"]);
$senha = mysqli_real_escape_string($connection,$_POST["senha"]);

if(empty($email) || empty($senha)){
    header("location: ../../pages/adm/loginAdm.html");
    exit();
}

$query = "SELECT * FROM admin WHERE email = '{$email}' AND senha = '{$senha}'";


$result = mysqli_query($connection, $query);

$nome = $result['nome'];
echo $nome;

$row = mysqli_fetch_array($result);


    // $row = mysqli_num_rows($result);

    if($row['email']==$email && $row['senha']==$senha){
        $_SESSION['email'] = $row['email'];
        $_SESSION['senha'] = $row['senha'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['telefone'] = $row['telefone'];
        $_SESSION['estado'] = $row['estado'];
  
        header("location: ../../pages/adm/admHome.html");
        exit();
    }
    else{
        header("location: ../../pages/adm/loginAdm.html");
        exit();
    }



?>