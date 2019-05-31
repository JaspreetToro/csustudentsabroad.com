<?php
define("WEBNAME", "UniWorldWide");
define("URLNAME", "http://UniWorldWide.org");
define("WEBQUOTE", "Supporting International Higher Education Collaboration");

function printHeader($tab, $title, $ext = "", $body = "")
{
	$id1 = "";
	$id2 = "";
	$id3 = "";
	$id4 = "";
	$id5 = "";
	$id6 = "";
	
	if($tab == 1)
		$id1 = "active";
	else if($tab == 2)
		$id2 = "active";
	else if($tab == 3)
		$id3 = "active";
	else if($tab == 4)
		$id4 = "active";
	else if($tab == 5)
		$id5 = "active";
	else if($tab == 6)
		$id6 = "active";	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?> | <?=WEBNAME?> : <?=WEBQUOTE?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/uniworldwideorg.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="global-header">
      <header role="banner">
        <div class="container main-header">
          <div class="col-md-12">
              <div class="logo-wrapper">
                <a href="<?=URLNAME?>" class="logo"><h1><?=WEBNAME?></h1></a> 
              </div>  
          </div>
        </div>
      </header>
    </div>
    <div id="global-nav">
      <div class="navbar-inner">
        <div class="container main-nav">
          <div class="row main-nav-row">
            <nav role="navigation">
              <div class="col-sm-8 nav-col-sm-8"> 
                <ul class="nav navbar-nav nav-explore">
                  <li><a href="index.php" id="home">Home</a></li>
                  <li <?php if (!empty($id2)) { echo "class='$id2'"; }?>><a href="about.php" id="about">About</a></li>
                  <li <?php if (!empty($id3)) { echo "class='$id3'"; }?>><a href="collaboration.php" id="collaborations">Collaboration</a></li>
                  <li <?php if (!empty($id4)) { echo "class='$id4'"; }?>><a href="resources.php" id="resources">Resources</a></li>
                  <li <?php if (!empty($id5)) { echo "class='$id5'"; }?>><a href="conferences.php" id="conferences">Conferences</a></li>
                  <li <?php if (!empty($id6)) { echo "class='$id6 explore-associations'"; } else { echo "class='explore-associations'"; } ?>><a href="associations.php" id="explore-associations-id">Associations</a></li>
                </ul>
              </div>
              <div class="col-sm-4 nav-col-sm-4">
                <ul class="nav navbar-nav nav-association">
                  <li <?php if (!empty($id6)) { echo "class='$id6 associations'"; } else { echo "class='associations'"; } ?>><a href="associations.php" id="associations-id">Associations</a></li>
                </ul> 
              </div>
            </nav>
          </div>
        </div>      
      </div>
    </div>
    <div id="global-content">
      <div class="container main-content">
      	<div class="row main-content-row">
<?php
} 
// end printHeader
function printBannerOld()
{
?>
<div id="quoteCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
	<ol class="carousel-indicators quote-carousel-indicators">
		<li data-target="#quoteCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#quoteCarousel" data-slide-to="1"></li>
		<li data-target="#quoteCarousel" data-slide-to="2"></li>
		<li data-target="#quoteCarousel" data-slide-to="3"></li>
		<li data-target="#quoteCarousel" data-slide-to="4"></li>
	</ol>

  <!-- Wrapper for slides -->
	<div class="carousel-inner quote-carousel-inner">
	    <div class="item active carousel-item-1">
	    	<a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS909&txtstr=education%20is%20the%20most%20powerful' target='_blank' ><img src="img/quotes/mandela-2-banner.png" alt="Education is the most powerful weapon which you can use to change the world. ~Nelson Mandela, July 16, 2003" /></a>
	    	
	    </div>
      <div class="item carousel-item-2">
        <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS675' target='blank'><img src="img/quotes/mandela-8-banner.png" alt="Until we reduce the wide gaps between the educated and the illiterate, the sheltered and the homeless, and very rich and the poor, we will continue to be deeply divided. ~Nelson Mandela, March 1, 1999" /></a>
      </div>
      <div class="item carousel-item-3">
        <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS493&txtstr=language' target='_blank'><img src="img/quotes/mandela-3-banner.png" alt="Though our countries are separated by geography, language, and culture, we are partners in humanity's quest for it's most noble ideals. ~Nelson Mandela, July 17, 1997"/></a>
      </div>
      <div class="item carousel-item-4">
        <a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS323&txtstr=international%20education' target='_blank'><img src="img/quotes/mandela-4-banner.png" alt="More children from disadvantaged backgrounds should be given the chance of this international education... ~Nelson Mandela, November 3, 1995" /></a>
      </div>
      <div class="item carousel-item-5">
        <a href='http://edition.cnn.com/2008/WORLD/africa/06/24/mandela.quotes/' target='_blank'><img src="img/quotes/mandela-6-banner.png" alt="More children from disadvantaged backgrounds should be given the chance of this international education... ~Nelson Mandela" /></a>
      </div>
  	</div>
</div>
<?php
}
//end printBannerOld
function printBanner()
{
?>
<div id="quoteCarousel" class="carousel slide quote-carousel-wrapper" data-ride="carousel">
  <!-- Indicators -->
	<ol class="carousel-indicators quote-carousel-indicators pull-right">
		<li data-target="#quoteCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#quoteCarousel" data-slide-to="1"></li>
		<li data-target="#quoteCarousel" data-slide-to="2"></li>
		<li data-target="#quoteCarousel" data-slide-to="3"></li>
		<li data-target="#quoteCarousel" data-slide-to="4"></li>
	</ol>

  <!-- Wrapper for slides -->
	<div class="carousel-inner quote-carousel-inner">
	    <div class="item active">
        	<div class="containerx">
        	<!-- <img src="img/quotes/mandela-2-banner.png" /> -->
          <img src="img/quotes/bg-carousel.png" />
            <div class="carousel-caption quote-caption">
        	<blockquote><p>"<span class="yellow">Education</span> is <br/> the most powerful weapon <br/> which <span class="yellow">you can use to change the world</span>."</p></blockquote>
	    	<footer><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS909&txtstr=education%20is%20the%20most%20powerful' target='_blank'>~Nelson Mandela, July 16, 2003</a></footer>
            </div>
	   		</div> 		
	    </div>
	    <div class="item">
        	<div class="containerx">
        	<img src="img/quotes/bg-carousel.png" />
            <div class="carousel-caption quote-caption">
        	<blockquote><p>"Until we reduce the wide gaps between the educated and the illiterate, the sheltered and the homeless, and very rich and the poor, <span class="yellow">we will continue to be deeply divided</span>."</p></blockquote>
	    	<footer><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS675' target='blank'>~Nelson Mandela, March 1, 1999</a></footer>
            </div>
	   		</div> 		
	    </div>
		<div class="item">
        	<div class="containerx">
        	<img src="img/quotes/bg-carousel.png" />
            <div class="carousel-caption quote-caption">
        	<blockquote><p>"Though our countries are separated by geography, language, and culture, <span class="yellow">we are partners in humanity's quest for it's most noble ideals</span>."</p></blockquote>
	    	<footer><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS493&txtstr=language' target='blank'>~Nelson Mandela, July 17, 1997</a></footer>
            </div>
	   		</div> 		
	    </div>
		<div class="item">
        	<div class="containerx">
        	<img src="img/quotes/bg-carousel.png" />
            <div class="carousel-caption quote-caption">
        	<blockquote><p>"<span class="yellow">More children from disadvantaged backgrounds should be given the chance of this international education</span>..."</p></blockquote>
	    	<footer><a href='http://db.nelsonmandela.org/speeches/pub_view.asp?pg=item&ItemID=NMS323&txtstr=international%20education' target='_blank'>~Nelson Mandela, November 3, 1995</a></footer>
            </div>
	   		</div> 		
	    </div>        
		<div class="item">
        	<div class="containerx">
        	<img src="img/quotes/bg-carousel.png" />
            <div class="carousel-caption quote-caption">
        	<blockquote><p>"If you talk to a man in a language he understands, that goes to his head. <span class="yellow">If you talk to him in his language, that goes to his heart</span>."</p></blockquote>
	    	<footer><a href='http://edition.cnn.com/2008/WORLD/africa/06/24/mandela.quotes/' target='_blank'>~Nelson Mandela</a></footer>
            </div>
	   		</div> 		
	    </div> 
  	</div>
</div>
<?php
}
//end printBanner
function getAssociation($status)
{
	// NOTE: the path of the include file!!!
	include("lib/association-array.php");
	$html  = "";
	$count = 0;
	//$status = "current";
	global $association;
	$association = array();

	echo "<div class=\"panel-group \" id=\"accordion".$status."\">\n";

	foreach ($ASSOCIATION_MEMBERS as $ASSOCIATION_INFO)
	{
		//print_r($ASSOCIATION_INFO);
		if ($ASSOCIATION_INFO['group'] == $status) {
			foreach ((array) $ASSOCIATION_INFO['member'] as $ASSOCIATION_INFO_MEMBER)
			{
				
                  echo "<div class=\"panel panel-default\">\n
                    <div class=\"panel-heading\">\n
                      <h4 class=\"panel-title\">\n
                        <a data-toggle=\"collapse\" data-parent=\"#accordion".$status."\" href=\"#collapse".$status.$count."\">\n";
                    	if (strlen($ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['acronym']) > 0) 
						{
							echo $ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['acronym'] . ":&nbsp;";
						} 
                        echo $ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['name']. "</a>\n
                      </h4>\n
                    </div>\n
                    <div id=\"collapse".$status.$count."\" class=\"panel-collapse collapse\">\n
                      <div class=\"panel-body sidebar-body\">\n

						<div class=\"description\">\n
							<div class=\"logo\"><a target=\"blank\" href=".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['url']."><img src=".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['logo']." border=\"0\"></a></div>\n
							<div class=\"brief\">\n
								<p>".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['description']."</p>\n
							</div>\n
							<div class=\"sub_feature_more\"><span class=\"en\"><a target=\"blank\" href=".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['url']." class=\"btn btn-xs btn-primary\" role=\"button\">Visit&nbsp;".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['acronym']."&nbsp;Website&nbsp;&raquo;</a></span></div>\n
						</div>\n

                      </div>\n
                    </div>\n                  
                  </div>\n";
                  $count++;
			}
		}
	} 
	echo "</div>\n";
	//shuffle($association);
	//$html = $html . $association[0];
	//return $html;
}
//end getAssociation
function getAssociationHome($status)
{
	// NOTE: the path of the include file!!!
	include("lib/association-array.php");
	$html  = "";
	$count = 0;
	//$status = "current";
	global $association;
	$association = array();

	echo "<div class=\"panel-group \" id=\"accordion".$status."\">\n";

	foreach ($ASSOCIATION_MEMBERS as $ASSOCIATION_INFO)
	{
		//print_r($ASSOCIATION_INFO);
		if ($ASSOCIATION_INFO['group'] == $status) {
			foreach ((array) $ASSOCIATION_INFO['member'] as $ASSOCIATION_INFO_MEMBER)
			{
				
                  echo "<div class=\"panel panel-default\">\n
                    <div class=\"panel-heading\">\n
                      <h4 class=\"panel-title\">\n
                        <a data-toggle=\"collapse\" data-parent=\"#accordion".$status."\" href=\"#homecollapse".$status.$count."\">\n";
                    	if (strlen($ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['acronym']) > 0) 
						{
							echo $ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['acronym'] . ":&nbsp;";
						} 
                        echo $ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['name']. "</a>\n
                      </h4>\n
                    </div>\n
                    <div id=\"homecollapse".$status.$count."\" class=\"panel-collapse collapse\">\n
                      <div class=\"panel-body sidebar-body\">\n

						<div class=\"description\">\n
							<div class=\"logo\"><a target=\"blank\" href=".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['url']."><img src=".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['logo']." border=\"0\"></a></div>\n
							<div class=\"brief\">\n
								<p>".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['description']."</p>\n
							</div>\n
							<div class=\"sub_feature_more\"><span class=\"en\"><a target=\"blank\" href=".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['url']." class=\"btn btn-xs btn-primary\" role=\"button\">Visit&nbsp;".$ASSOCIATION[$ASSOCIATION_INFO_MEMBER]['acronym']."&nbsp;Website&nbsp;&raquo;</a></span></div>\n
						</div>\n

                      </div>\n
                    </div>\n                  
                  </div>\n";
                  $count++;
			}
		}
	} 
	echo "</div>\n";
	//shuffle($association);
	//$html = $html . $association[0];
	//return $html;
}
//end getAssociation
function printAboutHome() {
?>
<div class="panel-module">
  <div class="panel">
    <h2 class="ribbon">Welcome to UniWorldWide</h2>
    <div class="panel-body panel-body-content">
      <p><a href="http://uniworldwide.org">UniWorldWide.org</a> has been developed to help carry out the mission of the Global Dialogue on the Future of Internationalisation of Higher Education which took place in January 2014 at Nelson Mandela Bay in South Africa. This resource supports the desire of participants to be more inclusive and expand the discussion to representatives of higher education associations around the world to support information sharing and develop common goals and methods for internationalisation.</p>
    <a class="btn btn-success" role="button" href="about.php">Why UniWorlWide.org &raquo;</a>
    </div>
  </div>
</div>    
<?
}
function printStatementModuleHome() {
?>
<div class="panel-module statements-module">
  <div class="panel">
    <h2 class="ribbon">Statements on Internationalization</h2>
    <div class="panel-body panel-body-content">
        <div class="statements">
        <div class="statement-label"><span class="glyphicon glyphicon-th-list"></span> Affirming Academic Values in Internationalization of Higher Education: A Call for Action</div>
    
        <div class="statement-brief"><p>The internationalization of higher education is a dynamic process, continuously shaped and reshaped by the international context in which it occurs...</p></div>
    
        <div class="statement-more">Read article in: <a class="btn btn-xs btn-primary" role="button" href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=en">English &raquo;</a> <a class="btn btn-xs btn-primary" role="button" href="affirming-academic-values-in-internationalization-of-higher-education.php?lang=fr">French &raquo;</a></div>
    </div>
    <div class="statements">
		<div class="statement-label"><span class="glyphicon glyphicon-th-list"></span> The International Student Mobility Charter</div>
        <div class="statement-brief"><p>According to UNESCO this number may rise to 8 million international higher education students by 2025. This globally mobile population of mainly young people seeking education...</p></div>
		<div class="statement-more">Read article in: <a class="btn btn-xs btn-primary" role="button" href="international-student-mobility-charter.php">English &raquo;</a></div>      
    </div>
    
    </div>
  </div>
</div>    
<?
}
function printDialogueHome() {
?>
<div class="panel-module dialogue-module">
  <div class="panel">
    <h2 class="ribbon">Global Dialogue</h2>
    <div class="panel-body panel-body-content">
        <div class="statements">
        <div class="statement-label"><span class="glyphicon glyphicon-th-list"></span> Global Dialogue 2014 Declaration</div>
    
        <div class="statement-brief"><p>We, the participants in the Global Dialogue, hosted by the &lsquo;International Education Association of South Africa&rsquo; (IEASA) on 15 – 17 January 2014 in Port Elizabeth, representing nine national, six regional and nine other organisations from around the world...</p></div>
    
        <div class="dialogue-more"><a class="btn btn-xs btn-primary" role="button" href="global-dialogue-2014-declaration.php">Read More &raquo;</a> </div>
    </div>
    <div class="statements">
		<div class="statement-label"><span class="glyphicon glyphicon-th-list"></span> International HE associations call for global equity</div>
        <div class="statement-brief"><p>Twenty-four international education organisations from across the world – including the giants in America and Europe and groups from Mexico and Japan, Africa, the Middle East and Latin America – gathered in South Africa last week for a first inclusive Global Dialogue.</p></div>
		<div class="dialogue-more"><a class="btn btn-xs btn-primary" role="button" href="international-HE-associations-call-for-global-equity.php">Read More &raquo;</a></div>      
    </div>
    </div>
  </div>
</div>  
<?php	
}
function printDialogueAbout() {
?>
<div class="panel-module dialogue-module">
  <div class="panel">
    <h2 class="ribbon">Global Dialogue</h2>
    <div class="panel-body panel-body-content">
        <div class="statements">
        <div class="statement-label"><span class="glyphicon glyphicon-th-list"></span> Global Dialogue 2014 Declaration</div>
    
        <div class="statement-brief"><p>We, the participants in the Global Dialogue, hosted by the &lsquo;International Education Association of South Africa&rsquo; (IEASA) on 15 – 17 January 2014 in Port Elizabeth, representing nine national, six regional and nine other organisations from around the world...</p></div>
    
        <div class="dialogue-more"><a class="btn btn-xs btn-primary" role="button" href="global-dialogue-2014-declaration.php">Read More &raquo;</a> </div>
    </div>
    <div class="statements">
		<div class="statement-label"><span class="glyphicon glyphicon-th-list"></span> International HE associations call for global equity</div>
        <div class="statement-brief"><p>Twenty-four international education organisations from across the world – including the giants in America and Europe and groups from Mexico and Japan, Africa, the Middle East and Latin America – gathered in South Africa last week for a first inclusive Global Dialogue.</p></div>
		<div class="dialogue-more"><a class="btn btn-xs btn-primary" role="button" href="international-HE-associations-call-for-global-equity.php">Read More &raquo;</a></div>      
    </div>
    <div class="statements">
    	<div class="statement-brief">
        <div class="center-block">
        <p>&nbsp;</p>
                                <p><img src="img/photo/Global-Dialogue-Participants-January-2014-South-Africa.png" class="img-responsive img-rounded"/></p>
                                </div>
        </div>
    </div>
    </div>
  </div>
</div>  
<?php	
}
function printCalendarHome() {
?>
<div class="panel-module calendar-module">
  <div class="panel">
    <h2 class="ribbon">Upcoming Conferences</h2>
    <div class="panel-body panel-body-content">
        <div class="events_wrapper">
                <div class="main_event_container">
                    <div class="event_date home_date">February 2014</div>
                    <div class="event_item_info home_info">
                        <div class="event_item">
                        <div class="event_span"><span>02/01 - 02/19&nbsp;&nbsp;&nbsp;AIEA</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Washington, DC, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.aieaworld.org/2014-conference" target="_blank">http://www.aieaworld.org/2014-conference</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>The rapid pace of innovation and the increasingly complex nature of the systems that manage and direct human experience has led to the gradual realization that not bullion or oil, but rather intellectual capital will become the most important commodity of the 21st century. This global recalibration of what is necessary to fuel human progress, push the boundaries of knowledge and even extend profits requires, as a fundamental enabler, international higher education. Nurturing and affording access to this increasingly desirable commodity therefore demands a robust and responsive international higher education sector. The most salient aspect of intellectual capital and the most consequential feature of its value is that it performs within a global context. And yet, notwithstanding this dynamic, there is a frightening disconnect between the demands of the world into which we are evolving and the commitments of colleges and universities to prepare their students, particularly
                                                undergraduates, to succeed in this new world.</p>
                                            <p>There are certainly pockets of awareness here and there. For example, accrediting bodies are increasingly calling for global learning experiences as part of the standards of education required in various disciplines. Despite various initiatives to address global learning at institutions around the world, the majority of institutions still accord global learning a marginal place in the curriculum (a single course or a single co-curricular workshop), if it is there at all. In short, there continues to be a conspicuous absence of a consensus for global learning in the curriculum as part of an intentional effort to align student learning with the demands of a global information age. Let us not forget that education is at the core of international higher education. Moreover, the character of such an education in the context of globalization must be global, where students have multiple, intentional and substantive encounters with global learning experiences throughout their
                                                respective programs of study.</p>
                                            <p>There is therefore an urgency to universalize global learning in the 21st century academy, meaning that all colleges and universities come to understand that part of what defines their mission in this historical moment is the need to prepare students for global realities. This commitment must be expressed, not merely in a menu of education abroad opportunities, but more importantly, throughout their specific fields of study, the curriculum in general, and the co-curriculum. In addition to the demands of government and industry, and taking into account what is needed to push the boundaries of knowledge, the fact remains that the greatest challenges facing humankind are global in nature. These challenges can only be resolved by graduates/citizens who are themselves globally competent. The case for global learning in the academy is overwhelming. Action is expected and required of all institutions, regardless of size, mission, history, wealth or location. In the end,
                                                each institution must commit to making global learning a central feature of a curriculum that will impart the skills, knowledge and dispositions necessary for life in a global information age.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="event_item">
                        <div class="event_span"><span>02/21 - 02/24&nbsp;&nbsp;&nbsp;Community Colleges for International Development</span></div>
                        <div class="event_information">
                            <div class="detail_item">
                                <div class="event_detail">
                                    <div class="event_organization"><strong>Location:</strong>&nbsp;Las Vegas, Nevada, USA</div>
                                    <div class="event_url"><strong>Conference Website:</strong>&nbsp;<a href="http://www.ccidinc.org/annualConference.html" target="_blank">http://www.ccidinc.org/annualConference.html</a></div>
                                    <div class="event_description">
                                        <div class="event_brief"><strong>Conference Information:</strong>&nbsp;
                                            <p>Community Colleges for International Development has been supporting member institutions from around the world, for almost 40 years, to provide access to quality, relevant higher education, and equip students with the competencies that the <strong>21st century workplace demands</strong>. The CCID Annual Conference is our signature event and is the only international conference dedicated fully to the advancement of global engagement at the community college level.</p>
        
                                            <p>CCID seeks participation of those international education professionals from institutions who are just starting to internationalize to those who are forerunners of campus internationalization efforts. We don't want you to miss out on this great opportunity. The CCID Annual Conference is where like-minded leaders in community and technical colleges, and further education from around the world convene to <strong>share knowledge, form new partnerships and develop solutions</strong> to the ever changing work-force demands of a globalized economy. CCID 2014 conference sponsors are an invaluable part of our success. The support and funding they provide allow us to create the best international education conference experience possible for attendees, exhibitors and global industry partners.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>   
                <div class="conference-more"><a class="btn btn-xs btn-primary" role="button" href="international-HE-associations-call-for-global-equity.php">View All Conferences &raquo;</a></div>  
            
        </div>
	</div>
  </div>
</div>        
<?php
}
function printResourcesHome()
{
?>
<div class="panel-module resources-module">
  <div class="panel">
    <h2 class="ribbon">Find Resources</h2>
    <div class="panel-body panel-body-content">
    	<div class="resources-wrapper">
            <div class="col-sm-4">
            	<div class="resources-photo"><img src="img/symbols/get-involved.png"></div>
                <div class="resources-label">University Programs</div>
                <div class="resources-brief university-program-brief"><p>Learn about university programs including research and teaching focused on international higher education</p></div>
                <div class="resources-more"><a class="btn btn-xs btn-primary" role="button" href="resources.php#university-programs">Learn More &raquo;</a></div>   
            </div>
        
            <div class="col-sm-4">
            	<div class="resources-photo"><img src="img/symbols/get-involved.png"></div>
                <div class="resources-label">General Resources</div>
                <div class="resources-brief general-resources-brief"><p>Learn about providing support for research and administration of international higher education programs</p> </div> 
                <div class="resources-more"><a class="btn btn-xs btn-primary" role="button" href="resources.php#general-resources">Learn More &raquo;</a></div>         
            </div>
        
            <div class="col-sm-4">
            	<div class="resources-photo"><img src="img/symbols/get-involved.png"></div>
                <div class="resources-label">Colleges and Universities</div>
                <div class="resources-brief colleges-universities-brief"><p>Learn about colleges and universities around the world as well as background on the system of higher education in many countries</p></div>        
                <div class="resources-more"><a class="btn btn-xs btn-primary" role="button" href="resources.php#colleges-universities">Learn More &raquo;</a></div>             
            </div>
        </div>
    </div>
  </div>
</div>
<?php
}
function printSideModule1()
{
?>
  <div class="sidebar-module">
    <div class="panel panel-default">
      <div class="panel-heading sidebar-heading">
      <h4>Get Involved!</h4>
      </div>
      <div class="panel-subheading">
      <h5>Make a Difference</h5> 
      </div> 
      <div class="panel-body sidebar-body  module1-body">
          <div class="photo"><img src="img/symbols/get-involved.png"></div> 
          <div>
              <p>To move international higher education collaboration forward, we look to including additional higher education associations and organizations representing additional countries and regions around the world. Please contact us with suggestions for additional associations to include in this effort.</p>
             
              <a class="btn btn-xs btn-primary" role="button" href="contact.php">Contact Us &raquo;</a>
          </div>
      </div>
    </div>
  </div>
<?php
}
//end printSideModule 
function printSideModule2Home()
{
?>
  <div class="sidebar-module">
    <div class="panel panel-default">
      <div class="panel-heading sidebar-heading">
        <h4>Our Key Partners</h4>
      </div>
	  <div class="panel-subheading association-subheading">
        <h5>International Higher Education Associations</h5>
	  </div>       

      <div class="panel-body sidebar-body association-body"> 
        <?php echo getAssociation("current")?>
        <div class="association-brief">
          <p>Learn about associations supporting international higher education collaboration</p>
          <a class="btn btn-xs btn-primary" role="button" href="associations.php#IHEA">Learn More &raquo;</a>
        </div>
      </div>
      <div class="panel-subheading1 organization-subheading">
    	<h5>International Higher Education Organizations</h5>
      </div>        
      <div class="panel-body sidebar-body organization-body">
        <?php echo getAssociation("others")?>
        <div class="association-brief">
          <p>Learn about organizations supporting international higher education collaboration</p>
          <a class="btn btn-xs btn-primary" role="button" href="associations.php#IHEO">Learn More &raquo;</a>
        </div>
      </div>       
    </div>
  </div>
<?php
}
function printSideModule2()
{
?>
  <div class="sidebar-module module-association-organization">
    <div class="panel panel-default">
      <div class="panel-heading sidebar-heading">
        <h4>Our Key Partners</h4>
      </div>
    <div class="panel-subheading subheading-association">
        <h5>International Higher Education Associations<span class="association-more">+</span></h5>
    </div>       

      <div class="panel-body sidebar-body panel-association"> 
        <?php echo getAssociation("current")?>
      </div>
      <div class="panel-subheading1 subheading-organization">
      <h5>International Higher Education Organizations<span class="organization-more">+</span></h5>
      </div>        
      <div class="panel-body sidebar-body panel-organization">
        <?php echo getAssociation("others")?>
      </div>       
    </div>
  </div>
<?php
}
// end printSideModule
function printSideModule3()
{
?>
  <div class="sidebar-module">
    <div class="panel panel-default">
      <div class="panel-heading sidebar-heading">
      <h4>Get Involved!</h4>
      </div> 
      <div class="panel-subheading">
      <h5>World Wide Colleges and Universities</h5> 
      </div>       
      <div class="panel-body sidebar-body">
       
      <p>UniWorldWide.com provides web links to colleges and universities around the world as well as resources like the International Association of Universities (IAU)/UNESCO World Academic Database.</p>
      
      <a class="btn btn-xs btn-primary" role="button" href="http://uniworldwide.com">Visit UniWorldWide.com&raquo;</a>
      </div>
    </div>
  </div>
<?php 
}
// end printSideModule
function printFooter($tab)
{
?>
      </div>
    </div>
    <div id="global-footer">
      <div class="container main-footer">
      	<div class="row main-footer-row">
        	<div class="main-footer-wrapper">
                <div class="col-sm-4">
                    <div class="panel panel-default footer-about">
                      <div class="panel-heading"><h4><a href="<?=URLNAME?>"><img src="img/uniworldwide-logo-sm.png" border="0" /></a></h4></div>
                      <div class="panel-body">
                        <p>UniWorldWide.org has been developed to help carry the mission of the Global Dialogue on the Future of Internationalisation of Higher Education which took place in January 2014 at Nelson Mandela Bay in South Africa.</p>
                      </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel panel-default footer-site-explore">
                      <div class="panel-heading"><h4>Explore<br />UniWorldWide</h4></div>
                      <div class="panel-body">
                        <ul>
                          <li><a href="about.php">About Us</a></li>
                          <li><a href="collaboration.php">Collaboration</a></li>
                          <li><a href="conferences.php">Conferences</a></li>
                          <li><a href="resources.php">Resources</a></li>
                          <li><a href="associations.php">Associations</a></li>
                          <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                      </div>
                    </div>         
                </div>
                <div class="col-sm-3">
                	<div class="panel panel-default footer-collaboration">
                      <div class="panel-heading"><h4>Collaboration</h4></div>
                      <div class="panel-body">
                        <ul>
                          <li><a href="collaboration.php#statements">Statements on Internationalization</a></li>
                          <li><a href="about.php#global-dialogue">Global Dialogue</a></li>
                          <li><a href="conferences.php">Conferences</a></li>
                          <li><a href="resources.php">Resources</a></li>
                          <li><a href="associations.php">Associations</a></li>
                          <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                      </div>
                    </div>       
                </div>
                <div class="col-sm-2">
                	<div class="panel panel-default footer-resources">
                      <div class="panel-heading"><h4>Find Resources</h4></div>
                      <div class="panel-body">
                        <ul>
                          <li><a href="resources.php#university-programs">University Programs</a></li>
                          <li><a href="resources.php#general-resources">General Resources</a></li>
                          <li><a href="resources.php#colleges-universities">Colleges and Universities</a></li>
                        </ul>
                      </div>
                    </div>       
                </div>
            </div>
        </div>
        <div class="row bottom-footer-row">
        	<div class="col-sm-12">
                <div class="panel panel-bottom-footer">
                    <p>&copy; Copyright 2014. <a href="http://globaled.us/">Center for Global Education</a>. All Rights Reserved. <a href="http://globaled.us/conditions.asp">Terms of Use</a> | <a href="http://globaled.us/contact.asp">Contact CGE</a> | <a href="http://globaled.us/giving.asp">Support CGE</a></p>    	
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">    
    
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google-translate-element');
    }
    </script>
    <script type="text/javascript">// <![CDATA[
    var $ = jQuery.noConflict(); 
	$(document).ready(function()  { 
		$('#quoteCarousel').carousel({ interval: 7000, cycle: true });
		
		$('#accordion').on('show.bs.collapse','.panel-collapse',function(e){
			$(this).closest('.panel').addClass('active').siblings('.panel').removeClass('active');
		});		
		
		$('.event_information').hide();
		$('.event_span').click(function(e) {
			e.preventDefault();							
    		$(this).next('.event_information').toggle();
		});
		
	<?php
	if ($tab == 1) {
	?>
		$('.module-association-organization .panel-association').hide();
		$('.module-association-organization .panel-organization').hide();
		$('.module-association-organization .panel-subheading').css("cursor", "pointer");		
		$('.module-association-organization .panel-subheading1').css("cursor", "pointer");
	
		$('.module-association-organization .panel-subheading').on("click",function(e) {
			$(this).next('.module-association-organization .panel-association').toggle();
			var val = $(".association-more").text() == "-" ? "+" : "-";
			$(".association-more").hide().text(val).fadeIn("fast");
			e.preventDefault();	
		}); 
		
		$('.module-association-organization .panel-subheading1').on("click",function(e) {			 
			$(this).next('.module-association-organization .panel-organization').toggle();
			var val = $(".organization-more").text() == "-" ? "+" : "-";
			$(".organization-more").hide().text(val).fadeIn("fast");
			e.preventDefault();		
		}); 
	<?php
	}
	?>
	});	
    // ]]></script>    
  </body>
</html>
<?php	
}
//end printFooter
?>
