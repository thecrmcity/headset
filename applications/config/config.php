<?php

require_once('database.php');

class Config
{
	public $conn = true;
	public function __construct()
	{
		$con = mysqli_connect(USERHOST,USERNAME,USERPASS,USERDBSS);
		return $conn= $con;
	}
}