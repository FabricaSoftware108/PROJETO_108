<?php
include "../../app/db/connection.php";
$query = "SELECT * FROM demandas";
$result = mysqli_query($connection, $query);
?>