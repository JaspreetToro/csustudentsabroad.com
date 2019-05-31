<?php
include "lib/common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Template</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/studentsabroad.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	  <link href="css/ie.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="global-header">
    <header role="banner">
        <div class="container main-header">
            <div class="col-md-8">
                <div class="logo-wrapper"> <a class="logo" href="http://StudentsAbroad.com">
                    <h1>StudentsAbroad.com</h1>
                    </a> </div>
            </div>
            <div class="col-md-4">
                <div class="cge-logo-wrapper pull-right"> <a class="cge-logo" href="http://globaled.us">
                    <div class="cge-brand">Center for Global Education</div>
                    </a> </div>
            </div>
        </div>
    </header>
</div>
<div id="global-nav">
    <nav class="navbar navbar-default global-navbar-default" role="navigation">
        <div class="container main-nav">
            <div class="navbar-header main-nav-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sa-navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand main-nav-brand" href="#" id="StudentsAbroad.com"><span class="brand-white">Students</span><span class="brand-gold">Abroad.</span><span class="brand-gold-sm">com</span></a> </div>
            <div class="collapse navbar-collapse main-navbar-collapse" id="sa-navbar-collapse">
                <div class="col-sm-8x col-sm-8-main">
                    <div class="navbar-nav-main-wrapper">
                        <ul class="nav navbar-nav navbar-nav-main">
                            <li><a href="#" id="home"><span class="nav-label">Home</span><span class="nav-description">The Main Page</span></a></li>
                            <li><a href="#" id="program-search"><span class="nav-label">Program Search</span><span class="nav-description">Explore Your Option</span></a></li>
                            <li><a href="#" id="student-handbooks"><span class="nav-label">Student Handbooks</span><span class="nav-description">How to Get There and Back</span></a></li>
                            <li><a href="#" id="featured-programs"><span class="nav-label">Featured Programs</span><span class="nav-description">Options Around the World</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4x col-sm-4-sub">
                    <div class="navbar-nav-sub-wrapper navbar-right">
                        <ul class="nav navbar-nav navbar-nav-sub">
                            <li><a href="#" id="support"><span class="nav-label">Support</span></a></li>
                            <li><a href="#" id="about"><span class="nav-label">About</span></a></li>
                            <li><a href="#" id="contact"><span class="nav-label">Contact</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<div id="global-content">
    <div class="container main-content">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-sm-6-handbooks">
                    <div class="panel panel-default handbooks-panel">
                        <div class="panel-heading handbooks-panel-heading">
                            <div class="handbooks-title-top"><span>Country Specific</span></div>
                            <div class="handbooks-title-bottom">
                                <h2>Student Handbooks</h2>
                            </div>
                        </div>
                        <div class="panel-body handbooks-panel-body"> <?php printCountryHandbooks() ?> </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-handbooks btn-handbooks-icon"><span>View Student Handbooks</span></a> </div>
                <div class="col-lg-6 col-sm-6-programs">
                    <div class="panel panel-default programs-panel">
                        <div class="panel-heading programs-panel-heading">
                            <div class="programs-title-top"><span>Study Abroad</span></div>
                            <div class="programs-title-bottom">
                                <h2>Program Search</h2>
                            </div>
                        </div>
                        <div class="panel-body programs-panel-body"> Panel content </div>
                    </div>
                    <a href="#" class="btn btn-primary btn-programs btn-programs-icon"><span>Use Program Search</span></a> </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-sm-12-banner">
                    <div class="panel panel-default banner-panel">
                        <div class="panel-body banner-panel-body">
                        <?php
						/* sponsors banner */
						$box_count = 1;
						//$count_MAX = 3;
						$count_MAX = 1;
						
						while ($box_count <= $count_MAX){
							getBannerSponsor("General", $box_count);
							echo $banner[0];
							$box_count++;
						}
						?>	
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-sm-12-carousel">
                    <div class="panel panel-default carousel-panel">
                        <div class="panel-body carousel-panel-body"> Basic panel example </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="panel panel-default panel-sponsors">
                    <div class="panel-heading panel-heading-sponsors"><h3>Sponsors</h3></div>
                    <div class="panel-body panel-body-sponsors">
						<?php
						/* main sponsors */
						$box_count = 1;
						//$count_MAX = 5;
						$count_MAX = 2;
						
						while ($box_count <= $count_MAX){
						?>
                        <div id="main-sponsors-featured<?php //echo $box_count?>">
                            <?php
							getMainSponsor("General_Home", $box_count);
							echo $main_sponsors[0];
							$box_count++;
						?>
                        </div>
                        <?php
                        }
						?>
                    
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default panel-worldwide-handbook">
                    <div class="panel-heading panel-heading-worldwide-handbook"><h3><span class="country-label">View Worldwide</span> <span class="handbooks-label">Student Handbook</span></h3></div>
                    <div class="panel-body panel-body-worldwide-handbook">
                        <div id="accordioncurrent" class="panel-group panel-group-worldwide">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a href="#collapsecurrent0" data-parent="#accordioncurrent" data-toggle="collapse" class="collapsed">Understanding Study Abroad</a> </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapsecurrent0" style="height: 0px;">
                                    <div class="panel-body sidebar-body">
                                        <div class="topics">
                                          <ul>
                                                <li><a href="#">Introduction</a></li>
                                                <li><a href="#">Why Study Abroad</a></li>
                                                <li><a href="#">Why Learn A Language</a></li>
                                                <li><a href="#">Advice for Parents</a></li>
                                            </ul>  
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a href="#collapsecurrent1" data-parent="#accordioncurrent" data-toggle="collapse" class="collapsed">Choosing a Program</a> </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapsecurrent1">
                                    <div class="panel-body sidebar-body">
                                        <div class="topics">
                                            <ul>
                                                <li><a href="#">Finding a Quality Program</a></li>
                                                <li><a href="#">Selecting the Right Program for You</a></li>
                                                <li><a href="#">Who Runs Your Program</a></li>
                                                <li><a href="#">Financing Study Abroad</a></li>
                                                <li><a href="#">Application Process</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a href="#collapsecurrent2" data-parent="#accordioncurrent" data-toggle="collapse" class="collapsed">Practical Information</a> </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapsecurrent2">
                                    <div class="panel-body sidebar-body">
                                        <div class="topics">
                                            <ul>
                                                <li><a href="#">Pre-Departure Planning</a></li>
                                                <li><a href="#">How Foreign Law Apply to You</a></li>
                                                <li><a href="#">Communication While Abroad</a></li>
                                                <li><a href="#">Housing</a></li>
                                                <li><a href="#">Packing</a></li>
                                                <li><a href="#">Expectations</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a href="#collapsecurrent3" data-parent="#accordioncurrent" data-toggle="collapse" class="collapsed">Health and Safety</a> </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapsecurrent3">
                                    <div class="panel-body sidebar-body">
                                        <div class="topics">
                                            <ul>
                                                <li><a href="#">Medical Care and Insurance</a></li>
                                                <li><a href="#">Basic Health and Safety</a></li>
                                                <li><a href="#">Risk Factors and Strategies to Reduce Risk</a></li>
                                                <li><a href="#">Special Issues</a></li>
                                                <li><a href="#">Crisis Management</a></li>
                                                <li><a href="#">Adjustments and Culture Shock</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a href="#collapsecurrent4" data-parent="#accordioncurrent" data-toggle="collapse" class="collapsed">Coming Home</a> </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapsecurrent4">
                                    <div class="panel-body sidebar-body">
                                        <ul>
                                            <li><a href="#">Airport Safety, Duties, and Customs</a></li>
                                            <li><a href="#">Reverse Culture Shock</a></li>
                                            <li><a href="#">Continuing Benefits of Study Abroad</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a href="#collapsecurrent5" data-parent="#accordioncurrent" data-toggle="collapse" class="collapsed">Tools for Planning</a> </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapsecurrent5">
                                    <div class="panel-body sidebar-body">
                                        <div class="topics">
                                            <ul>
                                                <li><h5>Resources Tools</h5>
                                                    <ul>
                                                        <li><a href="#">Questions</a></li>
                                                        <li><a href="#">Checklist</a></li>
                                                        <li><a href="#">Resources</a></li>
                                                        <li><a href="#">Top 10 Health and Safety Issues</a></li>
                                                    </ul>
                                                </li>
                                                <li><h5>Communication Tools</h5>
                                                    <ul>
                                                        <li><a href="#">Communication Info Sheet</a></li>
                                                        <li><a href="#">Words to Know</a></li>
                                                        <li><a href="#">Phrases to Know</a></li>
                                                        <li><a href="#">Help Images</a></li>
                                                    </ul>
                                                </li>
                                                <li><h5>Emergency Tools</h5>
                                                    <ul>
                                                        <li><a href="#">Emergency Planning</a></li>
                                                        <li><a href="#">Emergency Action Plan Steps</a></li>
                                                        <li><a href="#">Personal Emergency Action Plan</a></li>
                                                        <li><a href="#">Emergency Card</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default panel-quick-links">
                    <div class="panel-heading panel-heading-quick-links"><h3>Quick Links</h3></div>
                    <div class="panel-body panel-body-quick-links">
                        <div class="panel panel-default panel-sub-quick-links">
                            <div class="panel-body panel-body-sub-quick-links">
                                <ul>
                                    <li><a href="#">Top 10 Health &amp; Safety Tips</a></li>
                                    <li><a href="#">Communication Info Sheets</a></li>
                                    <li><a href="#">Emergency Planning</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="global-footer"> </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>