<?php 
include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function***************************************************************

printHeader(1, "Brochure");
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
                <div id="box1_bottom"></div>
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
                <div id="box2_middle"> <?php printCountryHandbooks() ?> </div>
                <div id="box2_bottom"></div>
            </div>
        </div>
        <div style="clear:both;"></div>
        <script type="text/javascript" language="javascript">renderDiv(4);</script>
       <!-- <div class="sponsors_banner_container">
            <div class="sponsors_banner_top"></div>
            <div class="sponsors_banner_middle">
                <div class="sponsors_banner">
                    <?php
					/* sponsors banner
					*/
					$box_count = 1;
					//$count_MAX = 3;
					$count_MAX = 1;
					
					while ($box_count <= $count_MAX){
						get_banner_sponsor2("General", $box_count);
						echo $banner[0];
						$box_count++;
					}
					?>
                </div>
            </div>
            <div class="sponsors_banner_bottom"></div>
        </div> -->
        <div style="clear:both;"></div>
        <script type="text/javascript" language="javascript">renderDiv(4);</script>
        <!-- <div id="left_content_top"></div> -->
        <div id="left_content_middle">
            <div class="left_content_main_bottom"> <?php printFeaturedPrograms()?> </div>
        </div>
        <!-- <div id="left_content_bottom"></div> -->
        <div style="clear:both;"></div>
    </div>
    <!-- end of left_content -->
    <div id="middle_content"></div>
    <div id="right_content">
        <div id="right_content_top_sm"></div>
        <div id="right_content_middle">
            <div id="sponsors">
                <div id="sponsors_title_container">
                    <div class="sponsors_title"> CSU Study Abroad Programs </div>
                </div>
                <div id="sponsors1">
                    <div>
                      
                        <?php
                        printCSUschools();
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
                        <div id="quicklinks_top"></div>
                        <div id="quicklinks_middle">
                            <div id="quicklinks">
                                <ul>
                                    <li><a href="handbook/top-10-health-and-safety-issues.php?country=General">Top 10 Health &amp; Safety Tips</a></li>
                                    <li><a href="handbook/communication-info-sheets.php?country=General">Communication Info Sheets</a></li>
                                    <li style="border-bottom:none;"><a href="handbook/emergency-planning.php?country=General">Emergency Planning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="quicklinks_bottom"></div>
                    </div>
                </div>
            </div>
            <!-- end of right_content_middle -->
            <div id="right_content_bottom"></div>
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
			  if(isset($_POST['programID'])){ //check if form was submitted

      $ProgramID = $_POST['programID'];

    if($_POST['code'] == 0){
		$html = file_get_contents('http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.ViewProgram&Program_ID='.$ProgramID);
	}elseif($_POST['code'] == 1){
		$html = file_get_contents('http://global.ccpe.csulb.edu/index.cfm?FuseAction=Programs.ViewProgram&Program_ID='.$ProgramID);
	}elseif($_POST['code'] == 2){
		$html = file_get_contents('http://csuip.calstate.edu/index.cfm?FuseAction=Programs.ViewProgram&Program_ID='.$ProgramID);
	}
				  

       #  $html = file_get_contents('http://directory.studentsabroad.com/index.cfm?'.$qs.');

				  $term = "any";
	
	if(isset($_POST['pt']) && $_POST['pt'] != ""){$term = '<strong>'.$_POST['pt'].'</strong>';}else{$term = "any";}
	if(isset($_POST['pr']) && $_POST['pr'] != ""){$region = ' that is in the region of <strong>'.$_POST['pr'].'</strong>, ';}else{$region = "";}
	if(isset($_POST['pc']) && $_POST['pc'] != ""){$country = ' that is in the country of <strong>'.$_POST['pc'].'</strong>, ';}else{$country = "";}
	if(isset($_POST['p_10003']) && $_POST['p_10003'] != ""){$study = ' having (Areas of Study equal to <strong>\''.$_POST['p_10003'].'\'</strong>),';}else{$study = "";}
	if(isset($_POST['pi']) && $_POST['pi'] != ""){$city = ' that is in the city of <strong>'.$_POST['pi'].'</strong>, ';}else{$city = "";}
       ?> <div class="head-container"><div class="panel-heading" style="height:30px">Programs: Program Search (results)</div><p style="padding:10px 10px 0px 5px;vertical-align: middle;"><i class="fa fa-question" style="position: relative;top:-8px; float:left;color:darkred;font-size:30px; padding:5px 10px 0px 10px" aria-hidden="true"></i>Following is the list of programs based on the search criteria. <br />Click any program name to view details or to apply.</p><div><a class="search-buttons" onClick="document.forms[0].submit();"  href="javascript:void(0);">List All</input><a class="search-buttons" href="advancedsearch.php">Advanced Search</a></div><br /><div class="header-tips-container"></div><p style="padding: 10px">You searched for Outgoing programs within <?php echo $term; ?> term,<?php echo $study; ?><?php echo $region; ?><?php echo $country; ?><?php echo $city; ?> sorted by Program name in ascending order.</p></div><div style="">
			<?php
				  if($_POST['code'] == 2){
					  $posStart = strpos($html, "Fact Sheet");

		 //$posEnd = strpos($html, "<form")-100;
		 $posEnd = strpos($html, "</html>");

		 $posLength = $posEnd - $posStart;

		 $html = substr($html,$posStart,$posLength);
					  
		 $posStart = strpos($html, "<table")-1;
					  
		 $posEnd = strpos($html, "class=\"bottom-layer clearboth")-6;

		 $posLength = $posEnd - $posStart;

		 $html = substr($html,$posStart,$posLength);
					  $html = "<div class=\"panel-heading\">Fact Sheet</div><div class=\"panel-body\">".$html."</div></div>";
					  $html = str_replace("src=\"", "src=\"http://csuip.calstate.edu/",$html);
				  }else{

		 $posStart = strpos($html, "class=\"panel panel-primary")-6;

		 //$posEnd = strpos($html, "<form")-100;
		 $posEnd = strpos($html, "class=\"text-center\"")-100;

		 $posLength = $posEnd - $posStart;

		 $html = substr($html,$posStart,$posLength);}
				  
				  
				 // $html = str_replace('<form', ' </div></div>', $html);
		  
		  if(strpos($html,"Fact Sheet") > 1){
				  
				  echo '<div><div>'.$html;
}else{
			  echo ''.$html;
		  }
		?></div><?php
		}else{
		  echo "failed search";
	  }

	
	  ?> 
         
         <style>

/* table { border: 1pt solid #000; border-collapse: collapse; }

table td { border-left: 1px solid #000; }

table td:first-child { border-left: none; }

table td {padding:5px;}

	table th { border-bottom:2pt solid #000;}
	
	a:visited{color:#cc0b2a}
	a:hover{color:darkmagenta}
	
	.panel-heading{font-size:15pt;color:white;background-color:burlywood;padding:10px}
			 #maincontainer_bottom{min-height:1500px;} */

</style> 
         
<?php
	
 
 
}
	 
	
		



?>






