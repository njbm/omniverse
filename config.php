<?php
    session_start();
    ini_set(option:'display_errors', value:'on');
    error_reporting(error_level:E_ALL);
include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."vendor". DIRECTORY_SEPARATOR ."autoload.php");

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}

function set_session($key,$val){
    $_SESSION[$key]=$val;
}

function get_session($key){
    if (array_key_exists(key:$key, array:$_SESSION)&& !empty($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return null;
}

function flush_session($key){
    $value = get_session($key);
    $_SESSION[$key] = '';
    return $value;
}

function kill_session(){
    session_destroy();
    $_SESSION = null;
    unset($_SESSION);
}

function redirect($url)
{
    header("location:$url");
}

function upload($target, $destination)
{
    move_uploaded_file($target, $destination);
    return true;
}

$webroot = "http://omniverse.test".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partials = $docroot.DIRECTORY_SEPARATOR.'admin/partials'.DIRECTORY_SEPARATOR;
$frontend_partials = $docroot.DIRECTORY_SEPARATOR.'frontend/partials'.DIRECTORY_SEPARATOR;
$portal_partials = $docroot.DIRECTORY_SEPARATOR.'portal/partials'.DIRECTORY_SEPARATOR;

$datasource = $docroot.DIRECTORY_SEPARATOR.'datasource'.DIRECTORY_SEPARATOR;
$uploads = $docroot . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;


//$datasource_driver = "JSON"; // "Database, XML(optional), COOKIE/Session (learning only)