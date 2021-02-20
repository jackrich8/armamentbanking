<?php 
include 'connect.php';

	if(isset($_POST['submit'])){

		$fname = $_POST['fname'];
		$add = $_POST['add'];
		$email = $_POST['email'];
		$phone_no = $_POST['phone_no'];
		$username = $_POST['username'];
		$pwd = $_POST['pwd'];
		$confirmPwd = $_POST['confirmPwd'];

		if($pwd == $confirmPwd){
			$sql = "INSERT INTO user (fullname, address, email, phone_no, username, password, amount, pin, status)
    					VALUES('$fname', '$add', '$email', '$phone_no', '$username', '$pwd', '0', '0000', 'New')";
    			$query = mysqli_query($conn, $sql);

    			if($query){
    				echo '<div class="alert alert-success">Information Saved Successfully</div>';
    			}
    			else{

    				echo '<div class="alert alert-danger">Error</div>';
    			}
		}else{
			echo '<div class="alert alert-danger">Password doesnt match</div>';
		}
	}

?>