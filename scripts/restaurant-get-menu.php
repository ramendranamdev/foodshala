<?php 
	
	if(session_id() == '' || !isset($_SESSION)) {	session_start();   }

	$conn = mysql_connect("localhost","root","") or die(mysql_error());

	mysql_select_db("foodshala",$conn) or die(mysql_error());

	$userEmail = $_SESSION['userEmail'];

	// echo "1";

	$query = " select id from restaurant where email='$userEmail' ";

	$result = mysql_query($query,$conn) or die(mysql_error());

	if( mysql_num_rows($result) > 0 ){
		while( $row = mysql_fetch_array($result) ){
			$restaurantId = $row['id'];
		}
	}

	// echo "2";
	$query = " select menu_id from restaurantmenu where restaurant_id = '$restaurantId' ";

	$result = mysql_query($query, $conn) or die(mysql_error());

	if( mysql_num_rows($result) > 0 )
	{
		while($row = mysql_fetch_array($result)){
			$menuId = $row['menu_id'];
		}
	}

	// echo "3";
	$query = " select * from menu where menu_id = '$menuId' ";
	
	$result = mysql_query($query , $conn) or die(mysql_error());

	if(mysql_num_rows($result) > 0)
	{
		$menu = "true";
	}

 ?>

<table id="example" class="table table-striped table-bordered" style="width:100%;">
       <thead>

           <tr>
               <th>Name</th>
               <th>Description</th>
               <th>Price</th>
               <th>Veg/Nonveg</th>
               <th>Availablity</th>
            </tr>
       </thead>

<?php 
	// echo "4";
	if( isset($menu) )
	{
		// echo "hey";

		while($row = mysql_fetch_array($result)){
			
			// echo "1";

			echo "<tr>";
        	
        	echo "<td>". $row['item_name'] . "</td>
        		  <td>". $row['item_desc'] . "</td>
        		  <td>". $row['price'] ."</td>
        		  <td>". $row['veg_nonveg'] ."</td>
        		  <td>". $row['availability'] ."</td>";

        	echo "</tr>";
		}
	}

 ?>

<tfoot>
   <tr>
       <th>Name</th>
       <th>Description</th>
       <th>Price</th>
       <th>Veg/Nonveg</th>
       <th>Availablity</th>
   </tr>
</tfoot>
