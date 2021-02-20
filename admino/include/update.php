<?php
require_once 'config.php';

//  Price Query
$info = $query->select("*")->from("user")->exec()->fetchAll();
$num_rows = count($info);

// Adding New Card Rates
	if (isset($_POST['addNewBtn'])) {

		$cAdd1 = $_POST['client_id'];
		$cAdd2 = $_POST['amount'];
		$cAdd3 = $_POST['client_status'];

		$users = $query->update("user")->set(array("amount" => $cAdd2, "status" => $cAdd3
                ))->where("id" , "$cAdd1")->exec();

		header("location:dashboard.php");

	}

// Deleting Card Rates
	 if (isset($_GET['card_id'])) {
        $users = $query->delete("*")->from("rate")->where("id", $_GET['card_id'])->exec();
		header("location:dashboard.php");
    }
?>