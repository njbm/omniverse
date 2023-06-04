<?php include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'config.php') ?>
<?php

use \BITM\SEIP12\Product;
use \BITM\SEIP12\Utility\Utility;

$src=null;
$new_picture=null;
$old_picture=null;

$old_picture=$_POST['old_picture'];

if (array_key_exists('picture', $_FILES) && !empty($_FILES['picture']['name'])) {
    $filename = $_FILES['picture']['name']; // if you want to keep the name as is
    $filename = uniqid() . "_" . $_FILES['picture']['name']; // if you want to keep the name as is
    $target = $_FILES['picture']['tmp_name'];
    $destination = $uploads . $filename;

    if (upload($target, $destination)) {
        $new_picture = $filename;
    }

    if (file_exists($uploads . $old_picture)) {
        unlink($uploads . $old_picture);
    }
}

$src = $new_picture ?? $old_picture;

$id = Utility::sanitize($_POST['id']);

$product = new Product();
$products = $product->find($id);


$products->price = Utility::sanitize($_POST['price']);
$products->title = Utility::sanitize($_POST['title']);
$products->caption = Utility::sanitize($_POST['caption']);
$products->description = Utility::sanitize($_POST['description']);
$products->src = $src;

$result = $product->update($products);


if($result){
    $message = "Data is updated Successfully";
    set_session('message',$message);
    // redirect("slider_index.php?message=".$message);
    redirect("product_index.php");
}
