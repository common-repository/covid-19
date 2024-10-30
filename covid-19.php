<?php 
/*
Plugin Name: COVID-19
Description: Campaign to raise public awareness about the importance of questions and answers about coronavirus disease (COVID-19).
Tags: COVID-19, Covid-19, Corona Virus, Coronavirus, Corona, Virus
Author: Miguel Fuentes
Author URI: https://kodewp.com
Version: 1.2.2
Text Domain: covid19
Domain Path: /languages/
Requires PHP: 5.2
License: GPL v2 or later
*/

if (!defined('ABSPATH')) exit;

function kwp_covid19_wp2020(){
    $language = get_locale();
    if($language == 'es_ES' || $language == 'es_CL' || $language == 'es_VE' || $language == 'es_MX' || $language == 'es_AR' || $language == 'es_GT' || $language == 'es_CR' || $language == 'es_CO' || $language == 'es_PE'){
        $urlInfoCovid19 = 'https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019/advice-for-public/q-a-coronaviruses';
        $hashTagCodiv19 = 'YoMeInformo';
    } elseif($language == 'en_AU' || $language == 'en_GB' || $language == 'en_ZA' || $language == 'en_CA' || $language == 'en_NZ'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'IinformMyself';
    } elseif($language == 'it_IT'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'MiInformo';
    } elseif($language == 'fr_CA' || $language == 'fr_BE' || $language == 'fr_FR'){
        $urlInfoCovid19 = 'https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public/q-a-coronaviruses';
        $hashTagCodiv19 = "JeMinforme";
    } elseif($language == 'de_DE' || $language == 'de_AT' || $language == 'de_CH' || $language == 'de_CH_informal' || $language == 'de_DE_formal'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'IchInformiereMich';
    } elseif($language == 'nb_NO'){
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'JegInformererMeg';
    } else {
        $urlInfoCovid19 = 'https://www.who.int/news-room/q-a-detail/q-a-coronaviruses';
        $hashTagCodiv19 = 'IinformMyself';
    }
    if ( ! is_admin() ) { ?>
    <a class="covid_19" href="<?php echo $urlInfoCovid19 ?>" target="_blank" rel="nofollow"><img src="<?php echo esc_url( plugins_url( 'assets/images/h-logo-blue.svg', __FILE__ ) ); ?>"><p>#<?php echo $hashTagCodiv19; ?></p></a>
    <style>
        .covid_19 {position:fixed;bottom:10px;left:10px;width: 220px;padding:10px;background-color: #f5f5f5;z-index: 999;border: 1px solid #ccc;text-decoration:none;}
        .covid_19 img {max-width: 100%;max-height: 50px;margin: 0 10px;}
        .covid_19 p{font-size: 18px;font-weight: 800;text-align: center;color: #555555;margin:10px;margin-bottom:0px;}
        @media screen and (max-width: 768px) {.covid_19 {width:100%;bottom:0;left:0;display:flex;align-items:center;border-bottom:0px;border-left:0px;border-right:0px;padding:0px;}.covid_19 img, .covid_19 p{width: 46%; margin: 10px 2%;}.covid_19 p{margin-bottom: 0; margin-top: 0;}}
        @media screen and (max-width: 479px) {.covid_19 p{font-size:15px;}}
    </style>
    <?php
    } 
}
add_action('wp_footer', 'kwp_covid19_wp2020', 20);