<!DOCTYPE html>
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
    
	    <!-- Data Tables -->
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/af-2.3.4/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/fh-3.1.6/r-2.2.3/rg-1.1.1/datatables.min.css"/>
	     
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/af-2.3.4/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/fh-3.1.6/r-2.2.3/rg-1.1.1/datatables.min.js"></script>

	    <!-- Data Tables -->
    </head>
<body>
	<?php include('./header.php') ?>

	<?php include('./scripts/user-orders.php'); ?>


        
    <script>
    
        $(document).ready(function(){
            $('#example').DataTable();
        });
        
    </script>
    

</body>
</html>