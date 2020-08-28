<?php //echo url($offer->slug, 1, 'offers'); ?>
<?php //echo trans('Vai all\'offerta'); ?>
<?php //echo $offer->picture; ?>
<?php //echo thumber($offer->picture, 525, 350, '', 'auto_alt_attribute'); ?>
<?php //echo $offer->title; ?>
<?php //echo $offer->name; ?>
<?php //echo extra($offer, 'offer_price', $offer->starting_price); ?><!----><?php //echo trans('notte'); ?>
<?php //if(isset($offer->date_from)): ?>
<?php //echo trans('Da'); ?>
<?php //echo $offer->date_from->i18nFormat('d MMM'); ?>
<?php //endif; ?>
<?php //if(isset($offer->date_to)): ?>
<?php //echo trans('A'); ?>
<?php //echo $offer->date_to->i18nFormat('d MMM Y'); ?>
<?php //endif; ?>
<?php //echo $offer->strip_info130; ?>


<div class="cardsgrid__item">
    <div class="cardsgrid__item-wrapper">
        <div class="cardsgrid__item-image">
            <a href="<?php echo url($offer->slug, 1, 'offers'); ?>">
                <?php echo thumber($offer->picture, 512, 284, '', trans('Offerta').' '.$offer->title, trans('Offerta').' '.$offer->title, 80, [ 992 => 6, 1024 => 4, 1200 => 4, 1600 => 6 ]); ?>
            </a>
        </div>

        <div class="cardsgrid__item-description blog_info bg-white">
            <h3 class="post-title">
                <a href="<?php echo url($offer->slug, 1, 'offers'); ?>" title="<?php echo trans('Vai all\'offerta').' '.$offer->name; ?>">
                    <?php echo $offer->name; ?>
                </a>
            </h3>

            <p><?php echo $offer->strip_info130; ?></p>
        </div>

        <div class="cardsgrid__item-cta bg-white">
            <a href="<?php echo url($offer->slug, 1, 'offers'); ?>" title="<?php echo trans('Vai all\'offerta'); ?> <?php echo $offer->name; ?>" class="lnk-default">
                <?php echo trans('Leggi tutto'); ?> &nbsp;
                <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
