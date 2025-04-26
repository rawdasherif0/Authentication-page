<?php
include('inc/connections.php');
if(isset($_POST['submit'])){
    $username = stripslashes(strtolower($_POST['username']));
    $email = stripslashes(strtolower($_POST['email']));
    $password = stripslashes($_POST['password']);
    $check_user = "SELECT * FROM users WHERE username = '$username'"; 
    $check_result = mysqli_query($conn,$check_user);
    $num_rows = mysqli_num_rows($check_result);
    if($num_rows != 0){
        $user_error = '<p id="error"> Username already exists. Please choose another.</p>';
        $errors = 1; 
    }

    if(empty($username)){
        $user_error = '<p id="error"> Username cannot be empty.</p>';
        $errors = 1;
    }else if(strlen($username) < 7){
        $user_error = '<p id="error"> Username must be at least 7 characters long.</p>';
        $errors = 1; 
    }else if(filter_var($username,FILTER_VALIDATE_INT)){
        $user_error = '<p id="error"> Please enter a valid Username.</p>';
        $errors = 1; 
    }

    if(empty($email)){
        $email_error = '<p id="error"> Email cannot be empty.</p>';
        $errors = 1;
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_error = '<p id="error"> Email format is invalid.</p>';
        $errors = 1; 
    }

    if(empty($password)){
        $password_error = '<p id="error"> Password cannot be empty.</p>';
        $errors = 1;
    }else if(strlen($password) < 7){
        $password_error = '<p id="error"> Password must be at least 7 characters long.</p>';
        $errors = 1; 
    }

    if($errors == 1){
        include('register.php');
    }else{
        $sql = "INSERT INTO users(Username,Email,Password) VALUES ('$username','$email','$password')";
        mysqli_query($conn, $sql);
        header('Location: index.php');
        exit();
    }
}
?>