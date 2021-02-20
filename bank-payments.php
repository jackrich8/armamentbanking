<?php
define("APP_MODULE", true);
define("PAGE_TITLE", "Payments");
define("PAGE_LINK", "Status");
include "./layouts/head.php";
// include "./include/config.php";
if(isset($_POST['transfer'])){
$info2 = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE username = '$usr'"));
$init_amt = $info2['amount'];
$act_num = $_POST['act_num'];
$rou_num = $_POST['rou_num'];
$bankName = $_POST['bankName'];
$country = $_POST['country'];
$amt = $_POST['amt'];
if ($amt > $init_amt) {
echo "<script>alert('You do not have enough amount in your account.')</script>";
echo "<script>location.href='bank-payments.php'</script>";
}else{
$sql = "INSERT INTO trans (act_num, rou_num, bankName, country, amt, type, username, date_time)
VALUES('$act_num', '$rou_num', '$bankName', '$country', '$amt', 'Transfer', '$usr', now())";
$query = mysqli_query($conn, $sql);
$ans = $name['amount'] - $amt;

$sql2 = "UPDATE user SET amount='$ans' WHERE username='$usr'";
$query2 = mysqli_query($conn, $sql2);
if($query && $query2){
echo "<script>alert('Transfer successful')</script>";
echo "<script>location.href='transfer.php'</script>";
}
else{
echo "<script>alert('Error when preocessing transfer')</script>";
}
}
}
?>
<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
  <?php include "./layouts/nav.php"?>
  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
      <?php include "./layouts/breadcrumbs.php"?>
      <div class="content-body"><section id="payments-details">
        <div class="row">
          <div class="col-12">
            <div class="card" style="border-top: 5px solid #202E39">
              <div class="card-header">
                <h4 class="card-title float-left">
                Payment Status
                </h4>
                <div class="float-right">
                  <!-- <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" data-target="#deposit"
                    data-toggle="modal">
                    Deposit <i class="fa fa-plus"></i>
                  </a> -->
                  <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white mr-1"
                    data-target="#Transfer" data-toggle="modal">
                    </i>Transfer <i class="fa fa-plus"></i>
                  </a>
                  <div aria-hidden="true" class="modal fade text-left" id="Transfer" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <label class="modal-title text-text-bold-600" id="Transfer1">
                            Transfer Funds From Amount
                          </label>
                        </div>
                        <form method="POST" style="overflow: scroll; max-height: 500px !important;">
                          <div class="modal-body">
                            <label>
                              Account Number :
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <div class="form-group">
                              <input class="form-control" name="act_num" placeholder="Enter Amount" type="text" required="">
                            </div>
                            <label>
                              Routing Number :
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <div class="form-group">
                              <input class="form-control" name="rou_num" placeholder="Enter Routing Number" type="text" required="">
                            </div>
                            <label>
                              Bank Name :
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <div class="form-group">
                            <div class="form-group">
                              <select class="c-select form-control" id="bankName" name="bankName">
                              </select>
                            </div>
                            <div class="form-group">
                              <input type="text" class="c-select form-control" name="bankNameOpt" placeholder="Bank not listed">
                            </div>
                            <label>
                              Country :
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <div class="form-group">
                              <div class="form-group">
                                <select class="c-select form-control" id="country" name="country" required="">
                                </select>
                              </div>
                              <label>
                                Enter Amount :
                                <span class="danger">
                                  *
                                </span>
                              </label>
                              <div class="form-group">
                                <input class="form-control" name="amt" placeholder="Enter Amount"
                                type="text" required="">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button class="btn btn-success mr-1" type="submit" name="transfer">
                              Submit
                              </button>
                              <a href="bank-payments.php" class="btn btn-danger mr-1" type="reset">
                                Cancel
                              </a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card" style="border-top: 5px solid #202E39">
                <div class="card-header">
                  <h4 class="card-title float-left">
                  All Transactions
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
  <script src="./app-assets/js/scripts/pages/bank-accounts.min.js"></script>
  <!-- END: Page JS-->
  <!-- Custom JS -->
  <script type="text/javascript">
  $(document).ready(function() {
  var bankArr = ["", "Bank of the Ozarks", "First Merchants", "Community Bank System", "FCB Financial Holdings", "First Hawaiian", "Glacier Bancorp", "Columbia Banking System", "Cathay General Bancorp", "Cullen/Frost Bankers", "South State", "First Republic Bank", "Bank of Hawaii", "WesBanco", "State Street", "Independent Bank Group", "Hilltop Holdings", "Pinnacle Financial Partners", "Renasant", "Washington Federal", "Commerce Bancshares", "Capital One Financial", "Bank of New York Mellon", "Banner", "MB Financial", "Central Banco", "First Citizens", "JPMorgan Chase", "M&T Bank", "Northern Trust", "Heartland Financial USA", "KeyCorp", "First Interstate BancSystem", "Texas Capital Bancshares", "Citigroup", "Synovus Financial", "BankUnited", "Wells Fargo", "Huntington Bancshares", "Old National Bancorp", "Customers Bancorp", "UMB Financial", "BOK Financial", "Webster Financial", "Signature Bank", "Trustmark", "TFS Financial", "Fulton Financial", "Bank of America", "First National of Nebraska", "First BanCorp", "Valley National Bancorp", "CIT Group", "Citizens Financial Group", "People’s United Financial", "Regions Financial", "TCF Financial", "IBERIABANK", "First Horizon National", "Hancock Holding", "SunTrust Banks", "Banc of California"];
  var country_list = ["", "Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas", "Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands", "Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica", "Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea", "Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana", "Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India", "Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia", "Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania", "Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia", "New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal", "Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles", "Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","St. Lucia","Sudan", "Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia", "Turkey","Turkmenistan","Turks & Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","United States Minor Outlying Islands","Uruguay" ,"Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
  for (var i = 0; i < bankArr.length; i++) {
  var para = document.createElement("option");
  var node = document.createTextNode(bankArr[i]);
  para.appendChild(node);
  var element = document.getElementById("bankName");
  element.appendChild(para);
  // document.getElementById('bankName').innerHTML = "<option>1</option>";
  }
  for (var i = 0; i < country_list.length; i++) {
  var para = document.createElement("option");
  var node = document.createTextNode(country_list[i]);
  para.appendChild(node);
  var element = document.getElementById("country");
  element.appendChild(para);
  // document.getElementById('bankName').innerHTML = "<option>1</option>";
  }
  });
  </script>
  <!-- End Custom JS -->
</body>
<!-- END: Body-->
</html>