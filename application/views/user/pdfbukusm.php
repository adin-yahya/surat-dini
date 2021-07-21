<?php
tcpdf();

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {

		// Set font
		$this->SetFont('helvetica', 'B', 20);
		// Title
		$this->Cell(0, 20, 'Surat Masuk', 0, false, 'C', 0, '', 0, false, '', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

$obj_pdf = new MYPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "Surat masuk";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
    // we can have any view part here like HTML, PHP etc
	echo "<h2>".$dari. " sampai ". $sampai."</h2><br>";
	echo '<table border="1" cellpadding="3"><thead><tr><th><strong>Nomor</strong></th><th><strong>Perihal</strong></th><th><strong>Tanggal Surat</strong></th><th><strong>Tanggal Terima</strong></th><th><strong>Pengirim</strong></th><th><strong>Keterangan</strong></th></tr></thead><tbody>';
	foreach ($suratmasuk as $sm) {
    echo '<tr><td>'. $sm['no_surat'] .'</td><td>'.$sm['perihal'] .'</td><td>'. $sm['tgl_surat'] .'</td><td>'. $sm['tgl_terima'] .'</td><td>'. $sm['pengirim'] .'</td><td>'. $sm['keterangan'] .'</td></tr>';}
    echo '</tbody></table>';
    $content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('surat masuk '.$dari.'-'.$sampai.'.pdf', 'I');