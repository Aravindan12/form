<?php
session_start();
$username = "";
$email = "";
$errors = array();
//connect to db
$db = mysqli_connect('localhost','root','','authen');
//if the registration button is clicked
// print_r($_POST);exit;
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $Password_1 = $_POST['Password_1'];
    $Password_2 =$_POST['Password_2'];

//check the input field is filled
    if(empty($username)){
    array_push($errors,"username is required");
    }
    if(empty($email)){
    array_push($errors,"email is required");
    }
    if(empty($Password_1)){
    array_push($errors,"password is required");
    }
    if($Password_1 != $Password_2){
    array_push($errors,"password is not match");
    }
//if there is no errors save user to database
    if(count($errors)==0){
        $password = md5($Password_1);
        $sql = "INSERT INTO user(username,email,password)
                     VALUES('$username','$email','$password')";
    mysqli_query($db,$sql);


    $_SESSION['username'] = $username;
    $_SESSION['success'] = "you are logged in";
    header('location:index.php');//redirect to index page
    }

}

//log user in from login page
    if(isset($_POST['login'])) {
        $username = $_POST['name'];
        $password = $_POST['Password_1'];
    }
    if(empty($username)) {
        array_push($errors,"username is required");
    }
    if(empty($password)){
        array_push($errors,"password is required");
    }
    if(count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($db,$query);
        if (mysqli_num_rows($result) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "you are logged in";
            header('location: index.php');//redrict to home page
        }else{
            array_push($errors,"wrong username/password combination");
        }
    }
    //logout 
    if(isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location:login.php');
    }
?>