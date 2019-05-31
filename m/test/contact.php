<!DOCTYPE html> 
<html> 
	<head> 
	<title>2 Page JQuery Mobile Site</title> 
	
	
	<!--	By setting the viewport attributes to content="width=device-width, initial-scale=1, the width will be set to the pixel width of the device screen. -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0b3/jquery.mobile-1.0b3.min.js"></script>
	<style>
		.ui-icon-envato {
			/*Styles the icon on button */	
			background: red;
			border: 1px solid #333;			
		}
	</style>
	
</head> 
<body> 

	<!-- Start of Contact page -->
	<div data-role="page" id="contact">

		<div data-role="header">
			<h1>Contact Page</h1>
		</div><!-- /header -->

		<div data-role="content" data-theme="e">	
			<p>Contact Form coming Soon...</p>		

			<a data-role="button" href="#" data-inline="true" data-transition="fade" data-icon="gear" data-iconpos="notext">Anchor Button</a>

			<button data-inline="true" data-theme="e" data-icon="envato" data-iconpos="right"> Custom Icon Button </button>

			<button data-inline="true" data-theme="e" data-icon="delete" data-iconpos="right"> Submit Button </button>

			<!--	Note Bug in Source so you must add data-theme="e" to continue style flow in some elements like buttons	-->
			<input type="submit" name="" value="Input Button" data-inline="true" data-icon="minus" />
			<hr/>

			Grid aligning elements 2 Coloumn using "ui-grid-a"
			<div class="ui-grid-a">
				<div class="ui-block-a">
					<input type="submit" name="" value="Input Button" />
				</div>
				<div class="ui-block-b">
					<input type="submit" name="" value="Input Button" />
				</div>
			</div>
			Grid aligning elements 3 Coloumn using "ui-grid-b"
			<div class="ui-grid-b">
				<div class="ui-block-a">
					<input type="submit" name="" value="Input Button" />
				</div>
				<div class="ui-block-b">
					<input type="submit" name="" value="Input Button" />
				</div>
				<div class="ui-block-c">
					<input type="submit" name="" value="Input Button" />
				</div>
			</div>

			<hr/>
			<p><a data-role="button" href="index.php" data-inline="true" data-transition="fade">Back to Home</a></p>	
			<p><a data-role="button" href="about.php" data-inline="true" data-transition="flip">Back to About</a></p>	
		</div><!-- /content -->

		<div data-role="footer">
			<h4>Page Footer</h4>
		</div><!-- /footer -->
		
	</div><!-- /page -->
	
</body>
</html>