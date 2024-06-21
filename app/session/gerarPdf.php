<?php
//carregar o composer
include '../db/connection.php';
require 'vendor/autoload.php';


//referenciar o namespace Dompdf
use Dompdf\Dompdf;

//instanciar a classe dompdf
$dompdf = new Dompdf();

$query = "SELECT * From alunosPsg WHERE id = 1";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
//instanciar o metodo loadHtml e enviar o conteudo do PDF
$dompdf->load_html("{$row['nome']}|{$row['id']}|{$row['cpf']}");

//formato paisagem
// $dompdf->setPaper('A4', 'landscape'); 
//formato retrato
$dompdf->setPaper('A4', 'portrait');

// rendereizar html como pdf
$dompdf->render();

//gerar pdf
$dompdf->stream();