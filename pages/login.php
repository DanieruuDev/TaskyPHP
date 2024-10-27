<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style/header.css?v=1.0" />
    <link rel="stylesheet" href="../assets/style/general.css?v=1.0" />
    <link rel="stylesheet" href="../assets/style/login.css?v=1.0" />
  </head>
  <body>
    <header class="header global-container">
      <a href="/" class="logo-name">Tasky</a>
    </header>
    <main class="global-container">
    <?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    require_once "../includes/mysql.php";

    // Check if email exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($user){
      if(password_verify($password, $user["password"])){
        header("Location: ../index.php");
        die();
      }else{
        echo"Wrong password";
      }

    }else{
      echo"Email does not match!";
    }
}
?>

      <div class="main-subclass">
        <div>
          <div class="login-title">Welcome to Tasky</div>
          <div class="login-subtitle">To get started, please sign in</div>
        </div>
        <form action="login.php" method="POST">
          <div class="input-group">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
          </div>
          <input type="submit" class="submit" name="submit" value="Continue"/>

          <a href="forgot.php" class="forgot-pass">Forgot password?</a>

          <div class="divider">
            <hr />
            <span>or</span>
            <hr />
          </div>
          <div class="login-option">
            <img src="../assets/images/google-icon.png" />
            <img src="../assets/images/microsoft-icon.png" alt="microsoft-icon" />
          </div>
          <a href="register.php" class="signup"
            >Doesn't have an account? Sign up.</a
          >
        </form>
      </div>
    </main>
  </body>
</html>
