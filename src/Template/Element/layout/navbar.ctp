<?php //echo $x->whatsapp_url; ?>
<?php //echo $x->whatsapp; ?>
<?php //echo $x->instagram; ?>
<?php //echo $x->facebook_page; ?>
<?php //echo trans('Contattaci ora'); ?>
<?php //echo $x->tripadvisor; ?>


<?php //lang select ?>
<?php //echo $site_languages[$lang_code]; ?>
<?php //foreach ($site_languages as $slug => $name): ?>
<!--    <li>-->
<!--        <a href="--><?php //echo url($slug); ?><!--">-->
<!--            <i class="flag-icon flag-icon---><?php //echo $slug; ?><!--"></i>-->
<!--            --><?php //echo $name; ?>
<!--        </a>-->
<!--    </li>-->
<?php //endforeach; ?>

<header class="site-header">
    <section class="main-bar">
        <div class="wrapper">
            <div class="branding">
                <a href="<?php echo url(''); ?>" class="branding__logo">
                     <img src="<?php echo config('assets.logo_white'); ?>" alt="<?php echo $tsn; ?> Logo">
                    <!-- <img src="<?php //echo CURRENT_THEME_PATH_PREFIX; ?>theme_fe_adria/dist/assets/img/c-adria_logo.png" alt="brand logo">-->
                    <?php //echo $this->Html->image(APP_LOGO); ?>
                </a>
            </div>
            <ul class="info">
                <li>
                    <a href="tel:<?php echo $currentSite->facility->phone; ?>" title="<?php echo $currentSite->facility->phone; ?>">
                        <i class="flaticon-call"></i>
                        <span><?php echo trans('Chiama'); ?></span>
                    </a>
                </li>
                <li>
                    <a href="#w-contact-section"
                        class="w-scroll w-target w-email-ga"
                        data-ga="<?php echo $currentSite->facility->email; ?>"
                        title="<?php echo $currentSite->facility->email; ?>"
                        data-top-offset="0"
                        data-target="#w-contact-section"
                        data-auto-close="3000">
                            <i class="flaticon-email"></i>
                            <span><?php echo trans('Scrivici'); ?></span>
                    </a>
                </li>
                <li>
                    <a href="https://goo.gl/maps/98iaz5LHP73T95kh8" title="<?php echo $currentSite->facility->address; ?>" target="_blank">
                        <i class="flaticon-placeholder"></i>
                        <span><?php echo trans('Dove siamo'); ?></span>
                    </a>
                </li>
            </ul>
            <ul class="main-nav">
                <li class="book_now">
                    <a class="go2" href="#booking-bar">
                        <i class="flaticon-calendar"></i>
                        <span><?php echo trans('Prenota'); ?></span>
                    </a>
                </li>
                <li class="book_now">
                    <a href="http://webcheckin.villaggiocampingadria.it/?lang=<?php echo locale(); ?>" target="_blank">
                        <i class="flaticon-bell"></i>
                        <span>Check-In</span>
                    </a>
                </li>
                <li class="social_slct has-dropdown">
                    <a href="#">
                        <i class="flaticon-share"></i>
                        <span>Social</span>
                    </a>
                    <ul>
                        <li class="">
                            <a href="https://www.facebook.com/CampingVillageAdria" target="_blank">
                                <i class="fab fa-facebook-f text-facebook gradient"></i>
                                <span>Facebook</span></a>
                        </li>
                        <li class="">
                            <a href="https://www.instagram.com/campingadria/" target="_blank">
                                <i class="fab fa-instagram text-instagram gradient"></i>
                                <span>Instagram</span></a>
                        </li>
                    </ul>
                </li>

                <li class="lang_slct has-dropdown">
                    <a href="javascript:;">
                        <span><?php echo strtoupper(locale()); ?></span>
                    </a>
                    <ul>
                        <?php foreach ($site_languages as $locale => $language_name): ?>
                            <li class="selected">
                                <a href="<?php echo url($locale); ?>">
                                    <i class="flag-icon flag-icon-<?php echo $locale; ?>"></i>
                                    <span class="w-uppercase"><?php echo $locale; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li>
                    <button class="nav-trigger hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </li>
            </ul>
        </div>
    </section>

    <!-- NAVIGATION -->
    <nav id="site-navigation" class="navigation">
        <section class="navigation__main">
            <ul class="navigation__main-menu">

                <?php foreach ($menus['navbar']->submenus as $item): ?>
                    <?php
                    if ($item->children):
                        $active = '';
                        foreach ($item->children as $children) {
                            if ($children->original_url == $this->request->here()) {
                                $active = 'active';
                            }
                        }
                        ?>

                        <?php //echo $active; ?>
                        <?php //echo $item->original_url; ?>
                        <?php //echo $item->name; ?>
                        <?php //echo $item->class; //@todo ?>
                        <?php /*target="echo $item->target; */?>

                        <?php //foreach ($item->children as $children): ?>
                        <?php //$active = ($this->request->here() == $children->original_url) ? 'active' : ''; ?>
                        <?php //echo $active; ?>
                        <?php //echo $children->original_url; ?>
                        <?php //echo $children->name; ?>
                        <?php //echo $children->class; //@todo ?>

                        <li class="navigation__main-item has-children <?php echo $active; ?>"
                            style="background-image:url('<?php echo $item->class ?: config('assets.path').'assets/img/components/boxed-nav/c-adria/nav-item_piscina.jpg'; ?>')">

                            <a href="<?php echo $item->original_url; ?>" class="dropdown-trigger <?php echo $active; ?>" target="<?php echo $item->target; ?>"><?php echo $item->name; ?></a>
                            <ul class="navigation__main-dropdown">
                                <?php foreach ($item->children as $children): ?>
                                    <?php $active = ($this->request->here() == $children->original_url) ? 'active' : ''; ?>
                                    <li class="navigation__main-item <?php echo $active; ?>">
                                        <a class="" href="<?php echo $children->original_url; ?>" target="<?php echo $children->target; ?>">
                                            <?php echo $children->name; ?>
                                            <?php if (strlen($children->description) > 1): ?>
                                                <small class="has-description"><?php echo $children->description; ?></small>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <?php $active = ($this->request->here() == $item->original_url) ? 'active' : ''; ?>
                        <li class="navigation__main-item <?php echo $active; ?>" style="background-image:url('<?php echo $item->class ?: config('assets.path').'assets/img/components/boxed-nav/c-adria/nav-item_piscina.jpg'; ?>')">
                            <a href="<?php echo $item->original_url; ?>" class="<?php echo $active; ?>" target="<?php echo $item->target; ?>">
                                <?php echo $item->name; ?>
                                <?php if (strlen($item->description) > 1): ?>
                                    <small class="has-description"><?php echo $item->description; ?></small>
                                <?php endif; ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

            </ul>
        </section>

        <section class="navigation__bottom-bar">
            <div class="wrapper">
                <ul class="info">
                    <li>
                        <a href="tel:<?php echo $currentSite->facility->phone; ?>">
                            <i class="flaticon-call"></i>
                            <span><?php echo trans('Chiama'); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="#w-contact-section" class="w-scroll w-target w-email-ga"
                            data-ga="<?php echo $currentSite->facility->email; ?>"
                            data-top-offset="0"
                            data-target="#w-contact-section"
                            data-auto-close="3000">

                            <i class="flaticon-email"></i>
                            <span><?php echo trans('Scrivici'); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://goo.gl/maps/98iaz5LHP73T95kh8">
                            <i class="flaticon-placeholder"></i>
                            <span><?php echo trans('Dove siamo'); ?></span>
                        </a>
                    </li>
                    <li>
                        <a href="http://webcheckin.villaggiocampingadria.it/?lang=<?php echo locale(); ?>" target="_blank">
                            <i class="flaticon-bell"></i>
                            <span>Check-In</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://goo.gl/maps/98iaz5LHP73T95kh8">
                            <i class="flaticon-placeholder"></i>
                            <span><?php echo $currentSite->facility->address; ?></span>
                        </a>
                    </li>
                </ul>

                <ul class="social-menu">
                    <li class="social-menu__item text-facebook gradient">
                        <a href="https://www.facebook.com/CampingVillageAdria" target="_blank"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
                    </li>
                    <li class="social-menu__item text-instagram gradient">
                        <a href="https://www.instagram.com/campingadria/" target="_blank"><i class="fab fa-instagram"></i> <span>Instagram</span></a>
                    </li>
                </ul>

                <ul class="lang">
                    <li class="selected">
                        <a href="<?php echo url(locale()); ?>">
                            <i class="flag-icon flag-icon-<?php echo locale(); ?>"></i> &nbsp;
                            <?php echo $site_languages[locale()]; ?></a>
                    </li>

                    <?php foreach ($site_languages as $slug => $name):
                        // skip selected
                        if($slug == locale()){ continue; }
                        ?>
                        <li>
                            <a href="<?php echo url($slug); ?>" class="w-upper">
                                <i class="flag-icon flag-icon-<?php echo $slug; ?>"></i> &nbsp;
                                <?php echo $slug; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </nav>
</header>