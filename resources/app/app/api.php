<?php
//api.php

$key = $_SESSION["csrf-key"];
$api = new Webix\Remote\Server($key);

//add function
$api->setMethod("add", function($a, $b){
    return $a + $b;
});
$api->setMethod("error", function(){
    throw new \Exception("Dummy");
});

//add static value
$api->setData("user", "1");

//add class
class DataDao{
    public function mul($a, $b){
        return $a * $b;
    }
}

$api->setClass("data", new DataDao());


$api->end();
?>