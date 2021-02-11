<head>
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <img src="../assets/images/logo.png" width="140px;" alt="">
        </div>

        <form method="post" class="form">
          <label for="user-email" style="padding-top:13px" class="form-group form-group-default" id="emailGroup">
            Email
            </label>
          <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
          <div class="form-border"></div>
          <label for="user-password" style="padding-top:25px">
            Password
            </label>
          <input id="user-password" class="form-content" type="password" name="password" required />
          <div class="form-border"></div>
          <input id="submit-btn" type="submit" name="submit" value="Login"/>
          <a href="register.html" id="signup">Don't have an account yet?</a>
          <a href="#" id="forgot-password">Forgot password?</a>
          <a href="#" id="homepage">Back to homepage</a>

        </form>
      </div>
    </div>


</body>
