<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>

<title>[@title]</title>

<link rel="stylesheet" type="text/css" href="stylesheet.css" />

<script type="text/javascript">
function redirect(url) {
	window.location.href="test.php?country=Austria&url=" + url;
}

function setOption(x) {
	var options = document.quick_url_form.URL.options;
	for (i=0;i<options.length;i++){		
		if (options[i].value == x) {
			options[i].selected=true;
			break;
		}
	}
}

window.onload = function() {
	setOption("[@url]");
};

</script>

</head>

<body>

	<div id="header">

		<h1>[@header]</h1>

	</div>	

	<div id="menu">
		<form name="quick_url_form">
			<select name="URL" onchange="redirect(this.form.URL.options[this.form.URL.selectedIndex].value)">
				[@menuoptions]
				<!-- static html 
				<option value="content/handbook/health-and-safety/adjustments-and-culture-shock-content.tpl">adjustments-and-culture-shock-content.tpl</option>
				<option value="content/handbook/health-and-safety/basic-health-and-safety-content.tpl">basic-health-and-safety-content.tpl</option>
				<option value="content/handbook/health-and-safety/crisis-management-content.tpl">crisis-management-content.tpl</option>
				-->
			</select>
		</form>
	</div>

	<div id="content">

		[@content]

	</div>

	<div id="footer">

	</div>

</body>

</html>