<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Circle
{
    public $radius;
    public $color;
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function calculateArea()
    {
        return pow($this->radius,2) * pi();
    }
    public function toString()
    {
        return 'Circle: ' . $this->radius . ' - ' . $this->color;
    }
}
class Cylinder extends Circle
{
    public $height;
    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function getVolume()
    {
        return parent::calculateArea() * $this->height;
    }
    public function toString()
    {
        return 'Cylinder: ' . $this->radius . ' - ' . $this->color . ' - ' . $this->height;
    }
}

$circle = new Circle(50,'green');
$cylinder = new Cylinder(50, 'red', 15);
echo $circle->calculateArea() . '<br>';
echo $circle->toString() . '<br>';
echo $cylinder->toString();
?>
</body>
</html>