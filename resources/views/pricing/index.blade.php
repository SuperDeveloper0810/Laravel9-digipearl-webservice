@extends('layouts.app')

@section('styles')
<link href="../ws/bundles/css/859f6ea3b7e9e2f3d7111036c0a66839.css" rel="stylesheet">

@endsection

@section('header')

@endsection

@section('content')
<ws-html-embed data-ws-id="ref_76" data-ws-variation-id="html-embed-common" id="ws-block-html-embed-hbVq4S5e">
    <style>
        .ribbon {
            width: 150px;
            height: 150px;
            overflow: hidden;
            position: absolute;

        }

        .ribbon::before,
        .ribbon::after {
            position: absolute;
            z-index: -1;
            content: '';
            display: block;
            border: 5px solid #e45249;

        }

        .ribbon span {
            position: absolute;
            display: block;
            width: 225px;
            padding: 15px 0;
            background-color: #e45249;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            color: #fff;
            font: 700 18px/1 'IBM Plex Sans', sans-serif;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
            text-transform: uppercase;
            text-align: center;
        }

        .ribbon-top-right {
            top: -10px;
            right: 5px;
        }

        .ribbon-top-right::before,
        .ribbon-top-right::after {
            border-top-color: transparent;
            border-right-color: transparent;
        }

        .ribbon-top-right::before {
            top: 0;
            left: 0;
        }

        .ribbon-top-right::after {
            bottom: 0;
            right: 0;
        }

        .ribbon-top-right span {
            left: -25px;
            top: 30px;
            transform: rotate(45deg);
        }

    </style>
</ws-html-embed>
<ws-block data-ws-variation-id="media-fullwidth-common" id="ws-block-media-fullwidth-siOsp9Qk"
    src="../ws/block-templates/media-fullwidth/index.html" surfaces="ws-light-0">
    <section class="ws-block-media ws-surface ws-light-0" data-surface="0" data-ws-slots="block-media">
        <ws-media-container aspect-ratio="3.077" content-position="50% 44.8%" content-scale="1" media-group-id="QzRiQA"
            slot="block-media">
            <picture>
                <source media="(max-width: 576px)"
                    srcset="../ws/alternative-images/w576/blocks/media-fullwidth/images/image-1.ws-intense-next-marketing-agency.webp"
                    type="image/webp" />
                <source media="(max-width: 576px)"
                    srcset="../ws/alternative-images/w576/blocks/media-fullwidth/images/image-1.ws-intense-next-marketing-agency.jpg" />
                <source srcset="../ws/blocks/media-fullwidth/images/image-1.ws-intense-next-marketing-agency.webp"
                    type="image/webp" /><img alt="Pricing" loading="lazy"
                    src="../ws/blocks/media-fullwidth/images/image-1.ws-intense-next-marketing-agency.jpg" />
            </picture>
        </ws-media-container>
    </section>
</ws-block>
<ws-block data-ws-variation-id="pricing-with-icons-common-3cols-multi-surfaces"
    id="ws-block-pricing-with-icons-aNN6Npxm" src="../ws/block-templates/pricing-with-icons/index.html"
    surfaces="ws-light-0 ws-light-1" user-modified="white-space-top,white-space-bottom" white-space-bottom="s"
    white-space-top="s">
    <section class="ws-section ws-surface ws-light-0" data-surface="0"
        data-ws-hidden-children="primary_button secondary_button"
        data-ws-slots="block-title block-columns button-group">
        <div class="ws-container">
            <div class="ws-m-block-title-770">
                <ws-text data-ws-default-content-hash="7eb3823cb888eebb9700ecf7e2825ef6" slot="block-title">
                    <h2>Pricing &amp; packages</h2>
                    <p>Choose from the packages below for basic to complete needs for starting your business.</p>
                </ws-text>
            </div>
            <div class="ws-m-pricing-with-icon ws-surface ws-light-1" data-surface="1">
                <ws-columns layout="3-columns" slot="block-columns">
                    <ws-column class="col-10 col-sm-8 col-md-6 col-lg-4">
                        <article>
                            <ws-icon
                                src="../ws/extensions/11ebb3fc92fa4d148a680026b952c5b1/icons/books-text/line/sidebar-3532.svg">
                            </ws-icon>
                            <ws-text data-ws-default-content-hash="d6bcfddc1eff205eb17ba114ea1fa2b1">
                                <h4>
                                    <ws-color style="color: var(--text-color-1664674826499-1664674826497);"><b>Business
                                            website</b>
                                    </ws-color>
                                </h4>
                                <h2>$3500</h2>
                                <ul>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622437763904-1622437744261)">
                                                Domain.com.au or .com
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622437763904-1622437744261)">Free
                                                Hosting</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622437763904-1622437744261)">
                                                Develop complete
                                                website </ws-color>
                                        </p>
                                    </li>
                                </ul>
                                <p>
                                    <ws-color style="color: var(--text-color-1622437763904-1622437744261)">Design Logo
                                    </ws-color>
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            <s>
                                                <ws-color style="color: var(--text-color-1622022194712-1622021879185)">
                                                    Create Social Media
                                                    branding</ws-color>
                                            </s></p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622022194712-1622021879185)">
                                            </ws-color><s>
                                                <ws-color style="color: var(--text-color-1622022194712-1622021879185)">
                                                    Email Marketing
                                                </ws-color>
                                            </s>
                                        </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622022194712-1622021879185)">
                                            </ws-color><s>
                                                <ws-color style="color: var(--text-color-1622022194712-1622021879185)">
                                                    24/7 Support
                                                </ws-color>
                                            </s>
                                        </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p><s>
                                                <ws-color style="color: var(--text-color-1622022194712-1622021879185)">
                                                    Free Technical
                                                    Consultation anytime</ws-color>
                                            </s></p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p><s>
                                                <ws-color style="color: var(--text-color-1622022194712-1622021879185)">
                                                    <br /></ws-color>
                                            </s></p>
                                    </li>
                                </ul>
                            </ws-text>
                            <ws-button>
                                <a data-ws-selectable="true" href="/contact/" target="_self">Contact now</a>
                            </ws-button>
                        </article>
                    </ws-column>
                    <ws-column class="col-10 col-sm-8 col-md-6 col-lg-4">
                        <article>
                            <div class="ribbon ribbon-top-right"><span>  Featured</span></div>
                            <ws-icon
                                src="../ws/extensions/11ebb3fc92fa4d148a680026b952c5b1/icons/books-text/line/sidebar-layout-3539.svg">
                            </ws-icon>
                            <ws-text data-ws-default-content-hash="c3f488901f4ac9415492035a03245369">
                                <h4>
                                    <ws-color style="color: var(--text-color-1664674895101-1664674826497);"><b>Ecommerce
                                            website</b>
                                    </ws-color>
                                </h4>
                                <h2>$5500</h2>
                                <ul>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">
                                                Domain.com.au or .com
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">Free
                                                Hosting</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">
                                                Develop Complete
                                                Website or</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">
                                                eCommerce Website
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">
                                                Design Logo</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">
                                                Create Social Media
                                                branding</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">Email
                                                Marketing
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261)">24/7
                                                Support</ws-color>
                                        </p>
                                    </li>
                                </ul>
                                <p><strike>Free Technical Consultation anytime</strike></p>
                            </ws-text>
                            <ws-button>
                                <a data-ws-selectable="true" href="/contact/" target="_self">Contact now</a>
                            </ws-button>
                        </article>
                    </ws-column>
                    <ws-column class="col-10 col-sm-8 col-md-6 col-lg-4">
                        <article>
                            <ws-icon
                                src="../ws/extensions/11ebb3fc92fa4d148a680026b952c5b1/icons/archives/line/code-files-3960.svg">
                            </ws-icon>
                            <ws-text data-ws-default-content-hash="0f2d6a45b1d17b1b1fdff48dbcb87bbe">
                                <h4>
                                    <ws-color style="color: var(--text-color-1664674974645-1664674826497);"><b>Custom
                                            web
                                            application</b></ws-color>
                                </h4>
                                <p class="ws-fz-18"><b>**Price on request</b></p>
                                <p><br /></p>
                                <ul>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">
                                                Domain.com.au or .com
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">Free
                                                Hosting
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">
                                                Develop Complete
                                                Website or</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">
                                                eCommerce Website
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">
                                                Design Logo</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">
                                                Create Social Media
                                                branding</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">
                                                Email Marketing
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622438087416-1622437744261);">24/7
                                                Support
                                            </ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <ws-color style="color: var(--text-color-1622443213321-1622437744261);">Free
                                                Technical
                                                Consultation anytime</ws-color>
                                        </p>
                                    </li>
                                    <li>
                                        <p><br /></p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p><br /></p>
                                    </li>
                                </ul>
                            </ws-text>
                            <ws-button>
                                <a data-ws-selectable="true" href="/contact/" target="_self">Contact now</a>
                            </ws-button>
                        </article>
                    </ws-column>
                </ws-columns>
            </div>
            <div class="ws-m-button-group ws-m-button-group--center">
                <ws-button-group slot="button-group"></ws-button-group>
            </div>
        </div>
    </section>
</ws-block>
<ws-block data-ws-variation-id="pricing-with-icons-common-3cols-multi-surfaces"
    id="ws-block-pricing-with-icons-599L3TLM" src="../ws/block-templates/pricing-with-icons/index.html"
    surfaces="ws-light-0 ws-light-1" user-modified="white-space-top,white-space-bottom" white-space-bottom="s"
    white-space-top="s">
    <section class="ws-section ws-surface ws-light-0" data-surface="0"
        data-ws-hidden-children="block_title primary_button secondary_button"
        data-ws-slots="block-columns button-group">
        <div class="ws-container">
            <div class="ws-m-block-title-770">
            </div>
            <div class="ws-m-pricing-with-icon ws-surface ws-light-1" data-surface="1">
                <ws-columns layout="3-columns" slot="block-columns">
                    <ws-column class="col-10 col-sm-8 col-md-6 col-lg-4">
                        <article>
                            <ws-icon
                                src="../ws/extensions/11ebbe1109d50e7e93ca0026b952c5b1/icons/hardware-software/solid/tablet-1971.svg">
                            </ws-icon>
                            <ws-text data-ws-default-content-hash="0f2d6a45b1d17b1b1fdff48dbcb87bbe">
                                <h4>App Development</h4>
                                <h5><b>**Price on request</b></h5>
                                <p><br /></p>
                                <ul>
                                    <li>
                                        <p>Android App</p>
                                    </li>
                                    <li>
                                        <p>IOS APP</p>
                                    </li>
                                    <li>
                                        <p>Web App</p>
                                    </li>
                                    <li>
                                        <p>Fully Customised development</p>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <p><b>**Contact us to discuss your requirement</b></p>
                                    </li>
                                </ul>
                            </ws-text>
                            <ws-button>
                                <a data-ws-selectable="true" href="#" target="_self">Learn mpre</a>
                            </ws-button>
                        </article>
                    </ws-column>
                    <ws-column class="col-10 col-sm-8 col-md-6 col-lg-4">
                        <article>
                            <ws-icon
                                src="../ws/extensions/11ebbe1109d50e7e93ca0026b952c5b1/icons/social-brand/solid/google-plus-6093.svg">
                            </ws-icon>
                            <ws-text data-ws-default-content-hash="0f2d6a45b1d17b1b1fdff48dbcb87bbe">
                                <h4>SEO</h4>
                                <h5 style="text-align: center;"><b>**Price on request</b></h5>
                                <ul>
                                    <li>
                                        <p>Top spot on Google within 7 Weeks​</p>
                                    </li>
                                    <li>
                                        <p> Google Certified Marketing team</p>
                                    </li>
                                    <li>
                                        <p> Rank Tracking</p>
                                    </li>
                                    <li>
                                        <p><i> <b>Note</b>: This is one time optimisation option. If you need continual
                                                optimisation,
                                                then Google Ads PPC is right option for you</i></p>
                                    </li>
                                </ul>
                            </ws-text>
                            <ws-button>
                                <a data-ws-selectable="true" href="/digital-marketing/" target="_self">Learn more</a>
                            </ws-button>
                        </article>
                    </ws-column>
                    <ws-column class="col-10 col-sm-8 col-md-6 col-lg-4">
                        <article>
                            <ws-icon
                                src="../ws/extensions/11ebbe1109d50e7e93ca0026b952c5b1/icons/e-commerce/solid/sales-up-2501.svg">
                            </ws-icon>
                            <ws-text data-ws-default-content-hash="0f2d6a45b1d17b1b1fdff48dbcb87bbe">
                                <h4>Branding (Logo / Banner Design)</h4>
                                <h2>$55</h2>
                                <ul>
                                    <li>
                                        <p> 100% Ownership Rights</p>
                                    </li>
                                    <li>
                                        <p> Industry Specific Logo/Banner Design</p>
                                    </li>
                                    <li>
                                        <p> 5 Revisions per Logo/Banner</p>
                                    </li>
                                    <li>
                                        <p> Free file formats</p>
                                    </li>
                                    <li>
                                        <p> Quick Turnaround time</p>
                                    </li>
                                    <li>
                                        <p><br /></p>
                                    </li>
                                </ul>
                            </ws-text>
                            <ws-button>
                                <a data-ws-selectable="true" href="/telecom-services/" target="_self">Learn more</a>
                            </ws-button>
                        </article>
                    </ws-column>
                    <ws-column class="col-10 col-sm-8 col-md-6 col-lg-4">
                        <article>
                            <ws-icon
                                src="../ws/extensions/11ebbe1109d50e7e93ca0026b952c5b1/icons/social-brand/solid/facebook-like-6098.svg">
                            </ws-icon>
                            <ws-text data-ws-default-content-hash="0f2d6a45b1d17b1b1fdff48dbcb87bbe">
                                <h4>Social Media Management</h4>
                                <h2>$700 <i>/month</i></h2>
                                <ul>
                                    <li>
                                        <p>Create and design professional Social media Ad Pack</p>
                                    </li>
                                    <li>
                                        <p> Ongoing monthly management</p>
                                    </li>
                                    <li>
                                        <p> Target your customer</p>
                                    </li>
                                    <li>
                                        <p>  Latest posts and updates</p>
                                    </li>
                                    <li>
                                        <p> We take care of your business</p>
                                    </li>
                                    <li>
                                        <p><br /></p>
                                    </li>
                                </ul>
                            </ws-text>
                            <ws-button>
                                <a data-ws-selectable="true" href="#" target="_self">Learn more</a>
                            </ws-button>
                        </article>
                    </ws-column>
                </ws-columns>
            </div>
            <div class="ws-m-button-group ws-m-button-group--center">
                <ws-button-group slot="button-group"></ws-button-group>
            </div>
        </div>
    </section>
</ws-block>
<ws-html-embed data-ws-id="ref_371" data-ws-variation-id="html-embed-common" id="ws-block-html-embed-PntLXsam">
    <div id="fb-root"></div>
    <div class="fb-customerchat" id="fb-customer-chat">
    </div>
    
</ws-html-embed>
@endsection

@section('footer')

@endsection

@section('scripts')
<script src="../ws/bundles/js/3795e2eba37b1ad82ceb67c6a3dbe667.js"></script>

@endsection
