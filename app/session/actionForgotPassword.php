<?php
    session_start();
    include '../db/connection.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
               
    $email = $_POST ['email'];
    if(empty($_POST ['email'])){
        $_SESSION['ForgotError'] = true;
    }
    else{
        $query = "SELECT * from admin where email = '$email'";

        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) == 0){
            
            $_SESSION['ForgotError'] = true;
            header("location: ../../pages/adm/esqueceuSenhaAdm.php");
        }
        
        else {
            $_SESSION['ForgotError'] = false;
            $row = mysqli_fetch_array($result);
            $novaSenha = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(8/strlen($x)) )),1,8);
            $senhacrip = password_hash($novaSenha, PASSWORD_DEFAULT);
            $queryChangeEmail = "UPDATE admin SET senha = '$senhacrip' WHERE email = '$email' AND senha = '{$row["senha"]}'";
            mysqli_query($connection, $queryChangeEmail);

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'pedroca2787@gmail.com';                     //SMTP username
            $mail->Password   = 'kuobddyjmvazoito';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            $mail->ContentType = "text/html";
            $mail->CharSet = "utf-8";

            //Recipients
            $mail->setFrom('pedroca2787@gmail.com', 'Senac Contato');
            $mail->addAddress($email, $row['nome']);     //Add a recipient
            // $mail->addAddress("cheiradordevelha69@gmail.com");               //Name is optional
            // $mail->addReplyTo('pedroca2787@gmail.com', 'Information');
            // $mail->addCC("$email", "$name");
            // $mail->addCC('cheiradordevelha69@gmail.com', "Contato");

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = "Nova Senha";
            $mail->Body    = "
            <h2>Hub fábricas</h2>
            <p>Sua nova senha para assesar a area administrativa é:</p>
            <p>$novaSenha</p>
            ";
            $mail->AltBody = "Hub fábricas, sua nova senha para assesar a area administrativa é: \n $novaSenha";

            $mail->send();
            echo("<script>window.location.href = '../../pages/adm/loginAdm.php' </script>");
        
        
    }
}

