<?php

define("ROOT", "http://localhost/template");

define("SITE","#Template");


function url(string $uri = null): string{
    if($uri){
        return ROOT . "/{$uri}";
    }
    return ROOT;
} 