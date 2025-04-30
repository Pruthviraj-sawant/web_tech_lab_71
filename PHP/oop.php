<?php
// Student Class
class Student {
    public $name, $age, $marks, $cgpa;

    function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }

    function display() {
        echo "Name: $this->name, Age: $this->age, Marks: $this->marks, CGPA: $this->cgpa<br>";
    }
    
}

$stud = new Student("Pruthvi", 21, 85, 9.1);
$stud->display();

// Static
class Counter {
    public static $count = 0;
    static function increment() {
        self::$count++;
    }
}
Counter::increment();
echo "Static Count: " . Counter::$count . "<br>";

// Interface
interface Shape {
    public function area();
}

class Circle implements Shape {
    public $radius;
    function __construct($r) {
        $this->radius = $r;
    }

    public function area() {
        return 3.14 * $this->radius * $this->radius;
    }
}
$circle = new Circle(5);
echo "Area of Circle: " . $circle->area() . "<br>";

// Inheritance
class Person {
    public $name;
    function speak() {
        echo "$this->name says Hello<br>";
    }
}
class Teacher extends Person {
    public $subject;
}
$teacher = new Teacher();
$teacher->name = "Mr. John";
$teacher->subject = "Math";
$teacher->speak();

// Abstract Class
abstract class Animal {
    abstract public function sound();
}
class Dog extends Animal {
    public function sound() {
        echo "Bark<br>";
    }
}
$dog = new Dog();
$dog->sound();

// Polymorphism via method override
class A {
    public function greet() {
        echo "Hello from A<br>";
    }
}
class B extends A {
    public function greet() {
        echo "Hello from B<br>";
    }
}
$objA = new A();
$objB = new B();
$objA->greet();
$objB->greet();

echo "<br>";
?>
