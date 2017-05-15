<?php 

foreach (glob("models/*.php") as $filename)
{
    include_once($filename);
}
$url = $_SERVER['REQUEST_URI'];
$url_folder = substr($url,1);
