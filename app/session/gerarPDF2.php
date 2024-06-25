<?php
// Carregar o Composer e o banco de dados
include '../db/connection.php';
require 'vendor/autoload.php';

// Referenciar o namespace Dompdf
use Dompdf\Dompdf;
use Dompdf\Options;

// Configurar opções do Dompdf (opcional)
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

// Instanciar a classe dompdf
$dompdf = new Dompdf($options);

// Obter os dados do POST
$index = $_GET['index'];

// Consulta ao banco de dados
$query = "SELECT * FROM demandas WHERE id = $index";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    // Conteúdo HTML do PDF
    $html = "
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .header p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #666;
        }
        .content {
            margin-top: 20px;
        }
        .details {
            width: 90%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .details-row {
            border-bottom: 1px solid #ddd;
        }
        .details-cell {
            padding: 10px;
            font-size: 14px;
            color: #333;
        }
        .details-label {
            font-weight: bold;
            background-color: #f2f2f2;
            padding: 10px;
            font-size: 14px;
            color: #333;
            width: 30%;
        }
    </style>
</head>
<body>
<div class='container'>
    <div class='header'>
        <h1>Relatório de Informações do Aluno</h1>
        <p>Dados detalhados do aluno</p>
    </div>
    <div class='content'>
        <table class='details'>
            <tr class='details-row'>
                <td class='details-label'>Nome:</td>
                <td class='details-cell'>{$row['nome']}</td>
            </tr>
            <tr class='details-row'>
                <td class='details-label'>E-mail:</td>
                <td class='details-cell'>{$row['email']}</td>
            </tr>
            <tr class='details-row'>
                <td class='details-label'>CPF/CNPJ:</td>
                <td class='details-cell'>{$row['cpfcnpj']}</td>
            </tr>
            <tr class='details-row'>
                <td class='details-label'>Email:</td>
                <td class='details-cell'>{$row['email']}</td>
            </tr>
            <tr class='details-row'>
                <td class='details-label'>UF:</td>
                <td class='details-cell'>{$row['uf']}</td>
            </tr>
            <tr class='details-row'>
                <td class='details-label'>Telefone:</td>
                <td class='details-cell'>{$row['telefone']}</td>
            </tr>
            <tr class='details-row'>
                <td class='details-label'>Cidade:</td>
                <td class='details-cell'>{$row['cidade']}</td>
            </tr>
            <tr class='details-row'>
                <td class='details-label'>Descrição:</td>
                <td class='details-cell'>{$row['descricao']}</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>";

    // Instanciar o método loadHtml e enviar o conteúdo do PDF
    $dompdf->loadHtml($html);

    // Formato retrato
    $dompdf->setPaper('A4', 'portrait');

    // Renderizar HTML como PDF
    $dompdf->render();

    // Gerar PDF e enviar para o navegador
    $dompdf->stream("aluno_informacoes.pdf", ["Attachment" => false]);
} else {
    echo "Nenhum dado encontrado.";
}

?>
