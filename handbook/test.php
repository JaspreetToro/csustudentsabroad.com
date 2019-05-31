<?php
include("../lib/sponsors_array.php");


foreach ($COUNTRY_SPONSORS as $key => $value) {
	if ($value['country'] == "Argentina") {
		
		foreach ($value['main_sponsors1'] as $iKey => $iValue) {
			 echo "<br> ---> main_sponsors1 - $iValue";
		}
		foreach ($value['main_sponsors2'] as $iKey => $iValue) {
			 echo "<br> ---> main_sponsors2 - $iValue";	
		}
		foreach ($value['sub_sponsors1'] as $iKey => $iValue) {
			 echo "<br> ---> sub_sponsors1 - $iValue";	
		}
		foreach ($value['sub_sponsors2'] as $iKey => $iValue) {
			 echo "<br> ---> sub_sponsors2 - $iValue";	
		}
		?><p></p><?php
		echo count($value['main_sponsors1']);
		echo count($value['main_sponsors2']);
		echo count($value['sub_sponsors1']);
		echo count($value['sub_sponsors2']);
	}
}

?>
<p>BREAK</p>
<?php
foreach ($COUNTRY_SPONSORS as $key => $value) {
	echo "<p></p>".$key."<br/>";
	echo "<br> ---> country - ". $value['country'];
	
	foreach ($value['main_sponsors1'] as $iKey => $iValue) {
		 echo "<br> ---> main_sponsors1 - $iValue";
	}
	foreach ($value['main_sponsors2'] as $iKey => $iValue) {
		 echo "<br> ---> main_sponsors2 - $iValue";	
	}
	foreach ($value['sub_sponsors1'] as $iKey => $iValue) {
		 echo "<br> ---> sub_sponsors1 - $iValue";	
	}
	foreach ($value['sub_sponsors2'] as $iKey => $iValue) {
		 echo "<br> ---> sub_sponsors2 - $iValue";	
	}
}




?>
<p> BREAK </p>