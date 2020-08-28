<?php // DOC (variables and things to use) ?>
<?php //echo $this->element('layout/google-map'); ?>
<?php //echo trans('Indirizzo'); ?>
<?php //echo $x->gmap_url; ?>
<?php //echo trans('Apri su Google Maps'); ?>
<?php //echo $currentSite->facility->address; ?><?php //echo $currentSite->facility->city; ?>
<?php //echo $currentSite->facility->email; ?>
<?php //echo $x->whatsapp; ?>
<?php //echo $currentSite->facility->phone; ?>
<?php //echo $x->whatsapp_url; ?>
<?php //echo trans('Seguici sui social'); ?>
<?php //echo $x->facebook_page; ?>
<?php //echo $x->youtube; ?>
<?php //echo $x->flickr; ?>
<?php //echo $x->instagram; ?>
<?php //echo $x->skype; ?>
<?php //echo $x->whatsapp_url; ?>
<?php // end-DOC ?>


<?php
$this->assign('meta_title', $page->title);
$this->assign('meta_description', $page->description);

//$this->append('headStyle');
//$this->end();
echo $this->element('head');

// it has been added by empty.ctp view
//if (isset($page->name)) {
//    $this->Breadcrumbs->add($page->name);
//}
?>

<body>

<?php echo $this->element('widget/loader'); ?>

<?php echo $this->element('widget/oldbrowser'); ?>

<!-- WRAPPER -->
<div class="layout hpg1 <?php echo $this->fetch('pageClass'); ?>">
    <?php echo $this->element('layout/navbar'); ?>

    <?php echo $this->element('layout/breadcrumbs'); ?>

    <?php echo $this->element('layout/w-email'); ?>

    <?php echo $this->element('home/separator'); ?>

    <?php echo $this->element('layout/google-map'); ?>

    <?php echo $this->element('layout/footer'); ?>
</div>

<?php echo $this->element('foot'); ?>

</body>
</html>
