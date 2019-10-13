<?php
require 'common.php'; 
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
	<title>Cart Page
	</title>
</head>
<body>
	<?php
        require 'header.php';
        ?>
<!--table-->
  <div class="container">
  	<div class="table-responsive">
	 <table class="table table-border" style="margin-top:80px" >
		<tr>
			<th>Item Number</th>
			<th>Item Name</th>
			<th>Price</th>
			<th>     </th>
		</tr>
                <?php
                $user_id=mysqli_insert_id($con);
                $select_query= 'select * from user_product inner joint item ON user_product.id=item_detail.id';
                $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                $num=mysqli_num_row($select_query_result);
               // $price_query='select item_number, item_name, price from item_detail where id IN (select id from user_product)';
                //$select_result = mysqli_query($con, $price_query) or die(mysqli_error($con));
                $sum=0;
                $row = mysqli_fetch_array($select_query_result);
                if(mysqli_num_row($select_query_result)==0)
                {
                    echo  "Add items to the cart first!";
                }
                else
                {
                    while($num--)
                    {
                        $sum=$sum+$row['price'];
                        echo $row['item_number']."emsp";
                        echo $row['item_name']."emsp";
                        echo $row['price'] . "<br/>";
                         echo "<a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> 'Remove'</a>" ;
                        
                        
                        
                    }
                    }
                
		?>
		<tr>
			<td></td>
			<td>Total</td>
			<td>Rs <?php
                echo '$sum';
                ?>/-</td>
			<td><a href="success.php" method="get" id="anch"><button class="btn btn-primary">Confirm Order</button></a></td>
		</tr>
	</table>
</div>
</div>

<div id="footer">
	<?php
        require 'footer.php';
        ?>
        </div>
</body>
</html>
