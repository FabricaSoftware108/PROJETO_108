<?php

include '../db/connection.php';
session_start();

$email = mysqli_real_escape_string($connection,$_POST["email"]);
$senha = mysqli_real_escape_string($connection,$_POST["senha"]);

if(empty($email) || empty($senha)){
    header("location: ../../pages/adm/loginAdm.php");
    exit();
}

$query = "SELECT * FROM admin WHERE email = '{$email}' AND senha = '{$senha}'";


$result = mysqli_query($connection, $query);



$row = mysqli_fetch_array($result);


if($row['email']==$email && $row['senha']==$senha && $row['estado']==1){
    $_SESSION['email'] = $row['email'];
    $_SESSION['senha'] = $row['senha'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['telefone'] = $row['telefone'];
    $_SESSION['estado'] = $row['estado'];
    

    header("location: ../../pages/adm/admHome.php");
    exit();
}

else if($row['email'] == $email && $row['senha'] == $senha && $row['estado'] == 0){
    // Usuário desativado
    header("location: ../../pages/adm/loginAdm.php?erro=desativado");
    exit();
}
else{
    // Credenciais incorretas
    header("location: ../../pages/adm/loginAdm.php?erro=incorreto");
    exit();
}

?>