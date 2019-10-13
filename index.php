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
        	
#banner_image
{
	padding-top: 75px;  
	padding-bottom: 50px; 
	text-align: center; 
	color: #f8f8f8;
	background: url("intro-bg_1.jpg") no-repeat center center;     
	background-size: cover; 
}
#banner_content
{
	position: relative; 
	padding-top: 6%; 
	padding-bottom: 6%;
	margin-top: 12%; 
	margin-bottom: 12%; 
	background-color: rgba(0, 0, 0, 0.7); 
	max-width: 660px; 
}
.containerimg
{
	  width:90%;     
	  margin:auto;     
	  overflow:hidden; 
}
.item
{
	width:30%;     
	display: block;     
	padding: 4px;     
	margin-bottom: 20px;     
	line-height: 1.42857143;     
	background-color: #fff;     
	border: 1px solid #ddd;     
	border-radius: 4px;     
	float:left;     
	margin-left:1%; 
}
.caption
{
	color:#000;     
	padding:0px 10px 10px;     
	font-weight: bold;     
	text-align: center; 
}
.thumbnail
{
	display: block;     
	max-width: 100%;     
	height: auto; 
}
#footer
{
	 padding: 10px 0; 
	 background-color: #101010;
	 color:#9d9d9d;
     bottom: 0; 
	 width: 100%; 
}
        </style>
        <title>Index</title>
</head>
<body>
	<?php
        require 'header.php';
        ?>
	<div id="banner_image">
		<div class="container">
			<center>
			<div id="banner_content">
				<h1> We sell lifestyle</h1>
					<p>Flat 40% OFF on premium brands </p>
				<a href="product.php"><button class="btn btn-danger btn-lg active">Shop Now</button></a><!--link the page product-->
			</div>
		</center>
		</div>
	</div>
	<br>
	<div class="containerimg">
		<div class="item">
				<img src="1.jpg" class="thumbnail">
				<div class="caption">
					<h2>Camera</h2>
					<p>Choose among the best available in the world.</p>
				</div>
		</div>
		<div class="item">
				<img src="7.jpg" class="thumbnail">
				<div class="caption">
					<h2>Watches</h2>
					<p>Origianl watches from the best brands.</p>
				</div>
		</div>
		<div class="item">
				<img src="8.jpg" class="thumbnail">
				<div class="caption">
					<h2>Shirts</h2>
					<p>Our exclusive collection of shirts.</p>
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