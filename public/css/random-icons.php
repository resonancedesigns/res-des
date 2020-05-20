<?php
// Set the content type header
header("Content-type: text/css");

// Random "About" navigation icon
$aboutIcons = array('about-1.svg'/*, 'about-2.svg', 'about-3.svg', 'about-4.svg'*/ );
$aboutRandom = rand(0, count($aboutIcons)-1);
$aboutSelected = "$aboutIcons[$aboutRandom]";

// Random "Portfolio" navigation icon
$portfolioIcons = array('portfolio-1.svg' );
$portfolioRandom = rand(0, count($portfolioIcons)-1);
$portfolioSelected = "$portfolioIcons[$portfolioRandom]";

// Random "Dev Labs" navigation icon
$devlabsIcons = array(/*'dev-1.svg', 'dev-2.svg', */'dev-3.svg'/*, 'dev-4.svg', 'dev-5.svg', 'dev-6.svg', 'dev-7.svg'*/ );
$devlabsRandom = rand(0, count($devlabsIcons)-1);
$devlabsSelected = "$devlabsIcons[$devlabsRandom]";

// Random "Articles" navigation icon
$articlesIcons = array('articles-1.svg' );
$articlesRandom = rand(0, count($articlesIcons)-1);
$articlesSelected = "$articlesIcons[$articlesRandom]";

// Random "Contact" navigation icon
$contactIcons = array(/*'contact-1.svg', 'contact-2.svg', */'contact-3.svg' );
$contactRandom = rand(0, count($contactIcons)-1);
$contactSelected = "$contactIcons[$contactRandom]";
?>

.rd-3d-nav li:first-of-type a::before {
    background-image: url(../img/nav-icons/<?php echo $aboutSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(2) a::before {
    background-image: url(../img/nav-icons/<?php echo $portfolioSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(3) a::before {
    background-image: url(../img/nav-icons/<?php echo $devlabsSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(4) a::before {
    background-image: url(../img/nav-icons/<?php echo $contactSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(5) a::before {
    background-image: url(../img/nav-icons/<?php echo $articlesSelected; ?>); 
}