<?php // # Page Name are set in every Controller action ?>
<?php //echo $page_name; ?>

<?php
// # for Create BreadCrumbs use CakePHP - https://book.cakephp.org/3/en/views/helpers/breadcrumbs.html

//// add home as the first element
//if (empty($this->Breadcrumbs->getCrumbs())) {
//    $this->Breadcrumbs->add('Home', $this->Translate->url(''));
//} else {
//    $this->Breadcrumbs->insertAt(0, 'Home', $this->Translate->url(''));
//}
//// configure template
//$this->Breadcrumbs->templates([
//    'wrapper' => '<div class="breadcrumbs" {{attrs}}>{{content}}</div>',
//    'item' => '<a {{attrs}} href="{{url}}" {{innerAttrs}}>{{title}}</a>{{separator}}',
//    'itemWithoutLink' => '<span {{attrs}} {{innerAttrs}}>{{title}}</span>{{separator}}',
//    'separator' => '{{separator}}'
//]);
//// render breadcrumbs
//echo $this->Breadcrumbs->render(
//    [ 'class' => '' ],
//    [ 'separator' => '' ]
//);
?>

<?php // And after all u have background image and it position ?>
<?php //echo $bpicture; ?>
<?php //echo $bposition; ?>


<?php
// Decide and set appropriate header background image
if (isset($page) && ( ! empty($page->header_background) || ! empty($page->picture))) {
    // Page
    $bpicture = ($page->header_background) ?: $page->picture;
    $bposition = extra($page, 'header_background_position', 'center');
} elseif (isset($post) && ( ! empty($post->header_background) || ! empty($post->picture))) {
    // Post
    $bpicture = ($post->header_background) ?: $post->picture;
    $bposition = extra($post, 'header_background_position', 'center');
} elseif (isset($tip) && ( ! empty($tip->header_background) || ! empty($tip->picture))) {
    // News/Tip/Event (view)
    $bpicture = ($tip->header_background) ?: $tip->picture;
    $bposition = extra($tip, 'header_background_position', 'center');
} elseif (isset($offer) && ( ! empty($offer->header_background) || ! empty($offer->picture))) {
    // Offer (view)
    $bpicture = ($offer->header_background) ?: $offer->picture;
    $bposition = extra($offer, 'header_background_position', 'center');
} elseif (isset($tips) && ( ! empty($tips->header_background) || ! empty($tips->picture))) {
    // News/Tips/Eventi
    $bpicture = ($tips->header_background) ?: $tips->picture;
    $bposition = extra($tips, 'header_background_position', 'center');
} elseif (isset($offers) && ( ! empty($offers->header_background) || ! empty($offers->picture))) {
    // Offers
    $bpicture = ($offers->header_background) ?: $offers->picture;
    $bposition = extra($offers, 'header_background_position', 'center');
} elseif (isset($post_category) && ( ! empty($post_category->header_background) || ! empty($post_category->picture))) {
    // Posts
    $bpicture = ($post_category->header_background) ?: $post_category->picture;
    $bposition = extra($post_category, 'header_background_position', 'center');
} else {
    $bpicture = config('assets.default_header_background');
    $bposition = config('assets.default_header_position');
}
//$background = ($bpicture) ? "background-image: url('{$bpicture}');" : ''; no cause here we have a javascript that do it for us
//$background .= isset($bposition) ? "background-position: {$bposition};" : '';
?>

<section class="pager-sec" style="background-image: url('<?php echo $bpicture; ?>'); background-position: <?php echo $bposition; ?>">
    <div class="container">
        <div class="pager-sec-details">
            <h1><?php echo $page_name; ?></h1>

            <ul class="text-light">
                <?php
                // add home as the first element
                if (empty($this->Breadcrumbs->getCrumbs())) {
                    $this->Breadcrumbs->add('Home', url(''));
                } else {
                    $this->Breadcrumbs->insertAt(0, 'Home', url(''));
                }

                // configure template
                $this->Breadcrumbs->templates([
                    'wrapper' => '<li class="breadcrumbs" {{attrs}}>{{content}}</li>',
                    'item' => '<a {{attrs}} href="{{url}}" {{innerAttrs}}>{{title}}</a>{{separator}}',
                    'itemWithoutLink' => '<span {{attrs}} {{innerAttrs}}>{{title}}</span>{{separator}}',
                    'separator' => '{{separator}}'
                ]);

                // render breadcrumbs
                echo $this->Breadcrumbs->render(
                    [ 'class' => '' ],
                    [ 'separator' => ' / ' ]
                );
                ?>
            </ul>
        </div>
    </div>
</section>

<?php echo $this->element('home/booking'); ?>