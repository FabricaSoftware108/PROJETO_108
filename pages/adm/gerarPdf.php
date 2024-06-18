<?php
//carregar o composer
require '../../app/session/vendor/autoload.php';

//referenciar o namespace Dompdf
use Dompdf\Dompdf;

//instanciar a classe dompdf
$dompdf = new Dompdf();

//instanciar o metodo loadHtml e enviar o conteudo do PDF
$dompdf->load_html('PEDRO PEDRO  PEDRO PEDRO');

//formato paisagem
// $dompdf->setPaper('A4', 'landscape'); 
//formato retrato
$dompdf->setPaper('A4', 'portrait');

// rendereizar html como pdf
$dompdf->render();

//gerar pdf
$dompdf->stream();