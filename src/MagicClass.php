<?php namespace App;

class MagicClass{
    function __construct(){
        echo __METHOD__,"\n";
    }
    function __destruct(){
        echo __METHOD__,"\n";
    }

}
