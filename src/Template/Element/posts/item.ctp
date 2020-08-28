<div class="offers-carousel__item">
    <div class="offers-carousel__item-wrapper">
        <div class="offers-carousel__item-image">
            <a href="<?php echo url($post->slug, 1, $post->post_categories[0]->slug); ?>" title="<?php echo trans('Apri post'); ?>" class="qua_news_block">
                <span class="qua_news_img">
                    <img src="<?php echo $post->picture; ?>" alt="<?php echo $post->title; ?>">
                </span>
            </a>
        </div>
        <div class="offers-carousel__item-body">
            <h4 class="qua_news_title">
                <a href="<?php echo url($post->slug, 1, $post->post_categories[0]->slug); ?>">
                    <?php echo $post->name; ?>
                </a>
            </h4>

            <span class="qua_news_author"></span>

            <p><?php echo $post->strip_info130; ?></p>
        </div>

        <div class="offers-carousel__item-footer">
            <a href="<?php echo url($post->slug, 1, $post->post_categories[0]->slug); ?>" title="<?php echo trans('Apri post'); ?> <?php echo $post->name; ?>" class="btn"><?php echo trans('Leggi tutto'); ?></a>
        </div>
    </div>
</div>
