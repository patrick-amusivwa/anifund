<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: /home.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: /home.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <link rel="stylesheet" href="account.css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>

    <div class="form">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">
                    Login
                </button>
                <button type="button" class="toggle-btn" onclick="register()">
                    Register
                </button>
            </div>
            <div class="social-icons">
                <i class="fa fa-google"></i>
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
            </div>
            <form id="login" class="input-group" action="" method="POST" autocomplete="off">
                <input type="text" name="username" class="input-field" placeholder="Username" required />
                <input type="password" name="password" class="input-field" placeholder="Password" required />
                <input type="checkbox" value="1" class="check-box" />Remember me<span></span>
                <button type="submit" name="login" class="submit-btn">Login</button>
            </form>

            <form id="register" class="input-group" action="" method="post" autocomplete="off">
                <input type="text" name="username" id="username" class="input-field" placeholder="Username" required />
                <input type=" email" name="email" id="email" class="input-field" placeholder="Email" required />
                <input type="password" name="password" id="password" class="input-field" placeholder="Password" required />
                <input type="password" name="cpassword" class="input-field" placeholder="Re-password" required />
                <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png">

                <input type="checkbox" class="check-box" required />I agree to
                <a href="#">Terms and conditions</a><span></span>

                <button type="submit" name="save" class="submit-btn">Register</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>

</html>