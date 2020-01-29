<?php 
	
    if( session_id() == '' || !isset($_SESSION) ) { session_start(); }
    
	$con= mysql_connect("localhost" , "root" , "" ) or die(mysql_errno());
	mysql_select_db("foodshala" ,$con) or die(mysql_errno());
	

    //require './db/orm.php';
    
	//echo $_REQUEST['submit'];

	if($_REQUEST['submit'] == 'userregister')
	{
		//echo "User registration script.";

		$name = $_REQUEST["name"];
		$password = $_REQUEST["password"];
		$phone = $_REQUEST["phone"];
		$email = $_REQUEST["email"];
		$address = $_REQUEST["address"];

		$query = "INSERT INTO user(id,name, pass, phone, email, address) VALUES ('','$name','$password','$phone','$email','$address') ";

		$result = mysql_query($query , $con) or $errmsg = mysql_error();
        
		if($result)
		{
			$successmsg = "Registration successfully completed.";
            $_SESSION['userRegistrationSuccessMsg'] = $successmsg;
			header('location: ./login.php');
		}
		else
		{
			$errmsg = "Registration failed." . mysql_error();
            $_SESSION['userRegistrationErrorMsg'] = $errmsg;
            header("location: ./userregister.php");
		}

	}
	else{
		
        if($_REQUEST['submit'] == 'Register Your Restaurant' )
        {
            echo "\n\nRestaurant registeration form\n\n";
            
            $name = $_REQUEST["name"];
            $password = $_REQUEST["password"];
            $phone = $_REQUEST["phone"];
            $email = $_REQUEST["email"];
            $address = $_REQUEST["address"];
            $veg_nonveg = $_REQUEST["veg_nonveg"];

            echo $name,$password,$phone,$email,$address,$veg_nonveg;
            
            $query = "INSERT INTO restaurant(id,name, email, password, contact, address , veg_nonveg) VALUES ('','$name','$email','$password','$phone','$address','$veg_nonveg') ";

            $result = mysql_query($query , $con);

//            if($result)
//            {
//                echo "Restaurant registered Successfully";
//                echo " <a href='./home.php'>Go to home</a> ";
//                header("location: ./home.php");
//            }
//            else
//            {
//                echo "Something went wrong. Try Again";
//            }
            
            
            if($result)
            {
                $successmsg = "Registration successfully completed.";
                $_SESSION['restaurantRegistrationSuccessMsg'] = $successmsg;
                header('location: ./login.php');
            }
            else
            {
                $errmsg = "Registration failed." . mysql_error();
                $_SESSION['restaurantRegistrationErrorMsg'] = $errmsg;
                header("location: ./restaurantregister.php");
            }
            
            
        }
        
	}
		
?>