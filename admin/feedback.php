<script>
	function delFeedback(id)
	{
		if(confirm("You want to delete this Feedback ?"))
		{
		window.location.href='delete_feedback.php?id='+id;	
		}
	}
</script>
<table class="table table-striped table-hover">
	<h1>Feedback</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Message</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from feedback");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$name=$res['Name'];
$email=$res['Email'];
$mobile	=$res['Mobile'];
$message=$res['MESSAGE_TEXT'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['Name']; ?></td>
		<td><?php echo $res['Email']; ?></td>
		<td><?php echo $res['Mobile']; ?></td>
		<td><?php echo $res['MESSAGE_TEXT']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>