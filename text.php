<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
.text-head {
	color: #8D8D8D;
	font-weight: 500;
	letter-spacing: 2px;
	margin-left: 20px;
	width: 90%;
	margin-top: 20px;
}	

.form {
	margin-top: 100px;
	margin-left: 20px;
}

.form-labels {
	letter-spacing: 2px;
	display: flex;
	flex: 1;
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

.form-input {
	margin-top: 30px;
	width: 70%;
	padding: 10px;
	border: 0;
	border-bottom: 2px solid #28345A;
}

.check-box {
	margin-top: 30px;
	padding: 10px;

}

#button-next {
	padding: 15px;
	width: 90%;
	margin-left: 5px;
	background-color: #B20000;
	color: white;
	margin-top: 20px;
	border-radius: 10px;
	outline: none;
	cursor: pointer;
}

@media all screen (max-width: 750px) {
	.bases-group {
		grid-template-columns: auto auto;
	}
}



</style>

<body>
<div> 

<p class="text-head">Add title and footnote to make it really personal.</p>

<div class="form">


<div>
<label class="form-labels">Write a nice title or leave it empty</label>
<input class="form-input" type="text" id="title" maxlength="12" name="text-display" placeholder="Title for your crystal"/>
</div>

<div>
	
   	<input class="form-input" type="text" id="footnote" name="foot-note" placeholder="Foot note on crystal"/>


</div>

	<button type="next" id="button-next" onclick="handleSubmit()">Next</button>

	<p class="footer">Designed By <a href="www.tresmind.com">Tresmind Solution</a></p>

</div>










</div>

<script>
	function handleSubmit(){
		
			
			
		 document.getElementById("top-title").innerHTML = document.getElementById("title").value;
		 document.getElementById("foot").innerHTML = document.getElementById("footnote").value;

		 $(document).ready(function(){
		//set trigger and container variables
		container = $('#content');

			//Load target page into container
			container.load('design' + '.php');

			//stop normal inks behavior
			return false;
		});

	}
</script>


</body>
</html>