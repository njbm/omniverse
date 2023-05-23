<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

d($_GET);
d($_POST);
//dd($_FILES);

$filename = $_FILES['picture']['name']; // if you want to keep the name as is
$filename = uniqid()."_".$_FILES['picture']['name']; // if you want to keep the name as is
$target = $_FILES['picture']['tmp_name'];
$destination = $uploads.$filename;

$src = null;
if(upload($target, $destination)){
    $src = $filename ;
}
// store: as json data to json file

// $id = 11;
// $uuid = "";
// $src = $_GET['url'];
$alt = $_POST['alt'];
$title = $_POST['title'];
$caption = $_POST['caption'];

$slide = [
        // "id" => uniqid(),
        // "uuid" => $uuid,
        "uuid" => uniqid(),
        "src" => $src,
        "alt" => $alt,
        "title" => $title,
        "caption" => $caption,
];
// dd($slide);

$curentUniqueId = null;

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
