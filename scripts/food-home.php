<?php 
	
	if(session_id() =='' || !isset($_SESSION)){ session_start(); }

	$conn = mysql_connect("localhost" , "root" , "") or die(mysql_error());
	mysql_select_db("foodshala" , $conn) or die(mysql_error());

	$query = "select * from menu";

	$result = mysql_query("$query",$conn) or die(mysql_error());
?>

<?php
	if(mysql_num_rows($result)>0){
		while( $row = mysql_fetch_array($result) ){


			print "
					<div class='grid-box'>
						
						<div class='grid-box-header'>".$row['item_name'].".</div>
						
						<div class='grid-box-image'>
							<img src='res/login.jpg' />
						</div>
						
						<div class='grid-box-bottom'>"
							
							.$row['price']." Rs.".

							"<a href='./food-page.php?id=".$row['id']."' target = '_blank'>
							<button>ORDER</button>
							</a>
						</div>

					</div>
				";
		}
	}

	

?>	

<!-- <div class='grid-box'>
    <div class='grid-box-header'>ITEM - #1</div>
    <div class='grid-box-image'>
        <img src='res/login.jpg' />
    </div>
    <div class='grid-box-bottom'>
        <button>ORDER</button>
    </div>
</div> -->