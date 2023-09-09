<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo">
    <button type="submit">Send</button>
</form>
<?php 
// store file data in $_FILES superglobal variable, normally the request data are saved in $_POST superglobal
