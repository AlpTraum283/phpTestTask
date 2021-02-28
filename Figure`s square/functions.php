<?php

function upload($file){
    $objArray = array();
    while (!feof($file)) {
        array_push($objArray, fgets($file));
    }
    return $objArray;
}

function formSquareArrayList($objAmount, $objArray){
    $squareArray = array();
    for($i = 0; $i < $objAmount; $i++){
        $line = explode(" ", $objArray[$i]);
        array_push($squareArray, floatval($line[2]));
    }
    return $squareArray;
}
function sortedPrint($objAmount, $objArray = array(), $squareArray = array()){
    for($i = 0; $i < $objAmount; $i++){
        for($j = 0; $j < $objAmount; $j++){
            $line = explode(" ", $objArray[$j]);
            if( floatval($line[2]) == $squareArray[$i]){
                print_r($objArray[$j]."<br>");
            }
        }
    }
}
