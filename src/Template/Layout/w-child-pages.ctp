<?php
$this->assign('meta_title', $page->title);
$this->assign('meta_description', $page->description);

//$this->append('headStyle');
//$this->end();
echo $this->element('head');
?>

<body>

<?php echo $this->element('widget/loader'); ?>

<?php echo $this->element('widget/oldbrowser'); ?>

<!-- WRAPPER -->
<div class="layout hpg1 <?php echo $this->fetch('pageClass'); ?>">
    <?php echo $this->element('layout/navbar'); ?>

    <?php echo $this->element('layout/breadcrumbs'); ?>

    <section class="selling-points <?php echo $this->fetch('sectionClass'); ?>">
        <div class="container-fluid p-0 <?php echo $this->fetch('extraClass'); ?>">
            <div class="sec-title container my-40">
                <h2><?php echo $page->subname ?: $page->name; ?></h2>
                <p class="lead"><?php echo $page->info; ?></p>
            </div>

            <?php //echo $this->fetch('content'); // no fetch from no-where render content right here, right now! ?>
            <div class="services-sec selling-points__wrapper <?php echo $this->fetch('wrapperClass'); ?>">
                <?php foreach ($page->child_pages as $child): ?>
                    <?php echo $this->element('pages/child', [ 'child' => $child ]); ?>
                <?php endforeach; ?>
            </div>

            <?php if (extra($page, 'extra_content')): ?>
            <section class="c-block <?php echo $this->fetch('sectionClass'); ?>">
                <div class="<?php echo $this->fetch('extraClass'); ?>">
                    <div class="<?php echo extra($page, 'class') ?: 'container'; ?> <?php echo $this->fetch('wrapperClass'); ?>">
                        <?php echo extra($page, 'extra_content'); ?>
                    </div>
                </div>
            </section>
            <?php endif; ?>
        </div>
    </section>

    <?php echo $this->element('home/separator'); ?>

    <?php echo $this->element('offers/carousel'); ?>

    <?php echo $this->element('layout/w-email'); ?>

    <?php echo $this->element('layout/google-map'); ?>

    <?php echo $this->element('layout/footer'); ?>
</div>

<?php echo $this->element('foot'); ?>

</body>
</html>
