<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name='viewport' content='width=device-width,initial-scale=1'/>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/inject.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/styles-2.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/styles-1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/mini_widget.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/stylesheet.css" />
    <style type="text/css">
        @font-face {
            font-family: "Currency Font";
            font-style: normal;
            font-weight: 400;
            font-display: swap;
            src: url("currency-regular-webfont.woff2") format("woff2"), url("currency-regular-webfont.woff") format("woff"), url("currency-regular-webfont.ttf") format("truetype");
        }
        .weedle-widget .weedle-currency_font {
            display: inline-block !important;
            white-space: nowrap !important;
            font-family: "Currency Font", "Open Sans", Helvetica, sans !important;
            font-weight: 600 !important;
            direction: ltr !important;
        }
        .weedle-widget .weedle-currency_font--default:before {
            margin-right: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--usd:before {
            margin-right: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--cad:before {
            margin-right: 0.2ex !important;
            content: "C$" !important;
        }
        .weedle-widget .weedle-currency_font--eur:before {
            margin-right: 0.2ex !important;
            content: "€" !important;
        }
        .weedle-widget .weedle-currency_font--amd:before {
            margin-right: 0.2ex !important;
            content: "Դ" !important;
        }
        .weedle-widget .weedle-currency_font--ars:before {
            margin-right: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--aud:before {
            margin-right: 0.2ex !important;
            content: "A$" !important;
        }
        .weedle-widget .weedle-currency_font--azn:before {
            margin-right: 0.2ex !important;
            content: "₼" !important;
        }
        .weedle-widget .weedle-currency_font--bdt:before {
            margin-right: 0.2ex !important;
            content: "BDT" !important;
        }
        .weedle-widget .weedle-currency_font--brl:before {
            margin-right: 0.2ex !important;
            content: "R$" !important;
        }
        .weedle-widget .weedle-currency_font--chf:before {
            margin-right: 0.2ex !important;
            content: "CHF" !important;
        }
        .weedle-widget .weedle-currency_font--clp:before {
            margin-right: 0.2ex !important;
            content: "C$" !important;
        }
        .weedle-widget .weedle-currency_font--cny:before {
            margin-right: 0.2ex !important;
            content: "¥" !important;
        }
        .weedle-widget .weedle-currency_font--cop:before {
            margin-right: 0.2ex !important;
            content: "COL$" !important;
        }
        .weedle-widget .weedle-currency_font--egp:before {
            margin-right: 0.2ex !important;
            content: "E£" !important;
        }
        .weedle-widget .weedle-currency_font--gbp:before {
            margin-right: 0.2ex !important;
            content: "£" !important;
        }
        .weedle-widget .weedle-currency_font--hkd:before {
            margin-right: 0.2ex !important;
            content: "HK$" !important;
        }
        .weedle-widget .weedle-currency_font--huf:before {
            margin-right: 0.2ex !important;
            content: "Ft" !important;
        }
        .weedle-widget .weedle-currency_font--idr:before {
            margin-right: 0.2ex !important;
            content: "Rp" !important;
        }
        .weedle-widget .weedle-currency_font--ils:before {
            margin-right: 0.2ex !important;
            content: "‏₪" !important;
        }
        .weedle-widget .weedle-currency_font--inr:before {
            margin-right: 0.2ex !important;
            content: "₹" !important;
        }
        .weedle-widget .weedle-currency_font--jpy:before {
            margin-right: 0.2ex !important;
            content: "¥" !important;
        }
        .weedle-widget .weedle-currency_font--krw:before {
            margin-right: 0.2ex !important;
            content: "₩" !important;
        }
        .weedle-widget .weedle-currency_font--lkr:before,
        .weedle-widget .weedle-currency_font--mur:before {
            margin-right: 0.2ex !important;
            content: "Rs" !important;
        }
        .weedle-widget .weedle-currency_font--mxn:before {
            margin-right: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--myr:before {
            margin-right: 0.2ex !important;
            content: "RM" !important;
        }
        .weedle-widget .weedle-currency_font--ngn:before {
            margin-right: 0.2ex !important;
            content: "₦" !important;
        }
        .weedle-widget .weedle-currency_font--npr:before {
            margin-right: 0.2ex !important;
            content: "रु" !important;
        }
        .weedle-widget .weedle-currency_font--nzd:before {
            margin-right: 0.2ex !important;
            content: "NZ$" !important;
        }
        .weedle-widget .weedle-currency_font--pen:before {
            margin-right: 0.2ex !important;
            content: "S/." !important;
        }
        .weedle-widget .weedle-currency_font--php:before {
            margin-right: 0.2ex !important;
            content: "₱" !important;
        }
        .weedle-widget .weedle-currency_font--pkr:before {
            margin-right: 0.2ex !important;
            content: "Rs" !important;
        }
        .weedle-widget .weedle-currency_font--sgd:before {
            margin-right: 0.2ex !important;
            content: "S$" !important;
        }
        .weedle-widget .weedle-currency_font--thb:before {
            margin-right: 0.2ex !important;
            content: "฿" !important;
        }
        .weedle-widget .weedle-currency_font--try:before {
            margin-right: 0.2ex !important;
            content: "₺" !important;
        }
        .weedle-widget .weedle-currency_font--xof:before {
            margin-right: 0.2ex !important;
            content: "FCFA" !important;
        }
        .weedle-widget .weedle-currency_font--zar:before {
            margin-right: 0.2ex !important;
            content: "R" !important;
        }
        .weedle-widget .weedle-currency_font--zmw:before {
            margin-right: 0.2ex !important;
            content: "ZK" !important;
        }
        .weedle-widget .weedle-currency_font--mnt:before {
            margin-right: 0.2ex !important;
            content: "₮" !important;
        }
        .weedle-widget .weedle-currency_font--aed:after {
            margin-left: 0.2ex !important;
            content: "د.إ" !important;
        }
        .weedle-widget .weedle-currency_font--afn:after {
            margin-left: 0.2ex !important;
            content: "؋" !important;
        }
        .weedle-widget .weedle-currency_font--all:after {
            margin-left: 0.2ex !important;
            content: "Lek" !important;
        }
        .weedle-widget .weedle-currency_font--bam:after {
            margin-left: 0.2ex !important;
            content: "KM" !important;
        }
        .weedle-widget .weedle-currency_font--bgn:after {
            margin-left: 0.2ex !important;
            content: "лв." !important;
        }
        .weedle-widget .weedle-currency_font--bhd:after {
            margin-left: 0.2ex !important;
            content: ".د.ب" !important;
        }
        .weedle-widget .weedle-currency_font--bif:after {
            margin-left: 0.2ex !important;
            content: "FBu" !important;
        }
        .weedle-widget .weedle-currency_font--bnd:after {
            margin-left: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--bob:after {
            margin-left: 0.2ex !important;
            content: "Bs" !important;
        }
        .weedle-widget .weedle-currency_font--bwp:after {
            margin-left: 0.2ex !important;
            content: "P" !important;
        }
        .weedle-widget .weedle-currency_font--byn:after {
            margin-left: 0.2ex !important;
            content: "Br" !important;
        }
        .weedle-widget .weedle-currency_font--bzd:after {
            margin-left: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--cdf:after {
            margin-left: 0.2ex !important;
            content: "FrCD" !important;
        }
        .weedle-widget .weedle-currency_font--crc:after {
            margin-left: 0.2ex !important;
            content: "₡" !important;
        }
        .weedle-widget .weedle-currency_font--cve:after {
            margin-left: 0.2ex !important;
            content: "CV$" !important;
        }
        .weedle-widget .weedle-currency_font--czk:after {
            margin-left: 0.2ex !important;
            content: "Kč" !important;
        }
        .weedle-widget .weedle-currency_font--djf:after {
            margin-left: 0.2ex !important;
            content: "Fdj" !important;
        }
        .weedle-widget .weedle-currency_font--dkk:after {
            margin-left: 0.2ex !important;
            content: "kr" !important;
        }
        .weedle-widget .weedle-currency_font--dop:after {
            margin-left: 0.2ex !important;
            content: "RD$" !important;
        }
        .weedle-widget .weedle-currency_font--dzd:after {
            margin-left: 0.2ex !important;
            content: "د.ج.‏" !important;
        }
        .weedle-widget .weedle-currency_font--eek:after {
            margin-left: 0.2ex !important;
            content: "kr" !important;
        }
        .weedle-widget .weedle-currency_font--ern:after {
            margin-left: 0.2ex !important;
            content: "Nfk" !important;
        }
        .weedle-widget .weedle-currency_font--etb:after {
            margin-left: 0.2ex !important;
            content: "Br" !important;
        }
        .weedle-widget .weedle-currency_font--gel:after {
            margin-left: 0.2ex !important;
            content: "₾" !important;
        }
        .weedle-widget .weedle-currency_font--ghs:after {
            margin-left: 0.2ex !important;
            content: "GH₵" !important;
        }
        .weedle-widget .weedle-currency_font--gnf:after {
            margin-left: 0.2ex !important;
            content: "FG" !important;
        }
        .weedle-widget .weedle-currency_font--gtq:after {
            margin-left: 0.2ex !important;
            content: "Q" !important;
        }
        .weedle-widget .weedle-currency_font--hnl:after {
            margin-left: 0.2ex !important;
            content: "L" !important;
        }
        .weedle-widget .weedle-currency_font--hrk:after {
            margin-left: 0.2ex !important;
            content: "kn" !important;
        }
        .weedle-widget .weedle-currency_font--iqd:after {
            margin-left: 0.2ex !important;
            content: "د.ع.‏" !important;
        }
        .weedle-widget .weedle-currency_font--irr:after {
            margin-left: 0.2ex !important;
            content: "﷼" !important;
        }
        .weedle-widget .weedle-currency_font--isk:after {
            margin-left: 0.2ex !important;
            content: "kr." !important;
        }
        .weedle-widget .weedle-currency_font--jmd:after {
            margin-left: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--jod:after {
            margin-left: 0.2ex !important;
            content: "د.ا.‏" !important;
        }
        .weedle-widget .weedle-currency_font--kes:after {
            margin-left: 0.2ex !important;
            content: "Ksh" !important;
        }
        .weedle-widget .weedle-currency_font--khr:after {
            margin-left: 0.2ex !important;
            content: "៛" !important;
        }
        .weedle-widget .weedle-currency_font--kmf:after {
            margin-left: 0.2ex !important;
            content: "FC" !important;
        }
        .weedle-widget .weedle-currency_font--kwd:after {
            margin-left: 0.2ex !important;
            content: "د.ك.‏" !important;
        }
        .weedle-widget .weedle-currency_font--kzt:after {
            margin-left: 0.2ex !important;
            content: "₸" !important;
        }
        .weedle-widget .weedle-currency_font--kgs:after {
            margin-left: 0.2ex !important;
            content: "com" !important;
        }
        .weedle-widget .weedle-currency_font--lbp:after {
            margin-left: 0.2ex !important;
            content: "ل.ل.‏" !important;
        }
        .weedle-widget .weedle-currency_font--lvl:after {
            margin-left: 0.2ex !important;
            content: "Ls" !important;
        }
        .weedle-widget .weedle-currency_font--lyd:after {
            margin-left: 0.2ex !important;
            content: "د.ل.‏" !important;
        }
        .weedle-widget .weedle-currency_font--mad:after {
            margin-left: 0.2ex !important;
            content: "د.م.‏" !important;
        }
        .weedle-widget .weedle-currency_font--mdl:after {
            margin-left: 0.2ex !important;
            content: "MDL" !important;
        }
        .weedle-widget .weedle-currency_font--mga:after {
            margin-left: 0.2ex !important;
            content: "MGA" !important;
        }
        .weedle-widget .weedle-currency_font--mkd:after {
            margin-left: 0.2ex !important;
            content: "MKD" !important;
        }
        .weedle-widget .weedle-currency_font--tjs:after {
            margin-left: 0.2ex !important;
            content: "TJS" !important;
        }
        .weedle-widget .weedle-currency_font--mmk:after {
            margin-left: 0.2ex !important;
            content: "K" !important;
        }
        .weedle-widget .weedle-currency_font--mop:after {
            margin-left: 0.2ex !important;
            content: "MOP$" !important;
        }
        .weedle-widget .weedle-currency_font--mzn:after {
            margin-left: 0.2ex !important;
            content: "MTn" !important;
        }
        .weedle-widget .weedle-currency_font--nad:after {
            margin-left: 0.2ex !important;
            content: "N$" !important;
        }
        .weedle-widget .weedle-currency_font--nio:after {
            margin-left: 0.2ex !important;
            content: "C$" !important;
        }
        .weedle-widget .weedle-currency_font--nok:after {
            margin-left: 0.2ex !important;
            content: "kr" !important;
        }
        .weedle-widget .weedle-currency_font--omr:after {
            margin-left: 0.2ex !important;
            content: "ر.ع.‏" !important;
        }
        .weedle-widget .weedle-currency_font--pab:after {
            margin-left: 0.2ex !important;
            content: "B/." !important;
        }
        .weedle-widget .weedle-currency_font--pln:after {
            margin-left: 0.2ex !important;
            content: "zł" !important;
        }
        .weedle-widget .weedle-currency_font--pyg:after {
            margin-left: 0.2ex !important;
            content: "₲" !important;
        }
        .weedle-widget .weedle-currency_font--qar:after {
            margin-left: 0.2ex !important;
            content: "ر.ق.‏" !important;
        }
        .weedle-widget .weedle-currency_font--ron:after {
            margin-left: 0.2ex !important;
            content: "lei" !important;
        }
        .weedle-widget .weedle-currency_font--rsd:after {
            margin-left: 0.2ex !important;
            content: "din" !important;
        }
        .weedle-widget .weedle-currency_font--rub:after {
            margin-left: 0.2ex !important;
            content: "₽" !important;
        }
        .weedle-widget .weedle-currency_font--rwf:after {
            margin-left: 0.2ex !important;
            content: "FR" !important;
        }
        .weedle-widget .weedle-currency_font--sar:after {
            margin-left: 0.2ex !important;
            content: "ر.س." !important;
        }
        .weedle-widget .weedle-currency_font--sdg:after {
            margin-left: 0.2ex !important;
            content: "SDG" !important;
        }
        .weedle-widget .weedle-currency_font--sek:after {
            margin-left: 0.2ex !important;
            content: "kr" !important;
        }
        .weedle-widget .weedle-currency_font--sos:after {
            margin-left: 0.2ex !important;
            content: "Ssh" !important;
        }
        .weedle-widget .weedle-currency_font--syp:after {
            margin-left: 0.2ex !important;
            content: "ل.س.‏" !important;
        }
        .weedle-widget .weedle-currency_font--tnd:after {
            margin-left: 0.2ex !important;
            content: "د.ت.‏" !important;
        }
        .weedle-widget .weedle-currency_font--top:after {
            margin-left: 0.2ex !important;
            content: "T$" !important;
        }
        .weedle-widget .weedle-currency_font--ttd:after {
            margin-left: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--twd:after {
            margin-left: 0.2ex !important;
            content: "NT$" !important;
        }
        .weedle-widget .weedle-currency_font--tzs:after {
            margin-left: 0.2ex !important;
            content: "TSh" !important;
        }
        .weedle-widget .weedle-currency_font--uah:after {
            margin-left: 0.2ex !important;
            content: "₴" !important;
        }
        .weedle-widget .weedle-currency_font--ugx:after {
            margin-left: 0.2ex !important;
            content: "USh" !important;
        }
        .weedle-widget .weedle-currency_font--uyu:after {
            margin-left: 0.2ex !important;
            content: "$" !important;
        }
        .weedle-widget .weedle-currency_font--uzs:after {
            margin-left: 0.2ex !important;
            content: "UZS" !important;
        }
        .weedle-widget .weedle-currency_font--vef:after {
            margin-left: 0.2ex !important;
            content: "Bs.F." !important;
        }
        .weedle-widget .weedle-currency_font--vnd:after {
            margin-left: 0.2ex !important;
            content: "₫" !important;
        }
        .weedle-widget .weedle-currency_font--xaf:after {
            margin-left: 0.2ex !important;
            content: "FCFA" !important;
        }
        .weedle-widget .weedle-currency_font--yer:after {
            margin-left: 0.2ex !important;
            content: "ر.ي.‏" !important;
        }
        .weedle-widget {
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important;
            background: red !important;
        } 
        @-webkit-keyframes waiting {
            0%,
            66%,
            to {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            33% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes waiting {
            0%,
            66%,
            to {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            33% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        .weedle-widget ::after,
        .weedle-widget ::before,
        .weedle-widget article,
        .weedle-widget aside,
        .weedle-widget canvas,
        .weedle-widget div,
        .weedle-widget em,
        .weedle-widget footer,
        .weedle-widget h1,
        .weedle-widget h2,
        .weedle-widget h3,
        .weedle-widget header,
        .weedle-widget hgroup,
        .weedle-widget li,
        .weedle-widget object,
        .weedle-widget p,
        .weedle-widget section,
        .weedle-widget span,
        .weedle-widget strong,
        .weedle-widget ul {
            float: none !important;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            margin: 0 !important;
            padding: 0 !important;
            border: 0 !important;
            background-color: transparent !important;
            vertical-align: baseline !important;
            letter-spacing: 0 !important;
            font: inherit !important;
            font-size: 100% !important;
            text-shadow: none !important;
        }
        .weedle-widget a,
        .weedle-widget img {
            float: none !important;
            -webkit-box-sizing: border-box !important;
            box-sizing: border-box !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            margin: 0 !important;
            padding: 0 !important;
            vertical-align: baseline !important;
            letter-spacing: 0 !important;
            font: inherit !important;
            font-size: 100% !important;
            text-shadow: none !important;
            border: 0 !important;
        }
        .weedle-widget ::after,
        .weedle-widget ::before {
            content: none !important;
        }
        .weedle-widget ol,
        .weedle-widget ul {
            list-style: none !important;
        }
        .weedle-widget .weedle-offers_list-item:hover .weedle-offers_list-item__alt,
        .weedle-widget article,
        .weedle-widget aside,
        .weedle-widget details,
        .weedle-widget footer,
        .weedle-widget header,
        .weedle-widget hgroup,
        .weedle-widget menu,
        .weedle-widget section {
            display: block !important;
        }
        .weedle-widget a,
        .weedle-widget img {
            background-color: transparent !important;
        }
        .weedle-widget a:active,
        .weedle-widget a:hover {
            outline: 0 !important;
        }
        .weedle-widget b,
        .weedle-widget strong {
            font-weight: 700 !important;
        }
        .weedle-widget svg:not(:root) {
            overflow: hidden !important;
        }
        .weedle-widget {
            position: relative !important;
            direction: ltr !important;
            overflow: hidden !important;
            margin: 0 auto !important;
            padding: 10px !important;
            min-width: 180px !important;
            height: 330px !important;
            border-radius: 3px !important;
            background: #fff !important;
            -webkit-box-shadow: 0 1px 2px 1px #d9dddf !important;
            box-shadow: 0 1px 2px 1px #d9dddf !important;
            font-family: "Open Sans", Helvetica, Arial, sans-serif !important;
        }
        .weedle-widget[direction="ltr"] {
            direction: ltr !important;
        }
        .weedle-widget[direction="ltr"] .weedle-offers_list-item__price {
            right: 0 !important;
        }
        .weedle-widget[direction="rtl"] {
            direction: rtl !important;
        }
        .weedle-widget[direction="rtl"] .weedle-offers_list-item__price {
            left: 0 !important;
        }
        .weedle-widget .weedle-header {
            display: table !important;
            width: 100% !important;
        }
        .weedle-widget .weedle-header > a {
            position: relative !important;
            display: table-cell !important;
            overflow: hidden !important;
            height: 150px !important;
            color: #fff !important;
            vertical-align: middle !important;
            text-align: center !important;
            text-decoration: none !important;
            line-height: normal !important;
        }
        .weedle-widget .weedle-header > a:after {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            z-index: 1 !important;
            background: rgba(0, 0, 0, 0.25) !important;
            content: "" !important;
        }
        .weedle-widget .weedle-header > a > .weedle-header__image {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            z-index: 1 !important;
            width: 100% !important;
            height: 150px !important;
            background-position: center center !important;
            background-size: cover !important;
            background-repeat: no-repeat !important;
            -webkit-transition: all 2s linear !important;
            transition: all 2s linear !important;
            -webkit-transform: scale(1) !important;
            transform: scale(1) !important;
        }
        .weedle-widget .weedle-header > a:hover .weedle-header__image {
            -webkit-transform: scale(1.2) !important;
            transform: scale(1.2) !important;
        }
        .weedle-widget .weedle-header__city {
            position: relative !important;
            z-index: 2 !important;
            display: block !important;
            font-weight: 600 !important;
            font-size: 26px !important;
            text-align: center !important;
        }
        .weedle-widget .weedle-header__country {
            position: relative !important;
            z-index: 2 !important;
            font-size: 14px !important;
        }
        .weedle-widget .weedle-offers_list {
            margin: 10px 0 0 !important;
        }
        .weedle-widget .weedle-offers_list-item {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
            margin-top: 0 !important;
            font-size: 14px !important;
            line-height: 1.2 !important;
        }
        .weedle-widget .weedle-offers_list-item:first-child {
            margin-top: 0 !important;
        }
        .weedle-widget .weedle-offers_list-item > a {
            position: relative !important;
            height: 2em !important;
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important;
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important;
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
            padding: 0 !important;
            color: #00b1dd !important;
            text-decoration: none !important;
        }
        .weedle-widget .weedle-offers_list-item > a:hover {
            color: #00c6f7 !important;
        }
        .weedle-widget .weedle-offers_list-item__origin {
            display: block !important;
            overflow: hidden !important;
            white-space: nowrap !important;
        }
        .weedle-widget .weedle-offers_list-item__price {
            position: absolute !important;
            padding: 7px 0 7px 5px !important;
            background: #fff !important;
            white-space: nowrap !important;
        }
        .weedle-widget .weedle-offers_list-item__price:before {
            position: absolute !important;
            left: -20px !important;
            width: 20px !important;
            height: 1.4em !important;
            background: -webkit-gradient(linear, left top, right top, from(rgba(255, 255, 255, 0)), to(#fff)) !important;
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, #fff 100%) !important;
            content: "" !important;
        }
        .weedle-widget .weedle-offers_list-item__alt {
            position: absolute !important;
            top: -1em !important;
            left: 0 !important;
            z-index: 1 !important;
            display: none !important;
            padding: 1px 2px !important;
            background: #f0eff0 !important;
            -webkit-box-shadow: 0 0 2px 2px #ccc !important;
            box-shadow: 0 0 2px 2px #ccc !important;
            color: #000 !important;
            font-size: 12px !important;
        }
        .weedle-widget .weedle-offers_list-item__alt:first-letter {
            text-transform: capitalize !important;
        }
        .weedle-widget .weedle-number {
            word-spacing: -0.25ex !important;
        }
        .weedle-widget .weedle-loader {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            bottom: 0 !important;
            left: 0 !important;
            z-index: 200 !important;
            background: #fff !important;
            vertical-align: middle !important;
            text-align: center !important;
            line-height: 330px !important;
            -webkit-transition: opacity 0.25s ease-out !important;
            transition: opacity 0.25s ease-out !important;
        }
        .weedle-widget .weedle-loader div {
            display: inline-block !important;
            margin: 3px !important;
            width: 15px !important;
            height: 15px !important;
            background-color: #009fd6 !important;
            -webkit-animation: waiting 1.2s linear infinite !important;
            animation: waiting 1.2s linear infinite !important;
        }
        .weedle-widget .weedle-loader div:nth-child(1) {
            -webkit-animation-delay: -0.32s !important;
            animation-delay: -0.32s !important;
        }
        .weedle-widget .weedle-loader div:nth-child(2) {
            -webkit-animation-delay: -0.16s !important;
            animation-delay: -0.16s !important;
        }
        .weedle-widget .weedle-offers_list-item__price_from {
            display: inline-block !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-widget {
            display: none;
        }
    </style>
    <style type="text/css">
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights {
            background: #ffffff !important;
            border-color: #cccccc !important;
            border-radius: 9px !important ;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-header__link,
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-link_to_multi {
            color: #000000 !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-submit_button button {
            background: #03bae4 !important;
            color: #ffffff !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-submit_button button:hover {
            background: #1cc1e7 !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-link_to_multi:before {
            background-image: url("") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-swap_button {
            background-image: url("/wp-content/uploads/2025/02/8d5477dc1cba0f9d701ed14e97702f2c522a09c0.svg") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-dates-depart-icons,
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-dates-return-icons {
            background-image: url("/wp-content/uploads/2025/02/181436b75d2e64f013d95165111cce9e7508a65b.svg") !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-dates-return-iconsx {
            background-image: url("/wp-content/uploads/2025/02/6394aed7c594c963ab123b5fa320c176d7a51b2f.svg") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-dates-return-iconsx:hover {
            opacity: 0.7;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-container input[type="text"],
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-trip_class {
            border-color: #cccccc !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-multi-segment-origin {
            border-color: #cccccc !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights-trip_class-wrapper:after {
            background-image: url("/wp-content/uploads/2025/02/45a6a22731734781aeabbb593b09c9859eed07d5.svg") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-spinner div {
            background: #ffffff !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-best_offers {
            color: #000000 !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers:before {
            background: linear-gradient(to right, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-flights--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers:after,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers:after {
            background: linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-show_hotels-wrapper {
            background: #ffffff !important;
        }

        .mewtwo-flights--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-show_hotels-wrapper:after,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-show_hotels-wrapper:after {
            background: linear-gradient(to bottom, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-show_hotels__label {
            color: #000000 !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-show_hotels-wrapper:before,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers-item-link__price:before,
        .mewtwo-flights--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers-item-link__price:before {
            background: linear-gradient(to left, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers-item-link__price {
            background: #ffffff !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-best_offers_plane--ow {
            background: no-repeat url("") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-best_offers_plane--rt {
            background: no-repeat url("") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-custom_checkbox {
            background: #fff no-repeat url("/wp-content/uploads/2025/02/b707c83853d9c23f5e480bb2507e2385dae5d426.svg") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-custom_checkbox_wrapper {
            border: 1px solid #000000 !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers_list {
            -webkit-animation-duration: s !important;
            animation-duration: s !important;
        }

        .mewtwo-flights--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-flights .mewtwo-best_offers_list {
            -webkit-animation-duration: s !important;
            animation-duration: s !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-custom_checkbox {
            background-image: url("/wp-content/uploads/2025/02/b707c83853d9c23f5e480bb2507e2385dae5d426.svg") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-custom_checkbox_wrapper {
            border-color: #00b9ff !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-passengers .mewtwo-popup-ages-counter__plus {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-passengers .mewtwo-popup-ages-counter__plus:hover {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-passengers .mewtwo-popup-ages-counter__minus {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-passengers .mewtwo-popup-ages-counter__minus:hover {
            background-image: url("") !important;
        }

        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-passengers .mewtwo-passengers-ready__button {
            background-color: #03bae4 !important;
            color: #ffffff !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-passengers .mewtwo-popup_header {
            background-color: #00b9ff !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active .mewtwo-autocomplete-list-item-info__right_block {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active .mewtwo-autocomplete-list-item-info__right_block:before {
            background: linear-gradient(to left, #00b9ff, rgba(0, 185, 255, 0)) !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active .mewtwo-autocomplete-list-item-info__right_block {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active .mewtwo-autocomplete-list-item-info__right_block:before {
            background: linear-gradient(to left, #00b9ff, rgba(0, 185, 255, 0)) !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-current:hover div {
            background: #00b9ff !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-simple .mewtwo-datepicker-table .mewtwo-datepicker-selected div {
            background: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div:hover {
            background: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div:hover {
            background: #00b9ff 0 0 no-repeat url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div {
            background-image: url("") !important;
        }

        .mewtwo-modal--midMin .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div,
        .mewtwo-modal--min .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div,
        .mewtwo-modal--micro .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div {
            background-image: none !important;
            border-bottom: 1px solid #00b9ff !important;
        }

        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-start-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-start-sausage div:hover,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-end-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-end-sausage div:hover,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div:hover,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div:hover {
            background: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-next,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-prev {
            color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-prev-month-control,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-next-month-control {
            background-image: url("") !important;
        }

        .mewtwo-modal--micro .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-container-return_button__text {
            background-image: url("/wp-content/uploads/2025/02/6394aed7c594c963ab123b5fa320c176d7a51b2f.svg") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker .mewtwo-popup_header {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker .mewtwo-popup_header span {
        }
    </style>
    <style type="text/css">
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels {
            background: #ffffff !important;
            border-color: #cccccc !important;
            border-radius: 9px !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-header__link {
            color: #000000 !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-submit_button button {
            background: #03bae4 !important;
            color: #ffffff !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-submit_button button:hover {
            background: #1cc1e7 !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-dates-checkin-icons,
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-dates-checkout-icons {
            background-image: url("/wp-content/uploads/2025/02/181436b75d2e64f013d95165111cce9e7508a65b.svg") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-city-icon {
            background-image: url("/wp-content/uploads/2025/02/523b1e33571bbaaaf7018ede36d5e6a810164866.svg") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-container input[type="text"] {
            border-color: #cccccc !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-guests:after {
            background-image: url("/wp-content/uploads/2025/02/45a6a22731734781aeabbb593b09c9859eed07d5.svg") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item--cities:first-child:before {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item--hotels:first-child:before,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item--cities + .mewtwo-autocomplete-list-item--hotels:before {
            background-image: url("") !important;
            background-position: 50% 40%;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active.mewtwo-autocomplete-list-item--cities:first-child:before {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active.mewtwo-autocomplete-list-item--hotels:first-child:before,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item--cities + .mewtwo-autocomplete-list-item-info--active.mewtwo-autocomplete-list-item--hotels:before {
            background-image: url("") !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-best_offers {
            color: #000000 !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers:before {
            background: linear-gradient(to right, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-hotels--s .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers:after,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers:after,
        .mewtwo-hotels--s .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers:after,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers:after {
            background: linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-show_hotels-wrapper {
            background: #ffffff !important;
        }

        .mewtwo-hotels--s .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-show_hotels-wrapper:after,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-show_hotels-wrapper:after,
        .mewtwo-hotels--s .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-show_hotels-wrapper:after,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-show_hotels-wrapper:after {
            background: linear-gradient(to bottom, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-show_hotels-wrapper:before,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers-item-link__price:before,
        .mewtwo-hotels--s .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers-item-link__price:before,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers-item-link__price:before,
        .mewtwo-hotels--s .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers-item-link__price:before {
            background: linear-gradient(to left, #ffffff, rgba(255, 255, 255, 0)) !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers-item-link__price {
            background: #ffffff !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-best_offers_plane--ow {
            background: no-repeat url("") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-best_offers_plane--rt {
            background: no-repeat url("") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-custom_checkbox {
            background: #fff no-repeat url("b707c83853d9c23f5e480bb2507e2385dae5d426.svg") !important;
        }
        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-custom_checkbox_wrapper {
            border: 1px solid #000000 !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers_list {
            -webkit-animation-duration: s !important;
            animation-duration: s !important;
        }

        .mewtwo-hotels--s .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers_list,
        .mewtwo-hotels--xs .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels .mewtwo-best_offers_list {
            -webkit-animation-duration: s !important;
            animation-duration: s !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active .mewtwo-autocomplete-list-item-info__right_block {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-autocomplete-list-item-info--active .mewtwo-autocomplete-list-item-info__right_block:before {
            background: linear-gradient(to left, #00b9ff, rgba(0, 185, 255, 0)) !important;
        }
    </style>
    <style type="text/css">
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-current:hover div {
            background: #00b9ff !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-simple .mewtwo-datepicker-table .mewtwo-datepicker-selected div {
            background: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div:hover {
            background: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div:hover {
            background: #00b9ff 0 0 no-repeat url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div {
            background-image: url("") !important;
        }

        .mewtwo-modal--midMin .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div,
        .mewtwo-modal--min .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div,
        .mewtwo-modal--micro .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker.mewtwo-datepicker-range .mewtwo-datepicker-range div {
            background-image: none !important;
            border-bottom: 1px solid #00b9ff !important;
        }

        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-start-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-start-sausage div:hover,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-end-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-range.mewtwo-datepicker-end-sausage div:hover,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-start-sausage div:hover,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div,
        .mewtwo-modal--popup .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-end-sausage div:hover {
            background: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-next,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-table .mewtwo-datepicker-prev {
            color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-prev-month-control,
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-next-month-control {
            background-image: url("") !important;
        }

        .mewtwo-modal--micro .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker-container-return_button__text {
            background-image: url("6394aed7c594c963ab123b5fa320c176d7a51b2f.svg") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker .mewtwo-popup_header {
            background-color: #00b9ff !important;
        }
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-datepicker .mewtwo-popup_header span {
        }
    </style>
    <style type="text/css">
        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-guests .mewtwo-popup-ages-counter__plus {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-guests .mewtwo-popup-ages-counter__plus:hover {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-guests .mewtwo-popup-ages-counter__minus {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-guests .mewtwo-popup-ages-counter__minus:hover {
            background-image: url("") !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-guests .mewtwo-guests-success_button .mewtwo-popup_apply_button--mobile {
            background-color: #03bae4 !important;
            color: #ffffff !important;
        }

        .mewtwo-modal--05270247cb70a304b9abdb07e9bf1264 .mewtwo-guests .mewtwo-popup_header {
            background-color: #00b9ff !important;
        }

        .mewtwo-widget--05270247cb70a304b9abdb07e9bf1264 .mewtwo-hotels-guests {
            border-color: #cccccc !important;
        }
    </style>
</head>
<body class="min-width-normal">
    <div id="wrapper">
        <div id="header">
            <div id="topnav">
                <ul class="menu5 flex">
                    <li class="left"></li>
                    <li class="feed0">
                        <a href="/ctg/0/1/"><span>Политика</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/2/"><span>В мире</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/3/"><span>Общество</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/13/"><span>Экономика</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/5/"><span>Происшествия</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/6/"><span>Культура</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/7/"><span>Hi-Tech</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/8/"><span>Интернет</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/9/"><span>Здоровье</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/10/"><span>Развлечения</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/11/"><span>Авто</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/12/"><span>Спорт</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/21/"><span>Игры</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/19/"><span>Блоги</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/15/"><span>Криминал</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/17/"><span>Недвижимость</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/20/"><span>Кхл</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/18/"><span>Музыка и кино</span></a>
                    </li>
                    <li>
                        <a href="/ctg/0/30/"><span>Новороссия</span></a>
                    </li>
                    <li>
                        <a href="/rss/rss.php"><span>Rss</span></a>
                    </li>
                </ul>
            </div>
            <div class="clear"></div>
            <a href="/" title="Главная" id="logo">
                <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/02/logo.png" alt="Лого" />
            </a>
            <div id="adr">
                <div id="39134c3f3326597"></div>
            </div>
            <div id="searchadr">
                <form class="searchform" id="quick-search" action="/">
                    <div class="select-outer_input">
                        <input type="text" id="search-text" name="q" class="t" value="Что ищем?" />
                    </div>
                    <div class="select-outer">
                        <select id="search-action">
                            <option value="/search/" selected="selected"> | по новостям</option>
                            <option value="/tor_search/t_films.php"> | по фильмам </option>
                            <option value="/tv-search/"> | по каналам </option>
                            <option value="http://radio.newsrbc.ru/radio_search/"> | по радио </option>
                            <option value="/tvsearch/"> | по ТВ </option>
                            <option value="/title-recept/"> | по рецептам </option>
                            <option value="http://games.newsrbc.ru/title-games/"> | по играм </option>
                            <option value="/music/search/"> | по MP3 </option>
                        </select>
                        <a class="select-button"></a>
                    </div>
                    <input type="submit" value="" class="searchbutton_b" />
                </form>
            </div>
        </div>
        <div id="menu">
            <ul>
                <li class="current-cat">
                    <a href="/" title="" class="nav_parent">Главная</a>
                </li>
                <li class="cat-item">
                    <a href="/ctg/0/0/" title="" class="nav_parent">Все темы</a>
                    <ul class="children" style="width: 260px;">
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding-right: 20px;">
                                        <li class="cat-item cat-item-1"><a href="/ctg/0/1/" class="nav_child nav_parent">Политика</a></li>
                                        <li class="cat-item cat-item-2"><a href="/ctg/0/2/" class="nav_child nav_parent">В мире</a></li>
                                        <li class="cat-item cat-item-3"><a href="/ctg/0/3/" class="nav_child nav_parent">Общество</a></li>
                                        <li class="cat-item cat-item-13"><a href="/ctg/0/13/" class="nav_child nav_parent">Экономика</a></li>
                                        <li class="cat-item cat-item-5"><a href="/ctg/0/5/" class="nav_child nav_parent">Происшествия</a></li>
                                        <li class="cat-item cat-item-6"><a href="/ctg/0/6/" class="nav_child nav_parent">Культура</a></li>
                                        <li class="cat-item cat-item-7"><a href="/ctg/0/7/" class="nav_child nav_parent">Наука и технологии</a></li>
                                        <li class="cat-item cat-item-8"><a href="/ctg/0/8/" class="nav_child nav_parent">Интернет</a></li>
                                        <li class="cat-item cat-item-9"><a href="/ctg/0/9/" class="nav_child nav_parent">Здоровье</a></li>
                                        <li class="cat-item cat-item-10"><a href="/ctg/0/10/" class="nav_child nav_parent">Развлечения</a></li>
                                        <li class="cat-item cat-item-11"><a href="/ctg/0/11/" class="nav_child nav_parent">Авто</a></li>
                                        <li class="cat-item cat-item-12"><a href="/ctg/0/12/" class="nav_child nav_parent">Спорт</a></li>
                                        <li class="cat-item cat-item-14"><a href="/ctg/0/14/" class="nav_child nav_parent">Туризм</a></li>
                                    </td>
                                    <td>
                                        <li class="cat-item cat-item-19"><a href="/ctg/0/19/" class="nav_child nav_parent">Блоги</a></li>
                                        <li class="cat-item cat-item-15"><a href="/ctg/0/15/" class="nav_child nav_parent">Криминал</a></li>
                                        <li class="cat-item cat-item-17"><a href="/ctg/0/17/" class="nav_child nav_parent">Недвижимость</a></li>
                                        <li class="cat-item cat-item-18"><a href="/ctg/0/18/" class="nav_child nav_parent">Музыка и кино</a></li>
                                        <li class="cat-item cat-item-20"><a href="/ctg/0/20/" class="nav_child nav_parent">Безумный мир</a></li>
                                        <li class="cat-item cat-item-21"><a href="/ctg/0/21/" class="nav_child nav_parent">Игры</a></li>
                                        <li class="cat-item cat-item-22"><a href="/ctg/0/22/" class="nav_child nav_parent">Шоу бизнес</a></li>
                                        <li class="cat-item cat-item-23"><a href="/ctg/0/23/" class="nav_child nav_parent">Мода</a></li>
                                        <li class="cat-item cat-item-30"><a href="/ctg/0/30/" style="color: #c30909;" class="nav_child nav_parent">Новороссия</a></li>
                                        <li class="cat-item cat-item-25"><a href="/ctg/0/25/" class="nav_child nav_parent">Афиша</a></li>
                                        <li class="cat-item cat-item-26"><a href="/ctg/0/26/" class="nav_child nav_parent">Диета</a></li>
                                        <li class="cat-item cat-item-27"><a href="/ctg/0/27/" class="nav_child nav_parent">Сочи 2014</a></li>
                                        <li class="cat-item cat-item-28"><a href="/ctg/0/29/" class="nav_child nav_parent">КХЛ</a></li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/reg/1/" class="nav_parent">Россия</a>
                    <ul class="children">
                        <li class="cat-item cat-item-1"><a href="/reg/1/" class="nav_child nav_parent">Россия</a></li>
                        <li class="cat-item cat-item-2"><a href="/reg/2/" class="nav_child nav_parent">Украина</a></li>
                        <li class="cat-item cat-item-3"><a href="/reg/4/" class="nav_child nav_parent">Белоруссия</a></li>
                        <li class="cat-item cat-item-4"><a href="/reg/5/" class="nav_child nav_parent">Казахстан</a></li>
                        <li class="cat-item cat-item-5"><a href="/reg/6/" class="nav_child nav_parent">Новороссия</a></li>
                        <li class="cat-item cat-item-7"><a href="/reg/3/" class="nav_child nav_parent">Другие страны</a></li>
                        <li class="cat-item cat-item-8"><a href="/arc/0/" class="nav_child nav_parent">Лента новостей</a></li>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/channels.html" style="color: #c30909;" class="nav_parent">Каналы</a>
                    <ul class="children">
                        <li class="cat-item cat-item-5"><a href="/tv-category/5/" class="nav_child nav_parent">Общие</a></li>
                        <li class="cat-item cat-item-7"><a href="/tv-category/7/" class="nav_child nav_parent">Новостные</a></li>
                        <li class="cat-item cat-item-8"><a href="/tv-category/8/" class="nav_child nav_parent">Развлекательные</a></li>
                        <li class="cat-item cat-item-12"><a href="/tv-category/12/" class="nav_child nav_parent">Религиозные</a></li>
                        <li class="cat-item cat-item-1"><a href="/tv-category/1/" class="nav_child nav_parent">Детские</a></li>
                        <li class="cat-item cat-item-3"><a href="/tv-category/3/" class="nav_child nav_parent">Фильмы</a></li>
                        <li class="cat-item cat-item-4"><a href="/tv-category/4/" class="nav_child nav_parent">Спорт</a></li>
                        <li class="cat-item cat-item-6"><a href="/tv-category/6/" class="nav_child nav_parent">Познавательные</a></li>
                        <li class="cat-item cat-item-2"><a href="/tv-category/2/" class="nav_child nav_parent">Музыка</a></li>
                        <li class="cat-item cat-item-10"><a href="/tv-category/10/" class="nav_child nav_parent">Мужские</a></li>
                        <li class="cat-item cat-item-11"><a href="/tv-category/11/" class="nav_child nav_parent">Региональные</a></li>
                        <li class="cat-item cat-item-13"><a href="/tv-category/13/" class="nav_child nav_parent">HD каналы</a></li>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/news_add.html" class="nav_parent">[+] Добавить новость</a>
                    <ul class="children">
                        <li class="cat-item cat-item-1"><a href="/firms_add.html" class="nav_child nav_parent">Добавить фирму</a></li>
                        <li class="cat-item cat-item-2"><a href="/anekdot_add.html" class="nav_child nav_parent">Добавить анекдот</a></li>
                        <li class="cat-item cat-item-3"><a href="/quote_add.html" class="nav_child nav_parent">Добавить цитату</a></li>
                        <li class="cat-item cat-item-4"><a href="/videos_add.html" class="nav_child nav_parent">Добавить видео</a></li>
                        <li class="cat-item cat-item-5"><a href="/gal_add.html" class="nav_child nav_parent">Добавить фото</a></li>
                        <li class="cat-item cat-item-6"><a href="/radio_add.html" class="nav_child nav_parent">Добавить радио</a></li>
                        <li class="cat-item cat-item-7"><a href="/demgen.html" class="nav_child nav_parent">Создать демотиватор</a></li>
                        <li class="cat-item cat-item-8"><a href="/add_src/" class="nav_child nav_parent">Добавить источник</a></li>
                        <li class="cat-item cat-item-9"><a href="/recept_add.html" class="nav_child nav_parent">Добавить рецепт</a></li>
                        <li class="cat-item cat-item-10"><a href="/catalog/add/" class="nav_child nav_parent">Добавить сайт в каталог</a></li>
                        <li class="cat-item cat-item-9"><a href="/" class="nav_child nav_parent">Добавить авто</a></li>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/inf.html" class="nav_parent">Иформеры</a>
                    <ul class="children">
                        <li class="cat-item cat-item-1"><a href="/water_inf.html" class="nav_child nav_parent">Информер погоды</a></li>
                        <li class="cat-item cat-item-2"><a href="/monavista.php" style="color: #c30909;" class="nav_child nav_parent">Новинка информер</a></li>
                        <li class="cat-item cat-item-3"><a href="/informer/" class="nav_child nav_parent">Ещё информер</a></li>
                        <li class="cat-item cat-item-4"><a href="/rating/partner.php" class="nav_child nav_parent">Информер - Топ новости</a></li>
                        <li class="cat-item cat-item-2"><a href="/recept/recept-informers.php" class="nav_child nav_parent">Информер рецептов</a></li>
                        <li class="cat-item cat-item-2"><a href="/kurs_valut_informer.php" class="nav_child nav_parent">Информер курсов валют</a></li>
                        <li class="cat-item cat-item-5"><a href="/inf_rss.html" class="nav_child nav_parent">RSS-подписка</a></li>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="#" class="nav_parent">Сервис</a>
                    <ul class="children" style="width: 567px;">
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding-right: 20px;">
                                        <li class="cat-item cat-item-0"><a href="/job/" style="color: #c30909;" class="nav_child nav_parent">Работа</a></li>
                                        <li class="cat-item cat-item-0"><a href="/rating/" class="nav_child nav_parent">Топ новости</a></li>
                                        <li class="cat-item cat-item-2"><a href="/demotivatory.html" class="nav_child nav_parent">Демотиваторы</a></li>
                                        <li class="cat-item cat-item-1"><a href="/anekdoty.html" class="nav_child nav_parent">Анекдоты</a></li>
                                        <li class="cat-item cat-item-2"><a href="/quotes.html" class="nav_child nav_parent">Цитаты</a></li>
                                        <li class="cat-item cat-item-3"><a href="/videos.html" class="nav_child nav_parent">Видео приколы</a></li>
                                        <li class="cat-item cat-item-4"><a href="/galleries.html" class="nav_child nav_parent">Фото личности</a></li>
                                        <li class="cat-item cat-item-5"><a href="/opros.php" class="nav_child nav_parent">Опросы</a></li>
                                        <li class="cat-item cat-item-6"><a href="/partner.html" class="nav_child nav_parent">Партнёрская про-ма</a></li>
                                        <li class="cat-item cat-item-7"><a href="/baneroobmen.html" class="nav_child nav_parent">Баннерообмен</a></li>
                                        <li class="cat-item cat-item-9">
                                            <a href="/avia.html" class="nav_child nav_parent">Авиа билеты</a>
                                        </li>
                                    </td>
                                    <td style="padding-right: 20px;">
                                        <li class="cat-item cat-item-8"><a href="/auto/" style="color: #c30909;" class="nav_child nav_parent">Авто</a></li>
                                        <li class="cat-item cat-item-9"><a href="/sitemap.html" class="nav_child nav_parent">Карта сайта</a></li>
                                        <li class="cat-item cat-item-10"><a href="/ctg/0/32/" class="nav_child nav_parent">Дом 2 онлайн</a></li>
                                        <li class="cat-item cat-item-11"><a href="/yandexmap.html" class="nav_child nav_parent">Карта мира</a></li>
                                        <li class="cat-item cat-item-12"><a href="/" class="nav_child nav_parent">Наш Фото хостинг</a></li>
                                        <li class="cat-item cat-item-13"><a href="/" class="nav_child nav_parent">Недвижимость</a></li>
                                        <li class="cat-item cat-item-14"><a href="/forum/index.php" class="nav_child nav_parent">Форум NewsRbk</a></li>
                                        <li class="cat-item cat-item-15"><a href="/music/" style="color: #c30909;" class="nav_child nav_parent">Mp3 Поисковик</a></li>
                                        <li class="cat-item cat-item-16"><a href="/reklama.html" class="nav_child nav_parent">Реклама</a></li>
                                        <li class="cat-item cat-item-10"><a href="/ctg_cat/0/" class="nav_child nav_parent">Каталог фирм</a></li>
                                        <li class="cat-item cat-item-10"><a href="/catalog/" class="nav_child nav_parent">Каталог сайтов</a></li>
                                    </td>
                                    <td>
                                        <li class="cat-item cat-item-8"><a href="/realty" style="color: #c30909;" class="nav_child nav_parent">Недвижимость</a></li>
                                        <li class="cat-item cat-item-1"><a href="/board/" class="nav_child nav_parent">Доска объявлений</a></li>
                                        <li class="cat-item cat-item-2"><a href="/radios.html" class="nav_child nav_parent">Радио онлайн</a></li>
                                        <li class="cat-item cat-item-3"><a href="/tvprogram.php" class="nav_child nav_parent">ТВ программа</a></li>
                                        <li class="cat-item cat-item-4"><a href="/chat.html" class="nav_child nav_parent">Онлайн чат</a></li>
                                        <li class="cat-item cat-item-5"><a href="/live-sport.php" class="nav_child nav_parent">Live Sport TV</a></li>
                                        <li class="cat-item cat-item-6"><a href="/torrent-tv.php" class="nav_child nav_parent">Наше ТВ Онлайн</a></li>
                                        <li class="cat-item cat-item-7"><a href="/channels.html" class="nav_child nav_parent">Все каналы</a></li>
                                        <li class="cat-item cat-item-8"><a href="/onlinetv" class="nav_child nav_parent">ТВ Онлайн</a></li>
                                        <li class="cat-item cat-item-5"><a href="/webcams/" style="color: #c30909;" class="nav_child nav_parent">Веб камеры</a></li>
                                        <li class="cat-item cat-item-5"><a href="/rating/" class="nav_child nav_parent">Рейтинг новостей</a></li>
                                    </td>
                                    <td>
                                        <li class="cat-item cat-item-100"><a href="/ipadress/" class="nav_child nav_parent">Узнать Ip адресс</a></li>
                                        <li class="cat-item cat-item-100"><a href="/calculator-procentov.html" class="nav_child nav_parent">Расчет процентов</a></li>
                                        <li class="cat-item cat-item-100"><a href="/calculator.html" class="nav_child nav_parent">Калькулятор онлайн</a></li>
                                        <li class="cat-item cat-item-100"><a href="/converter-valut.html" class="nav_child nav_parent">Конвертер Валют</a></li>
                                        <li class="cat-item cat-item-1"><a href="/" class="nav_child nav_parent">Гороскоп</a></li>
                                        <li class="cat-item cat-item-5"><a href="/population/Russian_Federation/" class="nav_child nav_parent">Население России</a></li>
                                        <li class="cat-item cat-item-6"><a href="/economy/Russian_Federation/" class="nav_child nav_parent">Экономика России</a></li>
                                        <li class="cat-item cat-item-100"><a href="/" class="nav_child nav_parent">Смотреть онлайн Тв</a></li>
                                        <li class="cat-item cat-item-10"><a href="/pdd.php" class="nav_child nav_parent">ПДД - Онлайн</a></li>
                                        <li class="cat-item cat-item-5"><a href="/golosovye-pozdravlenija.html" class="nav_child nav_parent">Поздравления</a></li>
                                        <li class="cat-item cat-item-5"><a href="/wordslife.html" class="nav_child nav_parent">Теги</a></li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/wallpapers/" class="nav_parent">Все обои</a>
                    <ul class="children" style="width: 220px;">
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding-right: 25px;">
                                        <li class="cat-item cat-item-1"><a href="/wallpapers/categories/hi_tech/" class="nav_child nav_parent">Hi-tech</a></li>
                                        <li class="cat-item cat-item-2"><a href="/wallpapers/categories/abstrakcija/" class="nav_child nav_parent">Абстракция</a></li>
                                        <li class="cat-item cat-item-3"><a href="/wallpapers/categories/aviacija/" class="nav_child nav_parent">Авиация</a></li>
                                        <li class="cat-item cat-item-4"><a href="/wallpapers/categories/anime/" class="nav_child nav_parent">Аниме</a></li>
                                        <li class="cat-item cat-item-5"><a href="/wallpapers/categories/gorod/" class="nav_child nav_parent">Город</a></li>
                                        <li class="cat-item cat-item-6"><a href="/wallpapers/categories/girls/" class="nav_child nav_parent">Девушки</a></li>
                                        <li class="cat-item cat-item-7"><a href="/wallpapers/categories/zhivotnye/" class="nav_child nav_parent">Животные</a></li>
                                        <li class="cat-item cat-item-8"><a href="/wallpapers/categories/igry/" class="nav_child nav_parent">Игры</a></li>
                                        <li class="cat-item cat-item-9"><a href="/wallpapers/categories/kinozvezdy/" class="nav_child nav_parent">Кинозвезды</a></li>
                                        <li class="cat-item cat-item-10"><a href="/wallpapers/categories/kosmos/" class="nav_child nav_parent">Космос</a></li>
                                        <li class="cat-item cat-item-11"><a href="/wallpapers/categories/makro/" class="nav_child nav_parent">Макро</a></li>
                                        <li class="cat-item cat-item-12"><a href="/wallpapers/categories/mashiny/" class="nav_child nav_parent">Машины</a></li>
                                        <li class="cat-item cat-item-13"><a href="/wallpapers/categories/minimalizm/" class="nav_child nav_parent">Минимализм</a></li>
                                        <li class="cat-item cat-item-14"><a href="/wallpapers/categories/moto/" class="nav_child nav_parent">Мотоциклы</a></li>
                                        <li class="cat-item cat-item-15"><a href="/wallpapers/categories/muzhchiny/" class="nav_child nav_parent">Мужчины</a></li>
                                        <li class="cat-item cat-item-16"><a href="/wallpapers/categories/muzyka/" class="nav_child nav_parent">Музыка</a></li>
                                    </td>
                                    <td>
                                        <li class="cat-item cat-item-17"><a href="/wallpapers/categories/nastroenija/" class="nav_child nav_parent">Настроения</a></li>
                                        <li class="cat-item cat-item-18"><a href="/wallpapers/categories/oruzhie/" class="nav_child nav_parent">Оружие</a></li>
                                        <li class="cat-item cat-item-19"><a href="/wallpapers/categories/pejzazhi/" class="nav_child nav_parent">Пейзажи</a></li>
                                        <li class="cat-item cat-item-20"><a href="/wallpapers/categories/prazdniki/" class="nav_child nav_parent">Праздники</a></li>
                                        <li class="cat-item cat-item-21"><a href="/wallpapers/categories/priroda/" class="nav_child nav_parent">Природа</a></li>
                                        <li class="cat-item cat-item-22"><a href="/wallpapers/categories/raznoe/" class="nav_child nav_parent">Разное</a></li>
                                        <li class="cat-item cat-item-23"><a href="/wallpapers/categories/rendering/" class="nav_child nav_parent">Рендеринг</a></li>
                                        <li class="cat-item cat-item-24"><a href="/wallpapers/categories/situacii/" class="nav_child nav_parent">Ситуации</a></li>
                                        <li class="cat-item cat-item-25"><a href="/wallpapers/categories/sport/" class="nav_child nav_parent">Спорт</a></li>
                                        <li class="cat-item cat-item-26"><a href="/wallpapers/categories/stil/" class="nav_child nav_parent">Стиль</a></li>
                                        <li class="cat-item cat-item-27"><a href="/wallpapers/categories/tekstury/" class="nav_child nav_parent">Текстуры</a></li>
                                        <li class="cat-item cat-item-28"><a href="/wallpapers/categories/fantastika/" class="nav_child nav_parent">Фантастика</a></li>
                                        <li class="cat-item cat-item-29"><a href="/wallpapers/categories/film/" class="nav_child nav_parent">Фильмы</a></li>
                                        <li class="cat-item cat-item-30"><a href="/wallpapers/categories/cvety/" class="nav_child nav_parent">Цветы</a></li>
                                        <li class="cat-item cat-item-31"><a href="/wallpapers/categories/jerotika/" class="nav_child nav_parent">+ 18</a></li>
                                        <li class="cat-item cat-item-32"><a href="#" class="nav_child nav_parent"></a></li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/" style="color: #c30909;" class="nav_parent">Спорт Live</a>
                    <ul class="children" style="display: none;">
                        <li class="cat-item cat-item-0"><a href="/khl-online-translation/" class="nav_child nav_parent">КХЛ - онлайн</a></li>
                        <li class="cat-item cat-item-1"><a href="/hockey/1277/table/all.html" class="nav_child nav_parent">Турнирная таблица КХЛ</a></li>
                        <li class="cat-item cat-item-4"><a href="/hockey/1277/result.html" class="nav_child nav_parent">Результаты игр КХЛ</a></li>
                        <li class="cat-item cat-item-4"><a href="/hockey/1277/statistic/player/bombardir.html" class="nav_child nav_parent">Статистика игроков</a></li>
                        <li class="cat-item cat-item-2"><a href="/khl-online-translation/" class="nav_child nav_parent">Онлайн Трансляции - КХЛ</a></li>
                        <li class="cat-item cat-item-3"><a href="/ctg/0/29/" class="nav_child nav_parent">Категория - КХЛ</a></li>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/" style="color: #c30909;" class="nav_parent">Флеш игры</a>
                    <ul class="children">
                        <li class="cat-item cat-item-1"><a href="http://games.newsrbc.ru/c1/" class="nav_child nav_parent">Аркадные игры</a></li>
                        <li class="cat-item cat-item-2"><a href="http://games.newsrbc.ru/c2/" class="nav_child nav_parent">Бродилки игры</a></li>
                        <li class="cat-item cat-item-3"><a href="http://games.newsrbc.ru/c3/" class="nav_child nav_parent">Игры гонки</a></li>
                        <li class="cat-item cat-item-4"><a href="http://games.newsrbc.ru/c4/" class="nav_child nav_parent">Игры драки</a></li>
                        <li class="cat-item cat-item-5"><a href="http://games.newsrbc.ru/c5/" class="nav_child nav_parent">Игры для девочек</a></li>
                        <li class="cat-item cat-item-6"><a href="http://games.newsrbc.ru/c6/" class="nav_child nav_parent">Издевательства игры</a></li>
                        <li class="cat-item cat-item-7"><a href="http://games.newsrbc.ru/c7/" class="nav_child nav_parent">Квесты игры</a></li>
                        <li class="cat-item cat-item-8"><a href="http://games.newsrbc.ru/c8/" class="nav_child nav_parent">Классические игры</a></li>
                        <li class="cat-item cat-item-9"><a href="http://games.newsrbc.ru/c9/" class="nav_child nav_parent">Леталки игры</a></li>
                        <li class="cat-item cat-item-10"><a href="http://games.newsrbc.ru/c10/" class="nav_child nav_parent">Логические игры</a></li>
                        <li class="cat-item cat-item-11"><a href="http://games.newsrbc.ru/c11/" class="nav_child nav_parent">Настольные игры</a></li>
                        <li class="cat-item cat-item-12"><a href="http://games.newsrbc.ru/c12/" class="nav_child nav_parent">Ролевые игры</a></li>
                        <li class="cat-item cat-item-13"><a href="http://games.newsrbc.ru/c13/" class="nav_child nav_parent">Спортивные игры</a></li>
                        <li class="cat-item cat-item-14"><a href="http://games.newsrbc.ru/c14/" class="nav_child nav_parent">Стратегии игры</a></li>
                        <li class="cat-item cat-item-15"><a href="http://games.newsrbc.ru/c15/" class="nav_child nav_parent">Стрелялки игры</a></li>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/blogs/" class="nav_parent">Блоги</a>
                    <ul class="children">
                        <li class="cat-item cat-item-1"><a href="/createblog.html" class="nav_child nav_parent">Создать свой блог</a></li>
                        <li class="cat-item cat-item-2"><a href="/blogs_add.html" class="nav_child nav_parent">Добавить запись в блог</a></li>
                    </ul>
                </li>
                <li class="cat-item">
                    <a href="/recept.html" style="color: #c30909;" class="nav_parent">Рецепты</a>
                    <ul class="children" style="width: 350px;">
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td style="padding-right: 20px;">
                                        <li class="cat-item cat-item-1"><a href="/recept/0/1/" class="nav_child nav_parent">Салаты</a></li>
                                        <li class="cat-item cat-item-2"><a href="/recept/0/2/" class="nav_child nav_parent">Супы</a></li>
                                        <li class="cat-item cat-item-3"><a href="/recept/0/3/" class="nav_child nav_parent">Мясо</a></li>
                                        <li class="cat-item cat-item-4"><a href="/recept/0/4/" class="nav_child nav_parent">Птица и яйца</a></li>
                                        <li class="cat-item cat-item-5"><a href="/recept/0/5/" class="nav_child nav_parent">Рыба</a></li>
                                        <li class="cat-item cat-item-6"><a href="/recept/0/6/" class="nav_child nav_parent">Овощи</a></li>
                                        <li class="cat-item cat-item-22"><a href="/recept/0/22/" class="nav_child nav_parent">Десерты</a></li>
                                        <li class="cat-item cat-item-21"><a href="/recept/0/21/" class="nav_child nav_parent">Выпечка</a></li>
                                        <li class="cat-item cat-item-20"><a href="/recept/0/20/" class="nav_child nav_parent">Соусы</a></li>
                                        <li class="cat-item cat-item-19"><a href="/recept/0/19/" class="nav_child nav_parent">Закуски</a></li>
                                        <li class="cat-item cat-item-7"><a href="/recept/0/7/" class="nav_child nav_parent">Напитки</a></li>
                                        <li class="cat-item cat-item-9"><a href="/recept/0/9/" class="nav_child nav_parent">Быстро, просто, вкусно</a></li>
                                    </td>
                                    <td style="padding-right: 20px;">
                                        <li class="cat-item cat-item-17"><a href="/recept/0/17/" class="nav_child nav_parent">Грибы</a></li>
                                        <li class="cat-item cat-item-18"><a href="/recept/0/18/" class="nav_child nav_parent">Колбасные изделия</a></li>
                                        <li class="cat-item cat-item-23"><a href="/recept/0/23/" class="nav_child nav_parent">Блюда из лаваша</a></li>
                                        <li class="cat-item cat-item-24"><a href="/recept/0/24/" class="nav_child nav_parent">Готовим в мультиварке</a></li>
                                        <li class="cat-item cat-item-8"><a href="/recept/0/8/" class="nav_child nav_parent">Заготовки</a></li>
                                        <li class="cat-item cat-item-11"><a href="/recept/0/11/" class="nav_child nav_parent">Едим на природе</a></li>
                                        <li class="cat-item cat-item-12"><a href="/recept/0/12/" class="nav_child nav_parent">На завтрак</a></li>
                                        <li class="cat-item cat-item-13"><a href="/recept/0/13/" class="nav_child nav_parent">Рецепты от шеф-повара</a></li>
                                        <li class="cat-item cat-item-14"><a href="/recept/0/14/" class="nav_child nav_parent">Старинные рецепты</a></li>
                                        <li class="cat-item cat-item-15"><a href="/recept/0/15/" class="nav_child nav_parent">Рецепты для детей</a></li>
                                        <li class="cat-item cat-item-16"><a href="/recept/0/16/" class="nav_child nav_parent">Праздничный стол</a></li>
                                        <li class="cat-item cat-item-10"><a href="/recept/0/10/" class="nav_child nav_parent">Вегетарианство</a></li>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </ul>
                </li>
                <div class="suchara0">
                    <li class="cat-item">
                        <a class="nav_parent" href="/online/">Онлайн кино</a>
                        <ul class="children" style="width: 280px;">
                            <table cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="padding-right: 20px;">
                                            <li class="cat-item cat-item-1"><a href="/cat_top" class="nav_child nav_parent">Топовые раздачи</a></li>
                                            <li class="cat-item cat-item-2"><a href="/cat_novinki" class="nav_child nav_parent">Новые раздачи</a></li>
                                            <li class="cat-item cat-item-3"><a href="/cat_kino" class="nav_child nav_parent">Зарубежные фильмы</a></li>
                                            <li class="cat-item cat-item-4"><a href="/cat_nashe_kino" class="nav_child nav_parent">Наши фильмы</a></li>
                                            <li class="cat-item cat-item-5"><a href="/cat_nauchno_popularnoe" class="nav_child nav_parent">Научные фильмы</a></li>
                                            <li class="cat-item cat-item-6"><a href="/cat_seriali" class="nav_child nav_parent">Сериалы</a></li>
                                            <li class="cat-item cat-item-7"><a href="/cat_tel" class="nav_child nav_parent">Телевизор</a></li>
                                            <li class="cat-item cat-item-8"><a href="/cat_multiki" class="nav_child nav_parent">Мультфильмы</a></li>
                                            <li class="cat-item cat-item-9"><a href="/cat_byt" class="nav_child nav_parent">Хозяйство и Быт</a></li>
                                        </td>

                                        <td>
                                            <li class="cat-item cat-item-10"><a href="/cat_anime" class="nav_child nav_parent">Аниме</a></li>
                                            <li class="cat-item cat-item-11"><a href="/cat_audio" class="nav_child nav_parent">Музыка</a></li>
                                            <li class="cat-item cat-item-12"><a href="/cat_games" class="nav_child nav_parent">Игры</a></li>
                                            <li class="cat-item cat-item-14"><a href="/cat_soft" class="nav_child nav_parent">Софт</a></li>
                                            <li class="cat-item cat-item-15"><a href="/cat_knigi" class="nav_child nav_parent">Книги</a></li>
                                            <li class="cat-item cat-item-16"><a href="/cat_sport" class="nav_child nav_parent">Спорт и Здоровье</a></li>
                                            <li class="cat-item cat-item-17"><a href="/cat_jumor" class="nav_child nav_parent">Юмор</a></li>
                                            <li class="cat-item cat-item-18"><a href="/cat_other" class="nav_child nav_parent">Другое</a></li>
                                            <li class="cat-item cat-item-19"><a href="#" class="nav_child nav_parent"></a></li>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                    </li>
                </div>
                <div class="suchara1">
                    <li class="cat-item"><a href="/" style="color: #c30909;" class="nav_parent">Продать авто</a></li>
                </div>
                <div class="suchara2">
                    <li class="cat-item"><a href="/" class="nav_parent">Радио онлайн</a></li>
                </div>
                <div class="suchara3">
                    <li class="cat-item"><a href="/reklama.html" class="menur nav_parent">Реклама</a></li>
                </div>
            </ul>
        </div>
        <div class="p-Head-Cont">
            <div class="p-Head" id="p-Head">
                <table cellspacing="0" class="st">
                    <tbody>
                        <tr>
                            <td class="lnk">
                                <div class="forLayer">
                                    <a href="/rss/" class="rss">rss</a>
                                    <div class="layerRssList" style="display: none;">
                                        <a class="close" title="Закрыть" href="#">Закрыть</a>
                                        <div class="title">
                                            RSS-каналы
                                        </div>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="swBlockTwo">
                                                            <ul>
                                                                <li>
                                                                    <a href="/rating/rss.php">Топ новости</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/sport/rss_sport.php">Спортивные трансляции</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/recept/rss.php">Топ рецепты</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/tor_search/rss_films_new.php">Топ торренты</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/tor_search/rss_films_new.php">Последние торренты</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/rss/rss.php">MyRSS</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="swBlockTwo"> </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </td>
                            <td class="cal">Сегодня: <span> <?php echo get_the_date('j F Y'); ?> г.</span></td>
                            <td class="clk">
                                <span title="Москва"><i></i><b>MSK</b><u class="hour_clock">18</u><u class="time_delimiter" style="visibility: visible;">:</u><u class="min_clock">03</u></span>
                            </td>
                            <td class="rts">
                                <a href="/" title="Курсы USD и EUR к рублю">Курсы:</a>
                                <span class="dol1"><i></i></span><span class="up"><b></b>95.87 руб (+0.10)</span><span class="eur"><i></i></span><span class="up"><b></b>99.18 руб (+0.18)</span>
                            </td>
                            <td class="rts3">
                                <a href="/charts.html" title="Стоимость нефти марки Brent по данным торгов срочного рынка МБ">Нефть:</a>
                            </td>
                            <td class="piska wzr">
                                <a href="/" title="Прогноз погоды в г.Москва">Погода:</a>
                                <span title="Погода в Москва"></span><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/02/3.gif" alt="Пасмурно" title="Пасмурно" /> Днем в Москве:
                                <span title="Подробнее | Днем 01 февраля в субботу <br /> комфорт -5..-3 °C <br /> ветер 1 – 3 м/c юго-восточный">0 °C..-2 °C</span>
                            </td>
                            <td class="piska2 lnk2">
                                <div class="forLayer2">
                                    <a href="/pogoda/" class="rss2">/pogoda/</a>
                                    <div class="layerRssList2" style="display: none;">
                                        <a class="close" title="Закрыть" href="#">Закрыть</a>
                                        <div class="title">Погода - <a href="/city.php#citi">выбрать другой город</a></div>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="swBlockTwo">
                                                            <ul>
                                                                <li>
                                                                    <a href="/pogoda/kiev/" title="Погода в Киеве">Киев</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/minsk/" title="Погода в Минске">Минск</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/astana/" title="Погода в Астане">Астана</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/london/" title="Погода в Лондоне">Лондон</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/paris/" title="Погода в Париже">Париж</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/berlin/" title="Погода в Берлине">Берлин</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/vienna/" title="Погода в Вене">Вена</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="swBlockTwo">
                                                            <ul>
                                                                <li>
                                                                    <a href="/pogoda/praha/" title="Погода в Праге">Прага</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/rome_italy/" title="Погода в Риме">Рим</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/barcelona/" title="Погода в Барселонне">Барселона</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/madrid/" title="Погода в Мадриде">Мадрид</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/lisbon/" title="Погода в Лиссабоне">Лиссабон</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/new_york/" title="Погода в Нью-Йорке">Нью-Йорк</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/las_vegas/" title="Погода в Лас-Вегасе">Лас-Вегас</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="swBlockTwo">
                                                            <ul>
                                                                <li>
                                                                    <a href="/pogoda/beijing/" title="Погода в Пекине">Пекин</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/delhi/" title="Погода в Дели">Дели</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/tokyo/" title="Погода в Токио">Токио</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/hanoi/" title="Погода в Ханое">Ханой</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/ankara/" title="Погода в Анкаре">Анкара</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/dubai/" title="Погода в Дубаи">Дубаи</a>
                                                                </li>
                                                                <li>
                                                                    <a href="/pogoda/cairo/" title="Погода в Каире">Каир</a>
                                                                </li>
                                                            </ul>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </td>
                            <td class="widya">
                                <!--noindex-->
                                <a href="/" class="widnews">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/02/yandex.png" alt="Виджет" title="Добавить виджет на Яндекс" />
                                </a>
                                <!--/noindex-->
                            </td>
                            <td class="fnt">
                                
                                    <a href="#" title="Маленький"><i class="sma"></i></a>
                                
                                
                                    <a href="#" class="on" title="Нормальный"><i class="med"></i></a>
                                
                                
                                    <a href="#" title="Большой"><i class="big"></i></a>
                                
                            </td>
                            <td class="rts2">
                                <a rel="sidebar" href="/" title="Новости newsrbc.ru Последние новости России и мира, новости шоу-бизнеса, бизнес-новости дня.">В избранное</a>
                            </td>
                            <td class="lnk_pda"><span class="pda"></span> <a href="/" title="PDA версия сайта" class="clk_pda">PDA</a></td>
                            <td id="mailru-webagent-gen-20" class="cal2">
                                <a href="/"><b>@</b> - Почта</a>
                            </td>
                            <td class="piska3 email">
                                <a href="/contact.html" class="widnewse">
                                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2025/02/massage_view.png" alt="Виджет" title="Письмо в редакцию" /> <span>- Письмо в редакцию</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
