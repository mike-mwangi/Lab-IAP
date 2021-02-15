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
            <form method="post" action="#" class="form" id="register-form" enctype="multipart/form-data">
                <div id="registerAlert"></div>
                <label for="fullname" style="padding-top:13px" class="form-group form-group-default">
                    Full Name
                </label>
                <input id="fullname" class="form-content" type="text" name="full_name" id="full_name" required />
                <div class="form-border"></div>

                <label for="user-email" style="padding-top:25px" class="form-group form-group-default">
                    Email
                </label>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                <div class="form-border"></div>

                <label for="city" style="padding-top:25px" class="form-group form-group-default">
                    City Of Residence
                </label>
                <input id="city" class="form-content" type="text" name="city" />
                <div class="form-border"></div>

                <label for="profile-photo" style="padding-top:25px" class="form-group form-group-default">
                    Profile Photo
                </label>
                <input id="photo" class="form-content" type="file" name="photo" />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top:25px">
                    Password
                </label>
                <input id="user-password" class="form-content" type="password" name="password" required minlength="6" />
                <div class="form-border"></div>

                <label for="user-password" style="padding-top:25px">
                    Confirm Password
                </label>
                <input id="confirm-password" class="form-content" type="password" name="confirm_password" required
                    minlength="6" />
                <div class="form-group">
                    <div id="passwordError" role="alert" style="color: red;"></div>
                </div>
                <div class="form-border"></div>

                <input id="submit-btn" type="submit" name="submit" value="Register" />

                <a href="login.php" id="signin">Already have an account ?</a>

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
            if ($("#register-form")[0].checkValidity()) {
                e.preventDefault();
                $("#submit-btn").val('Please wait...');
                if ($("#user-password").val() != $("#confirm-password").val()) {
                    $("#passwordError").text('Passwords do not match!');
                    $("#submit-btn").val('Register');

                } else {
                    $("#passwordError").text('');
                    $.ajax({
                        url: '../controllers/action.php',
                        method: 'post',
                        data: $("#register-form").serialize()+'&action=register',
                        success:function(response){
                            $("#submit-btn").val('Register');
                            if ($response = 'login') {
                                window.location = 'index.php';
                            } else{
                                $("#registerAlert").html(response);
                            }

                        }
                    })
                }

            }
        });
    });
</script>