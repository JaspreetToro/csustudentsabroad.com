<?php
include "lib/common.php";


function printBody()
{
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
            <?php printAboutHome() ?>
            <?php printStatementModuleHome() ?> 
            <?php printDialogueHome() ?>
            <?php printCalendarHome() ?>  
            <?php printResourcesHome() ?>
          </div>
        </div>
        <div class="col-sm-4 main-sidebar">
           
          <?php
            printSideModule1();
            printSideModule2Home();
            printSideModule3();
          ?>
        </div>  
<?php
}

/* Main */

$tab = 0;
$mainPageTitle = "Home";
$subPageTitle = "";

printHeader($tab, $mainPageTitle);
printBody();
printFooter(1) 

?>