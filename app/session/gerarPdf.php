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
$query = "SELECT * FROM alunosPsg WHERE id = $index";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

    // Conteúdo HTML do PDF
    $html = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 0; }
            .container { width: 100%; margin: 0 auto; padding: 20px; }
            .header { text-align: center; margin-bottom: 20px; }
            .header img { width: 100px; }
            .header h1 { margin: 0; }
            .header p { margin: 5px 0 0; font-size: 14px; color: #666; }
            .content { margin-top: 20px; }
            .details { width: 100%; display: table; border-collapse: collapse; }
            .details-row { display: table-row; }
            .details-cell { display: table-cell; border: 1px solid #ddd; padding: 10px; }
            .details-label { background-color: #f2f2f2; font-weight: bold; }
            .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #777; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>Relatório de Informações do Aluno</h1>
            </div>
            <div class='content'>
                <div class='details'>
                    <div class='details-row'>
                        <div class='details-cell details-label'>ID</div>
                        <div class='details-cell'>{$row['id']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Nome</div>
                        <div class='details-cell'>{$row['nome']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Telefone</div>
                        <div class='details-cell'>{$row['telefone']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>CPF</div>
                        <div class='details-cell'>{$row['cpf']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Email</div>
                        <div class='details-cell'>{$row['email']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Data de Nascimento</div>
                        <div class='details-cell'>{$row['dataNascimento']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Nome Pai</div>
                        <div class='details-cell'>{$row['nomePai']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Nome Mãe</div>
                        <div class='details-cell'>{$row['nomeMae']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Rua</div>
                        <div class='details-cell'>{$row['rua']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Bairro</div>
                        <div class='details-cell'>{$row['bairro']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Número</div>
                        <div class='details-cell'>{$row['numero']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>Complemento</div>
                        <div class='details-cell'>{$row['complemento']}</div>
                    </div>
                    <div class='details-row'>
                        <div class='details-cell details-label'>CEP</div>
                        <div class='details-cell'>{$row['cep']}</div>
                    </div>
                </div>
            </div>
            <div class='footer'>
                <!-- Você pode adicionar informações adicionais no rodapé -->
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
