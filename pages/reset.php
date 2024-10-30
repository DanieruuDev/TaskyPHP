<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../assets/style/header.css?v=1.0" />
    <link rel="stylesheet" href="../assets/style/general.css?v=1.0" />
    <link rel="stylesheet" href="../assets/style/reset.css?v=1.0" />
  </head>
  <body>
    <header class="header global-container">
      <a href="/index.php" class="logo-name">Tasky</a>
    </header>
    <main class="global-container">
      <div class="main-subclass">
        <div>
          <div class="reset-title">Reset Your Password</div>
          <div class="reset-subtitle">Enter a new password for <span style="color: #1c87e1; font-weight:bold;">Tasky</span></div>
        </div>
        <form action="login.php" method="POST">
          <div class="input-group">
            <label for="email">Password</label>
            <input type="email" name="email" id="email" />
          </div>
          <div class="input-group">
            <label for="password">Confirm Password</label>
            <input type="password" name="password" id="password" />
          </div>
          <input type="submit" class="reset" name="reset" value="Reset Password"/>
        </form>
      </div>
    </main>
  </body>
</html>
