<?php 
include "../../app/db/connection.php";
include "../../app/session/verificacao.php";

$nomeantigo=$_POST['nomeantigo'];
$emailantigo=$_POST['e-mailantigo'];
$telefoneantigo=$_POST['foneantigo'];


$query = "UPDATE admin SET nome ='$nomeantigo',email='$emailantigo', telefone='$telefoneantigo' WHERE email ='{$_SESSION["email"]}'";
$result = mysqli_query($connection, $query);


if ($result){
    echo "<script>alert('Usuário editado com sucesso!');</script>";
     echo "<script>setTimeout(function(){ window.location.href = '../../pages/adm/usuarioAdm.php'; }, 5);</script>";
     exit();
    }



?>