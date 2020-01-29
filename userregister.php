<html>
    <head>
        <title>Foodshala - Home</title>
        <link rel="stylesheet" type="text/css" href="style/style.css" />
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
        
        <?php include('./header.php'); ?>
        
        <div class="user-registration-page">
            <center><h1 style="font-family:monospace;">User Registeration Form</h1></center>
            
            <div class="user-registration-form">
                <form method="get" action="./register.php" name="userform">
                    
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Enter Full Name" class="form-control" required/>
                    </div>
                    
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control"  required />
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="phone" placeholder="Phone" class="form-control"  required />
                    </div>
                    
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control"  required />
                    </div>
                    
                    <div class="form-group"> 
                        <input type="text" name="address" placeholder="Address" class="form-control"  required/>
                    </div>
                    <center>
                    <input type="submit" value="userregister" name="submit" class="form-control btn btn-success" >
                    </center>
                    
                    <?php
                        if( isset($_SESSION['userRegistrationErrorMsg']) ){
                            echo $_SESSION['userRegistrationErrorMsg'];  
                            unset($_SESSION['userRegistrationErrorMsg']);
                        }
                        
                        if( isset($_SESSION['successmsg']) ){
                            echo $_SESSION['successmsg'];    
                            unset($_SESSION['successmsg']);
                        }
                        
                    ?>
                    
                </form>
            </div>
            
        </div>
        
<!--
        
        
        <br><br>
        <div class="user-registration-form">
            
            <form method="get" action="./register.php" name="userform" >

                <label for="name">Name</label>
                <input type="text" name="name" placeholder="Full Name" required/>
                <br>

                <label for="Password">Password</label>

                <input type="password" name="password" placeholder="Password" required/>
                <br>

                <label for="phone">Phone</label>
                <input type="phone" name="phone" placeholder="Phone" required />
                <br>

                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required/>
                <br>

                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Address" />
                <br>

                <input type="submit" value="userregister" name="submit">

            </form>
            
            
            
            
        </div>
-->
    </body>
    
</html>


