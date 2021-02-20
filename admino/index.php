<?php 
define("APP_MODULE", true);
define("PAGE_TITLE", "Admin Login");
include 'include/login.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="AES Admin" />
    <meta name="author" content="SmartUniversity" />
    <title><?php echo APP_NAME." | ".PAGE_TITLE?></title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="./assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="./assets/fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" /> 
</head>
<body>
    <div class="form-title">
        <h1>Admin</h1>
    </div>
    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="toggle"><i class="fa fa-user-plus"></i>
        </div>
        <div class="form formRegister">
            <h2>Admin Login</h2>
            <form method="post">
                <input type="text" placeholder="Username" name="admin_id" />
                <input type="password" placeholder="Password" name="admin_pass" />
                <?php echo $loginErr;?>
                <div class="remember text-left">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox2" type="checkbox" checked>
                        <label for="checkbox2">
                            Remember me
                        </label>
                    </div>
                </div>
                <button type="submit" name="admin_login">Login</button>
            </form>
        </div>
        <div class="form formReset">
            <h2>Reset your password?</h2>
            <form>
                <input type="email" placeholder="Email Address" />
                <button>Send Verification Email</button>
            </form>
        </div>
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    
    <script src="assets/js/pages/extra-pages/pages.js" ></script>
    <!-- end js include path -->
</body>

<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Mar 2018 16:01:13 GMT -->
</html>