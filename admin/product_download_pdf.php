<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

$dataProducts = file_get_contents($datasource . DIRECTORY_SEPARATOR . 'productitems.json');
$products = json_decode($dataProducts);


$slidesHTMLStart = <<<PRODUCT

<h1> All Sliders </h1>

<table  border="1"  style="border-collapse:collapse; width:700px; text-align: center;">
		<thead>
			<tr> <th>#</th> <th>Title</th> <th>Alt</th> <th>Caption</th> <th>Src</th> </tr>
		</thead>
		<tbody>

PRODUCT;

?>
<?php
$slideHTMLContent = null;
$src = null;
foreach ($products as $key => $product) :
    $ser = ++$key;
    $src = $webroot . "uploads/" . $product->src;
    $slideHTMLContent .= <<<TR

			<tr>
				<td title="$product->uuid">$ser</td>
				<td>$product->title</td>				
				<td>$product->price</td>
				<td>$product->caption</td>
				<td><img src="$src" style="width:100px;height:100px"></td>
				
			</tr>

	TR;

endforeach;

$slideHTMLEnd = <<<EOF
			</tbody>
			</table>
	

	EOF;


$slideHTMLList = $slidesHTMLStart . $slideHTMLContent . $slideHTMLEnd;

//echo $slideHTMLList;



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($slideHTMLList);
$mpdf->Output();
?> 