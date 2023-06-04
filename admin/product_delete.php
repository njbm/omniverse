<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php') ?>
<?php

use \BITM\SEIP12\Product;
use \BITM\SEIP12\Utility\Validator;
use \BITM\SEIP12\Utility\Utility;

$id = Utility::sanitize($_POST['id']);

if (!Validator::empty($id)) {
    $product = new Product();
    $result = $product->destroy($id);
} else { // REfactor using Session based message
    dd("Id cannot be null or empty");
}

if ($result) { // edge case is not handled. if it writes nothing. length = 0
    redirect('product_index.php');
}

?>