<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>User login form</title>
    </head>
    <link href="./style.css" rel="stylesheet">
    <body>
        <h2>Register</h2>
        <form action="login.php" method="POST">
        <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username:</label><input type="text" name="name" id="name">
            </div>
            <div class="input-group">
                <label>password:</label><input type="password" name="Password_1" id="pas">
            </div>
            <div class="input-group">
                <input type="submit" value="submit" name="login">
            </div>
            <p> not Already a member?<a href="register.php">register</a></p>
        </form>
    </body>
</html>