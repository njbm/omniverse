<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}

$webroot = "http://SP.test".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partials = $docroot.DIRECTORY_SEPARATOR.'admin/partials'.DIRECTORY_SEPARATOR;
$frontend_partials = $docroot.DIRECTORY_SEPARATOR.'frontend/partials'.DIRECTORY_SEPARATOR;

