<?php
    include '../connect.php';
    $usr = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Personal Internet Banking: Dashboard | Armament </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../images/fav_icon.ico" />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
    <link href="//db.onlinewebfonts.com/c/ee258cc6f8519e35391e064b34d70b3f?family=DistrictProW01-Light" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/class.css">
    <script src="../js/jquery-2.2.3.min.js"></script>
    <script src="../bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="main"></div>
        <div class="row" id="header-bcg">
            <div id="nav">
                <ul>
                    <li>
                        <div class="col-md-3" id="main-logo">
                            <img src="../images/logo.PNG">
                            </div>
                    </li>
                    <?php
                            $sql = "SELECT * FROM user WHERE username='$usr'";
                            $query = mysqli_query($conn, $sql);
                            $fetch = mysqli_fetch_array($query);
                        ?>
                    <ul style="float:right;list-style-type:none;">
                        <li><a>Balance: $<?php echo $fetch['amount'];?>.00</a></li>
                        <li><a><i class="glyphicon glyphicon-user"></i> <?php echo $usr; ?></a></li>
                        <li><a href="../dashboard.php"><i class="glyphicon glyphicon-transfer"></i> Transfer Funds</a></li>
                        <li><a href="account.php"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                        <li><a href="../logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
                    </ul>
                </ul>
            </div>
        </div>
        <div class="row" id="box">
            <div class="container">
            <div class="box_text">
                <h4 class="alert alert-info">Welcome <?php echo $usr; ?> to Armament Smart Banking</h4>
                <div class="box_head" style="padding-left: 20px;">
                    <h4>Account Settings</h4>
                </div>
                <div class="box_info">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <p>Change or update Transfer Pin</p>
                            <label for="text"><span class="ast">*</span>Required Field</label>
                        </div>
                        <div class="form-group field">
                            <label for="Password">&nbsp &nbsp<span class="ast">*</span>Old Pin: </label>
                            <input type="Password" class="form-control" id="oldPin">
                        </div>
                        <div class="form-group field">
                            <label for="Password">&nbsp &nbsp<span class="ast">*</span>New Pin: </label>
                            <input type="Password" class="form-control" id="newPin">
                        </div>
                        <div class="form-group field">
                            <label for="Password">&nbsp &nbsp<span class="ast">*</span>Re-type New Pin: </label>
                            <input type="Password" class="form-control" id="reNewPin">
                        </div>
                </div>
                <p id="info_p">Notice: If you have not changed the transfer pin, the default is 0000.</p>
                <div class="form-group field">
                    <div id="loader" style="display:none;"></div>
                    <div style="display:none;" id="myDiv" class="animate-bottom">
                        <p id="Msg"></p>
                    </div>
                    <button id="btnCancel">Cancel</button>
                    <button id="btnUpdatePin" style="float: right;font-size: 12px;" name="btnUpdatePin">Update Transfer Pin</button>
                </div>
                </form>
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
            <li><a class="active" href="">About Armament</a></li>
            <li><a href="">Careers</a></li>
            <li><a href="">Privacy</a></li>
            <li><a href="">Security</a></li>
            <li><a href="">Terms &amp Conditions</a></li>
            <li><a href="">Site Map</a></li>
            <li><a href="">Armament Accessibility</a></li>
            <li><a href="">Armament Group</a></li>
            <ul style="float:right;list-style-type:none;">
                <li><a href="" style="text-align: left;">&copy Armament Bank, N.A. 2019. All Rights Reserved <br> Member FDIC. <br> <i class="glyphicon glyphicon-home"></i> Equal Housing Lender</a></li>
            </ul>
        </ul>
    </div>
</body>
<script>
$(document).ready(function() {
    $('#btnUpdatePin').click(function(event) {
        event.preventDefault();
        var oldPin = $('#oldPin').val();
        var newPin = $('#newPin').val();
        var reNewPin = $('#reNewPin').val();
        if (oldPin == "" || newPin == "" || reNewPin == "") {
            document.getElementById("loader").style.display = "block";
            myFunction();
            $('#Msg').html("<div class='alert alert-danger'>Please fill all neccessary requirements</div>");
            document.getElementById("msg").style.display = "none";
            setTimeout(function() {
                    location.href = "account.php";
                            }, 3000);
            return false;
        } else if(oldPin.length != 4 || newPin.length != 4 || reNewPin.length != 4){
            document.getElementById("loader").style.display = "block";
            myFunction();
            $('#Msg').html("<div class='alert alert-danger'>Pin length can only be 4 digit</div>");
            document.getElementById("msg").style.display = "none";
            setTimeout(function() {
                    location.href = "account.php";
                            }, 3000);
            return false;
        } else {
            if (newPin != reNewPin) {
                document.getElementById("loader").style.display = "block";
                myFunction();
                $('#Msg').html("<div class='alert alert-danger'>Pins does not match</div>");
                document.getElementById("msg").style.display = "none";
                setTimeout(function() {
                    location.href = "account.php";
                            }, 3000);
                return false;
            } else {
                $.ajax({
                    url: 'update.php',
                    method: 'POST',
                    data: {
                        submit: 1,
                        oldPin: oldPin,
                        newPin: newPin,
                        reNewPin: reNewPin
                    },
                    success: function(data) {
                        if (data == 0) {
                            document.getElementById("loader").style.display = "block";
                            myFunction();
                            $('#Msg').html("<div class='alert alert-success'>Successful</div>");
                            setTimeout(function() {
                                alert("Pin Successfully changed");
                                location.href = "../dashboard.php";
                            }, 5000);
                        }else if(data == 3){
                            document.getElementById("loader").style.display = "block";
                            myFunction();
                            $('#Msg').html("<div class='alert alert-danger'>Wrong Old Pin</div>");
                            document.getElementById("msg").style.display = "none";
                            setTimeout(function() {
                                location.href = "account.php";
                            }, 3000);
                            return false;
                        }
                    }
                });
            }
        }
    });
    $('#proceedBtn').click(function(event) {
        location.href = "./index.html";
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