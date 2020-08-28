<?php
$this->assign('meta_title', $post_category->title);
$this->assign('meta_description', $post_category->description);
$this->assign('header', true);

$this->Breadcrumbs->add($post_category->name);
?>

<div class="layout hpg1 <?php echo $this->fetch('pageClass'); ?>">

<?php if(strlen($post_category->info) > 0): ?>
    <div class="p-b-40">
        <?php echo $post_category->info; ?>
    </div>
<?php endif; ?>

    <section class="cardslist c-block p-0 <?php echo $this->fetch('sectionClass'); ?>">
        <div class="container">
            <div class="cardslist__wrapper <?php echo $this->fetch('wrapperClass'); ?>">

                <header class="sec-title">
                    <h3><?php $post_category->name ?></h3>
                </header>

                <?php foreach ($post_category->posts as $alloggio): ?>
                    <?php echo $this->element('alloggi/item', [ 'alloggio' => $alloggio, 'alloggi' => $post_category ]); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</div>
