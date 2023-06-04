<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Utility;

$src = null;
$old_picture = null;
$new_picture = null;

$old_picture = $_POST['old_picture'];

if( array_key_exists('picture', $_FILES) && !empty($_FILES['picture']['name'])){
    $filename = $_FILES['picture']['name']; // if you want to keep the name as is
    $filename = uniqid()."_".$_FILES['picture']['name']; // if you want to keep the name as is
    $target = $_FILES['picture']['tmp_name'];
    $destination = $uploads.$filename;

    if(upload($target, $destination)){
        $new_picture = $filename ;
    }

    if(file_exists($uploads.$old_picture )){
        unlink( $uploads.$old_picture );
    }
    
}
$src = $new_picture ?? $old_picture;

// sanitize
// validation
// image processing

// store : as json data to json file
$id = Utility::sanitize($_POST['id']);

$slider = new Slider();
$slide = $slider->find($id);

$slide->alt = Utility::sanitize($_POST['alt']);
$slide->title = Utility::sanitize($_POST['title']);
$slide->caption = Utility::sanitize($_POST['caption']);
$slide->src = $src;

$result = $slider->update($slide);

if($result){
    $message = "Data is updated Successfully";
    set_session('message',$message);
    // redirect("slider_index.php?message=".$message);
    redirect("slider_index.php");
}