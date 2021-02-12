<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration form</title>
    </head>
    <link href="./style.css" rel="stylesheet">
    <body>
        <h2>Register</h2>
        <form action="register.php" method="POST">
        <!--display error -->
        <?php include('errors.php'); ?> 
            <div class="input-group">
                <label>Username:</label><input type="text" name="name" id="name">
            </div>
            <div class="input-group">
                <label>E-mail:</label><input type="email" name="email" id="mail">
            </div>
            <div class="input-group">
                <label>password:</label><input type="password" name="Password_1" id="pas">
            </div>
            <div class="input-group">
                <label>Confirm Password:</label><input type="password" name="Password_2" id="pass">
            </div>
            <div class="input-group">
                <input type="submit" value="submit" name="submit">
            </div>
            <p>Already a member?<a href="login.php">log in</a></p>
        </form>
    </body>
</html>