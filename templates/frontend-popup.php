<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    var ajaxurl= "<?php echo admin_url( 'admin-ajax.php' );?>";
</script>
    <style>
        .seers-cmp-cookie-policy-text p{
            <?php if(get_option('SCCBPP_cookie_consent_body_text_color') && get_option('SCCBPP_cookie_consent_body_text_color')!=''){ echo ("color: " . get_option('SCCBPP_cookie_consent_body_text_color') . " !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_style') && get_option('SCCBPP_cookie_consent_font_style')!='' && get_option('SCCBPP_cookie_consent_font_style')!='inherit'){ echo ("font-family: \"" . get_option('SCCBPP_cookie_consent_font_style') . "\" !important;"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 2) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 2) . "px !important;"); }?>
        }
        a#seers-cmp-default-banner-opener {
            <?php if(get_option('SCCBPP_cookie_consent_preferences_btn_color') && get_option('SCCBPP_cookie_consent_preferences_btn_color')!=''){ echo("background: " . get_option('SCCBPP_cookie_consent_preferences_btn_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_preferences_text_color') && get_option('SCCBPP_cookie_consent_preferences_text_color')!=''){ echo("color: " . get_option('SCCBPP_cookie_consent_preferences_text_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        a#seers-iagree, a#seers_allow_all {
            <?php if(get_option('SCCBPP_cookie_consent_agree_btn_color') && get_option('SCCBPP_cookie_consent_agree_btn_color')!=''){ echo("background: " . get_option('SCCBPP_cookie_consent_agree_btn_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_agree_text_color') && get_option('SCCBPP_cookie_consent_agree_text_color')!=''){ echo("color: " . get_option('SCCBPP_cookie_consent_agree_text_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        a#seers-idisagree, a#seers_disable_all {
            <?php if(get_option('SCCBPP_cookie_consent_disagree_btn_color') && get_option('SCCBPP_cookie_consent_disagree_btn_color')!=''){ echo("background: " . get_option('SCCBPP_cookie_consent_disagree_btn_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_disagree_text_color') && get_option('SCCBPP_cookie_consent_disagree_text_color')!=''){ echo("color: " . get_option('SCCBPP_cookie_consent_disagree_text_color') . ";"); }else{ echo ""; }?>
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr th,
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table thead tr th {
            border: 0 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td:first-child {
            font-weight: bold !important;
            border: 0 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td {
            border: 0 !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-no-cookie-found {
            font-size: 14px !important;
            color: #555;
            margin: 15px 0 15px 0;
            font-family: "Arial";
            display: inline-block;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar {
            position: fixed;
            bottom: 0;
            top: auto;
            left: 0;
            right: 0;
            width: 100%;
            max-width: 100%;
            padding: 15px 5% 0;
            z-index: 9999999999999;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            background: <?php if(get_option('SCCBPP_cookie_consent_banner_bg_color') && get_option('SCCBPP_cookie_consent_banner_bg_color')!=''){ echo(get_option('SCCBPP_cookie_consent_banner_bg_color')); }else{ echo "#fff"; }?>;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px -4px 19px rgba(0, 0, 0, 0.07);
            -webkit-animation: seers-cmp-slide-in-bottom 1s both;
            -moz-animation: seers-cmp-slide-in-bottom 1s both;
            -ms-animation: seers-cmp-slide-in-bottom 1s both;
            -o-animation: seers-cmp-slide-in-bottom 1s both;
            animation: seers-cmp-slide-in-bottom 1s both;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar-hide {
            -webkit-animation: seers-cmp-slide-out-bottom 1s both;
            -moz-animation: seers-cmp-slide-out-bottom 1s both;
            -ms-animation: seers-cmp-slide-out-bottom 1s both;
            -o-animation: seers-cmp-slide-out-bottom 1s both;
            animation: seers-cmp-slide-out-bottom 1s both;
        }
        
        @keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-webkit-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-moz-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-ms-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @-o-keyframes seers-cmp-slide-in-bottom {
            from {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
            to {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }
        
        @keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }
        
        @-webkit-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }
        
        @-moz-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }
        
        @-ms-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }
        
        @-o-keyframes seers-cmp-slide-out-bottom {
            from {
                -webkit-transform: translate3d(0, 0, 0);
                -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            to {
                -webkit-transform: translate3d(0, 100%, 0);
                -moz-transform: translate3d(0, 100%, 0);
                -ms-transform: translate3d(0, 100%, 0);
                -o-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0)
            }
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-cookie-logo {
            margin: 0 20px 0 0;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-cookie-logo svg {
            width: 50px;
            height: 50px;
            min-width: 50px;
            min-height: 50px;
            max-width: 50px;
            max-height: 50px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by {
            padding: 10px 20px;
            background: #EFF3FF;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-orient: horizontal;
            -moz-box-orient: horizontal;
            -webkit-box-direction: normal;
            -moz-box-direction: normal;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by {
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-text,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .back-to-seers-cmp-detail,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-no-cookie-found {
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none;
        }
        
        /*for rtl languages*/
        .rtl .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-title, .rtl .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc, .rtl .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-accordion-tab-content-text, .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-title, .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text {
            text-align: right;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-text {
            font-family: "Arial";
            text-transform: unset !important;
            font-size: 13px;
            color: #000;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link {
            width: 50px;
            min-width: 50px;
            max-width: 50px;
            height: 30px;
            min-height: 30px;
            max-height: 30px;
            margin-top: -4px;
            margin-left: -3px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-scan-staus {
            font-family: "Arial";
            text-transform: unset !important;
            font-size: 12px;
            color: #555;
            display: block;
            background: #EFF3FF;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link img,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-link svg {
            width: 100%;
            min-width: 100%;
            max-width: 100%;
            height: 100%;
            min-height: 100%;
            max-height: 100%;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer {
            padding: 15px 0 0;
            width: 100%;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn {
            background: #3B6EF8;
            font-family: "Arial";
            font-weight: 500;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
            color: #fff;
            border: none;
            padding: 7px 15px;
            line-height: 1.5em;
            white-space: nowrap;
            text-decoration: none;
            text-align: center;
            text-transform: capitalize;
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
            width:100% !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn:hover {
            background: #3544ee;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-align: end;
            -moz-box-align: end;
            -webkit-box-pack: end;
            -moz-box-pack: end;
            -ms-flex-pack: end;
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            justify-content: flex-end;
            margin: 0 auto 15px !important;
            padding: 0 35px 0 19px !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo {
            width: 100px;
            height: 30px;
            min-width: 100px;
            min-height: 30px;
            max-width: 100px;
            max-height: 30px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: start;
            -moz-box-align: start;
            -ms-flex-align: start;
            -webkit-align-items: flex-start;
            -moz-flex-align: flex-start;
            -ms-flex-align: flex-start;
            align-items: flex-start;
        }
        .rtl .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo {
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            justify-content: flex-end;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo svg,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header .seers-cmp-cookie-default-banner-logo img {
            height: 100%;
            min-height: 100%;
            max-height: 100%;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text {
            padding: 20px;
        }
        
        .seers-cmp-cookie-policy-accordion-tabs {
            padding-right: 15px;
            overflow-y: auto;
            height: calc(100vh - 300px);
            padding-bottom: 100px;
        }
        /*start style seers-cmp-cookie-detail-hol */
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol {
            margin: 0 0 15px 0;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .back-to-seers-cmp-detail {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: relative;
            font-size: 18px;
            color: #555;
            margin: 30px 0 20px 0;
            font-family: "Arial";
            display: inline-block;
            text-transform: unset !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .back-to-seers-cmp-detail svg {
            cursor: pointer;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid #d8d8d8 !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie .seers-cmp-search-bar {
            width: 100% !important;
            padding: 11.2px 20px !important;
            height: 47px !important;
            outline: none !important;
            font-size: 16px;
            color: #555 !important;
            font-style: italic !important;
            border: 1px solid #dbdbdb !important;
            overflow-x: hidden !important;
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
            font-weight: normal !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie .seers-cmp-filter-icon {
            margin: 0 0 0 20px !important;
            cursor: pointer !important;
            width: 47px !important;
            height: 47px !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-search-cookie .seers-cmp-filter-icon:hover svg path {
            fill: #6cc04a !important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-view-cookie-table-link {
            font-size: 14px;
            color: #555;
            line-height: 16px;
            font-family: "Arial";
            font-weight: normal;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-detail-hol .seers-cmp-view-cookie-table-link:hover {
            color: #3b6ef8 !important;
            text-decoration: underline !important;
        }
        /*
.seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list {
    margin: 0 0 15px 0 !important;
}
*/
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td {
            padding: 10px 2em 10px 0 !important;
            font-size: 14px;
            color: #555;
            line-height: 24px !important;
            font-family: "Arial";
        }
        
        .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td:first-child {
            font-weight: bold !important;
        }
        /* .seers-cmp-cookie-policy-accordion-tab .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list table tbody tr td.td-hover-seers:hover {
    overflow-y: scroll !important;
} */
        /*end style seers-cmp-cookie-detail-hol */
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-title {
            font-weight: bold;
            position: relative;
            color: #555;
            margin: 0 0 15px 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 6) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 6) . "px !important;"); }?>
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text {
            margin: 0 0 15px 0 !important;
            color: #696969;
            font-family: "Arial";
            line-height: 20px !important;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-direction: normal;
            -webkit-box-orient: vertical;
            -moz-box-direction: normal;
            -moz-box-orient: vertical;
            -webkit-box-orient: vertical;
            -moz-box-orient: vertical;
            -ms-box-orient: vertical;
            box-orient: vertical;
            -webkit-flex-direction: column;
            -moz-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-read-cookie {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            color: #696969;
            font-family: "Arial";
            font-size: 13px;
            line-height: 18px !important;
            display: inline-block;
            margin: 0 0 15px 0 !important;
            cursor: default;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-read-cookie svg {
            width: 12px !important;
            vertical-align: middle !important;
            fill: #3b6ef8 !important;
            box-sizing: border-box !important;
            cursor: pointer;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-policy-banner-text-up-link {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #3544ee;
            font-family: "Arial";
            font-size: 13px;
            text-decoration: none;
            cursor: pointer;
            margin: 0 0 15px 0;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-policy-banner-text-up-link svg {
            width: 18px;
            height: 18px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-policy-banner-text-up-link svg path {
            fill: #3544ee;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-cookie-policy-read-more-info {
            color: #3544ee;
            font-family: "Arial";
            font-size: 13px;
            display: block;
            cursor: pointer;
            text-decoration: none;
            margin: 0 0 15px 0;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-cookie-policy-read-more-info:hover {
            color: #6cc04a;
            text-decoration: underline;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-btn {
            background: #3B6EF8;
            font-family: "Arial";
            font-weight: 500 !important;
            font-size: 14px;
            color: #fff;
            border: none;
            padding: 7px 15px !important;
            line-height: 1.5em !important;
            white-space: nowrap;
            text-decoration: none;
            text-transform: capitalize;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            margin: 0 10px 15px !important;
            width: 100% !important;
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-data {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100vw;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-flex: 1;
            -webkit-flex: auto;
            -moz-flex: auto;
            -ms-flex: auto;
            flex: auto;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
            padding: 0 30px 0 0;
            margin: 0 0 15px 0 !important;
            -webkit-box-flex: 1;
            -webkit-flex: auto;
            -moz-flex: auto;
            -ms-flex: auto;
            flex: auto;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-title,
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc,
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-accordion-tab-content-text,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-title,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text {
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-title {
            font-family: "Arial";
            font-weight: bold;
            font-size: 15px;
            color: #000;
            margin: 0 0 5px 0;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc {
            font-family: "Arial";
            font-weight: normal;
            font-size: 14px;
            color: #000000;
            margin: 0;
            line-height: 20px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-read-more-btn {
            font-family: "Arial";
            font-weight: 500;
            font-size: 12px;
            color: #3B6EF8;
            display: inline-block;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-read-more-btn:hover {
            color: #6cc04a;
            text-decoration: underline;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -7.5px;
            /*  min-width: 381px;*/
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol.seers-cmp-cookie-policy-btn-hol-wrap {
            -webkit-box-orient: horizontal;
            -moz-box-orient: horizontal;
            -webkit-box-direction: normal;
            -moz-box-direction: normal;
            -webkit-flex-flow: row wrap;
            -moz-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            min-width: 381px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol.seers-cmp-cookie-policy-btn-hol-wrap .seers-cmp-btn,
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol.seers-cmp-cookie-policy-btn-hol-wrap .seers-cmp-preference-btn {
            width: 100% !important;
            -webkit-flex: auto !important;
            -moz-flex: auto !important;
            -ms-flex: auto !important;
            flex: auto !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-btn,
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn,
        .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-read-cookie {
            -webkit-font-smoothing: auto;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none;
            text-transform: capitalize;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn {
            border: 1px solid transparent !important;
            background: #3B6EF8;
            font-family: "Arial";
            font-weight: 500;
            font-size: 14px;
            color: #fff;
            border: none;
            padding: 7px 15px !important;
            line-height: 1.5em !important;
            white-space: nowrap;
            text-decoration: none;
            margin: 0 7.5px 15px;
            text-transform: capitalize;
            display: inline-block;
            text-align: center;
            cursor: pointer;
        }
        /*seers-cmp-style-btn  */
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-default-style-btn {
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-flat-style-btn {
            border-radius: 0px !important;
            -webkit-border-radius: 0px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-rounded-style-btn {
            border-radius: 16px !important;
            -webkit-border-radius: 16px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn.seers-cmp-stroke-style-btn {
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
            border: 1px solid #c1c1c1 !important;
        }
        /*
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-default-style-btn {
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-flat-style-btn {
            border-radius: 0px !important;
            -webkit-border-radius: 0px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-rounded-style-btn {
            border-radius: 16px !important;
            -webkit-border-radius: 16px !important;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn.seers-cmp-stroke-style-btn {
            border-radius: 4px !important;
            -webkit-border-radius: 4px !important;
        }
*/
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
            font-family: "Arial";
            font-weight: 500;
            font-size: 14px;
            color: #3B6EF8;
            border: 1px solid #c1c1c1 !important;
            border: none;
            padding: 7px 15px !important;
            line-height: 1.5em !important;
            white-space: nowrap;
            text-decoration: none;
            margin: 0 7.5px 15px;
            text-transform: capitalize;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn,
        .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
            /* width: 112px; */
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-flex: 1 !important;
            -webkit-flex: 1 0 auto !important;
            -moz-flex: 1 0 auto !important;
            -ms-flex: 1 0 auto !important;
            flex: 1 0 auto !important;
            min-width: 112px;
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        /* .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn:hover {
    background: #3544ee !important;
}
.seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn:hover {
    background: #6cc04a !important;
    color: #fff !important;
} */
        
        .seers-cmp-overlay {
            display: none;
            position: fixed;
            width: 100%;
            z-index: 99999999999999;
            height: 100%;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            -webkit-animation: seers-fade-in .7s ease-in-out;
            -moz-animation: seers-fade-in .7s ease-in-out;
            -ms-animation: seers-fade-in .7s ease-in-out;
            -o-animation: seers-fade-in .7s ease-in-out;
            animation: seers-fade-in .7s ease-in-out;
        }
        
        @-webkit-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @-moz-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @-ms-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @-o-keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        @keyframes seers-fade-in {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content {
            overflow: hidden;
            z-index: 999999999999999;
            background-color: #fff;
            position: fixed;
            top: 0;
            bottom: 0;
            left: -460px;
            max-width: 450px;
            width: 450px;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .5s;
            -moz-transition-duration: .5s;
            -ms-transition-duration: .5s;
            -o-transition-duration: .5s;
            transition-duration: .5s;
        }
        
        .seers-cmp-overlay.seers-cmp-overlay-active {
            display: block;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content.seers-cmp-cookie-banner-active {
            left: 0px;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content.seers-cmp-cookie-banner-no-active {
            left: -460px!important;
        }
        
        .seers-cmp-cookie-policy-default-banner .seers-cmp-default-banner-close {
            position: absolute;
            right: 20px;
            top: 25px;
            cursor: pointer;
            font-size: 30px;
            line-height: 0;
            color: #3B6EF8;
            font-weight: bold;
            z-index: 99;
        }
        /*scrollbar style*/
        
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background-color: #9b9696;
            border: 5px solid transparent;
        }
        
        ::-webkit-scrollbar-button {
            display: none;
        }
        /*accordion*/
        
        .seers-cmp-cookie-policy-accordion-tab {
            overflow: hidden;
            position: relative;
            /* background: #fff; */
        }
        
        .seers-cmp-cookie-policy-accordion-tab.seers-top-border-none {
            border-top: none !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check {
            position: absolute;
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: 0 !important;
            line-height: 0 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: justify;
            -moz-box-align: justify;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            justify-content: space-between;
            padding: 1em 1.5em 1em 2.5em !important;
            display: block !important;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . (get_option('SCCBPP_cookie_consent_font_size') + 1) . "px !important;"); }else{ echo ("font-size: " . ($this->defaultfontsize + 1) . "px !important;"); }?>
            color: #555;
            vertical-align: middle;
            margin: 0 0 7px 0 !important;
            font-family: "Arial";
            text-transform: unset !important;
            border-radius: 7px;
            -webkit-border-radius: 7px;
            transition: background-color 0.2s ease-out 0.3s, color 0.2s ease-out 0s;
            background-color: #eff3ff !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label::after, .seers-cmp-cookie-policy-accordion-tab-label::before {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            background: #3b6ef8;
            left: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label::after{
            transform: rotate(90deg);
            top: 48%!important;
        }
        
        .rtl .seers-cmp-cookie-policy-accordion-tab-label{
            text-align:left;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label::after {
            transform: rotate(0deg)!important;
        }
            
        
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label {
            color: #3b6ef8 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label::after {
            border-color: #3b6ef8 !important;
            border-width: 0px 0px 1.5px 1.5px !important;
            top: 50% !important;
        }
        /*
        .seers-cmp-cookie-policy-accordion-tab-label::after {
            content: '';
            position: absolute;
            width: 10px;
            height: 2px;
            background: #3b6ef8;
            left: 15px;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .seers-cmp-cookie-policy-accordion-tab-label::after {
            transform: rotate(90deg);
            top: 48% !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input.seers-cmp-cookie-policy-accordion-check:checked+.seers-cmp-cookie-policy-accordion-tab-label::after {
            transform: rotate(0deg) !important;
        }
        
*/
        
        .seers-cmp-cookie-policy-accordion-tab-content {
            max-height: 0;
            color: #555;
            /* background: white; */
            overflow: hidden;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -ms-transition-duration: .3s;
            -o-transition-duration: .3s;
            transition-duration: .3s;
        }
        
        .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header {
            padding: 0 20px;
            height: 55px;
            -webkit-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            -moz-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            -ms-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            -o-box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            box-shadow: 0 2px 4px 0 rgb(0 0 0 / 7%);
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: -moz-box;
            display: -moz-flex;
            display: flex;
            -webkit-box-align: start;
            -moz-box-align: start;
            -webkit-box-pack: start;
            -moz-box-pack: start;
            -ms-flex-pack: start;
            -webkit-justify-content: flex-start;
            -moz-justify-content: flex-start;
            -ms-justify-content: flex-start;
            justify-content: flex-start;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            -moz-flex-align: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .rtl .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-header {
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            justify-content: flex-end;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-table-list {
            border-bottom: 1px solid #d8d8d8 !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab input:checked~.seers-cmp-cookie-policy-accordion-tab-content {
            max-height: 100vh;
            -webkit-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -moz-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -ms-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -o-transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            transition-timing-function: cubic-bezier(0.250, 0.460, 0.450, 0.940);
            -webkit-transistion-property: all;
            -moz-transistion-property: all;
            -ms-transistion-property: all;
            -o-transistion-property: all;
            transition-property: all;
            -webkit-transition-duration: .3s;
            -moz-transition-duration: .3s;
            -ms-transition-duration: .3s;
            -o-transition-duration: .3s;
            transition-duration: .3s;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-accordion-tab-content-text {
            padding: 1.2em;
            margin: 0;
            color: #696969;
            font-family: "Arial";
            <?php if(get_option('SCCBPP_cookie_consent_font_size') && get_option('SCCBPP_cookie_consent_font_size')!=''){ echo ("font-size: " . get_option('SCCBPP_cookie_consent_font_size') . "px !important;"); }else{ echo ("font-size: " . $this->defaultfontsize . "px !important;"); }?>
            line-height: 22px !important;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-detail-btn {
            margin: 0 1.2em 1.2em 1.2em;
            color: rgb(85, 85, 85);
            font-family: "Arial";
            font-size: 14px;
            display: block;
            cursor: pointer;
        }
        
        .seers-cmp-cookie-policy-accordion-tab-content .seers-cmp-cookie-policy-detail-btn:hover {
            color: #3b6ef8 !important;
            text-decoration: underline;
        }
        
        a.seers-cmp-cookie-policy-detail-btn {
            color: var(--link-color) !important;
        }
        
        span.seers-cmp-cookie-policy-always-active {
            color: var(--link-color) !important;
        }
        /*switch button*/
        
        .seers-cmp-cookie-policy-switchers {
            position: absolute;
            top: 50% !important;
            right: 15px !important;
            -webkit-transform: translateY(-50%) !important;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -o-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch {
            position: absolute;
            display: none !important;
            visibility: hidden !important;
            opacity: 0 !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label {
            width: 36px;
            height: 15px;
            margin: 0 !important;
            padding: 0 !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            display: block;
            position: relative;
            cursor: pointer;
            outline: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::before,
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::after {
            display: block !important;
            position: absolute !important;
            top: 1px !important;
            left: 1px !important;
            bottom: 1px !important;
            content: "" !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::before {
            right: 1px !important;
            background-color: #dddddd;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
            border-radius: 30px;
            -webkit-transition: background 0.4s;
            -moz-transition: background 0.4s;
            -o-transition: background 0.4s;
            transition: background 0.4s;
            margin: -1px;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch+label::after {
            width: 20px;
            height: 20px;
            margin-top: -4px;
            margin-left: -4px;
            background-color: #fff;
            -webkit-border-radius: 100%;
            -moz-border-radius: 100%;
            -ms-border-radius: 100%;
            -o-border-radius: 100%;
            border-radius: 100%;
            -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            -webkit-transition: margin 0.4s;
            -moz-transition: margin 0.4s;
            -o-transition: margin 0.4s;
            transition: margin 0.4s;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch:checked+label::after {
            margin-left: 18px !important;
            background: #3544ee !important;
        }
        
        .seers-cmp-cookie-policy-switchers input.seers-cmp-cookie-policy-banner-switch:checked+label:before {
            background-color: #d5e9ff;
        }
        
        .seers-cmp-cookie-policy-always-active {
            color: rgb(85, 85, 85) !important;
            font-size: 13px !important;
            font-family: arial !important;
            font-weight: normal;
            position: absolute;
            right: 15px !important;
            top: 50% !important;
            -webkit-transform: translateY(-50%) !important;
            -moz-transform: translateY(-50%) !important;
            -ms-transform: translateY(-50%) !important;
            -o-transform: translateY(-50%) !important;
            transform: translateY(-50%) !important;
        }
        
        @media screen and (max-width: 991px) {
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc {
                margin: 0 0 15px 0 !important;
                padding: 0 20px 0 0 !important;
            }
        }
        
        @media screen and (max-width: 767px) {
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-bar .seers-cmp-cookie-policy-hol {
                -webkit-box-align: start !important;
                -moz-box-align: start !important;
                -ms-flex-align: start !important;
                -webkit-align-items: flex-start !important;
                -moz-flex-align: flex-start !important;
                -ms-flex-align: flex-start !important;
                align-items: flex-start !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-data-hol .seers-cmp-cookie-policy-hol {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-data {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol .seers-cmp-policy-desc,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-left-bar .seers-cmp-cookie-data-hol .seers-cmp-cookie-policy-hol .seers-cmp-policy-desc {
                margin: 0 0 15px 0;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content.seers-cmp-cookie-banner-active {
                max-width: 100% !important;
                width: 100% !important;
            }
        }
        
        @media screen and (max-width: 639px) {
            .seers-cmp-cookie-policy-accordion-tabs {
                height: 150px !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar.seers-cmp-top-bar .seers-cmp-cookie-policy-hol {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-hol .seers-cmp-cookie-policy-text {
                padding: 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap !important;
                -moz-flex-flow: row wrap !important;
                -ms-flex-flow: row wrap !important;
                flex-flow: row wrap !important;
                margin: 0 auto !important;
                width: 100% !important;
                min-width: 100% !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-policy-desc {
                margin: 0 !important;
                padding: 0 !important;
            }
        }
        
        @media screen and (max-width: 479px) {
            .seers-cmp-cookie-policy-accordion-tabs {
                height: 110px !important;
            }
            .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block {
                -webkit-box-orient: horizontal;
                -moz-box-orient: horizontal;
                -webkit-box-direction: normal;
                -moz-box-direction: normal;
                -webkit-flex-flow: row wrap;
                -moz-flex-flow: row wrap;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                margin: 0 8px 0 0 !important;
            }
            .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-cookie-disagree-btn {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                margin: 0 0 10px 0 !important;
            }
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-btn,
            .seers-cmp-cookie-data-hol .seers-cmp-banner-bar .seers-cmp-cookie-policy-btn-hol .seers-cmp-preference-btn {
                width: 100% !important;
                margin-left: 0 !important;
                margin-right: 0 !important;
                -webkit-flex: auto !important;
                -moz-flex: auto !important;
                -ms-flex: auto !important;
                flex: auto !important;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-body-text .seers-cmp-policy-banner-text-links .seers-cmp-btn {
                width: 100% !important;
                margin: 0 10px 15px !important;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by {
                -webkit-box-align: center !important;
                -moz-box-align: center !important;
                -webkit-box-pack: center !important;
                -moz-box-pack: center !important;
                -ms-flex-pack: center !important;
                -webkit-justify-content: center !important;
                -moz-justify-content: center !important;
                -ms-justify-content: center !important;
                justify-content: center !important;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-power-by .seers-cmp-cookie-policy-powered-by-text {
                margin: 0 0 0 auto;
            }
            .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-scan-staus {
                margin: 0 0 0 auto;
            }
        }
        
        .btn-flat, .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn.btn-flat{border-radius: 0px !important; -webkit-border-radius: 0px !important;}
        .btn-round, .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn.btn-round{border-radius: 20px !important; -webkit-border-radius: 20px !important;}
        .btn-stroke, .seers-cmp-cookie-policy-default-banner .seers-cmp-cookie-policy-default-banner-content .seers-cmp-cookie-policy-default-banner-footer .seers-cmp-cookie-policy-default-banner-footer-block .seers-cmp-btn.btn-stroke{background:#fff !important; border:1px solid #C2C2C2 !important; border-radius: 4x !important; -webkit-border-radius: 4px !important; color:#7E7E7E !important;}
    </style>
</head>

<body>
    <div class="seers-cmp-cookie-data-hol">
        <div class="seers-cmp-banner-bar">
            <div class="seers-cmp-cookie-policy-data">
                <div class="seers-cmp-cookie-policy-hol">
                    <div class="seers-cmp-cookie-policy-text">
                        <p class="seers-cmp-policy-desc" lang="<?php echo get_user_locale();?>"> <?php if(get_option('SCCBPP_cookie_consent_body_text') && get_option('SCCBPP_cookie_consent_body_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_body_text'), $this->textdomain); }else{ esc_html_e( "We use cookies to ensure you get the best experience", $this->textdomain);} ?> </p>
                    </div>
                    <div class="seers-cmp-cookie-policy-btn-hol"> <a href="#" class="seers-cmp-preference-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" lang="<?php echo get_user_locale();?>" tabindex="0" id="seers-cmp-default-banner-opener"> <?php if(get_option('SCCBPP_cookie_consent_setting_btn_text') && get_option('SCCBPP_cookie_consent_setting_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_setting_btn_text'), $this->textdomain); }else{ echo __("Preference", $this->textdomain); }?> </a> <a href="#" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers-iagree" lang="<?php echo get_user_locale();?>" tabindex="0"> <?php if(get_option('SCCBPP_cookie_consent_accept_btn_text') && get_option('SCCBPP_cookie_consent_accept_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_accept_btn_text'), $this->textdomain); }else{ echo __("Allow All", $this->textdomain); }?> </a> <a href="#" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers-idisagree" lang="<?php echo get_user_locale();?>" tabindex="0"> <?php if(get_option('SCCBPP_cookie_consent_reject_btn_text') && get_option('SCCBPP_cookie_consent_reject_btn_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_reject_btn_text'), $this->textdomain); }else{ echo __("Disable All", $this->textdomain); }?> </a> </div>
                </div>
            </div>
        </div>
        <!-- The seers-cmp-default-banner -->
        <div id="seers-cmp-default-cookie-banner" class="seers-cmp-cookie-policy-default-banner" lang="<?php echo get_user_locale();?>">
            <div id="seers-cmp-overlay" class="seers-cmp-overlay"></div>
            <!-- seers-cmp-default-banner content -->
            <!--<div class="seers-cmp-cookie-policy-default-banner-content" id="seers-cmp-cookie-policy-default-banner-content"> <span class="seers-cmp-default-banner-close" title="close">&times;</span>-->
            <div class="seers-cmp-cookie-policy-default-banner-content" id="seers-cmp-cookie-policy-default-banner-content"> 
                <div class="seers-cmp-cookie-policy-default-banner-header">
                    <div class="seers-cmp-cookie-default-banner-logo"><img src="https://seers-application-assets.s3.amazonaws.com/images/logo/seersco-logo.png" alt="<?php echo __('seers logo', $this->textdomain); ?>"></div>
                    <span class="seers-cmp-default-banner-close" title="close" id="SeersCMPBannerSettingCloseButton">×</span>
                </div>
                <div class="seers-cmp-cookie-policy-default-banner-body-text">
                    <h3 class="seers-cmp-policy-banner-title">
                    <?php echo __("About Cookies", $this->textdomain); ?>
                </h3>
                    <div class="seers-cmp-policy-banner-text-large-block">
                        <p class="seers-cmp-policy-banner-text"> <?php if(get_option('SCCBPP_cookie_consent_body_text') && get_option('SCCBPP_cookie_consent_body_text')!=''){ esc_html_e(get_option('SCCBPP_cookie_consent_body_text')); }else{ esc_html_e( "We use cookies to ensure you get the best experience", $this->textdomain);} ?> </p> 
                            <?php if(get_option('SCCBPP_cookie_consent_enable_policy') && get_option('SCCBPP_cookie_consent_enable_policy')=='true' ||  get_option('SCCBPP_cookie_consent_enable_policy')=== true){?><a href="<?php if(get_option('SCCBPP_cookie_consent_policy_declaration_url') && get_option('SCCBPP_cookie_consent_policy_declaration_url')!=''){ if (filter_var(get_option('SCCBPP_cookie_consent_policy_declaration_url'), FILTER_VALIDATE_URL)) {esc_html_e(get_option('SCCBPP_cookie_consent_policy_declaration_url'));} else {echo "#";} }else{ echo "#"; } ?>" target="_blank" class="seers-cmp-policy-banner-read-cookie"><?php echo __("Read Cookie Policy", $this->textdomain);?>&nbsp;<svg  viewBox="0 0 32 40" x="0px" y="0px"><path d="M32 0l-8 1 2.438 2.438-9.5 9.5-1.063 1.063 2.125 2.125 1.063-1.063 9.5-9.5 2.438 2.438 1-8zm-30 3c-.483 0-1.047.172-1.438.563-.391.391-.563.954-.563 1.438v25c0 .483.172 1.047.563 1.438.391.391.954.563 1.438.563h25c.483 0 1.047-.172 1.438-.563.391-.391.563-.954.563-1.438v-15h-3v14h-23v-23h15v-3h-16z"></path></svg>

                        </a><?php } ?>
                        
                            <div class="seers-cmp-policy-banner-text-links">
                                <a href="javascript:void(0);" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers_allow_all"> <?php echo __("Allow All", $this->textdomain);?> </a>
                                <a href="javascript:void(0);" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="seers_disable_all"> <?php echo __("Disable All", $this->textdomain);?> </a>
                            </div>

                        <div class="seers-cmp-cookie-policy-accordion-tabs" lang="<?php echo get_user_locale();?>">
                            <div class="seers-cmp-cookie-policy-accordion-tab">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordiannecessary" name="seers-cmpAccordiannecessary">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordiannecessary"><?php echo __("Necessary", $this->textdomain);?> <span class="seers-cmp-cookie-policy-always-active"><?php echo __("Always Active", $this->textdomain);?></span></label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Necessary cookies help make a website usable by enabling basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies.", $this->textdomain); ?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianPreference" name="seers-cmpAccordianPreference">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianPreference"><?php echo __("Preferences", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers">
                                        <input id="seers-cmp-cookie-policy-preference-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-preference-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Preference cookies enable a website to remember information that changes the way the website behaves or looks, like your preferred language or the region that you are in.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianstatistic" name="seers-cmpAccordianstatistic">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianstatistic"><?php echo __("Statistics", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers">
                                        <input id="seers-cmp-cookie-policy-statistic-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-statistic-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Statistic cookies help website owners to understand how visitors interact with websites by collecting and reporting information anonymously.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianmarketing" name="seers-cmpAccordianmarketing">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianmarketing"><?php echo __("Marketing", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers">
                                        <input id="seers-cmp-cookie-policy-marketing-switch" class="seers-cmp-cookie-policy-banner-switch" type="checkbox">
                                        <label for="seers-cmp-cookie-policy-marketing-switch" /> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Marketing cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third-party advertisers.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            <div class="seers-cmp-cookie-policy-accordion-tab seers-top-border-none">
                                <input class="seers-cmp-cookie-policy-accordion-check" type="checkbox" id="seers-cmpAccordianunclassified" name="seers-cmpAccordianunclassified">
                                <label class="seers-cmp-cookie-policy-accordion-tab-label" for="seers-cmpAccordianunclassified"><?php echo __("Unclassified", $this->textdomain);?>
                                    <div class="seers-cmp-cookie-policy-switchers"> </div>
                                </label>
                                <div class="seers-cmp-cookie-policy-accordion-tab-content">
                                    <p class="seers-cmp-cookie-policy-accordion-tab-content-text"><?php echo __("Unclassified cookies are cookies that we are in the process of classifying, together with the providers of individual cookies.", $this->textdomain);?></p> <?php /*hide for now it will shown in next version*/ if (false) { ?><a class="seers-cmp-cookie-policy-detail-btn"><?php echo __("Cookies Detail", $this->textdomain);?></a><?php } ?> </div>
                            </div>
                            </div>
                        </div>
                    </div>
                <div class="seers-cmp-cookie-policy-default-banner-footer">
                    <div class="seers-cmp-cookie-policy-default-banner-footer-block"> <a href="#" class="seers-cmp-btn <?php if (get_option('SCCBPP_cookie_consent_button_type')) { if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_flat') { echo "btn-flat"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_rounded') { echo "btn-round"; } else if (get_option('SCCBPP_cookie_consent_button_type') == 'cbtn_stroke') { echo "btn-stroke"; } }?>" id="savemychoice" lang="<?php echo get_user_locale();?>" tabindex="0"> 
                            <?php echo __("Save my choices", $this->textdomain);?>
                         </a> </div>
                    <div class="seers-cmp-cookie-policy-power-by" lang="<?php echo get_user_locale();?>">
                                        <span class="seers-cmp-cookie-policy-scan-staus" style="font-family: arial">
                                             
                                        </span>
                                        <span class="seers-cmp-cookie-policy-powered-by-text" lang="<?php echo get_user_locale();?>"><?php echo __("powered by", $this->textdomain);?>&nbsp;<a href="https://seersco.com" target="_blank" class="seers-cmp-cookie-policy-powered-by-link" lang="<?php echo get_user_locale();?>" tabindex="0"><svg xmlns="http://www.w3.org/2000/svg" width="80.519" height="25.067" viewBox="0 0 80.519 25.067"><g id="Group_3140" data-name="Group 3140" transform="translate(0 0)"><path id="Path_12051" data-name="Path 12051" d="M300.5,92.044h6.565s5.905.142,5.336-5.28-7.526-5.992-11.065-4.242-4.811,7.872-3.28,12.027,4.067,5.292,8.572,5.2a11.967,11.967,0,0,0,5.161-1.53l-1.049-2.405S302.333,100.387,300.5,92.044Zm6.83-7.379a3.325,3.325,0,0,1,1.921,2.58,1.82,1.82,0,0,1-1.707,2.143h-6.823s.746-6.692,6.606-4.723Z" transform="translate(-278.391 -74.957)" fill="#292929"></path><path id="Path_12052" data-name="Path 12052" d="M375.949,92.044h6.565s5.905.142,5.336-5.28-7.522-5.992-11.065-4.242-4.811,7.872-3.28,12.027,4.067,5.292,8.572,5.2a11.964,11.964,0,0,0,5.16-1.53l-1.049-2.405S377.782,100.387,375.949,92.044Zm6.83-7.379a3.325,3.325,0,0,1,1.921,2.58,1.82,1.82,0,0,1-1.707,2.143H376.17s.746-6.692,6.609-4.723Z" transform="translate(-335.879 -74.957)" fill="#292929"></path><path id="Path_12053" data-name="Path 12053" d="M453.814,84.306s5.015-3.907,10.789-2.041l-.467,2.566s-2.917-1.224-6.94,1.108V99.528h-3.382Z" transform="translate(-397.558 -75.051)" fill="#292929"></path><path id="Path_12074" data-name="Path 12074" d="M224.394,66.572c2.78.7,5.976,2.446,5.773,5.07s-2.664,5.738-11.557,1.89l-1.11,2.507a13.754,13.754,0,0,0,11.44,1.73c6.174-1.708,6.342-10.715-.043-12.727-3.283-1.034-5.593-1.77-6.56-2.93a3.455,3.455,0,0,1,.436-4.683c2.07-1.545,7.236-.633,8.811.5l1.138-2.419s-10.555-4.9-13.62.869C219.1,56.382,215.017,64.223,224.394,66.572Z" transform="translate(-217.5 -53.573)" fill="#292929"></path><path id="Path_12075" data-name="Path 12075" d="M510.927,91.911c2.048.513,4.4,1.8,4.25,3.732s-1.962,4.224-8.508,1.39l-.815,1.846a10.126,10.126,0,0,0,8.422,1.274c4.545-1.259,4.669-7.889-.032-9.37-2.419-.761-4.118-1.3-4.83-2.157a2.543,2.543,0,0,1,.321-3.448c1.524-1.138,5.327-.466,6.486.371l.837-1.779s-7.771-3.606-10.028.64C507.031,84.408,504.023,90.181,510.927,91.911Z" transform="translate(-437.208 -75.493)" fill="#292929"></path></g></svg></a></span> 
                                        
                                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get the seers-cmp-default-banner
        var cmpnsentmodal = document.getElementById("seers-cmp-cookie-policy-default-banner-content");
        var cmpnsentmodaloverlay = document.getElementById("seers-cmp-overlay");
        // Get the button that opens the seers-cmp-default-banner
        var seersOpenbtn = document.getElementById("seers-cmp-default-banner-opener");
        // Get the <span> element that seers-cmp-default-banner-closes the seers-cmp-default-banner
        var seersClosespan = document.getElementsByClassName("seers-cmp-default-banner-close")[0];
        // When the user clicks the button, open the seers-cmp-default-banner 
        seersOpenbtn.onclick = function () {
                cmpnsentmodal.classList.add("seers-cmp-cookie-banner-active");
                cmpnsentmodal.classList.remove("seers-cmp-cookie-banner-no-active");
                cmpnsentmodaloverlay.classList.add("seers-cmp-overlay-active");
            }
            // When the user clicks on <span> (x), seers-cmp-default-banner-close the seers-cmp-default-banner
        seersClosespan.onclick = function () {
            cmpnsentmodal.classList.remove("seers-cmp-cookie-banner-active");
            cmpnsentmodal.classList.add("seers-cmp-cookie-banner-no-active");
            cmpnsentmodaloverlay.classList.remove("seers-cmp-overlay-active");
        }
        
        //by Shoaib
        /*********** I Agree. **************/
        function savecookieajax(disagree, btnid) {
            let seersbannerbar = document.getElementsByClassName("seers-cmp-banner-bar")[0];

            let consentobj = {"Pref": false , "stat": false, "market": false};
            if (!disagree) {
                
                if (document.getElementById('seers-cmp-cookie-policy-preference-switch').checked || btnid === "seers-iagree" || btnid === "seers_allow_all") {
                consentobj.Pref = true;
            } else {
                consentobj.Pref = false;
            }
                if (document.getElementById('seers-cmp-cookie-policy-statistic-switch').checked || btnid === "seers-iagree" || btnid === "seers_allow_all") {
                consentobj.stat = true;
            } else {
                consentobj.stat = false;
            }
                if (document.getElementById('seers-cmp-cookie-policy-marketing-switch').checked || btnid === "seers-iagree" || btnid === "seers_allow_all") {
                consentobj.market = true;
            } else {
                consentobj.market = false;
            }

            }

            //var params = "action=savecookie&consentobj=" + JSON.stringify(consentobj);
            var params = "action=savecookie&save=y";
            httpRequest = new XMLHttpRequest()
            httpRequest.open('POST', ajaxurl)
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send(params);
            // beforeSend:
            httpRequest.onreadystatechange = function() {
                // Process the server response here.
                if (httpRequest.readyState === XMLHttpRequest.DONE) {
                    // complete:
                    cmpnsentmodal.classList.remove("seers-cmp-cookie-banner-active");
                    cmpnsentmodal.classList.add("seers-cmp-cookie-banner-no-active");
                    cmpnsentmodaloverlay.classList.remove("seers-cmp-overlay-active");
                    seersbannerbar.classList.add("seers-cmp-banner-bar-hide");
                    let data = JSON.parse(httpRequest.response)
                    console.log(data);
                    if (httpRequest.status === 200) {
                        // show success message
                        
                        var expires = "";
                        var days = 30;
                        let name = "SeersCMPConsent";

                        if (days) {
                            var date = new Date();
                            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                            expires = "; expires=" + date.toGMTString();
                        }

                        const item = {
                            value: consentobj,
                            expiry: expires
                        }
                        
                        localStorage.setItem(name, JSON.stringify(item));
                    }
                }
            }
        }
        document.getElementById("savemychoice").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(false, "savemychoice");
        });
        document.getElementById("seers-iagree").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(false, "seers-iagree");
        });
        document.getElementById("seers-idisagree").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(true, "seers-idisagree");
        });
        document.getElementById("seers_allow_all").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(false, "seers_allow_all");
        });
        document.getElementById("seers_disable_all").addEventListener('click', function(e) {
            e.preventDefault();
            savecookieajax(true, "seers_disable_all");
        });
    </script>
</body>

</html>