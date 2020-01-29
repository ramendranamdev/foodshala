<?php 
	
	
	
	$conn = mysql_connect( "localhost" , "root" , "" ) or die( $mysql_err = mysql_error() );

	echo $conn + "connection";

	mysql_select_db("foodshala" , $conn) or die( $mysql_err = mysql_error() );

	function mysqlConnection()
	{
		$mysql_err = null;
		$conn = mysql_connect( "localhost" , "root" , "" ) or die( $mysql_err = mysql_error() );
		mysql_select_db("foodshala" , $conn) or die( $mysql_err = mysql_error() );

		return $mysql_err;
	}


 ?>