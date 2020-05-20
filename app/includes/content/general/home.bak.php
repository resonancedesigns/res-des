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
<main>
    <div class="container-fluid clear-padding">
        <div class="row-fluid">
            <div class="col-lg-12 clear-padding">

                <!-- Begin Parallax Scrolling Slides -->
                <section id="portfolioHeader" class="homeSlide">
                    <div class="bcg" data-0="background-position: 0% 53%;" data-center="background-position: 250% 53%; background-color:hsl(183, 54%, 41.8%);" data-top-bottom="background-position: 500% -60%; background-color:hsl(184, 74.9%, 50%);" data-anchor-target="#portfolioHeader">
                        <div class="hsContainer">
                            <div class="hsContent" data-center="bottom: 520px; opacity: 1" data-200="bottom: 1200px; opacity: 0" data-anchor-target="#portfolioHeader h2">

                                <!-- Begin Jumbo Header -->
                                <header class="intro">
                                    <h2 class="portfolioHeader">Modern, elegant, and eye catching visual designs combined with practical, useful, and empowering web application development.</h2>
                                    <a href="#" id="portfolioButton" class="button">View Portfolio
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </header>
                                <!-- End Jumbo Header -->

                            </div>
                        </div>
                    </div>
                </section>

                <div id="portfolioScroll"></div>

                <section id="portfolioContent" class="featured work">
                    <div class="bcg" data-0="background-position: 0% 153%; background-color:hsl(183, 54%, 41.8%);" data-center="background-position: 250% 53%; background-color:hsl(184, 74.9%, 50%);" data-top-bottom="background-position: 500% -60%;" data-anchor-target="#portfolioContent">
                        <div class="hsContainer">
                            <div class="hsContent" data-0="opacity: 0;" data-500="opacity: 1;" data-anchor-target="#portfolioContent h2">
                                
                                <!-- Begin Portfolio Pieces -->
                                <div id="portfolioContainer">
                                    <h2 id="portfolio">— Featured Work —</h2>
                                    <ul id="portfolioPieces" class="three-up no-gutter">
                                        <?php $portfolio->portfolioList('Portfolio', 'Dev', 'Yes'); ?>
                                        <!-- Portfolio: Reel Angel -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #FFFFFF" data-toggle="modal" data-target="#rd-portfolio-Reel-Angel">
                                                <img class="img-responsive" src="http://placehold.it/240x240" alt="Reel Angel">
                                            </a>
                                            <h3>Reel Angel <small>Film Portfolio</small>
                                            <p>Custom CMS, HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->
                                        
                                        <!-- Portfolio: MMI Studios -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #A8A8A8" data-toggle="modal" data-target="#rd-portfolio-MMI-Studios">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/mmi_logo.png" alt="MMI Studios">
                                            </a>
                                            <h3>MMI Studios <small>Music Label Artist Community</small>
                                            <p>Custom CMS, HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->
                                        
                                        <!-- Portfolio: DSP Central -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #EEEDFB" data-toggle="modal" data-target="#rd-portfolio-DSP-Central">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/dspcentral_logo.png" alt="DSP Central">
                                            </a>
                                            <h3>DSP Central <small>Audio Technology</small>
                                            <p>Moodle LMS, HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: Gross National Produkt -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #000" data-toggle="modal" data-target="#rd-portfolio-GNP">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/gnp_logo.png" alt="Gross National Produkt">
                                            </a>
                                            <h3>Gross National Produkt <small>Band Website</small>
                                            <p>HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: AliveTek -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #FFFFFF" data-toggle="modal" data-target="#rd-portfolio-AliveTek">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/alivetek_logo.png" alt="AliveTek">
                                            </a>
                                            <h3>AliveTek, Inc <small>E-learning Company</small>
                                            <p>HTML5, CSS3, JavaScript, Responsive, jQuery</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: U-Mich Dearborn: LMS Portal -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #064778" data-toggle="modal" data-target="#rd-portfolio-UMD">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/umd_logo.png" alt="U-Mich Dearborn: LMS Portal">
                                            </a>
                                            <h3>U-Mich Dearborn: LMS Portal <small>Canvas LMS Portal</small>
                                            <p>HTML5, CSS3, JavaScript, Responsive, jQuery</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: NASFM Help Desk -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #FFFFFF" data-toggle="modal" data-target="#rd-portfolio-NASFM">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/nasfm_logo.png" alt="NASFM Help Desk">
                                            </a>
                                            <h3>NASFM Help Desk <small>Virtual Help Desk</small>
                                            <p>HTML5, CSS3, JavaScript, jQuery</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: FMSS Crowd Manager Training -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #49AFCD" data-toggle="modal" data-target="#rd-portfolio-FMSS">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/fmss_logo.png" alt="FMSS Crowd Manager Training">
                                            </a>
                                            <h3>FMSS Crowd Manager Training <small>Certification Course</small>
                                            <p>Moodle LMS, HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: AMDA Training -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #FFFFFF" data-toggle="modal" data-target="#rd-portfolio-AMDA">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/amda_logo.png" alt="AMDA Training">
                                            </a>
                                            <h3>AMDA Training <small>Certification Course</small>
                                            <p>Moodle LMS, HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: Broadway Suites -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #444" data-toggle="modal" data-target="#rd-portfolio-Broadway-Suites">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/broadway-suites_logo.png" alt="Broadway Suites">
                                            </a>
                                            <h3>Broadway Suites <small>Office Space Rental</small>
                                            <p>WordPress, HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: Commander Ready -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #EEEDFB" data-toggle="modal" data-target="#rd-portfolio-Serve-DC">
                                                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/servedc_logo.png" alt="Commander Ready">
                                            </a>
                                            <h3>Serve DC: Commander Ready <small>Disaster Preparedness</small>
                                            <p>Moodle LMS, HTML5, CSS3, JavaScript, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->

                                        <!-- Portfolio: Riki Biti -->
                                        <!-- 
                                        <li>
                                            <a href="#" style="background-color: #FFFFFF" data-toggle="modal" data-target="#rd-portfolio-Riki-Biti">
                                                <img class="img-responsive" src="http://placehold.it/240x240" alt="Riki Biti">
                                            </a>
                                            <h3>Riki Biti <small>Bitcoin Faucet Rotator</small>
                                            <p>Custom CMS, HTML5, CSS3, JavaScript, Responsive, jQuery, PHP, MySQL</p></h3>
                                        </li>
                                        -->
                                    </ul>
                                </div>
                                <!-- End Porfolio Pieces -->

                            </div>
                        </div>
                    </div>
                </section>

                <section id="testimonyContent" class="featured testimonials">
                    <div class="bcg" data-0="background-position: 23% 0%;" data-center="background-position: 23% 250%;" data-top-bottom="background-position: -60% 500%;" data-anchor-target="#testimonyContent">
                        <div class="hsContainer">
                            <div class="hsContent" data-bottom-top="opacity: 0" data-top="opacity: 1" data-anchor-target="#testimonyContainer h2">
                                
                                <!-- Begin Testimony -->
                                <div id="testimonyContainer">
                                    <h2 id="testimonials">— Testimonials —</h2>
                                    <blockquote class="wow bounceInUp">
                                        <p>Working with Ian was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</p>
                                        <footer>
                                            <cite>Adam Houston, <a href="#" target="_blank">Bridge Creative</a></cite>
                                        </footer>
                                    </blockquote>
                                    <blockquote class="wow bounceInUp">
                                        <p>We have the fortune of working with Ian on a very regular basis. Every single project is done in a timely fashion and is delivered exactly as is outlined. Beyond that, his development skills and expertise make him an invaluable part of our process. We absolutely offer our highest possible recommendation.</p>
                                        <footer>
                                            <cite>Douglas Berger, <a href="#" target="_blank">REMIXED</a></cite>
                                        </footer>
                                    </blockquote>
                                    <blockquote class="wow bounceInUp">
                                        <p>Ian has done a fantastic job overall. Not only the site is to design, the code is very clean and slick. Love the way he achieved the translations portion of the site.</p>
                                        <footer>
                                            <cite>Kalwinder Dohil, IT Manager at <a href="#" target="_blank">TIGI International</a></cite>
                                        </footer>
                                    </blockquote>
                                    <h3>Learn About My Skillset and Workflow <i class="fa fa-chevron-circle-right"></i></h3>
                                </div>
                                <!-- End Testimony -->

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
<?php $portfolio->portfolioModals('Portfolio', 'Dev', 'Yes'); ?>
<!-- Reel Angel Modal -->
<!--
<div class="modal fade" id="rd-portfolio-Reel-Angel" tabindex="-1" role="dialog" aria-labelledby="modal-label-Reel-Angel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-Reel-Angel">Reel Angel</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- MMI Studios Modal -->
<!--
<div class="modal fade" id="rd-portfolio-MMI-Studios" tabindex="-1" role="dialog" aria-labelledby="modal-label-MMI-Studios">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-MMI-Studios">MMI Studios</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/mmi_header.png" alt="MMI Studios">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- DSP Central Modal -->
<!--
<div class="modal fade" id="rd-portfolio-DSP-Central" tabindex="-1" role="dialog" aria-labelledby="modal-label-DSP-Central">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-DSP-Central">DSP Central</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- GNP Modal -->
<!--
<div class="modal fade" id="rd-portfolio-GNP" tabindex="-1" role="dialog" aria-labelledby="modal-label-GNP">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-GNP">Gross National Produkt</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/gnp_header.png" alt="Gross National Produkt">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- AliveTek Modal -->
<!--
<div class="modal fade" id="rd-portfolio-AliveTek" tabindex="-1" role="dialog" aria-labelledby="modal-label-AliveTek">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-AliveTek">AliveTek</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/alivetek_header.png" alt="MMI Studios">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- UMD Modal -->
<!--
<div class="modal fade" id="rd-portfolio-UMD" tabindex="-1" role="dialog" aria-labelledby="modal-label-UMD">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-UMD">University of Michigan LMS Portal</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- NASFM Modal -->
<!--
<div class="modal fade" id="rd-portfolio-NASFM" tabindex="-1" role="dialog" aria-labelledby="modal-label-NASFM">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-NASFM">NASFM Help Desk</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/nasfm_header.png" alt="NASFM Help Desk">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- FMSS Modal -->
<!--
<div class="modal fade" id="rd-portfolio-FMSS" tabindex="-1" role="dialog" aria-labelledby="modal-label-FMSS">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-FMSS">FMSS Crowd Manager Training</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/fmss_header.png" alt="FMSS Crowd Manager Training">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- AMDA Modal -->
<!--
<div class="modal fade" id="rd-portfolio-AMDA" tabindex="-1" role="dialog" aria-labelledby="modal-label-AMDA">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-AMDA">AMDA Trainning</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/amda_header.png" alt="AMDA Trainning">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- Broadway Suites Modal -->
<!--
<div class="modal fade" id="rd-portfolio-Broadway-Suites" tabindex="-1" role="dialog" aria-labelledby="modal-label-Broadway-Suites">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-Broadway-Suites">Broadway-Suites</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/broadway-suites_header.png" alt="Broadway-Suites">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- Serve DC Modal -->
<!--
<div class="modal fade" id="rd-portfolio-Serve-DC" tabindex="-1" role="dialog" aria-labelledby="modal-label-Serve-DC">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-Serve-DC">Serve DC: Commander Ready</h4>
            </div>
            <div class="modal-body">
                <img class="img-responsive" src="<?php /*echo PUB_ROOT;*/ ?>/img/portfolio/servedc_header.png" alt="Serve DC: Commander Ready">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->

<!-- Riki Biti Modal -->
<!--
<div class="modal fade" id="rd-portfolio-Riki-Biti" tabindex="-1" role="dialog" aria-labelledby="modal-label-Riki-Biti">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-Riki-Biti">Riki Biti</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->
<!-- End Modal Content -->