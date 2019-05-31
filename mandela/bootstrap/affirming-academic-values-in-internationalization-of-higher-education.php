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
                
                <div>
                    <div class="panel-module">
                      <div class="panel">
                        <h2 class="ribbon"><?php echo "<a href='collaboration.php'>". $mainPageTitle . "</a> | " . $subPageTitle ?></h2>
                        <div class="panel-body panel-body-content">
                                        
                        <?php
                        $language = htmlspecialchars($_GET["lang"]);
                        
                        if ($language == "en") {
                            include "articles/IAU-en.html";
                        } elseif ($language == "fr"){	
                            include "articles/IAU-fr.html";
                        } else {
                            include "articles/IAU-en.html";
                        }
                        ?> 
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

$tab = 3;
$mainPageTitle = "Collaboration";
$subPageTitle = "Statements on Internationalization";

$articleTitle = "Affirming Academic Values in Internationalization of Higher Education: A Call for Action";
$articleTitlefr = "Renforcer les valeurs académiques dans l’internationalisation de l’enseignement supérieur";

$pageTitle = $mainPageTitle . " - " . $subPageTitle . " - " . $articleTitle;

printHeader($tab, $pageTitle);
printBody();
printFooter(1) 

?>