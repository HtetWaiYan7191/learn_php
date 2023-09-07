<?php
    //four data type
    //integer, string, boolean, float
    // can use both single quote and double quote 
    // double quote string work like template string in javascript backtip ``
    // so I can write like " My name is $name " // javascript ` My name is ${name} `
    $name = "htet";
    $role = "software developer";
    $company = "google";

    echo "$name is a $role at $company haha";
    // can escape character with "\" back slap let's remember like that if you want to escape you have to go from the back imao " 
    echo "<br></br>";
    $price = 1.99;
    echo "This apple price is \$$price";

    //some useful string method unlike js php use function 
    // here php use strlen() function to check string 
    echo "<br></br>";
    $htet = 'htet wai yan';
    $length = strlen($htet);
    echo "Length: $length";

    //sub str function to cut string substr(str, start, end) it will start from start and count until it reachs end value
    //replace str_replace(search_string, replace_string, original_string)
    echo "<br></br>";
    $original_string = "htet wai lin";
    $result = str_replace("lin", "yan", $original_string);
    echo $result;
    echo "<br></br>"
?>  