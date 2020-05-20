<?php
// Set the content type header
header("Content-type: text/css");

// Random "About" navigation icon
$aboutIcons = array('icon-1.svg', 'icon-2.svg', 'icon-3.svg', 'icon-4.svg' );
$aboutRandom = rand(0, count($aboutIcons)-1);
$aboutSelected = "$aboutIcons[$aboutRandom]";

// Random "Portfolio" navigation icon
$portfolioIcons = array('icon-1.svg', 'icon-2.svg', 'icon-3.svg', 'icon-4.svg' );
$portfolioRandom = rand(0, count($portfolioIcons)-1);
$portfolioSelected = "$portfolioIcons[$portfolioRandom]";

// Random "Dev Labs" navigation icon
$devlabsIcons = array('icon-1.svg', 'icon-2.svg', 'icon-3.svg', 'icon-4.svg' );
$devlabsRandom = rand(0, count($devlabsIcons)-1);
$devlabsSelected = "$devlabsIcons[$devlabsRandom]";

// Random "Articles" navigation icon
$articlesIcons = array('icon-1.svg', 'icon-2.svg', 'icon-3.svg', 'icon-4.svg' );
$articlesRandom = rand(0, count($articlesIcons)-1);
$articlesSelected = "$articlesIcons[$articlesRandom]";

// Random "Contact" navigation icon
$contactIcons = array('icon-1.svg', 'icon-2.svg', 'icon-3.svg', 'icon-4.svg' );
$contactRandom = rand(0, count($contactIcons)-1);
$contactSelected = "$contactIcons[$contactRandom]";
?>

/* ==========================================================================
   Base & Primary Styles 
   ========================================================================== */
html,
body {
	font-family: 'Nunito', sans-serif;
	background-color: #319EA4;
}

/* Chrome Frame prompt */
.chromeframe {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}

.clear-padding {
	padding: 0;
}

.clear-margins {
	margin: 0;
}

/* ==========================================================================
   Color Scheme
   ========================================================================== */
.color-1 {
	color: #9A57BD; 
}

.color-2 {
  	color: #C96AA4; 
}

.color-3 {
  	color: #D6915E; 
}

.color-4 {
  	color: #5397C7; 
}

.color-5 {
  	color: #07AC5A; 
}

/* ==========================================================================
   3D Animated Navigation
   ========================================================================== */
.rd-header {
  	height: 80px;
  	width: 100%;
  	padding: 0 5%;
  	background-color: #333;
  	-webkit-transition: -webkit-transform 0.5s;
  	-moz-transition: -moz-transform 0.5s;
  	transition: transform 0.5s;
  	/* Force Hardware Acceleration in WebKit */
  	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-box-shadow: 0px 8px 8px 0px rgba(0, 14, 25, 0.75);
	-moz-box-shadow:    0px 8px 8px 0px rgba(0, 14, 25, 0.75);
	box-shadow:         0px 8px 8px 0px rgba(0, 14, 25, 0.75);
}

.rd-header:after {
    content: "";
    display: table;
    clear: both; 
}

.rd-header.nav-is-visible {
    -webkit-transform: translateY(80px);
    -moz-transform: translateY(80px);
    -ms-transform: translateY(80px);
    -o-transform: translateY(80px);
    transform: translateY(80px); 
}
@media only screen and (min-width: 768px) {
    .rd-header.nav-is-visible {
		-webkit-transform: translateY(170px);
		-moz-transform: translateY(170px);
		-ms-transform: translateY(170px);
		-o-transform: translateY(170px);
		transform: translateY(170px); 
	}
}

.rd-logo {
  	float: left;
  	margin-top: 14px;
  	margin-right: 14px;
}

.rd-logo-img {
  	height: 52px;
}

.rd-title {
  	font-size: 2em;
  	line-height: 2.8em;
  	text-transform: uppercase;
  	color: #FFF;
}

.rd-3d-nav-trigger {
	position: relative;
	float: right;
	height: 45px;
	width: 45px;
	margin-top: 18px;
	/* replace text with background image */
	overflow: hidden;
	text-indent: 100%;
	white-space: nowrap;
	color: transparent; 
}

.rd-3d-nav-trigger span,
.rd-3d-nav-trigger span::before,
.rd-3d-nav-trigger span::after {
	/* hamburger icon in CSS */
	position: absolute;
	width: 28px;
	height: 3px;
	background-color: #FFF;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden; 
}

.rd-3d-nav-trigger span {
	/* this is the central line */
	top: 21px;
	left: 8px;
	-webkit-transition: background 0.2s 0.5s;
	-moz-transition: background 0.2s 0.5s;
	transition: background 0.2s 0.5s; 
}

.rd-3d-nav-trigger span::before, 
.rd-3d-nav-trigger span:after {
	/* these are the upper and lower lines */
	content: '';
	left: 0;
	-webkit-transition: -webkit-transform 0.2s 0.5s;
	-moz-transition: -moz-transform 0.2s 0.5s;
	transition: transform 0.2s 0.5s; 
}

.rd-3d-nav-trigger span::before {
    bottom: 8px; 
}

.rd-3d-nav-trigger span::after {
    top: 8px; 
}

.nav-is-visible .rd-3d-nav-trigger span {
    /* hide line in the center */
    background-color: rgba(255, 255, 255, 0); 
}

.nav-is-visible .rd-3d-nav-trigger span::before, 
.nav-is-visible .rd-3d-nav-trigger span::after {
	/* keep visible other 2 lines */
	background-color: white; 
}

.nav-is-visible .rd-3d-nav-trigger span::before {
	-webkit-transform: translateY(8px) rotate(-45deg);
	-moz-transform: translateY(8px) rotate(-45deg);
	-ms-transform: translateY(8px) rotate(-45deg);
	-o-transform: translateY(8px) rotate(-45deg);
	transform: translateY(8px) rotate(-45deg); 
}

.nav-is-visible .rd-3d-nav-trigger span::after {
	-webkit-transform: translateY(-8px) rotate(45deg);
	-moz-transform: translateY(-8px) rotate(45deg);
	-ms-transform: translateY(-8px) rotate(45deg);
	-o-transform: translateY(-8px) rotate(45deg);
	transform: translateY(-8px) rotate(45deg); 
}

.rd-3d-nav-container {
	/* this is the 3D navigation container */
	position: fixed;
	top: 0;
	left: 0;
	height: 80px;
	width: 100%;
	background-color: #000000;
	visibility: hidden;
	/* enable a 3D-space for children elements */
	-webkit-perspective: 1000px;
	-moz-perspective: 1000px;
	perspective: 1000px;
	-webkit-transform: translateY(-100%);
	-moz-transform: translateY(-100%);
	-ms-transform: translateY(-100%);
	-o-transform: translateY(-100%);
	transform: translateY(-100%);
	-webkit-transition: -webkit-transform 0.5s 0s, visibility 0s 0.5s;
	-moz-transition: -moz-transform 0.5s 0s, visibility 0s 0.5s;
	transition: transform 0.5s 0s, visibility 0s 0.5s; 
}

.rd-3d-nav-container.nav-is-visible {
    visibility: visible;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    -webkit-transition: -webkit-transform 0.5s 0s, visibility 0.5s 0s;
    -moz-transition: -moz-transform 0.5s 0s, visibility 0.5s 0s;
    transition: transform 0.5s 0s, visibility 0.5s 0s; 
}

@media only screen and (min-width: 768px) {
    .rd-3d-nav-container {
		height: 170px; 
	} 
}

.rd-3d-nav {
	/* this is the 3D rotating navigation */
	position: relative;
	height: 100%;
	background-color: #008A92;
	/* Force Hardware Acceleration */
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transform-origin: center bottom;
	-moz-transform-origin: center bottom;
	-ms-transform-origin: center bottom;
	-o-transform-origin: center bottom;
	transform-origin: center bottom;
	-webkit-transform: rotateX(90deg);
	-moz-transform: rotateX(90deg);
	-ms-transform: rotateX(90deg);
	-o-transform: rotateX(90deg);
	transform: rotateX(90deg);
	-webkit-transition: -webkit-transform 0.5s;
	-moz-transition: -moz-transform 0.5s;
	transition: transform 0.5s; 
}

.rd-3d-nav::after {
    /* menu dark cover layer - to enhance perspective effect */
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #000000;
    opacity: 1;
    visibility: visible;
    -webkit-transition: opacity 0.5s 0s, visibility 0.5s 0s;
    -moz-transition: opacity 0.5s 0s, visibility 0.5s 0s;
    transition: opacity 0.5s 0s, visibility 0.5s 0s; 
}

.rd-3d-nav li {
    height: 100%;
    width: 20%;
    float: left; 
}

.rd-3d-nav li:first-of-type a::before {
    background-image: url(../img/<?php echo $aboutSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(2) a::before {
    background-image: url(../img/<?php echo $portfolioSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(3) a::before {
    background-image: url(../img/<?php echo $devlabsSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(4) a::before {
    background-image: url(../img/<?php echo $articlesSelected; ?>); 
}

.rd-3d-nav li:nth-of-type(5) a::before {
    background-image: url(../img/<?php echo $contactSelected; ?>); 
}

.rd-3d-nav a {
    position: relative;
    display: block;
    height: 100%;
    color: transparent;
    -webkit-transition: background-color 0.2s;
    -moz-transition: background-color 0.2s;
    transition: background-color 0.2s; 
}

.rd-3d-nav a::before {
	/* navigation icons */
	content: '';
	height: 32px;
	width: 32px;
	position: absolute;
	left: 50%;
	top: 50%;
	bottom: auto;
	right: auto;
	-webkit-transform: translateX(-50%) translateY(-50%);
	-moz-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	-o-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
	background-size: 32px 64px;
	background-repeat: no-repeat;
	background-position: 0 0; 
}

.no-touch .rd-3d-nav a:hover {
    background-color: #00666C; 
}

.rd-3d-nav .rd-selected a {
    background-color: #004245; 
}

.no-touch .rd-3d-nav .rd-selected a:hover {
    background-color: #004245; 
}

.rd-3d-nav .rd-selected a::before {
    background-position: 0 -32px; 
}

.nav-is-visible .rd-3d-nav {
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0); 
}

.nav-is-visible .rd-3d-nav::after {
	/* menu cover layer - hide it when navigation is visible */
	opacity: 0;
	visibility: hidden;
	-webkit-transition: opacity 0.5s 0s, visibility 0s 0.5s;
	-moz-transition: opacity 0.5s 0s, visibility 0s 0.5s;
	transition: opacity 0.5s 0s, visibility 0s 0.5s; 
}

@media only screen and (min-width: 768px) {
    .rd-3d-nav a {
		padding: 7.6em 1em 0;
		color: #ffffff;
		font-size: 1.3rem;
		font-weight: 600;
		text-align: center;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		/* truncate text with ellipsis if too long */
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis; 
	}

    .rd-3d-nav a::before {
        top: 4.4em;
        left: 50%;
        right: auto;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%); 
    } 
}

.rd-marker {
	/* line at the bottom of nav selected item */
	position: absolute;
	bottom: 0;
	left: 0;
	height: 3px;
	width: 20%;
	background-color: currentColor;
	-webkit-transform-origin: center bottom;
	-moz-transform-origin: center bottom;
	-ms-transform-origin: center bottom;
	-o-transform-origin: center bottom;
	transform-origin: center bottom;
	-webkit-transform: translateZ(0) rotateX(90deg);
	-moz-transform: translateZ(0) rotateX(90deg);
	-ms-transform: translateZ(0) rotateX(90deg);
	-o-transform: translateZ(0) rotateX(90deg);
	transform: translateZ(0) rotateX(90deg);
	-webkit-transition: -webkit-transform 0.5s, left 0.5s, color 0.5s, background-color 0.5s;
	-moz-transition: -moz-transform 0.5s, left 0.5s, color 0.5s, background-color 0.5s;
	transition: transform 0.5s, left 0.5s, color 0.5s, background-color 0.5s; 
}

.rd-marker::before {
    /* triangle at the bottom of nav selected item */
    content: '';
    position: absolute;
    bottom: 3px;
    left: 50%;
    right: auto;
    -webkit-transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    transform: translateX(-50%);
    height: 0;
    width: 0;
    border: 10px solid transparent;
    border-bottom-color: inherit; 
}

.nav-is-visible .rd-marker {
    -webkit-transform: translateZ(0);
    -moz-transform: translateZ(0);
    -ms-transform: translateZ(0);
    -o-transform: translateZ(0);
    transform: translateZ(0); 
}

/* ==========================================================================
   Main Content
   ========================================================================== */
main {
	-webkit-transition: -webkit-transform 0.5s;
	-moz-transition: -moz-transform 0.5s;
	transition: transform 0.5s;
	/* Force Hardware Acceleration in WebKit */
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	overflow-x: hidden;
}

main h1 {
    text-align: center;
    font-size: 2.4rem;
    font-weight: 300;
    color: #ffffff;
    margin: 2em auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale; 
}

main.nav-is-visible {
    -webkit-transform: translateY(80px);
    -moz-transform: translateY(80px);
    -ms-transform: translateY(80px);
    -o-transform: translateY(80px);
    transform: translateY(80px); 
}

@media only screen and (min-width: 768px) {
    main.nav-is-visible {
		-webkit-transform: translateY(170px);
		-moz-transform: translateY(170px);
		-ms-transform: translateY(170px);
		-o-transform: translateY(170px);
		transform: translateY(170px); 
	}

    main h1 {
		font-size: 3.6rem;
		margin: 4em auto; 
	} 
}

/* ==========================================================================
   Paralax Scrolling
   ========================================================================== */
.no-js {
	padding-top: 106px;
}

h2 {
	margin-top: 0;
}

.loading {
	background: url('../img/ico_loading.gif') no-repeat center center;
}

section {
	min-width: 960px;
	opacity: 0;
}

.loaded section,
.no-js section {
	opacity: 1;
	-webkit-transition: opacity 300ms ease-out;
	-moz-transition: opacity 300ms ease-out;
	transition: opacity 300ms ease-out;
}

#preload {
	width: 1px;
	height: 1px;
	overflow: hidden;
	position: absolute;
	top: 0;
	left: 0;
}

.bcg {
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	height: 100%;
	width: 100%;
}

.hsContainer {
	width: 100%;
	height: 100%;
	overflow: hidden;
	position: relative;
}

.hsContent {
	max-width: 700px;
	position: absolute;
	left: 50%;
	top: 50%;
}

.hsContent h2  {
	color: #fff8de;
	background-color: rgba(0,0,0,0.5);
	padding: 10px 5px;
	font-size: 35px;
	line-height: 38px;
	margin-bottom: 12px;
}

.hsContent p {
	width: 400px;
	color: #b2b2b2;
}

.hsContent a {
	color: #b2b2b2;
	text-decoration: underline;
}

/* Slide 1 */
#slide-1 .bcg {
	background-image:url('../img/bcg_slide-1.jpg');
}

#slide-1 .hsContent {
	bottom: 200px;
	top: auto;
}

/* Slide 2 */
#slide-2 .bcg {
	background-image:url('../img/bcg_slide-2.jpg');
}

#slide-2 .hsContent {
	margin-left: -450px;
	top: auto;
}

#slide-2 h2 {
	top: 70%;
}

/* Slide 3 */
#slide-3 .bcg {
	background-image:url('../img/bcg_slide-3.jpg');
}

#slide-3 .hsContent {
	margin-left: -239px;
}

#slide-3 h2 {
	color: #f2ead6;
	background-color: rgba(0,0,0,0.6);
}

/* Slide 4 */
#slide-4 .bcg {
	background-image:url('../img/bcg_slide-4.jpg');
}

#slide-4 .hsContent {
	margin-left: -450px;
	top: 250px;
}

#slide-4 h2 {
	background: none;
	padding-left: 0;
	padding-right: 0;
}