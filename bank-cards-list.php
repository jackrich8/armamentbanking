<?php
define("APP_MODULE", true);
define("PAGE_TITLE", "Card");
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
                <h4 class="card-title float-left">Added Cards</h4>
                <div class="float-right">
                  <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" data-toggle="modal"
                    data-target="#inlineForm">
                  Add New Card <i class="fa fa-plus"></i></a>
                  <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <label class="modal-title text-text-bold-600" id="myModalLabel33">Credit Card Details</label>
                        </div>
                        <form action="#">
                          <div class="modal-body">
                            <label>Holder Name
                              <span class="danger">*</span>
                            </label>
                            <div class="form-group">
                              <input type="text" placeholder="Holder Name" name="holder-name" class="form-control">
                            </div>
                            <label>Card Number
                              <span class="danger">*</span>
                            </label>
                            <div class="form-group">
                              <input type="text" placeholder="Card Number" name="card-no" class="form-control">
                            </div>
                            <label>Credit Limit </label>
                            <div class="form-group">
                              <input type="text" placeholder="Credit Limit" name="limit" class="form-control">
                            </div>
                            <label for="status">Card Status
                              <span class="danger">*</span>
                            </label>
                            <div class="form-group">
                              <select class="c-select form-control" id="status" name="card-status">
                                <option value="Active">Active</option>
                                <option value="Deactived">Deactived</option>
                                <option value="Delayed">Delayed</option>
                                <option value="Surrendered">Surrendered</option>
                              </select>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <input type="button" class="btn btn-success" id="card-submit" value="Submit">
                            <input type="reset" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body mt-1">
                <div class="table-responsive">
                  <table id="active-accounts" class="table alt-pagination card-wrapper">
                    <thead>
                      <tr>
                        <th class="border-top-0"></th>
                        <th class="border-top-0">Card No.</th>
                        <th class="border-top-0">Holder Name</th>
                        <th class="border-top-0">Expiry Date</th>
                        <th class="border-top-0">Credit Limit</th>
                        <th class="border-top-0">Status</th>
                        <th class="border-top-0">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- <tr>
                        <td class="align-middle">
                          <div class="card-icon"><i class="la la-credit-card text-light"></i></div>
                        </td>
                        <td class="align-middle">
                          <div class="card-no">xxxx-xxxx-xxxx-8754</div>
                        </td>
                        <td class="align-middle">
                          <div class="holder-name">Janelass Andre</div>
                        </td>
                        <td class="align-middle">
                          <div class="exp-date">12/19</div>
                        </td>
                        <td class="align-middle limit">1000</td>
                        <td class="align-middle">
                          <div class="status badge badge-success badge-pill badge-sm">Active</div>
                        </td>
                        <td class="align-middle">
                          <div class="action">
                            <a href="bank-add-card.html"><i class="la la-pencil-square success"></i></a>
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
<script src="./app-assets/js/scripts/pages/bank-cards.min.js"></script>
<!-- END: Page JS-->
<!-- Custom JS -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#card-submit").click(function(event) {
      alert("Request submitted successfully! We will contact you when your card is ready.");
      location.href = "./dashboard.php";
    });
  });
</script>
<!-- End Custom JS -->
</body>
<!-- END: Body-->
</html>