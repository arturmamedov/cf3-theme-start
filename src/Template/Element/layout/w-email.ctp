<?php
/*<form class="w-email children_age_form w-cookie-form contact-form"
        action="<?php echo SUBFOLDER_PREFIX; ?>/js/w-email/helpers/form_request.php"
        data-w-form-type="serialize"
        data-ga-send-pageview="/email-form-contatti"
>
<input name="lang_code" type="hidden" value="<?php echo $lang_code; ?>" data-w-email="lang_code">
<input name="_form[extra][utm_referral]" id="utm_referral-input" type="hidden" value="" data-w-email="utm_referral">*/
?>


<section id="w-contact-section" class="c-block msg-sec">
    <div class="container">
        <div class="sec-title">
            <h3><?php echo trans('Contattaci per un preventivo'); ?></h3>
        </div>

        <div class="post-comment">
            <form id="w-email"
                class="w-email children_age_form w-cookie-form px-40"
                action="<?php echo SUBFOLDER_PREFIX; ?>/w/email"
            >
            <!--action="<?php /*echo SUBFOLDER_PREFIX; */?>/js/w-email/helpers/form_request.php"-->

                <input name="lang_code" type="hidden" value="<?php echo locale(); ?>" data-w-email="lang_code">
                <input name="_form[extra][utm_referral]" id="utm_referral-input" type="hidden" value="" data-w-email="utm_referral">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-field">
                            <label for="name"><?php echo trans('Nome'); ?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" name="first_name" placeholder="<?php echo trans('Scrivi il tuo nome'); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-field">
                            <label for="surname"><?php echo trans('Cognome'); ?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>

                                <input type="text" class="form-control" name="last_name" placeholder="<?php echo trans('il tuo cognome'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-field">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>

                                <input type="email" class="form-control" name="email" placeholder="<?php echo trans('latua'); ?>@email.com" required>
                            </div>
                        </div>
                        <div class="_the_email_confirm_group">
                            <div class="form-group">
                                <label class="upper" for="name">Email confirm</label>
                                <input type="text" class="_the_email_confirm_" name="_the_email_confirm_" value="confirmed" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-field">
                            <label for="phone"><?php echo trans('Telefono'); ?></label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                                <input type="tel" class="form-control" name="_form[extra][telephone]" placeholder="<?php echo trans('Il tuo telefono'); ?> [<?php echo trans('opzionale'); ?>]">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 period">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-field">
                                    <label for="checkin"><?php echo trans('Arrivo'); ?> &nbsp; (<?php echo trans('gg/mm/anno'); ?>)</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar-check"></i></span>
                                        </div>
                                        <input type="text" class="form-control first range checkin" name="checkin" placeholder="<?php echo trans('data di arrivo'); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-field">
                                    <label for="checkout"><?php echo trans('Partenza'); ?> &nbsp; (<?php echo trans('gg/mm/anno'); ?>)</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-calendar-times"></i></span>
                                        </div>
                                        <input type="text" class="form-control range checkout" name="checkout" placeholder="<?php echo trans('data di partenza'); ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="form-field">
                            <label for="adults"><?php echo trans('Adulti'); ?> (11-64 <?php echo trans('anni'); ?>)</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-users"></i></span>
                                </div>

                                <input type="number" class="form-control p-10 period-after-range" name="adults" placeholder="<?php echo trans('persone da'); ?> 11-64 <?php echo trans('anni'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="form-field">
                            <label for="children"><?php echo trans('Bambini'); ?> (0-10 <?php echo trans('anni'); ?>)</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-child"></i></span>
                                </div>

                                <input type="number" class="form-control p-10 child_num_input" name="children" min="0" max="7"  placeholder="<?php echo trans('bambini'); ?> 0-10 <?php echo trans('anni'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="form-field">
                            <label for="children">Over (65+ <?php echo trans('anni'); ?>)</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                </div>

                                <input type="number" class="form-control p-10" name="_form[extra][over_65]" placeholder="<?php echo trans('persone da'); ?> 65+ <?php echo trans('anni'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="form-field">
                            <label for="type_id"><?php echo trans('Tipo di alloggio'); ?></label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-hotel"></i></span>
                                </div>

                                <select name="type_id" class="form-control" required>
                                    <option value="" class="placeholder" disabled selected><?php echo trans('Scegli tra'); ?> <?php echo trans('Alloggi'); ?>, <?php echo trans('Piazzole'); ?>, <?php echo trans('Camere'); ?></option>

                                    <option value="1"><?php echo trans('Alloggi'); ?></option>
                                    <option value="2"><?php echo trans('Piazzole'); ?></option>
                                    <option value="3"><?php echo trans('Camere'); ?> (Hotel)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12"></div>

                    <div class="col-lg-2 col-md-2 col-sm-2 display-none" id="child_ageClone">
                        <div class="form-field">
                            <label for="children_age1"><?php echo trans('Età bambino'); ?> <span class="jq_child_num">1</span></label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-child"></i></span>
                                </div>

                                <input type="number" placeholder="0-10" class="form-control p-10"
                                        name="children_age[]"
                                        data-w-email="children_age[]"
                                        max="10"
                                        min="0"
                                        disabled
                                />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-field">
                            <label><?php echo trans('Messaggio'); ?></label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-comment-alt"></i></span>
                                </div>

                                <textarea class="form-control" name="_form[extra][message]" placeholder="<?php echo trans('Aggiungi qualche dettaglio sul tuo soggiorno'); ?>" min="10"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="privacy" required>
                            <label class="form-check-label" for="privacy">
                                <?php echo trans('Acconsento al trattamento dei dati forniti per le finalità indicate dall\'informativa sulla'); ?> &nbsp;
                                <a href="<?php echo url('_privacy'); ?>" target="_blank" title="<?php echo trans('I dati personali come nome, email, telefono etc. non verranno ceduti a terzi'); ?>">Privacy Policy</a>
                            </label>
                        </div>
                    </div>

                    <div class="col-12 mt-20">
                        <div class="form-submit text-center">
                            <button type="submit" class="lnk-default"><?php echo trans('Richiedi preventivo'); ?> <i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>

                    <div class="col-12 mt-10">
                        <div class="w-error alert alert-danger text-center display-none"></div>
                        <div class="w-success alert alert-success text-center display-none"></div>
                    </div>
                </div>
            </form>
        </div>
        <!--post-comment end-->
    </div>
</section>