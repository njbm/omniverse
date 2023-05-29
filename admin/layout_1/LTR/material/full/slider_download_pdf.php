<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

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



	$mpdf = new \Mpdf\Mpdf();
	$mpdf->WriteHTML($slideHTMLList);
	$mpdf->Output();
    ?> 
