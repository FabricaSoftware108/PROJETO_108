<?php

include '.php';

if(isset($_POST['nome_empresa']) && isset($_POST['email']) && isset($_POST['cnpj']) && isset($_POST['cidade']) && isset($_POST['telefone']) && isset($_POST['estado']) && isset($_POST['campoTextoDescricaoVaga'])){
    $nome_empresa = $_POST['nome_empresa'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $estado = $_POST['estado'];
    $descricao_vaga = $_POST['campoTextoDescricaoVaga'];

    $query = "INSERT INTO cadastro_vagas (nome_empresa, email, cnpj, cidade, telefone, estado, descricao_vaga) VALUES ('$nome_empresa', '$email', '$cnpj', '$cidade', '$telefone', '$estado', '$descricao_vaga')";
    
    $result = mysqli_query($con, $query);
    
} else {
    header("location: ../../pages/editais/cadastroVagasEmprego.html");
    exit();
}

?>
