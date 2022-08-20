<?php include('insert.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Account || Login</title>
    <link rel="stylesheet" type="text/css" href="users.css">
</head>

<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <center class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
                <p>
                    Not a member? <br><a href="register.php">Register Now</a>
                </p>
            </center>
        </div>

    </form>
</body>

</html>