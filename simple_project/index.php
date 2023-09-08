<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
    .wrap {
        width: 100%;
        max-width: 400px;
        margin: 40px auto;
    }
    </style>
</head>

<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>
        <?php if ( isset($_GET['incorrect']) ) : ?>
        <div class="alert alert-warning">
            Incorrect Email or Password
        </div>
        <?php endif ?>
        <form action="actions/login.php" method="post">
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">
                Login
            </button>
        </form>
        <br>
        PWD 2022 – အခန်း (၃၆) – Requests, Cookies & Sessions 558
        <a href="register.php">Register</a>
    </div>
</body>

</html>