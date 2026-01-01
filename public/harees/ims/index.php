<?php
if (!isset($_SESSION)) {
    session_start();
}
// Adjust path to internal directory relative to ims/
include_once('internal/csrf_token.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HJ Internal Portal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="hareesjewellery_favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="internal/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="internal/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="internal/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="internal/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h6 class="text-primary">
                                    <!-- <i class="fa fa-user-edit me-2"></i> -->
                                    <img src="hareesjewellery_favicon.png" style="width: 30px; height: 30px;">
                                    HJ Internal Portal
                                </h6>
                            </a>
                            <h6>Login</h6>
                        </div>




                        <form method="post" action="controller.php" id="loginForm" novalidate>
                            <?php echo csrf_token_field(); ?>
                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username"
                                    pattern="[a-zA-Z]+" title="Username should contain only letters (a-z, A-Z)" required>
                                <label for="floatingInput">Username</label>
                                <div class="invalid-feedback">Username should contain only letters (a-z, A-Z)</div>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password"
                                    pattern="[a-zA-Z0-9!@#$%^&*]+" title="Password can only contain letters, numbers, and !@#$%^&*" required>
                                <label for="floatingPassword">Password</label>
                                <div class="invalid-feedback">Password can only contain letters, numbers, and !@#$%^&*</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <!-- Optional elements -->
                            </div>
                            <button type="submit" name="loginbtn" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </form>

                        <script>
                            document.getElementById('loginForm').addEventListener('submit', function(event) {
                                const username = document.getElementById('floatingInput');
                                const password = document.getElementById('floatingPassword');
                                let isValid = true;

                                // Validate username (letters only)
                                const usernameRegex = /^[a-zA-Z]+$/;
                                if (!usernameRegex.test(username.value)) {
                                    username.classList.add('is-invalid');
                                    isValid = false;
                                } else {
                                    username.classList.remove('is-invalid');
                                }

                                // Validate password (letters, numbers, and specific special chars)
                                const passwordRegex = /^[a-zA-Z0-9!@#$%^&*]+$/;
                                if (!passwordRegex.test(password.value)) {
                                    password.classList.add('is-invalid');
                                    isValid = false;
                                } else {
                                    password.classList.remove('is-invalid');
                                }

                                if (!isValid) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                            });

                            // Add real-time validation feedback
                            document.getElementById('floatingInput').addEventListener('input', function() {
                                const regex = /^[a-zA-Z]+$/;
                                if (regex.test(this.value)) {
                                    this.classList.remove('is-invalid');
                                } else {
                                    this.classList.add('is-invalid');
                                }
                            });

                            document.getElementById('floatingPassword').addEventListener('input', function() {
                                const regex = /^[a-zA-Z0-9!@#$%^&*]+$/;
                                if (regex.test(this.value)) {
                                    this.classList.remove('is-invalid');
                                } else {
                                    this.classList.add('is-invalid');
                                }
                            });
                        </script>



                        <!-- <p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="internal/lib/chart/chart.min.js"></script>
    <script src="internal/lib/easing/easing.min.js"></script>
    <script src="internal/lib/waypoints/waypoints.min.js"></script>
    <script src="internal/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="internal/lib/tempusdominus/js/moment.min.js"></script>
    <script src="internal/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="internal/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="internal/js/main.js"></script>
</body>

</html>