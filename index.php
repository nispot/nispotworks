<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "es":
    case "es-ES":
        header("Location: http://nispotworks.com/es/");
        break;
    default:
        header("Location: http://nispotworks.com/en/");
        break;
} 
?>