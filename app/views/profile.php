<?php
    require_once '../models/session.php';
    echo '<pre>';
    print_r($data);

?>

<head>
    <title>Profile</title>
    <!-- JavaScript Bundle -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="../assets/css/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="main-body">


            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item " aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__480.png"
                                    alt="User" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>Mike Mwangi</h4>
                                    <p class="text-secondary mb-1">Student</p>
                                    <button class="btn btn-primary">Edit Profile</button>
                                    <button class="btn btn-danger" onclick="window.location.href='logout.php'">Logout</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4 style="text-align: center;">Change Password</h4>
                            <hr>

                            <div class="row">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" id="inputPassword5" class="form-control"
                                    aria-describedby="passwordHelpBlock">
                            </div>
                            <hr>
                            <div class="row">
                                <label for="inputPassword5" class="form-label">New Password</label>
                                <input type="password" id="inputPassword5" class="form-control"
                                    aria-describedby="passwordHelpBlock">
                                <div id="passwordHelpBlock" class="form-text">
                                    Your password must be 8-20 characters long, contain letters and numbers, and must
                                    not contain spaces, special characters, or emoji.
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <label for="inputPassword5" class="form-label">Confirm Password</label>
                                <input type="password" id="inputPassword5" class="form-control"
                                    aria-describedby="passwordHelpBlock">
                            </div>
                            <hr>
                            <button class="btn btn-outline-primary" style="text-align: center;">Change Password</button>

                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Mike Mwangi
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php
                                    echo $_SESSION['user'];
                                    ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">City Of Residence</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    Nairobi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>