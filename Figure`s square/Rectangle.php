<?php
include_once "index.php";
include_once "BaseFigure.php";

class Rectangle extends BaseFigure{
    public $side1;
    public $side2;
    function countSquare()
    {
        $this->s = $this->side1 * $this->side2;
    }
    function generateSides(){
        $this->side1 = generateNumb();
        $this->side2 = generateNumb();
        $this->countSquare();
    }
    function recordInFile($file){
        $str = "S = ".$this->s.", side 1 = ".$this->side1.", side 2 = ".$this->side2.PHP_EOL;
        fputs($file, $str);
    }
}
