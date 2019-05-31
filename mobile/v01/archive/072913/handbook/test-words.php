<?php
//============================================================+
// File name   : example_051.php
// Begin       : 2009-04-16
// Last Update : 2013-05-14
//
// Description : Example 051 for TCPDF class
//               Full page background
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Full page background
 * @author Nicola Asuni
 * @since 2009-04-16
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_min/tcpdf.php');
include("lib/conn-data.php");

if (!isset($_GET['country'])) {
	throw new Exception("country name is not specified");
}

// get country name
$country_name = ucwords($_GET['country']);                   
$conn = connect_db();
		
$words = query_all_words_table($country_name);

/* Word to Know */
// When add new words (use google doc)
// sed -e 's/^/"/' file | sed -e 's/$/"/' | tr '\r\n' ',' > news
$englishWord = array(1 => "Airport","ATM","Bank","Bus","Consulate","Embassy","Emergency Room","Fire","Food","Hospital","Hotel","Internet","Lawyer","Market","Metro","Money","Pharmacy","Police Station","Restaurant","Store","Suitcase","Telephone","Train","Translation","University","Ambulance","Baggage Claim","Bathroom","Computer","Doctor","Emergency","Exchange Rate","Fire Station","Help","Hostel","Insurance","Law","Luggage","Medicine","Metro Station","Nurse","Police","Post Office","Station","Street","Taxi","Thief","Train Station","Translator","Water");
$wordList = array();            				
foreach ($englishWord as $translationKey => $english) {
	$wordsList[] = str_replace("<br/>", "  ", $words['word' . $translationKey]);
}

// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
    //Page header
    public function Header() {
        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = K_PATH_IMAGES.'../../card/words-to-know.jpg';
        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Center for Global Education');
$pdf->SetTitle('StudentsAbroad.com - Words To Know');
$pdf->SetSubject('Words to Know');
$pdf->SetKeywords('CGE, Study Abroad, Student Handbook, Words ');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 008', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// set font
$pdf->SetFont('cid0cs', '', 12);
$pdf->setFontSpacing(0);

// add a page
$pdf->AddPage();
// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// Print a text
$txt = $wordsList[0];

$pdf->MultiCell(55, 5, $txt, 0, 'L', 0, 0, 10, 10, true);




//Close and output PDF document
$pdf->Output('example_051.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>