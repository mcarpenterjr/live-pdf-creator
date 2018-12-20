<?php
require $_SERVER['DOCUMENT_ROOT'] . '/lib/tcpdf/tcpdf.php';

$body = $_POST['editor'];

if ($body) {
  $pdf = new TCPDF('P', PDF_UNIT, 'LETTER', true, 'UTF-8', false);

  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  // ---------------------------------------------------------

  // set font
  $pdf->SetFont('dejavusans', '', 10);

  // add a page
  $pdf->AddPage();

  $pdf->WriteHTML($body, true, false, true, false, '');
  $pdf->Close();

  $pdf->Output('live_pdf.pdf', 'i');
}
else {
  die('No Content');
}


?>