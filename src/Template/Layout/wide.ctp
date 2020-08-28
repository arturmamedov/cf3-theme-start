<?php
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

    <section class="cardsgrid c-block <?php echo $this->fetch('sectionClass'); ?>">
        <div class="py-40 container <?php echo $this->fetch('wrapperClass'); ?>">
            <?php echo $this->fetch('content'); ?>
        </div>
    </section>

    <?php echo $this->element('home/separator'); ?>

    <?php echo $this->fetch('similar_posts'); ?>

    <?php echo $this->element('layout/w-email'); ?>

    <?php echo $this->element('layout/google-map'); ?>

    <?php echo $this->element('layout/footer'); ?>
</div>

<?php echo $this->element('foot'); ?>

</body>
</html>
