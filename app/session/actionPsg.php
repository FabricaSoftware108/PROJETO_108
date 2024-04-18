<?php 


$editalCode = $_POST['editalCode'];


$_SESSION['editalCode'] =  $editalCode;
header('location: ../../pages/editais/cadastroAlunoPsg.php'); 
exit();