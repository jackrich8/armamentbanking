
# MySQLi Query Builder
MySQLi Query builder is a library which helps to generate MySQL queries and executes them. It also perform other function like sorting of records.

## How to install MySQLi Query Builder
1. Clone this repository
2. Extract it to your project
4. Instances a MySQL connection with the Object Oriented MySQLi Implementation 
3. Require the query builder into your project folder
4. Instance the a new `QueryBuilder` class and pass in the MySQLi Connection as an argument. Done.

###Example
####Folder Structure
|- project_folder
		|- QueryBuilder.php
		|- index.php
```php
<?php

	# 1. Require the Query builder library...
	require_once './QueryBuilder.php';


	# 2. Create a MySQL connection with OOP MySQLi...
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname= "example";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	# 3. Instance a new QueryBuilder class and the pass the connection object as a argument...

	$query = new QueryBuilder($conn);

	?>
```

###Overview
- *$query->select()* 		Builds the SELECT part of the MySQL query
- *      ->or()* 			Builds the OR part of the MySQL query
- *      ->and()* 			Builds the AND part of the MySQL query
- *      ->set()* 			Builds the SET part of the MySQL query
- *      ->from()* 			Builds the FROM part of the MySQL query
- *      ->fetchOne()* 		Fetch a record from the query result
- *      ->fetchAll()* 		Fetch all records from the query result
- *      ->raw_query()* 	Lets you to execute MySQL query the native way 
- *      ->exec()* 			Executes the built MySQL query
- *      ->limit()* 		Builds the limit part of the MySQL query
- *      ->order()* 		Builds the ORDER part of the MySQL query
- *      ->insert()* 		Builds the INSERT part of the MySQL query
- *      ->update()* 		Builds the UPDATE part of the MySQL query
- *      ->delete()* 		Builds the DELETE part of the MySQL query

### $query->raw_query($query)
This function let you executes MySQL query the normal way.
The following code selects all from the data:
```php
<?php

	$result = $query->raw_query("SELECT * FROM users");
	while($row = $result->fetch_assoc())
	{
		echo "<br/> Hello".$row["username"];
	}

?>
```
NOTE: This method is not cannot be chained. 

### $query->select($cols)
The select method is used to build the SELECT part of the query. This method can be used with other QueryBuilders method that can be used to select a record from a database.
The select method accepts a single argument ($cols). This is just a string of columns off which we want to collect data separated by commas.

_**Syntax**_
```
$query->select("col1, col2, col3, col4");
```

In the example below, we will write a simple query that get record of users form the database
```php
$query = new QueryBuilder($conn);

$users = $query->select("*")->from("users")->exec()->fetchAll();
$num_rows = count($users);
for($ i = 0; $i < $num_rows; $i++)
{
	echo "<br>".$users[$i]["username"];
}
```
 


