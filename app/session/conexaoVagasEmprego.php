<?php

include '../db/connection.php';
include
if (isset($_POST['nome_empresa']) && 
    isset($_POST['email']) && 
    isset($_POST['cnpj']) && 
    isset($_POST['cidade']) && 
    isset($_POST['telefone']) && 
    isset($_POST['estado']) && 
    isset($_POST['descricao_vaga'])){
        
    $nome_empresa = $_POST['nome_empresa'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $estado = $_POST['estado'];
    $descricao_vaga = $_POST['descricao_vaga'];

    $query = "INSERT INTO vagasEmprego (cnpj, nomeEmpresa, emailEmpresa, cidade, telefone, estado, descricao) VALUES ('$cnpj','$nome_empresa', '$email', '$cidade', '$telefone', '$estado', '$descricao_vaga')";
    
    $result = mysqli_query($connection, $query);
    
} else {
    header("location: ../../pages/editais/cadastroVagasEmprego.html");
    exit();
}

?>
