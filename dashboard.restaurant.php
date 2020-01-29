<?php
    session_start();
    if( isset( $_SESSION['login'] ) ){
        if( !($_SESSION['userType'] == "restaurant") )
        {
            header('location: home.php');
        }
    }else{
        header('location: ./login.php');
    }
?>

<!DOCTYPE html>
<html>
<head>

	<title>Foodshala - Restaurant Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/af-2.3.4/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/fh-3.1.6/r-2.2.3/rg-1.1.1/datatables.min.css"/>
     
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/af-2.3.4/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/fh-3.1.6/r-2.2.3/rg-1.1.1/datatables.min.js"></script>

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="style/dataTables.bootstrap.min.css"> -->
    
</head>

<body>

    <div class="rest-dash-menu">
        
        <div class="rest-dash-menu-item">
            <a href="./home.php">HOME</a>
        </div>
<!--        <div class="rest-dash-menu-item">ORDERS</div>-->
        <div class="rest-dash-menu-item" style="float:right;">
            <a href="./logout.php" >Logout</a>
        </div>
    </div>
	
    <div class="rest-dash-container">
        <?php include('./scripts/restaurant-orders.php'); ?>
    </div>

    <div class="rest-dash-container">
        
        <div class="rest-dash-add-item-container">
            
            <button id="add-new-item" class="btn-primary" >SHOW/HIDE - New Item Form</button>
            
            <br>
            
            <div class="rest-dash-add-item-box">
                <div align="center">New Item Detail Form</div>
                
                <div>
                    <?php include('./scripts/add-new-item.php') ?>
                </div>
                
            </div>
        
        </div> 
        
        <div class="rest-dash-current-menu">
            
            <button id="show-menu-item" class="btn-primary" >SHOW/HIDE - Menu</button>
            
            <div class="rest-dash-current-menu-child">
                <div>
                    <?php include('./scripts/restaurant-get-menu.php') ?>
                </div>
            </div>
            
        </div>
        
        <div class="rest-dash-current-orders">
            Your current orders will display here
        </div>
        
    </div>
        
    <script>
    
        $(document).ready(function(){
        
            $("#show-menu-item").click(function(){
                $(".rest-dash-current-menu-child").slideToggle();
            })
            
            $("#add-new-item").click(function(){
                $(".rest-dash-add-item-box").slideToggle();
            })

            $('#example').DataTable();
        
        });
        
        function submitNewItemForm(){
            var form = document.getElementsByName('new-item-form')[0];
            form.submit();
            form.reset();
            return false;
        }
        
        
        
    </script>
    
</body>
</html>