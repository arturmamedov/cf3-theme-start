<!-- Bottom Buttons -->
<div class="bottom-buttons horizontal">
    <!-- Anchor to Email form [removed bugged: class="w-target" data-target="#target-block" data-keep-hash="true"]
    <a href="#emailsend" class="w-scroll text-center b-btn b-btn_circle btn-themed-2" data-top-offset="140">
        <i class="fa fa-envelope-o fa-2x text-white-a"></i>
    </a>
    -->
    <a href="#w-contact-section"
        class="w-scroll w-target b-btn b-btn_circle text-center d-block w-email-ga"
        data-ga="<?php echo $currentSite->facility->email; ?>"
        data-top-offset="80"
        data-target="#w-contact-section"
        data-auto-close="3000"
        style="padding: 15px 0; color:white; opacity: 1 !important;"
            title="<?php echo trans('Contattaci ora').' - '.$currentSite->facility->email; ?>!"
    >
        <i class="far fa-envelope fa-2x text-gmail gradient"></i>
    </a>

    <!-- Go2Top {css: .go2top, js: LayoutGo2Top} -->
    <div class="go2top hidden-xs text-center b-btn">
        <i class="fa fas fa-chevron-up"></i>
        <p class="hidden-sm m-0">Torna su</p>
    </div>
</div>

<?php /*$this->append('footScript');
    <style>
        #fb-root {

        }
    </style>

    <!-- Load Facebook SDK for JavaScript -->
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/it_IT/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
            attribution=setup_tool
            page_id="324491655684"
            greeting_dialog_display="hide"
            greeting_dialog_delay="5"
            theme_color="#0084ff"
            size="standard"
            logged_in_greeting="Ciao! Desideri ricevere più informazioni?"
            logged_out_greeting="Ciao! Desideri ricevere più informazioni?">
    </div>
$this->end();*/ ?>
