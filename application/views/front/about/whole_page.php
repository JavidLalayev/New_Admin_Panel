
<?php $this->load->view("front/includes/header_all")?>


<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2>   <?php echo $this->lang->line("haqqimizda"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->



<!--*About*-->
<section id="mt_about">
    <div class="container">
        <div class="about_services">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-items">
                        <div class="inner-heading">
                            <h3><?php echo $this->lang->line("haqqimizda"); ?></h3>
                        </div>
                        <?php

                        if ($this->session->userdata("dil") == "az"){
                            echo $about["desc_az"];
                        }elseif ($this->session->userdata("dil") == "en"){
                            echo $about["desc_en"];
                        }elseif ($this->session->userdata("dil") == "ru"){
                            echo $about["desc_ru"];
                        }

                        ?>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-edu-bg">
                        <img src="<?php echo base_url("public/front/")?>images/education/about.png" alt="About">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--*EndAbout*-->


<!--* Mission Area*-->
<section id="mission_main" class="mission-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12">
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
                <div class="mission-progress-bar">
                    <div class="inner-heading">
                        <h3>Mission</h3>
                    </div>
                    <div class="progress-wrap">
                        <h5>Known Results</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">95%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Market Research</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">60%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Strategic Consulting</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">90%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Digital Teaching</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">75%</span>
                            </div>

                        </div>
                    </div>

                    <div class="progress-wrap">
                        <h5>Online Reputation</h5>
                        <div class="progress">
                            <div class="progress-bar  color1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <span class="bar-width">80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Mission Area*-->

<!--* Testimonial*-->
<section id="const-testi" class="edu-testimonial">
    <div class="container wow slideInDown" data-wow-duration="2s">
        <div class="row">
            <div class="col-sm-6">
                <!-- section title -->
                <div class="inner-heading">
                    <h3 class="white">Testimonials</h3>
                    <h2 class="white">Hear what our students have to say</h2>
                    <div class="testimonial-abt">
                        <p class="white">Lorem ipsums dolors sit amet consectetur adipiselo elit sed do eiused tempor the incididunt ut labore et. Auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row slider-eductestimo">
                    <div class="col-sm-4">
                        <div class="item">
                            <div class="testimonial_main">
                                <div class="client-pic"><img src="<?php echo base_url("public/front/")?>images/team/member-1.jpg" alt=""></div>
                                <h4>
                                    <a href="#" class="text-uppercase">Christ Daniel</a>
                                    <span>Biology</span>
                                </h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="testimonial_main">
                                <div class="client-pic"><img src="<?php echo base_url("public/front/")?>images/team/member-2.jpg" alt=""></div>
                                <h4>
                                    <a href="#" class="text-uppercase">John Wakson</a>
                                    <span>Science & Arts</span>
                                </h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="item">
                            <div class="testimonial_main">
                                <div class="client-pic"><img src="<?php echo base_url("public/front/")?>images/team/member-3.jpg" alt=""></div>
                                <h4>
                                    <a href="#" class="text-uppercase">Tim Loran</a>
                                    <span>Web Developer</span>
                                </h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* EndTestimonial*-->

<!--* Fun And Facts*-->
<section id="mt_fun" class="about-pg-mt section-inner">
    <div class="container">
        <div class="mt-statts">
            <div class="inner-heading">
                <h3>Why choose us</h3>
                <h2>Various courses to choose from</h2>
            </div>
            <div class="row facts_row">
                <div class="col-md-8 col-sm-8 col-xs-12 facts_col">
                    <div class="fun-facts-main">
                        <div class="fun-facts_wrapper">
                            <i class="fa fa-trophy"></i>
                            <p class="fun-facts_figure timer" data-to="275" data-speed="3000"></p>
                            <span class="fun-facts_title"> AWARDS </span>
                        </div>
                        <div class="fun-facts_wrapper">
                            <i class="fa fa-graduation-cap"></i>
                            <p class="fun-facts_figure timer" data-to="3282" data-speed="3000"></p>
                            <span class="fun-facts_title"> STUDENTS </span>
                        </div>
                        <div class="fun-facts_wrapper">
                            <i class="fa fa-university"></i>
                            <p class="fun-facts_figure timer" data-to="120" data-speed="3000"></p>
                            <span class="fun-facts_title"> YEARS OF HISTORY </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="nets-facts">
                        <h2>Take a tour</h2>
                        <div class="pulses">
                            <button type="button" class="play-btn js-video-button" data-video-id='176543782' data-channel="vimeo"><i class="fa fa-play"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Fun And Facts*-->


<?php $this->load->view("front/includes/footer")?>
