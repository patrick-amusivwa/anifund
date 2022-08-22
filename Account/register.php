<?php

include 'config.php';

if (isset($_POST['save'])) {

    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    if (isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'uploaded_img/' . $image;
    }
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'user already exist';
    } else {
        if ($password != $cpassword) {
            $message[] = 'confirm password not matched!';
        } else {
            $insert = mysqli_query($conn, "INSERT INTO `users`(name, email, password, image) VALUES('$name', '$email', '$password', '$image')") or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'registered successfully!';
                header('location:login.php');
            } else {
                $message[] = 'registration failed!';
            }
        }
    }
}

?>

<!-- login -->
<?php

include 'config.php';
session_start();

if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    } else {
        $message[] = 'incorrect email or password!';
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
                <input type="password" name="password" id="password" class="input-field" placeholder="Password"
                    required />
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