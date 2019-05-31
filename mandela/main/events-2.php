<?php 
include "lib/common.php";

//***************************************************main function***************************************************************

printHeader(4, "Events");
printBody();
printFooter(1);

//***************************************************end of main function*******************************************************


function printBody()
{
		global $user;
?>

<div id="content">
    <div id="featured_content">
        <div class="left_content">
            <div>
                <div class="left_content_top">
                    <h1 class="home">UniWorldWide: International Higher Education Association</h1>
                </div>
                <div class="left_content_middle">
                    <div class="left_row_home">
                        <div class="left_row_wrapper">
                            <div id="banner">
                                <div class="banner_wrapper">
                                    <div class="bio">
                                        <div class="photo"> <img src="images/photo/nelson-mandela.png" /> </div>
                                        <div class="caption"> </div>
                                        <div class="quote">
                                            <blockquote><span>
                                                <?php
                                        $num = rand(1,3);
                                        switch($num)
                                        {
                                            case 1;
                                            echo "Education is the most powerful weapon which you can use to change the world.";
                                            break;
                                            case 2:
                                            echo "If you talk to a man in a language he understands, that goes to his head. If you talk to him in his language, that goes to his heart.";
                                            break;
                                            case 3:
                                            echo "No country can really develop unless its citizens are educated.";										
                                        }
                                    ?>
                                                </span></blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left_row">
                        <div class="left_row_wrapper">
                            <div id="about">
                                <div class="about_wrapper">
                                    <div class="label">
                                        <div class="label_wrapper"><span><a class="big_dark_blue_bold" href="#">Event</a></span></div>
                                    </div>
                                    <div class="content">
                                        <div class="main_event">
                                        	<div class="main_event_wrapper">
                                            	<div class="main_event_title"><h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h1></div>
                                                <div class="main_event_date">Date &amp;Time: Friday, January 24, 2014, 9:00&ndash;10:30pm</div>
                                                <div class="main_event_cost">Cost: $100 (member) $200 (nonmember)</div>
                                                <div class="main_event_registration">Deadline: TBA</div>
                                                <div class="main_event_content">
                                                	<div class="main_event_intro">
                                                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                        
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                    </div>
                                                    <div class="main_event_objective">
                                                    	<h2>Objectives</h2>
                                                    	<ul>
                                                        	<li>Lorem ipsum dolor sit amet</li>
                                                            <li>consectetur adipisicing elit</li>
                                                            <li>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
                                                        </ul>    
                                                    </div>
                                                    <div class="main_event_speakers">
                                                    	<h2>Speakers</h2>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                                        
                                                    </div>                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle_content"></div>
        <div class="right_content">
            <div>
                <div class="right_row_top">
                    <div class="right_row_wrapper">
                        <div class="right_content_top">
                            <div class="label">
                                <div class="label_wrapper">Get Involved!</div>
                            </div>
                        </div>
                        <div class="right_content_middle">
                            <div class="col_box">
                                <div class="col_bar">
                                    <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold"> Make a Difference</span> </div>
                                </div>
                                <div class="col_content">
                                    <div>
                                        <div class="photo"><img src="images/photo/get-involved.png" /></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                    <div class="sub_feature_more"> <span class="en"> <a href="#">Sign Now&nbsp;<img src="images/arrow_blue.gif"></a> </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right_row">
                    <div class="right_row_wrapper">
                        <div class="right_content_top">
                            <div class="label">
                                <div class="label_wrapper">Our Key Partners</div>
                            </div>
                        </div>
                        <div class="right_content_middle">
                            <div class="col_box">
                                <div class="col_bar">
                                    <div class="padding3top"> <img src="images/arrow_blue.gif"> &nbsp;<span class="small_white_bold"> International Higher Education Associations</span> </div>
                                </div>
                                <div class="col_content"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of content -->
<?php
}
//end of printBody
?>
