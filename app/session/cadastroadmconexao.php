<?php
session_start();
include '.php';

$nome = mysqli_real_escape_string($con,$_POST['nome']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$telefone = mysqli_real_escape_string($con,$_POST['Telefone']);
$senha = mysqli_real_escape_string($con,$_POST['senha']);



// dar um window alert para orientar o adm
if(empty($nome) || empty($email)){
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}


// mudar o nome da table
$sql = "INSERT INTO us_ (nome,email,Telefone,senha) VALUES ('$nome','$email','$telefone','$senha')";
$result = mysqli_query($con,$sql);
$row=mysqli_num_rows($result);


if ($row==0){
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}

else if($row>0){
    $_SESSION["email"]=$email;
}

session_start();
if(!$_SESSION["email"]){
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}

if ($result){
    echo "CADASTRADO COM SUCESSO";
} else {
    echo "ERRO AO CADASTRAR";
}
?>