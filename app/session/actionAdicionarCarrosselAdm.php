<?php

include "../db/connection.php";

$optionselect = $_POST['optionselect'];
$imagem = $_POST['fileToUpload'];
$nomefabrica = $_POST['nomedafabrica'];
$nomeprojeto = $_POST['nomedoprojeto'];
$texto = $_POST['textodaturma'];
$target_dir = "../../Imagens/";


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file =$target_dir.md5(uniqid()).".".$imageFileType;

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
}

if (file_exists($target_file)) {
    echo "Desculpe, arquivo já existente.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Seu arquivo é muito grande.";
    $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "pdf") {
  $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não pode ser submetido.";
  
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $imagemfinal = $target_file
      echo $imagemfinal
    //   if ($optionselect === 'v1') {
    //       $query = "INSERT INTO carroselSoftware (titulo, projeto, descricao, img) VALUES ('$nomefabrica','$nomeprojeto','$texto','$imagemfinal')";
    //       $result = mysqli_query($connection, $query);
    //   } else if ($optionselect === 'v2') {
    //       $query = "INSERT INTO carroselJogos (titulo, projeto, descricao, img) VALUES ('$nomefabrica','$nomeprojeto','$texto','$imagemfinal')";
    //       $result = mysqli_query($connection, $query);
    //   } else if ($optionselect === 'v3') {
    //       $query = "INSERT INTO carroselAudioVideo (titulo, projeto, descricao, img) VALUES ('$nomefabrica','$nomeprojeto','$texto','$imagemfinal')";
    //       $result = mysqli_query($connection, $query);
    //   } else if ($optionselect === 'v4') {
    //       $query = "INSERT INTO carroselCgi (titulo, projeto, descricao, img) VALUES ('$nomefabrica','$nomeprojeto','$texto','$imagemfinal')";
    //       $result = mysqli_query($connection, $query);
      
    //   };
    } else {
      echo "Desculpe, ocorreu um erro ao submeter o arquivo.";
    }
  }
