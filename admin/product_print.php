<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

$dataProducts = file_get_contents($datasource . DIRECTORY_SEPARATOR . 'productitems.json');
$products = json_decode($dataProducts);
   

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
                    <th>Price</th>
                    <th>Caption</th>
                    <th>Src</th>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach($products as $key=>$product):
    ?> 
                <tr>
                    <td title="<?=$product->uuid?>"><?=++$key?></td>
                    <td><?=$product->title?></td>
                    <td><?=$product->price?>  TK</td>
                    <td><?=$product->caption?></td>
                    <td><img src="<?=$webroot."uploads/".$product->src?>"
                     style="width:200px;height:100px; margin:10px"></td>

                </tr>
    <?php
    endforeach
    ?>
            </tbody>
</table>

</body>
</html>
