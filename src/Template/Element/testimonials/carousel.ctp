<?php if (isset($testimonials) && count($testimonials->posts) > 0): ?>
<?php //echo $testimonials->name; ?>
<?php //foreach ($testimonials->tips as $testimonial): ?>
<?php //echo $this->element('testimonials/item', [ 'post' => $testimonial, 'category' => $testimonials ]); ?>
<?php //endforeach; ?>

<section class="testimonials c-block testimonial-sec test_page" style="background-image:url('<?php echo config('assets.path'); ?>assets/img/home/testimonials/c-adria/testimonials_bg.jpg');">
    <!-- <div class="container"> -->
    <div class="sec-title">
        <h3><?php echo $testimonials->name; ?></h3>
    </div>
    <div class="testimonials-carousel">
        <?php foreach ($testimonials->posts as $testimonial): ?>
            <?php echo $this->element('testimonials/item', [ 'post' => $testimonial, 'category' => $testimonials ]); ?>
        <?php endforeach; ?>
    </div>
    <!-- </div> -->
</section>

<?php //$this->append('footScript'); ?>
<?php //$this->end(); ?>
<?php endif; ?>
