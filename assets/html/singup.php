<!DOCTYPE html>
<html lang="en">
<head>
    <title>Singup</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="signup_check.php">
        <h3>Singup Here</h3>

        <label for="name">Name</label>
        <input type="text" placeholder="Name" id="name" name="name">

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email">

        <label for="username">Username</label>

        <input type="text" placeholder="Username" id="username" name="username">
        <label for="password">Password</label>

        <input type="password" placeholder="Password" id="password" name="password">

        <label for="password">Conform Password</label>
        <input type="password" placeholder="Password" id="password">

        <button>Signup</button>
        <div class="sing">
            <h3>Already have an account? <a href="login.php">Login now</a></h3>
          </div>
          <div class="social">
            <div class="go"><i class="fab fa-google"></i>  Google</div>
            <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
          </div>
    </form>
    <footer>
        <p>&copy; 2024 faceTech. All rights reserved to Team Debugers.</p>
    </footer>
</body>
</html>