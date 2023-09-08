<?php

setcookie("name", "htet wai yan", time() + 3600);
setcookie("age", 21);
// in php there is a super global call $_COOKIE that can store cookie data
echo "See view-cookie.php";

// how to delete cookie it's easy just give a negative time
// setcookie("name", "", time() - 1);

//Sessions 
//difference between cookie data and session data
//cookie data store in web browser 
// session data store in web server 
