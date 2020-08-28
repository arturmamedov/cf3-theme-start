<?php // DOC (variables and things to use) ?>
<?php //echo $page->name; ?>
<?php //echo $page->subname; ?>
<?php //if (strlen($page->picture) > 1): ?>
<?php //echo $this->Html->image($page->picture, [ 'alt' => $page->title, 'class' => 'img-responsive center-block' ]) ?>
<?php //endif; ?>
<?php //echo $page->info; // with shortcodes replaced [in wbe where it exist otherwise is like clean] ?>
<?php //echo $page->clean_info; // without shortcodes ?>
<?php //echo $page->strip_info; // stripped without tags and without shortcodes ?>
<?php //if (isset($page->gallery_images)): ?>
<?php //echo $this->element('gallery/page_gallery', [ 'images' => $page->gallery_images, 'options' => [] ]); ?>
<?php //endif; ?>
<?php //$this->start('similar_posts'); ?>
<?php //echo $this->element('offers/carousel'); ?>
<?php //$this->end(); ?>
<?php // end-DOC ?>

<?php
$this->assign('meta_title', $page->title);
$this->assign('meta_description', $page->description);

// add class to body and section for this category view
//$this->assign('pageClass', '');
$this->assign('sectionClass', 'p-0');
$this->assign('extraClass', 'explore_sec_txt');
//$this->assign('wrapperClass', '');

$this->Breadcrumbs->add($page->name);
?>

<div class="sec-title mb-20">
    <h2><?php echo $page->subname ?: $page->name; ?></h2>
</div>

<?php echo $page->info; ?>

<?php //echo extra($page, 'extra_content'); ?>




<?php $this->start('similar_posts'); ?>
    <?php echo $this->element('offers/carousel'); ?>
<?php $this->end(); ?>

