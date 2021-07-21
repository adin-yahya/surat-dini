<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'vendor/autoload.php';

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function test()
    {
        try {
            $phpWord = new \PhpOffice\PhpWord\PhpWord();

            $section = $phpWord->addSection(array('breakType' => 'continuous', 'colsNum' => 2));
            $header = $section->addHeader();
            $src = base_url('assets/img/logo.jpg');
            $imageStyle = array(
                'width' => 80,
                'height' => 80,
                'wrappingStyle' => 'square',
                'positioning' => 'absolute',
                'posHorizontalRel' => 'margin',
                'posVerticalRel' => 'line',
            );
            $header->addImage($src, $imageStyle);
            $header->addText(
                '"Learn from yesterday, live for today, hope for tomorrow. '
                    . 'The important thing is not to stop questioning." '
                    . '(Albert Einstein)'
            );

            /*
 * Note: it's possible to customize font style of the Text element you add in three ways:
 * - inline;
 * - using named font style (new font style object will be implicitly created);
 * - using explicitly created font style object.
 */

            // Adding Text element with font customized inline...
            $section->addText(
                '"Great achievement is usually born of great sacrifice, '
                    . 'and is never the result of selfishness." '
                    . '(Napoleon Hill)',
                array('name' => 'Tahoma', 'size' => 10)
            );

            // Adding Text element with font customized using named font style...
            $fontStyleName = 'oneUserDefinedStyle';
            $phpWord->addFontStyle(
                $fontStyleName,
                array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
            );
            $section->addText(
                '"The greatest accomplishment is not in never falling, '
                    . 'but in rising again after you fall." '
                    . '(Vince Lombardi)',
                $fontStyleName
            );

            // Adding Text element with font customized using explicitly created font style object...
            $fontStyle = new \PhpOffice\PhpWord\Style\Font();
            $fontStyle->setBold(true);
            $fontStyle->setName('Tahoma');
            $fontStyle->setSize(13);
            $myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
            $myTextElement->setFontStyle($fontStyle);
            $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
            header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
            header("Content-Disposition: attachment; filename='myFile.docx'");
            $objWriter->save('php://output');
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
