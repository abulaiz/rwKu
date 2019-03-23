<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{

    public function index(){
		// Content
		$html = 'Write something here';

		// Custom Header
		PDF::setHeaderCallback(function($pdf) {

		        // Set font
		        $pdf->SetFont('helvetica', 'B', 20);
		        // Title
		        $pdf->SetY(20);
		        $pdf->Cell(0, 15, "RUKUN TETANGGA 04 RUKUN WARGA 06", 0, false, 'C', 0, '', 0, false, 'M', 'M');
		        $pdf->Cell(0, 15, "RUKUN TETANGGA 04 RUKUN WARGA 06", 0, false, 'C', 0, '', 0, false, 'M', 'M');

		});

		// Custom Footer
		PDF::setFooterCallback(function($pdf) {

		        // Position at 15 mm from bottom
		        $pdf->SetY(-15);
		        // Set font
		        $pdf->SetFont('helvetica', 'I', 8);
		        // Page number
		        $pdf->Cell(0, 10, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');

		});

		PDF::SetAuthor('System');
		PDF::SetTitle('My Report');
		PDF::SetSubject('Report of System');
		PDF::SetMargins(7, 18, 7);
		PDF::SetFontSubsetting(false);
		PDF::SetFontSize('10px');   
		PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);     
		PDF::AddPage('L', 'A4');
		PDF::writeHTML($html, true, false, true, false, '');
		PDF::lastPage();
		PDF::Output('my_file.pdf', 'I');  
    }
}
