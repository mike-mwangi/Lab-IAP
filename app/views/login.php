<?php
  session_start();
  if(isset($_SESSION['user'])) {
    header('location:profile.php');
  }

?>

<!DOCTYPE html>

<head>
  <title>Login</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <img src="../assets/images/logo.png" width="140px;" alt="">
      </div>

      <form method="post" action="#" class="form" id="login-form">
        <div id="loginAlert"></div>
        <label for="user-email" style="padding-top:13px" class="form-group form-group-default" id="emailGroup">
          Email
        </label>
        <span>
          <i class="fa fa-envelope"></i>
          <input class="form-content" type="email" name="email" id="email" autocomplete="on" required
          value=
          "<?php
            if (isset($_COOKIE['email'])) {
              echo $_COOKIE['email'];
            }
          ?>"/>
        </span>

        <div class="form-border"></div>
        <label for="user-password" style="padding-top:25px">
          Password
        </label>
        <span>
          <i class="fa fa-key"></i>
          <input class="form-content" type="password" name="password" id="password" required
          value=
          "<?php
            if (isset($_COOKIE['password'])) {
              echo $_COOKIE['password'];
            }
          ?>" />
        </span>
        <div class="form-border"></div>
        <div class="form-check" style="margin-top: 15px;">
          <input type="checkbox" class="form-check-input" id="remember" name="remember"
          <?php if (isset($_COOKIE['email'])) {
            ?> checked <?php
            } ?> />

          <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <input id="submit-btn" type="submit" name="login" value="Login" />
        <a href="register.php" id="signup">Don't have an account yet?</a>
        <a href="forgot-password.php" id="forgot-password">Forgot password?</a>
        <a href="#" id="homepage">Back to homepage</a>

      </form>
    </div>
  </div>

</body>

<!-- JavaScript Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
  integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
  crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"
  integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg=="
  crossorigin="anonymous"></script>

<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
  integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
  crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function () {
    $("#submit-btn").click(function (e) {
      if ($("#login-form")[0].checkValidity()) {
        e.preventDefault();

        $("#submit-btn").val("Please wait...");
        $.ajax({
          url: '../controllers/action.php',
          method: 'post',
          data: $("#login-form").serialize() + '&action=login',
          success: function (response) {
            console.log(response);
            if ($.trim(response) == 'login') {
              $("#submit-btn").val('Login');
              window.location = 'profile.php'
            } else {
              $("#loginAlert").html(response);
            }
          }
        })

      }

    });
  });
</script>