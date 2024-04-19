<?php 

session_start();
$editalCode = $_POST["editalCode"];

if($editalCode){
    echo "<script>"."alert"."(".$editalCode.")"."</script>";
    $_SESSION["editalCode"] = $editalCode;
    header('location: ../../pages/editais/cadastroAlunoPsg.php'); 
    exit();
}