<?php 
	
	if( session_id() == '' || !isset($_SESSION) ) { session_start(); }

	$conn = mysql_connect("localhost","root","") or die(mysql_error());

	mysql_select_db("foodshala",$conn) or die(mysql_error());

	$userId = $_SESSION['userId'];

	$query = "select * from orders where user_id = '$userId' ORDER BY timestamp ";

	$result = mysql_query("$query",$conn) or die(mysql_error());
	
 ?>

<table id="example" class="table table-striped table-bordered" style="width:100%;">
	<thead>
	   <tr>
	       <th>Order ID</th>
	       <th>Food</th>
	       <th>Total Amount</th>
	       <th>Status</th>
	    </tr>
	</thead>

<?php  
	
	if( mysql_num_rows($result) > 0 ){
		while ( $row = mysql_fetch_array($result) ) {
			# code...
			echo "
				<tr>
					<td> ".$row['order_id']." </td>
					<td> ".$row['item_name']." </td>
					<td> ".$row['total_amount']." </td>
					<td> ".$row['status']." </td>
				</tr>
			";
		}
	}


?>

<tfoot>
   <tr>
       <th>Name</th>
       <th>Description</th>
       <th>Price</th>
       <th>Veg/Nonveg</th>
   </tr>
</tfoot>
</table>