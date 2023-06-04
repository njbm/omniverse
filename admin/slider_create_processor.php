<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Utility;

$filename = $_FILES['picture']['name']; // if you want to keep the name as is
$filename = uniqid() . "_" . $_FILES['picture']['name']; // if you want to keep the name as is
$target = $_FILES['picture']['tmp_name'];
$destination = $uploads . $filename;

$src = null;
if (upload($target, $destination)) {
    $src = $filename;
}


$slider = new Slider();

$slider->alt = Utility::sanitize($_POST['alt']);
$slider->title = Utility::sanitize($_POST['title']);
$slider->caption = Utility::sanitize($_POST['caption']);
$slider->src = $src;

$result = $slider->store($slider);

if ($result) {
    redirect("slider_index.php");
} else {
    echo "Data is not stored";
}

