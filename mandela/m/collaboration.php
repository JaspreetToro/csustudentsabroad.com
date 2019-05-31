<?php
include "lib/common.php";


function printBody()
{
    global $mainPageTitle;
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
                        <h2 class="ribbon"><?php echo $mainPageTitle; ?></h2>
                        <div class="panel-body panel-body-content">
                          <p>We are asking colleagues at higher education associations around the world to review both of the following documents to expand the dialogue on the future or international higher education. We hope that colleauges can also provide translated versions of these documents, so that can be reviewed in the first language of those interested in international higher education collaboration. On the top right corner of this website, you can "Select a Language" to view the website content in a variety of other languages. </p>
                        </div>
                      </div>
                    </div>        
                </div>
                <div>
                	<?php printStatementModuleHome() ?> 
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

$tab = 3;
$mainPageTitle = "Collaboration";
$subPageTitle = "Statements on Internationalization";

$pageTitle = $mainPageTitle . " - " . $subPageTitle;

printHeader($tab, $pageTitle);
printBody();
printFooter(1) 

?>