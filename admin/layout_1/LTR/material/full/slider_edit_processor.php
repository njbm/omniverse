<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

d($_POST);
// store: as json data to json file
$id = $_POST['id'];
$uuid = $_POST['uuid'];
$src = $_POST['url'];
$alt = $_POST['alt'];
$title = $_POST['title'];
$caption = $_POST['caption'];

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

foreach($slides as $key=>$aslide){
    if($aslide->id == $id){
        break;
    }
}
// d($slides);
// d($slide);
$slides[$key] = (object)$slide;
//dd($slides);
$dataSlides = json_encode($slides);

if(file_exists($datasource."slideritems.json")){
    $result = file_put_contents($datasource. "slideritems.json",$dataSlides); 
}else{
    echo "File not found";
}
if($result){
    $message = "Data is updated Successfully";
    set_session('message',$message);
    // redirect("slider_index.php?message=".$message);
    redirect("slider_index.php");
}else{
    $message = "Data is not updated";
    set_session('message',$message);
    // redirect("slider_index.php?message=".$message);
    redirect("slider_index.php");
}  
//dd($result);
