<?php

$base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/';

function dd($var){
    var_dump($var);
    die();
}