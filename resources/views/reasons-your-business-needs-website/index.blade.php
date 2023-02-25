@extends('layouts.app')

@section('header')
<li class="ws-nav__menu-list-item">
    <a class="ws-nav__menu-link" href="">
        <span>Home</span>
    </a>
</li>
<li class="ws-nav__menu-list-item">
    <ws-nav-toggle class="ws-nav__toggle" group-id="top" on="hover" toggle="#ws-nav-collapse-2">
        <a class="ws-nav__menu-link" href="./telecom-services/">
            <span>Services</span>
        </a>
    </ws-nav-toggle>
    <ws-nav-collapse class="ws-nav__submenu" id="ws-nav-collapse-2">
        <ul class="ws-nav__submenu-list">
            <li class="ws-nav__submenu-list-item">
                <a class="ws-nav__menu-link" href="telecom-services/">
                    <span>Telecom Services</span>
                </a>
            </li>
            <li class="ws-nav__submenu-list-item">
                <a class="ws-nav__menu-link" href="web-design/">
                    <span>Web Designing</span>
                </a>
            </li>
            <li class="ws-nav__submenu-list-item">
                <a class="ws-nav__menu-link" href="digital-marketing/">
                    <span>Digital Marketing</span>
                </a>
            </li>
        </ul>
    </ws-nav-collapse>
</li>
<li class="ws-nav__menu-list-item">
    <a class="ws-nav__menu-link" href="pricing/" target="_self">
        <span>Pricing</span>
    </a>
</li>
<li class="ws-nav__menu-list-item">
    <a class="ws-nav__menu-link" href="about/" target="_self">
        <span>About</span>
    </a>
</li>
<li class="ws-nav__menu-list-item">
    <a class="ws-nav__menu-link" href="blog/">
        <span>Blog</span>
    </a>
</li>
<li class="ws-nav__menu-list-item">
    <a class="ws-nav__menu-link" href="contact/" target="_self">
        <span>Contact</span>
    </a>
</li>
<li class="ws-nav__menu-list-item">
    <a class="ws-nav__menu-link" href="it-training-programs-with-job-opportunity/" target="_self">
        <span>Training</span>
    </a>
</li>
@endsection

@section('content')
<ws-block content-alignment="center" data-ws-variation-id="article-common" id="ws-block-article-go0KqZaA"
    src="../ws/block-templates/text/index.html" surfaces="ws-light-0" white-space-bottom="xxl" white-space-top="xxl">
    <section class="ws-section ws-surface ws-light-0" data-surface="0" data-ws-slots="block-content">
        <div class="ws-container">
            <div class="ws-m-rich-text ws-m-blockquote-with-icon">
                <ws-text data-ws-default-content-hash="7f9354b32d87939e31748c91d97c6897" slot="block-content">
                    <h2 style="text-align: center;">5 Marketing Mistakes Small Businesses Should Avoid</h2>
                    <ws-media-container aspect-ratio="1.887" content-position="50% 50%" content-scale="1"
                        data-ws-selectable="true" style="height: 408px;">
                        <picture>
                            <img alt="" src="../ws/media-library/1465b15ebada442f8951a02fb8022970/fmh-vtumhqs" />
                        </picture>
                    </ws-media-container>
                    <h5>Marketing can prove to be somewhat of a challenge for small businesses in the modern era.
                        However, it
                        is still a necessity for any business looking to be successful in their industry.</h5>
                    <p>The process often involves some trial and error. But some errors can be costly, so it’s best to
                        keep an
                        eye out and correct them before they harm your business. </p>
                    <p><b>Here are 5 marketing mistakes small businesses should avoid.</b></p>
                    <p><b>1. Using a single marketing channel</b></p>
                    <p>Far too many small businesses make the mistake of promoting themselves using only a single
                        marketing
                        channel. This limits their ability to reach a wider audience, and prevents them from gaining
                        traction in
                        their industry.</p>
                    <p>Successful businesses often utilize multiple marketing channels in order to target users on
                        different
                        online platforms. This means they are targeting leads using email marketing, as well as leads on
                        various
                        social media platforms in order to draw in the widest possible audience for their products and
                        services.
                    </p>
                    <p><b>2. Using the same content for all platforms</b></p>
                    <p>Businesses that do use multiple marketing channels sometimes use the exact same content to target
                        their
                        audience on different platforms. Businesses that take this approach fail to utilize their
                        content
                        effectively and this can lead to audiences being turned off by the business’s lack of effort in
                        targeting them.</p>
                    <p>Content should be custom-tailored to fit the style and format of the platform it is being shared
                        on.
                        For example, small businesses should be aware that Instagram is a better platform for sharing
                        product
                        pictures, whereas vertical infographics are better suited for Pinterest. </p>
                    <p><b>3. Failing to review data</b><br /></p>
                    <p>Businesses who have been carrying out marketing campaigns for a while sometimes fail to review
                        the data
                        gathered during their campaigns. As a result, they may not know which of their marketing
                        strategies are
                        effective, and which ones could use more work. </p>
                    <p>Keeping track of data is important for marketers to effectively fine-tune their marketing
                        strategies
                        for maximum impact. Marketing campaigns take up time and money, so it is in the best interest of
                        business owners to ensure that their resources are being spent on effective forms of promotion.
                    </p>
                    <p><b>4. Ignoring the competition</b></p>
                    <p>It may be useful for some businesses to chart out their own path when it comes to promotion, but
                        marketers should still be aware of the ways in which their competitors are marketing their
                        businesses.
                    </p>
                    <p>Competitors who are more experienced with marketing may already know the right marketing channels
                        that
                        are most effective for promoting their business. Given that marketing is often a trial and error
                        process, your business could save valuable time by emulating their example.</p>
                    <p><b>5. Failing to use market segmentation</b></p>
                    <p>Businesses that target the entire mass market without segmenting their target consumers based on
                        their
                        needs and preferences are likely to perform poorly. Such businesses tend to put out general
                        content that
                        doesn’t effectively appeal to their target consumers.</p>
                    <p>People are more likely to make purchases when they feel the business understands their wants and
                        needs,
                        so it’s important for businesses to figure out who their target consumers are and market to them
                        accordingly.</p>
                    <p>Please get in touch with one of our consultant to help you with the right marketing strategy for
                        your
                        business</p>
                    <p><br /></p>
                </ws-text>
            </div>
        </div>
    </section>
</ws-block>
@endsection

@section('footer')
<ws-global slot="business-logo" src="ws/globals/business-logo/index.html"><img alt=""
        src="ws/resized-images/4de3227d094040e68b9d65c3a123ca8d/digipearlnobackgrounf-01-01.png"
        style="width: 154.875px; height: auto;" /></ws-global>
<ws-global slot="business-address" src="ws/globals/addresses/index.html">
    <address>
        <p><b>Location</b><br />Suite 2 534 Princes Hwy Rockdale NSW 2216</p>
    </address>
</ws-global>
<ws-global slot="business-phone" src="ws/globals/phones/index.html">
    <p><b>Contact</b><br />Phone: <a href="tel: +612 72505577">02 72505577</a></p>
</ws-global>
<ws-global slot="business-email" src="ws/globals/emails/index.html">
    <p>Email: <a href="mailto: info@digipearl.com.au" target="_self">info@digipearl.com.au</a>
    </p>
</ws-global>
<ws-global slot="business-social-profiles" src="ws/globals/social-links/index.html">
    <ws-social-icons>
        <ul>
            <li>
                <a class="ws-link" href="https://www.facebook.com/digipearlaustralia" target="_blank">
                    <ws-icon src="ws/common/icons/facebook-logo.ws-intense-next-marketing-agency.svg">
                    </ws-icon>
                </a>
            </li>
            <li>
                <a class="ws-link" href="https://www.instagram.com/digipearlaustralia" target="_blank">
                    <ws-icon
                        src="ws/extensions/11ebb3fc92fa4d148a680026b952c5b1/icons/social-network/solid/yola-instagram-0002.svg">
                    </ws-icon>
                </a>
            </li>
        </ul>
    </ws-social-icons>
</ws-global>
<ws-global slot="footer-navigation" src="ws/globals/footer-navigation/index.html">
    <ul>
        <li>
            <a class="ws-link" href="" target="_self">Home</a>
        </li>
        <li>
            <a class="ws-link" href="services/" target="_self">Services</a>
        </li>
        <li>
            <a class="ws-link" href="pricing/" target="_self">Pricing</a>
        </li>
        <li>
            <a class="ws-link" href="contact/" target="_self">Contact</a>
        </li>
        <li>
            <a class="ws-link" href="blog/" target="_self">Blog</a>
        </li>
        <li>
            <a class="ws-link" href="it-training-programs-with-job-opportunity/" target="_self">Training
                Programs</a>
        </li>
    </ul>
</ws-global>
<div class="ws-m-copyright" slot="copyright">
    <ws-global slot="site-copyright" src="ws/globals/site-name/index.html"><span>DigiPearl |
            ABN:
            62615114406 </span></ws-global>
</div>
@endsection

<!DOCTYPE html>

<html lang="en">

<head>
  <title>Reasons Your Business Needs Website</title>
  <meta charset="utf-8" />
  <meta content="telephone=no" name="format-detection" />
  <meta content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1,user-scalable=0"
    name="viewport" />
  <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect" />
  <link href="../ws/media-library/8c31c7941d51430f8f1e7bdd69be74b9/favicon1-01.png" rel="icon" type="image/png" />
  <!--ws:site:tracking_code-->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-199242670-1">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-199242670-1');
  </script>
  <!--/ws:site:tracking_code-->
  <script>
    (function (context) {
      context.dataLayer = context.dataLayer || [];
      context.gtag = function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-199242670-1');

      function injectScript() {
        var gtmScript = document.createElement("script");
        gtmScript.type = "text/javascript";
        gtmScript.async = true;
        gtmScript.src = src = "https://www.googletagmanager.com/gtag/js?id=UA-199242670-1";
        (document.getElementsByTagName("head")[0] ||
          document.getElementsByTagName("body")[0]).appendChild(gtmScript);
      }

      document.addEventListener('DOMContentLoaded', function () {
        var wsCookieBannerElement = document.querySelector('ws-cookie-banner');
        if (wsCookieBannerElement) {
          wsCookieBannerElement.addEventListener(
            'ws:cookie-banner',
            function (event) {
              if (event.detail && event.detail.accepted) {
                injectScript();
              }
            });
        } else {
          injectScript();
        }
      });
    })(window);
  </script>
  <link href="../ws/bundles/css/7fc9141901729b67e88b6252f1dcf1cc.css" rel="stylesheet">
</head>

<body>
  <ws-global src="../ws/globals/cookie-banner/index.html">
    <div id="ws-cookie-banner">
    </div>
  </ws-global>
  <ws-global src="../ws/globals/header-code/index.html">
    <div id="ws-site-header-wrapper">
      <div data-color-palette="custom-palette-1" id="ws-color-palette">
        <style>
          :root {
            --ws-color-dark-50: 212, 8%, 36%;
            --ws-color-dark-100: 212, 8%, 34%;
            --ws-color-dark-200: 212, 9%, 32%;
            --ws-color-dark-300: 212, 9%, 30%;
            --ws-color-dark-400: 212, 10%, 27%;
            --ws-color-dark-500: 212, 11%, 24%;
            --ws-color-dark-600: 211, 12%, 21%;
            --ws-color-dark-700: 211, 14%, 18%;
            --ws-color-dark-800: 211, 18%, 14%;
            --ws-color-dark-900: 210, 27%, 9%;
            --ws-color-light-50: 0, 10%, 98%;
            --ws-color-light-100: 0, 5%, 97%;
            --ws-color-light-200: 0, 3%, 95%;
            --ws-color-light-300: 0, 1%, 90%;
            --ws-color-light-400: 0, 1%, 86%;
            --ws-color-light-500: 360, 1%, 81%;
            --ws-color-light-600: 360, 1%, 77%;
            --ws-color-light-700: 360, 0%, 71%;
            --ws-color-light-800: 360, 0%, 66%;
            --ws-color-light-900: 360, 0%, 61%;
            --ws-color-primary-50: 350, 88%, 96%;
            --ws-color-primary-100: 353, 91%, 91%;
            --ws-color-primary-200: 360, 67%, 78%;
            --ws-color-primary-300: 0, 63%, 69%;
            --ws-color-primary-400: 2, 80%, 65%;
            --ws-color-primary-500: 5, 85%, 61%;
            --ws-color-primary-600: 3, 74%, 58%;
            --ws-color-primary-700: 2, 61%, 53%;
            --ws-color-primary-800: 3, 56%, 49%;
            --ws-color-primary-900: 4, 60%, 44%;
            --ws-color-secondary-50: 350, 88%, 96%;
            --ws-color-secondary-100: 353, 91%, 91%;
            --ws-color-secondary-200: 360, 67%, 78%;
            --ws-color-secondary-300: 0, 63%, 69%;
            --ws-color-secondary-400: 2, 80%, 65%;
            --ws-color-secondary-500: 5, 85%, 61%;
            --ws-color-secondary-600: 3, 74%, 58%;
            --ws-color-secondary-700: 2, 61%, 53%;
            --ws-color-secondary-800: 3, 56%, 49%;
            --ws-color-secondary-900: 4, 60%, 44%;
            --ws-color-warning-50: 46, 100%, 94%;
            --ws-color-warning-100: 45, 100%, 85%;
            --ws-color-warning-200: 45, 99%, 75%;
            --ws-color-warning-300: 46, 99%, 65%;
            --ws-color-warning-400: 45, 99%, 57%;
            --ws-color-warning-500: 45, 99%, 50%;
            --ws-color-warning-600: 42, 100%, 50%;
            --ws-color-warning-700: 38, 100%, 50%;
            --ws-color-warning-800: 34, 100%, 50%;
            --ws-color-warning-900: 26, 100%, 50%;
            --ws-color-error-50: 351, 100%, 96%;
            --ws-color-error-100: 354, 98%, 90%;
            --ws-color-error-200: 360, 71%, 77%;
            --ws-color-error-300: 360, 67%, 67%;
            --ws-color-error-400: 1, 81%, 62%;
            --ws-color-error-500: 4, 87%, 57%;
            --ws-color-error-600: 1, 76%, 54%;
            --ws-color-error-700: 360, 65%, 50%;
            --ws-color-error-800: 360, 68%, 46%;
            --ws-color-error-900: 359, 76%, 40%;
            --ws-color-info-50: 199, 94%, 94%;
            --ws-color-info-100: 199, 93%, 85%;
            --ws-color-info-200: 199, 93%, 75%;
            --ws-color-info-300: 199, 92%, 65%;
            --ws-color-info-400: 199, 92%, 57%;
            --ws-color-info-500: 200, 91%, 52%;
            --ws-color-info-600: 201, 85%, 49%;
            --ws-color-info-700: 203, 85%, 44%;
            --ws-color-info-800: 204, 85%, 40%;
            --ws-color-info-900: 208, 86%, 33%;
            --ws-color-success-50: 127, 47%, 93%;
            --ws-color-success-100: 125, 41%, 83%;
            --ws-color-success-200: 125, 40%, 73%;
            --ws-color-success-300: 126, 40%, 62%;
            --ws-color-success-400: 126, 40%, 54%;
            --ws-color-success-500: 127, 46%, 46%;
            --ws-color-success-600: 127, 49%, 42%;
            --ws-color-success-700: 128, 53%, 36%;
            --ws-color-success-800: 128, 57%, 31%;
            --ws-color-success-900: 132, 77%, 20%;
            --ws-color-text-black: 0, 0%, 0%;
            --ws-color-text-white: 0, 0%, 100%
          }

          .ws-language-listbox,
          [data-surface].ws-light-0 {
            --ws-surface-form-date-time-picker-wrapper-background-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-current-month-color: var(--ws-color-text-black);
            --ws-surface-form-date-time-picker-line-color: var(--ws-color-light-100);
            --ws-surface-form-date-time-picker-current-day-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-current-day-background: var(--ws-color-primary-600);
            --ws-surface-form-date-time-picker-current-day-background-hover: var(--ws-color-light-50);
            --ws-surface-form-date-time-picker-icon-color: var(--ws-color-primary-600);
            --ws-surface-form-date-time-picker-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-form-date-time-picker-other-month-color: var(--ws-color-text-black);
            --ws-surface-form-date-time-picker-other-month-color-opacity: 0.29;
            --ws-surface-form-date-time-picker-weekday-color: var(--ws-color-text-black);
            --ws-surface-form-date-time-picker-weekday-color-opacity: 0.54;
            --ws-surface-form-time-picker-background-color: var(--ws-color-text-white);
            --ws-surface-form-time-picker-background-hover: var(--ws-color-light-50);
            --ws-surface-form-time-picker-color: var(--ws-color-text-black);
            --ws-surface-form-time-picker-line-color: var(--ws-color-light-100);
            --ws-surface-background-color: var(--ws-color-light-0);
            --ws-surface-border-color: var(--ws-color-light-400);
            --ws-surface-focus-outline-color: var(--ws-color-info-100);
            --ws-surface-focus-outline-color-opacity: 1;
            --ws-surface-error-focus-outline-color: var(--ws-color-error-100);
            --ws-surface-error-focus-outline-color-opacity: 1;
            --ws-surface-primary-button-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-background-opacity: 1;
            --ws-surface-primary-button-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-text-color-opacity: 1;
            --ws-surface-primary-button-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-border-opacity: 1;
            --ws-surface-primary-button-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-background-opacity: 1;
            --ws-surface-primary-button-hover-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-hover-text-color-opacity: 1;
            --ws-surface-primary-button-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-border-opacity: 1;
            --ws-surface-primary-button-active-background-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-background-opacity: 1;
            --ws-surface-primary-button-active-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-active-text-color-opacity: 1;
            --ws-surface-primary-button-active-border-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-border-opacity: 1;
            --ws-surface-primary-button-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-background-opacity: 0.04;
            --ws-surface-primary-button-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-disabled-text-color-opacity: 0.42;
            --ws-surface-primary-button-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-border-opacity: 0.04;
            --ws-surface-secondary-button-1-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-background-opacity: 1;
            --ws-surface-secondary-button-1-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-text-color-opacity: 1;
            --ws-surface-secondary-button-1-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-border-opacity: 1;
            --ws-surface-secondary-button-1-hover-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-hover-background-opacity: 0.4;
            --ws-surface-secondary-button-1-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-1-hover-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-hover-border-opacity: 0.4;
            --ws-surface-secondary-button-1-active-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-active-background-opacity: 0.4;
            --ws-surface-secondary-button-1-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-active-text-color-opacity: 1;
            --ws-surface-secondary-button-1-active-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-active-border-opacity: 0.4;
            --ws-surface-secondary-button-1-disabled-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-disabled-background-opacity: 0.34;
            --ws-surface-secondary-button-1-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-disabled-text-color-opacity: 0.29;
            --ws-surface-secondary-button-1-disabled-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-1-disabled-border-opacity: 0.34;
            --ws-surface-secondary-button-2-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-background-opacity: 0;
            --ws-surface-secondary-button-2-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-text-color-opacity: 1;
            --ws-surface-secondary-button-2-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-border-opacity: 1;
            --ws-surface-secondary-button-2-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-background-opacity: 1;
            --ws-surface-secondary-button-2-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-2-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-border-opacity: 1;
            --ws-surface-secondary-button-2-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-background-opacity: 1;
            --ws-surface-secondary-button-2-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-text-color-opacity: 1;
            --ws-surface-secondary-button-2-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-border-opacity: 1;
            --ws-surface-secondary-button-2-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-background-opacity: 0;
            --ws-surface-secondary-button-2-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-disabled-text-color-opacity: 0.29;
            --ws-surface-secondary-button-2-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-border-opacity: 0.04;
            --ws-surface-secondary-button-3-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-background-opacity: 0;
            --ws-surface-secondary-button-3-text-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-text-color-opacity: 1;
            --ws-surface-secondary-button-3-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-border-opacity: 1;
            --ws-surface-secondary-button-3-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-background-opacity: 1;
            --ws-surface-secondary-button-3-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-3-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-border-opacity: 1;
            --ws-surface-secondary-button-3-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-background-opacity: 1;
            --ws-surface-secondary-button-3-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-text-color-opacity: 1;
            --ws-surface-secondary-button-3-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-border-opacity: 1;
            --ws-surface-secondary-button-3-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-background-opacity: 0;
            --ws-surface-secondary-button-3-disabled-text-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-text-color-opacity: 0.52;
            --ws-surface-secondary-button-3-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-border-opacity: 0.04;
            --ws-surface-secondary-button-4-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-background-opacity: 0;
            --ws-surface-secondary-button-4-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-text-color-opacity: 1;
            --ws-surface-secondary-button-4-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-border-opacity: 1;
            --ws-surface-secondary-button-4-hover-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-hover-background-opacity: 1;
            --ws-surface-secondary-button-4-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-4-hover-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-hover-border-opacity: 1;
            --ws-surface-secondary-button-4-active-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-active-background-opacity: 1;
            --ws-surface-secondary-button-4-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-active-text-color-opacity: 1;
            --ws-surface-secondary-button-4-active-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-active-border-opacity: 1;
            --ws-surface-secondary-button-4-disabled-background-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-disabled-background-opacity: 0;
            --ws-surface-secondary-button-4-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-disabled-text-color-opacity: 0.29;
            --ws-surface-secondary-button-4-disabled-border-color: var(--ws-color-light-200);
            --ws-surface-secondary-button-4-disabled-border-opacity: 0.34;
            --ws-surface-secondary-button-5-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-background-opacity: 1;
            --ws-surface-secondary-button-5-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-text-color-opacity: 1;
            --ws-surface-secondary-button-5-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-border-opacity: 1;
            --ws-surface-secondary-button-5-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-background-opacity: 1;
            --ws-surface-secondary-button-5-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-5-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-border-opacity: 1;
            --ws-surface-secondary-button-5-active-background-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-background-opacity: 1;
            --ws-surface-secondary-button-5-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-active-text-color-opacity: 1;
            --ws-surface-secondary-button-5-active-border-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-border-opacity: 1;
            --ws-surface-secondary-button-5-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-background-opacity: 0.04;
            --ws-surface-secondary-button-5-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-5-disabled-text-color-opacity: 0.42;
            --ws-surface-secondary-button-5-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-border-opacity: 0.04;
            --ws-surface-text-color: var(--ws-color-text-black);
            --ws-surface-text-high-emphasis-opacity: 1;
            --ws-surface-text-medium-emphasis-opacity: 0.54;
            --ws-surface-text-disabled-emphasis-opacity: 0.29;
            --ws-surface-link-text-color: var(--ws-color-primary-600);
            --ws-surface-link-text-color-opacity: 1;
            --ws-surface-link-hover-text-color: var(--ws-color-primary-500);
            --ws-surface-link-hover-text-color-opacity: 1;
            --ws-surface-footer-link-text-color: var(--ws-color-text-black);
            --ws-surface-footer-link-text-color-opacity: 1;
            --ws-surface-footer-link-hover-text-color: var(--ws-color-primary-600);
            --ws-surface-footer-link-hover-text-color-opacity: 1;
            --ws-surface-highlighter-text-color: var(--ws-color-text-white);
            --ws-surface-highlighter-background-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color-opacity: 1;
            --ws-surface-form-input-border-color: var(--ws-color-light-400);
            --ws-surface-form-input-border-color-opacity: 1;
            --ws-surface-form-input-focus-border-color: var(--ws-color-info-500);
            --ws-surface-form-input-focus-border-color-opacity: 1;
            --ws-surface-form-input-disabled-border-color: var(--ws-color-light-400);
            --ws-surface-form-input-disabled-border-color-opacity: 0.42;
            --ws-surface-form-input-error-border-color: var(--ws-color-error-300);
            --ws-surface-form-input-error-border-color-opacity: 1;
            --ws-surface-form-validation-error-text-color: var(--ws-color-error-300);
            --ws-surface-form-checkbox-icon-color: var(--ws-color-text-white);
            --ws-surface-form-checkbox-icon-color-opacity: 1;
            --ws-surface-form-checkbox-background-color: var(--ws-color-light-50);
            --ws-surface-form-checkbox-background-color-opacity: 1;
            --ws-surface-form-checkbox-border-color: var(--ws-color-light-400);
            --ws-surface-form-checkbox-border-color-opacity: 1;
            --ws-surface-form-checkbox-checked-background-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-background-color-opacity: 1;
            --ws-surface-form-checkbox-checked-border-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-border-color-opacity: 1;
            --ws-surface-form-checkbox-disabled-border-color: var(--ws-color-light-400);
            --ws-surface-form-checkbox-disabled-border-color-opacity: 0.42;
            --ws-surface-form-checkbox-disabled-background-color: var(--ws-color-light-50);
            --ws-surface-form-checkbox-disabled-background-color-opacity: 0.42;
            --ws-surface-social-icon-color: var(--ws-color-primary-600);
            --ws-surface-social-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-social-icon-hover-color-opacity: 1;
            --ws-surface-feature-icon-color: var(--ws-color-primary-600);
            --ws-surface-feature-link-color: var(--ws-color-primary-600);
            --ws-surface-feature-link-color-opacity: 1;
            --ws-surface-feature-link-hover-color: var(--ws-color-primary-500);
            --ws-surface-feature-link-hover-color-opacity: 1;
            --ws-surface-contact-icon-color: var(--ws-color-text-black);
            --ws-surface-contact-icon-color-opacity: 0.54;
            --ws-surface-m-table-with-buttons-thead-border-color: var(--ws-color-text-black);
            --ws-surface-m-table-with-buttons-thead-border-color-opacity: 1;
            --ws-surface-m-table-with-buttons-border-color: var(--ws-color-light-300);
            --ws-surface-m-table-with-buttons-border-color-opacity: 1;
            --ws-surface-tag-color: var(--ws-color-text-black);
            --ws-surface-tag-color-opacity: 0.55;
            --ws-surface-tag-background-color: var(--ws-color-light-200);
            --ws-surface-tag-background-color-opacity: 1;
            --ws-surface-counter-text-color: var(--ws-color-primary-600);
            --ws-surface-counter-text-opacity: 1;
            --ws-surface-m-phone-color: var(--ws-color-primary-600);
            --ws-surface-m-nav-link-color: var(--ws-color-text-black);
            --ws-surface-m-nav-link-color-opacity: 1;
            --ws-surface-m-nav-link-hover-color: var(--ws-color-primary-600);
            --ws-surface-m-nav-link-hover-color-opacity: 1;
            --ws-surface-m-nav-link-active-color: var(--ws-color-primary-600);
            --ws-surface-m-nav-link-active-color-opacity: 1;
            --ws-surface-dropdown-arrow-color: var(--ws-color-text-black);
            --ws-surface-dropdown-arrow-disabled-color: var(--ws-color-text-black);
            --ws-surface-dropdown-list-background: var(--ws-color-text-white);
            --ws-surface-dropdown-list-row-background: var(--ws-color-text-white);
            --ws-surface-dropdown-list-row-hover-background: var(--ws-color-light-50);
            --ws-surface-dropdown-list-row-selected-background: var(--ws-color-primary-600);
            --ws-surface-dropdown-list-text-color: var(--ws-color-text-black);
            --ws-surface-dropdown-list-text-hover-color: var(--ws-color-text-black);
            --ws-surface-dropdown-list-text-selected-color: var(--ws-color-text-white);
            --ws-surface-dropdown-text-color: var(--ws-color-text-black);
            --ws-surface-dropdown-disabled-color: var(--ws-color-text-black)
          }

          [data-surface].ws-light-1 {
            --ws-surface-form-date-time-picker-wrapper-background-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-current-month-color: var(--ws-color-text-black);
            --ws-surface-form-date-time-picker-line-color: var(--ws-color-light-100);
            --ws-surface-form-date-time-picker-current-day-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-current-day-background: var(--ws-color-primary-600);
            --ws-surface-form-date-time-picker-current-day-background-hover: var(--ws-color-light-50);
            --ws-surface-form-date-time-picker-icon-color: var(--ws-color-primary-600);
            --ws-surface-form-date-time-picker-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-form-date-time-picker-other-month-color: var(--ws-color-text-black);
            --ws-surface-form-date-time-picker-other-month-color-opacity: 0.29;
            --ws-surface-form-date-time-picker-weekday-color: var(--ws-color-text-black);
            --ws-surface-form-date-time-picker-weekday-color-opacity: 0.54;
            --ws-surface-form-time-picker-background-color: var(--ws-color-text-white);
            --ws-surface-form-time-picker-background-hover: var(--ws-color-light-50);
            --ws-surface-form-time-picker-color: var(--ws-color-text-black);
            --ws-surface-form-time-picker-line-color: var(--ws-color-light-100);
            --ws-surface-background-color: var(--ws-color-light-100);
            --ws-surface-border-color: var(--ws-color-light-500);
            --ws-surface-focus-outline-color: var(--ws-color-info-100);
            --ws-surface-focus-outline-color-opacity: 1;
            --ws-surface-error-focus-outline-color: var(--ws-color-error-200);
            --ws-surface-error-focus-outline-color-opacity: 1;
            --ws-surface-primary-button-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-background-opacity: 1;
            --ws-surface-primary-button-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-text-color-opacity: 1;
            --ws-surface-primary-button-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-border-opacity: 1;
            --ws-surface-primary-button-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-background-opacity: 1;
            --ws-surface-primary-button-hover-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-hover-text-color-opacity: 1;
            --ws-surface-primary-button-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-border-opacity: 1;
            --ws-surface-primary-button-active-background-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-background-opacity: 1;
            --ws-surface-primary-button-active-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-active-text-color-opacity: 1;
            --ws-surface-primary-button-active-border-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-border-opacity: 1;
            --ws-surface-primary-button-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-background-opacity: 0.04;
            --ws-surface-primary-button-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-disabled-text-color-opacity: 0.42;
            --ws-surface-primary-button-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-border-opacity: 0.04;
            --ws-surface-secondary-button-1-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-background-opacity: 1;
            --ws-surface-secondary-button-1-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-text-color-opacity: 1;
            --ws-surface-secondary-button-1-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-border-opacity: 1;
            --ws-surface-secondary-button-1-hover-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-hover-background-opacity: 0.4;
            --ws-surface-secondary-button-1-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-1-hover-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-hover-border-opacity: 0.4;
            --ws-surface-secondary-button-1-active-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-active-background-opacity: 0.4;
            --ws-surface-secondary-button-1-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-active-text-color-opacity: 1;
            --ws-surface-secondary-button-1-active-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-active-border-opacity: 0.4;
            --ws-surface-secondary-button-1-disabled-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-disabled-background-opacity: 0.26;
            --ws-surface-secondary-button-1-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-1-disabled-text-color-opacity: 0.29;
            --ws-surface-secondary-button-1-disabled-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-1-disabled-border-opacity: 0.26;
            --ws-surface-secondary-button-2-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-background-opacity: 0;
            --ws-surface-secondary-button-2-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-text-color-opacity: 1;
            --ws-surface-secondary-button-2-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-border-opacity: 1;
            --ws-surface-secondary-button-2-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-background-opacity: 1;
            --ws-surface-secondary-button-2-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-2-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-border-opacity: 1;
            --ws-surface-secondary-button-2-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-background-opacity: 1;
            --ws-surface-secondary-button-2-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-text-color-opacity: 1;
            --ws-surface-secondary-button-2-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-border-opacity: 1;
            --ws-surface-secondary-button-2-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-background-opacity: 0;
            --ws-surface-secondary-button-2-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-disabled-text-color-opacity: 0.29;
            --ws-surface-secondary-button-2-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-border-opacity: 0.04;
            --ws-surface-secondary-button-3-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-background-opacity: 0;
            --ws-surface-secondary-button-3-text-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-text-color-opacity: 1;
            --ws-surface-secondary-button-3-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-border-opacity: 1;
            --ws-surface-secondary-button-3-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-background-opacity: 1;
            --ws-surface-secondary-button-3-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-3-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-border-opacity: 1;
            --ws-surface-secondary-button-3-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-background-opacity: 1;
            --ws-surface-secondary-button-3-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-text-color-opacity: 1;
            --ws-surface-secondary-button-3-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-border-opacity: 1;
            --ws-surface-secondary-button-3-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-background-opacity: 0;
            --ws-surface-secondary-button-3-disabled-text-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-text-color-opacity: 0.54;
            --ws-surface-secondary-button-3-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-border-opacity: 0.04;
            --ws-surface-secondary-button-4-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-background-opacity: 0;
            --ws-surface-secondary-button-4-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-text-color-opacity: 1;
            --ws-surface-secondary-button-4-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-border-opacity: 1;
            --ws-surface-secondary-button-4-hover-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-hover-background-opacity: 1;
            --ws-surface-secondary-button-4-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-4-hover-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-hover-border-opacity: 1;
            --ws-surface-secondary-button-4-active-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-active-background-opacity: 1;
            --ws-surface-secondary-button-4-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-active-text-color-opacity: 1;
            --ws-surface-secondary-button-4-active-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-active-border-opacity: 1;
            --ws-surface-secondary-button-4-disabled-background-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-disabled-background-opacity: 0;
            --ws-surface-secondary-button-4-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-4-disabled-text-color-opacity: 0.29;
            --ws-surface-secondary-button-4-disabled-border-color: var(--ws-color-light-300);
            --ws-surface-secondary-button-4-disabled-border-opacity: 0.26;
            --ws-surface-secondary-button-5-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-background-opacity: 1;
            --ws-surface-secondary-button-5-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-text-color-opacity: 1;
            --ws-surface-secondary-button-5-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-border-opacity: 1;
            --ws-surface-secondary-button-5-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-background-opacity: 1;
            --ws-surface-secondary-button-5-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-5-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-border-opacity: 1;
            --ws-surface-secondary-button-5-active-background-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-background-opacity: 1;
            --ws-surface-secondary-button-5-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-active-text-color-opacity: 1;
            --ws-surface-secondary-button-5-active-border-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-border-opacity: 1;
            --ws-surface-secondary-button-5-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-background-opacity: 0.04;
            --ws-surface-secondary-button-5-disabled-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-5-disabled-text-color-opacity: 0.42;
            --ws-surface-secondary-button-5-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-border-opacity: 0.04;
            --ws-surface-text-color: var(--ws-color-text-black);
            --ws-surface-text-high-emphasis-opacity: 1;
            --ws-surface-text-medium-emphasis-opacity: 0.54;
            --ws-surface-text-disabled-emphasis-opacity: 0.29;
            --ws-surface-link-text-color: var(--ws-color-primary-600);
            --ws-surface-link-text-color-opacity: 1;
            --ws-surface-link-hover-text-color: var(--ws-color-primary-500);
            --ws-surface-link-hover-text-color-opacity: 1;
            --ws-surface-footer-link-text-color: var(--ws-color-text-black);
            --ws-surface-footer-link-text-color-opacity: 1;
            --ws-surface-footer-link-hover-text-color: var(--ws-color-primary-600);
            --ws-surface-footer-link-hover-text-color-opacity: 1;
            --ws-surface-highlighter-text-color: var(--ws-color-text-white);
            --ws-surface-highlighter-background-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color-opacity: 1;
            --ws-surface-form-input-border-color: var(--ws-color-light-500);
            --ws-surface-form-input-border-color-opacity: 1;
            --ws-surface-form-input-focus-border-color: var(--ws-color-info-500);
            --ws-surface-form-input-focus-border-color-opacity: 1;
            --ws-surface-form-input-disabled-border-color: var(--ws-color-light-500);
            --ws-surface-form-input-disabled-border-color-opacity: 0.37;
            --ws-surface-form-input-error-border-color: var(--ws-color-error-400);
            --ws-surface-form-input-error-border-color-opacity: 1;
            --ws-surface-form-validation-error-text-color: var(--ws-color-error-400);
            --ws-surface-form-checkbox-icon-color: var(--ws-color-text-white);
            --ws-surface-form-checkbox-icon-color-opacity: 1;
            --ws-surface-form-checkbox-background-color: var(--ws-color-light-200);
            --ws-surface-form-checkbox-background-color-opacity: 1;
            --ws-surface-form-checkbox-border-color: var(--ws-color-light-500);
            --ws-surface-form-checkbox-border-color-opacity: 1;
            --ws-surface-form-checkbox-checked-background-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-background-color-opacity: 1;
            --ws-surface-form-checkbox-checked-border-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-border-color-opacity: 1;
            --ws-surface-form-checkbox-disabled-border-color-opacity: 0.37;
            --ws-surface-form-checkbox-disabled-background-color: var(--ws-color-light-200);
            --ws-surface-form-checkbox-disabled-background-color-opacity: var(--ws-color-light-500);
            --ws-surface-social-icon-color: var(--ws-color-primary-600);
            --ws-surface-social-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-social-icon-hover-color-opacity: 1;
            --ws-surface-feature-icon-color: var(--ws-color-primary-600);
            --ws-surface-feature-link-color: var(--ws-color-primary-600);
            --ws-surface-feature-link-color-opacity: 1;
            --ws-surface-feature-link-hover-color: var(--ws-color-primary-500);
            --ws-surface-feature-link-hover-color-opacity: 1;
            --ws-surface-contact-icon-color: var(--ws-color-text-black);
            --ws-surface-contact-icon-color-opacity: 0.54;
            --ws-surface-m-table-with-buttons-thead-border-color: var(--ws-color-text-black);
            --ws-surface-m-table-with-buttons-thead-border-color-opacity: 1;
            --ws-surface-m-table-with-buttons-border-color: var(--ws-color-light-400);
            --ws-surface-m-table-with-buttons-border-color-opacity: 1;
            --ws-surface-tag-color: var(--ws-color-text-black);
            --ws-surface-tag-color-opacity: 0.56;
            --ws-surface-tag-background-color: var(--ws-color-light-300);
            --ws-surface-tag-background-color-opacity: 1;
            --ws-surface-counter-text-color: var(--ws-color-primary-600);
            --ws-surface-counter-text-opacity: 1;
            --ws-surface-m-phone-color: var(--ws-color-primary-600);
            --ws-surface-m-nav-link-color: var(--ws-color-text-black);
            --ws-surface-m-nav-link-color-opacity: 1;
            --ws-surface-m-nav-link-hover-color: var(--ws-color-primary-600);
            --ws-surface-m-nav-link-hover-color-opacity: 1;
            --ws-surface-m-nav-link-active-color: var(--ws-color-primary-600);
            --ws-surface-m-nav-link-active-color-opacity: 1;
            --ws-surface-dropdown-arrow-color: var(--ws-color-text-black);
            --ws-surface-dropdown-arrow-disabled-color: var(--ws-color-text-black);
            --ws-surface-dropdown-list-background: var(--ws-color-text-white);
            --ws-surface-dropdown-list-row-background: var(--ws-color-text-white);
            --ws-surface-dropdown-list-row-hover-background: var(--ws-color-light-50);
            --ws-surface-dropdown-list-row-selected-background: var(--ws-color-primary-600);
            --ws-surface-dropdown-list-text-color: var(--ws-color-text-black);
            --ws-surface-dropdown-list-text-hover-color: var(--ws-color-text-black);
            --ws-surface-dropdown-list-text-selected-color: var(--ws-color-text-white);
            --ws-surface-dropdown-text-color: var(--ws-color-text-black);
            --ws-surface-dropdown-disabled-color: var(--ws-color-text-black)
          }

          [data-surface].ws-dark-0 {
            --ws-surface-form-date-time-picker-wrapper-background-color: var(--ws-color-dark-800);
            --ws-surface-form-date-time-picker-current-month-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-line-color: var(--ws-color-dark-600);
            --ws-surface-form-date-time-picker-current-day-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-current-day-background: var(--ws-color-primary-600);
            --ws-surface-form-date-time-picker-current-day-background-hover: var(--ws-color-dark-700);
            --ws-surface-form-date-time-picker-icon-color: var(--ws-color-primary-600);
            --ws-surface-form-date-time-picker-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-form-date-time-picker-other-month-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-other-month-color-opacity: 0.22;
            --ws-surface-form-date-time-picker-weekday-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-weekday-color-opacity: 0.45;
            --ws-surface-form-time-picker-background-color: var(--ws-color-dark-800);
            --ws-surface-form-time-picker-background-hover: var(--ws-color-dark-700);
            --ws-surface-form-time-picker-color: var(--ws-color-text-white);
            --ws-surface-form-time-picker-line-color: var(--ws-color-dark-600);
            --ws-surface-background-color: var(--ws-color-dark-900);
            --ws-surface-border-color: var(--ws-color-dark-400);
            --ws-surface-focus-outline-color: var(--ws-color-info-900);
            --ws-surface-focus-outline-color-opacity: 1;
            --ws-surface-error-focus-outline-color: var(--ws-color-error-900);
            --ws-surface-error-focus-outline-color-opacity: 0.79;
            --ws-surface-primary-button-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-background-opacity: 1;
            --ws-surface-primary-button-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-text-color-opacity: 1;
            --ws-surface-primary-button-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-border-opacity: 1;
            --ws-surface-primary-button-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-background-opacity: 1;
            --ws-surface-primary-button-hover-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-hover-text-color-opacity: 1;
            --ws-surface-primary-button-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-border-opacity: 1;
            --ws-surface-primary-button-active-background-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-background-opacity: 1;
            --ws-surface-primary-button-active-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-active-text-color-opacity: 1;
            --ws-surface-primary-button-active-border-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-border-opacity: 1;
            --ws-surface-primary-button-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-background-opacity: 0.18;
            --ws-surface-primary-button-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-text-color-opacity: 0.33;
            --ws-surface-primary-button-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-border-opacity: 0.18;
            --ws-surface-secondary-button-1-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-background-opacity: 1;
            --ws-surface-secondary-button-1-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-text-color-opacity: 1;
            --ws-surface-secondary-button-1-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-border-opacity: 1;
            --ws-surface-secondary-button-1-hover-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-hover-background-opacity: 0.4;
            --ws-surface-secondary-button-1-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-1-hover-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-hover-border-opacity: 0.4;
            --ws-surface-secondary-button-1-active-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-active-background-opacity: 0.4;
            --ws-surface-secondary-button-1-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-active-text-color-opacity: 1;
            --ws-surface-secondary-button-1-active-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-active-border-opacity: 0.4;
            --ws-surface-secondary-button-1-disabled-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-disabled-background-opacity: 0.71;
            --ws-surface-secondary-button-1-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-disabled-text-color-opacity: 0.22;
            --ws-surface-secondary-button-1-disabled-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-1-disabled-border-opacity: 0.71;
            --ws-surface-secondary-button-2-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-background-opacity: 0;
            --ws-surface-secondary-button-2-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-text-color-opacity: 1;
            --ws-surface-secondary-button-2-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-border-opacity: 1;
            --ws-surface-secondary-button-2-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-background-opacity: 1;
            --ws-surface-secondary-button-2-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-2-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-border-opacity: 1;
            --ws-surface-secondary-button-2-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-background-opacity: 1;
            --ws-surface-secondary-button-2-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-text-color-opacity: 1;
            --ws-surface-secondary-button-2-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-border-opacity: 1;
            --ws-surface-secondary-button-2-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-background-opacity: 0;
            --ws-surface-secondary-button-2-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-text-color-opacity: 0.22;
            --ws-surface-secondary-button-2-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-border-opacity: 0.18;
            --ws-surface-secondary-button-3-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-background-opacity: 0;
            --ws-surface-secondary-button-3-text-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-text-color-opacity: 1;
            --ws-surface-secondary-button-3-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-border-opacity: 1;
            --ws-surface-secondary-button-3-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-background-opacity: 1;
            --ws-surface-secondary-button-3-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-3-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-border-opacity: 1;
            --ws-surface-secondary-button-3-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-background-opacity: 1;
            --ws-surface-secondary-button-3-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-text-color-opacity: 1;
            --ws-surface-secondary-button-3-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-border-opacity: 1;
            --ws-surface-secondary-button-3-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-background-opacity: 0;
            --ws-surface-secondary-button-3-disabled-text-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-text-color-opacity: 0.5;
            --ws-surface-secondary-button-3-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-border-opacity: 0.18;
            --ws-surface-secondary-button-4-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-background-opacity: 0;
            --ws-surface-secondary-button-4-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-text-color-opacity: 1;
            --ws-surface-secondary-button-4-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-border-opacity: 1;
            --ws-surface-secondary-button-4-hover-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-hover-background-opacity: 1;
            --ws-surface-secondary-button-4-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-4-hover-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-hover-border-opacity: 1;
            --ws-surface-secondary-button-4-active-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-active-background-opacity: 1;
            --ws-surface-secondary-button-4-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-active-text-color-opacity: 1;
            --ws-surface-secondary-button-4-active-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-active-border-opacity: 1;
            --ws-surface-secondary-button-4-disabled-background-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-disabled-background-opacity: 0;
            --ws-surface-secondary-button-4-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-disabled-text-color-opacity: 0.22;
            --ws-surface-secondary-button-4-disabled-border-color: var(--ws-color-dark-700);
            --ws-surface-secondary-button-4-disabled-border-opacity: 0.71;
            --ws-surface-secondary-button-5-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-background-opacity: 1;
            --ws-surface-secondary-button-5-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-text-color-opacity: 1;
            --ws-surface-secondary-button-5-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-border-opacity: 1;
            --ws-surface-secondary-button-5-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-background-opacity: 1;
            --ws-surface-secondary-button-5-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-5-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-border-opacity: 1;
            --ws-surface-secondary-button-5-active-background-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-background-opacity: 1;
            --ws-surface-secondary-button-5-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-active-text-color-opacity: 1;
            --ws-surface-secondary-button-5-active-border-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-border-opacity: 1;
            --ws-surface-secondary-button-5-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-background-opacity: 0.18;
            --ws-surface-secondary-button-5-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-disabled-text-color-opacity: 0.33;
            --ws-surface-secondary-button-5-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-border-opacity: 0.18;
            --ws-surface-text-color: var(--ws-color-text-white);
            --ws-surface-text-high-emphasis-opacity: 1;
            --ws-surface-text-medium-emphasis-opacity: 0.45;
            --ws-surface-text-disabled-emphasis-opacity: 0.22;
            --ws-surface-link-text-color: var(--ws-color-primary-600);
            --ws-surface-link-text-color-opacity: 1;
            --ws-surface-link-hover-text-color: var(--ws-color-primary-500);
            --ws-surface-link-hover-text-color-opacity: 1;
            --ws-surface-footer-link-text-color: var(--ws-color-text-white);
            --ws-surface-footer-link-text-color-opacity: 0.45;
            --ws-surface-footer-link-hover-text-color: var(--ws-color-text-white);
            --ws-surface-footer-link-hover-text-color-opacity: 1;
            --ws-surface-highlighter-text-color: var(--ws-color-text-white);
            --ws-surface-highlighter-background-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color-opacity: 1;
            --ws-surface-form-input-border-color: var(--ws-color-dark-400);
            --ws-surface-form-input-border-color-opacity: 1;
            --ws-surface-form-input-focus-border-color: var(--ws-color-info-800);
            --ws-surface-form-input-focus-border-color-opacity: 1;
            --ws-surface-form-input-disabled-border-color: var(--ws-color-dark-400);
            --ws-surface-form-input-disabled-border-color-opacity: 0.49;
            --ws-surface-form-input-error-border-color: var(--ws-color-error-700);
            --ws-surface-form-input-error-border-color-opacity: 1;
            --ws-surface-form-validation-error-text-color: var(--ws-color-error-500);
            --ws-surface-form-checkbox-icon-color: var(--ws-color-text-white);
            --ws-surface-form-checkbox-icon-color-opacity: 1;
            --ws-surface-form-checkbox-background-color: var(--ws-color-dark-900);
            --ws-surface-form-checkbox-background-color-opacity: 1;
            --ws-surface-form-checkbox-border-color: var(--ws-color-dark-400);
            --ws-surface-form-checkbox-border-color-opacity: 1;
            --ws-surface-form-checkbox-checked-background-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-background-color-opacity: 1;
            --ws-surface-form-checkbox-checked-border-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-border-color-opacity: 1;
            --ws-surface-form-checkbox-disabled-border-color-opacity: 0.49;
            --ws-surface-form-checkbox-disabled-background-color: var(--ws-color-dark-900);
            --ws-surface-form-checkbox-disabled-background-color-opacity: 0.49;
            --ws-surface-social-icon-color: var(--ws-color-primary-600);
            --ws-surface-social-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-social-icon-hover-color-opacity: 1;
            --ws-surface-feature-icon-color: var(--ws-color-primary-600);
            --ws-surface-feature-link-color: var(--ws-color-primary-600);
            --ws-surface-feature-link-color-opacity: 1;
            --ws-surface-feature-link-hover-color: var(--ws-color-primary-500);
            --ws-surface-feature-link-hover-color-opacity: 1;
            --ws-surface-contact-icon-color: var(--ws-color-text-white);
            --ws-surface-contact-icon-color-opacity: 0.45;
            --ws-surface-m-table-with-buttons-thead-border-color: var(--ws-color-text-white);
            --ws-surface-m-table-with-buttons-thead-border-color-opacity: 1;
            --ws-surface-m-table-with-buttons-border-color: var(--ws-color-dark-500);
            --ws-surface-m-table-with-buttons-border-color-opacity: 1;
            --ws-surface-tag-color: var(--ws-color-text-white);
            --ws-surface-tag-color-opacity: 0.49;
            --ws-surface-tag-background-color: var(--ws-color-dark-700);
            --ws-surface-tag-background-color-opacity: 1;
            --ws-surface-counter-text-color: var(--ws-color-primary-600);
            --ws-surface-counter-text-opacity: 1;
            --ws-surface-m-phone-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-color-opacity: 0.45;
            --ws-surface-m-nav-link-hover-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-hover-color-opacity: 1;
            --ws-surface-m-nav-link-active-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-active-color-opacity: 1;
            --ws-surface-dropdown-arrow-color: var(--ws-color-text-white);
            --ws-surface-dropdown-arrow-disabled-color: var(--ws-color-text-white);
            --ws-surface-dropdown-list-background: var(--ws-color-dark-800);
            --ws-surface-dropdown-list-row-background: var(--ws-color-dark-800);
            --ws-surface-dropdown-list-row-hover-background: var(--ws-color-dark-700);
            --ws-surface-dropdown-list-row-selected-background: var(--ws-color-primary-600);
            --ws-surface-dropdown-list-text-color: var(--ws-color-text-white);
            --ws-surface-dropdown-list-text-hover-color: var(--ws-color-text-white);
            --ws-surface-dropdown-list-text-selected-color: var(--ws-color-text-white);
            --ws-surface-dropdown-text-color: var(--ws-color-text-white);
            --ws-surface-dropdown-disabled-color: var(--ws-color-text-white)
          }

          [data-surface].ws-dark-1 {
            --ws-surface-form-date-time-picker-wrapper-background-color: var(--ws-color-dark-700);
            --ws-surface-form-date-time-picker-current-month-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-line-color: var(--ws-color-dark-500);
            --ws-surface-form-date-time-picker-current-day-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-current-day-background: var(--ws-color-primary-600);
            --ws-surface-form-date-time-picker-current-day-background-hover: var(--ws-color-dark-600);
            --ws-surface-form-date-time-picker-icon-color: var(--ws-color-primary-500);
            --ws-surface-form-date-time-picker-icon-hover-color: var(--ws-color-primary-400);
            --ws-surface-form-date-time-picker-other-month-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-other-month-color-opacity: 0.22;
            --ws-surface-form-date-time-picker-weekday-color: var(--ws-color-text-white);
            --ws-surface-form-date-time-picker-weekday-color-opacity: 0.45;
            --ws-surface-form-time-picker-background-color: var(--ws-color-dark-700);
            --ws-surface-form-time-picker-background-hover: var(--ws-color-dark-600);
            --ws-surface-form-time-picker-color: var(--ws-color-text-white);
            --ws-surface-form-time-picker-line-color: var(--ws-color-dark-500);
            --ws-surface-background-color: var(--ws-color-dark-800);
            --ws-surface-border-color: var(--ws-color-dark-300);
            --ws-surface-focus-outline-color: var(--ws-color-info-900);
            --ws-surface-focus-outline-color-opacity: 1;
            --ws-surface-error-focus-outline-color: var(--ws-color-error-900);
            --ws-surface-error-focus-outline-color-opacity: 0.79;
            --ws-surface-primary-button-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-background-opacity: 1;
            --ws-surface-primary-button-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-text-color-opacity: 1;
            --ws-surface-primary-button-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-border-opacity: 1;
            --ws-surface-primary-button-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-background-opacity: 1;
            --ws-surface-primary-button-hover-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-hover-text-color-opacity: 1;
            --ws-surface-primary-button-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-primary-button-hover-border-opacity: 1;
            --ws-surface-primary-button-active-background-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-background-opacity: 1;
            --ws-surface-primary-button-active-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-active-text-color-opacity: 1;
            --ws-surface-primary-button-active-border-color: var(--ws-color-primary-700);
            --ws-surface-primary-button-active-border-opacity: 1;
            --ws-surface-primary-button-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-background-opacity: 0.18;
            --ws-surface-primary-button-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-text-color-opacity: 0.33;
            --ws-surface-primary-button-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-primary-button-disabled-border-opacity: 0.18;
            --ws-surface-secondary-button-1-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-background-opacity: 1;
            --ws-surface-secondary-button-1-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-text-color-opacity: 1;
            --ws-surface-secondary-button-1-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-border-opacity: 1;
            --ws-surface-secondary-button-1-hover-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-hover-background-opacity: 0.4;
            --ws-surface-secondary-button-1-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-1-hover-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-hover-border-opacity: 0.4;
            --ws-surface-secondary-button-1-active-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-active-background-opacity: 0.4;
            --ws-surface-secondary-button-1-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-active-text-color-opacity: 1;
            --ws-surface-secondary-button-1-active-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-active-border-opacity: 0.4;
            --ws-surface-secondary-button-1-disabled-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-disabled-background-opacity: 0.54;
            --ws-surface-secondary-button-1-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-disabled-text-color-opacity: 0.22;
            --ws-surface-secondary-button-1-disabled-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-1-disabled-border-opacity: 0.54;
            --ws-surface-secondary-button-2-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-background-opacity: 0;
            --ws-surface-secondary-button-2-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-text-color-opacity: 1;
            --ws-surface-secondary-button-2-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-border-opacity: 1;
            --ws-surface-secondary-button-2-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-background-opacity: 1;
            --ws-surface-secondary-button-2-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-2-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-hover-border-opacity: 1;
            --ws-surface-secondary-button-2-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-background-opacity: 1;
            --ws-surface-secondary-button-2-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-text-color-opacity: 1;
            --ws-surface-secondary-button-2-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-active-border-opacity: 1;
            --ws-surface-secondary-button-2-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-background-opacity: 0;
            --ws-surface-secondary-button-2-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-text-color-opacity: 0.22;
            --ws-surface-secondary-button-2-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-2-disabled-border-opacity: 0.18;
            --ws-surface-secondary-button-3-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-background-opacity: 0;
            --ws-surface-secondary-button-3-text-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-3-text-color-opacity: 1;
            --ws-surface-secondary-button-3-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-border-opacity: 1;
            --ws-surface-secondary-button-3-hover-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-background-opacity: 1;
            --ws-surface-secondary-button-3-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-3-hover-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-hover-border-opacity: 1;
            --ws-surface-secondary-button-3-active-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-background-opacity: 1;
            --ws-surface-secondary-button-3-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-text-color-opacity: 1;
            --ws-surface-secondary-button-3-active-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-active-border-opacity: 1;
            --ws-surface-secondary-button-3-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-background-opacity: 0;
            --ws-surface-secondary-button-3-disabled-text-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-3-disabled-text-color-opacity: 0.47;
            --ws-surface-secondary-button-3-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-3-disabled-border-opacity: 0.18;
            --ws-surface-secondary-button-4-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-background-opacity: 0;
            --ws-surface-secondary-button-4-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-text-color-opacity: 1;
            --ws-surface-secondary-button-4-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-border-opacity: 1;
            --ws-surface-secondary-button-4-hover-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-hover-background-opacity: 1;
            --ws-surface-secondary-button-4-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-4-hover-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-hover-border-opacity: 1;
            --ws-surface-secondary-button-4-active-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-active-background-opacity: 1;
            --ws-surface-secondary-button-4-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-active-text-color-opacity: 1;
            --ws-surface-secondary-button-4-active-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-active-border-opacity: 1;
            --ws-surface-secondary-button-4-disabled-background-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-disabled-background-opacity: 0;
            --ws-surface-secondary-button-4-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-disabled-text-color-opacity: 0.22;
            --ws-surface-secondary-button-4-disabled-border-color: var(--ws-color-dark-500);
            --ws-surface-secondary-button-4-disabled-border-opacity: 0.54;
            --ws-surface-secondary-button-5-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-background-opacity: 1;
            --ws-surface-secondary-button-5-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-text-color-opacity: 1;
            --ws-surface-secondary-button-5-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-border-opacity: 1;
            --ws-surface-secondary-button-5-hover-background-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-background-opacity: 1;
            --ws-surface-secondary-button-5-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-5-hover-border-color: var(--ws-color-primary-500);
            --ws-surface-secondary-button-5-hover-border-opacity: 1;
            --ws-surface-secondary-button-5-active-background-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-background-opacity: 1;
            --ws-surface-secondary-button-5-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-active-text-color-opacity: 1;
            --ws-surface-secondary-button-5-active-border-color: var(--ws-color-primary-700);
            --ws-surface-secondary-button-5-active-border-opacity: 1;
            --ws-surface-secondary-button-5-disabled-background-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-background-opacity: 0.18;
            --ws-surface-secondary-button-5-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-disabled-text-color-opacity: 0.33;
            --ws-surface-secondary-button-5-disabled-border-color: var(--ws-color-primary-600);
            --ws-surface-secondary-button-5-disabled-border-opacity: 0.18;
            --ws-surface-text-color: var(--ws-color-text-white);
            --ws-surface-text-high-emphasis-opacity: 1;
            --ws-surface-text-medium-emphasis-opacity: 0.45;
            --ws-surface-text-disabled-emphasis-opacity: 0.22;
            --ws-surface-link-text-color: var(--ws-color-primary-500);
            --ws-surface-link-text-color-opacity: 1;
            --ws-surface-link-hover-text-color: var(--ws-color-primary-400);
            --ws-surface-link-hover-text-color-opacity: 1;
            --ws-surface-footer-link-text-color: var(--ws-color-text-white);
            --ws-surface-footer-link-text-color-opacity: 0.47;
            --ws-surface-footer-link-hover-text-color: var(--ws-color-text-white);
            --ws-surface-footer-link-hover-text-color-opacity: 1;
            --ws-surface-highlighter-text-color: var(--ws-color-text-white);
            --ws-surface-highlighter-background-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color: var(--ws-color-primary-600);
            --ws-surface-mark-text-color-opacity: 1;
            --ws-surface-form-input-border-color: var(--ws-color-dark-300);
            --ws-surface-form-input-border-color-opacity: 1;
            --ws-surface-form-input-focus-border-color: var(--ws-color-info-700);
            --ws-surface-form-input-focus-border-color-opacity: 1;
            --ws-surface-form-input-disabled-border-color: var(--ws-color-dark-300);
            --ws-surface-form-input-disabled-border-color-opacity: 0.43;
            --ws-surface-form-input-error-border-color: var(--ws-color-error-600);
            --ws-surface-form-input-error-border-color-opacity: 1;
            --ws-surface-form-validation-error-text-color: var(--ws-color-error-300);
            --ws-surface-form-checkbox-icon-color: var(--ws-color-text-white);
            --ws-surface-form-checkbox-icon-color-opacity: 1;
            --ws-surface-form-checkbox-background-color: var(--ws-color-dark-900);
            --ws-surface-form-checkbox-background-color-opacity: 1;
            --ws-surface-form-checkbox-border-color: var(--ws-color-dark-300);
            --ws-surface-form-checkbox-border-color-opacity: 1;
            --ws-surface-form-checkbox-checked-background-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-background-color-opacity: 1;
            --ws-surface-form-checkbox-checked-border-color: var(--ws-color-primary-600);
            --ws-surface-form-checkbox-checked-border-color-opacity: 1;
            --ws-surface-form-checkbox-disabled-border-color-opacity: 0.43;
            --ws-surface-form-checkbox-disabled-background-color: var(--ws-color-dark-900);
            --ws-surface-form-checkbox-disabled-background-color-opacity: 0.43;
            --ws-surface-social-icon-color: var(--ws-color-primary-600);
            --ws-surface-social-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-social-icon-hover-color-opacity: 1;
            --ws-surface-feature-icon-color: var(--ws-color-primary-600);
            --ws-surface-feature-link-color: var(--ws-color-primary-500);
            --ws-surface-feature-link-color-opacity: 1;
            --ws-surface-feature-link-hover-color: var(--ws-color-primary-400);
            --ws-surface-feature-link-hover-color-opacity: 1;
            --ws-surface-contact-icon-color: var(--ws-color-text-white);
            --ws-surface-contact-icon-color-opacity: 0.45;
            --ws-surface-m-table-with-buttons-thead-border-color: var(--ws-color-text-white);
            --ws-surface-m-table-with-buttons-thead-border-color-opacity: 1;
            --ws-surface-m-table-with-buttons-border-color: var(--ws-color-dark-400);
            --ws-surface-m-table-with-buttons-border-color-opacity: 1;
            --ws-surface-tag-color: var(--ws-color-text-white);
            --ws-surface-tag-color-opacity: 0.55;
            --ws-surface-tag-background-color: var(--ws-color-dark-500);
            --ws-surface-tag-background-color-opacity: 1;
            --ws-surface-counter-text-color: var(--ws-color-primary-600);
            --ws-surface-counter-text-opacity: 1;
            --ws-surface-m-phone-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-color-opacity: 0.47;
            --ws-surface-m-nav-link-hover-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-hover-color-opacity: 1;
            --ws-surface-m-nav-link-active-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-active-color-opacity: 1;
            --ws-surface-dropdown-arrow-color: var(--ws-color-text-white);
            --ws-surface-dropdown-arrow-disabled-color: var(--ws-color-text-white);
            --ws-surface-dropdown-list-background: var(--ws-color-dark-700);
            --ws-surface-dropdown-list-row-background: var(--ws-color-dark-700);
            --ws-surface-dropdown-list-row-hover-background: var(--ws-color-dark-600);
            --ws-surface-dropdown-list-row-selected-background: var(--ws-color-primary-600);
            --ws-surface-dropdown-list-text-color: var(--ws-color-text-white);
            --ws-surface-dropdown-list-text-hover-color: var(--ws-color-text-white);
            --ws-surface-dropdown-list-text-selected-color: var(--ws-color-text-white);
            --ws-surface-dropdown-text-color: var(--ws-color-text-white);
            --ws-surface-dropdown-disabled-color: var(--ws-color-text-white)
          }

          [data-surface].ws-dark-2 {
            --ws-surface-background-color: var(--ws-color-text-black);
            --ws-surface-focus-outline-color: var(--ws-color-info-900);
            --ws-surface-error-focus-outline-color-opacity: 0.72;
            --ws-surface-text-color: var(--ws-color-text-white);
            --ws-surface-text-high-emphasis-opacity: 1;
            --ws-surface-social-icon-color: var(--ws-color-primary-600);
            --ws-surface-social-icon-hover-color: var(--ws-color-primary-500);
            --ws-surface-social-icon-hover-color-opacity: 1;
            --ws-surface-contact-icon-color: var(--ws-color-text-white);
            --ws-surface-contact-icon-color-opacity: 0.46;
            --ws-surface-m-phone-color: var(--ws-color-text-white)
          }

          [data-surface].ws-primary-0 {
            --ws-surface-background-color: var(--ws-color-primary-600);
            --ws-surface-focus-outline-color: var(--ws-color-info-200);
            --ws-surface-focus-outline-color-opacity: 1;
            --ws-surface-primary-button-background-color: var(--ws-color-text-white);
            --ws-surface-primary-button-background-opacity: 1;
            --ws-surface-primary-button-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-text-color-opacity: 1;
            --ws-surface-primary-button-border-color: var(--ws-color-text-white);
            --ws-surface-primary-button-border-opacity: 1;
            --ws-surface-primary-button-hover-background-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-hover-background-opacity: 1;
            --ws-surface-primary-button-hover-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-hover-text-color-opacity: 1;
            --ws-surface-primary-button-hover-border-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-hover-border-opacity: 1;
            --ws-surface-primary-button-active-background-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-active-background-opacity: 1;
            --ws-surface-primary-button-active-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-active-text-color-opacity: 1;
            --ws-surface-primary-button-active-border-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-active-border-opacity: 1;
            --ws-surface-primary-button-disabled-background-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-background-opacity: 0.15;
            --ws-surface-primary-button-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-text-color-opacity: 0.34;
            --ws-surface-primary-button-disabled-border-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-border-opacity: 0.15;
            --ws-surface-secondary-button-1-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-background-opacity: 1;
            --ws-surface-secondary-button-1-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-text-color-opacity: 1;
            --ws-surface-secondary-button-1-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-border-opacity: 1;
            --ws-surface-secondary-button-1-hover-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-hover-background-opacity: 0.4;
            --ws-surface-secondary-button-1-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-1-hover-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-hover-border-opacity: 0.4;
            --ws-surface-secondary-button-1-active-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-active-background-opacity: 0.4;
            --ws-surface-secondary-button-1-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-active-text-color-opacity: 1;
            --ws-surface-secondary-button-1-active-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-active-border-opacity: 0.4;
            --ws-surface-secondary-button-1-disabled-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-disabled-background-opacity: 0.67;
            --ws-surface-secondary-button-1-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-disabled-text-color-opacity: 0.44;
            --ws-surface-secondary-button-1-disabled-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-disabled-border-opacity: 0.67;
            --ws-surface-secondary-button-2-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-background-opacity: 0;
            --ws-surface-secondary-button-2-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-text-color-opacity: 1;
            --ws-surface-secondary-button-2-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-border-opacity: 1;
            --ws-surface-secondary-button-2-hover-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-background-opacity: 1;
            --ws-surface-secondary-button-2-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-2-hover-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-border-opacity: 1;
            --ws-surface-secondary-button-2-active-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-background-opacity: 1;
            --ws-surface-secondary-button-2-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-active-text-color-opacity: 1;
            --ws-surface-secondary-button-2-active-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-border-opacity: 1;
            --ws-surface-secondary-button-2-disabled-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-background-opacity: 0;
            --ws-surface-secondary-button-2-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-text-color-opacity: 0.51;
            --ws-surface-secondary-button-2-disabled-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-border-opacity: 0.15;
            --ws-surface-secondary-button-3-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-background-opacity: 0;
            --ws-surface-secondary-button-3-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-text-color-opacity: 1;
            --ws-surface-secondary-button-3-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-border-opacity: 1;
            --ws-surface-secondary-button-3-hover-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-background-opacity: 1;
            --ws-surface-secondary-button-3-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-3-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-3-hover-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-border-opacity: 1;
            --ws-surface-secondary-button-3-active-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-background-opacity: 1;
            --ws-surface-secondary-button-3-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-3-active-text-color-opacity: 1;
            --ws-surface-secondary-button-3-active-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-border-opacity: 1;
            --ws-surface-secondary-button-3-disabled-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-disabled-background-opacity: 0;
            --ws-surface-secondary-button-3-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-disabled-text-color-opacity: 0.51;
            --ws-surface-secondary-button-3-disabled-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-disabled-border-opacity: 0.15;
            --ws-surface-secondary-button-4-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-background-opacity: 0;
            --ws-surface-secondary-button-4-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-text-color-opacity: 1;
            --ws-surface-secondary-button-4-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-border-opacity: 1;
            --ws-surface-secondary-button-4-hover-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-hover-background-opacity: 1;
            --ws-surface-secondary-button-4-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-4-hover-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-hover-border-opacity: 1;
            --ws-surface-secondary-button-4-active-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-active-background-opacity: 1;
            --ws-surface-secondary-button-4-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-active-text-color-opacity: 1;
            --ws-surface-secondary-button-4-active-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-active-border-opacity: 1;
            --ws-surface-secondary-button-4-disabled-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-disabled-background-opacity: 0;
            --ws-surface-secondary-button-4-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-disabled-text-color-opacity: 0.51;
            --ws-surface-secondary-button-4-disabled-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-disabled-border-opacity: 0.67;
            --ws-surface-secondary-button-5-background-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-background-opacity: 1;
            --ws-surface-secondary-button-5-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-text-color-opacity: 1;
            --ws-surface-secondary-button-5-border-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-border-opacity: 1;
            --ws-surface-secondary-button-5-hover-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-5-hover-background-opacity: 1;
            --ws-surface-secondary-button-5-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-5-hover-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-5-hover-border-opacity: 1;
            --ws-surface-secondary-button-5-active-background-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-5-active-background-opacity: 1;
            --ws-surface-secondary-button-5-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-active-text-color-opacity: 1;
            --ws-surface-secondary-button-5-active-border-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-5-active-border-opacity: 1;
            --ws-surface-secondary-button-5-disabled-background-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-disabled-background-opacity: 0.43;
            --ws-surface-secondary-button-5-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-disabled-text-color-opacity: 0.33;
            --ws-surface-secondary-button-5-disabled-border-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-disabled-border-opacity: 0.43;
            --ws-surface-text-color: var(--ws-color-text-white);
            --ws-surface-text-high-emphasis-opacity: 1;
            --ws-surface-text-medium-emphasis-opacity: 1;
            --ws-surface-text-disabled-emphasis-opacity: 0.51;
            --ws-surface-link-text-color: var(--ws-color-text-white);
            --ws-surface-link-text-color-opacity: 1;
            --ws-surface-link-hover-text-color: var(--ws-color-text-white);
            --ws-surface-link-hover-text-color-opacity: 0.4;
            --ws-surface-feature-link-color: var(--ws-color-text-white);
            --ws-surface-feature-link-color-opacity: 1;
            --ws-surface-feature-link-hover-color: var(--ws-color-text-white);
            --ws-surface-feature-link-hover-color-opacity: 0.4;
            --ws-surface-highlighter-text-color: var(--ws-color-text-white);
            --ws-surface-highlighter-background-color: var(--ws-color-primary-900);
            --ws-surface-social-icon-color: var(--ws-color-text-white);
            --ws-surface-social-icon-hover-color: var(--ws-color-text-white);
            --ws-surface-social-icon-hover-color-opacity: 0.4;
            --ws-surface-m-phone-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-color-opacity: 0.4;
            --ws-surface-m-nav-link-hover-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-hover-color-opacity: 1;
            --ws-surface-m-nav-link-active-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-active-color-opacity: 1
          }

          .ws-m-testimonialws-media-container:before,
          .ws-m-testimonialws-media-container:after,
          .ws-m-scheduletablethead,
          [data-surface].ws-secondary-0 {
            --ws-surface-background-color: var(--ws-color-primary-600);
            --ws-surface-focus-outline-color: var(--ws-color-info-200);
            --ws-surface-focus-outline-color-opacity: 1;
            --ws-surface-primary-button-background-color: var(--ws-color-text-white);
            --ws-surface-primary-button-background-opacity: 1;
            --ws-surface-primary-button-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-text-color-opacity: 1;
            --ws-surface-primary-button-border-color: var(--ws-color-text-white);
            --ws-surface-primary-button-border-opacity: 1;
            --ws-surface-primary-button-hover-background-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-hover-background-opacity: 1;
            --ws-surface-primary-button-hover-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-hover-text-color-opacity: 1;
            --ws-surface-primary-button-hover-border-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-hover-border-opacity: 1;
            --ws-surface-primary-button-active-background-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-active-background-opacity: 1;
            --ws-surface-primary-button-active-text-color: var(--ws-color-text-black);
            --ws-surface-primary-button-active-text-color-opacity: 1;
            --ws-surface-primary-button-active-border-color: var(--ws-color-primary-50);
            --ws-surface-primary-button-active-border-opacity: 1;
            --ws-surface-primary-button-disabled-background-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-background-opacity: 0.15;
            --ws-surface-primary-button-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-text-color-opacity: 0.34;
            --ws-surface-primary-button-disabled-border-color: var(--ws-color-text-white);
            --ws-surface-primary-button-disabled-border-opacity: 0.15;
            --ws-surface-secondary-button-1-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-background-opacity: 1;
            --ws-surface-secondary-button-1-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-text-color-opacity: 1;
            --ws-surface-secondary-button-1-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-border-opacity: 1;
            --ws-surface-secondary-button-1-hover-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-hover-background-opacity: 0.4;
            --ws-surface-secondary-button-1-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-1-hover-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-hover-border-opacity: 0.4;
            --ws-surface-secondary-button-1-active-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-active-background-opacity: 0.4;
            --ws-surface-secondary-button-1-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-active-text-color-opacity: 1;
            --ws-surface-secondary-button-1-active-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-active-border-opacity: 0.4;
            --ws-surface-secondary-button-1-disabled-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-disabled-background-opacity: 0.67;
            --ws-surface-secondary-button-1-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-1-disabled-text-color-opacity: 0.44;
            --ws-surface-secondary-button-1-disabled-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-1-disabled-border-opacity: 0.67;
            --ws-surface-secondary-button-2-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-background-opacity: 0;
            --ws-surface-secondary-button-2-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-text-color-opacity: 1;
            --ws-surface-secondary-button-2-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-border-opacity: 1;
            --ws-surface-secondary-button-2-hover-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-background-opacity: 1;
            --ws-surface-secondary-button-2-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-2-hover-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-hover-border-opacity: 1;
            --ws-surface-secondary-button-2-active-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-background-opacity: 1;
            --ws-surface-secondary-button-2-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-2-active-text-color-opacity: 1;
            --ws-surface-secondary-button-2-active-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-active-border-opacity: 1;
            --ws-surface-secondary-button-2-disabled-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-background-opacity: 0;
            --ws-surface-secondary-button-2-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-text-color-opacity: 0.51;
            --ws-surface-secondary-button-2-disabled-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-2-disabled-border-opacity: 0.15;
            --ws-surface-secondary-button-3-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-background-opacity: 0;
            --ws-surface-secondary-button-3-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-text-color-opacity: 1;
            --ws-surface-secondary-button-3-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-border-opacity: 1;
            --ws-surface-secondary-button-3-hover-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-background-opacity: 1;
            --ws-surface-secondary-button-3-hover-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-3-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-3-hover-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-hover-border-opacity: 1;
            --ws-surface-secondary-button-3-active-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-background-opacity: 1;
            --ws-surface-secondary-button-3-active-text-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-3-active-text-color-opacity: 1;
            --ws-surface-secondary-button-3-active-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-active-border-opacity: 1;
            --ws-surface-secondary-button-3-disabled-background-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-disabled-background-opacity: 0;
            --ws-surface-secondary-button-3-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-disabled-text-color-opacity: 0.51;
            --ws-surface-secondary-button-3-disabled-border-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-3-disabled-border-opacity: 0.15;
            --ws-surface-secondary-button-4-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-background-opacity: 0;
            --ws-surface-secondary-button-4-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-text-color-opacity: 1;
            --ws-surface-secondary-button-4-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-border-opacity: 1;
            --ws-surface-secondary-button-4-hover-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-hover-background-opacity: 1;
            --ws-surface-secondary-button-4-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-4-hover-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-hover-border-opacity: 1;
            --ws-surface-secondary-button-4-active-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-active-background-opacity: 1;
            --ws-surface-secondary-button-4-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-active-text-color-opacity: 1;
            --ws-surface-secondary-button-4-active-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-active-border-opacity: 1;
            --ws-surface-secondary-button-4-disabled-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-disabled-background-opacity: 0;
            --ws-surface-secondary-button-4-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-4-disabled-text-color-opacity: 0.47;
            --ws-surface-secondary-button-4-disabled-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-4-disabled-border-opacity: 0.67;
            --ws-surface-secondary-button-5-background-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-background-opacity: 1;
            --ws-surface-secondary-button-5-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-text-color-opacity: 1;
            --ws-surface-secondary-button-5-border-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-border-opacity: 1;
            --ws-surface-secondary-button-5-hover-background-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-5-hover-background-opacity: 1;
            --ws-surface-secondary-button-5-hover-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-hover-text-color-opacity: 1;
            --ws-surface-secondary-button-5-hover-border-color: var(--ws-color-primary-800);
            --ws-surface-secondary-button-5-hover-border-opacity: 1;
            --ws-surface-secondary-button-5-active-background-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-5-active-background-opacity: 1;
            --ws-surface-secondary-button-5-active-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-active-text-color-opacity: 1;
            --ws-surface-secondary-button-5-active-border-color: var(--ws-color-text-black);
            --ws-surface-secondary-button-5-active-border-opacity: 1;
            --ws-surface-secondary-button-5-disabled-background-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-disabled-background-opacity: 0.43;
            --ws-surface-secondary-button-5-disabled-text-color: var(--ws-color-text-white);
            --ws-surface-secondary-button-5-disabled-text-color-opacity: 0.33;
            --ws-surface-secondary-button-5-disabled-border-color: var(--ws-color-primary-900);
            --ws-surface-secondary-button-5-disabled-border-opacity: 0.43;
            --ws-surface-text-color: var(--ws-color-text-white);
            --ws-surface-text-high-emphasis-opacity: 1;
            --ws-surface-text-medium-emphasis-opacity: 1;
            --ws-surface-text-disabled-emphasis-opacity: 0.51;
            --ws-surface-link-text-color: var(--ws-color-text-white);
            --ws-surface-link-text-color-opacity: 1;
            --ws-surface-link-hover-text-color: var(--ws-color-text-white);
            --ws-surface-link-hover-text-color-opacity: 0.4;
            --ws-surface-highlighter-text-color: var(--ws-color-text-white);
            --ws-surface-highlighter-background-color: var(--ws-color-primary-900);
            --ws-surface-social-icon-color: var(--ws-color-text-white);
            --ws-surface-social-icon-hover-color: var(--ws-color-text-white);
            --ws-surface-social-icon-hover-color-opacity: 0.4;
            --ws-surface-feature-icon-color: var(--ws-color-text-white);
            --ws-surface-feature-link-color: var(--ws-color-text-white);
            --ws-surface-feature-link-color-opacity: 1;
            --ws-surface-feature-link-hover-color: var(--ws-color-text-white);
            --ws-surface-feature-link-hover-color-opacity: 0.4;
            --ws-surface-contact-icon-color: var(--ws-color-text-white);
            --ws-surface-contact-icon-color-opacity: 1;
            --ws-surface-m-phone-color: var(--ws-color-text-white);
            --ws-surface-quote-icon-color: var(--ws-color-text-white);
            --ws-surface-quote-icon-color-opacity: 1;
            --ws-surface-m-nav-link-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-color-opacity: 0.4;
            --ws-surface-m-nav-link-hover-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-hover-color-opacity: 1;
            --ws-surface-m-nav-link-active-color: var(--ws-color-text-white);
            --ws-surface-m-nav-link-active-color-opacity: 1
          }
        </style>
      </div>
      <div data-current-fonts="ibm-plex-sans_ibm-plex-sans" id="ws-custom-fonts">
        <style>
          :root {
            --first-font-family: 'IBM Plex Sans';
            --second-font-family: 'IBM Plex Sans';
            --ws-primary-font-family: var(--first-font-family), var(--font-sans-serif-fallback);
            --ws-secondary-font-family: var(--second-font-family), var(--font-sans-serif-fallback);
            --ws-heading-1-font-family: var(--ws-secondary-font-family);
            --ws-heading-1-font-size: 56;
            --ws-heading-1-line-height: 1.286em;
            --ws-heading-1-font-weight: 500;
            --ws-heading-1-font-weight-emulation: none;
            --ws-heading-1-font-style: normal;
            --ws-heading-1-text-transform: none;
            --ws-heading-1-letter-spacing: normal;
            --ws-heading-1-text-decoration: none;
            --ws-heading-2-font-family: var(--ws-secondary-font-family);
            --ws-heading-2-font-size: 40;
            --ws-heading-2-line-height: 1.4em;
            --ws-heading-2-font-weight: 400;
            --ws-heading-2-font-weight-emulation: none;
            --ws-heading-2-font-style: normal;
            --ws-heading-2-text-transform: none;
            --ws-heading-2-letter-spacing: normal;
            --ws-heading-2-text-decoration: none;
            --ws-heading-3-font-family: var(--ws-secondary-font-family);
            --ws-heading-3-font-size: 32;
            --ws-heading-3-line-height: 1.375em;
            --ws-heading-3-font-weight: 400;
            --ws-heading-3-font-weight-emulation: none;
            --ws-heading-3-font-style: normal;
            --ws-heading-3-text-transform: none;
            --ws-heading-3-letter-spacing: normal;
            --ws-heading-3-text-decoration: none;
            --ws-heading-4-font-family: var(--ws-secondary-font-family);
            --ws-heading-4-font-size: 22;
            --ws-heading-4-line-height: 1.636em;
            --ws-heading-4-font-weight: 500;
            --ws-heading-4-font-weight-emulation: none;
            --ws-heading-4-font-style: normal;
            --ws-heading-4-text-transform: none;
            --ws-heading-4-letter-spacing: normal;
            --ws-heading-4-text-decoration: none;
            --ws-heading-5-font-family: var(--ws-primary-font-family);
            --ws-heading-5-font-size: 18;
            --ws-heading-5-line-height: 1.778em;
            --ws-heading-5-font-weight: 400;
            --ws-heading-5-font-weight-emulation: none;
            --ws-heading-5-font-style: normal;
            --ws-heading-5-text-transform: none;
            --ws-heading-5-letter-spacing: normal;
            --ws-heading-5-text-decoration: none;
            --ws-heading-6-font-family: var(--ws-primary-font-family);
            --ws-heading-6-font-size: 16;
            --ws-heading-6-line-height: 1.75em;
            --ws-heading-6-font-weight: 500;
            --ws-heading-6-font-weight-emulation: none;
            --ws-heading-6-font-style: normal;
            --ws-heading-6-text-transform: none;
            --ws-heading-6-letter-spacing: normal;
            --ws-heading-6-text-decoration: none;
            --ws-base-font-family: var(--ws-primary-font-family);
            --ws-base-font-size: 16px;
            --ws-base-line-height: 1.75em;
            --ws-base-font-weight: 400;
            --ws-base-font-weight-emulation: none;
            --ws-base-font-style: normal;
            --ws-base-text-transform: none;
            --ws-base-letter-spacing: normal;
            --ws-base-text-decoration: none;
            --ws-blockquote-font-family: var(--ws-primary-font-family);
            --ws-blockquote-font-size: var(--ws-base-font-size);
            --ws-blockquote-line-height: var(--ws-base-line-height);
            --ws-blockquote-font-weight: var(--ws-base-font-weight);
            --ws-blockquote-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-blockquote-font-style: var(--ws-base-font-style);
            --ws-blockquote-text-transform: var(--ws-base-text-transform);
            --ws-blockquote-letter-spacing: var(--ws-base-letter-spacing);
            --ws-blockquote-text-decoration: var(--ws-base-text-decoration);
            --ws-base-font-weight-bold: 700;
            --ws-base-font-weight-bold-emulation: none;
            --ws-heading-1-font-weight-bold: 700;
            --ws-heading-1-font-weight-bold-emulation: none;
            --ws-heading-2-font-weight-bold: 700;
            --ws-heading-2-font-weight-bold-emulation: none;
            --ws-heading-3-font-weight-bold: 600;
            --ws-heading-3-font-weight-bold-emulation: none;
            --ws-heading-4-font-weight-bold: 700;
            --ws-heading-4-font-weight-bold-emulation: none;
            --ws-heading-5-font-weight-bold: 700;
            --ws-heading-5-font-weight-bold-emulation: none;
            --ws-heading-6-font-weight-bold: 700;
            --ws-heading-6-font-weight-bold-emulation: none;
            --ws-label-font-weight-bold: 700;
            --ws-label-font-weight-bold-emulation: none;
            --ws-button-font-family: var(--ws-base-font-family);
            --ws-button-font-size: var(--ws-base-font-size);
            --ws-button-line-height: var(--ws-base-line-height);
            --ws-button-font-weight: 500;
            --ws-button-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-button-font-style: var(--ws-base-font-style);
            --ws-button-text-transform: var(--ws-base-text-transform);
            --ws-button-letter-spacing: var(--ws-base-letter-spacing);
            --ws-featured-link-font-family: var(--ws-base-font-family);
            --ws-featured-link-font-size: var(--ws-base-font-size);
            --ws-featured-link-line-height: var(--ws-base-line-height);
            --ws-featured-link-font-weight: 700;
            --ws-featured-link-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-featured-link-font-style: var(--ws-base-font-style);
            --ws-featured-link-text-transform: var(--ws-base-text-transform);
            --ws-featured-link-letter-spacing: var(--ws-base-letter-spacing);
            --ws-featured-link-text-decoration: var(--ws-base-text-decoration);
            --ws-site-name-font-family: var(--ws-primary-font-family);
            --ws-site-name-font-size: 22px;
            --ws-site-name-line-height: 1.635em;
            --ws-site-name-font-weight: 500;
            --ws-site-name-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-site-name-font-style: var(--ws-base-font-style);
            --ws-site-name-text-transform: var(--ws-base-text-transform);
            --ws-site-name-letter-spacing: var(--ws-base-letter-spacing);
            --ws-site-name-text-decoration: var(--ws-base-text-decoration);
            --ws-m-header-phone-font-family: var(--ws-primary-font-family);
            --ws-m-header-phone-font-size: 24px;
            --ws-m-header-phone-line-height: 1.67em;
            --ws-m-header-phone-font-weight: var(--ws-base-font-weight);
            --ws-m-header-phone-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-m-header-phone-font-style: var(--ws-base-font-style);
            --ws-m-header-phone-text-transform: var(--ws-base-text-transform);
            --ws-m-header-phone-letter-spacing: var(--ws-base-letter-spacing);
            --ws-m-header-phone-text-decoration: var(--ws-base-text-decoration);
            --ws-nav-menu-items-font-family: var(--ws-base-font-family);
            --ws-nav-menu-items-font-size: var(--ws-base-font-size);
            --ws-nav-menu-items-line-height: var(--ws-base-line-height);
            --ws-nav-menu-items-font-weight: 500;
            --ws-nav-menu-items-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-nav-menu-items-font-style: var(--ws-base-font-style);
            --ws-nav-menu-items-text-transform: var(--ws-base-text-transform);
            --ws-nav-menu-items-letter-spacing: var(--ws-base-letter-spacing);
            --ws-label-font-family: var(--ws-base-font-family);
            --ws-label-font-size: var(--ws-base-font-size);
            --ws-label-line-height: var(--ws-base-line-height);
            --ws-label-font-weight: var(--ws-base-font-weight);
            --ws-label-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-label-font-style: var(--ws-base-font-style);
            --ws-label-text-transform: var(--ws-base-text-transform);
            --ws-label-letter-spacing: var(--ws-base-letter-spacing);
            --ws-input-font-family: var(--ws-base-font-family);
            --ws-input-font-size: var(--ws-base-font-size);
            --ws-input-line-height: var(--ws-base-line-height);
            --ws-input-font-weight: var(--ws-base-font-weight);
            --ws-input-font-weight-emulation: var(--ws-base-font-weight-emulation);
            --ws-input-font-style: var(--ws-base-font-style);
            --ws-input-text-transform: var(--ws-base-text-transform);
            --ws-input-letter-spacing: var(--ws-base-letter-spacing);
            --ws-heading-6-decor-font-family: var(--ws-secondary-font-family);
            --ws-heading-6-decor-font-size: 112;
            --ws-heading-6-decor-line-height: 1.071em;
            --ws-heading-6-decor-font-weight: 500;
            --ws-heading-6-decor-font-weight-emulation: none;
            --ws-heading-6-decor-font-style: normal;
            --ws-heading-6-decor-text-transform: none;
            --ws-heading-6-decor-letter-spacing: normal;
            --ws-heading-6-decor-text-decoration: none;
            --ws-heading-6-decor-font-weight-bold: 700;
            --ws-heading-6-decor-font-weight-bold-emulation: none
          }
        </style>
        <script>
          WebFontConfig = {
              google: {
                families: ['IBM+Plex+Sans:400,400i,500,500i,600,600i,700,700i',
                  'IBM+Plex+Sans:400,400i,500,500i,600,600i,700,700i&display=swap'
                ]
              },
              classes: !1,
              events: !1
            },
            function (e) {
              var a = e.createElement('script'),
                s = e.head;
              a.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', a.async = !0, s.appendChild(a,
                s)
            }(document);
        </script>
      </div>
      <div data-theme="selma" id="ws-theme-dependencies">
      </div>
      <div data-current-button-preset="preset-5" id="ws-button-preset">
        <style>
          :root {
            --ws-button-border-radius: var(--ws-button-border-radius-medium)
          }

          ws-button[data-type='primary']>a,
          ws-contact-form-container ws-button[type='submit'],
          .ws-m-pricing-with-icon article ws-button>a,
          .ws-m-table-with-buttons table td ws-button>a,
          ws-header ws-button[slot='primary-button']>a {
            --ws-primary-button-background-color: var(--ws-surface-primary-button-background-color);
            --ws-primary-button-background-opacity: var(--ws-surface-primary-button-background-opacity);
            --ws-primary-button-text-color: var(--ws-surface-primary-button-text-color);
            --ws-primary-button-text-color-opacity: var(--ws-surface-primary-button-text-color-opacity);
            --ws-primary-button-border-color: var(--ws-surface-primary-button-border-color);
            --ws-primary-button-border-opacity: var(--ws-surface-primary-button-border-opacity);
            --ws-primary-button-hover-background-color: var(--ws-surface-primary-button-hover-background-color);
            --ws-primary-button-hover-background-opacity: var(--ws-surface-primary-button-hover-background-opacity);
            --ws-primary-button-hover-text-color: var(--ws-surface-primary-button-hover-text-color);
            --ws-primary-button-hover-text-color-opacity: var(--ws-surface-primary-button-hover-text-color-opacity);
            --ws-primary-button-hover-border-color: var(--ws-surface-primary-button-hover-border-color);
            --ws-primary-button-hover-border-opacity: var(--ws-surface-primary-button-hover-border-opacity);
            --ws-primary-button-active-background-color: var(--ws-surface-primary-button-active-background-color);
            --ws-primary-button-active-background-opacity: var(--ws-surface-primary-button-active-background-opacity);
            --ws-primary-button-active-text-color: var(--ws-surface-primary-button-active-text-color);
            --ws-primary-button-active-text-color-opacity: var(--ws-surface-primary-button-active-text-color-opacity);
            --ws-primary-button-active-border-color: var(--ws-surface-primary-button-active-border-color);
            --ws-primary-button-active-border-opacity: var(--ws-surface-primary-button-active-border-opacity);
            --ws-primary-button-disabled-background-color: var(--ws-surface-primary-button-disabled-background-color);
            --ws-primary-button-disabled-background-opacity: var(--ws-surface-primary-button-disabled-background-opacity);
            --ws-primary-button-disabled-text-color: var(--ws-surface-primary-button-disabled-text-color);
            --ws-primary-button-disabled-text-color-opacity: var(--ws-surface-primary-button-disabled-text-color-opacity);
            --ws-primary-button-disabled-border-color: var(--ws-surface-primary-button-disabled-border-color);
            --ws-primary-button-disabled-border-opacity: var(--ws-surface-primary-button-disabled-border-opacity);
            --ws-primary-button-focus-outline-color: var(--ws-surface-focus-outline-color);
            --ws-primary-button-focus-outline-color-opacity: var(--ws-surface-focus-outline-color-opacity)
          }

          ws-button[data-type='secondary']>a,
          ws-header ws-button[slot='secondary-button']>a {
            --ws-secondary-button-background-color: var(--ws-surface-secondary-button-2-background-color);
            --ws-secondary-button-background-opacity: var(--ws-surface-secondary-button-2-background-opacity);
            --ws-secondary-button-text-color: var(--ws-surface-secondary-button-2-text-color);
            --ws-secondary-button-text-color-opacity: var(--ws-surface-secondary-button-2-text-color-opacity);
            --ws-secondary-button-border-color: var(--ws-surface-secondary-button-2-border-color);
            --ws-secondary-button-border-opacity: var(--ws-surface-secondary-button-2-border-opacity);
            --ws-secondary-button-hover-background-color: var(--ws-surface-secondary-button-2-hover-background-color);
            --ws-secondary-button-hover-background-opacity: var(--ws-surface-secondary-button-2-hover-background-opacity);
            --ws-secondary-button-hover-text-color: var(--ws-surface-secondary-button-2-hover-text-color);
            --ws-secondary-button-hover-text-color-opacity: var(--ws-surface-secondary-button-2-hover-text-color-opacity);
            --ws-secondary-button-hover-border-color: var(--ws-surface-secondary-button-2-hover-border-color);
            --ws-secondary-button-hover-border-opacity: var(--ws-surface-secondary-button-2-hover-border-opacity);
            --ws-secondary-button-active-background-color: var(--ws-surface-secondary-button-2-active-background-color);
            --ws-secondary-button-active-background-opacity: var(--ws-surface-secondary-button-2-active-background-opacity);
            --ws-secondary-button-active-text-color: var(--ws-surface-secondary-button-2-active-text-color);
            --ws-secondary-button-active-text-color-opacity: var(--ws-surface-secondary-button-2-active-text-color-opacity);
            --ws-secondary-button-active-border-color: var(--ws-surface-secondary-button-2-active-border-color);
            --ws-secondary-button-active-border-opacity: var(--ws-surface-secondary-button-2-active-border-opacity);
            --ws-secondary-button-disabled-background-color: var(--ws-surface-secondary-button-2-disabled-background-color);
            --ws-secondary-button-disabled-background-opacity: var(--ws-surface-secondary-button-2-disabled-background-opacity);
            --ws-secondary-button-disabled-text-color: var(--ws-surface-secondary-button-2-disabled-text-color);
            --ws-secondary-button-disabled-text-color-opacity: var(--ws-surface-secondary-button-2-disabled-text-color-opacity);
            --ws-secondary-button-disabled-border-color: var(--ws-surface-secondary-button-2-disabled-border-color);
            --ws-secondary-button-disabled-border-opacity: var(--ws-surface-secondary-button-2-disabled-border-opacity);
            --ws-secondary-button-focus-outline-color: var(--ws-surface-focus-outline-color);
            --ws-secondary-button-focus-outline-color-opacity: var(--ws-surface-focus-outline-color-opacity)
          }
        </style>
      </div>
      <div id="text-color-options">
        <style title="text-color-options">
          :root {
            --custom-color-1656824929958: hsla(0, 0%, 0%, 1);
            --custom-color-1664674826497: hsla(3.04, 73.83%, 58.04%, 1);
            --custom-color-1622021879185: hsla(0, 0%, 0%, 0.54);
            --custom-color-1622437744261: hsl(0, 0%, 0%);
            --custom-color-1621490005230: hsl(3, 74%, 58%);
          }

          #ws-block-pricing-with-icons-aNN6Npxm .ws-light-1 {
            --text-color-1622022194712-1622021879185: var(--custom-color-1622021879185);
            --text-color-1622437763904-1622437744261: var(--custom-color-1622437744261);
            --text-color-1622438087416-1622437744261: var(--custom-color-1622437744261);
            --text-color-1622443213321-1622437744261: var(--custom-color-1622437744261);
            --text-color-1664674826499-1664674826497: var(--custom-color-1664674826497);
            --text-color-1664674895101-1664674826497: var(--custom-color-1664674826497);
            --text-color-1664674974645-1664674826497: var(--custom-color-1664674826497);
          }

          #ws-block-features-with-icons-IZE1cGB6 .ws-light-0 {
            --text-color-1656814367637-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656814378425-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656815422061-1622021879185: var(--custom-color-1622021879185);
            --text-color-1664838351918-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664838358389-1622437744261: var(--custom-color-1622437744261);
            --text-color-1664838365300-1622437744261: var(--custom-color-1622437744261);
            --text-color-1664838380317-1622021879185: var(--custom-color-1622021879185);
          }

          #ws-block-features-with-icons-MxvMmm6y .ws-light-0 {
            --text-color-1656824303977-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656824319697-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656824345368-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656824399893-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656824519758-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656824726973-1622437744261: var(--custom-color-1622437744261);
            --text-color-1656824800176-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656824822564-1622437744261: var(--custom-color-1622437744261);
            --text-color-1656824929958-1656824929958: var(--custom-color-1656824929958);
            --text-color-1656825120821-1622437744261: var(--custom-color-1622437744261);
            --text-color-1656829778071-1622437744261: var(--custom-color-1622437744261);
            --text-color-1656829788697-1621490005230: var(--custom-color-1621490005230);
            --text-color-1656829854084-1622437744261: var(--custom-color-1622437744261);
            --text-color-1668766304686-1622437744261: var(--custom-color-1622437744261);
          }

          #ws-block-services-with-media-iCP4O1GN .ws-light-1 {
            --text-color-1664831900362-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831907430-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831912687-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831918615-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831933992-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831937743-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831945023-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831948183-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831955719-1621490005230: var(--custom-color-1621490005230);
            --text-color-1664831959838-1621490005230: var(--custom-color-1621490005230);
          }

          #ws-block-articles-Fcq03JWo .ws-light-0 {
            --text-color-1621490005230-1621490005230: var(--custom-color-1621490005230);
            --text-color-1621490390707-1621490005230: var(--custom-color-1621490005230);
          }

          #ws-block-services-with-media-jrMADkqO .ws-light-1 {
            --text-color-1668766576164-1621490005230: var(--custom-color-1621490005230);
            --text-color-1668766584641-1621490005230: var(--custom-color-1621490005230);
            --text-color-1668766590348-1621490005230: var(--custom-color-1621490005230);
          }
        </style>
      </div>
    </div>
  </ws-global>
  <div class="page-container">
    <ws-block id="ws-block-header-nMGBCZbH" src="../ws/block-templates/header/index.html" surfaces="ws-light-0">
      <header class="ws-surface ws-light-0" data-surface="0"
        data-ws-hidden-children="business-phone business-social-profiles primary-button secondary-button site-name"
        data-ws-slots="header">
        <ws-global slot="header" src="../ws/globals/global-header/index.html">
          <ws-header data-ws-block-overlay-section-target="overlay-section" stick-up="">
            <ws-global class="logo-image-wrapper" slot="business-logo" src="../ws/globals/business-logo/index.html"><img
                alt="" src="../ws/resized-images/4de3227d094040e68b9d65c3a123ca8d/digipearlnobackgrounf-01-01.png"
                style="width: 154.875px; height: auto;" /></ws-global>
            <ws-global class="nav-menu-wrapper" slot="navigation" src="../ws/globals/nav-menu/index.html">
              <ws-navigation>
                <nav>
                  <ul class="ws-nav__menu-list">
                    <li class="ws-nav__menu-list-item">
                      <a class="ws-nav__menu-link" href="/">
                        <span>Home</span>
                      </a>
                    </li>
                    <li class="ws-nav__menu-list-item">
                      <ws-nav-toggle class="ws-nav__toggle" group-id="top" on="hover" toggle="#ws-nav-collapse-2">
                        <a class="ws-nav__menu-link" href="/telecom-services/">
                          <span>Services</span>
                        </a>
                      </ws-nav-toggle>
                      <ws-nav-collapse class="ws-nav__submenu" id="ws-nav-collapse-2">
                        <ul class="ws-nav__submenu-list">
                          <li class="ws-nav__submenu-list-item">
                            <a class="ws-nav__menu-link" href="/telecom-services/">
                              <span>Telecom Services</span>
                            </a>
                          </li>
                          <li class="ws-nav__submenu-list-item">
                            <a class="ws-nav__menu-link" href="/web-design/">
                              <span>Web Designing</span>
                            </a>
                          </li>
                          <li class="ws-nav__submenu-list-item">
                            <a class="ws-nav__menu-link" href="/digital-marketing/">
                              <span>Digital Marketing</span>
                            </a>
                          </li>
                        </ul>
                      </ws-nav-collapse>
                    </li>
                    <li class="ws-nav__menu-list-item">
                      <a class="ws-nav__menu-link" href="/pricing/" target="_self">
                        <span>Pricing</span>
                      </a>
                    </li>
                    <li class="ws-nav__menu-list-item">
                      <a class="ws-nav__menu-link" href="/about/" target="_self">
                        <span>About</span>
                      </a>
                    </li>
                    <li class="ws-nav__menu-list-item">
                      <a class="ws-nav__menu-link" href="/blog/">
                        <span>Blog</span>
                      </a>
                    </li>
                    <li class="ws-nav__menu-list-item">
                      <a class="ws-nav__menu-link" href="/contact/" target="_self">
                        <span>Contact</span>
                      </a>
                    </li>
                    <li class="ws-nav__menu-list-item">
                      <a class="ws-nav__menu-link" href="/it-training-programs-with-job-opportunity/" target="_self">
                        <span>Training</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </ws-navigation>
            </ws-global>
            <ws-global slot="language-selector" src="../ws/globals/language-selector/index.html">
              <ws-language-selector hidden=""></ws-language-selector>
            </ws-global>
          </ws-header>
        </ws-global>
      </header>
    </ws-block>
    <ws-block content-alignment="center" data-ws-variation-id="article-common" id="ws-block-article-QPgG6Hs6"
      src="../ws/block-templates/text/index.html" surfaces="ws-light-0" white-space-bottom="xxl" white-space-top="xxl">
      <section class="ws-section ws-surface ws-light-0" data-surface="0" data-ws-slots="block-content">
        <div class="ws-container">
          <div class="ws-m-rich-text ws-m-blockquote-with-icon">
            <ws-text data-ws-default-content-hash="7f9354b32d87939e31748c91d97c6897" slot="block-content">
              <h2 style="text-align: center;">Reasons Your Business Needs Website</h2>
              <ws-media-container aspect-ratio="1.887" content-position="50% 46.57%" content-scale="1"
                data-ws-selectable="true" style="height: 408px;">
                <picture>
                  <img alt="" src="../ws/media-library/b7b5d643909541bdb99d959e272f8d02/bxfqlglc81u" />
                </picture>
              </ws-media-container>
              <h5>Running a business without a website in todays era is like selling products in area where peoples are
                not there. Customers require your services and products but this is your technique how you market it.
                Most of the people use internet for doing almost all things in daily life. So here are some of the
                reasons why you need website to run your business more effectively. </h5>
              <p><b>Online brochure</b></p>
              <p>Companies spend a lot creating brochures and distributing them. By having a website you can skip that
                entirely. Your potential customers can find out about you and any of your products online. If you get
                most of your business through networking and personal connections, then they will want to check out your
                website.</p>
              <p><b>More customers</b></p>
              <p>More than 2.25 million people use the internet every day, and some 90% of those have purchased
                something, or contacted a company, online in the last 12 months.</p>
              <p><b>24 hours per day</b></p>
              <p>Your website runs 24/7 without any supervision or need to lock it up. You can always be there for your
                customers.</p>
              <p><b>Communication with customers</b></p>
              <p>By having a blog or even just a feed on your website, you can update customers on your newest offers,
                products, promotions, events, photos, or any other content.</p>
              <p><b> Marketing</b></p>
              <p>The Internet has opened up a whole new world of marketing that didn’t exist before. Your website can
                attract new business by using a whole host of low cost marketing techniques.</p>
              <p><b>Having a website is essential for business cause it can boom your business to next level. </b></p>
            </ws-text>
          </div>
        </div>
      </section>
    </ws-block>
    <ws-block id="ws-block-footer-kxoi9ptZ" src="../ws/block-templates/footer/index.html" surfaces="ws-light-0">
      <footer class="ws-surface ws-light-0" data-surface="0" data-ws-hidden-children="business_description site_name"
        data-ws-slots="footer">
        <ws-global slot="footer" src="../ws/globals/global-footer/index.html">
          <ws-footer>
            <ws-global slot="business-logo" src="../ws/globals/business-logo/index.html"><img alt=""
                src="../ws/resized-images/4de3227d094040e68b9d65c3a123ca8d/digipearlnobackgrounf-01-01.png"
                style="width: 154.875px; height: auto;" /></ws-global>
            <ws-global slot="business-address" src="../ws/globals/addresses/index.html">
              <address>
                <p><b>Location</b><br />Suite 2 534 Princes Hwy Rockdale NSW 2216</p>
              </address>
            </ws-global>
            <ws-global slot="business-phone" src="../ws/globals/phones/index.html">
              <p><b>Contact</b><br />Phone: <a href="tel: +612 72505577">02 72505577</a></p>
            </ws-global>
            <ws-global slot="business-email" src="../ws/globals/emails/index.html">
              <p>Email: <a href="mailto: info@digipearl.com.au" target="_self">info@digipearl.com.au</a></p>
            </ws-global>
            <ws-global slot="business-social-profiles" src="../ws/globals/social-links/index.html">
              <ws-social-icons>
                <ul>
                  <li>
                    <a class="ws-link" href="https://www.facebook.com/digipearlaustralia" target="_blank">
                      <ws-icon src="../ws/common/icons/facebook-logo.ws-intense-next-marketing-agency.svg"></ws-icon>
                    </a>
                  </li>
                  <li>
                    <a class="ws-link" href="https://www.instagram.com/digipearlaustralia" target="_blank">
                      <ws-icon
                        src="../ws/extensions/11ebb3fc92fa4d148a680026b952c5b1/icons/social-network/solid/yola-instagram-0002.svg">
                      </ws-icon>
                    </a>
                  </li>
                </ul>
              </ws-social-icons>
            </ws-global>
            <ws-global slot="footer-navigation" src="../ws/globals/footer-navigation/index.html">
              <ul>
                <li>
                  <a class="ws-link" href="/" target="_self">Home</a>
                </li>
                <li>
                  <a class="ws-link" href="/services/" target="_self">Services</a>
                </li>
                <li>
                  <a class="ws-link" href="/pricing/" target="_self">Pricing</a>
                </li>
                <li>
                  <a class="ws-link" href="/contact/" target="_self">Contact</a>
                </li>
                <li>
                  <a class="ws-link" href="/blog/" target="_self">Blog</a>
                </li>
                <li>
                  <a class="ws-link" href="/it-training-programs-with-job-opportunity/" target="_self">Training
                    Programs</a>
                </li>
              </ul>
            </ws-global>
            <div class="ws-m-copyright" slot="copyright">
              <ws-global slot="site-copyright" src="../ws/globals/site-name/index.html"><span>DigiPearl | ABN:
                  62615114406 </span></ws-global>
            </div>
          </ws-footer>
        </ws-global>
      </footer>
    </ws-block>
  </div>
  <div class="ws-contact-form__output" id="form-output-global">
    <div class="ws-contact-form__output-text" form-output-text=""></div>
  </div>
  <script src="../ws/bundles/js/140fc98169f1db9a201b32e9687203db.js"></script>
  <ws-global src="../ws/globals/footer-code/index.html">
    <div id="ws-site-footer-wrapper">
      <script data-id="11ebb85d08b8380ebd380024e86b0c01" data-partner="WL_HPAU"
        data-url="//analytics.yolacdn.net/tracking.js" data-user="1820683862324ef4a0dfa1ed44bc5618"
        id="site_analytics_tracking">
        var _yts = _yts || [];
        var tracking_tag = document.getElementById("site_analytics_tracking");
        _yts.push(["_siteId", tracking_tag.getAttribute('data-id')]);
        _yts.push(["_userId", tracking_tag.getAttribute('data-user')]);
        _yts.push(["_partnerId", tracking_tag.getAttribute('data-partner')]);
        _yts.push(["_trackPageview"]);

        (function () {
          function isRunInEditor() {
            try {
              return Boolean(window.parent.ws);
            } catch (e) {
              return false;
            }
          }

          function injectScript() {
            var yts = document.createElement("script");
            yts.type = "text/javascript";
            yts.async = true;
            yts.src = document.getElementById("site_analytics_tracking").getAttribute('data-url');
            (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(yts);
          }

          if (!isRunInEditor()) {
            var isCookiesAccepted = false;
            var windowLoaded = false;

            document.addEventListener('DOMContentLoaded', function () {
              var wsCookieBannerElement = document.querySelector('ws-cookie-banner');

              if (wsCookieBannerElement) {
                wsCookieBannerElement.addEventListener('ws:cookie-banner', function (event) {
                  if (event.detail && event.detail.accepted) {
                    if (windowLoaded) {
                      injectScript();
                    } else {
                      isCookiesAccepted = true;
                    }
                  }
                });
              } else {
                isCookiesAccepted = true;
              }
            });

            window.addEventListener('load', function () {
              if (isCookiesAccepted) {
                injectScript();
              }

              windowLoaded = true;
            })
          }
        })();
      </script>
    </div>
  </ws-global>
</body>

</html>