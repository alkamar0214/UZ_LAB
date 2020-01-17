<?php
 session_start();
 require_once '../tcpdf/config/lang/eng.php';
 require_once '../tcpdf/tcpdf.php';
 include ('../pages/library.php'); 
sleep(2);

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Administrator');
$pdf->SetTitle('SEICT Profiling');
$pdf->SetSubject('SEICT Profiling');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData('seict.png','16', 'Universidad De Zamboanga', 'School of Engineering Information and Communications Technology');
//$pdf->SetHeaderData('','16', 'Appraisal and Assessment Report', 'Zamboanga City');


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(5, PDF_MARGIN_TOP, 5);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// IMPORTANT: disable font subsetting to allow users editing the document
$pdf->setFontSubsetting(false);

// set font
$pdf->SetFont('times', '', 9, '', false);

// add a page
$pdf->AddPage();
//$pdf->Image('logo.png', 8, 2, 12, 12, '', '', '', true, 72);

// create some HTML content

// output the HTML content

//another or your SQL
$htmls="";

$query=mysql_query("SELECT a.* ,b.course FROM profile_tbl a, course_tbl b WHERE a.course=b.course_desc ORDER BY name");
while($arr=mysql_fetch_assoc($query)){
	$i++;
	$htmls .= '<tr >';
	$htmls .= '<td width="30" height="33" align="center">'.$i.'</td>';
	$htmls .= '<td width="130" height="33" align="center">'.strtoupper($arr[name]).'</td>';
	$htmls .= '<td width="80" height="33" align="center">'.strtoupper($arr[birthday]).'</td>';
	$htmls .= '<td width="110" height="33" align="center">'.strtoupper($arr[address]).'</td>';
	$htmls .= '<td width="70" height="33" align="center">'.strtoupper($arr[gender]).'</td>';
	$htmls .= '<td width="70" height="33" align="center">'.strtoupper($arr[course]).'</td>';
	$htmls .= '<td width="110" height="33" align="center">'.strtoupper($arr[department]).'</td>';
	
	$htmls .= '</tr>';	
}

$htmls .= '<hr>';
$pdf->SetFont('times', '', 9);
$html = <<<EOD
<font size="12">SEICT Student List</font>
<br><br>
<table width="680" border="1" cellspacing="0" cellpadding="0">
  <tr>
	<th width="30" align="center"><b>#</b></th>
	<th width="130" align="center"><b>NAME</b></th>
	<th width="80" align="center"><b>BIRTHDAY</b></th>
	<th width="110" align="center"><b>ADDRESS</b></th>
	<th width="70" align="center"><b>GENDER</b></th>
	<th width="70" align="center"><b>COURSE</b></th>
	<th width="110" align="center"><b>DEPARTMENT</b></th>
	
	
  </tr>
	$htmls
</table>
EOD;

$pdf->writeHTML($html, true, 0, true, 0);


// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_054.pdf', 'I');

//============================================================+
// END OF FILE
//================================================