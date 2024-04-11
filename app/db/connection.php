<?php 

$host = '10.28.1.194';
$user = 'fabric108';
$password = '307108';
$database = 'hubfabricasdb';

$connection = new mysqli($host, $user, $password, $database);





if($connection-> connect_errno){
    echo "FALHA NA CONEXÃO:(".$connection->connect_errno.")".$connection->connect_error;
    echo $connection->host_info."\n";/* a função opcional será executada caso a conexão seja bem sucedida.*/
}

if($connection){
    echo "conectado com sucesso!";
}