<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./CSS/login.css">
</head>
<body>
    <div class="login-container">
  <h2>Login</h2>
  <form action="login.php" method="post">
    <input type="text" name="username" id="username" placeholder="Username" required>
    <input type="password" name="password" id="password" placeholder="Password" required>
    <input type="submit" value="Login">
    <fieldset>
    Doesn't have an account. Sign up <a href="sign_up_form.php">here</a>
    </fieldset>
  </form>
</div>
</body>
</html>
