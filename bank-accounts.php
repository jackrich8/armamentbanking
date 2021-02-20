<?php
define("APP_MODULE", true);
define("PAGE_TITLE", "Account");
define("PAGE_LINK", "List");
?>
<?php include "./layouts/head.php"?>
<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
  <?php include "./layouts/nav.php"?>
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <?php include "./layouts/breadcrumbs.php"?>
      <div class="content-body"><!-- Base style table -->
      <section id="base-style">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title float-left">
                Account Details
                </h4>
                <div class="float-right">
                  <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" href="bank-add-account.php">
                    Add New Account <i class="fa fa-plus"></i>
                  </a>
                </div>
              </div>
              <div class="card-body mt-1">
                <div class="table-responsive">
                  <table id="active-accounts" class="table alt-pagination table-wrapper">
                    <thead>
                      <tr>
                        <th class="border-top-0"></th>
                        <th class="border-top-0">Type</th>
                        <th class="border-top-0">A/c Number</th>
                        <th class="border-top-0">Holder Name</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Balance</th>
                        <th class="border-top-0">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!--  <tr>
                        <td class="align-middle">
                          <div class="ac-symbol saving"><i class="la la-suitcase"></i>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="ac-type">Saving</div>
                        </td>
                        <td class="align-middle">
                          <div class="ac-number">2043********951</div>
                        </td>
                        <td class="align-middle">
                          <div class="ac-hol-name">Jane Andre</div>
                        </td>
                        <td class="align-middle">
                          <div class="ac-status badge badge-success badge-pill badge-sm">Active
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="ac-balance">$2,984.00</div>
                        </td>
                        <td class="align-middle">
                          <div class="action">
                            <a href="bank-add-account.php"><i class="la la-pencil-square success"></i></a>
                            <a href="#"><i class="la la-trash danger"></i></a>
                          </div>
                        </td>
                      </tr> -->
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- END: Content-->
</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<!-- BEGIN: Vendor JS-->
<script src="./app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="./app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="./app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="./app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="./app-assets/js/core/app-menu.min.js"></script>
<script src="./app-assets/js/core/app.min.js"></script>
<script src="./app-assets/js/scripts/customizer.min.js"></script>
<script src="./app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="./app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
<script src="./app-assets/js/scripts/pages/bank-accounts.min.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->
</html>