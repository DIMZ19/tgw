<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="form-wrapper">
            <h1>Register your account</h1>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="First Name">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="Enter your first name..." required>
                </div>
                <div class="form-group">
                    <label for="Middle Name">Middle Name</label>
                    <input type="text" id="mname" name="mname" placeholder="Enter middle name..." required>
                </div>
                <div class="form-group">
                    <label for="Last Name">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name..." required>
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter a username..." required>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password..." required>
                </div>
                <button type="submit" class="btn">Sign up</button>
            </form>            
            <p class="signin-link">
                Already have an account? <a href="index.php">Sign in.</a>
            </p>
        </div>
    </div>
</body>
</html>
