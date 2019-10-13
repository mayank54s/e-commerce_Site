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
        	.row-style
        	{
        		margin-top:80px;
	            max-width:800px;
	            margin-left:auto;
            }
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
	<title>Login Page
	</title>
</head>
<body>
	<?php
        require 'header.php';
        ?>
	<!--Panel-->
	<div class="container" >
		<div class="row row-style" >
			<div class="col-xs-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4 class="panel-title text-center"> </h4>
						<div class="panel-body">
							<p class="text-warning" align="center">Login to make a purchase</p>
							<form method="post" action="login_submit.php">
								<div class=form-group>
									<input type="text" class="form-control" id="email" placeholder="Email"><br>
									<input type="password" class="form-control" id="password" placeholder="Password">
								</div>
							</form>
							<center>
							<button class="btn btn-primary">Submit</button>
						</center><br><br><br>
						</div>
						<div class="panel-footer">Don't have an account? <br>
							<a href="#">Register</a></div>
					</div>
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
