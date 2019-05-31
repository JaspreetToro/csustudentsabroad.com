<?php
include "lib/common.php";


function printBody()
{
	global $mainPageTitle, $subPageTitle;
?>


        <div class="col-sm-8 main-module">
          <div>
            <div class="main-module-wrapper banner-module">
                <div class="panel banner-panel">  
                <?php echo printBannerOld() ?>
                </div>
            </div>
          </div>
          <div>
            <div class="panel-module">
              <div class="panel">
                <h2 class="ribbon"><?php echo $mainPageTitle?></h2>
                <div class="panel-body panel-body-content">            
                <div>
					<?php printForm() ?>	                
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

function printForm() {
?>
<div class="form_container">
	<div class="form_wrapper">
    	<div class="resources_label"><p>We would like to hear from you!</p></div>
        <div class="resources_brief"><p>Please feel free to use the form below should you have any questions, comments or suggestions.</p></div>
        <form id="form" action="process.php" method="post" role="form">
            <section>
                <div id="name-group" class="form-group row_wrapper">
                    <label for="name"><span>Name*:</span></label>
                    <input class="form-control" placeholder="Your name" type="text" name="name" required >                    
                </div>
                <div id="email-group" class="form-group row_wrapper">
                    <label for="email"><span>Email*:</span></label>
                    <input class="form-control" placeholder="Email address" type="email" name="email" required >
                    
                </div>
                <div id="institution-group" class="form-group row_wrapper">
                    <label for="institition"><span>Institution:</span></label>
                    <input class="form-control" placeholder="Institution name" type="text" name="institution">                   
                </div>
                <div id="department-group" class="form-group row_wrapper">
                    <label for="department"><span>Department:</span></label>
                    <input class="form-control" placeholder="Department name" type="text" name="department">                   
                </div>                
                <div id="message-group" class="form-group row_wrapper">
                    <label for="comment"><span>Message*:</span></label>
                    <textarea class="form-control" placeholder="Send us a message" name="comment" required ></textarea>                    
                </div>                
            </section>
            <section>
                <div class="row_wrapper">
                    <button class="btn btn-primary" name="submit" type="submit" id="submit">Submit</button>
                </div>
            </section>            
        </form>
        <div class="alert">Note: * Fields are required</div>
    </div>   
</div>
<?php
}
/* Main */

$tab = 2;
$mainPageTitle = "Contact Us";
$subPageTitle = "Welcome to UniWorldWide";

printHeader($tab, $mainPageTitle);
printBody();
printFooter(1) 

?>