<?php //echo trans('Indirizzo'); ?>
<?php //echo $x->gmap_url; ?>
<?php //echo trans('Apri su Google Maps'); ?>
<?php //echo $currentSite->facility->address; ?>
<?php //echo $currentSite->facility->city; ?>

<?php //echo $currentSite->facility->email; ?>
<?php //echo trans('Telefono'); ?>
<?php //echo $currentSite->facility->phone; ?>
<?php //echo trans('Chiamaci'); ?>
<?php //echo $x->whatsapp_url; ?>
<?php //echo $x->whatsapp; ?>

<?php //echo $x->facebook_page; // fab fa-facebook-f text-facebook gradient ?>
<?php //echo $x->youtube; // fab fa-youtube text-youtube gradient ?>
<?php //echo $x->flickr; // fab fa-flickr text-flickr gradient ?>
<?php //echo $x->instagram; // fab fa-instagram text-instagram gradient ?>
<?php //echo $x->whatsapp_url; // fab fa-whatsapp text-whatsapp gradient ?>
<?php //echo $x->skype; // fab fa-skype text-skype gradient ?>

<?php
/*<p><span class="text-light">© 2020 *?php echo trans('Tutti i diritti riservati'); *? P.IVA: *?php echo $x->piva; *? | <a href="*?php echo url('_privacy'); ?*">Privacy & Policy</a> |</span> <span class="text-lgray"><a class="text-lgray" href="https://www.buonsito.it" target="_blank">Website & Web Marketing</a> by Buonsito.it <3</span></p>*/
?>


<footer class="hp5 site-footer">
    <div class="top-footer">
        <div class="container">
            <div class="wids-row">
                <div class="row text-center-xs">
                    <div class="col-md-3">
                        <a href="<?php echo url(''); ?>" title="<?php echo $tsn; ?>">
                            <img src="<?php echo config('assets.logo'); ?>" alt="<?php echo $tsn; ?> Logo">
                        </a>

                        <div class="ft-text text-center mt-25">
                            <?php //echo $currentSite->info; ?>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget widget_support">
                            <h4><?php echo trans('Per informazioni'); ?>:</h4>

                            <ul class="contact">
                                <li>
                                    <a href="https://goo.gl/maps/98iaz5LHP73T95kh8" target="_blank" style="max-width: 200px;">
                                        <i class="fas fa-map"></i> <?php echo extra($currentSite->facility, 'address'); ?> - <?php echo extra($currentSite->facility, 'city'); ?> <br> <?php echo extra($currentSite->facility, 'postal_code'); ?> (<?php echo extra($currentSite->facility, 'state_code'); ?>)
                                    </a>
                                </li>

                                <li>
                                    <a href="tel:+<?php echo $currentSite->facility->phone; ?>">
                                        <i class="fas fa-phone"></i> <?php echo $currentSite->facility->phone; ?>
                                    </a>
                                </li>

                                <li>
                                    <i class="fas fa-fax"></i> <?php echo $currentSite->facility->fax; ?>
                                </li>

                                <li>
                                    <a href="#w-contact-section"
                                        class="w-scroll w-target w-email-ga"
                                        data-ga="<?php echo $currentSite->facility->email; ?>"
                                        title="<?php echo $currentSite->facility->email; ?>"
                                        data-top-offset=".site-header"
                                        data-target="#w-contact-section"
                                        data-auto-close="3000">
                                            <i class="fas fa-envelope"></i>
                                            <?php echo $currentSite->facility->email; ?>
                                    </a>
                                </li>
                            </ul>

                            <hr>

                            <?php if (locale() == locale('default')): ?>
                            <p>
                                <small>
                                    <a href="<?php echo url('contributo-regionale'); ?>">
                                        <?php echo trans('Progetto cofinanziato dal Fondo europeo di sviluppo regionale'); ?>
                                    </a>
                                </small>
                            </p>
                            <?php endif; ?>
                        </div>
                        <!--widget_support end-->
                    </div>


                    <div class="col-md-3">
                        <div class="widget widget_support">
                            <h4>SOCIAL MEDIA</h4>

                            <ul>
                                <li class="social-facebook">
                                    <a href="https://www.facebook.com/CampingVillageAdria" target="_blank"><i class="fab fa-facebook-f text-facebook gradient"></i> Facebook</a>
                                </li>
                                <li class="social-instagram">
                                    <a href="https://www.instagram.com/campingadria/" target="_blank"><i class="fab fa-instagram text-instagram gradient"></i> Instagram</a>
                                </li>
                            </ul>
                            <!--social-links end-->

                            <hr>

                            <a href="https://it.camping2be.com/2488" target="_blank">
                                <img src="https://static.secureholiday.net/static/Portails/Camping2BeAwards/widget-2488.jpg" alt="Leggere i commenti del Villaggio Camping Adria" class="img-responsive" style="">
                            </a>

                        </div>
                        <!--widget_support end-->
                    </div>


                    <div class="col-md-3">
                        <div class="widget widget_support">
                            <h4>Utility</h4>

                            <ul class="utilities">
                                <?php foreach ($menus['footer']->submenus as $item): ?>
                                    <li class="navigation__main-item">
                                        <a href="<?php echo $item->original_url; ?>" target="<?php echo $item->target; ?>">
                                            <i class="<?php echo $item->class; ?>"></i> <?php echo $item->name; ?>
                                            <?php if (strlen($item->description) > 1): ?>
                                                <small class="has-description"><?php echo $item->description; ?></small>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <!--social-links end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="bottom_footer">
        <div class="container-fluid bottom_footer__wrapper">
            <p>Copyright © 2020 <?php echo $currentSite->webroot; ?> - <?php echo trans('Tutti i diritti riservati'); ?> | P.IVA: <?php echo extra($currentSite->facility, 'piva'); ?> | <a href="<?php echo url('_privacy'); ?>">Privacy Policy</a></p>

            <p><a href="https://www.buonsito.it" target="_blank" >Sito web</a> by Buonsito.it <i class="fas fa-globe"></i></p>
        </div>
    </div>
    <!--bottom_footer end-->
</footer>
