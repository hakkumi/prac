<?
abstract class Shape{
    abstract public function getArea();
}


class Circle extends Shape{
    public $R;
    public $result;
    public function __construct($R) {
        $this->R = $R;
    }

    public function getArea(){
        $result = $this -> R*3.14*2;
        echo"{$result}";
    }
}
$Circle = new Circle(4);
echo $Circle -> getArea();
