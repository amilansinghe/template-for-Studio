<!DOCTYPE html>
<html>
<head>
	<title>Edit Photos</title>
</head>
<body bgcolor="skyblue">
	<table width="795" align="center" bgcolor="orange">
		<tr>
			<td colspan="6"><h2>View all Photos</h2></td>
		</tr>
		<tr align="center" bgcolor="skyblue">
			<th>NO</th>
			<th>Name</th>
			<th>Image</th>
			<th>Date</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>

		<?php
			include("includes/db.php");
			$get_pro = "select * from insert_photo";
			$run_pro = mysqli_query($con,$get_pro);
			$i = 0;

			while ($row_pro = mysqli_fetch_array($run_pro)) {
				$pho_id = $row_pro['photo_id'];
				$pho_name = $row_pro['photo_name'];
				$pho_image = $row_pro['photo_image'];
				$pho_date = $row_pro['photo_date'];
				$i++;
			}
		?>

		<tr align="center">
			<td><?php echo $i;?></td>
			<td><?php echo $pho_name;?></td>
			<td><img src="img/<?php echo $pho_image;?>" width="100" height="100"/></td>
			<td><?php echo $pho_date;?></td>
			<td><a href="edit_pho.php">Edit</a></td>
			<td><a href="delete_pho.php">Delete</a></td>
		</tr>

	</table>
</body>
</html>