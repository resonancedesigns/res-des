<!-- Begin Preload -->
<div id="preload">
    <!-- 
    Make sure images load before page is fully loaded 
    <img src="img/bcg_slide-1.jpg">
    <img src="img/bcg_slide-2.jpg">
    <img src="img/bcg_slide-3.jpg">
    <img src="img/bcg_slide-4.jpg">
    -->
</div>
<!-- End Preload -->

<!-- Begin Main Content -->
<main id="labs">
    <div class="container-fluid clear-padding">
        <div class="row-fluid">
            <div class="col-lg-12 clear-padding">

                <!-- Begin Parallax Scrolling Slides -->
                <section id="contactIntro">
                    <div class="bcg" data-center="background-color:hsl(183, 54%, 41.8%);" data-top-bottom="background-color:hsl(184, 74.9%, 50%);" data-anchor-target="#contactIntro">
                        <div class="hsContainer">
                            <div id="contactIntroContainer" data-center="opacity: 1" data-anchor-target="#contactHeader">
                                
                                <header id="contactHeader" class="intro">
                                    <div class="group">
                                        <h1>Contact Resonance Design</h1>
                                        <h2>Send your inquiry to hire Richard.</h2>
                                    </div>
                                </header>
                                
                            </div>
                        </div>
                    </div>
                </section>

                <section id="contactContent">
                    <div class="bcg">
                        <div class="hsContainer">
                            <div class="hsContent">
                                <div id="myResume">
                                    <section class="myResume">
                                        <p>Please fill out the form below to enquire about hiring me. To learn about how I work and the value I can bring to your project, please visit <a href="/about">About</a> or to see what I’ve produced for other clients, view my <a href="/portfolio">Portfolio</a>.</p>
                                        <p><small><span class="color-1">*</span> Denotes a required field.</small></p>
                                        <!-- Start contact form -->
                                        <form action="" method="POST" class="form-horizontal" role="form" id="contact-form" >
                                            <h4 class="color-1">About You</h4>
                                            <div class="form-group">
                                                <label for="contactName" class="col-sm-12">Your name <span class="color-1">*</span></label>
                                                <div class="col-sm-12">
                                                    <input id="contactName" type="text" class="form-control required" name="contactName" aria-required="true" data-parsley-group="reqFields" data-parsley-trigger="change" placeholder="eg. Richard Bakos" autocomplete="off" maxlength="50" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactEmail" class="col-sm-12">Your email <span class="color-1">*</span></label>
                                                <div class="col-sm-12">
                                                    <input id="contactEmail" type="email" class="form-control required" name="contactEmail" aria-required="true" data-parsley-group="reqFields" data-parsley-trigger="change" placeholder="eg. info@resonance-designs.com" autocomplete="off" maxlength="128" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactAdditional" class="col-sm-12">Contact methods<br>
                                                Telephone, Skype, Google Hangouts</label>
                                                <div class="col-sm-12">
                                                    <input id="contactAdditional" type="text" class="form-control" name="contactAdditional" placeholder="eg. 1-872-222-5671" autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactWebsite" class="col-sm-12">Your website</label>
                                                <div class="col-sm-12">
                                                    <input id="contactWebsite" type="text" class="form-control" name="contactWebsite" placeholder="eg. resonance-designs.com" autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactReferrer" class="col-sm-12">How did you hear about Resonance-Designs.com?</label>
                                                <div class="col-sm-12">
                                                    <input id="contactReferrer" type="text" class="form-control" name="contactReferrer" placeholder="eg. Google, Twitter, referred by..., etc" autocomplete="off" />
                                                </div>
                                            </div>
                                            <h4 class="color-1">Project Details</h4>
                                            <p>Please specify a budget and ideal start date. This helps me determine the best solution for your circumstances.</p>
                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <label for="projectBudget">Budget</label>
                                                    <input id="projectBudget" type="text" class="form-control" name="projectBudget" placeholder="eg. $2,000 USD" autocomplete="off" />
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="projectStart">Start date</label>
                                                    <select id="projectStart" class="form-control" name="projectStart">
                                                        <option value="None selected">Please select</option>
                                                        <option value="within 1 month">within 1 month</option>
                                                        <option value="1 - 2 months">1 - 2 months</option>
                                                        <option value="2 - 3 months">2 - 3 months</option>
                                                        <option value="3+ months">3+ months</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="color-1">Project Description</h4>
                                            <p>Please briefly describe your project, what you aim to achieve, what you'd like me to do, and link to any appropriate materials (such as PSDs available via Dropbox).</p>
                                            <div class="form-group">
                                                <label for="projectTitle" class="col-sm-12">Title <span class="color-1">*</span></label>
                                                <div class="col-sm-12">
                                                    <input id="projectTitle" type="text" class="form-control required" name="projectTitle" aria-required="true" data-parsley-group="reqFields" data-parsley-trigger="change" placeholder="eg. Resonance Design: A Portfolio" autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="projectDescription" class="col-sm-12">Description <span class="color-1">*</span></label>
                                                <div class="col-sm-12">
                                                    <textarea id="projectDescription" class="form-control required" name="projectDescription" rows="10" aria-required="true" data-parsley-group="reqFields" data-parsley-trigger="change" autocomplete="off"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">
                                                    <input id="optIn" type="checkbox" name="optIn" value="Yes" checked="">
                                                    <span>Send me news, updates, and offers from Resonance-Designs.com in the future</span>
                                                    <br>
                                                    <small><em>I promise to keep your details private and send emails only very occasionally. You may unsubscribe at any time.</em></small>
                                                </label>
                                            </div>
                                            <div class="invalid-form-error-message"></div>
                                            <div class="form-group">
                                                <div id="error-msgs" class="col-sm-8">
                                                    <!-- Display validation errors is any exist -->
                                                    <?php print $errorsDisplay; ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    <button id="sendBtn" type="submit" name="submit" class="btn btn-default btn-resdes pull-right">Send</button>
                                                </div>
                                                <span id="status"></span>
                                            </div>
                                        </form>
                                        <!-- End contact form -->
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Parallax Scrolling Slides -->
            </div>
        </div>
    </div>
</main>
<!-- End Main Content -->

<!-- Begin Modal Content -->
<!-- Dev Labs Maintenance Modal -->
<div class="modal fade" id="devMaintenance" tabindex="-1" role="dialog" aria-labelledby="modal-label-devMaintenance">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-devMaintenance">Undergoing Maintenance</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive center-block" src="<?php echo PUB_ROOT ?>/img/logo.png" width="180" alt="Resonance Design Logo">
                <p class="text-center">Sorry for the inconvienience but, the Dev Labs is undergoing some major maintenance and revisions. Please check back later.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Blog Maintenance Modal -->
<div class="modal fade" id="blogMaintenance" tabindex="-1" role="dialog" aria-labelledby="modal-label-blogMaintenance">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-blogMaintenance">Undergoing Maintenance</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive center-block" src="<?php echo PUB_ROOT ?>/img/logo.png" width="180" alt="Resonance Design Logo">
                <p class="text-center">Sorry for the inconvienience but, the Blog is undergoing some major maintenance and revisions. Please check back later.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Content -->