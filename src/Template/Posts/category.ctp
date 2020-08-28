<?php
$this->assign('meta_title', $post_category->title);
$this->assign('meta_description', $post_category->description);

// add class to body and section for this category view
$this->assign('pageClass', 'offers');
$this->assign('sectionClass', 'offers-section');
$this->assign('wrapperClass', 'offers-section__wrapper');

$this->Breadcrumbs->add($post_category->name);
?>


<?php if (count($post_category->posts) > 0): ?>
    <div class="row">
        <?php foreach ($post_category->posts as $post): ?>
            <?php echo $this->element('posts/cat-item', [ 'post' => $post, 'post_category' => $post_category ]); ?>
        <?php endforeach; ?>
    </div>
<?php else: ?>
    <h3 class="text-center"><?php echo $this->Translate->make('Nessun post disponibile in questa categoria'); ?></h3>
<?php endif; ?>

