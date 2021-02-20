<?php
	session_start();

	$conn = mysqli_connect("localhost", "tonymoto_credit", "Armament_2021") or die("connection failed");

	$select_db = mysqli_select_db($conn, "tonymoto_credit") or die("unable to select database");
?>