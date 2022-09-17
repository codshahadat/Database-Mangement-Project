<?php 
$oid=$_GET['id'];
$sql=mysqli_query($con,"select * from room_booking_details where id='$oid'");
$res=mysqli_fetch_assoc($sql);
extract($_REQUEST);

if(isset($update))
{
mysqli_query($con,"update room_booking_details set order_status='$order_status',payment='$payment' where id='$oid' ");
header('location:dashboard.php?option=booking_details');
}

?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered table-striped table-hover">
	<h1>Confirmation of Order</h1><hr>
	<tr style="height:40">
		<th>Order Status</th>
		<td><select name="order_status" class="form-control"required>
              <option>Confirmed</option>
              <option>Pending</option>
              <option>Not Available</option>
            </select>
		</td>
	</tr>
	<tr>	
		<th>Total Price</th>
		<td><input type="text" name="payment" class="form-control"required/></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update Order Status" name="update"required/>
		</td>
	</tr>
</table> 
</form>