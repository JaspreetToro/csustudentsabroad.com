<?php 

include "lib/common.php";

include "lib/conn_data.php";



//***************************************************main function***************************************************************



printHeader(2, "PROGRAM SEARCH");

printBody();

printFooter();



//***************************************************end of main function*******************************************************





function printBody()

{

global $user;

global $SPONSORS;

global $COUNTRY_SPONSORS;    

global $SPONSORS_BANNER;



global $main_sponsors;

global $banner;

?>



<div id="content">

    <div id="left_content">

        <div id="left_content_quicksearch_container">

            <div id="left_content_handbooks_search">

                <div id="box1_top" title="STUDY ABROAD PROGRAM SEARCH">

                    <span class="box_title">

                        STUDY ABROAD PROGRAM SEARCH

                    </span>

                    <div id="program_search_title_container">

                        <div class="program_search_title1">Study Abroad</div>

                        <div class="program_search_title2">Program Search</div>

                    </div>

                </div>

				<div id="box1_middle"><?php printProgramSearchForm(); ?></div>
                <div id="box1_bottom" ></div>
</div>

            <div id="left_content_program_search">

                <div id="box2_top" title="COUNTRY SPECIFIC STUDENT HANDBOOKS">

                    <span class="box_title">

                        COUNTRY SPECIFIC STUDENT HANDBOOKS

                    </span>

                    <div id="country_specific_title_container">

                        <div class="country_specific_title1">Country Specific</div>

                        <div class="country_specific_title2">Student Handbooks</div>

                    </div>

                </div>

                <div id="box2_middle"> <?php printCountryHandbooks() ?> </div><div id="box2_bottom"></div>
</div>

        </div>

        <div style="clear:both;"></div>

        <script type="text/javascript" language="javascript">renderDiv(4);</script>

       <!-- <div class="sponsors_banner_container">

            <div class="sponsors_banner_top"></div>

            <div class="sponsors_banner_middle">

                <div class="sponsors_banner">

                   <?php /*

					 sponsors banner

					

					$box_count = 1;

					//$count_MAX = 3;

					$count_MAX = 1;

					

					while ($box_count <= $count_MAX){

						get_banner_sponsor2("General", $box_count);

						echo $banner[0];

						$box_count++;

					}

					*/?>

                </div>

            </div>

            <div class="sponsors_banner_bottom"></div>

        </div> -->

        <div style="clear:both;"></div>

        <script type="text/javascript" language="javascript">renderDiv(4);</script>
<div id="left_content_middle">

  <div class="left_content_main_bottom"> <?php printFeaturedPrograms()?> </div>

        </div>
<div style="clear:both;"></div>

    </div>

    <!-- end of left_content -->

    <div id="right_content">
<div id="right_content_middle">

      <div id="sponsors">

                <div id="sponsors_title_container">

                    <div class="sponsors_title"> CSU Study Abroad Programs </div>

                </div>

                <div id="sponsors1">

                    <div>

                        <?php 
						
						printCSUschools()	;				
	
						?>

                    </div>

                </div>

                <div id="study_abroad_resources">

                    <div id="student_handbook_title_container">

                        <div id="student_handbook_title">Study Abroad <br />

                            Student Handbook</div>

                    </div>

                    <div class="student_handbook_menu"> <?php printStudentHandbookMenu()?> </div>

                </div>

                <div id="quicklinks_container">

                    <div id="quicklinks_title_container">

                        <div class="quicklinks_title">Quick Links</div>

                    </div>

                    <div id="quicklinks_content">
<div id="quicklinks_middle">

              <div id="quicklinks">

                                <ul>

                                    <li><a href="handbook/top-10-health-and-safety-issues.php?country=General">Top 10 Health &amp; Safety Tips</a></li>

                                    <li><a href="handbook/communication-info-sheets.php?country=General">Communication Info Sheets</a></li>

                                    <li style="border-bottom:none;"><a href="handbook/emergency-planning.php?country=General">Emergency Planning</a></li>

                                </ul>

                            </div>

                        </div>
</div>

                </div>

            </div>

            <!-- end of right_content_middle -->
        </div>

        <!-- end of right_content -->

    </div>

    <!-- end of content -->

</div>

<?php

}

//end of printBody



function printFeaturedPrograms()

{

?>

           <?php

          

	  $pc = '';

	  $term = '';

	  if( isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['p_10003']) ){ //check if form was submitted

      $city = str_replace(" ","+",$_POST['pi']);

  $country = str_replace(" ","+",$_POST['pc']); //get input text

  $term = str_replace(" ","+",$_POST['pt']);

  $region = str_replace(" ","+",$_POST['pr']);

  $study = $_POST['p_10003'];

  

  # $message = "Success! You entered: ".$term;

  echo $message;

   $data = array(

    'Program_Type_ID' => '1',

    'Program_Name' => 'csu',

    'pt' => $term,

    'pc' => $country,

    'pi' => $city,

    'pr' => $region,

    'p_10003' => $study,

    'pt' => $term,

    'FuseAction' => 'Programs.SearchResults',

    'SimpleSearch' => '1'

);

$qs = http_build_query($data);
		  
		  //$html = file_get_contents('http://directory.studentsabroad.com/index.cfm?Program_Type_ID=1&Program_Name=csu&pt='.$term.'%7F&pi='.$city.'%7F&pc='.$country.'%7F&pr='.$region.'%7F&FuseAction=Programs.SearchResults&SimpleSearch=1');
		  
		  //$htmlCSULB = file_get_contents('https://global.ccpe.csulb.edu/index.cfm?Program_Type_ID=1&Program_Name=csu&pt='.$term.'%7F&pi='.$city.'%7F&pc='.$country.'%7F&pr='.$region.'%7F&FuseAction=Programs.SearchResults&SimpleSearch=1');

}

 

       #  $html = file_get_contents('http://directory.studentsabroad.com/index.cfm?'.$qs.');

    if(isset($_POST['submit2']) || $_SERVER['REQUEST_METHOD'] == 'POST' || (!isset($_POST['p_10003']) && isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] == 'POST')){
		
/*
CSUDH-
http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SearchResults&
Program_Name=csu&
Program_Type_ID=1&
pi=%7F&
pc=%7F&
pr=%7F&
pt=%7F&
p_10000=English%7F&
p_10000_t=MULTI&
p_10001=1-first+year%7F&
p_10001_t=MULTI&
p_10002=Apartment+%28alone%29%7F&
p_10002_t=MULTI&
p_10003=Accounting%7F&
p_10003_t=MULTI&
p_10004=study+abroad%7F&
p_10004_t=MULTI&
p_10005=2%7F&
p_10005_t=MINIM&
p_10006=2%7F&
p_10006_t=MINIM&
p_10007=Direct%7F&
p_10007_t=MULTI&
Sort=Program_City&
Order=desc&
pp=10000%2C10001%2C10002%2C10003%2C10004%2C10005%2C10006%2C10007

*/

$html = file_get_contents('http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SearchResults&Program_Name=csu+'.str_replace(" ","+",$_POST['Program_Name']).'&Program_Type_ID=1&pi='.str_replace(" ","+",$_POST['pi']).'%7F&pc='.str_replace(" ","+",$_POST['pc']).'%7F&pr='.str_replace(" ","+",$_POST['pr']).'%7F&pt='.str_replace(" ","+",$_POST['pt']).'%7F&p_10000='.str_replace(" ","+",$_POST['p_10000']).'%7F&p_10000_t=MULTI&p_10001='.str_replace(" ","+",$_POST['p_10001']).'%7F&p_10001_t=MULTI&p_10002='.str_replace(" ","+",$_POST['p_10002']).'%7F&p_10002_t=MULTI&p_10003='.str_replace(" ","+",$_POST['p_10003']).'%7F&p_10003_t=MULTI&p_10004='.str_replace(" ","+",$_POST['p_10004']).'%7F&p_10004_t=MULTI&p_10005='.str_replace(" ","+",$_POST['p_10005']).'%7F&p_10005_t=MINIM&p_10006='.str_replace(" ","+",$_POST['p_10006']).'%7F&p_10006_t=MINIM&p_10007='.str_replace(" ","+",$_POST['p_10007']).'%7F&p_10007_t=MULTI&Sort='.str_replace(" ","+",$_POST['Sort']).'&Order='.str_replace(" ","+",$_POST['Order']).'&pp=10000%2C10001%2C10002%2C10003%2C10004%2C10005%2C10006%2C10007');
		
$htmlCSULB = file_get_contents('https://global.ccpe.csulb.edu/index.cfm?FuseAction=Programs.SearchResults&Program_Name=csu+'.str_replace(" ","+",$_POST['Program_Name']).'&Program_Type_ID=1&pi='.str_replace(" ","+",$_POST['pi']).'%7F&pc='.str_replace(" ","+",$_POST['pc']).'%7F&pr='.str_replace(" ","+",$_POST['pr']).'%7F&pt='.str_replace(" ","+",$_POST['pt']).'%7F&Partner_ID=ANY&p_10002='.str_replace(" ","+",$_POST['p_10002']).'%7F&p_10002_t=MULTI&p_10000='.str_replace(" ","+",$_POST['p_10000']).'%7F&p_10000_t=MULTI&p_10001='.str_replace(" ","+",$_POST['p_10001']).'%7F&p_10001_t=MULTI&p_10017='.str_replace(" ","+",$_POST['p_10017']).'%7F&p_10017_t=MULTI&p_10005='.str_replace(" ","+",$_POST['p_10003']).'%7F&p_10005_t=MINIM&Sort='.str_replace(" ","+",$_POST['Sort']).'&Order='.str_replace(" ","+",$_POST['Order']).'&pp=10002%2C10000%2C10001%2C10017%2C10005');
		
/*
CSULB-
https://global.ccpe.csulb.edu/index.cfm?FuseAction=Programs.SearchResults&
Program_Name=&Program_Type_ID=1&
pi=%7F&
pc=%7F&
pr=%7F&
pt=%7F&
Partner_ID=ANY&
p_10002=2.0%7F&
p_10002_t=MINIM&
p_10000=CSU+IP%7F&
p_10000_t=SELCT&
p_10001=Freshman%7F&
p_10001_t=MULTI&
p_10017=Cal+Grant+A%7F&
p_10017_t=MULTI&
p_10005=Education%7F&
p_10005_t=MULTI&
Sort=Program_City&
Order=desc&
pp=10002%2C10000%2C10001%2C10017%2C10005
*/
		
		$htmlCSUIP = file_get_contents('http://csuip.calstate.edu/index.cfm?FuseAction=Programs.SearchResults&Program_Name='.str_replace(" ","+",$_POST['Program_Name']).'&Program_Type_ID=1&pi='.str_replace(" ","+",$_POST['pi']).'%7F&pc='.str_replace(" ","+",$_POST['pc']).'%7F&pr='.str_replace(" ","+",$_POST['pr']).'%7F&pt='.str_replace(" ","+",$_POST['pt']).'%7F&Partner_ID=ANY&p_10006='.str_replace(" ","+",$_POST['p_10003']).'%7F&p_10006_t=MULTI&Sort=Program_Name&Order=asc&pp=10002%2C10004%2C10005%2C10006');	
/*$htmlCSUIP = file_get_contents('http://csuip.calstate.edu/index.cfm?FuseAction=Programs.SearchResults&Program_Name='.str_replace(" ","+",$_POST['Program_Name']).'&Program_Type_ID=1&pi='.str_replace(" ","+",$_POST['pi']).'%7F&pc='.str_replace(" ","+",$_POST['pc']).'%7F&pr='.str_replace(" ","+",$_POST['pr']).'%7F&pt='.str_replace(" ","+",$_POST['pt']).'%7F&Partner_ID=ANY&p_10006='.str_replace(" ","+",$_POST['p_10003']).'%7F&p_10006_t=MINIM&Sort='.str_replace(" ","+",$_POST['Sort']).'&Order='.str_replace(" ","+",$_POST['Order']).'&pp=10002%2C10004%2C10005%2C10006');		
$htmlCSUIP = file_get_contents('http://csuip.calstate.edu/index.cfm?FuseAction=Programs.SearchResults&Program_Name='.str_replace(" ","+",$_POST['Program_Name']).'&Program_Type_ID=1&pi='.str_replace(" ","+",$_POST['pi']).'%7F&pc='.str_replace(" ","+",$_POST['pc']).'%7F&pr='.str_replace(" ","+",$_POST['pr']).'%7F&pt='.str_replace(" ","+",$_POST['pt']).'%7F&Partner_ID=ANY&p_10002='.str_replace(" ","+",$_POST['p_10001']).'%7F&p_10002_t=MULTI&p_10004='.str_replace(" ","+",$_POST['p_10000']).'%7F&p_10004_t=MULTI&p_10005='.str_replace(" ","+",$_POST['p_10005']).'%7F&p_10005_t=MINIM&p_10006='.str_replace(" ","+",$_POST['p_10003']).'%7F&p_10006_t=MINIM&Sort='.str_replace(" ","+",$_POST['Sort']).'&Order='.str_replace(" ","+",$_POST['Order']).'&pp=10002%2C10004%2C10005%2C10006');


CSUIP-
http://csuip.calstate.edu/index.cfm?FuseAction=Programs.SearchResults&
Program_Name=&
Program_Type_ID=1&
pi=%7F&
pc=%7F&
pr=%7F&
pt=%7F&
Partner_ID=ANY&
p_10002=Graduate%7F&
p_10002_t=MULTI&
p_10004=English%7F&
p_10004_t=MULTI&
p_10005=1+term+college-level+Spanish%7F&
p_10005_t=MULTI&
p_10006=Accounting%7F&
p_10006_t=MULTI&
Sort=Program_City&
Order=desc&
pp=10002%2C10004%2C10005%2C10006*/
	}


		 $posStart = strpos($html, "<table");

		 $posEnd = strpos($html, "</table") +8;

		 $posLength = $posEnd - $posStart;

		 $html = substr($html,$posStart,$posLength);

		 

		 $posStart = strpos($html, ">") +1;

		 $posLength = strlen($html) -8;

		 $html = substr($html,$posStart,$posLength);

		 

		 $posStart = strpos($html, "</tr>") +5;

		 $posLength = strlen($html) -5;

		 $html = substr($html,$posStart,$posLength);
	
		 
		 $posStart = strpos($htmlCSULB, "<table");

		 $posEnd = strpos($htmlCSULB, "</table") +8;

		 $posLength = $posEnd - $posStart;

		 $htmlCSULB = substr($htmlCSULB,$posStart,$posLength);

		 

		 $posStart = strpos($htmlCSULB, ">") +1;

		 $posLength = strlen($htmlCSULB) -8;

		 $htmlCSULB = substr($htmlCSULB,$posStart,$posLength);

		 //$htmlCSULB = str_replace("</table>", "", $htmlCSULB);
	

		 $posStart = strpos($htmlCSULB, "</tr>") +5;

		 $posLength = strlen($htmlCSULB) -5;

		 $htmlCSULB = substr($htmlCSULB,$posStart,$posLength);
	
	
	
	     $posStart = strpos($htmlCSUIP, "<table cell");

		 $posEnd = strpos($htmlCSUIP, "</table") +8;

		 $posLength = $posEnd - $posStart;

		 $htmlCSUIP = substr($htmlCSUIP,$posStart,$posLength);

		 

		 $posStart = strpos($htmlCSUIP, ">") +1;

		 $posLength = strlen($htmlCSUIP) -8;

		 $htmlCSUIP = substr($htmlCSUIP,$posStart,$posLength);

		 

		 $posStart = strpos($htmlCSUIP, "</tr>") +5;

		 $posLength = strlen($htmlCSUIP) -5;

		 $htmlCSUIP = substr($htmlCSUIP,$posStart,$posLength);

		 
	//
	$programName = array();
	$programCity = array();
	$programCountry = array();
	$programRegion = array();
	$index = 0;
$ProgramID = array();
		 
	
	class Program{
	var $id, $name, $city, $country, $region, $sponsor, $code;
		
	function Program($id, $name, $city, $country, $region, $sponsor, $code)
    {
        $this->id = $id;
		$this->name = $name;
		$this->city = $city;
		$this->country = $country;
		$this->region = $region;
		$this->sponsor = $sponsor;
		$this->code = $code;
    }

    /* This is the static comparing function: */
    static function cmp_name($a, $b)
    {
        $al = strtolower($a->name);
        $bl = strtolower($b->name);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
	static function cmp_city($a, $b)
    {
        $al = strtolower($a->city);
        $bl = strtolower($b->city);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
	static function cmp_country($a, $b)
    {
        $al = strtolower($a->country);
        $bl = strtolower($b->country);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
	static function cmp_region($a, $b)
    {
        $al = strtolower($a->region);
        $bl = strtolower($b->region);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
	static function cmp_sponsor($a, $b)
    {
        $al = strtolower($a->sponsor);
        $bl = strtolower($b->sponsor);
        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }
}
	//$html = $htmlCSULB.$html;
	$CSUDHArray = array();
	$CSULBArray = array();
	$CSUIPArray = array();
	//$proArray = array();
	
	//echo print_r($rtable);
	
	//echo $rtable;
	
	//$rtable = asort($rtable);
	
	//$rtable = array_unique($rtable);
	$count = 0;
	
	
	function programBuilder($html, $code, $proArray){
		$rtable = explode("</tr>",$html);
		
		 if(strpos($html, "</tr>") >= 1 ){
			 
		 

		 foreach ($rtable as $value) {

			/* $poStart = strpos($value, "href");

			$posLength = $value - $posStart;

			$nlink = substr($value, $posStart, $posLength);

			

			$poStart = strpos($value, "\"")+1;

			$posLength = $value - $posStart;

			$nlink = substr($value, $posStart, $posLength); */
			 
			 if(strpos($value,"table>")>0){break;}
			 
			 $dtable = explode("</td>", $value);
			 if(trim(strip_tags($dtable[0])) != ""){
				 $programName[$index] = trim(strip_tags($dtable[0],"<br>"));
			 }else{
				 $programName[$index] = $programName[$index-1];
			 }
	$programCity[$index] = trim(strip_tags($dtable[1],"<br>"));
	$programCountry[$index] = trim(strip_tags($dtable[2],"<br>"));
	$programRegion[$index] = trim(strip_tags($dtable[3],"<br>"));
	$programSponsor[$index] = trim(strip_tags($dtable[4],"<br>"));
			 $posStart = strpos($value, "Program_ID=")+11;

			 if(trim(substr($value, $posStart, 5)) != ""){
				 $ProgramID[$index] = substr($value, $posStart, 5);
			 }else{
				 $ProgramID[$index] = $ProgramID[$index-1];
			 }
			 
			 if(strpos($programName[$index], "SULB")>0){
				 $programSponsor[$index] = "California State University, Long Beach";}
			 elseif(strpos($programName[$index], "San Marcos")>0){
				 $programSponsor[$index] = "California State University, Long Beach";}
			 elseif(strpos($programName[$index], "SUDH")>0){
				$programSponsor[$index] = "California State University, Dominguez Hills";}
			 elseif(strpos($programName[$index], "SU IP")>0){
				 $programSponsor[$index] = "CSU International Programs";}
			 else{}
			
			// }elseif(strpos($programName[$index], "Dominguez Hills")>0){
			//	$programSponsor[$index] = "California State University, Dominguez Hills";
			
			 
			 if(count($proArray) > 0){
				 $proArray[$index + $count] = new Program($ProgramID[$index],$programName[$index],$programCity[$index],$programCountry[$index],$programRegion[$index],$programSponsor[$index],$code);} 
			 else{
				 $proArray[$index + $count] = new Program($ProgramID[$index],$programName[$index],$programCity[$index],$programCountry[$index],$programRegion[$index],$programSponsor[$index],$code);} 
			
			 
			 //
			 
			// echo $programName;
			 
			
			 
			// $tempData = substr($value, "href");
			 
           $nvalue = str_replace('class="text-center compact-column"', 'class="text-center compact-column hidden"', $value);
			 
			 //$nvalue = str_replace('<a', '<a style="color:#cc0b2a" class="locallink" name="myform1" onclick=\'submitForm('.$ProgramID.')\' ', $nvalue);
			 
			 $nvalue = str_replace('<a', ' <a', $nvalue);

			$nvalue = '<tr style="margin:10px;">'.$nvalue;
			 

			//echo $nvalue;
			 
			 $index++;

		}}
	else{
		//echo "<tr rowspan='5'><span style='color:red;font-size:14pt'>No result found!</span></tr></table>";
	}
		//$count = $count + $index;
		return $proArray;
	}
	
	$CSULBArray = programBuilder($htmlCSULB, 1, $CSULBArray);
	$CSUDHArray = programBuilder($html, 0, $CSUDHArray);
	$CSUIPArray = programBuilder($htmlCSUIP, 2, $CSUIPArray);
	$proArray = array_merge($CSULBArray,$CSUDHArray,$CSUIPArray);
	//$proArray = array_merge($proArray,$CSUIPArray);
	
	usort($proArray, array("Program", "cmp_name"));
	
	$term = "any";
	
	if(isset($_POST['pt']) && $_POST['pt'] != ""){$term = '<strong>'.$_POST['pt'].'</strong>';}else{$term = "any";}
	if(isset($_POST['pr']) && $_POST['pr'] != ""){$region = ' that is in the region of <strong>'.$_POST['pr'].'</strong>, ';}else{$region = "";}
	if(isset($_POST['pc']) && $_POST['pc'] != ""){$country = ' that is in the country of <strong>'.$_POST['pc'].'</strong>, ';}else{$country = "";}
	if(isset($_POST['p_10003']) && $_POST['p_10003'] != ""){$study = ' having (Areas of Study equal to <strong>\''.$_POST['p_10003'].'\'</strong>),';}else{$study = "";}
	if(isset($_POST['pi']) && $_POST['pi'] != ""){$city = ' that is in the city of <strong>'.$_POST['pi'].'</strong>, ';}else{$city = "";}

		 ?> <div class="head-container"><div class="panel-heading" style="height:30px">Programs: Program Search (results)</div><p style="padding:10px 10px 0px 5px;vertical-align: middle;"><i class="fa fa-question" style="position: relative;top:-8px; float:left;color:darkred;font-size:30px; padding:5px 10px 0px 10px" aria-hidden="true"></i>Following is the list of programs based on the search criteria. <br />Click any program name to view details or to apply.</p><div><a class="search-buttons" onClick="document.forms[0].submit();"  href="javascript:void(0);">List All</input><a class="search-buttons" href="advancedsearch.php">Advanced Search</a></div><br /><div class="header-tips-container"></div><p style="padding: 10px">You searched for Outgoing programs within <?php echo $term; ?> term,<?php echo $study; ?><?php echo $region; ?><?php echo $country; ?><?php echo $city; ?> sorted by Program name in ascending order.</p></div><table>

		 <tr style="font-size:11pt;">

					<!--	<th>

						<a href="index.cfm?FuseAction=Programs.SearchResults&amp;Sort=Program_Name&amp;Order=desc&amp;program_name=csu&amp;program_type_id=1&amp;program_active=1&amp;requiredminimumtofindismeet=0&amp;" title="Sort by Program Name">Program Name&nbsp;<i class="fa fa-arrow-up" title="Sort Direction"></i></a>

						</th>

						<th class="compact-column">

							<a href="index.cfm?FuseAction=Programs.SearchResults&amp;Sort=Program_City&amp;Order=asc&amp;program_name=csu&amp;program_type_id=1&amp;program_active=1&amp;requiredminimumtofindismeet=0&amp;" title="Sort by Program City">City</a>

						</th>

						<th class="compact-column">

							<a href="index.cfm?FuseAction=Programs.SearchResults&amp;Sort=Program_Country&amp;Order=asc&amp;program_name=csu&amp;program_type_id=1&amp;program_active=1&amp;requiredminimumtofindismeet=0&amp;" title="Sort by Program Country">Country</a>

						</th>

						<th class="compact-column">

							<a href="index.cfm?FuseAction=Programs.SearchResults&amp;Sort=Program_Region&amp;Order=asc&amp;program_name=csu&amp;program_type_id=1&amp;program_active=1&amp;requiredminimumtofindismeet=0&amp;" title="Sort by Program Region">Region</a>

						</th>

						<th class="compact-column">

							<a href="index.cfm?FuseAction=Programs.SearchResults&amp;Sort=Sponsor_Name&amp;Order=asc&amp;program_name=csu&amp;program_type_id=1&amp;program_active=1&amp;requiredminimumtofindismeet=0&amp;" title="Program Sponsor">Program Sponsor</a>

						</th> -->

                        <th>

    				Program Name

						</th>

						<th class="compact-column">

							City

						</th>

						<th class="compact-column">

							Country

						</th>

						<th class="compact-column">

							Region

						</th>

						<th class="compact-column" width="18%">

							Program Sponsor

						</th>

						

		</tr>

		 <?php
	
	
	

	for($i = 0; $i < count($proArray); $i++){
		//$temp = $temp . $ProgramID;
		echo '<tr style="margin:10px;"><td><a style="color:#cc0b2a;" href="javascript:void(0); class="locallink" name="myform1" onclick=\'submitForm('.$proArray[$i]->id.','.$proArray[$i]->code.')\'><i class="fa fa-star"></i> '.$proArray[$i]->name.'</a></td><td>'.$proArray[$i]->city.'</td><td>'.$proArray[$i]->country.'</td><td>'.$proArray[$i]->region.'</td><td>'.$proArray[$i]->sponsor.'</td></tr>';
	}	 echo '</table>';
	
	/* for($i = 0; $i < count($programName); $i++){
		$temp = $temp . $ProgramID;
		echo '<tr style="margin:10px;"><td><a style="color:#cc0b2a" class="locallink" name="myform1" onclick=\'submitForm('.$ProgramID[$i].')\'> '.$programName[$i].'</a></td><td>'.$programCity[$i].'</td><td>'.$programCountry[$i].'</td><td>'.$programRegion[$i].'</td></tr>';
	}	 echo '</table>'; */
	
		 ?><form name="myform" action="brochure.php" method="post">
			 <input type="hidden" name="programID" value="" />
			 <input type="hidden" name="pt" value="<?php echo $term ?>" />
			 <input type="hidden" name="pr" value="<?php echo $region ?>" />
			 <input type="hidden" name="pc" value="<?php echo $country ?>" />
			 <input type="hidden" name="p_10003" value="<?php echo $study ?>" />
			 <input type="hidden" name="pi" value="<?php echo $city ?>" />
			 <input type="hidden" name="code" value="" />
			 </form>
		
<script>
	
	 var anchors = document.getElementsByClassName("locallink");

for (var i = 0; i < anchors.length; i++) {
    anchors[i].href = "#"
}
		// document.getElementById("locallink").href = "brochure.php";
		// alert("eindo");
	
	 function submitForm(Pid,Pcode){
		 document.getElementsByName("programID")[0].value = Pid;
		 document.getElementsByName("code")[0].value = Pcode;
	 
	document.myform.submit();
		 
	 }
			   </script>
   <style>


	
	/* .panel-heading{font-size:15pt;color:white;background-color:burlywood;padding:10px}

			  #maincontainer_bottom{min-height:1500px;} */
	   
</style>      
          

<?php

}

?>

   













