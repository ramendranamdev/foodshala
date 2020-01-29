<?php 

    session_start();
    $msg = "";

    if( isset( $_SESSION['login'] ) ){
        header('location: ./home.php');
    }

    if(isset($_REQUEST['submit']))
    {
        
        $user_type = $_REQUEST["user"];


        if( $user_type == 'user' )
        {
//            echo $user_type;
            
            $email=$_REQUEST["email"];
            $password=$_REQUEST["password"];

            $conn = mysql_connect("localhost" , "root" , "" ) or die(  mysql_error() );
            mysql_select_db("foodshala" , $conn) or die(mysql_error());    

            $cmd="SELECT email,pass FROM user WHERE email='$email' AND pass='$password' ";

            $result=mysql_query($cmd,$conn) or die(mysql_error());
            $count=mysql_num_rows($result);
            $msg = "Logged In Successfully.";
            if($count==1)
            {
                $ses_cmd=mysql_query("SELECT * FROM user WHERE email='$email'",$conn)or die(mysql_error());
                $row=mysql_fetch_array($ses_cmd);
                $login_user_name=$row['name'];
                $login_time = time();
                $_SESSION['login'] = 'true';
                $_SESSION['currentUser']=$login_user_name;
                $_SESSION['loginTime']=$login_time;
                $_SESSION['userType']="user";
                $_SESSION['userId'] =  $row['id'];
                
                header("location: ./home.php");
            }
            else{
                $msg = "Inavlid user email or password.";
            }
        }
        else if( $user_type == 'restaurant' ){
//            echo $user_type;
            
            $email=$_REQUEST["email"];
            $password=$_REQUEST["password"];

            $conn = mysql_connect("localhost" , "root" , "" ) or die(  mysql_error() );
            mysql_select_db("foodshala" , $conn) or die(mysql_error());    

            $cmd="SELECT email,password FROM restaurant WHERE email='$email' AND password='$password' ";

            $result=mysql_query($cmd,$conn) or die(mysql_error());
            $count=mysql_num_rows($result);
            $msg = "Logged In Successfully.";
            if($count==1)
            {
                $ses_cmd=mysql_query("SELECT name , id FROM restaurant WHERE email='$email'",$conn)or die(mysql_error());
                $row=mysql_fetch_array($ses_cmd);
                $login_user_name=$row['name'];
                $login_time = time();
                $_SESSION['login'] = 'true';
                $_SESSION['currentUser']=$login_user_name;
                $_SESSION['loginTime']=$login_time;
                $_SESSION['userType']='restaurant';
                $_SESSION['restaurantId'] = $row['id'];
                $_SESSION['userEmail'] = $email;
                header("location: ./dashboard.restaurant.php");
            }
            else{
                $msg = "Inavlid restaurant email or password.";
            }
            
        }
        


    }

	
?>

<html>
	<head>
		<title>Food Shala</title>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" type="text/css" href="style/style.css" /></head>
    
    <body>
    
        <div class="login-form-parent-box" align="center" >
            
            <div class="login-form-container" >            
                <img src="res/login.jpg" height="100px" width="100px" style="margin: 10 0 20 0;" />
                <form action="" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="example@mail.com" required />
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required />
                    </div>
                    <br>
                    
                    <label for="Who are yoy">Who are you !</label>
                    <div class="form-group">
                        <label>User</label>
                        <input type="radio" name="user" value="user" required />
                        <label>Restaurant</label>
                        <input type="radio" name="user" value="restaurant" required />
                    </div>
                    
                    <div class="form-group" style="margin-bottom:30px;" >
                        <input type="submit" class="form-control" style="width:30%;"; name="submit" value="Log In" />
                    </div>
                    
                    <?php echo $msg; ?>
                    
                    <a href="./registration.php">Sign Up Here.</a>
                    <hr>
                    <a href="./home.php">
                        <img src="res/back.png" width="15px" height="15px"/><br>
                        Back to Home.
                    </a>
                    
                </form>
            </div>
        </div>

    </body>

</html>