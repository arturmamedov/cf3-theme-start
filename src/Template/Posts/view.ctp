<?php
$this->assign('meta_title', $post->title);
$this->assign('meta_description', $post->description);

// add class to body and section for this category view
$this->assign('pageClass', 'post');
$this->assign('sectionClass', '');
$this->assign('wrapperClass', '');

$this->Breadcrumbs->add($post->post_categories[0]->name,
    url($post->post_categories[0]->slug, 2, $post->post_categories[0]->slug), [
        'title' => trans('Vai alla categoria').' - '.$post->post_categories[0]->name
    ]);
$this->Breadcrumbs->add($post->name);
?>

<div class="qua_post_body single-offer">
    <?php if (strlen($post->picture) > 1): ?>
        <div class="single-offer__img">
            <?php echo $this->Html->image($post->picture, [ 'alt' => $post->title, 'class' => 'img-responsive center-block' ]) ?>
        </div>
    <?php endif; ?>
    <div class="dep-head" style="border: none;">
        <a href="<?php echo url($post->post_categories[0]->slug, 2, $post->post_categories[0]->slug); ?>" title="<?php echo trans('Vai alla categoria'); ?> - <?php echo $post->post_categories[0]->name; ?>" class="pull-right">
            <i class="fa fa-asterisk"></i> &nbsp; <?php echo $post->post_categories[0]->name; ?>
        </a>

        <hr class="p-10"/>
    </div>


    <div class="single-offer__body">
        <?php echo $post->info; ?>
    </div>

    <?php if (isset($post->gallery_images)): ?>
        <?php echo $this->element('gallery/page_gallery', [ 'images' => $post->gallery_images ]); ?>
    <?php endif; ?>
</div>

<?php //$this->start('similar_posts'); ?>
    <?php //echo $this->element('posts/carousel', [ 'post_category' => $post->post_categories[0] ]); ?>
<?php //$this->end(); ?>
