<?php

function getCountryOption() {
	// NOTE: the path of the include file!!!	
	include "common_array.php";
	
	$html = "";
	$count = 0;

	echo	"<option value='Choose' selected='selected'>Choose One</option>";
    echo	"<option value='General'>Worldwide</option>";
	foreach ($country_array as $country_name) {

		echo "<option value='$country_name'>$country_name</option>";		
		$count++;
	}
	//print_r($main_sponsors);
	//return $main_sponsors;
}
?>
<select name="country" id="sponsors_selProgCntry">
                                            
<?php

echo getCountryOption();
?>
</select>