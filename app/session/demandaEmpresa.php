<?php
session_start();
include '../db/connection.php';
include '../session/verificacao.php';

$query = "SELECT * FROM demandas";
$result = mysqli_query($connection, $query);
$retorno = mysqli_fetch_array($result);
echo $retorno;
$row = mysqli_num_rows($result);
?>