<?php
define("APP_MODULE", true);
define("PAGE_TITLE", "Account");
define("PAGE_LINK", "Add");
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
      <div class="content-body"><!-- Form wizard with number tabs section start -->
      <section id="validation">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">
                Add New Account
                </h4>
              </div>
              <div class="card-content collapse show">
                <div class="card-body">
                  <form action="#" class="steps-validation wizard-notification wizard-info">
                    <!----   Step 1 ------>
                    <h6>
                    Personal Information
                    </h6>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label for="firstName1">
                              First Name
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <input class="form-control required" id="firstName1" placeholder="First Name"
                            type="text" name="fname">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label for="lastName1">
                              Last Name
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <input class="form-control required" id="lastName1" placeholder="Lastname"
                            type="text" name="lastname">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 col-sm-12">
                          <div class="form-group">
                            <label for="paddress">
                              Permanent Address
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <input class="form-control required" id="paddress" name="address1"
                            placeholder="Permanent Address">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4 col-sm-6">
                          <div class="form-group">
                            <label for="dob">
                              Date of Birth
                            </label>
                            <input class="form-control" id="dob" type="date" value="2011-08-19" name="date">
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                          <div class="form-group">
                            <label for="mobile">
                              Mobile No.
                              <span class="danger">
                                *
                              </span>
                            </label>
                            <input class="form-control required" id="mobile" placeholder="Mobile No."
                            type="text" name="mobileno">
                          </div>
                        </div>
                        <div class="col-md-4 col-sm-7">
                          <div class="form-group">
                            <label for="email">
                              E-mail ID<span class="danger">
                                *
                              </span>
                            </label>
                            <input class="form-control required" id="email" placeholder="E-mail ID"
                            type="email" name="email">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group account-wrapper">
                            <label>
                              Gender
                            </label>
                            <div class="row skin skin-flat">
                              <div class="col-md-12">
                                <div class="form-check">
                                  <input id="male" name="inlineRadioOptions" type="radio" value="option1"
                                  checked>
                                  <label for="male">
                                    Male
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="female" name="inlineRadioOptions" type="radio" value="option2">
                                  <label for="female">
                                    Female
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group account-wrapper">
                            <label>
                              Marital Status
                            </label>
                            <div class="row skin skin-flat">
                              <div class="col-md-12">
                                <div class="form-check">
                                  <input id="status1" name="status1" type="radio" value="option1"
                                  checked>
                                  <label for="status1">
                                    Unmarried
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="status2" name="status1" type="radio" value="option2">
                                  <label for="status2">
                                    Married
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="status3" name="status1" type="radio" value="option2">
                                  <label for="status3">
                                    Others
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <!----   Step 2 ------>
                    <h6>
                    Account Type
                    </h6>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group account-wrapper">
                            <label>
                              Account Type
                            </label>
                            <div class="row skin skin-flat">
                              <div class="col-md-12">
                                <div class="form-check">
                                  <input id="inlineRadio1" name="acc-type" type="radio" value="option1"
                                  checked>
                                  <label for="inlineRadio1">
                                    Savings
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="inlineRadio2" name="acc-type" type="radio" value="option2">
                                  <label for="inlineRadio2">
                                    Current
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="inlineRadio3" name="acc-type" type="radio" value="option3">
                                  <label for="inlineRadio3">
                                    Loan
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="inlineRadio4" name="acc-type" type="radio" value="option4">
                                  <label for="inlineRadio4">
                                    Joint
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group account-wrapper">
                            <label>
                              Mode of Operation
                            </label>
                            <div class="row skin skin-flat">
                              <div class="col-md-12">
                                <div class="form-check">
                                  <input id="mode1" name="mode" type="radio" value="option1"
                                  checked>
                                  <label for="mode1">
                                    Self Only
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="mode2" name="mode" type="radio" value="option2">
                                  <label for="mode2">
                                    Either or Survivor
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="mode3" name="mode" type="radio" value="option3">
                                  <label for="mode3">
                                    Former or Survivor
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="mode4" name="mode" type="radio" value="option3">
                                  <label for="mode4">
                                    Anyone or Survivor
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="mode5" name="mode" type="radio" value="option3">
                                  <label for="mode5">
                                    Joint
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <!----   Step 3 ------>
                    <h6>
                    Required Documents
                    </h6>
                    <fieldset>
                      <div class="row skin skin-flat">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="income">
                              Annual Income :
                            </label>
                            <input class="form-control" id="income" placeholder="Income in USD" type="text"
                            name="income">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="incometax">Income Tax Number</label>
                            <input type="number" class="form-control" id="incometax" name="incometax">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="passport">
                              Passport No.
                            </label>
                            <input class="form-control" id="passport" placeholder="Passport No." type="text"
                            name="passport">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-group">
                            <label for="pancard">
                              PAN No.<span class="danger">*</span>
                            </label>
                            <input class="form-control required" id="pancard" placeholder="e.g. XXXXX0000X"
                            type="text" name="pancard">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label>
                              Proof of Identity :
                            </label>
                            <div class="row skin skin-flat">
                              <div class="col-md-12">
                                <div class="form-check">
                                  <input id="input-15" name="input-radio-3" type="radio" checked>
                                  <label for="input-15">
                                    National ID No.
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="input-11" name="input-radio-3" type="radio">
                                  <label for="input-11">
                                    Passport
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="input-12" name="input-radio-3" type="radio">
                                  <label for="input-12">
                                    PAN Card
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="input-13" name="input-radio-3" type="radio">
                                  <label for="input-13">
                                    Driving License
                                  </label>
                                </div>
                              </div>
                            </div>
                            <input class="form-control mt-2" id="add-proof" placeholder="Enter Document No."
                            type="text">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <div class="form-group">
                            <label>
                              Proof of Address :
                            </label>
                            <div class="row skin skin-flat">
                              <div class="col-md-12">
                                <div class="form-check">
                                  <input id="input-17" name="input-radio-4" type="radio" checked>
                                  <label for="input-17">
                                    Electricity Bill
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="input-16" name="input-radio-4" type="radio">
                                  <label for="input-16">
                                    IT Return
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="input-18" name="input-radio-4" type="radio">
                                  <label for="input-18">
                                    Telephone Bill
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input id="input-19" name="input-radio-4" type="radio">
                                  <label for="input-19">
                                    Bank A/c Statement
                                  </label>
                                </div>
                              </div>
                            </div>
                            <input class="form-control mt-2" id="add-proof-1" placeholder="Enter Document No."
                            type="text">
                          </div>
                        </div>
                      </div>
                    </fieldset>
                    <!----Step 4---->
                    <h6>
                    Nominee Details
                    </h6>
                    <fieldset>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="nomineename">
                              Nominee Name<span class="danger">*</span>
                            </label>
                            <input class="form-control required" id="nomineename" placeholder="Nominee Name"
                            type="text" name="nominee">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="relation">
                              Nominee Relationship<span class="danger">*</span>
                            </label>
                            <input class="form-control required" id="relation" placeholder="Relationship with Nominee"
                            type="text" name="nomineename">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="nom-add">
                              Nominee Address<span class="danger">*</span>
                            </label>
                            <input class="form-control required" id="nom-add" placeholder="Nominee Address"
                            name="nomineeaddress">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="nom-con">
                              Nominee Contact Number<span class="danger">*</span>
                            </label>
                            <input class="form-control required" id="nom-con" placeholder="Nominee Contact Number"
                            name="nom-con">
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </form>
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
<script src="./app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="./app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
<script src="./app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"></script>
<script src="./app-assets/vendors/js/pickers/daterange/daterangepicker.js"></script>
<script src="./app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<script src="./app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="./app-assets/js/core/app-menu.min.js"></script>
<script src="./app-assets/js/core/app.min.js"></script>
<script src="./app-assets/js/scripts/customizer.min.js"></script>
<script src="./app-assets/js/scripts/footer.min.js"></script>
<!-- END: Theme JS-->
<!-- BEGIN: Page JS-->
<script src="./app-assets/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
<script src="./app-assets/js/scripts/pages/bank-account.min.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->
</html>