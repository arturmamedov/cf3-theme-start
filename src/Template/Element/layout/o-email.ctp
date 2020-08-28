
<section id="the_form" class="contact-section qua_section qua_image_bck qua_fixed"
    data-stellar-background-ratio="0.2"
    data-image="https://insuperadmin.buonsito.net/assets/media/tenant_26/contact-bg.jpg"
>
    <!-- Over -->
    <!-- <div class="qua_over" data-color="#292929" data-0="opacity:0;" data--400-bottom="opacity:0.8;"></div> -->

    <div class="container">
        <h2><?php echo trans('Richiedi un preventivo'); ?></h2>

        <div class="row">


            <div class="form-group">
                <div class="row contact-form__container">
                    <div class="col-lg-4 contact-form__column">
                        <div class="contact-form__input-wrapper">
                            <div class="contact-form__input-wrapper-header">
                                <h5><?php echo trans('I tuoi dati'); ?></h5>
                            </div>

                            <div class="form-col form-col--name">
                                <div class="book_item">
                                    <label for="contact-form-name"><?php echo trans('Nome'); ?> *</label>
                                    <div class="input-container">
                                        <i class="fas fa-user icon"></i>
                                        <input id="contact-form-name" name="first_name" type="text" data-w-email="first_name" placeholder="<?php echo trans('Nome'); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-col form-col--surname">
                                <div class="book_item">
                                    <label for="contact-form-surname"><?php echo trans('Cognome'); ?></label>
                                    <div class="input-container">
                                        <i class="far fa-user icon"></i>
                                        <input id="contact-form-surname" name="last_name" type="text" data-w-email="last_name" placeholder="<?php echo trans('Cognome'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-col form-col--phone">
                                <div class="book_item">
                                    <label for="contact-form-phone"><?php echo trans('Telefono'); ?></label>
                                    <div class="input-container">
                                        <i class="fas fa-phone icon"></i>
                                        <input id="contact-form-phone" name="_form[extra][telephone]" type="text" data-w-email="telephone" placeholder="<?php echo trans('Telefono'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-col form-col--email">
                                <div class="book_item">
                                    <label for="contact-form-email">Email *</label>
                                    <div class="input-container">
                                        <i class="fas fa-envelope icon"></i>
                                        <input id="contact-form-email" name="email" required
                                            type="email" data-w-email="email" placeholder="email@email.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 contact-form__column period">
                        <div class="contact-form__input-wrapper">
                            <div class="contact-form__input-wrapper-header">
                                <h5>Il tuo soggiorno</h5>
                            </div>

                            <div class="form-col form-col--arrive">
                                <div class="book_item">
                                    <label for="contact-form-arrive"><?php echo trans('Arrivo'); ?> *</label>
                                    <div class="input-container">
                                        <i class="far fa-calendar-check icon"></i>
                                        <input class="range checkin" id="contact-form-arrive" name="checkin" type="text" data-w-email="checkin" placeholder="<?php echo trans('Arrivo'); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-col form-col--departure">
                                <div class="book_item">
                                    <label for="contact-form-arrive"><?php echo trans('Partenza'); ?> *</label>
                                    <div class="input-container">
                                        <i class="far fa-calendar-times icon"></i>
                                        <input class="range checkout" id="contact-form-departure" name="checkout" type="text"  data-w-email="checkout" placeholder="<?php echo trans('Partenza'); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-col form-col--adults">
                                <div class="book_item">
                                    <label for="contact-form-adults"><?php echo trans('Adulti'); ?> *</label>
                                    <div class="input-container">
                                        <i class="fas fa-users icon"></i>
                                        <input id="contact-form-adults" max="10" min="1" name="adults" type="number" data-w-email="adults" placeholder="<?php echo trans('Adulti'); ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-col form-col--childs">
                                <div class="book_item">
                                    <label for="contact-form-childs"><?php echo trans('Bambini'); ?></label>
                                    <div class="input-container">
                                        <i class="fas fa-child icon"></i>
                                        <input class="child_num_input" id="contact-form-childs" max="5" min="0" name="children"
                                            type="number" data-w-email="children" placeholder="<?php echo trans('Bambini'); ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-col form-col--child_age display-none" id="child_ageClone">
                                <div class="book_item">
                                    <label for="contact-form-childs"><?php echo trans('Età bambino'); ?> <span class="jq_child_num">1</span></label>
                                    <div class="input-container">
                                        <i class="fas fa-child icon"></i>

                                        <input type="number" placeholder="<?php echo trans('Età'); ?>" class="" name="children_age[]"
                                            data-w-email="children_age[]"
                                            max="17"
                                            min="0"
                                            disabled
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 contact-form__column">
                        <div class="contact-form__input-wrapper">
                            <div class="contact-form__input-wrapper-header">
                                <h5><?php echo trans('Trattamento e richieste'); ?></h5>
                            </div>

                            <div class="form-col form-col--reservation-type">
                                <div class="book_item">
                                    <label for="contact-form-type"><?php echo trans('Sistemazione'); ?></label>

                                    <!--<div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background: #218d96; border: none; border-radius: 0; color: white;">
                                                <i class="fas fa-bed"></i>
                                            </span>
                                        </div>-->

                                    <select class="form-control" id="contact-form-type" name="room">
                                        <option><?php echo trans('Scegli l\'opzione'); ?>...</option>
                                        <option><?php echo trans('Camera singola'); ?></option>
                                        <option><?php echo trans('Camera doppia'); ?></option>
                                        <option><?php echo trans('Camera matrimoniale'); ?></option>
                                        <option><?php echo trans('Matrimoniale'); ?> + 1 <?php echo trans('letto'); ?></option>
                                        <option><?php echo trans('Matrimoniale'); ?> + 2 <?php echo trans('letti'); ?></option>
                                        <option><?php echo trans('Matrimoniale'); ?> + 3 <?php echo trans('letti'); ?></option>
                                    </select>
                                    <!--</div>-->
                                </div>
                            </div>

                            <div class="form-col form-col--reservation-type">
                                <div class="book_item">
                                    <label for="contact-form-reservation-type"><?php echo trans('Trattamento'); ?></label>

                                    <!--<div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background: #218d96; border: none; border-radius: 0; color: white;">
                                                <i class="fas fa-umbrella-beach"></i>
                                            </span>
                                        </div>-->

                                    <select class="form-control" id="contact-form-reservation-type" name="accomodation">
                                        <option><?php echo trans('Scegli l\'opzione'); ?>...</option>
                                        <option>All inclusive</option>
                                        <option><?php echo trans('Pensione completa'); ?></option>
                                        <option><?php echo trans('Mezza pensione'); ?></option>
                                        <option>B&amp;B</option>
                                        <option><?php echo trans('Solo pernottamento'); ?></option>
                                    </select>
                                    <!--</div>-->
                                </div>
                            </div>

                            <div class="form-col form-col--msg">
                                <div class="book_item">
                                    <label for="message"><?php echo trans('Messaggio'); ?></label>

                                    <!--<div class="input-group input-group-lg">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background: #218d96; border: none; border-radius: 0; color: white;">
                                                <i class="fas fa-comment-alt"></i>
                                            </span>
                                        </div>-->

                                    <textarea class="form-control" id="message" name="_form[extra][message]" placeholder="<?php echo trans('Messaggio'); ?>" rows="4" data-w-email="message"></textarea>
                                    <!--</div>-->
                                </div>
                            </div>

                            <div class="book_item form-col--privacy">
                                <input class="form-check-input" id="privacy" required type="checkbox" value="">
                                <label class="form-check-label" for="privacy" title="<?php echo trans('I dati non verranno assolutamente ceduti a terzi'); ?>">
                                    <?php echo trans('Acconsento al trattamento dei dati forniti per le finalità indicate dall\'informativa sulla'); ?>

                                    <a href="/privacy-policy" target="_blank">Privacy Policy</a>
                                </label>
                            </div>


                            <div class="form-col form-col--action">
                                <div class="book_item text-center">
                                    <button class="btn btn-white submit" type="submit"><?php echo trans('Richiedi preventivo'); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="w-error alert alert-danger text-center display-none"></div>
                    <div class="w-success alert alert-success text-center display-none"></div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
