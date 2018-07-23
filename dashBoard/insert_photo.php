<!DOCTYPE html>
<?php
	include("includes/db.php");
	
?>
<html>
<head>
	<title>Insert Photo</title>

	<link rel="stylesheet" type="text/css" href="styles/style.css" media="all"/>

	<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>



</head>
<body>



<form action = "" method = "post" enctype = "multipart/form-data" novalidate>


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
				<li><a href="more_4tos.php">Enter 4tos</a></li>

				</table>
				</td>
				</tr>
			</ul>

		</div>
	<div class="menubar">
			<ul id="menu">


  						<div class="dropdown-content">
   							<a href="#"> Insert New Photo </a>

  						</div>

		</div>
	<div class="content_wrapper">

		<div id="content_area"><tr>



				<table align="center" width="800" border="2" ><tr><td></td>
			</tr>
			
			<tr>
				<td align="center"><b>Category</b></td>
				<td><select name = "product_type" required>
				<option>Wedding</option>
				<option>Birthdays</option>
				<option>Natural</option>
				<option>Poru</option>
				<option>Setiback</option>
				</select>
			</td>
			</tr>

			<tr>
				<td align="center"><b>Photo Name</b></td>
				<td><input type="text" name="photo_name" size="60" required></td>
			</tr>






			<tr>
				<td align="center"><b>Photo image</b></td>
				<td><input type="file" name="photo_image" required></td>
			</tr>

			<tr>
				<td align="center"><b>Photo date</b></td>
				<td><input type="date" name="photo_date" required></td>
			</tr>



			<tr align="center">
				<td colspan="8 "><input type="submit" name="insert_photo" value="Insert Image Now"/></td>
			</tr>
		</table></tr></div>
		</form>

		<div id="footer">
			<tr ><td>
				<li><a href="all_photos_gallery.php">Edit gallery</a></li>
				</td>
			</tr>
		</div>
		</div>

		</div>

</body>
</html>

<?php
	if(isset($_POST['insert_photo']))
	{
		//geting text data
		
		$product_type = $_POST['product_type'];

		$photo_date = $_POST['photo_date'];
		
		$photo_name = $_POST['photo_name'];
	
		//geting image
		$photo_image = $_FILES['photo_image']['name'];
		$photo_image_tmp = $_FILES['photo_image']['tmp_name'];

		move_uploaded_file($photo_image_tmp,"img/$photo_image");

    	
		$nameType = $_POST['product_type'];

	$insert_photo = "insert into insert_photo(photo_date,photo_image,photo_name,value) values('$photo_date','$photo_image','$photo_name','$nameType')";

		$insert_pro = mysqli_query($con,$insert_photo);
		if($insert_pro)
		{
			echo "<script> alert ('Photo has bean insert!')</script>";
			echo"<script> windows.open('insert_photo.php','_self')</script>";
		}

	}
?>

<?php
	if (isset($_GET['edit'])) {
		include("all_photos_gallery.php");
	}
?>
