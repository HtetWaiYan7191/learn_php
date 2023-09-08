<?php

/* four design patterns 
Objects 
Encapsulation
Inheritance
Polymorphism

SOLID Design principle
Singleton => only allowed for building one object 

//Builder Pattern
what is builder pattern why we use builder pattern ? 
normally when we build an object we give property in a constructor
$dog = new Animal("lucky")

in a builder pattern
first build a builder object 
then store the values in that builder object 

example 

$builder = new Builder();
$builder->property1 = value1;
$builder->property2 = value2;

$object = $builder->build();

*/
class ProfileBuilder {
    private $name;
    private $phone;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }

    function build() {
        return new Profile($this); # return the whole object
    }
}

class Profile {
    public $userName;
    public $phone;

    public function __construct(ProfileBUilder $pb) {
        $this->userName = $pb->getName();
        $this->phone = $pb->getPhone();
    }

    static function builder() {
        return new ProfileBuilder();
    }
}

$user = Profile::builder()
                ->setName('htet')
                ->setPhone('123')
                ->build();
var_dump($user);
// this kind of code is called in Manager in Laravel it used this builder design pattern

//Factor Pattern 
// what is the factory pattern and what is the difference between builder and factory  ? 
//kinda like builder object the pattern to build an object
// get data and build object . 

// class ProfileFactory {
//     private $data; # facotry object will get data and build obj according to it's data

//     public function __construct($data) {
//         $this->data = $data;
//     }

//     public function create() {
//         $result = [];

//         foreach($this->data as $data) {
//             $userName = $data['name'] ?? "Unknown";
//             $phone = $data['phone'] ?? " N/A ";
//             $result[] = new Profile($userName, $phone);
//         }
//         return $result;
//     }
// }

// class Profile {
//     private $userName;
//     private $phone;

//     public function __construct($userName, $phone) {
//         $this->userName = $userName;
//         $this->phone = $phone;
//     }
// }

// $data = [
//     ["name" => "htetwaiyan", "phone" => "123"],
//     ["name" => "may", "phone" => "321"],
//     ["name" => "yan", "phone" => "444"],
// ];

// $profile = new ProfileFactory($data);
// $profiles = $profile->create();

//Strategy pattern
//similar like payment according to data the behavoir will be different 
// if cash we will need some obj for that case 
// if mobil we will need different obj for this case
// use interface // 
//examples for strategy pattern

interface PaymentInterface {
    public function amount();
}

class CashPayment implements PaymentInterface {
    public function amount() {
        return 100;
    }
}

class MobilePayment implements PaymentInterface {
    public function amount() {
        return 90;
    }
}

class Payment {
    private $paymentMethod;

    public function pay($context) {
        switch($context) {
            case "cash":
            $this->paymentMethod = new CashPayment;
            break;

            case "mobile":
            $this->paymentMethod = new MobilePayment;
            break;
            
            default:
            $this->$paymentMethod = new CashPayment;
        }
        return $this->paymentMethod->amount();
    }
}

// Facade 
// a simple way to pass the complex steps 
// before you drive a car you have to check fuelstate, test break and so on . 
// let's say you have a interface that will do all of these jobs that you normally do for you 
// kinda similar like composition
class CheckOilPressure {
    public function check() {
        echo "Oil Pressure Ok! ";
    }
}

class CheckBreak {
    public function check() {
        echo "Break Okay !";
    }
}

class Car {
    public $oil;
    public $break;

    public function __construct() {
        $this->oil = new CheckOilPressure;
        $this->break = new CheckBreak;
    }

    public function start()  {
        $this->oil->check();
        $this->break->check();

        echo "Car Engine Start";
    }
}

$car = new Car;
$car->start();

//Provider kinda like strategy but different useage
// Dependency Injection use base on Dependency inversion from SOLID principles

class TextLogger {
    public function write($log) {
        echo $log;
    }
}

class App {
    public function run() {
        $logger = new TextLogger;
        $logger->write("App is running");
    }
}

$app = new App;
$app->run(); // App is running

// how can we change this structure using dependency injection 

interface Log {
    public function write($log);
}

class TxtLogger implements Log {
    public function write($log) {
        echo $log;
    }
}

class DatabaseLogger implements Log {
    public function write($log) {
        echo $log;
    }
}

class Main {
    private $logger;

    public function __construct(Log $logger) {
        $this->logger = $logger;
    }

    public function run() {
        $this->logger->write("App is running");
    }
}

$app = new Main(new TxtLogger);
$app->run();

