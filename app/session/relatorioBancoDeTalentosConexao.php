<?php
include '../../app/db/connection.php';

$query = "select * from bancosTalentos";

$result = mysqli_query($connection, $query);

?>