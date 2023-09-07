<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <?php  $hour = date('h')?>
    <p>
        <?php if($hour < 6 || $hour > 18): ?>
            <b>Night Time</b>
        <?php else: ?>
            <i>Day Time</i>
        <?php endif ?>
    </p>
</body>
</html>

<?php
    //variable context scope 
    //can use global variable only in globl scope

    $name = "Htet";

    function hello() {
        echo $name;
    }

     // give a warning because can't call name variable from the function

    //if you want to call a variable outside of a function need "global" key
    function helloHtet() {
        global $name;
        echo $name;
    }

    helloHtet();

    //if variabe is declare in function can use that variable in the function
    function declareInFunction() {
        if(true) {
            $name = "yan";
        }
        echo $name; // can call the variable even tho from the outside of the if block because the name 
        //variable is declared in the function
    }
    declareInFunction();

    //if you want to check is there variable or not can use "isset" for that
    //isset function will return boolean value

    if(isset($htet)) {
        echo "there is no htet variable";
    } else {
        echo "there is htet variable\n";
    }

    // to declare constant function you have to use define function // In ruby it's just all uppercase // javascript const
    define("CONSTANT_VARIABLE", "constant variable");
    define("CONSTANT_VARIABLE2", "constant_variable2");

    echo CONSTANT_VARIABLE;
    // what is the difference 
    //major difference for constant variable => can use constant variable from anywhere unlike normal variable constant variable are already global variable.

    
?>