<?php

include '.php';


if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['cpf']) && isset($_POST['escolaridade']) && isset($_POST['data_nascimento'])
 && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['uf']) && isset($_POST['rua']) && isset($_POST['bairro']) && isset($_POST['cidade'])
 && isset($_POST['numero']) && isset($_POST['github']) && isset($_POST['linkedin'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $uf = $_POST['uf'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $numero = $_POST['numero'];  
    $github = $_POST['github'];
    $linkedin = $_POST['linkedin'];
    

    $query = "INSERT INTO banco_taletos (nome, sobrenome, cpf, escolaridade, data_nascimento) VALUES ('$nome','$sobrenome','$cpf','$escolaridade','$data_nascimento','$email','$telefone','$uf','$rua','$bairro','$cidade','$numero','$github','$linkedin')";
    
    $result = mysqli_query($con, $query);
    
} else {
    header("location: ../../pages/editais/pagBancoTalentos.html");
    exit();
}

?>
