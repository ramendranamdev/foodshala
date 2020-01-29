<?php 
	
	if(session_id() == '' || !isset($_SESSION)) {	session_start();   }

	$conn = mysql_connect("localhost","root",) or die(mysql_error());

	mysql_select_db("foodshala",$conn) or die(mysql_error());

	$query = " select restaurant_id from restaurant where email='$_SESSION['userEmail']' ";

	$result = mysql_query($query,$conn) or die(mysql_error());

	if( mysql_num_rows($result) > 0 ){
		while( $row = mysql_fetch_array($result) ){
			$restaurantId = row['restaurant_id'];
		}
	}

	$query = " select menu_id from restaurantmenu where restaurant_id = '$restaurantId' ";

	$result = mysql_query($query, $conn) or die(mysql_error());

	if( mysql_num_rows($result) > 0 )
	{
		while($row = mysql_fetch_array($result)){
			$menuId = row['menu_id'];
		}
	}


 ?>