<?php
include "../../app/db/connection.php";
$query = "SELECT * FROM carroselCgi";
$result = mysqli_query($connection, $query);
?>