<?php

print_r($_FILES);
$tmpName = $_FILES['photo']['tmp_name'];
$name = $_FILES['photo']['name'];
echo "<h1>Tmp Name: $tmpName    </h1>";
echo "<h1>Name: $name</h1>";

// move_upload_file() function to store file data
// need two parameter first => current path second => path data want to store
