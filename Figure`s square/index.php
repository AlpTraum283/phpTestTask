<?php
include_once "Triangle.php";
include_once "Rectangle.php";
include_once "Circle.php";
include_once "functions.php";
$filename = "Object`s list.txt";
$file = fopen($filename, "w+");
function generateNumb(){
    return rand(1,100);
}
$objAmount = 10;
for($iter = 0; $iter < $objAmount; $iter++){
    $rand = rand(1,3);
    switch ($rand){
        case 1:
            $ta = new Triangle();
            $ta->generateSides();
            while($ta->ifExist() != 1){
                $ta->generateSides();
            }
            $ta->recordInFile($file);

            break;
        case 2:
            $ci = new Circle();
            $ci->generateSides();
            $ci->recordInFile($file);

            break;
        case 3:
            $rt = new Rectangle();
            $rt->generateSides();
            $rt->recordInFile($file);

            break;
    }
}
fclose($file);
$file = fopen($filename, "r");

$objArray = upload($file);
$squareArray = formSquareArrayList($objAmount, $objArray);
rsort($squareArray);
sortedPrint($objAmount, $objArray, $squareArray);