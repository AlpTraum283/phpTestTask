<?php
include_once "index.php";
include_once "BaseFigure.php";

class Circle extends BaseFigure{
    public $r;
    function countSquare(){
        $this->s = M_PI * ($this->r * $this->r);
    }
    function generateSides(){
        $this->r = generateNumb();
        $this->countSquare();
    }
    function recordInFile($file){
        $str = "S = ".$this->s." r = ".$this->r.PHP_EOL;
        fputs($file, $str);
    }
}