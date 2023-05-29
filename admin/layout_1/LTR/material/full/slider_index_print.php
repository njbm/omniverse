<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
    $dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
    $slides = json_decode($dataSlides);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

<button type="button" onclick="print()">Print</button>
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


<?php
   foreach($slides as $key=>$slide):
        //  if(0 == $key){
        //   $active = 'active';
        //  }else{
        //   $active = '';
        //  }
		
     ?> 


								<tr>
									<td title="<?=$slide->uuid?>"><?=++$key?></td>
									<td><?=$slide->title?></td>
									<td><img src="<?=$webportal.'uploads/'.$slide->src?>" style="width:100px;height:100px"></td>
									<td><?=$slide->alt?></td>
									<td><?=$slide->caption?></td>
									<td> 
								</tr>
								<?php
 endforeach
?>
							</tbody>
						</table>
</body>
</html>

