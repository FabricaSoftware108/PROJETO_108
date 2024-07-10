<?php
// session_start();
include '../db/connection.php';
include 'verificacao.php';

$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

if (empty($nome) || empty($email)) {
    echo "<script>alert('Insira os dados corretamente');</script>";
    echo "<script>setTimeout(function() { window.location.href = '../../pages/adm/cadastroAdm.php'; }, 1000);</script>";
    exit();
}

$checkQuery = "SELECT * FROM admin WHERE email = '$email'";
$checkResult = mysqli_query($connection, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    echo "<script>alert('Este email já está cadastrado.');</script>";
    echo "<script>setTimeout(function() { window.location.href = '../../pages/adm/cadastroAdm.php'; }, 1000);</script>";
    exit();
}

$senhacrip = password_hash($senha, PASSWORD_DEFAULT);

$query = "INSERT INTO admin (email, senha, nome, telefone, estado) VALUES ('$email', '$senhacrip', '$nome', '$telefone', true)";
$result = mysqli_query($connection, $query);

if ($result) {
    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'gleisonmorais06@gmail.com';                //SMTP username
        $mail->Password   = 'kuobddyjmvazoito';                     //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->ContentType = "text/html";
        $mail->CharSet = "utf-8";

        //Recipients
        $mail->setFrom('gleisonmorais06@gmail.com', 'Senac Contato');
        $mail->addAddress($email, $nome);                           //Add a recipient

        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->Subject = "Nova Senha para Acesso ao Hub Fábricas";
        $mail->Body    = "
            <h2>Hub Fábricas</h2>
            <p>Prezado(a) $nome,</p>
            <p>Estamos escrevendo para informar que você foi cadastrado como administrador no Hub Fábricas. Abaixo, encontram-se seus dados para login:</p>
            <p>Login: <b>$email</b></p>
            <p>Senha: <b>$senha</b></p>
            <p>Pedimos que utilize esta senha na próxima vez que acessar o site. Após o login, é recomendável que altere a senha para uma de sua preferência, garantindo que seja segura e única.</p>
            <p>Atenciosamente,</p>
            <p>Equipe Hub Fábricas</p>";
        $mail->AltBody = "Hub Fábricas\nPrezado(a) $nome,\nEstamos escrevendo para informar que você foi cadastrado como administrador no Hub Fábricas. Abaixo, encontram-se seus dados para login:\n\nLogin: $email\nSenha: $senha\n\nPedimos que utilize esta senha na próxima vez que acessar o site. Após o login, é recomendável que altere a senha para uma de sua preferência, garantindo que seja segura e única.\n\nAtenciosamente,\nEquipe Hub Fábricas";

        $mail->send();

        echo "<script>alert('CADASTRADO COM SUCESSO');</script>";
        echo "<script>setTimeout(function() { window.location.href = '../../pages/adm/cadastroAdm.php'; }, 1000);</script>";
    } catch (Exception $e) {
        echo "<script>alert('ERRO AO ENVIAR EMAIL: {$mail->ErrorInfo}');</script>";
        echo "<script>setTimeout(function() { window.location.href = '../../pages/adm/cadastroAdm.php'; }, 1000);</script>";
    }

    exit();
} else {
    echo "<script>alert('ERRO AO CADASTRAR: " . $connection->error . "');</script>";
    header("location: ../../pages/adm/cadastroAdm.php");    
    exit();
}
?>
