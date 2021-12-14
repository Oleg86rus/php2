<?php

// Не могу понять как задействовать цену изначального абстрактного продукта, 
// чтобы у цифрового цена от него отталкивалась.ё
// Так же не могу понять, почему нельзя задать количество сразу как наименование и цену.
// Во всяком случае у меня не получается.


abstract class Product {
    protected $name;
    public $price;

    protected static $income = 0;

    function __construct($name, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }
    abstract public function sell($quantity);
    public function print_income() {
        echo "Общий доход со всех товаров составил " . Self::$income;
    }

}


class Real_product extends Product {
    public function sell($quantity) {
        Parent::$income = Parent::$income + ($quantity * $this->price);

    }

}

class It_product extends Product {
    // public function get_final_price($price){
    //     return $price / 2;
    // }
    public function sell($quantity) {
        Parent::$income = Parent::$income + ($quantity * $this->price * 0.5);
    }
}

class Weight_product extends Product {
    public function get_final_price($weight){
        if ($weight < 3) {
            return $this->price;
        } elseif ($weight >= 3 and $weight < 6) {
            return $this->price*0.6;
        } else {
            return $this->price*0.3;
        }
    }
    public function sell($weight) {
        Parent::$income = Parent::$income + ($weight * $this->get_final_price($weight));
    }
}


$product1 = new Real_product("Журнал", 100);
$product2 = new It_product("Программа", 100);
$product3 = new Weight_product("Картошка", 100);

$product1->sell(1);
$product2->sell(1);
$product3->sell(7);
$product3->print_income();
