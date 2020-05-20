<?php
// Initialize the application
require_once '../../../app/core/init.php';
$user = new User();
$data = $user->data();

// Create variables for backup error msgs if ajax functionality fails
$sentDisplay = "";
$errorsDisplay = "";
// Check if the form was submitted
if(Input::exists()) {
    // Run form validation to check for errors
    $validate = new Validate();
    $validation = $validate->check($_POST, array(
        'contactName' => array(
            'required' => true,
            'min' => 2,
            'max' => 50
        ),
        'contactEmail' => array(
            'required' => true,
            'max' => 128
        ),
        'projectTitle' => array(
            'required' => true
        ),
        'projectDescription' => array(
            'required' => true
        )
    ));
    // If form validation finds no errors, send the message
    if($validation->passed()) {
        if (Input::get('optIn') != '') {
            $optIn = "
                <h3>More</h3>
                <p>Opt-In: Yes</p>
            ";
        } else {
            $optIn = "";
        }
        // Send an email to me containing the form information
        smtpmailer(
            // Users email address
            'resonance.designs.com@gmail.com',
            // Email address send from 
            'resonance.designs.com@gmail.com',
            // Name sent from
            'Resonance-Designs.com Contact Form',
            // Email subject
            'You have a new message from ' . Input::get('contactEmail') . ' (' . Input::get('contactName') . ') via your Resonance-Designs.com contact form',
            // Email body
            "<h1>Hello Richard!</h1>
            <p>Here are the details of the message sent to you from " . Input::get('contactEmail') . " (" . Input::get('contactName') . ") via your Resonance-Designs.com contact form</p>
            <h3>Contact Details</h3>
            <p>Name: " . Input::get('contactName') . "</p>
            <p>Email: " . Input::get('contactEmail') . "</p>
            <p>Other Contact Methods: " . Input::get('contactAdditional') . "</p>
            <p>Website: " . Input::get('contactWebsite') . "</p>
            <p>Referrer: " . Input::get('contactReferrer') . "</p>
            <h3>Project Details</h3>
            <p>Budget: " . Input::get('projectBudget') . "</p>
            <p>Start Date: " . Input::get('projectStart') . "</p>
            <p>Title: " . Input::get('projectTitle') . "</p>
            <p>Description: " . Input::get('projectDescription') . "</p>
            " . $optIn . ""
        );
        $sentDisplay .= '
        <script>
            $(window).load(function(){
                $("#sentModal").modal("show");
            });
        </script>
        <div class="modal fade" id="sentModal" tabindex="-1" role="dialog" aria-labelledby="modal-label-sentModal">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modal-label-Maintenance">Message Sent</h4>
                    </div>
                    <div class="modal-body">
                        <img class="img-responsive center-block" src="' . PUB_ROOT . '/img/logo.png" width="180" alt="Resonance Design Logo">
                        <p class="text-center">Your message was sent successfully. You should receive a response within 24 business hours.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        ';
    // If form validation finds errors, display those errors to the guest
    } else {
        $errorsDisplay .= "<ul id='errorList' class='errorList'>";
        foreach ($validation->errors() as $error) {
            include INC_ROOT . '/includes/language/errors.php';
            $errorsDisplay .= "<li class='errors'>$error</li>";
        }
        $errorsDisplay .= "</ul>";
    }
}
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
        <link rel="apple-touch-icon" href="<?php echo PUB_ROOT; ?>/apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo PUB_ROOT; ?>/apple-touch-icon-precomposed.png">
        <link rel="icon" href="<?php echo PUB_ROOT; ?>/favicon.png">
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
            include_once INC_ROOT . '/includes/content/general/contact.php';
            include_once INC_ROOT . '/includes/layout/footer.php';
            ?>
            <!-- Begin 3D Animated Navigation -->
            <nav class="rd-3d-nav-container">
                <ul class="rd-3d-nav">
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#devMaintenance">Dev Labs</a>
                    </li>
                    <li class="rd-selected">
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
        <!-- Message Sent Modal -->
        <?php print $sentDisplay; ?>
    </body>
    <!-- End App Content -->
</html>