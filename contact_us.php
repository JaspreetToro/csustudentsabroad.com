<?php 
session_start();

include "lib/common.php";
include "lib/subpage_common.php";
include "lib/common_array.php";
include "lib/conn_data.php";

//define('PHPBB_ROOT_PATH', "forum/");
//define('IN_PHPBB', true);

//$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
//$phpEx = substr(strrchr(__FILE__, '.'), 1);
//include($phpbb_root_path . 'common.' . $phpEx);
//include($phpbb_root_path . 'includes/functions_display.' . $phpEx);

// Start session management
//$user->session_begin();
//$auth->acl($user->data);
//$user->setup('viewforum');

//***************************************************main function***************************************************************

global $title;
$title = "Contact Us";

//if($_GET['submit'] == 1 && $_POST['fullname']) 
//verifyForm();


if(isset($_GET['sendmessage']) && $_POST['name'])
	verifyForm();
printHeader(7, $title, "<script type=\"text/javascript\" src=\"javascript/jquery.js\"></script>\n
<script type=\"text/javascript\" src=\"javascript/jquery-functions.js\"></script>\n", 
"onLoad=\"P7_equalCols2(0,'left_navigation','P','subpage_content','P'); \"");
printBody();
printSubpageFooter();


//***************************************************end of main function*******************************************************


function generateCode($characters) 
{
/* list all possible characters, similar looking characters and vowels have been removed */
$possible = '23456789bcdfghjkmnpqrstvwxyz';
$code = '';
$i = 0;
while ($i < $characters) { 
$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
$i++;
}
return $code;
}


function verifyForm()
{
	global $error_message;
	global $confirm_message;
	
	$error_message = "";
	
	$name = $_POST['name'];
	$institution = $_POST['institution'];
	$email = $_POST['email'];
	$department = $_POST['department'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$fax = $_POST['fax'];
	$comment = $_POST['comment'];
	$security_code = $_POST['security_code'];
	
	//header('Content-type: text/xml');

	if($name == "" || $name == "Enter your name")
	{
		$error_message .= "Invalid name";
	}
	
	if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/", $email))
	{
		$error_message .= "<br />Invalid email";
	}
	
	if(!preg_match("/^[0-9]+$/", $phone))
	{
		$error_message .= "<br />Invalid phone number";
	}
	
	
	if($fax != '') 
	{
		if(!preg_match("/^[0-9]+$/", $fax))
		{
			$error_message .= "<br />Invalid fax number";
		}
	}
	
	if(strcmp($_SESSION['security_code'] ,$security_code) != 0)
		$error_message .= "<br />Security codes do not match";
	
	//$toemail = "jamesvales226@gmail.com"; 
	$toemail = "grhodes@globaled.us";
	
	if($error_message == "") //if there is no error
	{
		
		$to  = $toemail; 
		
		$subject = "Message from ".$name. " about StudentsAbroad.com ";
		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		
		 //Additional headers
		
		$headers .=  "From: $email";
		
		// message
		$message = "Name: $name \n Institution: $institution \n Email: $email \n Phone: $phone\n";
		
		if(strcmp($department, "") != 0)
			$message .= "Department: $department\n"; 
		
		if(strcmp($address, "") != 0)
			$message .= "Address: $address\n"; 
			
		if(strcmp($fax, "") != 0)
			$message .= "Fax: $fax\n"; 
		
		if(strcmp($comment, "") != 0)
			$message .= "Comment: $comment\n"; 
		
		
		
		mail($to, $subject, $message,$headers);
		
		$confirm_message = "<br />Your message has been successfully sent. We will contact you as soon as possible.\n Thank you for your interest in StudentsAbroad.com.";
	}
}

function printResults()
{
   global $error_message;
   global $confirm_message;
   
   echo ("
   <table class=\"contact_us\" cellspacing=0 cellpadding=0 border=0 width=\"100%\" summary=\"contact_us container\">
		<tr>
			<td>
				 <form action=\"contact_us.php?sendmessage=1\" method=\"POST\" onsubmit=\"return validateContactUs();\" >
				 <table cellspacing=0 cellpadding=0 border=0 width=\"100%\" summary=\"contact_us form\">
					<tr>
						<td class=\"normal_big\" valign=\"top\" colspan=2>
							<div class=\"confirm\">$confirm_message</div><BR>
						</td>
						
					</tr>
					<tr>
						<td class=\"normal_big\" valign=\"top\" colspan=2>
							<div class=\"warning\">$error_message</div><BR>
						</td>
					</tr>
					<tr>
						<td class=\"normal\" width=\"25%\" valign=\"top\">
							<label for=\"name\">Full Name</label>:&nbsp; 
						</td>
						<td>
							<input name=\"name\" id=\"name\"  onfocus=\"this.value='';\"  value=\""); if($_POST['name']) echo $_POST['name']; else echo "Enter your name"; echo ("\" type=text size=30> <span class=\"error_subscript\"><span  name=\"name_error\" id=\"name_error\"></span></span>
						</td>
					</tr>
					<tr>
						<td class=\"normal\" valign=\"top\">
							<label for=\"institution\">Institution Name</label>:&nbsp;
						</td>
						<td>
							<input name=\"institution\" id=\"institution\"  onfocus=\"this.value='';\" value=\""); if($_POST['institution']) echo $_POST['institution']; else echo "Enter your institution name"; echo ("\" type=text size=30 maxlength=50> <span class=\"error_subscript\"><span  name=\"institution_error\" id=\"institution_error\"></span></span>
						</td>
					</tr>
					<tr>
						<td class=\"normal\" valign=\"top\">
							<label for=\"department\">Department</label>:&nbsp;
						</td>
						<td>
							<input name=\"department\" id=\"department\"  onfocus=\"this.value='';\" value=\""); if($_POST['department']) echo $_POST['department']; else echo "Enter your department"; echo ("\" type=text size=30 maxlength=50> 
						</td>
					</tr>
					<tr>
						<td class=\"normal\" valign=\"top\">
							<label for=\"email\">Email</label>:&nbsp;
						</td>
						<td>
							<input name=\"email\" id=\"email\"  onfocus=\"this.value='';\" value=\""); if($_POST['email']) echo $_POST['email']; else echo "Enter your email"; echo ("\" type=text size=30> <span class=\"error_subscript\"><span  name=\"email_error\" id=\"email_error\"></span></span>
						</td>
					</tr>
					<tr>
						<td class=\"normal\" valign=\"top\">
							<label for=\"address\">Address</label>:&nbsp;
						</td>
						<td>
							<textarea name=\"address\" id=\"address\" onfocus=\"this.value='';\"  rows=3 cols=40>"); if($_POST['address']) echo $_POST['address']; else echo "Enter your address"; echo ("</textarea>
						</td>
					</tr>
					<tr>
						<td class=\"normal\" valign=\"top\">
							<label for=\"phone\">Phone</label>:&nbsp;
						</td>
						<td>
							<input name=\"phone\" id=\"phone\"  onfocus=\"this.value='';\" value=\""); if($_POST['phone']) echo $_POST['phone']; else echo "Enter your phone number"; echo ("\" type=text size=30><span class=\"error_subscript\"> <span  name=\"phone_error\" id=\"phone_error\"></span></span>
						</td>
					</tr>
					<tr>
						<td class=\"normal\" valign=\"top\">
							<label for=\"fax\">Fax</label>:&nbsp;
						</td>
						<td>
							<input name=\"fax\" id=\"fax\"  onfocus=\"this.value='';\" value=\""); if($_POST['fax']) echo $_POST['fax']; else echo "Enter your fax number"; echo ("\" type=text size=30> <span class=\"error_subscript\"> <span  name=\"fax_error\" id=\"fax_error\"></span></span>
						
						</td>
					</tr>
					<tr>
						<td class=\"normal\" valign=\"top\">
							<label for=\"comment\">Comment</label>:&nbsp;
						</td>
						<td>
							<textarea name=\"comment\" onfocus=\"this.value='';\" id=\"comment\" cols=40 rows=8>" ); if($_POST['comment']) echo $_POST['comment']; else echo "Enter your comment"; echo ("</textarea>
						</td>
					</tr>
					<tr>
						<td colspan=2>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<img src=\"capthcha.php?width=100&height=40&characters=6\" alt=\"security character\" /><br />
						</td>
					</tr>
							
					<tr>
						<td>&nbsp;</td>
						<td class=\"normal\"><label for=\"security_code\">Please enter the characters above</label><BR><input value=\"Enter the characters above\"  onfocus=\"this.value='';\"  type=\"text\" class=\"input_big\" size=40 name=\"security_code\" id=\"security_code\" >&nbsp;<span class=\"error_small\">".$error['security_code']."</span></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td class=\"submit_button_container\">
							<input class=\"submit_button\" type=\"submit\" name=\"submit\" value=\"Submit\">
						</td>
					</tr>
				</table>
				</form>
			</td>
		</tr>
   </table>
   ");
}//end of function

function printBody()
{
global $title;
global $country;
global $error_message;
global $confirm_message;
global $user;
?>
<div id="subpage_container">
    <div id="subpage_left_container">
        <div id="subpage_left_container_top">
            <div id="nonav_subpage_content" >
                <script language="javascript">renderDiv(20);</script>
                <div>
                    <div class="huge_light_blue_bold">
                        <?=$title?>
                    </div>
                    <div class="subpage_full_text">
                        <script language="javascript">renderDiv(8);</script>
                        <p> Center for Global Education<br />
                            California State University, Dominguez Hills<br />
                            College of Extended & International Education<br />
                            1000 East Victoria St. <br />
                            Carson, CA 90747<br />
                            Telephone: <strong>(310)243-3975</strong><br />
                            Email: <strong>grhodes@globaled.us</strong><br />
                        </p>
                        <script language="javascript">renderDiv(8);</script>
                        Submit your comments, suggestions, and questions below.
                        <?php
						printResults();
						?>
                    </div>
                    <!-- end of  subpage_full_text-->
                </div>
                <!-- end of class small grey -->
                <div> &nbsp; </div>
                <p></p>
            </div>
            <!-- end of nonav_subpage_content -->
        </div>
        <!-- end of subpage_left_container_top  -->
        <div id="subpage_left_container_bottom">
            <?php //printSubpageSponsorList(); ?>
        </div>
        <!-- end of subpage_left_container_bottom -->
    </div>
    <!-- end of subpage_left_container -->
    <div id="subpage_middle_container"></div>
    <div id="subpage_right_container">
        <!--<div id="login_box">
<div id="login_box_top">
<div id="login_box_top_left"></div>
<div id="login_box_top_center" class="small_white_bold"><script language="javascript">renderDiv(3);</script>LOGIN INFO</div>
<div id="login_box_top_right"></div>
</div>
<div id="login_box_middle" class="small_dark_grey_bold">
<?php //printSubpageLoginDiv();?>
</div>
<div id="login_box_bottom">
</div>
</div>-->
        <!-- end of login_box -->
        <!--<div style="height:15px;">
</div>
<div>
<A href="#"><img src="images/int_ads.jpg" /></A>
</div>-->
    </div>
    <!-- end of subpage_right_container -->
</div>
<!-- end of subpage_container -->
<?php
}
//end of printBody
?>
