<?php

session_start();
include '.php';

$query="select * from table";
$result = mysqli_query($con,$query);

$retorno=mysqli_fetch_array($result);

echo $retorno["nome"];
echo $retorno["email"];
echo $retorno["cnpj"];
echo $retorno["telefone"];
echo $retorno["cidade"];
echo $retorno["estado"];

// Enviar os dados para a tabela do html 

// if($row>0){
//     $_SESSION["nome"]=$nome;
// }
    // header("location:indexx.php");
    
    // if($_SESSION['setor']=='admin'){
    //     header("location:indexx.php");

    // } 
    // else if ($_SESSION['setor'] == 'suporte'){
    //     header("location:suporte.php");
    // }
    //     exit();


// else{
//     header("location:index.html");
//     exit();}


?>