<section class="white-bg">
    <div class="container-fluid p-0">
        <div class="contact_sec">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <section class="map-responsive-flex">
                        <iframe src="https://www.google.com/maps/embed?pb&#x3D;!1m18!1m12!1m3!1d2842.873969488576!2d12.274935315169975!3d44.55868380142515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477de421b417183f%3A0x37b69be3ede485be!2sVillaggio%20Camping%20Adria!5e0!3m2!1sit!2sit!4v1573485778796!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </section>
                </div>

                <div class="col-lg-6">
                    <div class="contact_info">
                        <h3 class="text-uppercase"><?php echo trans('I nostri contatti'); ?></h3>

                        <ul>
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <div class="cs_info">
                                    <span><a href="" title="<?php echo trans('Apri su Google Maps'); ?>" target="_blank"><?php echo $currentSite->facility->address; ?> - <?php echo $currentSite->facility->city; ?></a></span>
                                </div>
                            </li>

                            <li>
                                <i class="flaticon-call"></i>
                                <div class="cs_info">
                                    <span><a href="tel:<?php echo $currentSite->facility->phone; ?>"><?php echo $currentSite->facility->phone; ?></a></span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-fax"></i>
                                <div class="cs_info">
                                    <span><?php echo $currentSite->facility->fax; ?></span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="cs_info">
                                    <a href="#w-contact-section"
                                        class="w-scroll w-target w-email-ga"
                                        data-ga="<?php echo $currentSite->facility->email; ?>"
                                        title="<?php echo $currentSite->facility->email; ?>"
                                        data-top-offset=".site-header"
                                        data-target="#w-contact-section"
                                        data-auto-close="3000">
                                            <?php echo $currentSite->facility->email; ?>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>