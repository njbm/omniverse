<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

// dd($_GET);
// store: as json data to json file

// $id = 11;
// $uuid = "";
$src = $_GET['url'];
$alt = $_GET['alt'];
$title = $_GET['title'];
$caption = $_GET['caption'];

$slide = [
        "id" => uniqid(),
        "uuid" => $uuid,
        "src" => $src,
        "alt" => $alt,
        "title" => $title,
        "caption" => $caption,
];

$dataSlides = file_get_contents($datasource.DIRECTORY_SEPARATOR.'slideritems.json');
$slides = json_decode($dataSlides);

if(count($slides) > 0){
    // finding unique id
    $ids = [];
    foreach($slides as $aslide){
        $ids[] = $aslide->id;
    }
    sort($ids);
    $lastIndex = count($ids) - 1;
    $highestId = $ids[$lastIndex];

    $currentUniqueId = $highestId + 1;
}else{
    $currentUniqueId = 1;
}

$slide['id'] = $currentUniqueId;

$slides[] = (object)$slide;
$dataSlide = json_encode($slides);

if(file_exists($datasource."slideritems.json")){
    $result = file_put_contents($datasource. "slideritems.json",$dataSlide); 
}else{
    echo "File not found";
}

if($result){
    redirect("slider_index.php");
}    
d($result);
