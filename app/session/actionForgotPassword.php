<?php
    include '../db/connection.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
               
    $email = $_POST ['email'];
    if(empty($_POST ['email'])){
        echo ('<script>
        alert("Preencha o campo de email");
        </script>');
    }
    else{

        $query = "SELECT * from admin where email = '$email'";

        $result = mysqli_query($connection, $query);



        if (mysqli_num_rows($result) == 0){
            
            echo ('<script>
            alert("Email não encontrado");
            </script>');
        }
        
        else {
            $row = mysqli_fetch_array($result);
            $novaSenha = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(8/strlen($x)) )),1,8);
            $queryChangeEmail = "UPDATE admin SET senha = '$novaSenha' WHERE email = '$email' AND senha = '{$row["senha"]}'";
            mysqli_query($connection, $queryChangeEmail);


        if(!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['fone']) || !empty($_POST['indication']) || !empty($_POST['subject']) || !empty($_POST['message'])){
            $name 		= $_POST['name'];
            $email 		= $_POST['email'];
            $fone 		= $_POST['fone'];
            $indication = $_POST['indication'];
            $subject 	= $_POST['subject'];
            $message 	= $_POST['message'];
            $from		= 'contato@ajudarfazbem.org.br';

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            try {
            //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'contato@ajudarfazbem.org.br';                     //SMTP username
                $mail->Password   = '010613@Milla';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                $mail->ContentType = "text/html";
                $mail->CharSet = "utf-8";

                //Recipients
                $mail->setFrom('contato@ajudarfazbem.org.br', 'Ajudar Faz Bem Contato');
                $mail->addAddress("$email", "$name");     //Add a recipient
                $mail->addAddress("$email");               //Name is optional
                // $mail->addReplyTo('pedroca2787@gmail.com', 'Information');
                // $mail->addCC("$email", "$name");
                $mail->addCC('contato@ajudarfazbem.org.br', "Contato");

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = "$subject";
                $mail->Body    = "
                <h2>Ajudar Faz Bem</h2>
                <p>Mensagem vinda do site <a href='ajudarfazbem.org.br'>ajudarfazbem.org.br<a/></p>
                <p>Nome: $name</p>
                <p>E-mail: $email</p>
                <p>Telefone: $fone</p>
                <p>Indicacao: $indication</p>
                <p>Assunto: $subject</p>
                <p>Mensagem: $message</p>
                ";
                $mail->AltBody = "
                Ajudar Faz Bem\n
                Mensagem vinda do site \n
                Nome: $name\n
                E-mail: $email\n
                Telefone: $fone\n
                Indicação: $indication\n
                Assunto: $subject\n
                Mensagem: $message";

                $mail->send();
                echo("<script>window.location.href = '../pages/contact.html';alert('E-mail enviado com sucesso')</script>");
            } catch (Exception $e) {
                echo("<script>window.location.href = '../pages/contact.html';alert('Erro ao enviar o e-mail')</script>");
            }
        
        }
    }
}

