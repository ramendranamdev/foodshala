
<?php 
    
    if(session_id() == '' || !isset($_SESSION)) {
        // session isn't started
        session_start();   
    }


    if(isset($_REQUEST['submit'])){

        $itemName = $_REQUEST['itemName'];
        $itemDescription = $_REQUEST['itemDescription'];
        $itemPrice = $_REQUEST['itemPrice'];
        $itemIsVegNonVeg = $_REQUEST['itemIsVegNonVeg'];
        $itemAvailability = $_REQUEST['itemAvailability'];

        $conn = mysql_connect("localhost","root","") or die(mysql_error());
        mysql_select_db("foodshala") or die(mysql_error());

        $restaurantEmail = $_SESSION['userEmail'];


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        $cmd=" SELECT id FROM restaurant WHERE email= '$restaurantEmail' ";

        $result=mysql_query($cmd,$conn) or die(mysql_error());

        if( mysql_num_rows($result) > '0' )
        {
            if( $row = mysql_fetch_array($result) )
            {
                $restaurantId = $row['id'];
            }
        }

        $cmd=" SELECT menu_id FROM restaurantmenu WHERE restaurant_id= '$restaurantId' ";

        $result=mysql_query($cmd,$conn) or die(mysql_error());

        if( mysql_num_rows($result) > '0' )
        {
            if( $row = mysql_fetch_array($result) )
            {
                $restaurantId = $row['menu_id'];
            }
        }


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        $query = " INSERT INTO menu values('0','$restaurantId','$itemName','$itemDescription','image','$itemPrice','$itemIsVegNonVeg','$itemAvailability')";

        $result = mysql_query($query,$conn) or die(mysql_error());

        if($result){
            $msg = "New menu item created.";
        }
        else{
            $msg = "Try again";
        }

    }else{
        $msg = "";
    }

 ?>

                    <form action="" enctype="multipart/form-data" method="post" name="new-item-form" >
                        
                        <div class="form-group">
<!--                            <label for="Item Name"></label>-->
                            <input type="text" name="itemName" placeholder="Enter New Item Name" class="form-control" required/>
                        </div>
                        
                        <div class="form-group">
<!--                            <label for="Item description"></label>-->
                            <input type="textarea" name="itemDescription" placeholder="Description" class="form-control" />
                        </div>
                        
                        <div class="form-group">
<!--                            <label for="Image"></label>-->
                            <input type="file" name="image" value="picture" class="form-control"  />
                        </div>
                        
                        <div class="form-group">
<!--                            <label for="price"></label>        -->
                            <input type="number" name="itemPrice" value="0" class="form-control" required />
                         </div>
                        
                        <div class="form-group">
<!--                            <label for="veg_nonveg"></label>-->
                            <select name="itemIsVegNonVeg" class="form-control">
                                <option>VEG</option>
                                <option>NON-VEG</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
<!--                            <label for="availability"></label>-->
                            <select name="itemAvailability" class="form-control">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" value="Add New Item" class="form-control" onsubmit="submitNewItemForm()" />
                        </div>
                        
                        <div class="text-primary"><?php echo $msg; $msg="";?></div>
                        
                    </form>
