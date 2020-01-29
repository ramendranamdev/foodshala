<?php 	
	if(session_id() == '' || !isset($_SESSION) ) { session_start(); }

    $errmsg = "";
    $flag = ''; 
    $productDetails = '';

    $conn = mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("foodshala",$conn) or die(mysql_error());     


    if( isset($_REQUEST['order']) ){

        if( !isset($_SESSION['login']) ){
            header('location: ./login.php');
        }

        if( $_REQUEST['order'] == 'Order' ){
            
            if( $_SESSION['userType'] == 'restaurant' ){
                $errmsg = $errmsg ."Restaurant can not order.";
            }
            else{
                $errmsg = "Problem in ordering food.";

                orderFood();
                
                $errmsg = "Order Successfully Placed.";
            }

            
        }
    }

    //Main function to execute order
    function orderFood(){
        $errmsg = "";

        if( $GLOBALS['flag'] == 'set' )
        {
            exceuteOrder();
        }else{
            $GLOBALS['productDetails'] = getProductDetails($_GET['id']);
            exceuteOrder();
        }
    }

    //Helper functions

    //Function to finally execute order and upload order details to database
    function exceuteOrder(){

        $userType = $_SESSION['userType'];
        $userId = $_SESSION['userId'];
        $orderId = generateOrderId();
        $result = "a";
        //$result = generateOrder($userType,$userId,$orderId);

        if( $result != null  ){
            
            $productDetails = $GLOBALS['productDetails'];

            $itemId = $productDetails['itemId'];
            $itemName = $productDetails['itemName'];
            $menuId = $productDetails['menuId'];
            $restaurantId = getResturantId($menuId);
            $address = $_REQUEST['deliveryAddress'];
            $unitPrice = $productDetails['itemPrice'];
            $unitsToDeliver = $_REQUEST['units'];
            $totalAmount = $unitPrice * $unitsToDeliver;
            $currentTimeStamp = date("Y-m-d H:i:s");

            $query = "INSERT INTO orders values( 
                '',
                '$orderId',
                '$itemId',
                '$itemName',
                '$userId',
                '$restaurantId',
                '$address',
                '$totalAmount',
                '$unitsToDeliver',
                '$currentTimeStamp',
                'PLACED'
             )";    

             $result = mysql_query($query,$GLOBALS['conn']) or die(mysql_error());
             
             if( $result ){
                $errmsg = "ordered successfully."; 
                //echo "ordered successfully.";
             }
             else{
                $errmsg = "Ordered Unsuccessfull";
                // echo "Ordered Unsuccessfull";
             }
        }
    }


    //Function to retrieve product details 
    function getProductDetails($id){
        
        $query = " select * from menu where id='$id' ";

        $result = mysql_query($query,$GLOBALS['conn']) or die(mysql_error());

        if( mysql_num_rows($result)==1 )
        {
            $i = 1;
            while( $row = mysql_fetch_array($result) ){
                $details = array(
                    'itemId'=>$row['id'],
                    'menuId'=>$row['menu_id'],
                    'itemName'=>$row['item_name'],
                    'itemDescription'=>$row['item_desc'],
                    'itemImage'=>$row['image'],
                    'itemPrice'=>$row['price'],
                    'isVegOrNonveg'=>$row['veg_nonveg'],
                    'isItemAvailable'=>$row['availability']
                );
                $GLOBALS['flag'] = 'set';
                $GLOBALS['productDetails'] = $details;
                return $details;
            }
        }else{
            return null;
        }
    }

    //Function to generate restaurant id
    function getResturantId($menuId){
        $query = " select restaurant_id from restaurantmenu where menu_id='$menuId' ";

        $result = mysql_query($query,$GLOBALS['conn']) or die(mysql_error());

        if( mysql_num_rows($result)==1 )
        {
            $i = 1;
            while( $row = mysql_fetch_array($result) ){
                $restaurantId = $row['restaurant_id'];                
            }
            return $restaurantId;
        }else{
            return null;
        }
    }

    //funtion to generate order id
    function generateOrderId(){
        $a;
        return (new DateTime())->format('YmdHisu');
    }

    //Function to add entry to orders table and to genearate new order
    function generateOrder($userType, $userId , $orderId){
        $query = "INSERT INTO orders values('','$userType','$userId','$orderId')";

        $result = mysql_query($query,$GLOBALS['conn']) or die(mysql_error());

        return $result;
    }

?>

<!DOCTYPE html>
<html>
	
	<head>
        <title>Foodshala</title>
        <link rel="stylesheet" type="text/css" href="./style/style.css" />
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
        
    <body>

    	<?php include('./header.php') ?>
        
        
        <div class="item-description-container">
            
            <div class="item-description-box">
            
                <div class="item-description-box-image">
                    <img src="res/adwords.png" alt="No image Available" />
                </div>
                
                <div class="item-description-box-content">
                    <h3>
                        <?php 

                            $details = getProductDetails($_GET['id']);
                            echo "<div class='item-description-box-content-title'>".$details['itemName']."</div><br>"; 
                            echo "Description :";
                            echo "<div class='item-description-box-content-desc'>".$details['itemDescription'];
                            
                        ?>
                    </h3>
                </div>       
            </div>
            
            <div class="item-description-sidebar">
                <div>
                    <form name="orderForm" method="post" action="">
                        <div class="form-group">
                            <input type="number" placeholder="No. of unit to order" name="units" class="form-control" required />
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Delivery Address" name="deliveryAddress" required/>
                        </div>
                        
                        <label>Expected Delievery</label>
                        <select name="expectedTime">
                            <option selected="Anytime">Anytime</option>
                            <option>01 PM</option>
                            <option>02 PM</option>
                            <option>03 PM</option>
                            <option>04 PM</option>
                            <option>05 PM</option>
                            <option>06 PM</option>
                            <option>07 PM</option>
                            <option>08 PM</option>
                        </select>
                        <br><br><br>
                        <div class="form-group">
                            <input type="submit" value="Order" name="order" class="form-control" />
                        </div>
                        <?php echo $errmsg; ?>
                    </form>
                </div>
            </div>
            
        </div>
        

        <script>
            
            function onOrderSubmit(){
                var form = document.getElementByName('orderForm');
                form.submit();
                form.reset();
            }

        </script>
    </body>

</html>