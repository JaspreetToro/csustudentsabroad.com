<?php 
include "lib/common.php";
include "lib/conn_data.php";

//***************************************************main function**************************************************************

$page_name = "Home";
$pageTitle = "";
$menu = 1;

printHeader($page_name, $menu, "");
printBody();
printFooter();

//***************************************************end of main function*******************************************************
function printBody() {
?>

<div id="wrapper">
<div id="main-content">
    <div id="scroller">
        <div id="content">
        	<h1 id="title">About Us</h1>
            <h2>What is StudentsAbroad.com?</h2>
            <p>StudentsAbroad.com is a resource for students at all colleges and universities around the world contemplating studying abroad. Unlike other study abroad websites, the information on StudentsAbroad.com provides insight on the importance of health and safety awareness for each country specifically. Our website includes <a href="handbook/introduction.php?country=General">48 country&ndash;specific study abroad handbooks</a>, which give students the details necessary to hit the ground running and learn the ins and outs of their destination. While our <a href="handbook/introduction.php?country=General">general handbook</a> is designed as a global guide, it enriches all students&#39; understanding so they may safely and smoothly navigate their host country and become savvy travellers empowered to get the most out of their study abroad experience.</p>
            <p>Although choosing an educational program, financing education, and applying to a university abroad can be confusing and sometimes overwhelming, StudentsAbroad.com enables students to research program offerings and access resources that guide them each step of the way&ndash;from learning basic phrases to becoming acquainted with the local transportation system. </p>
            <p>StudentsAbroad.com facilitates not only students&#39;, but also parents&#39;, learning about the various challenges faced in the study abroad experience, which include culture shock, drug and alcohol abuse, and general mental health. In addition to these tools, the "<a href="http://directory.studentsabroad.com/index.cfm?FuseAction=Programs.SimpleSearch">Program Search</a>" option encourages students to explore the study abroad option best fitting their interests, especially in non-traditional study abroad countries, such as Thailand, Morocco, Peru and Turkey. Such search innovations make essential information accessible, which assist students in finding the program perfect for them!</p>
            <h2>Who's behind StudentsAbroad.com?</h2>
            <p>This website was created with the help of staff, and returned study abroad students at the Center for Global Education at the UCLA Graduate School of Education and Information Studies. We hope this content will help you find a quality program, have a great study abroad experience, and then return home to integrate your international learning in the U.S. We are very enthusiastic about helping study abroad students and hope you can learn a lot from this website!</p>
        </div>
    </div>
    <div id="sponsor"> <?php printBannerSponsor() ?> </div>
</div>
<?php
}
?>
