<?php
include_once 'Class/Circle.php';
include_once 'Class/Cylinder.php';
$hinhtron1 =new Circle(3, "black");
$hinhtru1 = new Cylinder(3,"violet",2);
echo " - Diện tích hình tròn là : ".$hinhtron1->getArea();
echo "<br>";
echo "Thể tích hình trụ là : ".$hinhtru1->getVolume();
echo "<br>";
echo " - Diện tích hình trụ là : ".$hinhtru1->getArea();
?>