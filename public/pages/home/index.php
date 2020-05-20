<?php
// Initialize the application
require_once '../../../app/core/init.php';
$user = new User();
$data = $user->data();
$portfolio = new File();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <!-- Begin Site Head -->
    <head>
        <!-- Begin Meta Data -->        
        <title>Resonance Design</title>
        <?php include_once INC_ROOT . '/includes/content/meta/main.php' ?>
        <?php include_once INC_ROOT . '/includes/content/meta/portfolio.php' ?>
        <!-- End Meta Data -->

        <link rel="pingback" href="http://resonance-designs.com/xmlrpc.php">
        <link rel="canonical" href="http://resonance-designs.com/public/index.html">
        <link rel="publisher" href="https://plus.google.com/+ResonanceDesign/">
        
        <!-- Begin Site Icons -->
        <!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="../apple-touch-icon-precomposed.png">
        <link rel="icon" href="../favicon.png">
        <!-- End Site Icons -->

        <!-- Begin Style Sheets -->
        <link rel="stylesheet" href="<?php echo PUB_ROOT; ?>/css/resonance-designs.css">
        <!-- End Style Sheets -->

        <?php include_once INC_ROOT . '/includes/content/data/top-js.php' ?>
    </head>
    <!-- End Site Head -->

    <!-- Begin App Content -->
    <body class="loading">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Begin Page Content -->
        <div id="index">
             <?php
            // User is logged in to the system
            if($user->isLoggedIn()) {        
                // If user is signed in, display the following HTML -->
                include_once INC_ROOT . '/includes/layout/admin.php';
            }
            include_once INC_ROOT . '/includes/layout/header.php'; 
            include_once INC_ROOT . '/includes/content/general/home.php';
            include_once INC_ROOT . '/includes/layout/footer.php';
            ?>
            <!-- Begin 3D Animated Navigation -->
            <nav class="rd-3d-nav-container">
                <ul class="rd-3d-nav">
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li class="rd-selected">
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#Maintenance">Dev Labs</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#blogMaintenance">Blog</a>
                    </li>
                </ul>
                <span class="rd-marker color-1"></span> 
            </nav>
            <!-- End 3D Animated Navigation -->
        </div>
        <!-- End Page Content -->

        <!-- Load JS -->
        <?php include_once INC_ROOT . '/includes/content/data/bottom-js.php'; ?>
    </body>
    <!-- End App Content -->
</html>