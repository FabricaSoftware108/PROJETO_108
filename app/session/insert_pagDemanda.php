<?php
include ('../db/connection.php');
include ('verificacao.php');

session_start();

$nome_empresa= mysqli_real_escape_string($connection, $_POST["nome_empresa"]);
$email_empresa= mysqli_real_escape_string($connection, $_POST["email"]);
$cnpj= mysqli_real_escape_string($connection, $_POST["cnpj"]);
$estado= mysqli_real_escape_string($connection, $_POST["estado"]);
$telefone_empresa= mysqli_real_escape_string($connection, $_POST["telefone"]);
$cidade= mysqli_real_escape_string($connection, $_POST["cidade"]);

$nome_titular= mysqli_real_escape_string($connection, $_POST["nome"]);
$email_titular= mysqli_real_escape_string($connection, $_POST["email_titular"]);
$cpf= mysqli_real_escape_string($connection, $_POST["CPF"]);
$telefone_titular= mysqli_real_escape_string($connection, $_POST["telefone_titular"]);
$arquivo= mysqli_real_escape_string($connection, $_POST["arquivo"]);


if (empty($nome_empresa) || empty($email_empresa) || empty($cnpj) || empty($estado) || empty($telefone_empresa) 
|| empty($cidade) || empty($nome_titular) || empty($email_titular) || empty($cpf) || empty($telefone_titular)
||empty($arquivo)){ /*aqui ele fica retornando para a página de login SE 1 DOS 2 FICAR VAZIO, até a pessoa digitar o login correto.*/
    header("location: pagDemanda.html");
    exit();}

$query ="insert into demandas(cnpj, nomeEmpresa,emailEmpresa,estadoEmpresa,telefoneEmpresa,cidadeEmpresa,nomeTitular,emailTitular,cpf,telefoneTitular,arquivo) 
values ('{$cnpj}', '{$nome_empresa}', '{$email_empresa}','{$estado}','{$telefone_empresa}',
'{$cidade}','{$nome_titular}','{$email_titular}','{$cpf}','{$telefone_titular}','{$arquivo}')";
echo $query;


$result= mysqli_query($connection,$query);
echo $result;

if ($result == ''){
    echo "<script language:'javascript'> window.alert('Não foi possível efetuar o cadastro'); windows.location.href='pagDemanda.html';</script>";
    
    }
    else
 {
     echo "<script language:'javascript'> window.alert('Cadastro efetuado com sucesso'); window.location.href='pagDemanda.html';</script>";
     exit();
}


?>
