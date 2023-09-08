br<?php 

# FUN START lets learn oop in Php let's go ....

#difference between public, private, and protected
#public variables and methods can be used anywhere from program
# private only in the specific class
# protected => can use from it's own class and the inheritance class ..

class Animal {
    public $name;

    public function greeting() {
        echo "Hello My name is $this->name";
    }
}
$dog = new Animal;
$dog->name = "Lucky";
$dog->greeting();

// how to build constructor in php it's simple build a function named => __construct()

class Car {
    #let's build the constructor for this car class
    public function __construct(public $name) {
        $this->name = $name;
       
    }
}

// $car1 = new Car("BMW");

// what are the static members ???
// static members => they are also properties and methods from class the difference is 
// if we want to access the variable or method normally we need to create a instance object for that right ? but if we 
// have a static member in that class we can access it without creating the obj instance . 
// how can we call it we have to use this format => className::$variable or className::$method()


// !important if we want to access the static propety from the class method we have to use static::$variabel like this instead of $this->variable 
echo "<br></br>";
//if you don't want your method to be overwritten then you can use final keyword
// we can also use final keyword in class not only method 

class Germany extends Car {
    public function __construct(public $name, public $model) {
        parent::__construct($name);
        $this->model = $model;
    }

    public function profile() {
        echo "Name: $this->name, Model: $this->model";
    }
}

$bmw = new Germany("BMW", "bmw-i-7");
$bmw->profile();

// what is abstract class ?? 
// the purpose of using abstrace is we want to use abstrace method
//so what are the abstract methods ? abstract methods are functions without function body 
// for example => public abstract function eat() ; so that's it this is abstract function
// the main thing is if we are going to extend the abstract class then we need to overwrite that abstract method if not the error will rise. 
echo "<br></br>";
abstract class Person {
    public abstract function talk();

    public function __construct(public $name) {
        $this->name = $name;
    }
}

class Student extends Person {
    public  function talk() {
        echo "$this->name is talking";
    }
}

$student = new Student("htet wai yan");
$student->talk();

//difference between interface and abstract class ? 
// in interface there are only abstract methods 
// in abstract there can be both normal methods and abstract methods 
// if we have to interface something then we have to use implement keyword ... 

interface Developer {
    public function code() ;
}

class Junior implements Developer {
    public function code() {
        echo "Junior developer is coding";
    }
}

class Senior implements Developer {
    public function code() {
        echo "Senior developer is reviewing ";
    }
}

function app(Developer $obj) {
    $obj->code();
}
app(new Junior);
app(new Senior);

//!importantphp do not allowed multiple inheritace but it allow
// multiple implement 

// what does __call and __callStatic function do in php ? 
// it is like some remainder to ourself sometimes our code base become larger and there is a chance we will call the method that is not in our class and if that happens ? we can return some echo statement to remind ourself 
// that method is not include in our class . instead of looking for errors that is better . 

// what does __invoke method do ? 
// it will remind us when we call object as a function . fair enough

// now comes the getter and setter 
// __set() and __get()

// so these are the few magic methods in php 
// let's recall it 
// __call() __call_static() , __toString() , __invoke() __set() __get()
// that's great but it is better if we don't use these methods on our own .
// in laravel there are so many magic methods like this that we can use . 
