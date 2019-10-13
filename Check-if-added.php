<?php
function Check_if_added($item_id)
{
    require 'common.php';
    $select_query="SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart' ";
    $select_query_result=  mysqli_query($con,$select_query) or die(mysqli_error($con));
    if (mysqli_num_rows($select_query_result) > 1)
    {
     return 1;}
    else {
        return 0;
    }
}
?>




