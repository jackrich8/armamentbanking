<?php
	include 'connect.php';
	$usr = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Personal Internet Banking: Dashboard | HSBC </title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/logo-icon.ico">
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
							<li><a>Balance: $<?php echo $fetch['amount'];?>.00</a></li>
							<li><a class="dropbtn"><i class="glyphicon glyphicon-user"></i> <?php echo $usr; ?></a></li>
							<li><a href="dashboard.php"><i class="glyphicon glyphicon-transfer"></i> Transfer Funds</a></li>
							<li><a href="settings/account.php"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
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
					<h4>Welcome <?php echo $usr; ?> to HSBC Smart Banking</h4>
					<div class="box_head">
						<h4>Insert transfer code</h4>
					</div>
					<div class="box_info">
						<form class="form-inline" role="form">
							 <div class="progress" id="myProgress">
  								<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="myBar">0%</div>
							</div>
                            <div class="form-group field">
                                <label for="password">&nbsp &nbsp<span class="ast">*</span>Transfer Code: </label>
                                <input type="password" class="form-control" id="code" name="code" disabled>
                            </div>
							<div id="loader" style="display:none;"></div>
                        	<div style="display:none;" id="myDiv" class="animate-bottom">
                            	<p id="Msg"></p>
                       		</div>
                    </div>
                    <div class="col-md-2"></div>
                    <p id="info_p">Notice: If you have not changed the transfer pin, the default is 0000.<br>
                    	Go to <b>Account Settings </b>, use <b>0000</b> for <b>Old Pin</b>(If you do not have one), change the pin in the <b>New Pin</b> field and press the <b>Update</b> button.<br>
                    Also due to network problems, you might be required to click the tranfer button more than once.</p>
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
			<div class="row" id="report">
				<div class="col-md-2"></div>
				<div class="col-md-2 report"><a href=""><i class="glyphicon glyphicon-earphone"></i> Customer Service</a></div>
				<div class="col-md-2 report"><a href=""><i class="glyphicon glyphicon-map-marker"></i> Find a branch or ATM</a></div>
				<div class="col-md-2 report"><a href=""><i class="glyphicon glyphicon-map-marker"></i> Customer feedback</a></div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<div id="footer">
			<ul>
				<li><a class="active" href="">About HSBC</a></li>
				<li><a href="">Careers</a></li>
				<li><a href="">Privacy</a></li>
				<li><a href="">Security</a></li>
				<li><a href="">Terms &amp Conditions</a></li>
				<li><a href="">Site Map</a></li>
				<li><a href="">HSBC Accessibility</a></li>
				<li><a href="">HSBC Group</a></li>
				<ul style="float:right;list-style-type:none;">
					<li><a href="" style="text-align: left;">&copy HSBC Bank USA, N.A. 2019. All Rights Reserved <br> Member FDIC. <br> <i class="glyphicon glyphicon-home"></i> Equal Housing Lender</a></li>
				</ul>
			</ul>
		</div>
	</body>
	<script>
	$(document).ready(function() {
		move();
	$('#btnContinue').click(function(event) {
        var code = $('#code').val();
        
        

		var myarray= new Array("<div class='alert alert-info'>Please contact us to get transfer code, either by E-mail info@hsbc.com or number +442824246246 </div>");
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
    if (width == 20) {
		clearInterval(id);
		document.getElementById("loader").style.display = "block";
        myFunction();
		document.getElementById("code").disabled = false;
		$('#Msg').html("<div class='alert alert-warning'>Please contact us to get transfer code, either by E-mail <a href='mailto:lukebry276253@gmail.com'>lukebry276253@gmail.com</a> or number <a href='tel:1515 505 8172'>1515 505 8172</a> </div>");
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
</html>