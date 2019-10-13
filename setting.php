<?php
require 'common.php';
if (isset($_SESSION['email'])) 
    {   
    header('location: index.php'); 
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
	<title>Setting Page
	</title>
</head>
<body>
	<?php
        require 'header.php';
        ?>
	<div>
		<div class="container" >
		<div class="row row-style" >
			<div class="col-xs-6" >
		<h3>Change Password</h3>
		<form method="post" action="Settings_script.php">
			<div class=form-group>
				<input type="password" class="form-control" id="old_password" placeholder="Old Password"><br>
				<input type="password" class="form-control" id="new_password" placeholder="New Password"><br>
				<input type="password" class="form-control" id="retypepassword" placeholder="Re-type New Password"><br>
				<button class="btn btn-primary">Change</button>
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