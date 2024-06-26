<?php
session_start();
$_SESSION['ForgotError'] = false;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ADM</title>
    <link rel="icon" href="../../Imagens/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../../js/login-ADM.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="pag-login-ADM">
    <a href="../../index.html"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-arrow-left-circle-fill mx-2 my-4" viewBox="0 0 16 16">
            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg></a>
    <main class="login-ADM container col-11 col-sm-9 col-md-9 col-lg-5">
        <div class="row shadow p-3" id="container-campos-preenchimento-login-ADM">
            <form class="col-12" id="campos-preenchimento-login-ADM" action="../../app/session/action.php" method="post">
                <h1>ADMINISTRADOR</h1><br><br>
                <!-- Verificação para o login -->
                <?php
                if (isset($_GET['erro'])) {
                    $erro = $_GET['erro'];
                    if ($erro === 'desativado') {
                        echo '<div class="alert alert-danger" role="alert">Usuário desativado.</div>';
                    } else if ($erro === 'incorreto') {
                        echo '<div class="alert alert-danger" role="alert">Email ou senha incorretos.</div>';
                    }
                }
                ?>

                <div class="input-group mb-3 col-12">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-envelope col-2 icons-login-ADM"></i></span>
                    </div>
                    <input class="form-control shadow-sm p-3" type="email" name="email" id="email" size="27" maxlength="100" placeholder="Email:" required>

                </div><br>

                <div class="input-group mb-3 col-12 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="bi bi-key col-2 icons-login-ADM"></i></span>
                    </div>
                    <input class="form-control shadow-sm p-3" type="password" name="senha" id="senha" size="27" maxlength="50" placeholder="Senha:" required>
                    <div class="input-group-append">
                        <button class="input-group-text" type="button" id="toggle-password-btn"><i class="bi bi-eye col-2 icons-login-ADM"></i></button>
                    </div>
                </div>



                <br>
                <br>

                <div class="esqueceuSenha-login-ADM col-12">
                    <a href="./esqueceuSenhaAdm.php">Esqueceu sua senha?</a>
                </div>

                <br>
                <button class="btn btn-primary mt-3 mb-3 col-10 p-2 btn-login-ADM" type="submit">LOGIN</button>

            </form>
        </div>
    </main>
    <script src="../../js/mostrar-senha.js"></script>
</body>

</html>