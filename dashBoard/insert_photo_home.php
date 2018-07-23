
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

	

<form action = "insert_photo_home.php" method = "post" enctype = "multipart/form-data" novalidate>			
			
	
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
   							<a href="#"> Insert New Photo to Home page </a>
    						
  						</div>
						
		</div>
	<div class="content_wrapper">
	
		<div id="content_area"><tr>
		
			
		
				<table align="center" width="800" border="2" ><tr><td></td>
			</tr>
			
			
			<tr>
				<td align="center"><b>Photo Name</b></td>
				<td><input type="text" name="photo_name" size="60" required></td>
			</tr>
			
			
			
			
			
			
			<tr>
				<td align="center"><b>Photo image</b></td>
				<td><input type="file" name="photo_image" required></td>
			</tr>
			
			
			
			
			<tr align="center">
				<td colspan="8 "><input type="submit" name="insert_photo_home" value="Insert Image Now"/></td>
			</tr>
		</table></tr></div>
		</form>
		
		<div id="footer">hvhj</div>
		</div>

		</div>
	
</body>
</html>

<?php
	if(isset($_POST['insert_photo_home']))
	{
		//geting text data
		$product_cat = $_POST['product_cat'];
		$product_type = $_POST['product_type'];
		
		
		$photo_name = $_POST['photo_name'];
		//geting image
		$photo_image = $_FILES['photo_image']['name'];
		$photo_image_tmp = $_FILES['photo_image']['tmp_name'];
		
		move_uploaded_file($photo_image_tmp,"img/$photo_image");
		

		$insert_photo_home = "insert into insert_photo_home(photo_image,photo_name) values('$photo_image','$photo_name')";
		
		$insert_pro = mysqli_query($con,$insert_photo_home);
		if($insert_pro)
		{
			echo "<script> alert ('Photo has bean insert!')</script>";
			echo"<script> windows.open('insert_photo_home.php','_self')</script>";
		}
		
	}
?>