<?php
include "lib/common.php";


function printBody()
{
	global $subPageTitle;
?>
        <div class="col-sm-8 main-module">
            <div>
                <div class="main-module-wrapper banner-module">
                    <div class="panel banner-panel">  
                    <?php echo printBannerOld() ?>
                    </div>
                </div>
                
                <div>
                    <div class="panel-module">
                      <div class="panel">
                        <h2 class="ribbon"><?php echo $subPageTitle; ?></h2>
                        <div class="panel-body panel-body-content">
                            <div class="main_resources_container">
                            <div class="resources_column"> 
                                <div class="resources_label">University Programs<a name="university-programs"></a></div>
                                <div class="resources_brief"><p>The following university programs include research and teaching focused on international higher education.</p></div>
                                
                                <div class="resources_list">
                                    <p class="resources_program">International/Comparative Education</p>
                                    <ul>
                                        <li><a href="http://www.american.edu/cas/seth/index.cfm" target="_blank">American University</a></a></li>
                                        <li><a href="http://www.bc.edu/schools/lsoe/" target="_blank">Boston College</a></a></li>
                                        <li><a href="http://www.bu.edu/sed/" target="_blank">Boston University</a></a></li>
                                        <li><a href="http://www.coe.fsu.edu/" target="_blank">Florida State University</a></li>
                                        <li><a href="http://gsehd.gwu.edu/" target="_blank">George Washington University</a></li>
                                        <li><a href="http://www.gse.harvard.edu/" target="_blank">Harvard University</a></li>
                                        <li><a href="https://education.indiana.edu/" target="_blank">Indiana University Bloomington</a></li>
                                        <li><a href="http://www.luc.edu/education/" target="_blank">Loyola University of Chicago</a></li>
                                        <li><a href="http://steinhardt.nyu.edu/" target="_blank">New York University</a></li>
                                        <li><a href="https://www.odu.edu/education" target="_blank">Old Dominion University</a></li>
                                        <li><a href="http://www.ed.psu.edu/educ/" target="_blank">Pennsylvania State University</a></li>
                                        <li><a href="https://ed.stanford.edu/" target="_blank">Stanford University</a></li>
                                        <li><a href="http://www.tc.columbia.edu/" target="_blank">Teachers College, Columbia University</a></li>
                                        <li><a href="http://ehe.osu.edu/" target="_blank">The Ohio State University</a></li>
                                        <li><a href="http://www.albany.edu/education/" target="_blank">University at Albany, State University of New York</a></li>
                                        <li><a href="http://gseis.ucla.edu/" class="medium_box_link" target="_blank">University of California Los Angeles</a></a></li>
                                        <li><a href="http://www.education.umd.edu/" target="_blank">University of Maryland</a></li>
                                        <li><a href="http://www.umass.edu/education/" target="_blank">University of Massachusetts Amherst</a></li>
                                        <li><a href="http://www.cehd.umn.edu/" target="_blank">University of Minnesota</a></li>
                                        <li><a href="http://www.education.pitt.edu/default.aspx" target="_blank">University of Pittsburgh</a></li>
                                        <li><a href="http://www.usfca.edu/soe/" target="_blank">University of San Francisco</a></li>
                                    </ul>
                                    
                                    <p class="resources_program">International Relations/Communication</p>
                                    <ul>
                                        <li><a href="http://www.lesley.edu/" target="_blank">Lesley University</a></li>
                                        <li><a href="http://www.sit.edu/" target="_blank">School for International Training</a></li>
                                        <li><a href="http://www.umaryland.edu/" target="_blank">University of Maryland, Baltimore County</a></li>
                                        <li><a href="http://www.pacific.edu/" target="_blank">University of the Pacific (International Communications Institute)</a></li>
                                    </ul>
                                </div>
                                <div class="divider"></div>
                            </div> 
                            
                            <div class="resources_column">
                                <div class="resources_label">General Resources<a name="general-resources"></a></div>
                                <div class="resources_brief"><!-- <p>The following resources provide support for research and administration of international higher education programs.</p> -->
                                <p>Please come back soon as we add resources that provide support for research and administration of international higher education programs.</p>
                                </div>
                                <div class="divider"></div>
                            </div> 
                            
                            <div class="resources_column">   
                                <div class="resources_label">Colleges and Universities<a name="colleges-universities"></a></div>
                                <div class="resources_brief"><p><a href="http://uniworldwide.com">The Worldwide Colleges and Universities</a> website provides links to colleges and universities around the world as well as background on the system of higher education in many countries.</p>
                                
                                <a class="btn btn-xs btn-primary" role="button" href="http://uniworldwide.com">Visit UniWorldWide.com &raquo;</a>
                                </div>
                                <div class="resources_list">
                                </div>
                                
                            </div>                      
                            </div>
                        </div>
                      </div>
                    </div>
                </div>	
            
            </div>
        </div>
        <div class="col-sm-4 main-sidebar">           
          <?php
            printSideModule1();
            printSideModule2();
          ?>
        </div>  
<?php
}

/* Main */

$tab = 4;
$mainPageTitle = "Resources";
$subPageTitle = "Find Resources";

printHeader($tab, $mainPageTitle);
printBody();
printFooter(1) 

?>