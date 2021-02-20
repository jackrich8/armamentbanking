<?php
session_start();
define('APP_MODULE', true);
	session_unset();
	session_destroy();
	echo '<script>alert("Logout Successful")
    location.href="../../admino/index.php"</script>';

?>