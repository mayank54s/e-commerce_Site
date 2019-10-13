<?php
require 'common.php';
if (isset($_SESSION['email'])) 
    {   
    header('location: index.php'); 
    } 
    $user_id = $_SESSION['user_id'];
    $item_ids_string = $_GET['itemsid'];
    $query = "UPDATE users_items SET status='Confirmed' WHERE user_id=" . $user_id . " AND item_id IN (" . $item_ids_string . ") and status='Added to cart'";
    mysqli_query($con, $query) or die($mysqli_error($con));
?>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        	#footer
        	{
        		padding: 10px 0; 
	            background-color: #101010;
	            color:#9d9d9d;
                bottom: 0; 
	            width: 100%; 
	            position: fixed;
	        }
	    </style>
	<title>Setting Page
	</title>
</head>
<body>
	<?php
        require 'header.php';
        ?>
	<div class="container">
		 <div class="jumbotron" align="center" style="margin-top:90px">
                     <?php
                     $item_id = $_GET["id"];
                     ?>
		 	<h1> Your order is confirmed</h1>
		 	<p>Thank you for shopping with us. <a href="product.php">Click here </a>to purchase any other item. </p>
		 </div>
		</div>
	</div>
<div id="footer">
	<?php
        require 'footer.php';
        ?>
        </div>
</body>
</html>
