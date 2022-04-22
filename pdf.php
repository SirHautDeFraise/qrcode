<?php
require __DIR__ . '/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


$link = $_POST['linkpdf'];
// d($link);

$html2pdf = new Html2Pdf('P', 'A4', 'fr');
$html2pdf->writeHTML('
<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm">

    <page_header style="text-align:center;">
        Bonjour je suis un header !
    </page_header>

<h1 style="text-align:center;">QR CODE DE TEST</h1>
<img src="https://api.qrserver.com/v1/create-qr-code/?data=' . $link . '&size=100x100">

    <page_footer style="text-align:center;"> 
        Ceci est un PDF de test générer par la magie.
    </page_footer> 

</page>');
$html2pdf->output('qrcode-link.pdf');
