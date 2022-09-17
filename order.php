<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
<div class="container-fluid">
  <h1 class="text-center text-primary">[ Booking Details ]</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:150px;">
               <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Room Type</th>
                    <th>Check In Date</th>
                    <th>Check In Time</th>
                    <th>Check Out Date</th>
                    <th>Occupancy</th>
					<th>Order Status</th>
					<th>Total Paid</th>
					<th>Cancel</th>
				
               </tr>

               <?php 
$sql= mysqli_query($con,"select * from room_booking_details where email='$eid'"); 
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];
?>
<tr>
   <td><?php echo $res['name'];?></td>
   <td><?php echo $res['email'];?></td>
   <td><?php echo $res['phone'];?></td>
   <td><?php echo $res['address'];?></td>
   <td><?php echo $res['contry'];?></td>
   <td><?php echo $res['room_type'];?></td>
   <td><?php echo $res['check_in_date'];?></td>
   <td><?php echo $res['check_in_time'];?></td>
   <td><?php echo $res['check_out_date'];?></td>
   <td><?php echo $res['Occupancy'];?></td>
   <td><?php echo $res['order_status'];?></td>
   <td><?php echo $res['payment'];?></td>
   <td><a style="color:red" href="cancel_order.php?order_id=<?php echo $oid;?>">Cancel</a></td>
 </tr>
<?php 
}   
?>                      
          </table>

    </div>
    </div>
  </div>
<?php
include('footer.php')
?>
</body>
</html>
