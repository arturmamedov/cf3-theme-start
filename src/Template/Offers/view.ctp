<?php // DOC (variables and things to use) ?>
<?php //if (strlen($offer->picture) > 1): ?>
<?php //echo $this->Html->image($offer->picture, [ 'alt' => $offer->title, 'class' => 'img-responsive center-block' ]) ?>
<?php //echo thumber($offer->picture, 585, 400, 'img-responsive center-block', $offer->title); ?>
<?php //echo thumber_url($offer->picture, 585, 400); ?>
<?php //endif; ?>
<?php //echo $this->Translate->make('Da'); ?>
<?php //echo $offer->date_from ? $offer->date_from->i18nFormat('d MMM Y') : ''; ?>
<?php //echo $this->Translate->make('a'); ?>
<?php //echo $offer->date_to ? $offer->date_to->i18nFormat('d MMM Y') : ''; ?>
<?php //echo $offer->info; ?>

<?php //if (isset($offer->gallery_images)): ?>
<?php //echo $this->element('gallery/page_gallery', [ 'images' => $offer->gallery_images ]); ?>
<?php //endif; ?>

<?php //// Category ?>
<?php //echo url($offer->offer_categories[0]->slug, 2, 'offers'); ?>
<?php //echo trans('Vai a tutte le offerte'); ?>
<?php //echo $offer->offer_categories[0]->name; ?>

<?php //$this->start('similar_posts'); ?>
<?php //echo $this->element('offers/carousel', [ 'offers' => $offers ]); ?>
<?php //$this->end(); ?>
<?php // end-DOC ?>


<?php
$this->assign('meta_title', $offer->title);
$this->assign('meta_description', $offer->description);

// add class to body and section for this category view
//$this->assign('pageClass', '');
$this->assign('sectionClass', 'offer');
//$this->assign('extraClass', '');
$this->assign('wrapperClass', 'no-xs-padding');

$this->Breadcrumbs->add($offer->offer_categories[0]->name, url($offer->offer_categories[0]->slug, 2, 'offers'));
$this->Breadcrumbs->add($offer->name);
?>

<div class="row offer__wrapper">
    <div class="col-lg-6 offer__img" style="background-image:url('<?php echo thumber_url($offer->picture, 585, 400); ?>');"></div>

    <div class="col-lg-6 offer__info">
        <div class="offer__meta">
            <i class="far fa-calendar"></i>

            <?php echo $this->Translate->make('Da'); ?>
            <?php echo $offer->date_from ? $offer->date_from->i18nFormat('d MMM Y') : ''; ?>
            <?php echo $this->Translate->make('a'); ?>
            <?php echo $offer->date_to ? $offer->date_to->i18nFormat('d MMM Y') : ''; ?>

            <?php echo $this->element('offers/not-valid', [ 'offers' => $offers, 'extra_class' => 'mt-30' ]); ?>
        </div>

        <div class="offer__description">
            <h1><?php echo $offer->name; ?></h1>
            <p class="lead"><?php echo $offer->description; ?></p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 offer__body">
        <?php echo $offer->info; ?>
    </div>
</div>


<?php $this->start('similar_posts'); ?>
<?php echo $this->element('offers/carousel', [ 'offers' => $offers ]); ?>
<?php $this->end(); ?>