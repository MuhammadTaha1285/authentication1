<?php
include './config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="border-bottom: 3px solid black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b><u>Authentication - System</b></u></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./profile.php">Profile</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <!--  -->
    <div class="container">
        <div class="content d-flex justify-content-center">
            <div class="form-design card p-3 mt-5 col-md-4">

                <form action="">
                    <h2><b><u>Login</u></b></h2>
                    <p><i>Quick Login to redirect <b>Profile Page</b></i></p>
                    <br>

                    <input type="email" name="email" placeholder="Enter email address" class="form-control m-2 p-2" required>
                    <input type="password" name="password" placeholder="Enter password" class="form-control m-2 p-2" required>

                    <button type="submit" class="btn btn-info w-100">Login</button>

                </form>



                <hr>

                <a href="./register.php" class="btn btn-dark">Create New Account</a>
            </div>
        </div>
    </div>
    <!--  -->
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" rel="stylesheet" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

</html>