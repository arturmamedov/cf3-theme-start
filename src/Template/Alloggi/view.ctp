<?php //if ( ! empty($post->files)): ?>
<?php //foreach ($post->gallery_images as $image): ?>
<?php //foreach ($post->files as $image): if ($image['pivot']['zone'] != 'gallery') { continue; } ?>
<?php //echo $image['path_string']; ?>
<?php //echo $image['description'] ?: trans('Foto del alloggio').' - '.$post->name.' | ' .$tsn; ?>
<?php //echo thumber($image['path_string'], 945, 545, '', $image['alt_attribute']); ?>
<?php //echo thumber([
//    'src' => $image['path_string'],
//    'w' => 945,
//    'h' => 545,
//    'crop' => ($image['keywords'] == 'nocut') ? false : true,
//    'alt' => $image['alt_attribute'],
//    'suffix_alt' => ' | '.$tsn,
//    // auto alt
//    'auto_alt' => true,
//    'prefix_auto_alt' => trans('Foto del alloggio').' '.$post->name.' - ',
//    'suffix_auto_alt' => ' | '.$tsn,
//]);
//?>
<?php //echo $post->subname ?: $post->name; ?>
<?php //echo $post->clean_info; ?>


<?php
$this->assign('meta_title', $post->title);
$this->assign('meta_description', $post->description);

$this->assign('sectionClass', 'alloggio');
$this->assign('wrapperClass', 'no-xs-padding');

if (isset($post->post_categories) && count($post->post_categories) > 0) {
    $this->Breadcrumbs->add($post->post_categories[0]->name,
        url($post->post_categories[0]->slug, 2, $post->post_categories[0]->slug), [
            'title' => trans('Apri').' - '.$post->post_categories[0]->name
        ]);
}

$this->Breadcrumbs->add($post->name);
?>

<section class="lodging main-content">
    <div class="container no-xs-padding overflow-hidden">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="image-slider">
                    <?php //foreach ($post->gallery_images as $image): ?>
                    <?php
                    $plan_class_changes = 'col-lg-12';

                    foreach ($post->files as $image):
                        if ($image['pivot']['zone'] == 'plan') {
                            $plan = $image;

                            $plan_class_changes = 'col-lg-6';
                            continue;
                        }
                        ?>
                        <a href="<?php echo $image['path_string']; ?>"
                                data-gallery="<?php echo $post->id; ?>-gallery"
                                title="<?php echo (strlen($image['description']) > 1) ? $image['description'].' | '.$tsn : trans('Foto dell\'alloggio').' - '.$post->name.' | '.$tsn; ?>"
                                class="image-slider__item">
                            <!--<img src="<?php /*echo $image['path_string']; */?>" alt="<?php /*echo $image['description'].' | '.$tsn ?: trans('Foto dell\'alloggio').' - '.$post->name.' | '.$tsn; */?>">-->
                            <?php
                                $at = (strlen($image['description']) > 1) ? $image['description'].' | '.$tsn : trans('Foto dell\'alloggio').' - '.$post->name.' | '.$tsn;
                                thumber($image['path_string'], 1170, 775, '', $at, $at, 100, [ '*' => 12 ]);
                            ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container no-xs-padding">
        <div class="row">
            <?php if (isset($plan)): ?>
                <div class="lodging__image <?php echo $plan_class_changes; ?> d-flex align-items-center">
                    <a href="<?php echo $plan['path_string']; ?>" data-gallery="<?php echo $post->id; ?>-gallery" title="<?php echo trans('Piantina'); ?> - <?php echo $post->name; ?> | <?php echo $tsn; ?>">
                        <img src="<?php echo $plan['path_string']; ?>" alt="<?php echo trans('Piantina'); ?> - <?php echo $post->name; ?> | <?php echo $tsn; ?>">
                    </a>
                </div>
            <?php endif; ?>

            <div class="lodging__info <?php echo $plan_class_changes; ?>">
                <h3><?php echo trans('Caratteristiche'); ?> - <?php echo $post->name; ?></h3>

                <ul class="features">
                    <?php if (extra($post, 'room_number')): ?>
                        <li>
                            <i class="fas fa-bed"></i>
                            <span><?php echo trans(extra($post, 'room_number')); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if (extra($post, 'room_persons')): ?>
                        <li>
                            <i class="fas fa-users"></i>
                            <span><?php echo trans(extra($post, 'room_persons')); ?></span>
                        </li>
                    <?php endif; ?>

                    <?php if (extra($post, 'room_size')): ?>
                        <li>
                            <i class="fas fa-ruler-combined"></i>
                            <span><?php echo extra($post, 'room_size'); ?></span>
                        </li>
                    <?php endif; ?>
                </ul>

                <h3><?php echo trans('Dotazioni'); ?></h3>

                <ul class="svx-list">
                    <?php foreach ($post->tags as $service): ?>
                        <li><?php echo $service['name']; ?></li>
                    <?php endforeach; ?>
                </ul>


                <div class="lodging__info-cta-btn">
                    <a href="<?php echo ($post->post_categories[0]->id == 47) ? $x->booking_url.'/'.locale().'/2488/Search/?productType=accommodation' : $x->booking_url.'/'.locale().'/2488/Search/?productType=pitch'; ?>" title="<?php echo trans('Prenota l\'alloggio'); ?>" class="lnk-default" target="_blank">
                        <?php echo trans('PRENOTA SUBITO!'); ?>
                        <i class="fas fa-check"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- DESCRIPTION -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 room_descp_sec">
                <div class="descp_info">
                    <h3><?php echo trans('Descrizione'); ?></h3>

                    <?php echo $post->info; ?>

                    <p>&nbsp;</p>

                    <?php echo extra($post, 'extra_content'); ?>
                </div>

                <div class="descp_info">
                    <?php if ($post->post_categories[0]->id == 47): ?>
                        <?php echo $blocks->items['condizioni-alloggi']->body; ?>
                    <?php else: ?>
                        <?php echo $blocks->items['condizioni-piazzole']->body; ?>
                    <?php endif; ?>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->start('similar_posts'); ?>
    <?php echo $this->element('offers/carousel'); ?>
<?php $this->end(); ?>
