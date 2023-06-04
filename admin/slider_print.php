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
    <style>
        table,tr,td,th{ border: 1px solid green; border-collapse: collapse; width: 800px; text-align: center;
        }
    </style>
</head>
<body>
<h1 align="center"> All Sliders </h1>

<table align="center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>	
                    <th>Alt</th>
                    <th>Caption</th>
                    <th>Src</th>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach($slides as $key=>$slide):
    ?> 
                <tr>
                    <td title="<?=$slide->uuid?>"><?=++$key?></td>
                    <td><?=$slide->title?></td>
                    <td><?=$slide->alt?></td>
                    <td><?=$slide->caption?></td>
                    <td><img src="<?=$webroot."uploads/".$slide->src?>"
                     style="width:200px;height:100px; margin:10px"></td>

                </tr>
    <?php
    endforeach
    ?>
            </tbody>
</table>

</body>
</html>
