<?php if (isset($offers) && count($offers->offers) > 0): ?>
<?php //echo $offers->name; ?>
<?php //echo $offers->strip_info; ?>
<?php //if (count($offers->offers) > 0): ?>
<?php //foreach ($offers->offers as $offer): ?>
<?php //echo $this->element('offers/item', [ 'offers' => $offers, 'offer' => $offer ]); ?>
<?php //endforeach; ?>
<?php //echo url($offers->slug, 2, 'offers'); ?>
<?php //else: ?>
<?php //echo $this->element('offers/no-offers'); ?>
<?php //endif; ?>

<section id="offers-section" class="room_sec dark-bg offers-carousel">
    <div class="container offers-carousel__wrapper">
        <div class="sec-title">
            <h3><?php echo $offers->name; ?></h3>
            <p class="lead"><?php echo $offers->strip_info; ?></p>
        </div>

        <div class="rooms_section">
            <?php if (count($offers->offers) > 0): ?>
            <div class="row blog_carousel <?php echo (count($offers->offers) > 3) ? 'offers-carousel__items' : ''; ?> ">
                <?php foreach ($offers->offers as $offer): ?>
                    <?php if (count($offers->offers) > 3): ?>
                        <?php echo $this->element('offers/item', [ 'offers' => $offers, 'offer' => $offer ]); ?>
                    <?php else: ?>
                        <?php echo $this->element('offers/cat-item', [ 'offers' => $offers, 'offer' => $offer ]); ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php else: ?>
                <?php echo $this->element('offers/no-offers'); ?>
            <?php endif; ?>
        </div>
        <!--rooms_section end-->
    </div>
</section>


<?php //$this->append('footScript'); ?>
<?php //$this->end(); ?>
<?php endif; ?>
