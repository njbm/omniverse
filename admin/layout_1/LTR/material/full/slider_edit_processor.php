<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

// d($_POST);
// dd($_FILES);
$src = null;
$new_picture = null;
$old_picture = null;
$old_picture = $_POST['old_picture'];

if(array_key_exists('picture', $_FILES) && !empty($_FILES['picture']['name'])){
$filename = $_FILES['picture']['name']; // if you want to keep the filename as it is
$filename = uniqid()."_".$_FILES['picture']['name']; // if you want to keep the filename as it is
$target = $_FILES['picture']['tmp_name']; // if you want to keep the filename as it is
$destination = $uploads.$filename;

    if(upload($target. $destination)){
        $new_picture = $filename;
    }
    if(file_exists($docroot."uploads/" . $old_picture)){
        unlink($docroot."uploads/" . $old_picture);
    }else{
        //d($docroot."uploads/" . $old_picture);
        dd("file not exists");
    }
}
dd("evvwv");
// store: as json data to json file
$id = $_POST['id'];
$uuid = $_POST['uuid'];


$src = $old_picture ?? $old_picture;
//dd($src);
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
