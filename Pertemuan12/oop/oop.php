<?php
// membuat class car dengan oop
class Car
{
    public $brand;

    // membuat fungsi start engine
    public function startEngine()
    {
        echo "Engine started!";
    }
}

// instansiasi objek car dan mengisi namanya
$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

// melakukan fungsi yang dibuat sebelumnya kepada objek car1
$car1->startEngine();
// menampilkan brand car
echo $car2->brand;

echo "<br/>";

//inheritance dalam PHP
//membuat class animal 
class Animal
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    // membuat fungsinya
    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }
    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

// subclass animal
class Cat extends Animal
{
    public function meow()
    {
        echo $this->name . "says meow!<br>";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo $this->name . "says woof!<br>";
    }
}

// instansiasi objek dan mengakses fungsi fungsinya
$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");
$cat->eat();
$dog->sleep();
$cat->meow();
$dog->bark();

echo "<br><br>";

// polymorphism

// membuat fungsi untuk digunakan oleh class lain
interface Shape
{
    public function calculateArea();
}

// membuat class yang mengimplementasi isi dari Shape
class Circle implements Shape
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle implements Shape
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
printArea($circle);
printArea($rectangle);

echo "<br><br>";


// enkapsulasi dalam PHP

class Car2
{
    // atribut dibuat private agar tidak sembarang untuk diubah dari class lain
    private $model;
    private $color;
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    // mengambil nilai atribut model
    public function getModel()
    {
        return $this->model;
    }

    // mengubah nilai atribut color
    public function setColor($color)
    {
        $this->color = $color;
    }

    // mengambil nilai atribut color
    public function getColor()
    {
        return $this->color;
    }
}
$car = new Car2("Toyota", "Blue");
echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";
$car->setColor("Red");
echo "Updated Color: " .  $car->getColor() . "<br>";


// abstract class

// membuat abstract class
abstract class Shape2
{
    // membuat fungsi abstrak untuk digunakan nanti tanpa ada isinya
    abstract public function calculateArea();
}
class Circle2 extends Shape2
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // menambahkan isi dari fungsi abstrak untuk digunakan khusus class circle
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle2 extends Shape2
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // menambahkan isi dari fungsi abstrak untuk digunakan khusus class rectangle
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}
$circle = new Circle2(5);
$rectangle = new Rectangle2(4, 6);
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

// interface dalam PHP

interface Shape3
{
    // deklarasi metode untuk digunakan 
    public function calculateArea();
}
interface Color3
{
    // deklarasi metode untuk digunakan 
    public function getColor();
}

// mengimplementasi lebih dari 1 interface
class Circle3 implements Shape3, Color3
{
    private $radius;
    private $color;
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}
$circle = new Circle3(5, "Blue");
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";

echo "<br>";

// constructor & destructor

class Car3
{
    private $brand;
    // constructor untuk membuat objek
    public function __construct($brand)
    {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    // destructor untuk menghapus objek
    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}
$car = new Car3("Toyota");
echo "Brand: " . $car->getBrand() .  "<br>";

echo "<br>";

// enkapsulasi & access modifier

class Animal3
{
    public $name;
    protected $age;
    private $color;
    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    // fungsi public semua bisa mengakses
    public function getName()
    {
        return $this->name;
    }

    // protected hanya bisa diakses oleh class ini dan turunannya
    protected function getAge()
    {
        return $this->age;
    }

    // private hanya dapat diakses di class ini
    private function getColor()
    {
        return $this->color;
    }
}

// bisa diinstansiasi dan dipanggil karena accessnya public
$animal = new Animal3("Dog", 3, "Brown");
echo "Name: " . $animal->name . "<br>";

// error karena kedua fungsi protected dan private
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";
