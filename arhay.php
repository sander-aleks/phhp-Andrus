<?php
    $names = ['toomas', 'Ever', 'Kristiona', 'php ait', 'margus', 'timmo', 'färdinand'];

   $lessthanfive = array_filter( $names, function($name) {
        return strlen($name) <= 5;
    });

function upper($element){
    return strtoupper($element);
};

$capsljetter = array_map('upper', $names);
    

var_dump($lessthanfive);
var_dump($capsljetter)
?>