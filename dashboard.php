<?php 
define("APP_MODULE", true);
include "./layouts/head.php";
$info2 = mysqli_query($conn, "SELECT * FROM trans WHERE username = '$usr' AND type = 'Transfer'");
$info3 = mysqli_query($conn, "SELECT * FROM trans WHERE username = '$usr' AND type = 'Deposit'");
// var_dump($info2);
$num_rows = mysqli_num_rows($info2);
$num_rows2 = mysqli_num_rows($info3);
// echo $num_rows;
$ans = 0;
while($row = mysqli_fetch_array($info2)){
  $ans += $row['amt'];
}
// echo $ans;
?>
<!-- BEGIN: Body-->
<style type="text/css">
                .custom-card{
                  border-top: 5px solid #202E39;
                }
                .custom-card h3{
                  color: #202E39 !important;
                }
                .custom-card span{
                  color: #202E39 !important;
                }
                .custom-card .percentage span{
                  font-size: 20px !important;
                  /*border: 1px solid #000;*/
                  text-align: left !important;
                }
              </style>
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
  
  <?php include "./layouts/nav.php"?>
  <!-- END: Main Menu-->
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><!-- Bank Stats -->
      <section id="bank-cards" class="bank-cards">
        <div class="row">
          <div class="col-xl-9 col-lg-8 col-md-12">
            <div class="card" style="border-top: 5px solid #202E39">
                  <div class="card-header">
                    <h4 class="card-title float-left">
                    Transaction Report
                    </h4>
                  </div>
                  <div class="card-body mt-1 table-wrapper">
                    <div class="table-responsive">
                      <table class="table alt-pagination pending-payment">
                        <thead>
                          <tr>
                            <th class="border-top-0">.Account No</th>
                            <th class="border-top-0">Amount (USD)</th>
                            <th class="border-top-0">Date</th>
                            <th class="border-top-0">Bank Name</th>
                            <th class="border-top-0">Country</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                          $info = mysqli_query($conn, "SELECT * FROM trans WHERE username = '$usr'");
                          // $num_rows = count($info);
                          
                          while($row = mysqli_fetch_array($info)){
                          ?>
                          <tr>
                            <td class="align-middle ac-no"><?php echo $row['act_num']; ?></td>
                            <td class="align-middle amount">$<?php echo number_format($row['amt']); ?></td>
                            <td class="align-middle trans-date">
                              <?php $date = new DateTime($row['date_time']);
                                    echo $date->format('l, M Y  h:i:sa'); ?>          
                            </td>
                            <td class="align-middle trans-source"><?php echo $row['bankName']; ?></td>
                            <td>
                              <span class="tran-type badge badge-success badge-pill badge-sm"><?php echo $row['type']; ?></span>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-12">
            <div class="chart-stats text-center my-3" style="margin-top: 0px !important;">
              <div class="card custom-card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-white text-left">
                        <h3 class="text-white">$<?php echo number_format($name['amount']);?></h3>
                        <span>Balance</span>
                      </div>
                      <div class="percentage">
                        <span>Total Checking</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card custom-card" style="border-top: 5px solid #FF7820;">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-white text-left">
                        <h3 class="text-white">$0.00</h3>
                        <span>Balance</span>
                      </div>
                      <div class="percentage">
                        <span>Armament Premier</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card custom-card" style="border-top: 5px solid cyan">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-white text-left">
                        <h3 class="text-white">$0.00</h3>
                        <span>Balance</span>
                      </div>
                      <div class="percentage">
                        <span>Credit Card%</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row match-height">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="card add-card">
              <div class="card-header">
                <h4>Add Card</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                      <div class="card-wrapper">
                        <img class="" src="./images/card.png" style="margin-right: 10%;width: 70%">
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                      <form action="#" class="card-form">
                        <fieldset class="mb-1">
                          <div class="form-group">
                            <input
                            type="text"
                            class="form-control card-number"
                            name="number"
                            id="card-number"
                            maxlength="19"
                            placeholder="Card Number"
                            />
                          </div>
                        </fieldset>
                        <fieldset class="mb-1">
                          <div class="form-group">
                            <input
                            type="text"
                            class="form-control card-name"
                            name="name"
                            id="card-name"
                            placeholder="Card Holder Name"
                            />
                          </div>
                        </fieldset>
                        <div class="row">
                          <div class="col-md-6">
                            <fieldset class="mb-1">
                              <div class="form-group">
                                <input
                                type="text"
                                class="form-control card-expiry"
                                name="expiry"
                                id="card-expiry"
                                placeholder="Card Expiry Date"
                                />
                              </div>
                            </fieldset>
                          </div>
                          <div class="col-md-6">
                            <fieldset class="mb-1">
                              <div class="form-group">
                                <input
                                type="text"
                                class="form-control card-cvc"
                                name="cvc"
                                id="card-cvc"
                                maxlength="16"
                                placeholder="Card CVC Number"
                                />
                              </div>
                            </fieldset>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <input
                            type="button"
                            name="generate"
                            value="Generate"
                            class="btn round btn-primary box-shadow-1 px-3 mr-1"
                            />
                            <input
                            type="button"
                            name="cancel"
                            value="Cancel"
                            class="btn btn-secondary round box-shadow-1 px-3"
                            />
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
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
<!-- BEGIN: Customizer-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
<!-- BEGIN: Vendor JS-->
<script src="./app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="./app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="./app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="./app-assets/vendors/js/charts/chart.min.js"></script>
<script src="./app-assets/vendors/js/charts/chartist.min.js"></script>
<script src="./app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"></script>
<script src="./app-assets/vendors/js/forms/extended/card/jquery.card.js"></script>
<script src="./app-assets/vendors/js/extensions/moment.min.js"></script>
<script src="./app-assets/vendors/js/extensions/underscore-min.js"></script>
<script src="./app-assets/vendors/js/extensions/clndr.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="./app-assets/js/core/app-menu.min.js"></script>
<script src="./app-assets/js/core/app.min.js"></script>
<script src="./app-assets/js/scripts/customizer.min.js"></script>
<script src="./app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="./app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
<script src="./app-assets/js/scripts/pages/dashboard-bank.min.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->
</html>