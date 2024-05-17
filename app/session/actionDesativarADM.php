<?php 
session_start();
include "../db/connection.php";
if($_POST['switchState']){
    $queryGet = 'SELECT * FROM admin WHERE email = "'.$_POST["switchState"].'"';
    $res = mysqli_query($connection, $queryGet);
    $row = mysqli_fetch_array($res);
    if($row["estado"]){
        $newState = 0;
    }
    else{
        $newState = 1;
    };
    $queryUpdate = 'UPDATE admin SET estado = '.$newState.' WHERE email = "'.$_POST["switchState"].'"';
    $res = mysqli_query($connection, $queryUpdate);
}
header("location: ../../pages/adm/editarAdm.php");
exit();



