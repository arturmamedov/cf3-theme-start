<?php
// initialize defaults options
$defaults = [
    'w' => 260,
    'h' => 200,

    'class' => 'col-lg-4 col-md-4 col-sm-6',
];
// merge defaults by overwrite if isset new
if (isset($options)) {
    foreach ($defaults as $k => $v) {
        $options[$k] = array_key_exists($k, $options) ? $options[$k] : $v;
    }
} else {
    $options = $defaults;
}
?>

<div class="gallery-grid">
    <div class="row">
        <?php foreach ($images as $src): ?>
            <a href="<?php echo $src; ?>" data-gallery="lightbox">
                <div class="<?php echo $options['class']; ?>">
                    <div class="gd-item">
                        <?php echo thumber($src, $options['w'], $options['h'], 'img-responsive'); ?>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
