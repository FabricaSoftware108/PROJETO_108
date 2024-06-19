<?php
session_start();
include '../db/connection.php';

$name = $_POST["editalName"];
$editalCode = $_POST["editalCode"];
$editalLimit = $_POST["editalLimit"];
$editalInicialDate = $_POST["editalInicialDate"];
$editalFinalDate = $_POST["editalFinalDate"];
$uploadOk = 1;


$target_dir = "../../documents/edital";
//Array usa o basename somente para pegar a última parte do caminho
$target_file = $target_dir . basename($_FILES["editalPDF"]["name"]);

//Pega somente a extensão e converte em minúsculo
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
//Define um nome único
$target_file =$target_dir.md5(uniqid()).".".$imageFileType;
echo $target_file;   

// Verifica se a imagem é real
if(isset($_POST["submit"])) {

    //A função getimagesize() irá determinar o tamanho de qualquer arquivo de imagem suportado fornecido e retornar as dimensões
    $check = getimagesize($_FILES["editalPDF"]["tmp_name"]);}


// Verifica se o arquivo já existe, consulta o caminho e o nome
if (file_exists($target_file)) {
  $_SESSION['editalAlert'] = "Sorry, file already exists.";
  $uploadOk = 0;
  header('location: ../../pages/adm/cadastroAdmEdital.php');
  }


// Verifica o tamanho do arquivo
if ($_FILES["editalPDF"]["size"] > 500000) {
  $_SESSION['editalAlert'] = "Seu arquivo é muito grande.";
  $uploadOk = 0;
  header('location: ../../pages/adm/cadastroAdmEdital.php');
  }


// Permitindo formatos específicos
if($imageFileType != "pdf") {
  $_SESSION['editalAlert'] = "Desculpe, são permitidos apenas arquivos PDF.";
  $uploadOk = 0;
  header('location: ../../pages/adm/cadastroAdmEdital.php');
}

// Salvando o arquivo
if ($uploadOk == 0) {
  $_SESSION['editalAlert'] = "Desculpe, seu arquivo não pode ser submetido.";
  header('location: ../../pages/adm/cadastroAdmEdital.php');
  
  } else {
    //Move o arquivo, porém com o nome aterado 

    if (move_uploaded_file($_FILES["editalPDF"]["tmp_name"], $target_file)) {
    //htmlspecialchars (preserva os caracteres não gerando conflito com o HTML)
    $_SESSION['editalAlert'] = "O arquivo ". htmlspecialchars( basename( $_FILES["editalPDF"]["name"])). " foi enviado .";
    $query_insert = "INSERT into editais() VALUES('$editalCode', '$name', '$editalInicialDate','$editalFinalDate', '$editalLimit', 0, './{$target_file}');";
    $result_insert= mysqli_query($connection, $query_insert); 
    header('location: ../../pages/adm/cadastroAdmEdital.php');


    } else {
      $_SESSION['editalAlert'] = "Desculpe, ocorreu um erro ao submeter o arquivo.";
      header('location: ../../pages/adm/cadastroAdmEdital.php');
    }
  }