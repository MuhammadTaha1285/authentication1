<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "
    <script>
    alert('Authentication Error: Unknown User')
    window.location.href = './login.php'
    </script>
    ";
}

include './config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication System</title>

    <style>
        body {
            margin: 0;
            /* font-family: Arial, Helvetica, sans-serif; */
            background: #f5f5f5;
        }

        .navbar {
            background: linear-gradient(to right, #0056ff);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
        }

        .navbar h2 {
            margin: 0;
        }

        .logout {
            background: linear-gradient(to right, black, #333);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 10px;
        }

        .container {
            width: 90%;
            margin: 40px auto;
            display: flex;
            gap: 50px;
        }

        .left {
            width: 35%;
            text-align: center;
        }

        .left img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
        }

        .left h3 {
            margin-top: 20px;
        }

        .right {
            width: 65%;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 20px;
            font-size: 16px;
        }

        button {
            background: linear-gradient(to right, #0056ff, #003399);
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="navbar" style="border-bottom: 3px solid blue;">
        <h2>Authentication - System</h2>

        <a href="logout.php" class="logout">Logout</a>
    </div>

    <div class="container">

        <div class="left">

            <img src="https://images.unsplash.com/photo-1496989981497-27d69cdad83e?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Y2lyY2xlfGVufDB8fDB8fHww" alt="Profile">

            <h3>Muhammad Taha</h3>

            <p>m63676458@gmail.com</p>

        </div>


        <div class="right">

            <form action="" method="POST">

                <label>Username</label>

                <input type="text" name="username" placeholder="Username">

                <label>Email</label>

                <input type="email" name="email" placeholder="Email">
                <label>Password</label>

                <input type="password" name="password" placeholder="********">

                <button type="submit" name="update">
                    Save Changes
                </button>

            </form>

        </div>

    </div>

</body>

</html>
