<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration form</title>
    </head>
    <body>
        <h2>homepage</h2>
        <?php if(isset($_SESSION['success'])) : ?>
    
        <p><a href="index.php?logout='1'">logout</a></p>

        <?php endif ?>
    </body>
</html>