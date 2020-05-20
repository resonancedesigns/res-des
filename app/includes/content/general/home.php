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
                                    <a href="#" id="portfolioButton" class="button">View My Work <i class="fa fa-angle-down"></i></a>
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
                                        <?php $portfolio->portfolioList('portfolio', 'Portfolio', 'Dev', 'Yes', 'sort'); ?>
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
                                        <p>Working with Rich was better than expected and we had really high expectations. He is an incredibly talented developer but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</p>
                                        <footer>
                                            <cite>Adam Houston, <a href="#" target="_blank">Bridge Creative</a></cite>
                                        </footer>
                                    </blockquote>
                                    <blockquote class="wow bounceInUp">
                                        <p>We have the fortune of working with Richard on a very regular basis. Every single project is done in a timely fashion and is delivered exactly as is outlined. Beyond that, his development skills and expertise make him an invaluable part of our process. We absolutely offer our highest possible recommendation.</p>
                                        <footer>
                                            <cite>Douglas Berger, <a href="#" target="_blank">REMIXED</a></cite>
                                        </footer>
                                    </blockquote>
                                    <blockquote class="wow bounceInUp">
                                        <p>Rich has done a fantastic job overall. Not only the site is to design, the code is very clean and slick. Love the way he achieved the translations portion of the site.</p>
                                        <footer>
                                            <cite>Kalwinder Dohil, IT Manager at <a href="#" target="_blank">TIGI International</a></cite>
                                        </footer>
                                    </blockquote>
                                    <a href="about/" title="Discover Richard's Skills and Workflow">
                                        <h3>Learn About My Skill Set and Workflow <i class="fa fa-chevron-circle-right"></i></h3>
                                    </a>
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
<?php $portfolio->portfolioModals('portfolio', 'Portfolio', 'Dev', 'Yes', 'sort'); ?>

<!-- Dev Labs Maintenance Modal -->
<div class="modal fade" id="Maintenance" tabindex="-1" role="dialog" aria-labelledby="modal-label-Maintenance">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label-Maintenance">Undergoing Maintenance</h4>
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