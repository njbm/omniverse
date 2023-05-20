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
function redirect($url){
    header("location:$url");
}

$docroot = $_SERVER['DOCUMENT_ROOT'];
$datasource = $docroot.DIRECTORY_SEPARATOR."datasource".DIRECTORY_SEPARATOR;
$partials = $docroot.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;


$portal_partials = $docroot.DIRECTORY_SEPARATOR.'portal'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$webportal = "http://omniverse.test".DIRECTORY_SEPARATOR;

$datasource_driver = "JSON";
