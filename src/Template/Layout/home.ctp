<?php
$this->assign('meta_title', $page->title);
$this->assign('meta_description', $page->description);

echo $this->element('head');
?>

<body>
<?php echo $this->element('widget/loader'); ?>

<?php echo $this->element('widget/oldbrowser'); ?>

<!-- WRAPPER -->
<div class="layout hpg1">
    <?php echo $this->element('layout/navbar'); ?>

    <section class="page-banner">
        <?php if (count($slides) > 0): ?>
            <?php echo $this->element('home/slider'); ?>
        <?php endif; ?>

        <?php echo $this->element('home/booking'); ?>
    </section>

    <?php echo $this->element('offers/carousel'); ?>

    <?php //echo $this->element('home/welcome'); ?>

    <?php echo $this->element('home/features'); ?>

    <?php echo $this->element('home/separator'); ?>

    <?php echo $this->element('testimonials/carousel'); ?>

    <?php //echo $this->element('home/gallery'); ?>

    <?php echo $this->element('layout/w-email'); ?>

    <?php echo $this->element('layout/google-map'); ?>

    <?php echo $this->element('layout/footer'); ?>
</div>

<?php echo $this->element('foot'); ?>
</body>
</html>
