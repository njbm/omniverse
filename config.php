<?php

session_start( );
ini_set('display_errors', 'On');
error_reporting(E_ALL);
function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}

function set_session($key, $val){
    $_SESSION[$key] = $val;
}

function get_session($key){
    if(array_key_exists($key, $_SESSION) && !empty($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return null;
}

function flush_session($key){
    $value = get_session($key);
    $_SESSION[$key]='';
    return $value; 
}

function kill_session(){
    session_destroy();
    $_SESSION = null;
    unset($_SESSION);
}
function redirect($url){
    header("location:$url");
}

function upload($target, $destination){
    move_uploaded_file($target, $destination);
    return true;
}

$docroot = $_SERVER['DOCUMENT_ROOT'];
$datasource = $docroot.DIRECTORY_SEPARATOR."datasource".DIRECTORY_SEPARATOR;
$partials = $docroot.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$uploads = $docroot.DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR;

$portal_partials = $docroot.DIRECTORY_SEPARATOR.'portal'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;

// $portal_partials = $docroot.DIRECTORY_SEPARATOR.'portal'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$webportal = "http://omniverse.test".DIRECTORY_SEPARATOR;
$uploaded_assets = $webportal."uploads".DIRECTORY_SEPARATOR;


$datasource_driver = "JSON";
