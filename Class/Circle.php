<?php


class Circle
{
    public $radius;
    public $color;
    public $area;

    public function __construct($radius,$color)
    {
        $this ->radius = $radius;
        $this ->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function area($radius)
    {
        $this -> area = 3.14 * ($radius *$radius);
    }

    public function getArea()
    {
        echo (3.14 * ($this->radius *$this->radius))  ;;
    }
}