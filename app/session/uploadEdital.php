<?php
session_start();
include '../db/connection.php';

$name = $_POST["editalName"];
$editalCode = $_POST["editalCode"];
$editalLimit = $_POST["editalLimit"];
$editalInicialDate = $_POST["editalInicialDate"];
$editalFinalDate = $_POST["editalFinalDate"];
$uploadOk = 1;




$target_dir = "../../documents/edital/";
//Array usa o basename somente para pegar a última parte do caminho
$target_file = $target_dir . basename($_FILES["editalPDF"]["name"]);

//Pega somente a extensão e converte em minúsculo
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
//Define um nome único
$target_file =$target_dir.md5(uniqid()).".".$imageFileType;

// Verifica se a imagem é real
if(isset($_POST["submit"])) {
    $_SESSION['editalAlert'] = null;
    //A função getimagesize() irá determinar o tamanho de qualquer arquivo de imagem suportado fornecido e retornar as dimensões
    $check = getimagesize($_FILES["editalPDF"]["tmp_name"]);}


// Verifica se o arquivo já existe, consulta o caminho e o nome
if (file_exists($target_file)) {
  $_SESSION['editalAlert'] = "Desculpe, arquivo já existente.";
  $uploadOk = 0;
  header('location: ../../pages/adm/cadastroAdmEdital.php');
  }


// Verifica o tamanho do arquivo
if ($_FILES["editalPDF"]["size"] > 1500000) {
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
  // $_SESSION['editalAlert'] = "Desculpe, seu arquivo não pode ser submetido.";
  header('location: ../../pages/adm/cadastroAdmEdital.php');
  
  } else {
    //Move o arquivo, porém com o nome aterado 

    if (move_uploaded_file($_FILES["editalPDF"]["tmp_name"], $target_file)) {
    //htmlspecialchars (preserva os caracteres não gerando conflito com o HTML)
      $result = mysqli_query($connection,"SELECT * FROM editais WHERE codigo = '$editalCode'");
      if(mysqli_num_rows($result) == 0){
        $_SESSION['editalAlert'] = "Edital $editalCode salvo com sucesso.";
        $query_insert = "INSERT INTO editais() VALUES('$editalCode', '$name', '$editalInicialDate','$editalFinalDate', $editalLimit, 0, './{$target_file}');";
        $result_insert= mysqli_query($connection, $query_insert); 
        header('location: ../../pages/adm/cadastroAdmEdital.php');
      }else{
        $_SESSION['editalAlert'] = "Número de edital já existente.";
        header('location: ../../pages/adm/cadastroAdmEdital.php');
      }

    } else {
      $_SESSION['editalAlert'] = "Desculpe, ocorreu um erro ao submeter o arquivo.";
      header('location: ../../pages/adm/cadastroAdmEdital.php');
    }
  }