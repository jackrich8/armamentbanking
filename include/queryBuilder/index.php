<?php
require_once './queryBuilder.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname= "revo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$query = new QueryBuilder($conn);

var_dump(

	$query ->select("username, password")
		->from("user")
		->where("uid", ">", 0)
		->or("username", "=", "Ahkohd")
		->and("uid", ">", 0)
		->order("uid, username", -1)
		->limit(2)
		->exec()
		->fetchAll()
);


$users = $query->select("*")->from("user")->where("username", "Ahkohd")->and("password", "vic12345")->exec()->fetchOne();
if($users!=null) echo "Welcome ".$users['username'];


$users = $query->raw_query("SELECT * FROM user");

while($row = $users->fetch_assoc())
{
	echo $row["username"];
	echo "\n";
}


if($query->insert("user", array("username" => "Timi", "password"=>"fuckU"))->exec())
{
	echo "Inserted";
}

if($query->update("user")->set(array("username"=>"John", "password"=>"john123"))->where("uid", 2)->exec())
{
	echo "updated";
}


if($query->delete()->from("user")->where("uid", 5)->exec())
{
	echo "Deleted";
}