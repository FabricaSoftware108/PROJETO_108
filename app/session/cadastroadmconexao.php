<?php
// Host = 10.28.1.194;
// User = fabric108;
// Password = 307108;
// Database = hubfabricasdb;

session_start();
include '.php';

$senha = mysqli_real_escape_string($con,$_POST['senha']);
$nome = mysqli_real_escape_string($con,$_POST['nome']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$telefone = mysqli_real_escape_string($con,$_POST['telefone']);
$estado=true;



if(empty($nome) || empty($email)){
    echo "<script>alert('Insira os dados corretamente');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}


$sql = "INSERT INTO admin (senha,nome,email,telefone,) VALUES ('$senha','$nome','$email','$telefone',$estado)";
$result = mysqli_query($con,$sql);
$row=mysqli_num_rows($result);


if ($row==0){
    echo "<script>alert('ERRO AO CADASTRAR');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
    exit();
}

else if($row>0){
    echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
    header("location:../../../pages/adm/cadastroAdm.html");
}

// session_start();
// if(!$_SESSION["email"]){
//     header("location:../../../pages/adm/cadastroAdm.html");
//     exit();
// }

// if ($result){
//     echo "CADASTRADO COM SUCESSO";
// } else {
//     echo "ERRO AO CADASTRAR";
// }
?>