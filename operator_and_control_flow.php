<?php
    //to concat string
    $first_name = "htet wai";
    $last_name = "yan";
    $full_name = "$first_name $last_name";
    echo $full_name;
    echo "<br></br>";
    //like += we can use .= when we want to concat string continuously
    $result = "welcome";
    $result .= " ";
    $result .= "Htet";
    echo $result;
    echo "<br></br>";

    //what is spaceship operator in php
    // <=> it is kind of operator . 
    // it return three things while 1, 0, or -1 
    // as the syntax it checks the first which is less than " <br " and then " = " lastly " > "
    //so basically if the first variable is less then -1
    // if equal 0
    //if first variable greater than then 1 


    //another thing is we can use XOR operator in php which is not in javascript
    // so what does XOR operator do ? 
    // so In OR operator if one is true the result is true 
    // it also same in XOR operator but the drawback is if both are true then it will return false
    // so we can use XOR operator when we only want to one operator true not both 

    //Ternary Operator
    echo "Ternary Operator Testing: ";
    echo "<br></br>";

    $name = "";
    echo $name ? $name : "Unknown"; // this will return Unknown which means empty string is faluty. 

    echo "<br></br>";
    echo "Ternary Operator short form";
    $job = "web developer";
    echo $job ?: "no jobs"; // we can use like this because we already declared the name variable if there is no name variable we can't use it like that
    echo "<br></br>";

    //null closing operator it kindd like the thing we use in react name?.
    // for example => echo $job ?? "there is no job  " first it check the $job variable if job is undefined then it will output "no job" 

    $result = "Alice";
    $result ??= $hello; // if there is no result then the variable hello will be assigned but 
    //we already declare the result so the out put will be Alice ...

    echo $result; 
    echo "<br></br>";

    echo "Testing control structure switch ";
    echo "<br></br>";

    $day = date('D');
    switch ($day) {
        case "Sat" :
            echo "saturday";
            break;
        case "Sun":
            echo "sunday";
            break;
        case "Fri":
            echo "TGIF";
            break;
        default:
        echo "Weekday";    
    }
    echo "<br></br>";

    $nums = [1,-2,3,4,5];
    $i = 0;
    $result = 0;
    // while($i < count($nums)) {
    //     if($nums[$i] <br 0) {
    //         $i++;
    //         continue;
    //     }
    //     $result += $nums[$i];
    //     $i++;
    // }

    // I will use for each this time 
    foreach($nums as $num) {
        $result += $num;
    }
    echo $result;
    echo "<br></br>";

    // what about associative array
    $user = ["name" => "htetwaiyan", "age" => 21];
    $keys = [];
    $values = [];

    foreach($user as $name => $value) {
        $keys[] = $name;
        $values[] = $value;
    }
    print_r($keys);
    print_r($values);

    // and we can use standard array like array_keys , array_values or array_entries I guess
    //let's try that 
    $road_map = ["front end " => "React", "backend" => "php_laravel", "database" => "postgresql"];
    $keys = array_keys($road_map);
    $keys_to_string = implode(", ", $keys);
    $values = implode("---", array_values($road_map));
    echo "Keys: $keys_to_string";
    echo "<br></br>";
    echo "Values: $values";
?>