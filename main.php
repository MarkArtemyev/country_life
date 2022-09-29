<?php
abstract class animal{
    static $id = 1;
    public $idAnimal=0;
    public abstract function getProduct();
    public function getNameOfClass()
    {
        return static::class;
    }
}

class chicken extends animal{
    function __construct() {
        $this->idAnimal=parent::$id++;
        print "chicken id-".$this->idAnimal." \n";
    }
    public function getProduct(){
        return rand(0,1);
    }

}

class cow extends animal{
    function __construct() {
        $this->idAnimal=parent::$id++;
        print "Конструктор класса cow". $this->idAnimal." \n";
    }

    public function getProduct(){
        return rand(8, 12);
    }
}

class ConcreteFactory
{
    public function createСhicken(): chicken
    {
        return new chicken;
    }
    public function createCow(): cow
    {
        return new cow;
    }
}

$factory=new ConcreteFactory();
$a = array();
for($i=1;$i<=10;$i++){
    $a[]=$factory->createCow();
}
for($i=1;$i<=20;$i++){
    $a[]=$factory->createСhicken();
}
$milk=0;
$egg=0;
foreach ($a as $value){
    switch ($value->getNameOfClass()) {
        case "cow":
            $milk +=$value->getProduct();
            break;
        case "chicken":
            $egg +=$value->getProduct();
            break;
    }
        echo $value->getProduct();
}
echo "Milk-".$milk."\n";
echo "Egg-".$egg."\n";