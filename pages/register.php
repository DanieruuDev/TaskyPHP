<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style/header.css?v=1.0">
    <link rel="stylesheet" href="../assets/style/general.css?v=1.0" />
    <link rel="stylesheet" href="../assets/style/register.css?v=1.0" />
  </head>
  <body>
    <header class="header global-container">
      <a href="/" class="logo-name">Tasky</a>
    </header>
    <main class="global-container">    

    <?php 
    if(isset($_POST["submit"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $email = $_POST["email"];
      $errors = array();
      $passHash = password_hash($password, PASSWORD_DEFAULT);
      
      require_once "../includes/mysql.php";

      //check if email exist in the database
      $sql = "SELECT * FROM users WHERE email = '$email'";
      $result = mysqli_query($con, $sql);
      
      if ($result) {
          if (mysqli_num_rows($result) > 0) {
              array_push($errors, "Email already exists");
          }
      } else {
          array_push($errors, "Database error: " . mysqli_error($con));
      }
      //field validation
      if(empty($username) || empty($password) || empty($email)) {
        array_push($errors,"All fields are required");
      }
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Email is not valid");
      }
      if(strlen($password) < 8) {
        array_push($errors,"Password must be atleast 8 characters long");
      }
      //check if error exist
      if(count($errors) > 0){
        foreach($errors as $error) {
          echo"".$error."";
      }
    } else {
      
      $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
      $stmt = mysqli_stmt_init($con);
      $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
      if($prepareStmt){
        mysqli_stmt_bind_param($stmt,"sss", $username, $email, $passHash);
        mysqli_stmt_execute($stmt);
        header("Location: login.php");
        echo "You are registered";
      } else{
        die("Something went wrong");
      }
    }
  }
    ?>

      <div class="main-subclass">
        <div>
          <div class="register-title">
            You're one click away <br />
            from less busywork
          </div>
        </div>
        <form action="register.php" method="post">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" />
          </div>
          <div class="input-group">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
          </div>
          <input type="submit" class="submit" name="submit" value="Continue"/>

          <div class="divider">
            <hr />
            <span>or</span>
            <hr />
          </div>
          <div class="login-option">
            <img src="/assets/images/google-icon.png" alt="google-icon" />
            <img src="/assets/images/microsoft-icon.png" alt="microsoft-icon" />
          </div>
          <a href="login.php" class="signup"
            >Doesn't have an account? Sign up.</a
          >
        </form>
      </div>
    </main>
  </body>
</html>
