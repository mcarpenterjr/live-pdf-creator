<?php
require(dirname(__DIR__)  . '../../libs/TCPDF/tcpdf.php');

$body = $_POST['editor'];

if ($body) {
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

  // set document information
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Mark N Carpenter Jr');
  $pdf->SetTitle('PDF Editor Example');
  $pdf->SetSubject('TCPDF Live Example');

  // set default monospaced font
  $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

  // ---------------------------------------------------------

  // set font
  $pdf->SetFont('dejavusans', '', 10);

  // add a page
  $pdf->AddPage();

  $pdf->WriteHTML($body, true, false, true, false, '');

  // - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  // reset pointer to the last page
  $pdf->lastPage();

  // ---------------------------------------------------------

  //Close and output PDF document
  $pdf->Output('example_live.pdf', 'I');
}
else {
  die('No Content');
}


?>