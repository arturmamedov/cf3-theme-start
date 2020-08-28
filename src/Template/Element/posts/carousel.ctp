<?php if (isset($post_category)): ?>
<section class="offers-carousel qua_section">
    <div class="offers-carousel__wrapper text-center">
        <h2><?php echo $post_category->name; ?></h2>

        <p class="lead"><?php echo $post_category->strip_info; ?></p>

        <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
            <?php if (count($post_category->posts) > 0): ?>
                <div class="offers-carousel__items">
                <?php foreach ($post_category->posts as $tip): ?>
                    <?php echo $this->element('posts/item', [ 'post_category' => $post_category, 'tip' => $tip ]); ?>
                <?php endforeach; ?>
                </div>
            <?php else: ?>
                <h3 class="text-center"><?php echo trans('Nessun post disponibile'); ?></h3>

                <br>

                <i class="far fa-sad-tear fa-4x"></i>
            <?php endif; ?>

            <div class="text-center mt-100 room_info col-3 center-block p-0">
                <a href="<?php echo url($post_category->slug, 2, $post_category->slug); ?>" title="<?php echo trans('Vai alla categoria'); ?>" class="btn btn-default"><?php echo trans('Vai alla categoria'); ?> &nbsp; <i class="la la-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<?php //$this->append('footScript'); ?>
<?php //$this->end(); ?>
<?php endif; ?>
