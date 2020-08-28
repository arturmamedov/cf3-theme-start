<div class="w-banner safety-banner">
    <div class="toggle-banner opened">
        <a href="javascript:;" class="close-button">
            <i class="fa fa-times fa-2x pull-right text-red"></i>
        </a>

        <a href="<?php echo url('_safetyTrail'); ?>" title="<?php echo trans('Vacanza Sicura'); ?>">
            <div class="bg-white border-radius p-10" style="width: 300px;">
                <?php echo $this->Html->image('/img/vacanze-sicure.png', [ 'width' => 300, 'alt' => trans('Vacanza Sicura') ]); ?>
                <p class="pt-15 m-b-0" style="color: #70778B;"><?php echo trans('Le regole d\'oro per una vacanza sicura!'); ?></p>
                <p class="text-success m-b-0"><?php echo trans('Scopri di più'); ?></p>
            </div>
        </a>
    </div>

    <div class="toggle-banner closed">
        <a href="javascript:;" class="open-button" title="<?php echo trans('Vacanza Sicura'); ?>">
            <i class="fab fa-gratipay fa-3x w-blink" style="color: #e37f30;"title="<?php echo trans('Vacanza Sicura'); ?>"></i>
        </a>
    </div>
</div>

<?php $this->append('footOverrideAssets'); ?>
<script>
    /* banner riavremolanostraestate */
    var estate = wCookies().get('banner-estate');
    if (typeof estate == 'undefined') {
        // console.info('no');
        $(".w-banner .opened").show();
        $(".w-banner .closed").hide();
        // $(".safety-banner").addClass('opened');
    } else {
        // console.info('si');
        $(".w-banner .opened").hide();
        $(".w-banner .closed").show();
        $(".safety-banner").addClass('closed');
        // $(".safety-banner-popover").popover("show");
    }

    $(".w-banner").on('click', ".close-button", function () {
        // console.info('close');
        wCookies().set('banner-estate');
        $(".w-banner .opened").hide();
        $(".w-banner .closed").show();
        $(".safety-banner").addClass('closed');
        // $(".safety-banner-popover").popover("show");
    });

    $(".w-banner").on('click', ".open-button", function () {
        // console.info('open');
        wCookies().remove('banner-estate');
        $(".w-banner .opened").show();
        $(".w-banner .closed").hide();
        $(".safety-banner").removeClass('closed');
        // $(".safety-banner-popover").popover("hide");
    });

    /*if (window.matchMedia("(max-width: 991px)").matches) {
        $(document).scroll(function() {
            $('.safety-banner-popover').popover('hide');
        });
    }* / / *else {
        $('.safety-banner-popover').mouseover(function() {
            $(this).popover('hide');
        });
    }*/
</script>

<?php
$this->Html->script('withPricelistAPI/js/withPricelist/bower_components/requirejs/require.js', [
    'block' => 'footOverrideAssets',
    'data-main' => $this->Url->script('withPricelistAPI/js/withPricelist/withPricelist.min.js'),
    'id' => 'withPricelistScripts',
    //'data-quote-url' => $this->Translate->url('_quote')
]);
?>
<?php $this->end(); ?>

