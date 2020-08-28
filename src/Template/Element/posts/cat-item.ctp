<div class="col-4 cardsgrid__item">
    <div class="cardsgrid__item-wrapper">
        <div class="cardsgrid__item-image">
            <a href="<?php echo url($post->slug, 1, 'offers'); ?>">
                <?php echo thumber($post->picture, 380, 245, '', trans('Offerta').' '.$post->title); ?>
            </a>
        </div>

        <div class="cardsgrid__item-description blog_info">
            <h3 class="post-title">
                <a href="<?php echo url($post->slug, 1, 'offers'); ?>" title="<?php echo trans('Vai all\'offerta').' '.$post->name; ?>">
                    <?php echo $post->name; ?>
                </a>
            </h3>

            <p><?php echo $post->strip_info130; ?></p>
        </div>

        <div class="cardsgrid__item-cta">
            <a href="<?php echo url($post->slug, 1, 'offers'); ?>" title="<?php echo trans('Vai all\'offerta'); ?> <?php echo $post->name; ?>" class="lnk-default">
                <?php echo trans('Leggi tutto'); ?> &nbsp;
                <i class="fas fa-angle-right"></i>
            </a>
        </div>
    </div>
</div>
