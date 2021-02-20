<?php
if(!defined("APP_MODULE")) die("UNAUTHORIZED ACCESS");
require 'queryBuilder/queryBuilder.php';


// Create connection
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = new QueryBuilder($conn);
?> 