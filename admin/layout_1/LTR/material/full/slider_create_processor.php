<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

// dd($_GET);

$id = "11";
$uuid = "acsvv";
$src = $_GET['url'];
$alt = $_GET['alt'];
$title = $_GET['title'];
$caption = $_GET['caption'];

$slide = [
        "id" => $id,
        "uuid" => $uuid,
        "src" => $src,
        "alt" => $alt,
        "title" => $title,
        "caption" => $caption,
];

$dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
$slides = json_decode($dataSlides);

$slides[] = (object)$slide;
$dataSlide = json_encode($slides);

if(file_exists($datasource."slideritems.json")){
    $result = file_put_contents($datasource. "slideritems.json",$dataSlide); 
}else{
    echo "File not found";
}
   
dd($result);
