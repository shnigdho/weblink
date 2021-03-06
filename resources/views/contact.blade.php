@extends('master')

@section('title')
Contact
@endsection

@section('content')
<section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('frontend')}}/assets/images/contact-us.jpg);">
        <div class="container">
          <div class="page-title">
            <h2>Contact us</h2>
          </div>
        </div>
      </section>

      <section class="section-60 section-md-top-90 section-md-bottom-100">
        <div class="container">
          <div class="row row-50 justify-content-lg-between">
            <div class="col-lg-5 col-xl-4">
              <div class="inset-lg-right-15 inset-xl-right-0">
                <div class="row row-30 row-md-40">
                  <div class="col-md-10 col-lg-12">
                    <h3>How to Find Us</h3>
                    <p class="text-secondary">
                      If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit LawExpert at one of our comfortable offices.
                      
                    </p>
                  </div>
                  <div class="col-md-6 col-lg-12">
                    <h5>Office 1</h5>
                    <address class="contact-info">
                      <p class="text-uppercase">9863 - 9867 MILL ROAD, CAMBRIDGE, MG09 99HT.</p>
                      <dl class="list-terms-inline">
                        <dt>Telephone</dt>
                        <dd><a class="link-secondary" href="tel:#">+1 800 603 6035</a></dd>
                      </dl>
                      <dl class="list-terms-inline">
                        <dt>E-mail</dt>
                        <dd><a class="link-primary" href="mailto:#">mail@demolink.org</a></dd>
                      </dl>
                    </address>
                  </div>
                  <div class="col-md-6 col-lg-12">
                    <h5>Office 2</h5>
                    <address class="contact-info">
                      <p class="text-uppercase">9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45</p>
                      <dl class="list-terms-inline">
                        <dt>Telephone</dt>
                        <dd><a class="link-secondary" href="tel:#">+1 800 603 6035</a></dd>
                      </dl>
                      <dl class="list-terms-inline">
                        <dt>E-mail</dt>
                        <dd><a class="link-primary" href="mailto:#">mail@demolink.org</a></dd>
                      </dl>
                    </address>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-xl-6">
              <h3>Get in Touch</h3>
              <form class="rd-mailform form-modern" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-30">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name">Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email">Email</label>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-wrap">
                      <div class="textarea-lined-wrap">
                        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        <label class="form-label" for="contact-message">Message</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="row row-30 row-sm-0">
                      <div class="col-sm-8">
                        <button class="button button-primary button-block" type="submit">Send</button>
                      </div>
                      <div class="col-sm-4">
                        <button class="button button-silver-outline button-block" type="reset">Reset</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

    

@endsection