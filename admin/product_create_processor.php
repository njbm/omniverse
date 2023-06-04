<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

use \BITM\SEIP12\Product;
use \BITM\SEIP12\Utility\Utility;

$filename = $_FILES['picture']['name']; // if you want to keep the name as is
$filename = uniqid() . "_" . $_FILES['picture']['name']; // if you want to keep the name as is with a uniq id
$target = $_FILES['picture']['tmp_name'];
$destination = $uploads . $filename;

$src = null;
if (upload($target, $destination)) {
    $src = $filename;
}

$product = new Product();


$product->price = Utility::sanitize($_POST['price']);
$product->title = Utility::sanitize($_POST['title']);
$product->caption = Utility::sanitize($_POST['caption']);
$product->description = Utility::sanitize($_POST['description']);
$product->src = $src;

$result = $product->store($product);

if ($result) {
    redirect("product_index.php");
} else {
    echo "Data is not stored";
}
