<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h3><?php echo trans('Nessuna offerta disponibile'); ?></h3>

            <br>

            <i class="far fa-sad-tear fa-4x"></i>

            <br>

            <h4><?php echo trans('Guarda le offerte in altre lingue'); ?></h4>

            <ul class="list-unstyled">
                <?php foreach (config('projectSites.available') as $lang => $site): ?>
                    <?php if ($site['prefixes']['offers']['default_slug']): ?>
                        <li>
                            <a href="<?php echo url($site['prefixes']['offers']['default_slug'], 2, 'offers', $lang); ?>" class="">
                                <i class="flag-icon flag-icon-<?php echo $lang; ?>"></i>
                                &nbsp;
                                <?php echo trans('Offerte'); ?> - <?php echo $site['language_name']; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>