<head>
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/register.css">
</head>

<body>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <img src="../assets/images/logo.png" width="140px;" alt="">
        </div>
        <form method="post" class="form">
            <label for="fullname" style="padding-top:13px" class="form-group form-group-default" >
                Full Name
            </label>
            <input id="fullname" class="form-content" type="text" name="fullname" required />
            <div class="form-border"></div>

            <label for="user-email" style="padding-top:25px" class="form-group form-group-default">
                Email
            </label>
            <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
            <div class="form-border"></div>

            <label for="city" style="padding-top:25px" class="form-group form-group-default">
                City Of Residence
            </label>
            <input id="city" class="form-content" type="text" name="city" required />
            <div class="form-border"></div>

            <label for="profile-photo" style="padding-top:25px" class="form-group form-group-default">
                Profile Photo
            </label>
            <input id="profile-photo" class="form-content" type="file" name="profile-photo" />
            <div class="form-border"></div>

            <label for="user-password" style="padding-top:25px">
                Password
            </label>
            <input id="user-password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>

          <input id="submit-btn" type="submit" name="submit" value="Register"/>

          <a href="login.php" id="signin">Already have an account ?</a>

          <a href="#" id="homepage">Back to homepage</a>

        </form>
      </div>
    </div>
</body>
