<?php
    include '../db/connection.php';
               
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

            // $to = $email;
            // $subject = 'Redefinir senha';
            // $message = "Sua nova senha é: ($novaSenha)";
            // $headers = 'From: hubfabricas@senac.com'. "\r\n".'X-Mailer: PHP/' . phpversion();


            $mail->Host = 'smtp.gmail.com';

            $mail->Port = 587;

            $mail->SMTPAuth = true;

            $mail->SMTPSecure = true;

            $mail->Username = 'senachub108@gmail.com';

            $mail->Password = 'S3nha123+';

            $mail->send();
    
            //mail($to, $subject, $message, $headers);

            // $query = "UPDATE ADMIN SET "
        
        }
    }
?>