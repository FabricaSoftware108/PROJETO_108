<?php
session_start();
include 'connection.php';
include 'verificacao';

/*conecta no banco as variaveis*/
$con= new mysqli($host, $username, $password, $database);

/*esse daqui ele trás o erro, tipo ele trás a origem do erro.*/
if($connection-> connect_errno){
    echo "FALHA NA CONEXÃO:(".$connection->connect_errno.")".$connection->connect_error;
    echo $connection->host_info."\n";/* a função opcional será executada caso a conexão seja bem sucedida.*/
}
if($connection){
    echo "conectado com sucesso!";
}
else{
    echo "erro ao conectar";
}

$query = "SELECT * FROM demandas";
$result = mysqli_query($con, $query);
$retorno = mysqli_fetch_array($result);
$row = mysqli_num_rows($result);
?>