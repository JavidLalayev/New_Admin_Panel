<?php $this->load->view("front/includes/header_all")?>


<!-- Banner -->
<div id="blog_banner">
    <div class="page-title">
        <div class="container">
            <h2><?php echo $this->lang->line("elaqe"); ?></h2>
        </div>
    </div>
    <div class="black-overlay"></div>
</div>
<!-- End banner -->


<!--* Contact*-->
<section id="mt_contact" class="contact-main section-inner">
    <div class="container">
        <!-- section title -->
        <div class="inner-heading">
            <h3><?php echo $this->lang->line("elaqe"); ?></h3>
        </div>

        <!-- Contact Us Map -->
        <div class="map">
            <div  style="height: 300px; width: 100%;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6078.73526600192!2d49.848567!3d40.378544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x53a5c1e7cc11c36f!2zQXrJmXJiYXljYW4gRMO2dmzJmXQgTmVmdCB2yZkgU8mZbmF5ZSBVbml2ZXJzaXRldGk!5e0!3m2!1sen!2sus!4v1566812188664!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>

        </div>
        <!-- section -->

        <div class="contact-inner">
            <div class="col-md-12">
                <div class="contact-info">
                    <?php

                    if ($this->session->userdata("dil") == "az"){
                        echo $contact["desc_az"];
                    }elseif ($this->session->userdata("dil") == "en"){
                        echo $contact["desc_en"];
                    }elseif ($this->session->userdata("dil") == "ru"){
                        echo $contact["desc_ru"];
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--* End Contact*-->


























<?php $this->load->view("front/includes/footer")?>
