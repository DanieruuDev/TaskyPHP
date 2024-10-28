<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style/header.css?v=1.0" />
    <link rel="stylesheet" href="../assets/style/general.css?v=1.0" />
    <link rel="stylesheet" href="../assets/style/forgot.css?v=1.0" />
  </head>
  <body>
    <header class="header global-container">
      <a href="#" class="logo-name">Tasky</a>
    </header>
    <main class="global-container">
      <div class="main-subclass">
        <div>
          <div class="forgot-title">
            Looks like you forgot <br />
            your password
          </div>
          <div class="forgot-subtitle">
            Please enter your email and we will send you a reset password
            request
          </div>
        </div>
        <form>
          <div class="input-group">
            <label for="email">Email address</label>
            <input type="email" name="email" id="email" />
          </div>
          <button type="submit" class="submit">Submit reset request</button>
          <a href="login.php" class="forgot-pass">Return to login</a>
        </form>
      </div>
    </main>
  </body>
</html>
