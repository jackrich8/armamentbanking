<?php
	include 'connect.php';
	$usr = $_SESSION['username'];
    echo $usr;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Personal Internet Banking: Dashboard | Armament </title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/logo-icon.ico">
		<link rel="stylesheet" href="home.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
		<link href="//db.onlinewebfonts.com/c/ee258cc6f8519e35391e064b34d70b3f?family=DistrictProW01-Light" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/class.css">
		<script src="js/jquery-2.2.3.min.js"></script>
		<script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" id="main"></div>
			<div class="row" id="header-bcg">
				<div id="nav">
					<ul>
						<li>
							<div class="col-md-3" id="main-logo">
								<img src="images/logo.png">
							</div>
						</li>
						<?php
							$sql = "SELECT * FROM user WHERE username='$usr'";
    						$query = mysqli_query($conn, $sql);
    						$fetch = mysqli_fetch_array($query);
						?>
						<ul style="float:right;list-style-type:none;">
							<li><a>Balance: $<span id="balance"><?php echo number_format($fetch['amount']);?></span>.00</a></li>
							<li><a class="dropbtn"><i class="glyphicon glyphicon-user"></i> <?php echo $usr; ?></a></li>
							<!-- <li><a href="dashboard.php"><i class="glyphicon glyphicon-transfer"></i> Transfer Funds</a></li> -->
							<!-- <li><a href="settings/account.php"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li> -->
							<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
						</ul>
					</ul>
				</div>
			</div>
			<div class="row" id="box">
				<div class="col-md-2">
					<img class="img-responsive" src="images/side-bar.PNG" alt="Transfer" width="100%"> 					
				</div>
				<div class="col-md-8 box_text">
					<img class="img-responsive" src="images/transfer.jpg" alt="Transfer" width="100%" height="345"> 
					<h4>Welcome <?php echo $usr; ?> to Armament Smart Banking</h4>
					<div class="box_head">
						<h4>Transfer Funds</h4>
					</div>
					<div class="box_info">
						<form class="form-inline" role="form" method="post">
                            <div class="form-group">
                            	<p>Fill in the form to transfer current fund into your account</p>
                                <label for="text"><span class="ast">*</span>Required Field</label>
                            </div>
                            <div class="form-group field">
                                <label for="text"><span class="ast">*</span>Account Number: </label>
                                <input type="text" class="form-control" id="accNum" name="accNum">
                            </div>
                            <div class="form-group field">
                                <label for="text"><span class="ast">*</span>&nbsp Bank Name: </label>
                                <select class="form-control" id="bankName" name="bankName"></select>
                            </div>
                            <div class="form-group field">
                                <label for="text"><span class="ast">*</span>&nbsp Country: </label>
                                <select class="form-control" id="country" name="country"></select>
                            </div>
                            <div class="form-group field">
                                <label for="number"><span class="ast">*</span>Amount: </label>
                                <input type="number" class="form-control" id="amt" name="amt">
                            </div>
                            <div class="form-group field">
                                <label for="Password">&nbsp &nbsp<span class="ast">*</span>Transfer Pin: </label>
                                <input type="Password" class="form-control" id="pin" name="password">
                            </div>
                            <!-- <div class="form-group field">
                                <label for="password">&nbsp &nbsp<span class="ast">*</span>Transfer Code: </label>
                                <input type="password" class="form-control" id="code" name="code" disabled>
                            </div> -->
                    </div>
                    <div class="col-md-2"></div>
                    <p id="info_p">Notice: If you have not changed the transfer pin, the default is 0000.<br>
                    	Go to <b>Account Settings </b>, use <b>0000</b> for <b>Old Pin</b>(If you do not have one), change the pin in the <b>New Pin</b> field and press the <b>Update</b> button.<br>
                    Also due to network problems, you might be required to click the tranfer button more than once.</p>
                        <div id="loader" style="display:none;"></div>
                        <div style="display:none;" id="myDiv" class="animate-bottom">
                            <p id="Msg"></p>
                        </div>
                    </form>
                        <button class="btn btn-default" id="btnCancel">Cancel</button>
                        <button class="btn btn-danger" id="btnContinue" style="float: right;font-size: 12px;" name="submitBtn">Continue</button>
                        <div class="row">
                        	<div class="col-md-4">
                        		<img class="img-responsive" src="images/transfer2.jpg" alt="Transfer">
                        	</div>
                        	<div class="col-md-4">
                        		<img class="img-responsive" src="images/transfer3.jpg" alt="Transfer">
                        	</div>
                        	<div class="col-md-4">
                        		<img class="img-responsive" src="images/transfer4.jpg" alt="Transfer">
                        	</div>
                        </div> 
                    </div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<footer class="layout_footer" role="contentinfo">
            <span class="visuallyhidden">Footer area</span>
            <div class="mod_footer" data-require="footer">
                <h2 class="visuallyhidden" id="mod_footer_breadcrumb_label">You are here:</h2>
                <div class="mod_footer_columns var_language_and_country_selectors">
                    <section class="footer_column var_country_selector">
                        <select class="footer_country_selector" data-country-selector>
                        </select>
                        <h2 class="footer_column_title">
                        <a href="https://www.credit-suisse.com/global/en.html">
                            <span class="visuallyhidden">Change Your Location</span>
                            INTERNATIONAL<span class="visuallyhidden">is the currently selected country site</span>
                        </a>
                        </h2>
                    </section>
                    <section class="footer_column var_language_selector">
                        <h2 class="footer_column_title var_language_selector">
                        Language</h2>
                        <ul class="mod_language_selector_list">
                        </ul>
                    </section>
                </div>
                <p class="copyright_statement">Copyright © 1997 - 2021 Armament GROUP AG and/or its affiliates. All rights reserved.</p>
            </div>
        </footer>
	</body>
	<script>
	$(document).ready(function() {
		var bankArr = ["", "Bank of the Ozarks", "First Merchants", "Community Bank System", "FCB Financial Holdings", "First Hawaiian", "Glacier Bancorp", "Columbia Banking System", "Cathay General Bancorp", "Cullen/Frost Bankers", "South State", "First Republic Bank", "Bank of Hawaii", "WesBanco", "State Street", "Independent Bank Group", "Hilltop Holdings", "Pinnacle Financial Partners", "Renasant", "Washington Federal", "Commerce Bancshares", "Capital One Financial", "Bank of New York Mellon", "Banner", "MB Financial", "Central Banco", "First Citizens", "JPMorgan Chase", "M&T Bank", "Northern Trust", "Heartland Financial USA", "KeyCorp", "First Interstate BancSystem", "Texas Capital Bancshares", "Citigroup", "Synovus Financial", "BankUnited", "Wells Fargo", "Huntington Bancshares", "Old National Bancorp", "Customers Bancorp", "UMB Financial", "BOK Financial", "Webster Financial", "Signature Bank", "Trustmark", "TFS Financial", "Fulton Financial", "Bank of America", "First National of Nebraska", "First BanCorp", "Valley National Bancorp", "CIT Group", "Citizens Financial Group", "People’s United Financial", "Regions Financial", "TCF Financial", "IBERIABANK", "First Horizon National", "Hancock Holding", "SunTrust Banks", "Banc of California"];

		var country_list = ["", "Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas", "Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands", "Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica", "Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea", "Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana", "Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India", "Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia", "Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania", "Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia", "New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal", "Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles", "Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan", "Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia", "Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States","United States Minor Outlying Islands","Uruguay" ,"Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];



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

	$('#btnContinue').click(function(event) {
	
		var bankName = $('#bankName').val();
		var country = $('#country').val();
        var accNum = $('#accNum').val();
        var amt = $('#amt').val();
        var pin = $('#pin').val();
        var code = $('#code').val();
        var balance = $('#balance').val();

        if (bankName == "" || accNum == "" || amt == "" || pin == "" || country == "") {
            document.getElementById("loader").style.display = "block";
            myFunction();
            $('#Msg').html("<div class='alert alert-danger'>Please fill all neccessary requirements</div>");
            document.getElementById("msg").style.display = "none";
            setTimeout(function() {
                            location.href = "dashboard.php";
                        }, 3000);
            return false;
        }else if(pin.length != 4){
        	document.getElementById("loader").style.display = "block";
            myFunction();
            $('#Msg').html("<div class='alert alert-danger'>Pin can not be more than 4 digit</div>");
            document.getElementById("msg").style.display = "none";
            setTimeout(function() {
                        location.href = "dashboard.php";
                        }, 3000);
            return false;
        }else{
    		document.getElementById("loader").style.display = "block";
            myFunction();
            setTimeout(function() {
                        location.href = "transfer.php";
                        }, 4000);
            document.getElementById("msg").style.display = "none";
        }
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
	</script>
</html>