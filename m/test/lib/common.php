<?php
function getBannerSponsor($country_name, $sponsors_key)
{
	// NOTE: the path of the include file!!!	
    include "lib/sponsors-array.php";
	$count = 0;
	
	global $banner;
	$banner = array();
	
    foreach ($SPONSORS_BANNER as $INFO) {
        if ($INFO['country'] == $country_name) {
            foreach ($INFO['main_sponsors'.$sponsors_key] as $main_sponsor_name) {
				
				$banner[$count] =  "<a target='_blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name]['banner_1'] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
				$count++;
            }
        }
    }
	//print_r($banner);
	//return $banner;
	shuffle($banner);
	return $banner[0];
}

function getMainSponsor($country_name, $sponsor_key)
{
	// NOTE: the path of the include file!!!	
	include "lib/sponsors-array.php";
	
	$html = "";
	$count = 0;

	global $main_sponsors;		
	$main_sponsors = array();
	
	foreach ($COUNTRY_SPONSORS as $INFO) {
		if ($INFO['country'] == $country_name) {
			foreach ($INFO['main_sponsors'.$sponsor_key] as $main_sponsor_name) {
				if ($SPONSORS[$main_sponsor_name]['logo_full'] == "yes") {
					$size = "logo_xl";
				}
				if ($SPONSORS[$main_sponsor_name]['logo_lg'] == "yes") {
					$size = "logo_l";
				}
				if ($SPONSORS[$main_sponsor_name]['logo_med'] == "yes") {
					$size = "logo_m";
				}
				if ($SPONSORS[$main_sponsor_name]['logo_sm'] == "yes") {
					$size = "logo_s";
				}
				$main_sponsors[$count] =  "<a target='_blank' href='" . $SPONSORS[$main_sponsor_name]['url'] . "'><img src='" . $SPONSORS[$main_sponsor_name][$size] . "' alt='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' title='" . $SPONSORS[$main_sponsor_name]['title_desc'] . "' /></a>";
				
				$count++;
				
			}
		}
	}
	//print_r($main_sponsors);
	//return $main_sponsors;
	shuffle($main_sponsors);
	return $main_sponsors[0];	
}

function printCountryHandbooks()
{
?>
<div id="handbooks-form-container">
    <form name="handbooks-searchForm" method="get" action="" onsubmit="return validateCountry();" class="handbooks-form">
        <div class="handbooks-select_container">
            <div class="handbooks-country">
                <div class="handbooks-label">
                    <label for="handbooks-selProgCntry">Select A Country</label>
                </div>
                <div class="handbooks-list">
                    <select name="country" id="handbooks-selProgCntry">
                        <?php getCountryOption(); ?>
                    </select>
                </div>
            </div>
            <div class="handbooks-search-button">
                <input type="submit" name="btnSubmit" value="Go" class="btn"/>
            </div>
        </div>
    </form>
</div>
<?php
}

function getCountryOption() {
	// NOTE: the path of the include file!!!	
	include "common_array.php";
	$count = 0;

	echo	"<option value='Choose' selected='selected'>Choose One</option>";
    echo	"<option value='General'>Worldwide</option>";
	
	foreach ($country_array as $country_name) {
		echo "<option value='$country_name'>$country_name</option>";		
		$count++;
	}
}
?>