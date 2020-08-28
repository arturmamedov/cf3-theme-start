<div id="<?php echo $child->slug; ?>" class="selling-points__row row no-gutters">
    <div class="selling-points__item col-lg-6">
        <div class="svr-text child-text relpos">
            <?php if (extra($child, 'class')): ?>
                <i class="<?php echo extra($child, 'class'); ?>"></i>
            <?php endif; ?>

            <div class="child-text-content">
                <h3><?php echo $child->name; ?></h3>

                <?php echo $child->info; ?>
            </div>
        </div>

        <a href="#<?php echo $child->slug; ?>" data-top-offset="70" class="child-read-more d-none">
            <?php echo trans('Leggi tutto'); ?> &nbsp; <i class="fa fa-chevron-down"></i>
        </a>

        <?php if ($child->old_url): ?>
            <a href="<?php echo url($child->old_url); ?>" title="<?php echo $child->title; ?>" class="lnk-default btn-outline child-text-link">
                <?php echo trans('Approfondisci'); ?> <i class="fas fa-angle-right"></i>
            </a>
        <?php endif; ?>
    </div>

    <div class="selling-points__item selling-points__item-gallery col-lg-6">
        <div class="selling-point__gallery image-carousel">
            <?php if (strlen($child->picture)): //  && $child->picture != 'def'?>
                <div class="svr-img relpos" style="background-image:url('<?php echo thumber_url($child->picture, 950, 580, 100); ?>');">
                    <!-- <div class="svr-img"> -->
                    <!-- <img src="assets/img/selling-points/selling-point_01.jpg" alt=""> -->
                    <a href="<?php echo $child->picture ?>" data-gallery="<?php echo $child->slug; ?>-gallery" data-thumbnail="<?php echo thumber_url($child->picture, 950, 580, 100); ?>" title="<?php echo $child->name; ?> | <?php echo $tsn; ?>">
                        <i class="fa fa-search-plus fa-3x abspos" style="top: 20px; right: 20px; color: rgba(204, 203, 203, 0.57);"></i>
                    </a>
                </div>
            <?php endif; ?>

            <?php foreach ($child->gallery_images as $image): ?>
                <div class="svr-img relpos" style="background-image:url('<?php echo thumber_url($image, 950, 580, 100); ?>');">
                    <a href="<?php echo $image ?>" data-gallery="<?php echo $child->slug; ?>-gallery" data-thumbnail="<?php echo thumber_url($image, 950, 580, 100); ?>" title="<?php echo $child->name; ?> | <?php echo $tsn; ?>">
                        <i class="fa fa-search-plus fa-3x abspos" style="top: 20px; right: 20px; color: rgba(255, 255, 255, 0.5);"></i>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!--svr-img end-->
    </div>
</div>