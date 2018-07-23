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
				<td align="right"><b>Select 4to name  	:	</b></td>
				<td><select name="product_type" required>
					<option>Photo Name</option>

					<?php

						$get_cats = "select * from insert_photo";
						$run_cats = mysqli_query($con, $get_cats);

						while ($row_cats=mysqli_fetch_array($run_cats)) {
							$photo_id = $row_cats['photo_id'];
							$photo_name = $row_cats['photo_name'];

							echo "<option value='$photo_id'>$photo_name</option>";
						}

					?>
				</select></td>

			</tr>
			<tr>
				<td align="center"><b>Photo Name</b></td>
				<td><input type="text" name="4to_name" size="60" required></td>
			</tr>






			<tr>
				<td align="center"><b>Photo image</b></td>
				<td><input type="file" name="4to_image" required></td>
			</tr>

			



			<tr align="center">
				<td colspan="8 "><input type="submit" name="more_4tos" value="Insert Image Now"/></td>
			</tr>
		</table></tr></div>
		</form>

		<div id="footer">hvhj</div>
		</div>

		</div>

</body>
</html>

<?php
	if(isset($_POST['more_4tos']))
	{
		//geting text data
		$product_cat = $_POST['product_cat'];
		$product_type = $_POST['product_type'];

		
		
		$foto_name = $_POST['4to_name'];
	
		//geting image
		$foto_image = $_FILES['4to_image']['name'];
		$foto_image_tmp = $_FILES['4to_image']['tmp_name'];

		move_uploaded_file($foto_image_tmp,"img/$foto_image");
   		 $name = $_POST['product_cat'];
		$nameType = $_POST['product_type'];

	  $more_4tos = "insert into more_4tos(4to_name,4to_image,value) values('$foto_name','$foto_image','$nameType')";

		$insert_pro = mysqli_query($con,$more_4tos);
		if($insert_pro)
		{
			echo "<script> alert ('Photo has bean insert!')</script>";
			echo"<script> windows.open('more_4tos.php','_self')</script>";
		}

	}
?>
