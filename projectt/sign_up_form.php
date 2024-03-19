<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="./CSS/signup.css">
</head>
<body>
  <div class="signup-container">
  <h2>Sign Up</h2>
  <form action="signup.php" method="post" onsubmit="return validateForm()">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <span class="error" id="userNameError"></span><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <span class="error" id="emailError"></span><br>

    <label for="dob">Date Of Birth:</label>
    <input type="date" id="dob" name="dob" required>
    <span class="error" id="dobError"></span><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <span class="error" id="passwordError"></span><br>

    <label for="rePassword">Re-enter Password:</label>
    <input type="password" id="rePassword" name="rePassword" required>
    <span class="error" id="rePasswordError"></span><br>

    <input type="submit" value="Signup">
  </form>
  <script>
    function validateForm() {
      let name = document.getElementById('username').value;
      let email = document.getElementById('email').value;
      let dob = document.getElementById('dob').value;
      let password = document.getElementById('password').value;
      let rePassword = document.getElementById('rePassword').value;

      let nameError = document.getElementById('userNameError');
      let emailError = document.getElementById('emailError');
      let dobError = document.getElementById('dobError');
      let passwordError = document.getElementById('passwordError');
      let rePasswordError = document.getElementById('rePasswordError');

      let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      let passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

      if (name) {
          nameError.textContent = '';
      } else {
          nameError.textContent = 'Please enter your username.';
      }

      if (email) {
          if (emailPattern.test(email)) {
              emailError.textContent = '';
          } else {
              emailError.textContent = 'Please enter a valid email address.';
          }
      } else {
          emailError.textContent = 'Please enter your email address.';
      }

      if (dob) {
        dobError.textContent = '';
      } else {
        dobError.textContent = 'Please Enter Your Date Of Birth';
      }

      if (password) {
          if (passwordPattern.test(password)) {
              passwordError.textContent = '';
          } else {
              passwordError.textContent = 'Password must have at least one uppercase letter, one lowercase letter, one digit, and be at least 6 characters long.';
          }
      } else {
          passwordError.textContent = 'Please enter a password.';
      }

      if (rePassword) {
          if (password === rePassword) {
              rePasswordError.textContent = '';
          } else {
              rePasswordError.textContent = 'Passwords do not match.';
          }
      } else {
          rePasswordError.textContent = 'Please re-enter your password.';
      }


      return !(nameError.textContent || dobError.textContent || emailError.textContent || passwordError.textContent || rePasswordError.textContent);
    }
  </script>
</div>
</body>
</html>