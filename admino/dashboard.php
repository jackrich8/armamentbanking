<?php
define("APP_MODULE", true);
define("PAGE_TITLE", "Admin Dashboard");
include 'include/update.php';

// if (isset($_SESSION['admin_username'])){
//       echo $_SESSION['admin_username'];                   
//   }else{
//     echo "NAY";
//   }

// if(isset($_SESSION['agba_do_id'])){
// echo $_SESSION['agba_do_id'];
// }else {
// echo "<script>alert('Please login to continue')</script>";
// // header("location:index.php");
// }
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
                <a href="include/logout.php"><button class="btn btn-danger">Logout</button></a>
                <h2>Update Client Amount</h2>
                <p>Edit the amount a client has in his/her account.</p>
            </div>
            <div class="row">
                <table class="table table-hover selling-table">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th class="text-center">Client ID</th>
                            <th class="text-center">Fullname</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone No</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Amount</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form role="form" method="POST">
                            <?php
                            for($i=0; $i < $num_rows;$i++){
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $i + 1;?> </td>
                                <td class="text-center"><?php echo $info[$i]['id'];?></td>
                                <td class="text-center"><?php echo $info[$i]['fullname'];?></td>
                                <td class="text-center"><?php echo $info[$i]['address'];?></td>
                                <td class="text-center"><?php echo $info[$i]['email'];?></td>
                                <td class="text-center"><?php echo $info[$i]['phone_no'];?></td>
                                <td class="text-center"><?php echo $info[$i]['username'];?></td>
                                <td class="text-center"><?php echo $info[$i]['amount'];?></td>
                                <td class="text-center"><?php echo $info[$i]['status'];?></td>
                                <td><a href="dashboard.php?card_id=<?php echo $info[$i]['id'];?>" class="btn btn-danger" name="deleteBtn">Delete</a></td>
                            </tr>
                            <?php } ?>
                            <br>
                            <br>
                            <br>
                            <tr>
                                
                                <td></td>
                                <td class="text-center">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="client_id" placeholder="Client ID">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="amount" placeholder="Amount">
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-group">
                                        <select class="form-control" name="client_status">
                                            <option></option>
                                            <option>New</option>
                                            <option>Pending</option>
                                            <option>Paid</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-info" name="addNewBtn">Update Client</button>
                                    </div>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Blog section end -->
</body>
<!-- Mirrored from radixtouch.in/templates/admin/smart/source/light/add_staff_bootstrap.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Mar 2018 16:02:21 GMT -->
</html>