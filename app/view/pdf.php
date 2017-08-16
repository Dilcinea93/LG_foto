<?php
require_once 'dompdf/dompdf/dompdf_config.inc.php';

$dompdf = new DOMPDF();
$dompdf->load_html( file_get_contents( 'index.php' ) );
$dompdf->render();
$dompdf->output();
$dompdf->stream("mi_archivo.pdf");