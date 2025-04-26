<!DOCTYPE html>
<html>
<head>
   
    <title>Login</title>
    <link rel="stylesheet" href="/Mazaj/style/main.css">
    </head>
<body>
  <form action="index_post.php" method = "POST">
    <div class="main">     
      <h2>Login</h2>
      <?php if (isset($user_error)) echo $user_error; ?>
      <label for=""> Username</label>
      <input type= "text" name="username" id="username" placeholder="Enter your Username" required><br>
      <?php if (isset($password_error)) echo $password_error; ?>
      <label for=""> Password</label>
      <input type= "password" name="password" id="password" placeholder="Enter your Password" required><br>
      <input type= "submit" name="submit" id="submit" value="Login"><br>
      <h3>Or</h3>
      <b class="login-link"> Don't have an account? <a href="register.php">Create an account</a></b>
    </div>  
  </form>
</body>
</html>
