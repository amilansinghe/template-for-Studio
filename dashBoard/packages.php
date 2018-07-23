 <!DOCTYPE html>

<?php
	include("includes/db.php");
?>

<html>
<head>
	<title>Insert Package</title>

	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>

	

</head>
<body>


<form action = "packages.php" method = "post" enctype = "multipart/form-data">




<div class="main_wrapper">

		<marquee behavior="scroll" direction="right">
			<img id="logo" src="img/logo.jpg" height="100px" width="200px" />
		</marquee>
		<div id="sidebar">
			<div id="sidebar_title">Editings</div>
			<ul id="cats">
			<table>
			<tr><td>
				<li><a href="insert_photo.php">Edit gallery</a></li>
				<li><a href="packages.php">Edit Packages</a></li>
				<li><a href="insert_photo_home.php">Edit Home Gallery</a></li>
				<li><a href="insert_photo_multimiedia.php">Edit Multimedia Gallery</a></li>


				</table>
				</td>
				</tr>
			</ul>

		</div>
	<div class="menubar">
			<ul id="menu">


  						<div class="dropdown-content">
   							<a href="#"> Insert New Package </a>

  						</div>
				</div>
		</div>
	<div class="content_wrapper">

		<div id="content_area"><tr>



				<table align="center" width="800" border="2" ><tr><td></td>
			</tr>
			<tr>
				<td align="center"><b>Photography / Product</b></td>
				<td><select name = "product_cat" required>
				<option>Photography</option>
				<option>Product</option>


				</select></td>
			</tr>
			
			<tr>
				<td align="center"><b>Package NO</b></td>
				<td><input type="text" name="pack_NO"></td>
			</tr>

			<tr>
				<td align="center"><b>Package Name</b></td>
				<td><input type="text" name="pack_name" size="60" required></td>
			</tr>






			<tr>
				<td align="center"><b>Package image</b></td>
				<td><input type="file" name="pack_image" required></td>
			</tr>

			<tr>
				<td align="center"><b>Pack date</b></td>
				<td><input type="date" name="pack_date" required></td>
			</tr>

			<tr>
				<td align="center"><b>Package Description</b></td>
				<td><textarea name = "pack_discription" cols="20" rows="10" required></textarea></td>

			</tr>

			<tr align="center">
				<td colspan="8 "><input type="submit" name="packages" value="Insert package Now"/></td>
			</tr>
		</table></tr></div>
		</form>

		<div id="footer">hvhj</div>
		</div>

		</div>

</body>
</html>

<?php
	if(isset($_POST['packages']))
	{
		//geting text data
		$product_cat = $_POST['product_cat'];
		

		$pack_date = $_POST['pack_date'];
		$pack_NO = $_POST['pack_NO'];
		$pack_discription = $_POST['pack_discription'];
		$pack_name = $_POST['pack_name'];
	
		//geting image
		$pack_image = $_FILES['pack_image']['name'];
		$pack_image_tmp = $_FILES['pack_image']['tmp_name'];

		move_uploaded_file($pack_image_tmp,"img/$pack_image");

    $name = $_POST['product_cat'];
		
	 $packages = "insert into packages(pack_NO,pack_name,pack_discription,pack_image,pack_date,category) values('$pack_NO','$pack_name','$pack_discription','$pack_image','$pack_date','$name')";

		$insert_pro = mysqli_query($con,$packages);
		if($insert_pro)
		{
			echo "<script> alert ('Photo has bean insert!')</script>";
			echo"<script> windows.open('packages.php','_self')</script>";
		}
		

	}
?>
