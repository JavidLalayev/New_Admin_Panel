<?php $this->load->view("front/includes/header_all")?>



<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2><?php echo $this->lang->line("tedbir"); ?></h2>
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
                    <div class="post_img">
                        <img src="<?php echo base_url("uploads/events/").$event["img"] ?>"  alt="">
                    </div>
                    <div class="course-tabs">
                        <div class="post_title_eve">
                            <h3>
                                <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo $event["name_az"];
                                }elseif ($this->session->userdata("dil") == "en"){
                                    echo $event["name_en"];
                                }elseif ($this->session->userdata("dil") == "ru"){
                                    echo $event["name_ru"];
                                }

                                ?>
                            </h3>
                        </div>
                        <div class="eve-content">
                            <div class="over-view">
                                <?php

                                if ($this->session->userdata("dil") == "az"){
                                    echo $event["desc_az"];
                                }elseif ($this->session->userdata("dil") == "en"){
                                    echo $event["desc_en"];
                                }elseif ($this->session->userdata("dil") == "ru"){
                                    echo $event["desc_ru"];
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-md-4 col-sm-12">


                    <div class="widget widget_recent_entries"><!-- widget list -->
                        <h3 class="blog_heading_border"> <?php echo $this->lang->line("tedbirler"); ?> </h3>
                        <ul>
                            <?php foreach ($events as $recent_event){
                            ?>
                            <li>
                                <div class="event-date text-center text-uppercase">
                                    <h4 class="mar-0">   <span> info <i class="fa fa-info-circle"></i></span>    </h4>
                                </div>

                                <h4>
                                    <a href="<?php

                                    if ($this->session->userdata("dil") == "az"){
                                        echo base_url("az/Event_single/").$recent_event['id'];
                                    }
                                    elseif ($this->session->userdata("dil") == "en"){
                                        echo base_url("en/Event_single/").$recent_event['id'];
                                    }
                                    elseif ($this->session->userdata("dil") == "ru"){
                                        echo base_url("ru/Event_single/").$recent_event['id'];
                                    }



                                    ?>">

                                        <?php

                                        if ($this->session->userdata("dil") == "az"){
                                            echo strlen($recent_event["name_az"]) < 26 ? $recent_event["name_az"]  : substr($recent_event["name_az"], 0,26).'...' ;
                                        }elseif ($this->session->userdata("dil") == "en"){
                                            echo strlen($recent_event["name_en"]) < 26 ? $recent_event["name_en"]  : substr($recent_event["name_en"], 0,26).'...' ;
                                        }elseif ($this->session->userdata("dil") == "ru"){
                                            echo strlen($recent_event["name_ru"]) < 26 ? $recent_event["name_ru"]  : substr($recent_event["name_ru"], 0,26).'...' ;
                                        }

                                        ?></a>
                                </h4>
                                <p>
                                    <?php echo $recent_event["date"] ?>
                                </p>
                            </li>
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
