<section id="booking-bar" class="booking-bar c-block avail-sec">
    <div class="container">
        <form action="<?php echo $x->booking_url; ?>/<?php echo locale(); ?>/<?php echo $x->booking_id; ?>/Search/"
                target="_blank"
                class="checking-form gasubmit">

            <!--<input type="hidden" value="it" name="l">-->

            <ul class="checkform book-period">
                <li class="booking-bar__checkin">
                    <div class="check-form">
                        <h4><?php echo trans('Arrivo'); ?></h4>

                        <div class="det">
                            <b class="val-date"><?php echo date('d', strtotime('+7days')); ?></b>
                            <span>
                                <i class="month"><?php echo ucfirst(strftime('%b', strtotime('+7days'))); ?></i>
                                <i class="year"><?php echo date('Y', strtotime('+7days')); ?></i>

                                <a href="#">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </span>
                        </div>
                        <input type="text" name="dateStart" class="date-pick range checkin book-date" value="<?php echo date('d/m/Y', strtotime('+7days')); ?>" id="booking-date-in">
                    </div>
                </li>
                <li class="booking-bar__checkout">
                    <div class="check-form">
                        <h4><?php echo trans('Partenza'); ?></h4>
                        <div class="det">
                            <b class="val-date"><?php echo date('d', strtotime('+16days')); ?></b>
                            <span>
                                <i class="month"><?php echo ucfirst(strftime('%b', strtotime('+16days'))); ?></i>
                                <i class="year"><?php echo date('Y', strtotime('+16days')); ?></i>

                                <a href="#">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </span>
                        </div>
                        <input type="text" name="dateEnd" class="date-pick range checkout book-date" value="<?php echo date('d/m/Y', strtotime('+16days')); ?>" id="booking-date-out">
                    </div>
                </li>

                <li class="booking-bar__structures">
                    <div class="check-form">
                        <h4><?php echo trans('Strutture'); ?></h4>

                        <div class="det structures-ratio">
                            <div>
                                <input id="structure-1" value="accommodation" class="radio-custom" name="productType" type="radio" required />

                                <label for="structure-1" class="radio-custom-label label__alloggi">
                                    <span><?php echo trans('Alloggi'); ?></span>
                                </label>
                            </div>
                            <div>
                                <input id="structure-2" value="pitch" class="radio-custom" name="productType" type="radio" required />

                                <label for="structure-2" class="radio-custom-label label__piazzole">
                                    <span><?php echo trans('Piazzole'); ?></span>
                                </label>
                            </div>
                            <div>
                                <input id="structure-3" value="room" class="radio-custom" name="productType" type="radio" required />

                                <label for="structure-3" class="radio-custom-label label__camere">
                                    <span><?php echo trans('Camere'); ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="check-avail booking-bar__btn">
                    <input type="submit" class="check-status" value="<?php echo trans('Prenota'); ?>!" />
                </li>
            </ul>
        </form>
    </div>

    <div class="clearfix"></div>
</section>

<?php //$this->append('footOverrideAssets'); ?>
<?php //$this->end(); ?>
