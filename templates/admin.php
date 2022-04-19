<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php
if (isset($_SERVER['REQUEST_URI'])) {
    $S_URI = sanitize_text_field($_SERVER['REQUEST_URI']);
    if(get_option('SCCBPP_cookie_consent_url')!=''){
        $D_URL = get_option('SCCBPP_cookie_consent_url');
    }else{
        $D_URL = get_site_url();
    }
    if(get_option('SCCBPP_cookie_consent_email')!=''){
        $admin_Email = get_option('SCCBPP_cookie_consent_email');
    }else{
        $admin_Email = get_option('admin_email');
    }
}
?>
<?php 
$userplan = get_option('SCCBPP_cookie_consent_userplan');
?>
<!--tabs-->
<style>
.seers-flex-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 5px 0px 15px 0px;
}

.seers-flex-item-1 {
    flex-grow: 1;
}

.seers-flex-item-2 {
    flex-grow: 2;
}

.seers-checkbox-terms {
    display: flex;
    flex-direction: column;
}

.seers-activate-button {
    display: flex;
    flex-direction: column;
}

.seers-select-btn.active {
    background-color: #6CC04A;
    border: 0px solid !important;
    color: white !important;
}

#setting_message_success {
    color: green !important;
    margin-top: 0px;
    /*font-size:18px;*/
}

#setting_message_error {
    color: red !important;
    margin-top: 0px;
    /*font-size:18px;*/
}

#policy_message_success {
    color: green !important;
    /*font-size:18px;*/
}

#policy_message_error {
    color: red !important;
    /*font-size:18px;*/
}

</style>

<div class="seers-wordpress-main">

    <div class="pc-tab">
        <input checked="checked" id="tab1" type="radio" name="pct" />
        <input id="tab2" type="radio" name="pct" />
        <input id="tab3" type="radio" name="pct" />
        <input id="tab4" type="radio" name="pct" />
        <nav>
            <ul class="tab-ul">
                <li class="tab1">
                    <label for="tab1"><?php esc_html_e('Account Setup', $this->textdomain);?></label>
                </li>
                <?php //by Shoaib commenting this if because this section is also visible for free user
//if (get_option('SCCBPP_cookie_consent_id') !='') {?>
                <li class="tab2">
                    <label for="tab2"><?php esc_html_e('Settings', $this->textdomain);?></label>
                </li>
                <li class="tab3">
                    <label for="tab3"><?php esc_html_e('Policy', $this->textdomain);?></label>
                </li>
                <?php //} ?>
                <li class="tab4">
                    <label for="tab4"><?php esc_html_e('User Guide', $this->textdomain);?></label>
                </li>

            </ul>
        </nav>
        <section>
            <div class="tab1">
                <div class="seers-wordpress-plugin-hol">
                    <div class="seers-plugin-main-cont">
                        <div class="seers-content-col tile-style">
                            <form method="post" id="wp_plugin"
                                action="<?php echo esc_url(str_replace('%7E', '~', $S_URI)); ?>">
                                <fieldset>
                                    <?php if (get_option('SCCBPP_cookie_consent_id') !='') {?>
                                    <div style="color:#0C9A9A;  font-family: Arial; font-size: 12px;">
                                        <?php echo __('Your Seers Cookie Consent banner is activated.',$this->textdomain); ?><?php esc_html_e('Your Seers Cookie Consent banner is activated.', $this->textdomain); ?>
                                    </div>
                                    <?php } else if (get_option('SCCBPP_cookie_consent_msg')) {?>
                                    <div style="color:#f00; font-family: Arial; font-size: 12px;">
                                        <?php echo __('Your Seers Cookie Consent Banner is NOT activated because',$this->textdomain); ?> <?php if(get_option('SCCBPP_cookie_consent_msg')){
                                                esc_html_e(get_option('SCCBPP_cookie_consent_msg'));
                                            }?> </div>
                                    <?php } ?>
                                    <h1>Seers Cookie Consent Solution</h1>
                                    <label for="SCCBPP_cookie_consent_url"><span>URL</span>
                                        <input type="text" id="SCCBPP_cookie_consent_url"
                                            name="SCCBPP_cookie_consent_url" class="input-field"
                                            value="<?php esc_html_e($D_URL);  ?>" readonly>
                                    </label>
                                    <label
                                        for="SCCBPP_cookie_consent_email"><span><?php echo __('Email',$this->textdomain); ?></span>
                                        <input type="text" id="SCCBPP_cookie_consent_email"
                                            name="SCCBPP_cookie_consent_email" class="input-field"
                                            value="<?php esc_html_e($admin_Email); ?>">
                                    </label>
                                    <div class="seers-flex-container">
                                        <?php if (get_option('SCCBPP_cookie_consent_id') !='') {?>
                                        <div class="seers-checkbox-terms">
                                            <div class="seers-checkbox">
                                                <input type="checkbox" name="seers_term_condition"
                                                    id="seers_term_condition" value="terms" class="number" checked>
                                                <?php esc_html_e('I agree Seers',$this->textdomain); ?>
                                                <a href="https://seersco.com/terms-and-conditions.html" target="_blank"><?php echo __('Terms & Condition',$this->textdomain);?>
                                                </a>
                                                <?php echo __('and',$this->textdomain);?> <a
                                                    href="https://seersco.com/privacy-policy.html" target="_blank"><?php echo __('Privacy Policy',$this->textdomain); ?></a>,
                                            </div>
                                            <div class="seers-checkbox">
                                                <input type="checkbox" name="seers_term_condition_url"
                                                    id="seers_term_condition_url" value="sterms" class="number" checked>
                                                <?php esc_html_e('I agree Seers to use my email and url to create an account and power the cookie banner.',$this->textdomain); ?>
                                            </div>
                                        </div>
                                        <?php }else{?>
                                        <div class="seers-checkbox-terms">
                                            <div class="seers-checkbox">
                                                <input type="checkbox" name="seers_term_condition"
                                                    id="seers_term_condition" value="terms" class="number">
                                                <?php esc_html_e('I agree Seers',$this->textdomain); ?>
                                                <a href="https://seersco.com/terms-and-conditions.html" target="_blank"><?php esc_html_e('Terms & Condition',$this->textdomain);?>
                                                </a>
                                                <?php esc_html_e('and',$this->textdomain);?>
                                                <a
                                                    href="https://seersco.com/privacy-policy.html" target="_blank"><?php esc_html_e('Privacy Policy',$this->textdomain); ?></a>,
                                            </div>
                                            <div class="seers-checkbox">
                                                <input type="checkbox" name="seers_term_condition_url"
                                                    id="seers_term_condition_url" value="sterms" class="number">
                                                <?php esc_html_e('I agree Seers to use my email and url to create an account and power the cookie banner.',$this->textdomain); ?>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="seers-activate-button"><input type="submit" name="SCCBPP_cookieid"
                                                id="SCCBPP_cookieid" disabled
                                                value="<?php esc_html_e('Create Account',$this->textdomain); ?>"
                                                style="clear: both;"></div>
                                    </div>
                                    <label for="SCCBPP_cookie_consent_id"> <span><?php echo __('Cookie ID',$this->textdomain); ?></span>&nbsp;
                                        (<?php echo __('Seers Cookie ID will be received automatically after account creation',$this->textdomain); ?>)
                                        <input type="text" id="SCCBPP_cookie_consent_id" name="SCCBPP_cookie_consent_id"
                                            class="input-field"
                                            value="<?php esc_html_e(get_option('SCCBPP_cookie_consent_id')); ?>"
                                            readonly>
                                    </label>
                                    <input name="SCCBPP_update_setting" type="hidden"
                                        value="<?php esc_html_e(wp_create_nonce('SCCBPP-cookie-consent')); ?>" />


                                </fieldset>
                            </form>
                        </div>
                        <div class="seers-content-col tile-style">
                            <h3 class="title-two">
                                <?php echo __('Powering all your',$this->textdomain); ?> <br>
                                <?php echo __('Privacy &amp; Data Security needs',$this->textdomain); ?> </h3>
                            <p><?php echo __('Gain access to an extensive range of GDPR, PECR, CCPA &amp; ePrivacy compliance tools,', $this->textdomain); ?>
                                <?php echo __('all', $this->textdomain); ?>
                                <br class="br-none"> <?php echo __('designed to take the hassle out of complying with the new data
                                protection regulations.', $this->textdomain); ?>
                            </p>
                            <div class="seers-policies-hol">
                                <ul>
                                    <li><?php echo __('Policies Pack', $this->textdomain); ?></li>
                                    <li><?php echo __('Templates Pack', $this->textdomain); ?></li>
                                    <li><?php echo __('GDPR Staff eTraining', $this->textdomain); ?></li>
                                    <li><?php echo __('Cookie Consent Management', $this->textdomain); ?></li>
                                </ul>
                                <ul>
                                    <li><?php echo __('DPIA', $this->textdomain); ?></li>
                                    <li><?php echo __('GDPR Audit', $this->textdomain); ?></li>
                                    <li><?php echo __('Cyber Secure', $this->textdomain); ?></li>
                                    <li><?php echo __('Subject Request Management', $this->textdomain); ?></li>
                                </ul>
                            </div> <a href="https://seersco.com" target="_blank" class="btn btn-white-bg"><?php echo __('START FREE', $this->textdomain); ?></a>
                        </div>
                    </div>
                    <div class="seers-plugin-sidebar-cont">
                        <div class="seers-content-col tile-style">
                            <h3 class="title-two">
                                <?php echo __('Data Privacy &amp;
                                Compliance. Solved', $this->textdomain); ?></h3>
                            <p><?php echo __('Trust worlds leading privacy and consent management platform to help companies comply
                                with GDPR, PECR, CCPA and ePrivacy', $this->textdomain); ?></p> <a href="https://seersco.com/price-plan"
                                class="btn btn-green-bg"><?php echo __('START PREMIUM TODAY', $this->textdomain); ?></a>
                        </div>
                        <div class="seers-content-col tile-style">
                            <h3 class="title-two"><?php echo __('Seers Premium Plan', $this->textdomain); ?></h3>
                            <ul class="branding">
                                <li class="text-white"><?php echo __('Branding', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('Multi Lingual', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('Consent Log', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('Cookie Policy', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('Prior Consent', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('6+ Design Layouts', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('Customer Support', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('Banner Customisation', $this->textdomain); ?></li>
                                <li class="text-white"><?php echo __('Cookie Declaration Table', $this->textdomain); ?></li>
                            </ul> <a href="https://seersco.com/price-plan" class="btn btn-green-bg"><?php echo __('START PREMIUM
                                TODAY', $this->textdomain); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Banner Setting tab-->
            <div class="tab2">

                <div class="seers-wordpress-plugin-hol seers-tabs-content seers-banner-setting">


                    <form name="banner_setting" id="banner_setting" method="post">
                        <!-- BannerSettings-->
                        <h1><?php echo __('Banner Settings', $this->textdomain); ?></h1>
                        <div class="section-setting">
                            <!------------------------------------------------------->
                            <!--Banner:-->
                            <div class="seers-panel seers-mb-30">
                                <div class="seers-pl" style="display:flex; align-items:center;"><label class="seers-label" style="margin:0;"><?php echo __('Banner', $this->textdomain); ?>: &nbsp;</label><span title="<?php echo __('Enable/disable Cookie banner', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></div>
                                <div class="seers-pr">
                                    <label class="toggle">
                                        <?php if(get_option('SCCBPP_cookie_consent_is_active') == true || get_option('SCCBPP_cookie_consent_is_active') == ''){?>
                                        <input class="toggle-checkbox" type="checkbox" name="banner_check"
                                            id="banner_check" checked>
                                        <?php }else{ ?>
                                        <input class="toggle-checkbox" type="checkbox" name="banner_check"
                                            id="banner_check">
                                        <?php } ?>
                                        <div class="toggle-switch"></div>
                                    </label>
                                </div>
                            </div>
                            <!--Banner End-->
                            <!------------------------------------------------------->
                            <!--Cookies Expiry:-->
                            <div class="seers-panel seers-mb-30">

                            <div class="seers-pl" style="display:flex; align-items:center;"><label class="seers-label" style="margin:0;"><?php echo __('Cookie Expiry', $this->textdomain); ?>: &nbsp;</label><span title="<?php echo __('Set your consent cookie to expire in days.', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></div>
                                <div class="seers-pr">
                                    <input style="width: 24%;" class="seers-input" min="1" type="number"
                                        name="cookies_expiry" id="cookies_expiry"
                                        value="<?php if(get_option('SCCBPP_cookie_consent_cookies_expiry')!='') { esc_html_e(get_option('SCCBPP_cookie_consent_cookies_expiry')); }else{ echo "30"; } ?>">

                                </div>
                            </div>
                            <!--Cookies Expiry End-->
                            <!------------------------------------------------------->
                            <!--Language:-->
                            <div class="seers-panel seers-mb-30">
                                <div class="seers-pl" style="display:flex; align-items:center;"><label class="seers-label" style="margin:0;" ><?php echo __('Language', $this->textdomain); ?>: &nbsp;</label><span title="<?php echo __('Choose a language for the banner Settings > General.', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></div>
                                <div class="seers-pr">
                                    <input type="hidden" id="cookies_lang" name="cookies_lang" value="<?php echo get_user_locale();?>" />
                                        
                                            
                                            <?php if (get_locale()=='en') { ?>
                                            <div data-value="en" lang="en"
                                                data-continue="Continue" data-installed="1">English (United States)</div>
                                            <?php } else if (get_locale()=='ar') { ?>
                                                <div data-value="ar" lang="ar"
                                                data-continue="المتابعة">العربية</div>
                                            <?php } else if (get_locale()=='ary') { ?>
                                                <div data-value="ary" lang="ar"
                                                data-continue="المتابعة">العربية المغربية</div>
                                            <?php } else if (get_locale()=='bg_BG') { ?>
                                                <div data-value="bg_BG" lang="bg"
                                                data-continue="Напред">Български</div>
                                            <?php } else if (get_locale()=='cs_CZ') { ?>
                                                <div data-value="cs_CZ" lang="cs"
                                                data-continue="Pokračovat">Čeština</div>
                                            <?php } else if (get_locale()=='da_DK') { ?>
                                                <div data-value="da_DK" lang="da"
                                                data-continue="Fortsæt">Dansk</div>
                                            <?php } else if (get_locale()=='de_DE_formal') { ?>
                                                <div data-value="de_DE_formal" lang="de"
                                                data-continue="Weiter">Deutsch (Sie)</div>
                                            <?php } else if (get_locale()=='de_CH') { ?>
                                                <div data-value="de_CH" lang="de"
                                                data-continue="Weiter">Deutsch (Schweiz)</div>
                                            <?php } else if (get_locale()=='de_CH_informal') { ?>
                                                <div data-value="de_CH_informal" lang="de"
                                                data-continue="Weiter">Deutsch (Schweiz, Du)</div>
                                            <?php } else if (get_locale()=='de_DE') { ?>
                                                <div data-value="de_DE" lang="de"
                                                data-continue="Weiter">Deutsch</div>
                                            <?php } else if (get_locale()=='de_AT') { ?>
                                                <div data-value="de_AT" lang="de"
                                                data-continue="Weiter">Deutsch (Österreich)</div>
                                            <?php } else if (get_locale()=='el') { ?>
                                                <div data-value="el" lang="el"
                                                data-continue="Συνέχεια">Ελληνικά</div>
                                            <?php } else if (get_locale()=='en_CA') { ?>
                                                <div data-value="en_CA" lang="en"
                                                data-continue="Continue">English (Canada)</div>
                                            <?php } else if (get_locale()=='en_ZA') { ?>
                                                <div data-value="en_ZA" lang="en"
                                                data-continue="Continue">English (South Africa)</div>
                                            <?php } else if (get_locale()=='en_AU') { ?>
                                                <div data-value="en_AU" lang="en"
                                                data-continue="Continue">English (Australia)</div>
                                            <?php } else if (get_locale()=='en_NZ') { ?>
                                                <div data-value="en_NZ" lang="en"
                                                data-continue="Continue">English (New Zealand)</div>
                                            <?php } else if (get_locale()=='en_GB') { ?>
                                                <div data-value="en_GB" lang="en"
                                                data-continue="Continue">English (UK)</div>
                                            <?php } else if (get_locale()=='en_GB') { ?>
                                                <div data-value="es_PE" lang="es"
                                                data-continue="Continuar">Español de Perú</div>
                                            <?php } else if (get_locale()=='es_PE') { ?>
                                                <div data-value="es_PE" lang="es"
                                                data-continue="Continuar">Español de Perú</div>
                                            <?php } else if (get_locale()=='es_ES') { ?>
                                                <div data-value="es_ES" lang="es"
                                                data-continue="Continuar">Español</div>
                                            <?php } else if (get_locale()=='es_MX') { ?>
                                                <div data-value="es_MX" lang="es"
                                                data-continue="Continuar">Español de México</div>
                                            <?php } else if (get_locale()=='es_CL') { ?>
                                                <div data-value="es_CL" lang="es"
                                                data-continue="Continuar">Español de Chile</div>
                                            <?php } else if (get_locale()=='es_CL') { ?>
                                                <div data-value="es_CL" lang="es"
                                                data-continue="Continuar">Español de Chile</div>
                                            <?php } else if (get_locale()=='es_CO') { ?>
                                                <div data-value="es_CO" lang="es"
                                                data-continue="Continuar">Español de Colombia</div>
                                            <?php } else if (get_locale()=='es_PR') { ?>
                                                <div data-value="es_PR" lang="es"
                                                data-continue="Continuar">Español de Puerto Rico</div>
                                            <?php } else if (get_locale()=='es_UY') { ?>
                                                <div data-value="es_UY" lang="es"
                                                data-continue="Continuar">Español de Uruguay</div>
                                            <?php } else if (get_locale()=='es_GT') { ?>
                                                <div data-value="es_GT" lang="es"
                                                     data-continue="Continuar">Español de Guatemala</div>>
                                            <?php } else if (get_locale()=='es_AR') { ?>
                                                <div data-value="es_AR" lang="es"
                                                data-continue="Continuar">Español de Argentina</div>
                                            <?php } else if (get_locale()=='es_VE') { ?>
                                                <div data-value="es_VE" lang="es"
                                                data-continue="Continuar">Español de Venezuela</div>
                                            <?php } else if (get_locale()=='es_CR') { ?>
                                                <div data-value="es_CR" lang="es"
                                                data-continue="Continuar">Español de Costa Rica</div>
                                            <?php } else if (get_locale()=='et') { ?>
                                                <div data-value="et" lang="et"
                                                data-continue="Jätka">Eesti</div>
                                            <?php } else if (get_locale()=='eu') { ?>
                                                <div data-value="eu" lang="eu"
                                                data-continue="Jarraitu">Euskara</div>
                                            <?php } else if (get_locale()=='ga') { ?>
                                                <div data-value="ga" lang="ga"
                                                data-continue="Jarraitu">Irish</div>
                                            <?php } else if (get_locale()=='fr_BE') { ?>
                                                <div data-value="fr_BE" lang="fr"
                                                data-continue="Continuer">Français de Belgique</div>
                                            <?php } else if (get_locale()=='fr_CA') { ?>
                                                <div data-value="fr_CA" lang="fr"
                                                data-continue="Continuer">Français du Canada</div>
                                            <?php } else if (get_locale()=='fr_FR') { ?>
                                                <div data-value="fr_FR" lang="fr"
                                                data-continue="Continuer">Français</div>
                                            <?php } else if (get_locale()=='gd') { ?>
                                                <div data-value="gd" lang="gd"
                                                data-continue="Lean air adhart">Gàidhlig</div>
                                            <?php } else if (get_locale()=='hr') { ?>
                                                <div data-value="hr" lang="hr"
                                                data-continue="Nastavi">Hrvatski</div>
                                            <?php } else if (get_locale()=='hu_HU') { ?>
                                                <div data-value="hu_HU" lang="hu"
                                                data-continue="Folytatás">Magyar</div>
                                            <?php } else if (get_locale()=='it_IT') { ?>
                                                <div data-value="it_IT" lang="it"
                                                data-continue="Continua">Italiano</div>
                                            <?php } else if (get_locale()=='lv') { ?>
                                                <div data-value="lv" lang="lv"
                                                data-continue="Turpināt">Latviešu valoda</div>
                                            <?php } else if (get_locale()=='pl_PL') { ?>
                                                <div data-value="pl_PL" lang="pl"
                                                data-continue="Kontynuuj">Polski</div>
                                            <?php } else if (get_locale()=='pt_AO') { ?>
                                                <div data-value="pt_AO" lang="pt"
                                                data-continue="Continuar">Português de Angola</div>
                                            <?php } else if (get_locale()=='pt_BR') { ?>
                                                <div data-value="pt_BR" lang="pt"
                                                data-continue="Continuar">Português do Brasil</div>
                                            <?php } else if (get_locale()=='pt_PT') { ?>
                                                <div data-value="pt_PT" lang="pt"
                                                data-continue="Continuar">Português</div>
                                            <?php } else if (get_locale()=='pt_PT_ao90') { ?>
                                                <div data-value="pt_PT_ao90" lang="pt"
                                                data-continue="Continuar">Português (AO90)</div>
                                            <?php } else if (get_locale()=='ro_RO') { ?>
                                                <div data-value="ro_RO" lang="ro"
                                                data-continue="Continuă">Română</div>
                                            <?php } else if (get_locale()=='sk_SK') { ?>
                                                <div data-value="sk_SK" lang="sk"
                                                data-continue="Pokračovať">Slovenčina</div>
                                            <?php } else if (get_locale()=='sl_SI') { ?>
                                                <div data-value="sl_SI" lang="sl"
                                                data-continue="Nadaljuj">Slovenščina</div>
                                            <?php } else if (get_locale()=='sq') { ?>
                                                <div data-value="sq" lang="sq"
                                                data-continue="Vazhdo">Shqip</div>
                                            <?php } else if (get_locale()=='sv_SE') { ?>
                                                <div data-value="sv_SE" lang="sv"
                                                data-continue="Fortsätt">Svenska</div>
                                            <?php } else if (get_locale()=='tr_TR') { ?>
                                                <div data-value="tr_TR" lang="tr"
                                                data-continue="Devam">Türkçe</div>
                                            <?php } else if (get_locale()=='uk') { ?>
                                                <div data-value="uk" lang="uk"
                                                data-continue="Продовжити">Українська</div>
                                            <?php } else if (get_locale()=='zh_CN') { ?>
                                                <div data-value="zh_CN" lang="zh"
                                                data-continue="继续">简体中文</div>
                                            <?php } else if (get_locale()=='zh_TW') { ?>
                                                <div data-value="zh_TW" lang="zh"
                                                data-continue="繼續">繁體中文</div>
                                            <?php } else if (get_locale()=='zh_HK') { ?>
                                                <div data-value="zh_HK" lang="zh"
                                                data-continue="繼續">香港中文版 </div>
                                            <?php } else { ?>
                                                <div data-value="en" lang="en" selected
                                                data-continue="Continue" data-installed="1">English (United States)</div>
                                            <?php } ?>
                                    
                                </div>
                            </div>
                            <!--Language: End-->
                            <!------------------------------------------------------->
                            <!--Show Badge-->
                            <div class="seers-panel seers-mb-30">
                                <div class="seers-pl" style="display:flex; align-items:center;"><label class="seers-label" style="margin:0;" ><?php echo __('Show Badge', $this->textdomain); ?>: &nbsp;</label><span title="<?php echo __('Show a badge to enable the cookie banner to appear post consent.', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></div>
                                <div class="seers-pr">
                                    <label class="toggle">
                                        <?php if ( (get_option('SCCBPP_cookie_consent_id') !== false || get_option('SCCBPP_cookie_consent_id') !== 'false' || get_option('SCCBPP_cookie_consent_id') != '') && 
                                                ($userplan && !empty($userplan->plan) && !empty($userplan->plan->name) && ( stripos($userplan->plan->name, 'pro') !== false || stripos($userplan->plan->name, 'ultimate') !== false || stripos($userplan->plan->name, 'premium') !== false ) ) ) { ?>
                                        <?php if(get_option('SCCBPP_cookie_consent_show_badge') == 'true' || get_option('SCCBPP_cookie_consent_show_badge') == true){?>
                                        <input class="toggle-checkbox" type="checkbox" name="show_badge" id="show_badge"
                                                checked>
                                        <?php } else { ?>
                                        <input class="toggle-checkbox" type="checkbox" name="show_badge"
                                               id="show_badge">
                                        <?php } ?>
                                        <?php } ?>

                                        <div class="toggle-switch <?php echo (( (empty($userplan) || empty($userplan->plan) || empty($userplan->plan->name) || ( stripos($userplan->plan->name, 'pro') === false && stripos($userplan->plan->name, 'ultimate') === false && stripos($userplan->plan->name, 'premium') === false ) ) ) ? 'seers-paid-feature-opener" name="badge' : ""); ?>"></div>
                                    </label>
                                </div>
                            </div>
                            <!--Show Badge End-->
                        </div>
                        <!-- Banner Settings End-->

                        <!-- Visual Settings-->
                        <h1><?php echo __('Visual Settings', $this->textdomain); ?></h1>
                        <div class="section-setting">
                            <!--Body:-->
                            <div class="seers-panel seers-mb-30">
                                <!-- <div class="seers-pl"><label class="seers-label">Banner Text:</label></div> -->
                                <div class="seers-pl"><label class="seers-label" style="margin:0; display:flex;" ><?php echo __('Banner Text', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('Text to appear on the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label></div>
                                <div class="seers-color-width">
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The text colour to appear on the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                        <input type="color" name="body_color" id="body_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_body_text_color') && get_option('SCCBPP_cookie_consent_body_text_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_body_text_color')); }else{ echo "#000000"; }?>"
                                            class="seers-banner-custom-color">
                                    </div>
                                </div>
                                <div class="seers-pr">
                                    <textarea class="seers-textarea" rows="4" cols="50" name="body_text"
                                        id="body_text"><?php if(get_option('SCCBPP_cookie_consent_body_text') && get_option('SCCBPP_cookie_consent_body_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_body_text')); }else{ esc_html_e( "We use cookies to ensure you get the best experience");} ?></textarea>
                                </div>
                            </div>
                            <!------------------------------------------------------->
                            <!--Logo color:-->
                            <div class="seers-panel seers-mb-30">
                                <!-- <div class="seers-pl"><label class="seers-label">Banner Background</label></div> -->
                                <div class="seers-pl"><label class="seers-label" style="margin:0; display:flex;" ><?php echo __('Banner Background', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('You can change the background colour of the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label></div>
                                <div class="seers-color-width">    
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The background colour of the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                    <!-- <div class="color-pick-hol">
                                        <label class="seers-color-label">Colour:</label> -->
                                        <input type="color" name="banner_bg_color" id="banner_bg_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_banner_bg_color') && get_option('SCCBPP_cookie_consent_banner_bg_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_banner_bg_color')); }else{ echo "#FFFFFF"; }?>"
                                            class="seers-banner-custom-color">
                                    </div>
                                </div>
                            </div>
                            <!--logo color end:-->
                            <!------------------------------------------------------->
                            <!--Accept Button:-->
                            <div class="seers-panel seers-mb-30">
                                <!-- <div class="seers-pl"><label class="seers-label">Accept Button:</label></div> -->
                                <div class="seers-pl"><label class="seers-label" style="margin:0; display:flex;" ><?php echo __('Accept Button', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('You can change text colour, button colour and text of the \'Accept All\' button', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label></div>
                                <div class="seers-color-width">
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Text Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The text colour to appear on the \'Accept All\' button:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                    <!-- <div class="color-pick-hol">
                                        <label class="seers-color-label">Text Colour:</label> -->
                                        <input type="color" name="agree_text_color" id="agree_text_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_agree_text_color') && get_option('SCCBPP_cookie_consent_agree_text_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_agree_text_color')); }else{ echo "#FFFFFF"; }?>"
                                            class="seers-banner-custom-color">
                                    </div>
                                </div>
                                <div class="seers-pr">
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Button Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The \'Accept All\' button colour to appear on the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                    <!-- <div class="color-pick-hol">
                                        <label class="seers-color-label">Button Colour:</label> -->
                                        <input type="color" name="agree_btn_color" id="agree_btn_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_agree_btn_color') && get_option('SCCBPP_cookie_consent_agree_btn_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_agree_btn_color')); }else{ echo "#3B6EF8"; }?>"
                                            class="seers-banner-custom-color">
                                        <input class="seers-input btn-input" type="text" name="accept_btn_text"
                                            id="accept_btn_text" placeholder="<?php echo __('Allow All', $this->textdomain); ?>"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_accept_btn_text') && get_option('SCCBPP_cookie_consent_accept_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_accept_btn_text')); }else{  echo __('Allow All', $this->textdomain); }?>">
                                    </div>
                                    <button class="seers-btn" type="button" id="accept_all"><?php echo __('Allow All', $this->textdomain); ?></button>
                                </div>
                            </div>
                            <!--Accept Button:-->
                            <!------------------------------------------------------->
                            <!--Reject Button::-->
                            <div class="seers-panel seers-mb-30">
                                <!-- <div class="seers-pl"><label class="seers-label">Reject Button:</label></div> -->
                                <div class="seers-pl"><label class="seers-label" style="margin:0; display:flex;" ><?php echo __('Reject Button', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('You can change text colour, button colour and text of the \'Reject All\' button', $this->textdomain);?>" style="font-size:20px;">&#128712;</span></label></div>
                                <div class="seers-color-width">
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Text Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The text colour to appear on the \'Reject All\' button:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                    <!-- <div class="color-pick-hol">
                                        <label class="seers-color-label">Text Colour:</label> -->
                                        <input type="color" name="disagree_text_color" id="disagree_text_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_disagree_text_color') && get_option('SCCBPP_cookie_consent_disagree_text_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_disagree_text_color')); }else{ echo "#FFFFFF"; }?>"
                                            class="seers-banner-custom-color">
                                    </div>
                                </div>
                                <div class="seers-pr">
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Button Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The \'Reject All\' button colour to appear on the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                    <!-- <div class="color-pick-hol">
                                        <label class="seers-color-label">Button Colour:</label> -->
                                        <input type="color" name="disagree_btn_color" id="disagree_btn_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_disagree_btn_color') && get_option('SCCBPP_cookie_consent_disagree_btn_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_disagree_btn_color')); }else{ echo "#3B6EF8"; }?>"
                                            class="seers-banner-custom-color">
                                        <input class="seers-input btn-input" type="text" name="reject_btn_text"
                                            id="reject_btn_text" placeholder="<?php echo __('Disable All', $this->textdomain); ?>"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_reject_btn_text') && get_option('SCCBPP_cookie_consent_reject_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_reject_btn_text')); }else{ echo __('Disable All', $this->textdomain); }?>">
                                    </div>
                                    <button class="seers-btn" type="button" id="reject_all"><?php echo __('Disable All', $this->textdomain); ?></button>
                                </div>
                            </div>
                            <!--Reject Button::-->
                            <!------------------------------------------------------->
                            <!--banner Settings Button:-->
                            <div class="seers-panel seers-mb-30">
                                <!-- <div class="seers-pl"><label class="seers-label">Setting Button:</label></div> -->
                                <div class="seers-pl"><label class="seers-label" style="margin:0; display:flex;" ><?php echo __('Setting Button', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('You can change text colour and text of the \'Setting\' button', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label></div>
                                <div class="seers-color-width">
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Text Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The text colour to appear on the \'Setting\' button:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                    <!-- <div class="color-pick-hol">
                                        <label class="seers-color-label">Text Colour:</label> -->
                                        <input type="color" name="preferences_text_color" id="preferences_text_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_preferences_text_color') && get_option('SCCBPP_cookie_consent_preferences_text_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_preferences_text_color')); }else{ echo "#000000"; }?>"
                                            class="seers-banner-custom-color">
                                    </div>
                                </div>
                                <div class="seers-pr">
                                    <div class="color-pick-hol" style="display: flex; align-items: center;">
                                        <label class="seers-color-label" style="margin:0; display:flex;" ><?php echo __('Button Colour', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('The \'Setting\' button colour to appear on the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label>
                                    <!-- <div class="color-pick-hol">
                                        <label class="seers-color-label">Button Colour:</label> -->
                                        <input type="color" name="setting_btn_color" id="setting_btn_color"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_preferences_btn_color') && get_option('SCCBPP_cookie_consent_preferences_btn_color')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_preferences_btn_color')); }else{ echo "#FFFFFF"; }?>"
                                            class="seers-banner-custom-color">
                                        <input class="seers-input btn-input" type="text" name="setting_btn_text"
                                            id="setting_btn_text" placeholder="Setting"
                                            value="<?php if(get_option('SCCBPP_cookie_consent_setting_btn_text') && get_option('SCCBPP_cookie_consent_setting_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_setting_btn_text')); }else{ echo __("Preference", $this->textdomain); }?>">
                                    </div>
                                    <button class="seers-btn seers-setting-btn" type="button"
                                        id="reject_all"><?php echo __('Setting', $this->textdomain); ?></button>
                                </div>
                            </div>
                            <!--banner Settings End-->
                            <!------------------------------------------------------->
                            <!--Fonts-->
                            <div class="seers-panel seers-mb-30">
                                <!-- <div class="seers-pl"><label class="seers-label">Fonts:</label></div> -->
                                <div class="seers-pl"><label class="seers-label" style="margin:0; display:flex;" ><?php echo __('Fonts', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('You can select a font for the text of the banner:', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label></div>
                                <div class="seers-pr">
                                    <select class="seers-input fm" id="seers_fonts_fm" name="seers_fonts_fm">
                                        <option value="arial"
                                            <?php if (get_option('SCCBPP_cookie_consent_font_style')) { if(get_option('SCCBPP_cookie_consent_font_style')=='arial' || get_option('SCCBPP_cookie_consent_font_style')==''){ echo "selected"; } } else { echo "selected"; } ?>>
                                            Arial</option>
                                        <option value="cursive"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_style')=='cursive'){ echo "selected"; } ?>>
                                            Cursive</option>
                                        <option value="fantasy"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_style')=='fantasy'){ echo "selected"; } ?>>
                                            Fantasy</option>
                                        <option value="monospace"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_style')=='monospace'){ echo "selected"; } ?>>
                                            Monospace</option>
                                        <option value="sans-serif"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_style')=='sans-serif'){ echo "selected"; } ?>>
                                            Sans Serif</option>
                                        <option value="serif"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_style')=='serif'){ echo "selected"; } ?>>
                                            Serif</option>
                                        <option value="none"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_style')=='none'){ echo "selected"; } ?>>
                                            None</option>
                                        <option value="inherit"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_style')=='inherit'){ echo "selected"; } ?>>
                                            Default</option>
                                    </select>
                                    <select class="seers-input fs" id="seers_fonts_fs" name="seers_fonts_fs">
                                        <option value="8"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_size')=='8' || get_option('SCCBPP_cookie_consent_font_size', $this->defaultfontsize)==8){ echo "selected"; } ?>>
                                            8</option>
                                        <option value="10"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_size')=='10' || get_option('SCCBPP_cookie_consent_font_size', $this->defaultfontsize)==10){ echo "selected"; } ?>>
                                            10</option>
                                        <option value="12"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_size')=='12' || get_option('SCCBPP_cookie_consent_font_size', $this->defaultfontsize)==12){ echo "selected"; } ?>>
                                            12</option>
                                        <option value="14"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_size')=='14' || get_option('SCCBPP_cookie_consent_font_size', $this->defaultfontsize)==14){ echo "selected"; } ?>>
                                            14</option>
                                        <option value="16"
                                            <?php if(get_option('SCCBPP_cookie_consent_font_size')=='16' || get_option('SCCBPP_cookie_consent_font_size', $this->defaultfontsize)==16){ echo "selected"; } ?>>
                                            16</option>
                                    </select>
                                </div>
                            </div>
                            <!--Fonts End-->
                            <!------------------------------------------------------->
                            <!--Select Button-->
                            <div class="seers-panel seers-mb-30">
                                <!-- <div class="seers-pl"><label class="seers-label">Select Button:</label></div> -->
                                <div class="seers-pl"><label class="seers-label" style="margin:0; display:flex;" ><?php echo __('Select Button', $this->textdomain); ?>: &nbsp; <span title="<?php echo __('You can select the shape of the buttons that appear on the banner.', $this->textdomain); ?>" style="font-size:20px;">&#128712;</span></label></div>
                                <div class="seers-pr btn-group" role="group">
                                    <button
                                        class="seers-select-btn btn-default <?php if(!get_option('SCCBPP_cookie_consent_button_type') || get_option('SCCBPP_cookie_consent_button_type') == '' || get_option('SCCBPP_cookie_consent_button_type')=='cbtn_default'){ echo "active"; }?><?php echo (( get_option('SCCBPP_cookie_consent_id') === false || get_option('SCCBPP_cookie_consent_id') == '') ? ' seers-paid-feature-opener' : ""); ?>"
                                        type="button" id="cbtn_default" name="btn_style_default"><?php echo __('Default', $this->textdomain); ?></button>
                                    <?php if ( get_option('SCCBPP_cookie_consent_id') === false || get_option('SCCBPP_cookie_consent_id') == '') { ?>
                                    <input type="button"
                                        class="seers-select-btn btn-flat <?php if(get_option('SCCBPP_cookie_consent_button_type')=='cbtn_flat'){ echo "active"; }?> seers-paid-feature-opener"
                                        type="button" name="btn_style_flat" value="<?php echo __('Flat', $this->textdomain); ?>">
                                    <input type="button"
                                        class="seers-select-btn btn-round <?php if(get_option('SCCBPP_cookie_consent_button_type')=='cbtn_rounded'){ echo "active"; }?> seers-paid-feature-opener"
                                        type="button" name="btn_style_rounded" value="<?php echo __('Rounded', $this->textdomain); ?>">
                                    <input type="button"
                                        class="seers-select-btn btn-stroke <?php if(get_option('SCCBPP_cookie_consent_button_type')=='cbtn_stroke'){ echo "active"; }?> seers-paid-feature-opener"
                                        type="button" name="btn_style_stroke" value="<?php echo __('Stroke', $this->textdomain); ?>">
                                    <?php } else { ?>
                                    <button
                                        class="seers-select-btn btn-flat <?php if(get_option('SCCBPP_cookie_consent_button_type')=='cbtn_flat'){ echo "active"; }?>"
                                        type="button" id="cbtn_flat"><?php echo __('Flat', $this->textdomain); ?></button>
                                    <button
                                        class="seers-select-btn btn-round <?php if(get_option('SCCBPP_cookie_consent_button_type')=='cbtn_rounded'){ echo "active"; }?>"
                                        type="button" id="cbtn_rounded"><?php echo __('Rounded', $this->textdomain); ?></button>
                                    <button
                                        class="seers-select-btn btn-stroke <?php if(get_option('SCCBPP_cookie_consent_button_type')=='cbtn_stroke'){ echo "active"; }?>"
                                        type="button" id="cbtn_stroke"><?php echo __('Stroke', $this->textdomain); ?></button>
                                    <?php } ?>

                                </div>
                            </div>
                            <!--Select Button End-->
                            <!------------------------------------------------------->
                            <!--Preview buttons-->

                            <div class="seers-panel seers-mb-30">

                                <div class="seers-pl"></div>
                                <div class="seers-pr ">
                                    <p id="setting_message_success"></p>
                                    <p id="setting_message_error"></p>
                                    <div id="loader"></div>
                                    <div class="seers_btn_div">
                                        <a href="<?php echo $D_URL;  ?>" target="_blank"
                                            class="seers-btn-preview  s-save"><?php echo __('PREVIEW', $this->textdomain); ?></a>
                                        <button class="seers-btn-preview" type="button" id="setting_save"><?php echo __('SAVE', $this->textdomain); ?></button>
                                    </div>


                                </div>
                            </div>
                            <!--Preview buttons End-->
                        </div>
                        <!-- Visual Settings End-->
                    </form>
                </div>
            </div>
            <!--Banner Setting tab End-->

            <!--Policy -->
            <div class="tab3">
                <form name="policy" id="policy" method="post">
                    <div class="seers-wordpress-plugin-hol seers-tabs-content seers-banner-setting">
                        <div class="section-setting policysetting">
                            <p class="seers-notification"><?php echo __('Please create cookies policy page and enter URL below.', $this->textdomain); ?></p>
                            <p id="policy_message_success"></p>
                            <p id="policy_message_error"></p>
                            <div class="seers-panel seers-mb-30">
                                <div class="seers-pl"><label class="seers-label"><?php echo __('Enable Policy:', $this->textdomain); ?></label></div>
                                <div class="seers-pr">
                                    <label class="toggle">
                                        <?php if(get_option('SCCBPP_cookie_consent_enable_policy')=='true' ||  get_option('SCCBPP_cookie_consent_enable_policy')=== true){?>
                                        <input class="toggle-checkbox" type="checkbox" name="enable_policy"
                                            id="enable_policy" checked>
                                        <?php }else{ ?>
                                        <input class="toggle-checkbox" type="checkbox" name="enable_policy"
                                            id="enable_policy">
                                        <?php } ?>

                                        <div class="toggle-switch"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="seers-panel seers-mb-30" id="show-cookie-policy-url">
                                <div class="seers-pp"><label style="margin-top:0px !important;"
                                        class="seers-label"><?php echo __('Cookie Policy and declaration URL:', $this->textdomain); ?></label></div>
                                <div class="seers-pr">
                                    <input style="width:40% !important" class="seers-input" type="text"
                                        name="cookies_url" id="cookies_url" placeholder="<?php echo __('Policy URL', $this->textdomain); ?>"
                                        value="<?php esc_html_e(get_option('SCCBPP_cookie_consent_policy_declaration_url')); ?>">
                                </div>
                            </div>
                            <div class="seers-panel seers-mb-30" id="show-save-button">
                                <div class="seers-pp"><label class="seers-label"></label></div>
                                <div class="seers-pr">
                                    <button class="seers-btn-preview" id="cookie_policy" type="button"><?php echo __('Save', $this->textdomain); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--Policy End-->

            <!--User Guide -->
            <div class="tab4">
                <div class="seers-wordpress-plugin-hol seers-tabs-content seers-banner-setting">
                    <div class="video-main-hol">
                        <div class="videobox">
                            <iframe width="100%" height="271" src="https://youtube.com/embed/_IDgrcHu3jc"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h3>How to <span class="colorblue">activate plugin</span></h3>
                        </div>
                        <div class="videobox">
                            <iframe width="100%" height="271" src="https://www.youtube.com/embed/9yvyAZtHf34"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h3>How to <span class="colorblue">upgrade your package</h3>
                        </div>
                        <div class="videobox">
                            <iframe width="100%" height="271" src="https://youtube.com/embed/c2NpWIVYEhE"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                            <h3>How to <span class="colorblue">change banner settings</h3>
                        </div>


                    </div>
                    <div class="documentation">
                        <p>For more resources you can visit</p>
                        <button style="width: auto !important;" class="seers-btn-preview" type="button"> DOCUMENTATION
                        </button>
                    </div>
                </div>
            </div>
            <!--User Guide End-->
        </section>
    </div>
</div>
<!--tabs end-->
<!--by Shoaib paid popup start-->
<div id="seers-paid-cmp-overlay" class="seers-paid-cmp-overlay"></div>
<div class="seers-cmp-paid-popup-content seers-cmp-paid-popup-no-active" id="seers-cmp-paid-popup-content"> <span class="seers-cmp-paid-popup-close" title="close">×</span>
                <div class="seers-cmp-paid-body-text">
                    <h3 class="seers-cmp-paid-title" id="seers-paid-popup-title">
                    <?php echo __('Premium Plan', $this->textdomain); ?>
                </h3>
                    <div class="seers-cmp-policy-banner-text-large-block">
                        <p class="seers-cmp-paid-text" id="seers-paid-popup-bodytext"> <?php echo __('Only the users with a paid account can avail this feature.', $this->textdomain); ?> </p>
                    </div>
                </div>
                <div class="seers-cmp-paid-popup-footer">
                    <div class="seers-cmp-paid-popup-footer-block"> <a href="#" class="seers-cmp-btn" id="paid-popup-btnok" lang="en" tabindex="0"> 
                            <?php echo __('Ok', $this->textdomain); ?>
                         </a> <a href="#" class="seers-cmp-btn" id="paid-popup-btnaccount" lang="en" tabindex="1"> 
                            <?php echo __('Account Setup', $this->textdomain); ?>
                         </a> </div>
                </div>
            </div>
<!--paid popup end-->

<script type="text/javascript">
(function() {

    if (document.getElementById('enable_policy').checked == false) {
        document.getElementById('show-cookie-policy-url').style.display = "none";
    }
    let numberGroup = document.querySelectorAll(".number");
    numberGroupfunc = function() {
        let pass = false;
        [].map.call(numberGroup, function(elem) {
            if (elem.checked == false) {
                pass = true;
            }
        });
        if (pass) {
            document.getElementById('SCCBPP_cookieid').disabled = true;
        } else {
            document.getElementById('SCCBPP_cookieid').disabled = false;
        }
    };
    [].map.call(numberGroup, function(elem) {
        elem.addEventListener("click", numberGroupfunc, false);
    });

    document.getElementById('enable_policy').addEventListener('change', function() {
        if (document.getElementById('enable_policy').checked == true) {
            document.getElementById('show-cookie-policy-url').style.display = "block";
            document.getElementById('enable_policy').checked = true;
        } else {
            document.getElementById('show-cookie-policy-url').style.display = "none";
            document.getElementById('enable_policy').checked = false;
        }
    });

    document.getElementById('cookie_policy').addEventListener('click', function(e) {
        e.preventDefault();
        var enable_policy = document.getElementById('enable_policy').value;
        var cookies_url = document.getElementById('cookies_url').value;

        if (document.getElementById('enable_policy').checked == true) {
            enable_policy = 'true';
        } else {
            enable_policy = 'false';
        }

        var params = "action=cookies_policy&enable_policy=" + enable_policy + "&cookies_url=" + cookies_url;
        httpRequest = new XMLHttpRequest()
        httpRequest.open('POST', ajaxurl)
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send(params);
        httpRequest.onreadystatechange = function() {
            // Process the server response here.
            if (httpRequest.readyState === XMLHttpRequest.DONE) {
                if (httpRequest.status === 200) {
                    document.getElementById('policy_message_success').innerHTML = httpRequest
                        .responseText;
                } else {
                    document.getElementById('policy_message_error').innerHTML = httpRequest
                        .responseText;
                }
            }
        }
    });


})();

/********** Tabs3 Ajax Response ***************/



/*********** Tabs2 Post Ajax response. **************/
//$('#loader').hide();
document.getElementById('loader').style.display = "none";
// document.getElementById('setting_save.setAttribute("disabled", "true");
document.getElementById("setting_save").addEventListener('click', function(e) {
    e.preventDefault();

    var bannerVal = '';
    var show_badge = '';
    if (document.getElementById('banner_check').checked) {
        bannerVal = 'true';
    } else {
        bannerVal = 'false';
    }
    if (document.getElementById('show_badge') && document.getElementById('show_badge').checked) {
        show_badge = 'true';
    } else {
        show_badge = 'false';
    }
    let selectedBtnVal = document.getElementsByClassName("active");
    if (selectedBtnVal.length > 0) {
        selectedBtnVal = selectedBtnVal[0].getAttribute("id");
    } else {
        selectedBtnVal = null
    }

    var params = "action=cookies_setting&banners=" + bannerVal + "&cookies_expiry=" + document.getElementById(
            'cookies_expiry').value + "&cookies_lang=" + document.getElementById('cookies_lang').value +
        "&show_badge=" + show_badge + "&banner_bg_color=" + document.getElementById('banner_bg_color').value +
        "&body_text_color=" + document.getElementById('body_color').value + "&body_text=" + document.getElementById(
            'body_text').value + "&agree_btn_color=" + document.getElementById('agree_btn_color').value +
        "&agree_text_color=" + document.getElementById('agree_text_color').value + "&accept_btn_text=" +
        document.getElementById('accept_btn_text').value + "&disagree_text_color=" + document.getElementById(
            'disagree_text_color').value + "&disagree_btn_color=" + document.getElementById(
            'disagree_btn_color').value + "&reject_btn_text=" + document.getElementById('reject_btn_text')
        .value + "&preferences_text_color=" + document
        .getElementById('preferences_text_color').value + "&setting_btn_color=" + document
        .getElementById('setting_btn_color').value + "&setting_btn_text=" + document.getElementById(
            'setting_btn_text').value + "&seers_fonts_fm=" + document.getElementById('seers_fonts_fm').value +
        "&seers_fonts_fs=" + document.getElementById('seers_fonts_fs').value + "&selectedBtn=" + selectedBtnVal;
    httpRequest = new XMLHttpRequest()
    httpRequest.open('POST', ajaxurl)
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    httpRequest.send(params);
    // beforeSend:
    document.getElementById('loader').style.display = "block";
    document.getElementById('setting_save').disabled = true;
    httpRequest.onreadystatechange = function() {
        // Process the server response here.
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            // complete:
            document.getElementById('loader').style.display = "none";
            document.getElementById('setting_save').disabled = false;
            let data = JSON.parse(httpRequest.response)
            if (this.readyState == 4 && httpRequest.status === 200) {
            document.getElementById('setting_message_success').innerHTML = data.resp_message;
            document.getElementById('accept_btn_text').value = data.accept_btn_text;
            document.getElementById('reject_btn_text').value = data.reject_btn_text;
            document.getElementById('setting_btn_text').value = data.setting_btn_text;
            document.getElementById('body_text').innerHTML = data.bodyText;
            document.getElementById('setting_save').disabled = false;
            } else {
                document.getElementById('setting_message_error').innerHTML = data.resp_message;
            }
        }
    }
});

/*** Preference Button actions End ***/
let btnGroup = document.querySelectorAll(".btn-group button")
btnGroupfunc = function() {
    [].map.call(btnGroup, function(elem) {
        elem.classList.remove("active")
    });
    this.classList.add("active");
};
[].map.call(btnGroup, function(elem) {
    elem.addEventListener("click", btnGroupfunc, false);
});
</script>

<script>
    // Get the seers-cmp-paid-popup
        var cmpnsentmodal = document.getElementById("seers-cmp-paid-popup-content");
        var cmpnsentmodaloverlay = document.getElementById("seers-paid-cmp-overlay");
        // Get the button that opens the seers-cmp-default-banner
        var seersOpenelements = document.querySelectorAll(".seers-paid-feature-opener");
        // Get the <span> element that seers-cmp-paid-popup-close the seers-cmp-default-banner
        var seersClosespan = document.getElementsByClassName("seers-cmp-paid-popup-close")[0];
        
        var seerspopuptitle = document.getElementById("seers-paid-popup-title");
        var seerspopupbodytext = document.getElementById("seers-paid-popup-bodytext");
        var seerspopupokbtn = document.getElementById("paid-popup-btnok");
        var seerspopupaccbtn = document.getElementById("paid-popup-btnaccount");
        // When the user clicks the element, open the seers-cmp-paid-popup
        showPaidpopup = function(ev) {
            ev.preventDefault();
            e = ev || window.event;
            let target = e.target || e.srcElement, text = target.textContent || target.innerText;
            //console.log(target.name);
            //console.log(target.className);
            
            if (target.name == 'cookies_lang') {
                // now show the language popup
                //seerspopupbodytext.innerText = 'Multilanguage feature is available after account creation';
                seerspopupbodytext.innerText = '<?php echo __('Only the users with a paid account can avail this feature.', $this->textdomain); ?>';
                
                cmpnsentmodal.classList.add("seers-cmp-paid-popup-active");
                cmpnsentmodal.classList.remove("seers-cmp-paid-popup-no-active");
                cmpnsentmodaloverlay.classList.add("seers-cmp-paid-overlay-active");
                
            } else if (typeof target.name == 'undefined') {
                // now show the language popup
                //seerspopupbodytext.innerText = 'Only premium accounts can use the show badge feature';
                seerspopupbodytext.innerText = '<?php echo __('Only the users with a paid account can avail this feature.', $this->textdomain); ?>';
                
                cmpnsentmodal.classList.add("seers-cmp-paid-popup-active");
                cmpnsentmodal.classList.remove("seers-cmp-paid-popup-no-active");
                cmpnsentmodaloverlay.classList.add("seers-cmp-paid-overlay-active");
            } else if (target.name.indexOf("btn_style") > -1) {
                // now show the language popup
                //seerspopupbodytext.innerText = 'Only premium accounts can select different button styles';
                seerspopupbodytext.innerText = '<?php echo __('Only the users with a paid account can avail this feature.', $this->textdomain); ?>';
                
                cmpnsentmodal.classList.add("seers-cmp-paid-popup-active");
                cmpnsentmodal.classList.remove("seers-cmp-paid-popup-no-active");
                cmpnsentmodaloverlay.classList.add("seers-cmp-paid-overlay-active");
                
            }
            
            
            
        };
        console.log(seersOpenelements);
        [].map.call(seersOpenelements, function(elem) {
            elem.addEventListener("click", showPaidpopup, false);
        });
        /*seersOpenbtn.onclick = function () {
                cmpnsentmodal.classList.add("seers-cmp-cookie-banner-active");
                cmpnsentmodal.classList.remove("seers-cmp-cookie-banner-no-active");
                cmpnsentmodaloverlay.classList.add("seers-cmp-overlay-active");
            }*/
            // When the user clicks on <span> (x), seers-cmp-default-banner-close the seers-cmp-default-banner
        seersClosespan.onclick = function () {
            cmpnsentmodal.classList.remove("seers-cmp-paid-popup-active");
            cmpnsentmodal.classList.add("seers-cmp-paid-popup-no-active");
            cmpnsentmodaloverlay.classList.remove("seers-cmp-paid-overlay-active");
        }
        seerspopupokbtn.onclick = function () {
            cmpnsentmodal.classList.remove("seers-cmp-paid-popup-active");
            cmpnsentmodal.classList.add("seers-cmp-paid-popup-no-active");
            cmpnsentmodaloverlay.classList.remove("seers-cmp-paid-overlay-active");
        }
        seerspopupaccbtn.onclick = function () {
            cmpnsentmodal.classList.remove("seers-cmp-paid-popup-active");
            cmpnsentmodal.classList.add("seers-cmp-paid-popup-no-active");
            cmpnsentmodaloverlay.classList.remove("seers-cmp-paid-overlay-active");
            
            //make first tab active
            document.getElementsByName("pct")[0].checked = true;
        }
</script>

<?php
if (isset($_POST['SCCBPP_cookieid'])) {
    if (!isset($_POST['SCCBPP_update_setting']) || !wp_verify_nonce(sanitize_text_field($_POST['SCCBPP_update_setting']), 'SCCBPP-cookie-consent')) {
        echo 'Sorry, your nonce did not verify.';
        return;
    }
    
    if (isset($_POST['SCCBPP_cookie_consent_email'])) {
        $cookieEmail = sanitize_text_field($_POST['SCCBPP_cookie_consent_email']);
        update_option('SCCBPP_cookie_consent_email', $cookieEmail);
        ++$doupdatesettings;
    }
    if (isset($_POST['SCCBPP_cookie_consent_url'])) {
        $cookieurl = sanitize_text_field($_POST['SCCBPP_cookie_consent_url']);
        update_option('SCCBPP_cookie_consent_url', $cookieurl);
        $doupdatesettings++;
    }
    
    return;
}