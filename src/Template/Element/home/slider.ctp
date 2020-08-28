<?php //foreach ($slides as $key => $slide): ?>
<?php //if(isset($slide->name) && strlen($slide->name)): ?>
<?php //echo $slide->name; ?>
<?php //endif; ?>
<?php //if(isset($slide->info) && strlen($slide->info)): ?>
<?php //echo $slide->info; ?>
<?php //endif; ?>
<?php //if(isset($slide->link) && strlen($slide->link)): ?>
<?php //endif; ?>
<?php //endforeach; ?>


<section id="homepage-hero" dir="ltr" class="hero-slider fullscreenbanner-container">
    <?php foreach ($slides as $key => $slide): ?>
        <div class="hero-slider__slide">
            <div class="hero-slider__slide-wrapper" style="background-image:url('<?php echo $slide->picture; ?>');">
                <div class="hero-slider__slide-headings">
                    <?php if(isset($slide->name) && strlen($slide->name)): ?>
                        <div class="hero-slider__slide-subtitle"><?php echo $slide->name; ?></div>
                    <?php endif; ?>

                    <?php if(false && isset($slide->info) && strlen($slide->info)): ?>
                        <div class="hero-slider__slide-title"><?php echo strip_tags($slide->info); ?></div>
                    <?php endif; ?>

                    <?php if(isset($slide->link) && strlen($slide->link)): ?>
                        <a href="<?php echo $slide->link; ?>" class="btn btn-lg btn-primary mt-50" target="<?php echo $slide->target ?: '_self'; ?>">
                            <?php echo trans('Maggiori info'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>


<div class="scroller-div">
    <a class="an-down" href="#offers-section"><i class="fas fa-angle-down"></i></a>
    <span class="rotate"><?php echo trans('Giù'); ?></span>
    <span class="dwn">Scroll</span>
</div>


<?php //$this->append('footScript'); ?>
<?php //$this->end(); ?>

