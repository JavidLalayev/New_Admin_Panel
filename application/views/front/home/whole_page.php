<?php $this->load->view("front/includes/header_home")?>







<!-- Slider -->
<div id="home-banner" class="carousel slide ps_indicators_l  ps_control_rotate_f kbrns_zoomInOut thumb_scroll_x swipe_x ps_easeOutQuart" data-ride="carousel" data-pause="hover" data-interval="10000" data-duration="2000">

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- First Slide -->
        <div class="item active">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-1.jpg" alt="slider_01" />
            <!-- Left Slide Text Layer -->
            <div class="caption_slide1 fadeInRight" data-animation="animated fadeInRight">
                <h3>Welcome To Padhai</h3>
                <h1>Explore the World of Our Graduates</h1>
                <a class="mt_btn_yellow" href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Contact');
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Contact');
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Contact');
                }

                ?>">
                    <?php echo $this->lang->line("elaqe"); ?>
                </a>
            </div><!-- /Left Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

        <!-- Second Slide -->
        <div class="item">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-2.jpg" alt="slider_02" />
            <!-- Right Slide Text Layer -->
            <div class="caption_slide1 caption_slide1_right wow fadeInLeft" data-animation="animated fadeInLeft">
                <h3>Welcome To Padhai</h3>
                <h1>Better education for a better world</h1>
                <a class="mt_btn_yellow" href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Contact');
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Contact');
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Contact');
                }

                ?>">
                    <?php echo $this->lang->line("elaqe"); ?>
                </a>            </div><!-- /Right Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

        <!-- Third Slide -->
        <div class="item">
            <!-- Slide Background -->
            <img src="<?php echo base_url("public/front/")?>images/education/slide-4.jpg" alt="slider_04" />
            <!-- Center Slide Text Layer -->
            <div class="caption_slide1 caption_slide1_center cap-new wow fadeInDown" data-animation="animated fadeInDown">
                <h3>Welcome To Padhai</h3>
                <h1>Exceptional People, Exceptional Care</h1>
                <a class="mt_btn_yellow" href="<?php

                if ($this->session->userdata("dil") == "az"){
                    echo base_url('az/Contact');
                }
                elseif ($this->session->userdata("dil") == "en"){
                    echo base_url('en/Contact');
                }
                elseif ($this->session->userdata("dil") == "ru"){
                    echo base_url('ru/Contact');
                }

                ?>">
                    <?php echo $this->lang->line("elaqe"); ?>
                </a>            </div><!-- /Center Slide Text Layer -->
        </div><!-- /item -->
        <!-- End of Slide -->

    </div><!-- End of Wrapper For Slides -->

    <!-- Left Control -->
    <a class="left carousel-control" href="#home-banner" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <!-- Right Control -->
    <a class="right carousel-control" href="#home-banner" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> <!-- End Slider -->

<!-- About Courses -->
<div class="edu-courses">
    <div class="container">
        <div class="row panel-grid-banner">
            <div class="col-md-4 col-sm-12">
                <div class="inner-grid text-center">
                    <div class="text-courses">
                        <i class="fa fa-laptop mar-bottom-20"></i>
                        <h3><?php echo $this->lang->line("kurslarimiz"); ?></h3>
                    </div>
                    <div class="courses-content">
                        <a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Courses');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Courses');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Courses');
                        }

                        ?>" class="mt_btn_yellow"><?php echo $this->lang->line("etrafli"); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="inner-grid text-center">
                    <div class="text-courses">
                        <i class="fa fa-users mar-bottom-20"></i>
                        <h3><?php echo $this->lang->line("muellimlerimiz"); ?></h3>
                    </div>
                    <div class="courses-content">
                        <a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Teachers');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Teachers');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Teachers');
                        }

                        ?>" class="mt_btn_yellow"><?php echo $this->lang->line("etrafli"); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="inner-grid text-center">
                    <div class="text-coursesa">
                        <i class="fa fa-book mar-bottom-20"></i>
                        <h3><?php echo $this->lang->line("tedbirlerimiz"); ?></h3>
                    </div>
                    <div class="courses-content">
                        <a href="<?php

                        if ($this->session->userdata("dil") == "az"){
                            echo base_url('az/Events');
                        }
                        elseif ($this->session->userdata("dil") == "en"){
                            echo base_url('en/Events');
                        }
                        elseif ($this->session->userdata("dil") == "ru"){
                            echo base_url('ru/Events');
                        }

                        ?>" class="mt_btn_yellow "><?php echo $this->lang->line("etrafli"); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Courses -->

<!--*About*-->
<section id="mt_about">
    <div class="container">
        <div class="about_services">
            <div class="row">
                <div class="col-md-6 col-sm-12">
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
                <div class="col-md-6 col-sm-12">
                    <div class="about-edu-bg">
                        <img src="<?php echo base_url("public/front/")?>images/education/about.png" alt="About">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--*EndAbout*-->

<!-- Find Courses -->
<!-- End Find Courses -->

<!--*Features-one*-->
<section class="features-one">
    <div class="container">
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("kurslar"); ?></h3>
        </div>
        <div class="row  slider slider-ft-course">
            <?php foreach ($courses as $course) { ?>

                <div class="col-md-4 col-sm-6 col-xs-6 item mar-bottom-30">
                    <div class="featured-item">
                        <div class="feat-img">
                            <img src="<?php echo base_url("uploads/courses/").$course["img"] ?>"  style="width: 358px; height: 243.625px; object-fit: cover" alt="">
                            <div class="overlayPort">
                                <ul class="info text-center list-inline">
                                    <li style="margin-top: 26px;">
                                        <a href="<?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo base_url("az/Course_single/").$course['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo base_url("en/Course_single/").$course['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo base_url("ru/Course_single/").$course['id'];
                                        }



                                        ?>" tabindex="0"><?php echo $this->lang->line("etrafli"); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="feat-inn">
                            <span><?php echo $course['start_date']?></span>

                            <a href="<?php

                            if ($this->session->userdata("dil") == "az"){
                                echo base_url("az/Course_single/").$course['id'];
                            }
                            elseif ($this->session->userdata("dil") == "en"){
                                echo base_url("en/Course_single/").$course['id'];
                            }
                            elseif ($this->session->userdata("dil") == "ru"){
                                echo base_url("ru/Course_single/").$course['id'];
                            }



                            ?>">
                                <h3>
                                    <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo strlen($course["name_az"]) < 26 ? $course["name_az"]  : substr($course["name_az"], 0,26).'...' ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo strlen($course["name_en"]) < 26 ? $course["name_en"]  : substr($course["name_en"], 0,26).'...' ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo strlen($course["name_ru"]) < 26 ? $course["name_ru"]  : substr($course["name_ru"], 0,26).'...' ;
                                    }

                                    ?>
                                </h3>
                            </a>
                            <div class="course-feat">
                                <div class="price-ft pull-left">
                                    <span><i class="fa fa-clock-o"></i> <?php echo $course['whole_month']?></span>
                                </div>
                                <div class="admin-ft pull-right">
                                    <ul>
                                        <li><i class="fa fa-user"></i><span><?php echo $course['max_student']?></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div><!-- /.container -->
</section>
<!--*EndFeatures-one*-->

<!--* Fun And Facts*-->
<section id="mt_fun">
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

<!--Education Event-->
<section class="edu-events">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("gelecek_tedbirler"); ?></h3>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="event-left">
                    <img src="https://pbs.twimg.com/profile_images/656255050184945664/zLPbe1Bj_400x400.png" style="width: 500px" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="event-main">
                    <h2><?php echo $this->lang->line("gelecek_tedbirler"); ?></h2>
                    <?php  $i =0;
                    foreach ($events as $event){ if ($i++ > 3) { break ;}
                    ?>
                    <div class="event-item">
                        <div class="event-date text-center text-uppercase">
                            <h4 class="mar-0"><span> <i class="fa fa-arrow-right"></i></span></h4>
                        </div>
                        <div class="event-details">
                            <h3 class="mar-bottom-10">
                                <a href="<?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo base_url("az/Event_single/").$event['id'];
                                }
                                elseif ($this->session->userdata("dil") == "en"){
                                    echo base_url("en/Event_single/").$event['id'];
                                }
                                elseif ($this->session->userdata("dil") == "ru"){
                                    echo base_url("ru/Event_single/").$event['id'];
                                }



                                ?>">

                                    <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo strlen($event["name_az"]) < 45 ? $event["name_az"]  : substr($event["name_az"], 0,45).'...' ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo strlen($event["name_en"]) < 45 ? $event["name_en"]  : substr($event["name_en"], 0,45).'...' ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo strlen($event["name_ru"]) < 45 ? $event["name_ru"]  : substr($event["name_ru"], 0,45).'...' ;
                                    }

                                    ?>
                                </a>
                            </h3>
                        </div>
                    </div>

                    <?php } ?>


                    <a href="<?php

                    if ($this->session->userdata("dil") == "az"){
                        echo base_url('az/Events');
                    }
                    elseif ($this->session->userdata("dil") == "en"){
                        echo base_url('en/Events');
                    }
                    elseif ($this->session->userdata("dil") == "ru"){
                        echo base_url('ru/Events');
                    }

                    ?>"><?php echo $this->lang->line("butun_tedbirler"); ?>  <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!--End Education Event-->


<!--*Team*-->
<section id="educate-team">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("muellimler"); ?></h3>
        </div>
        <div class="row edu_team_slider slider-educteam">
            <?php
            $i =0;
            foreach ( $teachers as $teacher){
                ?>

                <div class="col-md-3 col-sm-6 col-xs-12 item">
                    <div class="team_member mar-bottom-30">
                        <figure class="effect-julia" >
                            <img src="<?php echo base_url("uploads/teachers/").$teacher["img"] ?>"  alt="team">
                        </figure>
                        <div class="team-overlay">
                            <div class="about-tech">
                                <p>         <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo strlen($teacher["desc_az"]) < 99 ? $teacher["desc_az"]  : substr($teacher["desc_az"], 0,99).'...' ;
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo strlen($teacher["desc_en"]) < 99 ? $teacher["desc_en"]  : substr($teacher["desc_en"], 0,99).'...' ;
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo strlen($teacher["desc_ru"]) < 99 ? $teacher["desc_ru"]  : substr($teacher["desc_ru"], 0,99).'...' ;
                                    }

                                    ?>
                                </p>
                                <ul class="info text-center list-inline">
                                    <li>
                                        <a href="<?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo base_url("az/Teacher_single/").$teacher['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "en"){
                                            echo base_url("en/Teacher_single/").$teacher['id'];
                                        }
                                        elseif ($this->session->userdata("dil") == "ru"){
                                            echo base_url("ru/Teacher_single/").$teacher['id'];
                                        }



                                        ?>" tabindex="0"><?php echo $this->lang->line("etrafli"); ?></a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="member_name">
                            <h3>      <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo strlen($teacher["name_az"]) < 35 ? $teacher["name_az"]  : substr($teacher["name_az"], 0,35).'...' ;
                                }elseif ($this->session->userdata("dil") == "en"){
                                    echo strlen($teacher["name_en"]) < 35 ? $teacher["name_en"]  : substr($teacher["name_en"], 0,35).'...' ;
                                }elseif ($this->session->userdata("dil") == "ru"){
                                    echo strlen($teacher["name_ru"]) < 35 ? $teacher["name_ru"]  : substr($teacher["name_ru"], 0,35).'...' ;
                                }

                                ?>
                            </h3>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>
<!--* End Team*-->

<!--* Testimonial*-->
<!--* EndTestimonial*-->









<?php $this->load->view("front/includes/footer")?>
