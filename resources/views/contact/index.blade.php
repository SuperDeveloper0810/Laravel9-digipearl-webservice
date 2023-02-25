@extends('layouts.app')

@section('styles')
  <link href="../ws/bundles/css/ae942414f3b0b79be3331f24d811caea.css" rel="stylesheet">
@endsection

@section('header')
  
@endsection

@section('content')
<ws-block content-direction="reverse" data-ws-variation-id="contacts-with-contact-form-specific"
      id="ws-block-contacts-with-contact-form-f4IlNLme"
      src="../ws/block-templates/contacts-with-contact-form/index.html" surfaces="ws-light-1" white-space-bottom="xxl"
      white-space-top="xxl">
      <section class="ws-section ws-surface ws-light-1" data-surface="0"
        data-ws-hidden-children="ws_contact_form_gdpr_consent"
        data-ws-slots="block-form-title block-form block-title business-address business-phone business-email business-hours business-social-profiles">
        <div class="ws-container">
          <ws-columns>
            <ws-column class="col-10 col-md-6">
              <div class="ws-block-content">
                <div class="ws-m-block-title-570">
                  <ws-text data-ws-default-content-hash="7b17944688a993606f5de613d75333a0" slot="block-form-title">
                    <h2>Drop a message here!</h2>
                    <h5>Get a quote for your desire service if the price-listed services doesn't match your
                      requirement</h5>
                    <h5><b>Quote within 24 hours</b></h5>
                  </ws-text>
                </div>
                <div class="ws-m-contact-form">
                  <ws-contact-form-container action="https://forms.ws-platform.net/submit-contact-form/"
                    destination="Yn7agGzfIVKPO129z_lBkZkbAa-6zhrOVfaR4M-O1QiXh10MQcBfoVw=:7BW2c3IPkFCJG380vROt-6ZC9kONNRf8lmOVPSqJEq8="
                    locale="en" page-id="d752a8b0-b921-11eb-98d7-1b33d1a453e7"
                    site-id="11ebb85d08b8380ebd380024e86b0c01" site-name="DigiPearl" slot="block-form"
                    success-message="Your message was successfully sent."
                    ws-recaptcha-key="6LcEthAUAAAAANLeILVZiZpPDbVwyoQuQ7c3qlsy">
                    <ws-contact-form-group type="singleline-text">
                      <ws-label for="input-1">Name</ws-label>
                      <input id="input-1" name="name" placeholder="Enter your name" required="true" type="text" />
                    </ws-contact-form-group>
                    <ws-contact-form-group type="email">
                      <ws-label for="input-2">E-mail</ws-label>
                      <input id="input-2" name="email" placeholder="Enter your email" required="true" type="email" />
                    </ws-contact-form-group>
                    <ws-contact-form-group type="singleline-text">
                      <ws-label for="input-4-JJRLUqIC">Phone</ws-label>
                      <input id="input-4-JJRLUqIC" name="phone-JJRLUqIC" placeholder="Enter your number" type="text" />
                    </ws-contact-form-group>
                    <ws-contact-form-group type="multiline-text">
                      <ws-label for="textarea-1">Message</ws-label>
                      <textarea id="textarea-1" name="message" placeholder="Enter your message"
                        required="true"></textarea>
                    </ws-contact-form-group>
                    <ws-button role="button" tabindex="0" type="submit">Submit</ws-button>
                  </ws-contact-form-container>
                </div>
              </div>
            </ws-column>
            <ws-column class="col-10 col-md-6">
              <div class="ws-block-content">
                <div class="ws-m-block-title-570">
                  <ws-text data-ws-default-content-hash="07d611e0edf06341f16fd347e88b33e2" slot="block-title">
                    <h3>Ready to get started?<br />Talk to us today</h3>
                    <ul>
                      <li>
                        <h5>There are many ways to reach us.</h5>
                      </li>
                      <li>
                        <h5>Chat is the quickest way to get your query answered.</h5>
                      </li>
                      <li>
                        <h5>We are very active in email queries as well.</h5>
                      </li>
                    </ul>
                  </ws-text>
                </div>
                <div class="ws-m-business-info">
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
                  <ws-global slot="business-hours" src="../ws/globals/business-hours/index.html">
                    <p>Sun: Closed, Mon-Fri: 8 am-6 pm, Sat: 10 am-4 pm</p>
                  </ws-global>
                  <ws-global slot="business-social-profiles" src="../ws/globals/social-links/index.html">
                    <ws-social-icons>
                      <ul>
                        <li>
                          <a class="ws-link" href="https://www.facebook.com/digipearlaustralia" target="_blank">
                            <ws-icon src="../ws/common/icons/facebook-logo.ws-intense-next-marketing-agency.svg">
                            </ws-icon>
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
                </div>
              </div>
            </ws-column>
          </ws-columns>
        </div>
      </section>
    </ws-block>
    <ws-html-embed data-ws-id="ref_127" data-ws-variation-id="html-embed-common" id="ws-block-html-embed-zqz4D3sa">
      Messenger Chat Plugin Code
      <div id="fb-root"></div>
      Your Chat Plugin code
      <div class="fb-customerchat" id="fb-customer-chat">
      </div>
      
    </ws-html-embed>
    <ws-block data-ws-variation-id="contact-fullwidth-common" id="ws-block-contact-fullwidth-uU4QX2gV"
      src="../ws/block-templates/media-fullwidth/index.html">
      <section class="ws-block-media" data-surface="0" data-ws-slots="block-media">
        <ws-media-container aspect-ratio="3.429" content-position="50% 50%" content-scale="1" cover-constraints=""
          media-group-id="ISAzK5" slot="block-media">
          <ws-iframe
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyARNP6PBrYdKNmsYf09tU8jRnffQb-sFQg&amp;q=DigiPearl+Princes+highway+Rockdale+NSW+2216">
          </ws-iframe>
        </ws-media-container>
      </section>
    </ws-block>
@endsection

@section('footer')
  
@endsection

@section('scripts')
  <script src="../ws/bundles/js/c75c5d287b1d8ce7d4440944e0098303.js"></script>
@endsection