<?php
    
    if( session_id() == '' || !isset($_SESSION) ) { session_start(); }

    if( isset($_SESSION['login']) )
    {
        $msg = "LOGOUT";
        $link = "./logout.php";
        $user = $_SESSION['currentUser'];
        $loginTime = $_SESSION['loginTime'];
        $userType = $_SESSION['userType'];
        $homeLink = "./home.php";
        
        if( $userType == "user"){

            $userDashBoardLink = "./dashboard.user.php";
        }else{
            $dashBoardLink = "./dashboard.restaurant.php";
        }
        
        
    }else{
        $msg = "LOGIN";
        $link = "./login.php";
        $user = "";
        $loginTime = "";
        $homeLink = "./home.php";
    }
    

?>

<div class="header">
    <div class="header-text-box">
        <div class="header-text-box-content">
            Foodshala
        </div>
    </div>
    
    
    <div class="header-action-button-box">
        

    <div class="header-action-button-box-content">
    	<?php
             if($msg == 'LOGIN'){
                echo "<a href=$homeLink>
                        <button class='bt-primary'>HOME</button>
                    </a> ";
                 
                 echo "<a href=$link>
                     <button class='bt-primary'>LOGIN</button>
                 </a> "; 
             }
             else
             {
                 
                 echo $user . "\n";

                 echo "<a href=$homeLink>
                        <button class='bt-primary'>HOME</button>
                    </a> ";
                 
                 if( $userType == "restaurant" ){
                     echo "<a href=$dashBoardLink>
                        <button class='bt-primary'>DASHBOARD</button>
                     </a> ";
                 }else if( $userType = 'user' ){
                    echo "<a href=$userDashBoardLink>
                        <button class='bt-primary'>Your Orders</button>
                    </a> ";
                 }
                 
                 echo "<a href=$link>
                     <button class='bt-primary'>LOGOUT</button>
                 </a> "; 
             }

         ?>
    </div>
    
</div>