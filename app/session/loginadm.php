<?php

session_start();
include '.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    $query = "SELECT * FROM cadastro WHERE nome='{$nome}' AND senha='{$senha}'";
    $result = mysqli_query($con, $query);

    if (empty($nome) || empty($senha)) {
        header("location: index.html");
        exit();
    }

    $row = mysqli_num_rows($result);

    if ($row == 0) {
        echo "<script> alert('insira os dados corretamente') <script>";
        header("location: .html");
        exit();
    } else if ($row > 0) {
        $_SESSION['nome'] = $nome;
       
        header("location: .php");
        exit();

    } else {
        header('location: admHome.html');
        exit();
    }
}
?>
