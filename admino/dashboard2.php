<?php
define("APP_MODULE", true);
define("PAGE_TITLE", "Admin Dashboard");
include '../assets/include/rateUpdate.php';
if(isset($_SESSION['admin_username'])){
}else {
echo "<script>alert('Please login to continue')</script>";
header("location:index.php");
}
// require_once '../../include/staffQuery.php';
?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="" />
    <title><?php echo APP_NAME." | ".PAGE_TITLE; ?></title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
</head>
<body>
    <!-- Blog section -->
    <section class="blog-section spad">
        <div class="container">
            <div class="section-title text-center">
                <a href="../assets/include/logout.php"><button class="btn btn-danger">Logout</button></a>
                <h2>Update Rates</h2>
                <p>Edit the prices of Gift Cards.</p>
            </div>
            <div class="row">
                <!-- blog item -->
                <div class="col-md-2">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="../assets/img/blog/1.jpg" alt="">
                        </figure>
                        <div class="blog-text">
                            <div class="post-date">iTunes</div>
                            <form method="post">
                                <h4 class="blog-title">
                                <table class="table">
                                    <thead>
                                        <th>Value</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$25</td>
                                            <td><input type="" name="i25" value="<?php echo $ip1; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$50</td>
                                            <td><input type="" name="i50" value="<?php echo $ip2; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$100</td>
                                            <td><input type="" name="i100" value="<?php echo $ip3; ?>" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </h4>
                                <button type="submit" name="itunesBtn" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- blog item -->
                <div class="col-md-2">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="../assets/img/blog/2.jpg" alt="">
                        </figure>
                        <div class="blog-text">
                            <div class="post-date">Amazon</div>
                            <form method="post">
                                <h4 class="blog-title">
                                <table class="table">
                                    <thead>
                                        <th>Value</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$25</td>
                                            <td><input type="" name="a25" value="<?php echo $ap1; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$50</td>
                                            <td><input type="" name="a50" value="<?php echo $ap2; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$100</td>
                                            <td><input type="" name="a100" value="<?php echo $ap3; ?>" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </h4>
                                <button type="submit" name="amazonBtn" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- blog item -->
                <div class="col-md-2">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="../assets/img/blog/3.jpg" alt="">
                        </figure>
                        <div class="blog-text">
                            <div class="post-date">Steam</div>
                            <form method="post">
                                <h4 class="blog-title">
                                <table class="table">
                                    <thead>
                                        <th>Value</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$25</td>
                                            <td><input type="" name="s25" value="<?php echo $sp1; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$50</td>
                                            <td><input type="" name="s50" value="<?php echo $sp2; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$100</td>
                                            <td><input type="" name="s100" value="<?php echo $sp3; ?>" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </h4>
                                <button type="submit" name="steamBtn" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- blog item -->
                <div class="col-md-2">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="../assets/img/blog/4.png" alt="">
                        </figure>
                        <div class="blog-text">
                            <div class="post-date">Ebay</div>
                            <form method="post">
                                <h4 class="blog-title">
                                <table class="table">
                                    <thead>
                                        <th>Value</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$25</td>
                                            <td><input type="" name="e25" value="<?php echo $ep1; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$50</td>
                                            <td><input type="" name="e50" value="<?php echo $ep2; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$100</td>
                                            <td><input type="" name="e100" value="<?php echo $ep3; ?>" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </h4>
                                <button type="submit" name="ebayBtn" class="btn btn-info">Update </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- blog item -->
                <div class="col-md-2">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="../assets/img/blog/5.jpg" alt="">
                        </figure>
                        <div class="blog-text">
                            <div class="post-date">Google Play</div>
                            <form method="post">
                                <h4 class="blog-title">
                                <table class="table">
                                    <thead>
                                        <th>Value</th>
                                        <th>Amount</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$25</td>
                                            <td><input type="" name="g25" value="<?php echo $gp1; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$50</td>
                                            <td><input type="" name="g50" value="<?php echo $gp2; ?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>$100</td>
                                            <td><input type="" name="g100" value="<?php echo $gp3; ?>" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </h4>
                                <button type="submit" name="gpBtn" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- blog item -->
                <div class="col-md-2">
                    <div class="blog-item">
                        <figure class="blog-thumb">
                            <img src="../assets/img/blog/7.png" alt="">
                        </figure>
                        <div class="blog-text">
                            <div class="post-date">Bitcoin Rate</div>
                            <form method="post">
                                <h4 class="blog-title">
                                <table class="table">
                                    <thead>
                                        <th>Card</th>
                                        <th>Value</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>iTunes</td>
                                            <td><input type="" name="g25" value="223.2" /></td>
                                        </tr>
                                        <tr>
                                            <td>Amazon</td>
                                            <td><input type="" name="g50" value="223.3" /></td>
                                        </tr>
                                        <tr>
                                            <td>Steam</td>
                                            <td><input type="" name="g100" value="342.2" /></td>
                                        </tr>
                                        <tr>
                                            <td>Ebay</td>
                                            <td><input type="" name="g50" value="160.2" /></td>
                                        </tr>
                                        <tr>
                                            <td>GPlay</td>
                                            <td><input type="" name="g100" value="223.4" /></td>
                                        </tr>
                                    </tbody>
                                </table>
                                </h4>
                                <button type="submit" name="gpBtn" class="btn btn-info">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section end -->
</body>
<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/add_staff_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Mar 2018 16:02:21 GMT -->
</html>