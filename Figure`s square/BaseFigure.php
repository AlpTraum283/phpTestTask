<?php

abstract class BaseFigure{
    public $s;

    private function getS()
    {
        return $this->s;
    }
    private function setS($s)
    {
        $this->s = $s;
    }
    abstract function countSquare();
    abstract function recordInFile($file);
}