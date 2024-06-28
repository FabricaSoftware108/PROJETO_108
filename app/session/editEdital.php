<?php
session_start();
if($_GET["editalCode"] != "undefined"){
    $_SESSION['editEdital'] = $_GET["editalCode"];
    header("location: ../../pages/adm/cadastroAdmEdital.php");
}
else{
    header("location: ../../pages/adm/cadastroAdmEdital.php");
}