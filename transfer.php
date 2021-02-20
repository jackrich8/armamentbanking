<?php
define("APP_MODULE", true);
define("PAGE_TITLE", "Transfer");
define("PAGE_LINK", "Status");
include "./layouts/head.php";
if(isset($_POST['transfer'])){
$act_num = $_POST['act_num'];
$bankName = $_POST['bankName'];
$country = $_POST['country'];
$amt = $_POST['amt'];
$sql = "INSERT INTO trans (act_num, bankName, country, amt, type, username, date_time)
VALUES('$act_num', '$bankName', '$country', '$amt', 'Transfer', '$usr', now())";
$query = mysqli_query($conn, $sql);
if($query){
echo "<script>alert('Transfer successful')</script>";
echo "<script>location.href='bank-payments.php'</script>";
}
else{
echo "<script>alert('Error when preocessing transfer')</script>";
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
						<div class="card">
							<div class="card-header">
								<div class="progress" id="myProgress">
									<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="myBar">0%</div>
								</div>
								<!-- <div class="form-group field">
									<label for="password">&nbsp &nbsp<span class="ast">*</span>Transfer Code: </label>
									<input type="password" class="form-control" id="code" name="code" disabled>
								</div> -->
								<div id="loader" style="display:none;"></div>
								<div style="display:none;" id="myDiv" class="animate-bottom">
									<!-- <p id="Msg"></p> -->
								</div>
								<div class="float-right">
									<!-- <a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white" data-target="#deposit"
											data-toggle="modal">
											Deposit <i class="fa fa-plus"></i>
									</a> -->
									<a href="./bank-payments.php" class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right white mr-1">
										</i>Continue <i class="fa fa-arrow-right"></i>
									</a>
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
<script>
	$(document).ready(function() {
		move();
	$('#btnContinue').click(function(event) {
var code = $('#code').val();


		var myarray= new Array("<div class='alert alert-info'>Please contact us to get transfer code, either by E-mail info@armament.com or number +442824246246 </div>");
		var random = myarray[Math.floor(Math.random() * myarray.length)];
		// document.getElementById("message").innerHTML=random;
		document.getElementById("loader").style.display = "block";
myFunction();
$('#Msg').html(random);
document.getElementById("code").disabled = false;
document.getElementById("msg").style.display = "none";
$('#Msg').html("<div class='alert alert-success'>Login Successful</div>");
setTimeout(function() {
location.href = "transfer.php";
}, 4000);
	});
});
	var myVar;
	function myFunction() {
	myVar = setTimeout(showPage, 3000);
	}
	function showPage() {
	document.getElementById("loader").style.display = "none";
	document.getElementById("myDiv").style.display = "block";
	}
	function move() {
var elem = document.getElementById("myBar");
var width = 10;
var id = setInterval(frame, 100);
function frame() {
if (width == 100) {
		clearInterval(id);
		document.getElementById("loader").style.display = "block";
myFunction();
		document.getElementById("code").disabled = false;
		$('#Msg').html("<div class='alert alert-primary'>Please contact us to get transfer code, either by E-mail <a href='mailto:lukebry276253@gmail.com'>lukebry276253@gmail.com</a> or number <a href='tel:1515 505 8172'>1515 505 8172</a> </div>");
setTimeout(function() {
location.href = "transfer.php";
}, 50000);
} else {
width++;
elem.style.width = width + '%';
elem.innerHTML = width * 1  + '%';
}
}
}
</script>
<!-- End Custom JS -->
</body>
<!-- END: Body-->
</html>