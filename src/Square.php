<?php

namespace App;
use App\Shape;

class Square extends Shape
{
    private $side=10;

    public function getArea()
    {
      return pow($this->side,2);  
    }
}