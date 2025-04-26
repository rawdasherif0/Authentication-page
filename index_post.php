<?php
session_start();
include('inc/connections.php');

if (isset($_POST['submit'])) {
    $username = stripslashes(strtolower($_POST['username']));
    $password = stripslashes($_POST['password']);

    $errors = 0;

    if (empty($username)) {
        $user_error = '<p class="error">Username cannot be empty.</p>';
        $errors = 1;
    }

    if (empty($password)) {
        $password_error = '<p class="error">Password cannot be empty.</p>';
        $errors = 1;
    }

    if ($errors == 0) {
        $sql = "SELECT ID, Username, Password FROM users WHERE Username = '$username'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Password'] === $password) {
                $_SESSION['username'] = $row['Username'];
                $_SESSION['id'] = $row['ID'];
                header('Location: E-commerce.html');
                exit();
            } else {
                $user_error = '<p class="error">Wrong username or password.</p>';
                include('index.php');
            }
        } else {
            $password_error = '<p class="error">Wrong username or password.</p>';
            include('index.php');
        }
    } else {
        include('index.php');
    }
}
?>
