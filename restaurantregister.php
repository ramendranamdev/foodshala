<html>
    <head>
        
        <title>Foodshala - Restaurant Registration</title>
        
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
        
        <?php include("header.php") ?>
        
        <div class="restaurant-reg-form-container">
            <div class="restaurant-reg-form">
                <form action="./register.php">
                
                <h1 align="center" >Restaurant Registeration Form</h1>
                
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name" class="form-control" required/>
                </div>
                
                <div class="form-group">
                    <input type="email" placeholder="mail@example.com" name="email" class="form-control" required/>
                </div>
                
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" class="form-control" required />
                </div>
                
                <div class="form-group">
                    <input type="text" placeholder="Phone" name="phone" class="form-control" required />
                </div>
                
                <div class="form-group">
                    <input type="radio" name="veg_nonveg" value="veg" required/>
                    <label>Veg</label>
                </div>
                
                <div class="form-group">
                    <input type="radio" name="veg_nonveg" value="Non veg" required/>
                    <label>Non Veg</label>
                </div>
                
                <div class="form-group">
                    <input type="text" name="address" placeholder="Address" class="form-control" required />
                </div>
                
                <div class="form-group">
                    <input type="submit" name="submit" value="Register Your Restaurant" class="form-control" style="width:auto;margin:auto;" />
                </div>
                
                <?php
                    if( isset($_SESSION['restaurantRegistrationErrorMsg']) ){
                        echo $_SESSION['restaurantRegistrationErrorMsg'];  
                        unset($_SESSION['restaurantRegistrationErrorMsg']);
                    }

                    if( isset($_SESSION['restaurantRegistrationSuccessMsg']) ){
                        echo $_SESSION['restaurantRegistrationSuccessMsg'];    
                        unset($_SESSION['restaurantRegistrationSuccessMsg']);
                    }

                ?>
                
            </form>
            </div>
            <div class="restaurant-reg-form-rules-box">
                
                <h1 align="center" > Terms & Condition</h1>
                
            </div>
        </div>
        
        
        
    </body>
    
</html>


