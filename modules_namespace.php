<?php

// in javascript it is import export 
// in php import is like include('Math.php') can use require also
// what the difference ? include does not stop the program even if the file path is wrong but require does
// best practice => include_once and require_once
//  what is the namespace
// when you import two file there is a chance there are functions with same name 
// and you don't want to change the function either so what you can do here is you can create a namespace according to file. and then when you want to use that specific function you have to 
// include that name space for example 
// let's say you want to use add funtion for Math namespace
//  => Math\add(1,2); this is how you should do it
// how can we use 'use' statement in order to use namespace

// export => 