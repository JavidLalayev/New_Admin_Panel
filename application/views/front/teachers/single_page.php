<?php $this->load->view("front/includes/header_all")?>



<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2><?php echo $this->lang->line("muellimler"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->



<!--* Services*-->
<section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">
        <div class="course-detail">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="course-tabs">



                        <br>

                        <div class="advisor-main">
                            <div class="advisor-author">
                                <div class="advisor-img">
                                    <img src="<?php echo base_url("uploads/teachers/").$teacher["img"] ?>" alt="Instructor">
                                </div>
                                <div class="advisor-name">
                                    <h3> <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo $teacher["name_az"];
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo $teacher["name_en"];
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo $teacher["name_ru"];
                                        }

                                        ?>
                                    </h3>
                                    <span>
                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo $course["name_az"];
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo $course["name_en"];
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo $course["name_ru"];
                                        }

                                        ?>
                                    </span>
                                </div>
                            </div>
                            <div class="advisor-description">
                                <p> <?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo $teacher["desc_az"];
                                    }elseif ($this->session->userdata("dil") == "en"){
                                        echo $teacher["desc_en"];
                                    }elseif ($this->session->userdata("dil") == "ru"){
                                        echo $teacher["desc_ru"];
                                    }

                                    ?>
                                </p>

                            </div>
                        </div>





                    </div>
                </div>
                <aside class="col-md-4 col-sm-12">


                    <div class="widget widget_recent_entries"><!-- widget list -->
                        <h3 class="blog_heading_border"> <?php echo $this->lang->line("kurslar"); ?> </h3>
                        <ul>
                            <?php foreach ($courses as $recent_course){
                            ?>
                            <li>
                                <div class="event-date text-center text-uppercase">
                                    <h4 class="mar-0">   <span> info <i class="fa fa-info-circle"></i></span>    </h4>
                                </div>

                                <h4>
                                    <a href="<?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo base_url("az/Course_single/").$recent_course['id'];
                                    }
                                    elseif ($this->session->userdata("dil") == "en"){
                                        echo base_url("en/Course_single/").$recent_course['id'];
                                    }
                                    elseif ($this->session->userdata("dil") == "ru"){
                                        echo base_url("ru/Course_single/").$recent_course['id'];
                                    }



                                    ?>">

                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo strlen($recent_course["name_az"]) < 26 ? $recent_course["name_az"]  : substr($recent_course["name_az"], 0,26).'...' ;
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo strlen($recent_course["name_en"]) < 26 ? $recent_course["name_en"]  : substr($recent_course["name_en"], 0,26).'...' ;
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo strlen($recent_course["name_ru"]) < 26 ? $recent_course["name_ru"]  : substr($recent_course["name_ru"], 0,26).'...' ;
                                        }

                                        ?></a>
                                </h4>
                                <p> <span><i class="fa fa-clock-o"></i> <?php echo $recent_course['start_date']?></span></p>
                                <?php } ?>

                        </ul>
                    </div><!-- End widget list -->

                </aside>
            </div>
        </div>
    </div>
</section>
<!--* End Services*-->











<?php $this->load->view("front/includes/footer")?>
