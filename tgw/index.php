<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tourist Guide</title>
  <link rel="stylesheet" href="logincss.css">
</head>
<body>
  <div class="container">
    <div class="form-container">
      <div class="bats">Batangas spotted!</div>
      <h1>Welcome <span>to Batangas!</span></h1>
      <form action="login.php" method="POST">
        <div class="input-group">
          <label for="Username">Username</label>
          <input type="Username" name="Username" id="Username" placeholder="Username" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" name="Password" id="password" placeholder="********" required>
        </div>
        <div class="input-group">
          <button type="button" id="togglePassword" class="show-password-btn">Show Password</button>
        </div>
        <div class="options">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <div class="button">
          <button type="submit" class="login-btn">Login</button>
        </div>
      </form>
      <div class="register">
        <span>Don't have an account yet?</span>
        <a href="registerr.php">Register</a>
      </div>
    </div>
    <div class="image-container"></div>
  </div>
  <script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", () => {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        togglePassword.textContent = "Hide Password";
      } else {
        passwordInput.type = "password";
        togglePassword.textContent = "Show Password";
      }
    });
  </script>
</body>
</html>
