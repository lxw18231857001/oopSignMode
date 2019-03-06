<?php
//工厂模式
interface InterfaceShape{
    function getArea();
    function getCircumference();
}

class Rectangle implements InterfaceShape
{
    private $width;
    private $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->height*$this->width;
    }

    public function getCircumference()
    {
        return ($this->width+$this->height)*2;
    }

}


class Circle implements InterfaceShape{
    private $radius;

    function __construct($radius)
    {
        $this->radius=$radius;
    }

    public function getArea()
    {
        return M_PI*pow($this->radius,2);
    }

    public function getCircumference()
    {
        return 2*M_PI*$this->radius;
    }
}

class FactoryShape{
    public static function create()
    {
        switch (func_num_args()){
            case 1:
                return new Circle(func_get_arg(0));
            case 2:
                return new Rectangle(func_get_arg(0),func_get_arg(1));
            default:
//                return false;
                break;

        }
    }
}


$rect= FactoryShape::create(5,5);
//object(Rectangle)#1 (2) { ["width":"Rectangle":private]=> int(5) ["height":"Rectangle":private]=> int(5) }
var_dump($rect);
echo "矩形面积：".$rect->getArea();
echo "矩形周长：".$rect->getCircumference();
echo '<hr>';
// 矩形面积：25  矩形周长：20
$circle=FactoryShape::create(3);
//object(Circle)#2 (1) { ["radius":"Circle":private]=> int(3) }
var_dump($circle);
echo "圆的周长：".$circle->getCircumference();
echo "圆的面积：".$circle->getArea();
//圆的周长：18.849555921539 圆的面积：28.274333882308