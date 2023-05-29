<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

try {
$mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = '8617688212fdb3';
$mail->Password = '80e78f4f955fb0';


$mail->setFrom('seip12@pondit.com', 'SEIP 12');
$mail->addAddress('foysal.aa39@gmail.com', 'Mr. Foysal');     //Add a recipient
$mail->addAddress('ellen@example.com');               //Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment($uploads.'646aef890687c_download.jpeg', 'an-image.jpg');    //Optional name

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'SEIP Here is the subject';
$mail->Body    = 'SEIP this is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'SEIP This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
dd('end mailer');

$dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
$slides = json_decode($dataSlides);

$slidesHTMLStart =<<<SLIDE


<h1> All Sliders </h1>

<table border="1">
							<thead>
								<tr>
									<th>#</th>
									<th>Title</th>
									<th>Src</th>
									<th>Alt</th>
									<th>Caption</th>
									
								</tr>
							</thead>
							<tbody>



SLIDE;

?>
<?php
	$slideHTMLContent = null;
	$src = null;
    foreach($slides as $key=>$slide):
		$ser = ++$key;
		$src = $webportal."uploads/".$slide->src;
		$slideHTMLContent .=<<<TR

			<tr>
				<td title="$slide->uuid">$ser</td>
				<td>$slide->title</td>
				<td><img src="$src" style="width:100px;height:100px"></td>
				<td>$slide->alt</td>
				<td>$slide->caption</td>			
			</tr>

	TR;
	
	endforeach;
	
	$slideHTMLEnd = <<<EOF
			</tbody>
		</table>
		
	</body>
	</html>

	EOF;


	$slideHTMLList = $slidesHTMLStart.$slideHTMLContent.$slideHTMLEnd;

	//echo $slideHTMLList;




// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
    $slideHTMLList
);

/*
 * Note: it's possible to customize font style of the Text element you add in three ways:
 * - inline;
 * - using named font style (new font style object will be implicitly created);
 * - using explicitly created font style object.
 */

// Adding Text element with font customized inline...
// $section->addText(
//     '"Great achievement is usually born of great sacrifice, '
//         . 'and is never the result of selfishness." '
//         . '(Napoleon Hill)',
//     array('name' => 'Tahoma', 'size' => 10)
// );

// Adding Text element with font customized using named font style...
// $fontStyleName = 'oneUserDefinedStyle';
// $phpWord->addFontStyle(
//     $fontStyleName,
//     array('name' => 'Tahoma', 'size' => 10, 'color' => '1B2232', 'bold' => true)
// );
// $section->addText(
//     '"The greatest accomplishment is not in never falling, '
//         . 'but in rising again after you fall." '
//         . '(Vince Lombardi)',
//     $fontStyleName
// );

// Adding Text element with font customized using explicitly created font style object...
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(true);
$fontStyle->setName('Tahoma');
$fontStyle->setSize(13);
$myTextElement = $section->addText('"Believe you can and you\'re halfway there." (Theodor Roosevelt)');
$myTextElement->setFontStyle($fontStyle);

// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save($uploads.'helloWorld2.docx');

// // Saving the document as ODF file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
// $objWriter->save('helloWorld.odt');

// // Saving the document as HTML file...
// $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
// $objWriter->save('helloWorld.html');




dd('xl start 1');
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
	
	$spreadsheet = new Spreadsheet();
	$activeWorksheet = $spreadsheet->getActiveSheet();
	$activeWorksheet->setCellValue('A1', 'Hello World !');
	
	$writer = new Xlsx($spreadsheet);
	$writer->save($uploads.'hello-world.xlsx');

dd('sdf');




    ?> 
