<?php

if(!defined("APP_MODULE")) die("UNAUTHORIZED ACCESS");

/**
 * MySQLi Query Builder : A simple MySQLi query builder class.
 *
 * PHP version ^5.3.10
 *
 * @category Database, MySQLi
 * @package  MySQLi-Query-Builder
 * @author   Victor Aremu <victor.olorunbunmi@gmail.com>
 * @license  MIT License
 * @version  1.0.0
 * @link     http://github.com/ahkohd/mysqli-query-builder
 */


class QueryBuilder
{


	/**
     * @var object Contains the MySQLi object.
     */
	private $model;

	/**
     * @var string Stores the MySQL query it's building.
     */
	private $query;


	/**
     * @var object Contains the result object of the executed MySQL query.
     */
	private $result;




	/**
	  * set the model field to the passed MySQLi object
	  *
	  * @param object $mysql_object
	  */
	
	public function __construct($mysql_object)
	{

		$this->model = $mysql_object;
	}




	/**
	  * raw_query method should be used to executes raw MySQL query passed by the user
	  *
	  * @param string $query
	  * @return object Returns the MySQLi result object
	  */

	public function raw_query($query)
	{
			return $this->model->query($query);
	}



	/**
	  * Builds the SELECT part of the query
	  *
	  * @param string|array $what The columns you want to select
	  * @return object $this
	  */

	public function select($what)
	{

		$this->query.= " SELECT ";

		if(is_string($what))
		{
			$this->query.= $what;
		}

		if(is_array($what))
		{
			for($i=0;$i<count($what);$i++)
			{
				($i==0) ? $this->query.= $what[$i] : $this->query.= " , ".$what[$i];
				
			}
		}

		return $this;
		
	}



	/**
	  * Builds the FROM part of the query
	  *
	  * @param string $table The name of the table record is to be selected
	  * @return object $this 
	  */

	public function from($table)
	{
		$this->query .= " FROM ".$table;

		return $this;
	}




	/**
	  * Executes the built MySQLi query. If the query is successfully executed it, set the $this->result field
	  * to the MySQLi result object else returns a null value.
	  *
	  * @return object $this | null 
	  */

	public function exec()
	{

		// echo $this->query;
		if($this->result = $this->model->query($this->query))
		{
			//clear query
		
			$this->query = "";
			return $this;
		} else {
			throw new Error($this->model->error);
			return null;
		}
		

	}



	/**
	  * Fetch a record from the MySQLi result object stored in $this->result.
	  *
	  * @return array
	  */

	public function fetchOne()
	{
		if($this->result!= null)
		{
			$res = $this->result->fetch_assoc();

			$this->query = "";
			$this->result = "";
			
			return $res;

		} else
		{
			throw new Error("Fetch err");
		}
		
	}


	/**
	  * Fetch all records from the MySQLi result object stored in $this->result.
	  *
	  * @return array
	  */

	public function fetchAll()
	{
		if($this->result!= null)
		{
			$res = array();
			while($row= $this->result->fetch_assoc())
			{
				array_push($res, $row);
			}

			$this->query = "";
			$this->result = "";

			return $res;

		} else
		{
			throw new Error("Fetch err");
		}
	}



	
    /**
     * Magic Getter Useful for getting the value of undeclared class properties
     * on the fly. Useful my getting request entities on the fly
     * @return mixed
     * @param string $method_name The name of the undeclared property called
     * @param array $params An array of arguments passed to the undeclared property called
     */

	public function __call($method_name, $params)
	{

	// The where function is overloaded...
	    //If the number of arguments passed is 2 them the 
		// operator is by default set to equals
		// If the number is 3 then  the operator will be the
		// value of the 2nd element in the array
		// Same applies the the or, and and method

		switch($method_name)
		{
			case "where":


					if(count($params)==2)
					{
						$this->query .= " WHERE ".$params[0]."  = '".$params[1]."'";
	 					return $this;
					} elseif (count($params==3)) {
						$this->query .= " WHERE ".$params[0]." ".$params[1]." '".$params[2]."'";
						return $this;
					}
			break;
			case "or":
					if(count($params)==2)
					{
						$this->query .= " OR ".$params[0]."  = '".$params[1]."'";
	 					return $this;
					} elseif (count($params==3)) {
						$this->query .= " OR ".$params[0]." ".$params[1]." '".$params[2]."'";
						return $this;
					}
			break;
			case "and":
								if(count($params)==2)
								{
									$this->query .= " AND ".$params[0]."  = '".$params[1]."'";
				 					return $this;
								} elseif (count($params==3)) {
									$this->query .= " AND ".$params[0]." ".$params[1]." '".$params[2]."'";
									return $this;
								}
						break;

		}

		throw new Exception('Function '.$method_name.' does not exists.');

	}


	/**
	  * Builds the LIMIT part of the query
	  *
	  * @param Integer $length The limit to the number of records to be selected
	  * @return object $this
	  */

	public function limit($length)
	{
		$this->query .= " LIMIT ".$length;
		return $this;
	}


	/**
	  * Builds the ORDER part of the query
	  *
	  * @param string $cols The columns you want to use to sort  the record
	  * @param integer $order If -1 this implies order DESC of 1 this implies sort ASC
	  * @return object $this
	  */

	public function order($cols, $order)
	{
		if($order == "asc")
		{
			$this->query .= " ORDER BY ".$cols." ASC";
		} elseif($order == "desc")
		{
			$this->query .= " ORDER BY ".$cols." DESC";
		}

		return $this;
	}



	/**
	  * Builds the INSERT part of the query
	  *
	  * @param string $tbl The name of the table you want to insert into
	  * @param array $content An associative array that will be mapped to the corresponding column and it's value
	  * @return object $this
	  */

	public function insert($tbl, $content)
	{
		$this->query = "INSERT INTO ".$tbl." ";

		$cols = null;
		$vals = null;

		foreach($content as $key => $value)
		{
			$cols .= $key.",";
			$vals .= "'".$value."',";
		}



		$cols = explode(",", $cols);
		array_pop($cols);
		$cols = implode(",", $cols);


		$vals = explode(",", $vals);
		array_pop($vals);
		$vals = implode(",", $vals);


		$cols = "(".$cols.")";
		$vals = "(".$vals.")";



		$this->query .= $cols."  VALUES ".$vals;
		return $this;
	}



	/**
	  * Builds the UPDATE part of the query
	  *
	  * @param st $cols The name of the table you want to update
	  * @return object $this
	  */

	public function update($tbl)
	{
		$this->query = "UPDATE ".$tbl;
		return $this;
	}


	/**
	  * Builds the SET part of the query
	  *
	  * @param array $content An associative array that it's key and value will be mapped to the (column = 'value') format
	  * @return object $this
	  */

	public function set($content)
	{
	
		$q = " SET ";

		foreach($content as $key => $value)
		{
			$q .= $key." = '".$value."', ";
		}

		$q = explode(",", $q);
		array_pop($q);
		$q = implode(",", $q);

		$this->query .= $q;
		return $this;
	}



	/**
	  * Builds the DELETE part of the query
	  *
	  * @return object $this
	  */

	public function delete()
	{
		$this->query = "DELETE ";
		return $this;
	}


}


?>