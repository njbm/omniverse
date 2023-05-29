<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php
use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Utility;
use Intervention\Image\ImageManager;

$manager = new ImageManager(['driver' => 'imagick']);

$filename = uniqid()."_".$_FILES['picture']['name'];

try{
    $img = $manager->make($_FILES['picture']['tmp_name'])
                    ->resize(30, 20)
                    ->save($uploads.$filename);
    $src = $filename ;
}catch(Intervention\Image\Exception\NotWritableException $e){
    dd($e);
}catch(Exception $e){
    dd($e);
}

$slider = new Slider();

$slider->alt = Utility::sanitize($_POST['alt']);
$slider->title = Utility::sanitize($_POST['title']);
$slider->caption = Utility::sanitize($_POST['caption']);
$slider->src = $src;

$result = $slider->store($slider);

if($result){
    redirect("slider_index.php");
}else{
    echo "Data is not stored";
}
