
<table class="table table-bordered table-striped table-hover">
	<h1>Room Booking Details</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Room Type</th>
		<th>Check in Date</th>
		<th>Check Out Time</th>
		<th>Check Out Date</th>
		<th>Occupancy</th>
		<th>Order Status</th>
		<th>Confirm Order</th>	
		<th>Cancel Order</th>
	    <th>Total Paid</th>
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from room_booking_details");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['room_type']; ?></td>
		<td><?php echo $res['check_in_date']; ?></td>
		<td><?php echo $res['check_in_time']; ?></td>
		<td><?php echo $res['check_out_date']; ?></td>
		<td><?php echo $res['Occupancy']; ?></td>
		<td><?php echo $res['order_status']; ?></td>
		<td><a style="color:blue" href="dashboard.php?option=Confirm_Order&id=<?php echo $oid;?>">  Update</a></td>
		<td><a style="color:red" href="cancel_order.php?booking_id=<?php echo $oid; ?>">Cancel</a></td>
		
		<td><?php echo $res['payment']; ?></td>
	</tr>
<?php 	
}

?>	
</table>