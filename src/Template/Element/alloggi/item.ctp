<?php //echo trans('Dettagli alloggio'); ?>
<?php //echo $alloggio->name ?>
<?php //echo url($alloggio->slug, 1, $alloggi->slug); ?>
<?php //echo thumber($alloggio->picture, 360, 175, '', trans('Immagine alloggio') .' '. $alloggio->name); ?>
<?php //echo extra($alloggio, 'room_number').' '.trans('Camere'); ?>
<?php //echo extra($alloggio, 'room_persons').' '.trans('Persone'); ?>
<?php //echo extra($alloggio, 'room_size'); ?>
<?php //echo $alloggio->extra_description ?: $alloggio->meta_description; ?>

<div class="cardslist__item">
    <div class="cardslist__item-wrapper">
        <div class="cardslist__item-image">
            <a href="<?php echo url($alloggio->slug, 1, $alloggi->slug); ?>" style="background-image: url('<?php echo thumber_url($alloggio->picture, 560, 350); ?>');">
            </a>
        </div>

        <div class="cardslist__item-body">
            <div class="cardslist__item-description blog_info">
                <h3 class="post-title">
                    <a href="<?php echo url($alloggio->slug, 1, $alloggi->slug); ?>" title="<?php echo trans('Dettagli alloggio'); ?> - <?php echo $alloggio->name ?>">
                        <?php echo $alloggio->name ?>
                    </a>
                </h3>

                <ul class="ppt-list">
                    <?php if (extra($alloggio, 'room_number')): ?>
                        <li>
                            <i class="fas fa-bed"></i>
                            <span><?php echo trans(extra($alloggio, 'room_number')); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if (extra($alloggio, 'room_persons')): ?>
                        <li>
                            <i class="fas fa-users"></i>
                            <span><?php echo trans(extra($alloggio, 'room_persons')); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if (extra($alloggio, 'room_size')): ?>
                        <li>
                            <i class="fas fa-ruler-combined"></i>
                            <span><?php echo extra($alloggio, 'room_size'); ?></span>
                        </li>
                    <?php endif; ?>
                </ul>

                <p>
                    <?php echo $alloggio->strip_info130; ?>
                    <a href="<?php echo url($alloggio->slug, 1, $alloggi->slug); ?>" title="<?php echo trans('Vai all\'alloggio'); ?> - <?php echo $alloggio->name ?>" class="">
                        <?php echo trans('Leggi tutto'); ?>
                    </a>
                </p>

                <ul class="fct-list">
                    <?php
                        foreach ($alloggio->tags as $service):
                            if (extra($service, 'icon_class', false)):
                    ?>
                                <li>
                                    <span data-toggle="tooltip" data-placement="top" title="<?php echo $service['name']; ?>" data-original-title="<?php echo $service['name']; ?>">
                                        <!--<img src="<?php /*echo $service->files[0]['path_string']; */?>" alt="">-->
                                        <i class="<?php echo extra($service, 'icon_class', 'far fa-check-square'); ?>"></i>
                                    </span>
                                </li>
                    <?php
                            endif;
                        endforeach;
                    ?>
                </ul>
            </div>

            <div class="cardslist__item-cta">
                <div class="cardslist__item-callout">
                    <?php if ($alloggio->extra_description): ?>
                        <i class="<?php echo extra($alloggio, 'class', 'fas fa-check text-success'); ?>"></i>
                        <small><?php echo $alloggio->extra_description ?></small>
                    <?php endif; ?>
                </div>

                <div class="cardslist__item-cta-btn">
                    <a href="<?php echo url($alloggio->slug, 1, $alloggi->slug); ?>" title="<?php echo trans('Vai all\'alloggio'); ?> - <?php echo $alloggio->name ?>" class="lnk-default">
                        <?php echo trans('Leggi tutto'); ?>
                        <i class="fas fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

