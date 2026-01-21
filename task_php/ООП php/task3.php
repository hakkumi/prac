<?

class rectangle{
    public $weight, $height;
    
    public function __construct($weight, $height){
        $this->weight=$weight;
        $this->height=$height;
    }
    public function getArea(){
        return $this->weight*$this->height;
    }
    public function getPerimetr(){
        return 2 * ($this->weight + $this->height);
    }
}   

$rectangle = new rectangle(5, 10);

echo $rectangle->getArea();
echo "\n";
echo $rectangle->getPerimetr();
