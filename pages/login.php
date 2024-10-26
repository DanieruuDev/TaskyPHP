<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style/header.css" />
    <link rel="stylesheet" href="../assets/style/general.css" />
    <link rel="stylesheet" href="../assets/style/login.css" />
  </head>
  <body>
    <header class="header global-container">
      <a href="/" class="logo-name">Tasky</a>
    </header>
    <main class="global-container">
      <div class="main-subclass">
        <div>
          <div class="login-title">Welcome to Tasky</div>
          <div class="login-subtitle">To get started, please sign in</div>
        </div>
        <form>
          <div class="input-group">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" />
          </div>
          <button type="submit" class="submit">Continue</button>
          <a href="forgot.php" class="forgot-pass">Forgot password?</a>

          <div class="divider">
            <hr />
            <span>or</span>
            <hr />
          </div>
          <div class="login-option">
            <img src="/assets/images/google-icon.png" alt="google-icon" />
            <img src="/assets/images/microsoft-icon.png" alt="microsoft-icon" />
          </div>
          <a href="register.php" class="signup"
            >Doesn't have an account? Sign up.</a
          >
        </form>
      </div>
    </main>
  </body>
</html>