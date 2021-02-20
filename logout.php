<?php
session_start();
	session_unset();
	session_destroy();
	echo '<script>alert("Logout Successful")
			location.href="login.html"</script>';
?>