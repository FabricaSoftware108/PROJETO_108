 <?php include '../db/connection.php';
    session_start();
    // Verifica se os valores foram recebidos do formulário antes de usá-los

    $fields = ["nome", "cep", "cpf", "escolaridade", "dataNascimento", "email", "telefone", "uf", "rua", "bairro", "cidade", "numero", "linkedin"];

    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            echo "<script language='javascript'>
     window.alert('Por favor, preencha todos os campos do formulário');
     window.location.href = '../../pages/editais/pagBancoTalentos.html';
 </script>";
            exit();
        }
    }


    $nome = $_POST["nome"];
    $cep = $_POST["cep"];
    $cpf = $_POST["cpf"];
    $escolaridade = $_POST["escolaridade"];
    $dataNascimento = $_POST["dataNascimento"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $estado = $_POST["uf"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $numero = $_POST["numero"];
    $github = $_POST["github"];
    $linkedin = $_POST["linkedin"];

    $query = "INSERT INTO bancosTalentos (cpf, nome, cep, escolaridade, dataNascimento, email, telefone, estado, cidade, bairro, rua, numero, github, linkedin)
 VALUES ('$cpf', '$nome', '$cep', '$escolaridade', '$dataNascimento', '$email', '$telefone', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$github', '$linkedin')";

    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "<script language='javascript'>
     window.alert('Cadastro efetuado com sucesso');
     window.location.href = '../../pages/editais/pagBancoTalentos.html';
 </script>";
    } else {
        echo "<script language='javascript'>
     window.alert('Não foi possível efetuar o cadastro');
     window.location.href = '../../pages/editais/pagBancoTalentos.html';
 </script>";
    }

    echo "<script language='javascript'>
     window.alert('Cadastro efetuado com sucesso');
     window.location.href = '../../pages/editais/pagBancoTalentos.html';
 </script>";
    echo "<script language='javascript'>
     window.alert('Por favor, preencha todos os campos do formulário');
     window.location.href = '../../pages/editais/pagBancoTalentos.html';
 </script>";
    exit();

    ?>
