<?php
    include 'config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-image: url('img/register-bg.jpg');
            background-size: cover;
        }
        form {
            background-color: white;
            margin: 6em 38em 0 5em;
            padding: 30px;
            box-shadow: 10px 10px 8px 10px;
        }
    </style>
    <title>Register</title>
</head>

<body>
    <div class="container">
        <form method="POST">
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputName" maxlength="30" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputNumber" class="form-label">Phone Number</label>
                <input type="number" class="form-control" name="phone_number" id="exampleInputNumber" maxlength="10" minlength="10" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" minlength="6" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2" required>
            </div>
            <button type="submit" class="btn btn-primary" name="register">Submit</button>
            <br><br>
            Already Registered? <a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>