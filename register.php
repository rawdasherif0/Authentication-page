<!DOCTYPE html>
<html>
<head>
   
    <title>Register</title>
    <link rel="stylesheet" href="/Mazaj/style/main.css">
    </head>
<body>
  <form action="register_post.php" method='POST'>
    <div class = "main"> 
      <h2>Register</h2>
      <div class="mb-3">
        <?php if(isset($user_error)){echo $user_error;}?>
        <label for=""> Username</label>
        <input type= "text" name="username" id="username" placeholder="Enter your Username" required><br>
      </div>
      <div class="mb-3">
        <?php if(isset($email_error)){echo $email_error;}?>
        <label for=""> Email</label>
        <input type= "text" name="email" id="email" placeholder="Enter your Email" required><br>
      </div>
      <div class="mb-3">
        <?php if(isset($password_error)){echo $password_error;}?>
        <label for=""> Password</label>
        <input type= "password" name="password" id="password" placeholder="Enter your Password" required><br>
      </div>
      <input type= "submit" name="submit" id="submit" value="Register Account"><br>
      <h3>Or</h3>
      <p class="login-link">Already have an account? <a href="index.php">Login</a></p>
    </div>
  </form>
</body>
</html>
