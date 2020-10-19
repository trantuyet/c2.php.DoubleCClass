<?php
include_once ('Circle.php');

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color,$height)
    {
        parent::__construct($radius, $color );
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getVolume()
    {
        return $this->height * 3.14 * ($this->radius *$this->radius);
    }

    public function getArea()
    {
        echo (3.14 * ($this->radius *$this->radius) + ($this->height *2*3.14));

    }
}