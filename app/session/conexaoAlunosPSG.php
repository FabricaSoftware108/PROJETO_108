<?php
session_start();

include("connection.php")

$query = "select * from alunosPsg";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);



?>