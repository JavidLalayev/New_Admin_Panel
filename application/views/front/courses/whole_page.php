<?php $this->load->view("front/includes/header_all")?>



<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2><?php echo $this->lang->line("kurslar"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->

>

<!--* Services*-->
<section id="mt_services" class="light-bg services-section section-inner">
    <div class="container">
        <div class="row">

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

            <div class="col-xs-12">
                <div class="pagination-div pg-services text-center">
                    <?php print_r($links); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Services*-->

















<?php $this->load->view("front/includes/footer")?>
