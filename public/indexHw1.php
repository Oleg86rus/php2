<?php
// class Product
// {
//     // свойства класса Product
//     public $name;
//     public $price;
//     public $quantity;

//     // метод конструктор
//     public function __construct($name = '', $price = 0, $quantity = 0)
//     {
//         $this->name = $name;
//         $this->price = $price;
//         $this->quantity = $quantity;   
//     }

//     // метод, который выводит информацию по товару на экран
//     public function ProductInfo()
//     {
//         echo "Наименование товара - " . $this->name . ";<br>Цена товара - " . $this->price . " рублей; <br>Количество - " . $this->quantity . " кг;<br>";
//     }
// }
// // добавил свойство скидку в класс ProductSale
// class ProductSale extends Product
// {
//     public $discount;
//     public function __construct($name = '', $price = 0, $quantity = 0, $discount = 0)
//     {
//         parent::__construct($name, $price , $quantity);
//         $this->discount = $discount;
//     }
//     public function ProductInfo()
//     {
//         parent::ProductInfo();
//         echo "Скидка - " . $this->discount . " %;<br>";
//     }
// }
// $product1 = new Product("яблоко", 100, 1);
// $product1->ProductInfo();
// $product2 = new ProductSale("картошка", 100, 1, 10);
// $product2->ProductInfo();

// echo '<br>Дан код, Что он выведет на каждом шаге? Почему?:<br>
// class A {<br>
//     public function foo() {<br>
//         static $x = 0;<br>
//         echo ++$x;<br>
//     }<br>
// }<br>
// $a1 = new A();<br>
// $a2 = new A();<br>
// $a1->foo();<br>1<br>
// $a2->foo();<br>2<br>
// $a1->foo();<br>3<br>
// $a2->foo();<br>4<br>
// так как это все одна переменная, значения просто суммируются<br>
// Немного изменим п.5:<br>
// class A {<br>
//     public function foo() {<br>
//         static $x = 0;<br>
//         echo ++$x;<br>
//     }<br>
// }<br>
// class B extends A {<br>
// }<br>
// $a1 = new A();<br>
// $b1 = new B();<br>
// $a1->foo(); <br>1<br>
// $b1->foo(); <br>1<br>
// $a1->foo(); <br>2<br>
// $b1->foo();<br>2<br>
// так как тут две переменных, то в первых двух строках 0+1, во вторых 1+1<br>';