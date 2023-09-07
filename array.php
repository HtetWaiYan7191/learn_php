<?php
    //can declare array two ways 
    //first array is numeric array so this is the one I know . It's like javascript
    //associative array . that is new. so it's like array but instead of order index we can use string .
    //$user= ["name" => "Htet", "age" => 21]; // 
    // each element is based on the array

    $users = array("htet", "may"); // old way to declare a array in php
    $fruits = ["Apple", "Orange"];

    //  echo $users; can't output array using echo . lol  
    //can use print_r or var_dump 
    // perfer var_dump because this way it's more clear... 

    //here comes the array destructuring
    $users = ["Htet", 21];
    //list($name, $age) = $users;old way 
    //this one prefer 
    [$name, $age] = $users;
    echo "$name $age";// Htet
    echo "<br></br>";
    // for associative array
    $person = [ "name" => "htet", "position" => "web developer"];
    ["name" => $name, "position" => $position] = $person;
    echo "$name $position";

    //useful array functions is_array(var) in_array(var) count(var) var means variable
    //array_search(var) search and return arr index number
    //one thing the main difference in javascript variable are object so arr is object which means
    // it has it's own methods so if there is arr then can call method like 
    //arr.length // arr.push() like that . // but in php we put the variable as an argument in the specific functions
    // for example to add we use arr_push(arr) arr_shift(arr)
    //to cut array arr_splice(arr,start,count) arr_splice(htet,1,1) start from 1 and do it once 

    $tech = ["javascript", "ruby", "php"];
    $result = array_splice($tech, 1, 2); // return the element that's remove not the element that left
    print_r($result);

    // for associative array there is array_keys() and array_values to get keys and values from the array

    //for sorting purpose
    //sorting according to value sort($users)
    // reverse sorting rsort($users)
    //sorting according to index ksort($users)
    // reverse sorting krsort($users)

    //all of these functions change the original array " that's important " not give a new array they changed the ORIGNAL " 
    //explode and implode
    echo "<br></br>";
    $input = "A quick brown fox";
    //to array/
    $array = explode(" ", $input);

    print_r($array);

    $str = implode("+", $array);
    $str2 = implode(" ", $array);
    echo $str2;
    echo "<br></br>";
    echo $str;


    

