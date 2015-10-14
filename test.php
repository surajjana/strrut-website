<!DOCTYPE html>
<html>
<head>
	<title>BStrrut | Home</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">


	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
	
	<script type="text/javascript" src="js/jquery-min.js"></script>
	<!--<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>-->

	<script type="text/javascript">
		$(document).ready(function(){

			/* ======================================================================= */

			/* Variables */

			var fadeTime = 500;

			var count = 1, new_c = 0;

			var wur, pob, nob, pan, btype, stkhldrs, trnovr,noe;

			/* ======================================================================= */


			/* Button event handelers */

			$("#btn1").on('click',function(){
				$("#id1").fadeOut(fadeTime, function() {
				  $("id1").css("display", "none");
				  $("id2").css("display", "block");	
				  $("#id2").fadeIn(fadeTime);
				});
			});

			$("#btn2").on('click',function(){
				count = count - 1;
				$("#id2").fadeOut(fadeTime, function() {
				  $("id2").css("display", "none");
				  $("id1").css("display", "block");	
				  $("#id1").fadeIn(fadeTime);
				});
			});

			$("#btn3").on('click',function(){
				$("#id2").fadeOut(fadeTime, function() {
				  $("id2").css("display", "none");
				  $("id3").css("display", "block");	
				  $("#id3").fadeIn(fadeTime);
				});
			});

			$("#btn4").on('click',function(){
				count = count - 1;
				$("#id3").fadeOut(fadeTime, function() {
				  $("id3").css("display", "none");
				  $("id2").css("display", "block");	
				  $("#id2").fadeIn(fadeTime);
				});
				nob = $( "#nob option:selected" ).text();
				console.log(nob);
			});

			$("#btn5").on('click',function(){
				$("#id3").fadeOut(fadeTime, function() {
				  $("id3").css("display", "none");
				  $("id4").css("display", "block");	
				  $("#id4").fadeIn(fadeTime);
				});
				nob = $( "#nob option:selected" ).text();
				console.log(nob);
			});

			$("#btn6").on('click',function(){
				count = count - 1;
				$("#id4").fadeOut(fadeTime, function() {
				  $("id4").css("display", "none");
				  $("id3").css("display", "block");	
				  $("#id3").fadeIn(fadeTime);
				});
			});

			$("#btn7").on('click',function(){
				$("#id4").fadeOut(fadeTime, function() {
				  $("id4").css("display", "none");
				  $("id5").css("display", "block");	
				  $("#id5").fadeIn(fadeTime);
				});
			});

			$("#btn8").on('click',function(){
				count = count - 1;
				$("#id5").fadeOut(fadeTime, function() {
				  $("id5").css("display", "none");
				  $("id4").css("display", "block");	
				  $("#id4").fadeIn(fadeTime);
				});
			});

			$("#btn9").on('click',function(){
				$("#id5").fadeOut(fadeTime, function() {
				  $("id5").css("display", "none");
				  $("id6").css("display", "block");	
				  $("#id6").fadeIn(fadeTime);
				});
			});

			$("#btn10").on('click',function(){
				count = count - 1;
				$("#id6").fadeOut(fadeTime, function() {
				  $("id6").css("display", "none");
				  $("id5").css("display", "block");	
				  $("#id5").fadeIn(fadeTime);
				});
			});

			$("#btn11").on('click',function(){
				$("#id6").fadeOut(fadeTime, function() {
				  $("id6").css("display", "none");
				  $("id7").css("display", "block");	
				  $("#id7").fadeIn(fadeTime);
				});
			});

			$("#btn12").on('click',function(){
				count = count - 1;
				$("#id7").fadeOut(fadeTime, function() {
				  $("id7").css("display", "none");
				  $("id6").css("display", "block");	
				  $("#id6").fadeIn(fadeTime);
				});
			});

			$("#btn13").on('click',function(){
				$("#id7").fadeOut(fadeTime, function() {
				  $("id7").css("display", "none");
				  $("id8").css("display", "block");	
				  $("#id8").fadeIn(fadeTime);
				});
			});

			$("#btn14").on('click',function(){
				count = count - 1;
				$("#id8").fadeOut(fadeTime, function() {
				  $("id8").css("display", "none");
				  $("id7").css("display", "block");	
				  $("#id7").fadeIn(fadeTime);
				});
			});

			/* ============================================================================== */

			$("#txt2").on("keyup change", function() {
			   value = this.value;
			   console.log(value);
			});

			/* ============================================================================== */

			/* Data event handelers */

			$("input:radio[name=biz]").click(function() {
				$("input:radio[name=entr]").prop('checked', false);
			    wur = "biz";
			    console.log(wur);
			});

			$("input:radio[name=entr]").click(function() {
				$("input:radio[name=biz]").prop('checked', false);
			    wur = "entr";
			    console.log(wur);
			});

			/* ============================================================================== */

			/* Data transmission */
			$("#btn15").on('click',function(){
				var url = "http://localhost/strrut/test_post.php?wur="+wur+"&nob="+nob;
				console.log(url);
				$(location).attr('href',url);
			});

			/* ======================================================================= */

			$(document).keydown(function(e) {
			    switch(e.which) {
			        case 37: // left
			        	console.log("Left Arrow!!");
			        	$("#id"+new_c).fadeOut(fadeTime, function() {
						  $("id"+new_c).css("display", "none");
						  $("id"+count).css("display", "block");	
						  $("#id"+count).fadeIn(fadeTime);
						});
			        break;

			        case 38: // up
			        	console.log("Up Arrow!!");
			        break;

			        case 39: // right
			        {
			        	console.log("Right Arrow!!");
			        	new_c = count + 1;
						$("#id"+count).fadeOut(fadeTime, function() {
						  $("id"+count).css("display", "none");
						  $("id"+new_c).css("display", "block");	
						  $("#id"+new_c).fadeIn(fadeTime);
						});
					}
			        break;

			        case 40: // down
			        	console.log("Down Arrow!!");
			        break;

			        case 13 : //enter key
			        {
			        	console.log(count);
			        	if(count == 8)
			        		break;
			        	else
			        	{	
				        	new_c = count + 1;
							$("#id"+count).fadeOut(fadeTime, function() {
							  $("id"+count).css("display", "none");
							  $("id"+new_c).css("display", "block");	
							  $("#id"+new_c).fadeIn(fadeTime);
							});
							count = count + 1;
						}
					}
			        break;

			        default: return; // exit this handler for other keys
			    }
			    e.preventDefault(); // prevent the default action (scroll / move caret)
			});

		});
	</script>

</head>
<body>
	<center><h1>BStrrut</h1></center>
	<center><h6>Dont panic! Organise</h6></center>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<center><div id="id1" style="disply: block;">
		<h1>Who are you?</h1>
		<br />
		<input type="radio" id="biz" name="biz" />Businessman?
		<input type="radio" id="entr" name="entr" />Want to be an entrepreneur?
		<br />
		<br />
		<center>
			<a href="#" id="btn1">Next</a>
		</center>
	</div></center>
	<center><div id="id2" style="display: none;">
		<h1>Place of business?</h1>
		<br />
		<input type="text" id="addr" placeholder="Address" />
		<br />
		<input type="text" id="pincode" placeholder="Pincode">
		<br />
		<br />
		<center>
			<a href="#" id="btn2">Back</a>
			<a href="#" id="btn3">Next</a>
		</center>
	</div></center>
	<center><div id="id3" style="display: none;">
		<h1>What is your nature of business?</h1>
		<br />
		<!--<input type="text" id="nob" placeholder="Nature Of Business" />-->
		<select id="nob" name="nob">
			<option>Not Selected</option>
			<option value="trading">Trading</option>
			<option value="manufacturing">Manufacturing</option>
			<option value="service">Service</option>
			<option value="wrks_contractor">Works Contractor</option>
		</select>
		<br />
		<br />
		<center>
			<a href="#" id="btn4">Back</a>
			<a href="#" id="btn5">Next</a>
		</center>
	</div></center>
	<center><div id="id4" style="display: none;">
		<h1>What is your PAN?</h1>
		<br />
		<input type="text" id="pan" placeholder="PAN" />
		<br />
		<br />
		<center>
			<a href="#" id="btn6">Back</a>
			<a href="#" id="btn7">Next</a>
		</center>
	</div></center>
	<center><div id="id5" style="display: none;">
		<h1>What do you want to call yourself?</h1>
		<br />
		<!--<input type="text" id="btype" placeholder="Business Type" />-->

		<select id="btype" name="btype">
			<option>Not Selected</option>
			<option>Sole Proprietor</option>
			<option>HUF</option>
			<option>Company</option>
			<option>A partnership firm</option>
			<option>Association of people</option>
			<option>Not for profit organisation</option>
		</select>
		<br />
		<br />
		<center>
			<a href="#" id="btn8">Back</a>
			<a href="#" id="btn9">Next</a>
		</center>
	</div></center>
	<center><div id="id6" style="display: none;">
		<h1>What are the number of persons sharing the risk and reward of your business?</h1>
		<br />
		<!--<input type="text" id="stkhldrs" placeholder="No. Of Stakeholders" />-->
		<select id="stkhldrs" name="stkhldrs">
			<option>Not Selected</option>
			<option>Solo</option>
			<option>2 to 10</option>
			<option>10 to 20</option>
			<option>20 to 50</option>
			<option>&gt50</option>
		</select>
		<br />
		<br />
		<center>
			<a href="#" id="btn10">Back</a>
			<a href="#" id="btn11">Next</a>
		</center>
	</div></center>
	<center><div id="id7" style="display: none;">
		<h1>What is your approximate annual turnover?</h1>
		<br />
		<!--<input type="text" id="trnovr" placeholder="Expected Turnover" />-->
		<select id="trnovr" name="trnovr">
			<option>Not Selected</option>
			<option>&lt7.5</option>
			<option>7.5 to 25</option>
			<option>25 to 100</option>
			<option>100 to 500</option>
			<option>500 to 2000</option>
			<option>2000 to 10000</option>
			<option>&gt10000</option>
		</select>
		<br />
		<br />
		<center>
			<a href="#" id="btn12">Back</a>
			<a href="#" id="btn13">Next</a>
		</center>
	</div></center>
	<center><div id="id8" style="display: none;">
		<h1>What are the maximum number of employees you have or may have anytime during the current financial year?</h1>
		<br />
		<!--<input type="text" id="noe" placeholder="No. of employees" />-->
		<select id="noe" name="noe">
			<option>Not Selected</option>
			<option>0 to 9</option>
			<option>9 to 30</option>
			<option>30 to 200</option>
			<option>&gt200</option>
		</select>
		<br />
		<br />
		<center>
			<a href="#" id="btn14">Back</a>
			<!--<a href="#" id="btn15">Next</a>-->
			<button id="btn15">Submit</button>
		</center>
	</div></center>
	

</body>
</html>