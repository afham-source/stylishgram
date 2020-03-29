<?php require_once('inc/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>



.head-des {
	color: #8D8D8D;
	font-weight: 500;
	letter-spacing: 2px;
	
	width: 90%;
	margin-top: 10px;
}

.bases-group {
	display: grid;
	grid-template-columns: 2fr 2fr 3fr;
	grid-gap: 5px;
	margin-left: 5px;
	width: 80%;


}

.base-items {
	width: 100px;
	height: 100px;
	margin-top: 20px;
	border: 1px solid #cacaca;
	box-shadow: 10px;
	padding: 5px;
	border-radius: 10px;
	cursor: pointer;
	

}

.footer {
	font-size: 12px;
	font-weight: 500;
	color: #B20000;
	text-align: center;
	width: 100%;
	margin-top: 30px;
	

}

.footer a {
	text-decoration: none;
}

#button-next {
	padding: 15px;
	width: 90%;
	margin-left: 5px;
	background-color: #B20000;
	color: white;
	margin-top: 40px;
	border-radius: 10px;
	outline: none;
	cursor: pointer;
}

.main-detail {
	margin-left: 10px;
}

.bases-img {
	width: 90px;
	height: 90px;
}



.base-title {
	padding: 5px;
	font-weight: 400;
	font-size: 14px;
	text-align: center;

}

.base-size {

	margin-top: 50px;
	margin-left: 5px;
}

#size-list {
	padding: 10px;
	width: 80%;

}

@media only screen and (max-width: 800px){
	.bases-group {
		grid-template-columns: auto auto;
	}

}

@media only screen and (max-width: 700px) {
	.head-des {
		margin-top: 10px;
	}

	.bases-group {
		justify-content: space-around;

		}

		#button-next {
			margin-left: 5%;
			width: 90%;
		}
}




</style>

<body>
<div class="main-detail"> 

<p class="head-des">Select stand/base design the choose the size:</p>

<div class="bases-group">

<?php 
                   $script = "document.getElementById('dynamic-img').src='Images/rwood.png'";
				   $get_products = "select * from design LIMIT 0,6";
				  
				   $run_products = mysqli_query($con,$get_products);
				  
				  while($row_products=mysqli_fetch_array($run_products)){
					  
					  $pro_id = $row_products['id'];
					  
					  $c_name = $row_products['c_name'];
					  
					  $c_img = $row_products['c_img'];

					  $b_img = $row_products['b_img'];
					  
		echo  "	 
	<div class='base-items active'>
		<img src='Images/$b_img' class='bases-img' onclick=document.getElementById('dynamic-img').src='Images/$c_img'>
		<p class='base-title'> $c_name</p>
	</div>

	
";
				  }
?>

<!-- <div class="base-items">
		<img src="Images/2.png" class="bases-img" onclick="document.getElementById('dynamic-img').src = 'Images/rled.png'; document.getElementById('some').src = 'Images/rled.png'">
		<p class="base-title">LED Crystal</p>
	</div>

	<div class="base-items">
		<img src="Images/3.png" class="bases-img" onclick="document.getElementById('dynamic-img').src = 'Images/rcrystal.png'; document.getElementById('some').src = 'Images/rcrystal.png'">
		<p class="base-title">Crystal</p>
	</div>

	<div class="base-items">
		<img src="Images/4.png" class="bases-img" onclick="document.getElementById('dynamic-img').src = 'Images/rledbase.png'; document.getElementById('some').src = 'Images/rledbase.png'">
		<p class="base-title">LED Base</p>
	</div>

	<div class="base-items">
		<img src="Images/5.png" class="bases-img" onclick="document.getElementById('dynamic-img').src = 'Images/rgolden.png'; document.getElementById('some').src = 'Images/rgolden.png'">
		<p class="base-title">Golden Base</p>
	</div>

	<div class="base-items">
		<img src="Images/6.png" class="bases-img" onclick="document.getElementById('dynamic-img').src = 'Images/rsilver.png'; document.getElementById('some').src = 'Images/rsilver.png'">
		<p class="base-title">Silver Base</p>
	</div> -->
</div>

<div class="base-size">
	<label class="head-des"> Select Base Size</label>

<select id="size-list" name="size-list">
	<option>60mm</option>
	<option >80mm</option>
	<option >100mm</option>
</select>

</div>




<button type="next" id="button-next">Add to Cart</button>

<p class="footer">Designed By <a href="www.tresmind.com">Tresmind Solution</a></p>



</div>

	<script src="script.js"></script>
</body>
</html>