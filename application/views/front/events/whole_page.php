<?php $this->load->view("front/includes/header_all")?>


<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2><?php echo $this->lang->line("tedbirler"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->


<!--* Events*-->
<section class="edu-events event_third section-inner">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("tedbirler"); ?></h3>
        </div>
        <div class="row">
            <?php foreach ($events as $event){
            ?>

            <div class="col-sm-6 col-xs-12 mar-bottom-20">
                <div class="event-left">
                    <div class="events-image">
                        <img src="<?php echo base_url("uploads/events/").$event["img"] ?>" alt="">
                        <div class="event-date">
                            <p><?php echo $event["date"] ?></p>
                        </div>
                    </div>
                    <div class="event-donation">
                        <h3 class="mar-bottom-15">
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
                                    echo strlen($event["name_az"]) < 35 ? $event["name_az"]  : substr($event["name_az"], 0,35).'...' ;
                                }elseif ($this->session->userdata("dil") == "en"){
                                    echo strlen($event["name_en"]) < 35 ? $event["name_en"]  : substr($event["name_en"], 0,35).'...' ;
                                }elseif ($this->session->userdata("dil") == "ru"){
                                    echo strlen($event["name_ru"]) < 35 ? $event["name_ru"]  : substr($event["name_ru"], 0,35).'...' ;
                                }

                                ?>
                            </a>
                        </h3>

                        <p class="mar-0">

                            <?php

                            if ($this->session->userdata("dil") == "az"){
                                echo strlen($event["desc_az"]) < 35 ? $event["desc_az"]  : substr($event["desc_az"], 0,35).'...' ;
                            }elseif ($this->session->userdata("dil") == "en"){
                                echo strlen($event["desc_en"]) < 35 ? $event["desc_en"]  : substr($event["desc_en"], 0,35).'...' ;
                            }elseif ($this->session->userdata("dil") == "ru"){
                                echo strlen($event["desc_ru"]) < 35 ? $event["desc_ru"]  : substr($event["desc_ru"], 0,35).'...' ;
                            }

                            ?>

                        </p>
                    </div>
                </div>
            </div>
            <?php } ?>



            <div class="col-xs-12">
                <div class="pagination-div pg-services text-center">
<!--                    <ul class="pagination">
                        <li class="prev">
                            <a href="#"> &lt;&lt; </a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">...</a>
                        </li>
                        <li>
                            <a href="#">10</a>
                        </li>
                        <li class="next">
                            <a href="#"> &gt;&gt; </a>
                        </li>
                    </ul>
-->
                    <?php print_r($links); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Events*-->


















<?php $this->load->view("front/includes/footer")?>

