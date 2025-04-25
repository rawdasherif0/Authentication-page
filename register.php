<!DOCTYPE html>
<html>
<head>
   
    <title>Register</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
  <form action="">
    <div class = "main"> 
      <h1>Register</h1>
      <div class="mb-3">
        <label for=""> Username</label>
        <Input type= "text" name="username" id="username" placeholder="Enter your Username" required><br>
      </div>
      <div class="mb-3">
        <label for=""> Email</label>
        <Input type= "text" name="email" id="email" placeholder="Enter your Email" required><br>
      </div>
      <div class="mb-3">
        <label for=""> Password</label>
        <Input type= "password" name="password" id="password" placeholder="Enter your Password" required><br>
      </div>
      <Input type= "submit" name="submit" id="submit" value="Register Account"><br>
      <h3>Or</h3>
      <p class="login-link">Already have an account? <a href="index.php">Login</a></p>
    </div>
  </form>
</body>
</html>