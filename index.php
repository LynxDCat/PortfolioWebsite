<?php
include "includes/topheader.php";
    include "includes/navbar.php";

    if (isset($_GET['page'])){
		
		$page = $_GET['page'];
		
		switch ($page){
			case 'Home':
                include "includes/topheader2.php";
                include "includes/heropage.php";
                include "includes/landing-page-intro.php";
                include "includes/landing-page-achievements.php";
                include "includes/landing-page-exp.php";
                include "includes/landing-page-skills.php";
                include "includes/landing-page-proj.php";
                include "includes/landing-page-educ.php";
				break;
			case 'About':
                include "includes/aboutme-intro.php";
                include "includes/aboutme-gallery.php";
				break;
			case 'Skills':
                include "includes/skills-timeline.php";
                include "includes/skills-skillcell.php";
				break;
			case 'Portfolio':
                include "includes/portfolio-body.php";
                break;
			case 'Contact':
                include "includes/contactme-body.php";
                break;
		}
	} 
	else{
        include "includes/topheader2.php";
        include "includes/heropage.php";
        include "includes/landing-page-intro.php";
        include "includes/landing-page-achievements.php";
        include "includes/landing-page-exp.php";
        include "includes/landing-page-skills.php";
        include "includes/landing-page-proj.php";
        include "includes/landing-page-educ.php";
	}
    include "includes/footer.php";
?>