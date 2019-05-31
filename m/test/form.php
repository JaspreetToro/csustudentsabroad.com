<!DOCTYPE html> 
<html> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>Form Example</title> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.css" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.js"></script>
</head> 


<body> 

<div data-role="page">

	<div data-role="header">
		<h1>Form Page</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<form action="index.php" method="get">
			
			<!--	Wrap Inputs in fieldcontain which will sort out borders and padding, can cause layout to break	-->
			<div data-role="fieldcontain">
				<label for="firstName"> First Name: </label>
				<input type="text" name="firstName" value="" id="firstName" /> <!--	Use id and name values	-->
			</div>	

			<div data-role="fieldcontain">
				<label for="lastName"> Last Name: </label>
				<input type="text" name="lastName" value="" id="lastName" /> <!--	Use id and name values	-->
			</div>	

			<div data-role="fieldcontain">
				<label for="age"> Age: </label>
				<input min="7" max="120" type="range" name="age" value="" id="age" /> <!--	Use id and name values	-->
			</div>	

			<div data-role="fieldcontain">
				<label for="cars"> Favorite Car: </label>
				<select id="cars" name="cars"> <!--	Use id and name values	-->
					<option value="honda"> Honda </option>
					<option value="toyota"> Toyota </option>
					<option value="ford"> Ford </option>
				</select>
			</div>

			<div data-role="fieldcontain">
				<p> Your Hobbies? </p>
				<input type="checkbox" name="movies" value="" id="movies" /> <!--	Use id and name values	-->
				<label for="movies"> Movies: </label>
				<input type="checkbox" name="sports" value="" id="sports" /> <!--	Use id and name values	-->
				<label for="sports"> Sports: </label>
				<input type="checkbox" name="gaming" value="" id="gaming" /> <!--	Use id and name values	-->
				<label for="gaming"> Gaming: </label>
			</div>

			<div data-role="fieldcontain">
				<input type="submit" name="" value="Submit Form" data-theme="b" />
			</div>

		</form>	
	</div>
	
	<div data-role="footer">
		<h4>Footer content</h4>
	</div><!-- /footer -->
	
</div>
<script>

	$('form').submit( function(e) {
		
		var vals = $(this).serialize();
		$.post( 'server.php', vals, function (data) {
			


		});

		e.preventDefault();

	});

</script>
</body>
</html>