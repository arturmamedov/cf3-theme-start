<?php //echo $page->name; ?>
<?php //foreach ($page->child_pages as $feature): ?>
<?php //echo $page->strip_info; ?>
<?php //foreach ($page->child_pages as $feature): ?>
<?php //echo thumber_url($feature->picture, 950, 580, 100); ?>
<?php //echo $feature->name; ?>
<?php //echo $feature->title; ?>
<?php //echo $feature->subname; ?>
<?php //echo $feature->strip_info([ 'add_allowed_tags' => '<p>', 'truncate' => 400 ]); ?>
<?php //echo url($feature->slug); ?>
<?php //endforeach; ?>

<section class="selling-points">
    <div class="container-fluid p-0">
        <div class="sec-title my-40">
            <h1><?php echo $page->name; ?></h1>
        </div>

        <div class="services-sec selling-points__wrapper">
            <?php foreach ($page->child_pages as $child): ?>
                <?php echo $this->element('pages/child', [ 'child' => $child ]); ?>
            <?php endforeach; ?>
        </div>
        <!--services-sec end-->
    </div>
</section>