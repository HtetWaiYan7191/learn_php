<?php 

# so basically php is not oop language it's just a procedural language that's why 
# we have been using function along the way unlike js or ruby 
# need return statement value to return the value 

function add($a, $b) {
    return $a + $b;
}

#rest parameter
function testRestParameter($a, ...$b) {
    print_r($b);
}

# can declare argument type in function
function arraySum(Array $nums) {
    return array_sum($nums);
}

echo (arraySum([1,2,3]));
echo "<br></br>";
testRestParameter(1,2,3,4,5);
$result = add(1, 2);
echo $result;

// what is scalar Type Hinting ? 
// scalar type hinting =>  declare type for the parameter in the function

//what is union type why use ? 
// it similar to scalar type htinting. declare type for parameter but the difference here is it can use operators such as && or || so 
// the type can be more than one 

function price(int|float $num) {
    return "price is \$$num";
}

//Pass by Value and Pass By reference 
#In php default => pass by value
// so basically pass by value only pass  the value 
// if I pass parameter to the function that means I only pass the value by default
// pass by reference is targeting the same space from different parmeters one parameter behavior will affect on others 

$example = "hello php";

function changeExample(&$name) { #this & works like reference operator !!!
    $name = "hello laravel";
    echo " $name ";
}

changeExample($example);
echo $example;

// php function are global scope!
#can't use function variable from outside of the function scope

//php have variable function that's strange lol 

function variable_function($a, $b) {
    return $a + $b;
}

$variable = "variable_function";# after this line we can use that variable like function by using paratheses 
$variable(1, 2);

//php also have nameless function, anonymous function

$nums = [1,2,3,4];
$result = array_map(function($n) {
    return $n * 2;
}, $nums);

print_r($result);
// can assign the nameless function to variable
$two = function($n) {
    return $n * 2;
};
$two(2);

// php have arrow function as well ... 
// why we use arrow function 
// what are the adv  ? 
// simple , good for one line statement . can use global variable without declare it 'global $name; ' no nee this anymore
//
$three = fn ($n) => $n * 3;
echo $three(3);

// what are named arguments in php ??? 

function profile($name, $age, $professional) {
    echo "$name--$age--$professional";
}
profile(professional: 'web developer', age: 21, name: 'htet');