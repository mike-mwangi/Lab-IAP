<!DOCTYPE html>
<head>
<title>Login</title>
<!-- CSS only -->
<link rel="stylesheet" href="../assets/css/login.css">

<!-- JavaScript Bundle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js" integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw==" crossorigin="anonymous"></script>


</head>

<body>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <img src="../assets/images/logo.png" width="140px;" alt="">
          <h3>Forgot Password</h3>
          <div class="form-border"></div>

          <h4>Enter email for password reset link</h4>
        </div>

        <form method="post" class="form" id="forgot-pass-form">
          <label for="user-email" style="padding-top:13px" class="form-group form-group-default" id="emailGroup">
            Email
            </label>
              <span>
                <i class="fa fa-envelope"></i>
                <input id="user-email" class="form-content" type="email" name="email" id="forgot-email" autocomplete="on" required />
             </span>

          <div class="form-border"></div>

          <input id="submit-btn" type="submit" name="login" id="forgot-btn" value="Reset Password"/>
          <a href="login.php" id="homepage">Back to Login</a>
          <a href="#" id="homepage">Back to homepage</a>

        </form>
      </div>
    </div>


</body>
