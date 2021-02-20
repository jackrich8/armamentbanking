<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include './include/config.php';
include 'connect.php';
if(isset($_SESSION['username'])){
$usr = $_SESSION['username'];
// echo $usr;
}else {
echo "<script>alert('Please login to continue')</script>";
header("location:index.php");
}
$sql = "SELECT * FROM user WHERE username='$usr'";
$query = mysqli_query($conn, $sql);
$name = mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="rtl">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Personal Internet Banking: Dashboard | Armament </title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/favicon.ico">
    <link href="./assets/css/css8c87.css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/pickers/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/custom-rtl.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/plugins/forms/wizard.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/plugins/pickers/daterange/daterange.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/dashboard-bank.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/pages/single-page.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css-rtl/plugins/calendars/clndr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="./assets/css/style-rtl.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- END: Custom CSS-->

  </head>
    