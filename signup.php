<?php
require 'common.php';
if (isset($_SESSION['email'])) 
    {   
    header('location: products.php'); 
    }  
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
	        .row-style
	        {
	            margin-top:80px;
	            max-width:800px;
	            margin-left:auto;

	        }
	    </style>
	<title>Sign up 
	</title>
</head>
<body>
	<?php
        require 'header.php';
        ?>
	<div align="center">
		<div class="container" >
		<div class="row row-style" >
			<div class="col-xs-6" >
		<h3>SIGN UP</h3>
		<form action="login_script.php" method="POST">
			<div class=form-group>
				<input type="text" class="form-control" id="name" placeholder="Name" required = "true"><br>
				<input type="text" class="form-control" id="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
				<input type="password" class="form-control" id="password" placeholder="Password" required = "true" pattern=".{6,}"><br>
				<input type="number" class="form-control" id="contact" placeholder="Contact" required = "true" maxlength="10"><br>
				<input type="text" class="form-control" id="city" placeholder="City" required = "true" maxlength="20"><br>
				<input type="text" class="form-control" id="address" placeholder="Address" required = "true" maxlength="30"><br>
				<button class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
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