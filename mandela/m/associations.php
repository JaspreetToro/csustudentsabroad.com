<?php
include "lib/common.php";

            
function printBody()
{
?>
        <div class="col-sm-8 main-module">
        	<div class="main-module-wrapper banner-module">
                <div class="panel banner-panel">  
                <?php echo printBannerOld() ?>
                </div>
            </div>
            <div>
                <div class="panel-module">
                  <div class="panel">
                    <h2 class="ribbon"><a name="IHEA"></a>International Higher Education Associations</h2>
                    <div class="panel-body panel-body-content">
                    	<p>The following associations support international higher education collaboration:</p>
                        <?php echo getAssociationHome("current"); ?>
                    </div>
                  </div> 
                </div>
                
                <div class="panel-module">
                  <div class="panel">
                    <h2 class="ribbon"><a name="IHEO"></a>International Higher Education Organizations</h2>
                    <div class="panel-body panel-body-content">
                    	<p>The following organizations support international higher education collaboration:</p>
                        <?php echo getAssociationHome("others"); ?>
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

$tab = 6;
$mainPageTitle = "International Higher Education Associations &amp; Organizations";
$subPageTitle = "";

printHeader($tab, $mainPageTitle);
printBody();
printFooter(1) 

?>