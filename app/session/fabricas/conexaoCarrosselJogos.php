<?php
include "../../app/db/connection.php";
$query = "SELECT * FROM carroselJogos";
$result = mysqli_query($connection, $query);
?>