<?php

session_start();
if(!isset($_SESSION['user'])) {
    header('location: index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-3">John Doe (Manager)</h1>
        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot upload file
            </div>
        <?php endif ?>
            <?php if(file_exists('actions/photos/profile.png')) : ?>
                <img src="actions/photos/profile.png" alt="Profile Photo">
            <?php endif ?>
        <form action="actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file" name="photo" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>
        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> john.doe@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone:</b> (09) 243 867 645
            </li>
            <li class="list-group-item">
                <b>Address:</b> No. 321, Main Street, West City
            </li>
        </ul>
        <br>
        <a href="actions/logout.php">Logout</a>
    </div>

</body>

</html>