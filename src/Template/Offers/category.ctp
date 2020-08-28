<?php
$this->assign('meta_title', $offers->title);
$this->assign('meta_description', $offers->description);

// add class to body and section for this category view
$this->assign('pageClass', 'offers');
$this->assign('sectionClass', 'offers-section');
$this->assign('wrapperClass', 'cardsgrid__wrapper');

$this->Breadcrumbs->add($offers->name);
?>


<?php if (count($offers->offers) > 0): ?>
    <?php foreach ($offers->offers as $offer): ?>
        <?php echo $this->element('offers/cat-item', [ 'offer' => $offer, 'offers' => $offers ]); ?>
    <?php endforeach; ?>
<?php else: ?>
    <?php echo $this->element('offers/no-offers'); ?>
<?php endif; ?>

