<?php
include_once "index.php";
include_once "BaseFigure.php";
class Triangle extends BaseFigure{
    public $side1;
    public $side2;
    public $side3;

    function countSquare(){
        $halfP = $this->side1 + $this->side2 + $this->side3;
        $this->s = sqrt($halfP * ($halfP - $this->side1) * ($halfP - $this->side2) * ($halfP - $this->side3));
    }
    function ifExist(){
        if( ( ($this->side1 + $this->side2 > $this->side3) &&
            ($this->side2 + $this->side3 > $this->side1) &&
            ($this->side3 + $this->side1 > $this->side2) )  != 0){
            return 1;
        }else{
            return 0;
        }
    }
    function generateSides(){
        $this->side1 = generateNumb();
        $this->side2 = generateNumb();
        $this->side3 = generateNumb();
        $this->countSquare();
    }
    function recordInFile($file){
        $str = "S = ".$this->s.", side 1 = ".$this->side1.", side 2 = ".$this->side2.", side 3 = ".$this->side3.PHP_EOL;
        fputs($file, $str);
    }
}