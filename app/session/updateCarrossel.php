<?php

use function PHPSTORM_META\type;

session_start();
include '../db/connection.php';


$carrosselIndex = $_GET["carrosselIndex"];
$carrosselId = $_GET["carrosselID"];

$title = $_POST["carrosselTitle"];
$projectName = $_POST["projeto"];
$description = $_POST["descricao"];

$uploadOk = 1;

$fabricas = array(
    "carroselSoftware",
    "carroselJogos",
    "carroselCgi",
    "carroselAudioVideo",
);


if(isset($_POST["carrosselTitle"]) || isset($_POST["projeto"]) || isset($_POST["descricao"])){
    if($_FILES["uploadCarrosselImage"]["name"] == null){
        $queryUpdate = "UPDATE {$fabricas[$carrosselIndex]} SET titulo = '$title', projeto = '$projectName', descricao = '$description' WHERE id = $carrosselId";
        $resultUpdate = mysqli_query($connection, $queryUpdate);
        if($resultUpdate){
            $_SESSION['alertCarrossel'] = "Carrossel editado com sucesso.";
        }else{
            $_SESSION['alertCarrossel'] = "Erro ao salvar as alterações.";
        }
        header('location: ../../pages/adm/editarCarrosselAdm.php');
    }else{
        $target_dir = "../../Imagens/Fabricas/";
        //Array usa o basename somente para pegar a última parte do caminho
        $target_file = $target_dir . basename($_FILES["uploadCarrosselImage"]["name"]);
    
        //Pega somente a extensão e converte em minúsculo
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
        //Define um nome único
        $target_file =$target_dir.md5(uniqid()).".".$imageFileType;
    
        // Verifica se a imagem é real
        if(isset($_POST["submit"])) {
            $_SESSION['alertCarrossel'] = null;
            //A função getimagesize() irá determinar o tamanho de qualquer arquivo de imagem suportado fornecido e retornar as dimensões
            $check = getimagesize($_FILES["uploadCarrosselImage"]["tmp_name"]);}
    
    
        // Verifica se o arquivo já existe, consulta o caminho e o nome
        if (file_exists($target_file)) {
            $_SESSION['alertCarrossel'] = "Foto já existente.";
            $uploadOk = 0;
            header('location: ../../pages/adm/editarCarrosselAdm.php');
            }
    
    
        // Verifica o tamanho do arquivo
        if ($_FILES["uploadCarrosselImage"]["size"] > 1500000) {
            $_SESSION['alertCarrossel'] = "Sua foto é muito grande.";
            $uploadOk = 0;
            header('location: ../../pages/adm/editarCarrosselAdm.php');
            }
    
    
        // Permitindo formatos específicos
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {

            $_SESSION['alertCarrossel'] = "Desculpe, são permitidos apenas arquivos jpg, png e jpeg.";
            $uploadOk = 0;
            header('location: ../../pages/adm/editarCarrosselAdm.php');
        }
    
        // Salvando o arquivo
        if ($uploadOk == 0) {
            // $_SESSION['alertCarrossel'] = "Desculpe, seu arquivo não pode ser submetido.";
            header('location: ../../pages/adm/editarCarrosselAdm.php');
            
            } else {
            //Move o arquivo, porém com o nome aterado 
    
            if (move_uploaded_file($_FILES["uploadCarrosselImage"]["tmp_name"], $target_file)) {
                //htmlspecialchars (preserva os caracteres não gerando conflito com o HTML)
                $queryUpdate = "UPDATE {$fabricas[$carrosselIndex]} SET titulo = '$title', projeto = '$projectName', descricao = '$description', img = '$target_file' WHERE id = $carrosselId";
                $resultUpdate = mysqli_query($connection, $queryUpdate);
                if($resultUpdate){
                    $_SESSION['alertCarrossel'] = "Carrossel editado com sucesso.";
                }else{
                    $_SESSION['alertCarrossel'] = "Erro ao salvar as alterações.";
                }
                header('location: ../../pages/adm/editarCarrosselAdm.php');
    
            } else {
                $_SESSION['alertCarrossel'] = "Desculpe, ocorreu um erro ao submeter o arquivo.";
                header('location: ../../pages/adm/editarCarrosselAdm.php');
            }
        }
    }
}else{
    $_SESSION['alertCarrossel'] = "Preencha todos os campos.";
    header('location: ../../pages/adm/editarCarrosselAdm.php');
}
