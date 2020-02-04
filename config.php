<?php

		$hostname="localhost";
		$username="root";
		$password="";
		$dbname="cseb";

$abc=mysqli_connect($hostname,$username,$password,$dbname);
		if(!$abc)
			echo "not";
		else
			echo "done";
?>