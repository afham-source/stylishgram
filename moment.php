<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<style>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}	

.wrapper {
	max-width: 100%;
	width: 100%;
	padding: 5px;
	background-color: white;
	height: 100vh;
}

.mom-head {
	color: #8D8D8D;
	font-weight: 500;
	letter-spacing: 2px;
	margin-left: 20px;
	width: 90%;
	margin-top: 20px;

}

.moment-form {
	margin-top: 25px;
	margin-left: 20px;
	width: 90%;
}

.label-form {
	letter-spacing: 2px;
	display: flex;
	flex: 1;

}

.form-input {
	margin-top: 30px;
	width: 90%;
	padding: 10px;
	border: 0;
	border-bottom: 2px solid #28345A;
}

.date-form {
	margin-top: 20px;
	width: 90%; 
	display: flex;
	


	
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

.date-form input[type=text], .date-form input[type=number], .date-form select
{
	border: 0;
	border-bottom: 2px solid #28345A;
	padding: 5px;
	background: transparent;
	margin-left: 0px;

	


}

.date-form #day {
	border: 0;
	border-bottom: 2px solid #28345A;
	width: 30px;
	background: transparent;
	margin-left: 1px;
}


#button-next {
	padding: 15px;
	width: 90%;
	margin-left: 5px;
	background-color: #B20000;
	color: white;
	margin-top: 30px;
	border-radius: 10px;
	outline: none;
	cursor: pointer;
}

.sec-label {
	letter-spacing: 2px;
	display: flex;
	flex: 1;
	margin-top: 50px;
	width: 90%;

}

@media only screen and (max-width: 700px) {
	.wrapper {
		
		
		max-height: 60vh;
		height: 100%;
		
		
		display: flex;
		flex-direction: column;
	}

	#button-next {
		margin-top: 25px;
		margin-bottom: 10px;
		padding: 10px; 

	}

	.label-form, .sec-label {
		
		width: 100%;
	}

	

	.date-form {
		
		width: 100%;
	}

	
}

@media only screen and (max-width: 250px) {

	 .date-form input[type=number], .date-form select, .date-form #day {
		
		text-align: center;
		
		border: 0;
		border-bottom: 2px solid #28345A;
		padding: 5px;
		margin-left: 2px;
		margin-left: auto;
		font-size: small;
	}

	.label-form, .sec-label{
		
		font: small;
	}

	.mom-head {
		margin-left: 0;
		width: 100%;
		font-size: 15px;
	}
	
	

	#day {
		
		width: 20%;
	}


	#year {
		width: 25%;
	}

	#month {
		width: 50%;
	}

	.moment-form {
		width: 100%!important;
		margin-left: 2px;
		font-size: small;
		margin-top: 50px;
	}

	


}
	










</style>
<body>

<div class="wrapper" id="start">
	<p class="mom-head">Select the time and place of your special moment to show your stars.</p>

		<div class="moment-form">
	
		
		<div>
			<label class="label-form">Where did you meet ? </label>
			<input class="form-input" type="text" name="place" id="text" placeholder="New York, NY, USA">
		</div>


		<label class=sec-label>Time of your special moment</label> 
		

		<div class="date-form">
								

       <input id="year"  name="year"  type="number" placeholder="2020" required="" min="1900"
        max="2100" step="1" value="2020">

                                

                                <select id="month" required="" name="month" >
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <script>
                                    (function() {
                                        var options = document.querySelectorAll('#month > option');
                                        for (var i = 0; i < options.length; i++) {
                                            if (options[i].value === 'January') {
                                                options[i].selected = true;
                                            }
                                        }
                                    }());


                                </script>

                                <input id="day" type="numeric"  placeholder="1" required="" min="1" max="31"  value="1" name="day">



                                
          </div>

          <button type="next" id="button-next"  onclick="handleForm()">Next</button>

          <p class="footer">Designed By <a href="www.tresmind.com">Tresmind Solution</a></p>

      </div>

         

                            



	
</div>

<script>
	function handleForm(){
		
		var text = document.getElementById("text").value;
		 var year = document.getElementById("year").value;
		 var day = document.getElementById("day").value;
		 var month = document.getElementById("month").value;
	
	var date = month + '/' + day + '/' + year ;
	
	localStorage.setItem('date',date);
 		
		$(document).ready(function(){
		//set trigger and container variables
		container = $('#content');

			//Load target page into container
			container.load('text' + '.php');

			//stop normal inks behavior
			return false;
		});


	
 </script>

 <script src="script.js"></script>
</body>
</html>