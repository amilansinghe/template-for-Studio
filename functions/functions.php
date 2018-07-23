<?php
	$con = mysqli_connect("localhost","root","","studio");
	
	function getCats()
	{
		global $con;
		
		$get_cats = "SELECT * FROM category";
		$run_cats = mysqli_query($con, $get_cats);
		while($row_cats = mysqli_fetch_array($run_cats))
		{
			$cat_id = $row_cats['cat_id'];
			$cat_name = $row_cats['cat_name'];
			echo "<li><a href = '#'>$cat_name</a></li>";
			
		}
	}
	
	function getTypes()
	{
		global $con;
		
		$get_type = "SELECT * FROM type";
		$run_type = mysqli_query($con, $get_type);
		while($row_type = mysqli_fetch_array($run_type))
		{
			$type_id = $row_cats['type_id'];
			$type_name = $row_cats['type_name'];
			echo "<li><a href = '#'>$type_name</a></li>";
			
		}
	}

		function getPhoto()
{

	global $con;

	$get_pro="select * from insert_photo WHERE value='Wedding' order by RAND() LIMIT 0,21 ";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pho_id=$row_pro['photo_id'];
				$pho_name=$row_pro['photo_name'];
				$pho_image=$row_pro['photo_image'];
				$pho_date=$row_pro['photo_date'];
				
 

				
echo
"<div id='single_product'>
		<div class='gallery'>
			
				<div class='grid_4'>
					
					<a href = 'dashBoard/img/$pho_image' class='gal_item'>


						<img src='dashBoard/img/$pho_image' width='500' height='350' alt=''>
						<div class='gal_caption'>
					$pho_name
				</div>
						<span class = 'gal_magnify'></spam>
				
					</a>
				
						
			</div>	
		</div>				
						
</div>";
	}
}

		function getPhotoBdy()
{

	global $con;

	$get_pro="select * from insert_photo WHERE value='Birthdays' order by RAND() LIMIT 0,21";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pho_id=$row_pro['photo_id'];
				$pho_name=$row_pro['photo_name'];
				$pho_image=$row_pro['photo_image'];
				$pho_date=$row_pro['photo_date'];
				


				
echo
"	
<div id='single_product'>
		<div class='gallery'>
			
				<div class='grid_4'>
					
					<a href = 'dashBoard/img/$pho_image' class='gal_item'>
						<img src='dashBoard/img/$pho_image' width='280' height='350' alt=''>
						<div class='gal_caption'>
					$pho_name
				</div>
						<span class = 'gal_magnify'></spam>
						
					</a>
				
						
			</div>	
		</div>				
						
</div>";
	}
}

		function getPhotoNatural()
{

	global $con;

	$get_pro="select * from insert_photo WHERE value='Natural' order by RAND() LIMIT 0,21 ";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pho_id=$row_pro['photo_id'];
				$pho_name=$row_pro['photo_name'];
				$pho_image=$row_pro['photo_image'];
				$pho_date=$row_pro['photo_date'];
				
 

				
echo
"<div id='single_product'>
		<div class='gallery'>
			
				<div class='grid_4'>
					
					<a href = 'dashBoard/img/$pho_image' class='gal_item'>
						<img src='dashBoard/img/$pho_image' width='280' height='350' alt=''>
						<div class='gal_caption'>
					$pho_name
				</div>
						<span class = 'gal_magnify'></spam>
						
					</a>
				
						
			</div>	
		</div>				
						
</div>";
	}
}
		function getPhotoPoru()
{

	global $con;

	$get_pro="select * from insert_photo WHERE value='Poru' order by RAND() LIMIT 0,9 ";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pho_id=$row_pro['photo_id'];
				$pho_name=$row_pro['photo_name'];
				$pho_image=$row_pro['photo_image'];
				$pho_date=$row_pro['photo_date'];
				
 

				
echo
"<div id='single_product'>
		<div class='gallery'>
			
				<div class='grid_4'>
					
					<a href = 'dashBoard/img/$pho_image' class='gal_item'>
						<img src='dashBoard/img/$pho_image' width='280' height='350' alt=''>
						<div class='gal_caption'>
					$pho_name
				</div>
						<span class = 'gal_magnify'></spam>
						
					</a>
				
						
			</div>	
		</div>				
						
</div>";
	}
}

		function getPhotoSetiback()
{

	global $con;

	$get_pro="select * from insert_photo WHERE value='Setiback' order by RAND() LIMIT 0,9 ";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pho_id=$row_pro['photo_id'];
				$pho_name=$row_pro['photo_name'];
				$pho_image=$row_pro['photo_image'];
				$pho_date=$row_pro['photo_date'];
				
 

				
echo
"<div id='single_product'>
		<div class='gallery'>
			
				<div class='grid_4'>
					
					<a href = 'dashBoard/img/$pho_image' class='gal_item'>
						<img src='dashBoard/img/$pho_image' width='280' height='350' alt=''>
						<div class='gal_caption'>
					$pho_name
				</div>
						<span class = 'gal_magnify'></spam>
						
					</a>
				
						
			</div>	
		</div>				
						
</div>";
	}
}


function getPhoToHome()
{
	global $con;

	$get_pro="select*from insert_photo_home order by RAND() LIMIT 0,9";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pho_id=$row_pro['photo_id'];
				$pho_name=$row_pro['photo_name'];
				$pho_image=$row_pro['photo_image'];


			echo
"
	<div id='single_product'>
		<div class='gallery'>
			
				<div class='grid_4'>
					
					<a href = 'dashBoard/img/$pho_image' class='gal_item'>
						<img src='dashBoard/img/$pho_image' width='280' height='350' alt=''>
						<div class = 'gal_caption'>$pho_name</div>
						<span class = 'gal_magnify'></spam>
					</a>
				
						
			</div>	
		</div>				
						
</div>" ;
	}
	

}


	function getPackagePhoto()
{

	global $con;

	$get_pro="select*from packages WHERE category='Photography' order by RAND() LIMIT 0,7";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pack_id=$row_pro['pack_id'];
				$pack_name=$row_pro['pack_name'];
				$pack_image=$row_pro['pack_image'];
				
				$pack_discription=$row_pro['pack_discription'];


echo
"<section class='content'>
				
					<div class='row'>
						<div class='grid_11'>
							<div class='blog'>
							<time datetime='2018-01-01'></span></time>
							<img src='dashBoard/img/$pack_image' alt='' class='img_inner fleft'>
							<div class='extra_wrapper'>
							<h3 class='blog_head color1'><a href='#'>$pack_name</a></h3>
							<p>$pack_discription</p>
							<a href='contacts.php' class='btn bt__2'>Call us</a>
						</div>
						</div>
						</div>

</div>
</section>";
	}


}

	function getPackagePro()
{

	global $con;

	$get_pro="select*from packages WHERE category='Product' order by RAND() LIMIT 0,7";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pack_id=$row_pro['pack_id'];
				$pack_name=$row_pro['pack_name'];
				$pack_image=$row_pro['pack_image'];
				
				$pack_discription=$row_pro['pack_discription'];


echo
"<section class='content'>
				
					<div class='row'>
						<div class='grid_11'>
							<div class='blog'>
							<time datetime='2018-01-01'></span></time>
							<img src='dashBoard/img/$pack_image' alt='' class='img_inner fleft'>
							<div class='extra_wrapper'>
							<h3 class='blog_head color1'><a href='#'>$pack_name</a></h3>
							<p>$pack_discription</p>
							<a href='Contact_Photo.php' class='btn bt__2'>Call us</a>
						</div>
						</div>
						</div>

</div>
</section>";
	}


}

function getPhoToMulti()
{
	global $con;

	$get_pro="select*from insert_photo_multimiedia order by RAND() LIMIT 0,7";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$pho_id=$row_pro['photo_id'];
				
				$pho_image=$row_pro['photo_image'];


			echo
"
<section class='content'>
						
				<div id='owl'>
				<div class='item'>
						<img src='dashBoard/img/$pho_image' alt=''>
						</div>
					</div>
			</section>			
						
";
	}
	

}

function getIp(){
	$ip = $_SERVER['REMOTE_ADDR'];

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	}
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	return $ip;
}


		function get4to()
{

	global $con;

	$get_pro="select * from more_4tos  order by RAND() LIMIT 0,21 ";

		$run_pro=mysqli_query($con,$get_pro);

		while($row_pro=mysqli_fetch_array($run_pro))
		{
				$foto_id=$row_pro['4to_id'];
				$foto_name=$row_pro['4to_name'];
				$foto_image=$row_pro['4to_image'];
				$value=$row_pro['value'];
			
 

				
echo
"<div id='single_product'>
		<div class='gallery'>
			
				<div class='grid_4'>
					
					<a href = 'dashBoard/img/$foto_image' class='gal_item'>


						<img src='dashBoard/img/$foto_image' width='500' height='350' alt=''>
						<div class='gal_caption'>
					
				</div>
						<span class = 'gal_magnify'></spam>
					</a>	
					</a>
				
						
			</div>	
		</div>				
						
</div>";
	}
}

?>