<?
require_once 'dompdf/dompdf_config.inc.php';

extract($_POST);

$dompdf = new DOMPDF();
$dompdf->load_html( ob_get_clean() );
$dompdf->render();
$filename='archivo.pdf';
$dompdf->stream($filename,array("Attachment"=>0));

?>