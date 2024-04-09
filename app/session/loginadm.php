<?php

session_start();
include '.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $senha = mysqli_real_escape_string($con, $_POST['senha']);

    $query = "SELECT * FROM cadastro WHERE email='{$email}' AND senha='{$senha}'";
    $result = mysqli_query($con, $query);
    $retorno = mysqli_fetch_array($result);

    if (empty($email) || empty($senha)) {
        header("location: index.html");
        exit();
    }

    $row = mysqli_num_rows($result);

    if ($row == 0) {
        header("location: .html");
        exit();
    } else if ($row > 0) {
        $_SESSION['nome'] = $retorno['nome'];
       
        if ($_SESSION['nome'] == 'adm') {
            header("location: .php");
            exit();
        }
    } else {
        header('location: .html');
        exit();
    }
}
?>
