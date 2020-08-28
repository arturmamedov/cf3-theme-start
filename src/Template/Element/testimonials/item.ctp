<?php //echo $post->picture; ?>
<?php //echo $post->title; ?>
<?php //echo $post->name; ?>
<?php //echo $post->strip_info; ?>
<?php //echo $post->link_url; ?>

<?php //while ($post->keywords != 0): ?>
<!--<i class="far fa-star"></i>-->
<?php //$post->keywords--; endwhile; ?>

<div class="testimonials-carousel__item testi">
    <div class="testimonials-carousel__item-image ts-img" style="background-image: url('<?php echo $post->picture; ?>');">
    </div>
    <div class="text-center">
        <?php for ($star = 1; $star <= (int) extra($post, 'review_rating', 5); $star++): ?>
            <i class="fas fa-star text-yellow"></i>
        <?php endfor; ?>

        <small class="d-block"><a href="<?php echo extra($post, 'review_link'); ?>" target="_blank"><?php echo extra($post, 'review_author'); ?></a></small>
    </div>


    <h3><?php echo $post->name; ?></h3>

    <p><?php echo $post->strip_info; ?></p>

    <a href="<?php echo extra($post, 'review_link'); ?>" target="_blank" class="pull-left"><?php echo trans('Leggi recensione'); ?> &nbsp; <i class="far fa-external-link"></i></a>
</div>