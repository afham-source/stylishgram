<?php require_once('inc/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>StylishGram</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
  
  <script>
	$(document).ready(function(){
		//set trigger and container variables
		var trigger = $('#menu ul li a'),
		container = $('#content');

		//fire on click
		trigger.on('click',function() {
			var $this = $(this),
			target = $this.data('target');

			//Load target page into container
			container.load(target + '.php');

			//stop normal inks behavior
			return false;
		});


	});

	
</script>
</head>
<body onload="myFunction()">
	

<?php 

$get_crystal = "select * from main";

$run_crystal = mysqli_query($con,$get_crystal);

while($row_crystal=mysqli_fetch_array($run_crystal)){

	$crystal_image = $row_crystal['crystal_img'];
}
?>

 <div class="full-box">

 	<div id="loading">

 	 </div>
 	


 	<div class="frame">

 		

 		<div class="main-crystal">
 			<!-- <p id="top-title">Your Text Here</p>
 			<p id="foot">Foot Note</p> -->
 			<img id="dynamic-img" src="Images/<?php echo $crystal_image; ?>" class="crystal"/>
 			<!-- <img id="zoom-btn" src="Images/zoom-icon-plus.svg" href="#myModal" data-toggle="modal" /> -->		
 		</div>

 		<div id="canvas"> 

 			<?php
 			   require('solar.php');

 			 ?>
 		</div>

 		

 		<!-- <div class="modal fade bd-example-modal-lg show" id="myModal" role="dialog" style="width: 100%;" >
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" >
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="dynamic-content">
				<img id='some' src="Images/right.png" class="zoom-crystal img-fluid" alt=""/>
				<div id="zoom-canvas"> 

				</div>

					
                </div>
            </div>
       </div>
</div>

 -->
 	</div> 



 	<div class="input-form">
 		<div id="menu"> 
 			<ul>

 			<li>
 			<a href="#" data-target="moment">Moment</a>	
 			</li>

 			<li>
 			<a href="#" data-target="text">Text</a>	
 			
 			</li>

 			<li>
 			<a href="#" data-target="design">Design</a>	
 			</li>


 			</ul>
 		</div>
 		
 		<div id="content">
 			<?php include('moment.php'); ?>


 			
 		</div>

 	</div>

 	





 </div>




<script>
	var preloader = document.getElementById('loading');

function myFunction(){
	preloader.style.display = 'none';
}

</script>

<script type="text/javascript" src="script.js"></script>
</body>
</html>