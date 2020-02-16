@extends('layout.app_frontend')
@section('title','Real Estate | Contact Us')
<style>
    .contact-section {
        position: absolute;
        display: block;
        top: 0;
        right: 0;
        width: 50%;
        padding: 60px 60px 60px 180px;
        z-index: 0;
    }

    .contact-image {
        position: relative;
        width: 60%;
        margin-top: 30px;
        z-index: 2;
        box-shadow: 0 0 40px rgba(0, 0, 0, .3);
    }

    @media (max-width: 991px) {
        .contact-section {
            position: relative;
            display: block;
            width: 100%;
            padding: 20px;
        }

        .contact-image {
            width: 100%;
            margin-top: 0;
        }
    }
</style>
@section('content')

<section id="page-title" class="page-title-parallax page-title-dark page-title-center" style="background: url('{{ asset('assets/images/contact/page-title.jpg') }}') no-repeat center center / cover; padding: 160px 0;" data-center="background-position: 0px 50%;" data-top-bottom="background-position:0px 0%;">
    <div class="container clearfix">
        <h1>Contact</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Real Estate</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
    </div>
    <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
        <div class="video-overlay" style="background: rgba(0,0,0,0.6);"></div>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div style="position: relative;">
                <img src="{{ asset('assets/images/contact/1.jpg') }}" alt="" class="contact-image">
                <div class="contact-section dark bgcolor">
                    <div style="font-size: 15px; line-height: 1.7;">
                        <address style="line-height: 1.7;">
                            <span class="t300">Address:</span><br>
                            <span class="h6 text-white ls1 t400">
                                North America<br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107.
                            </span>
                        </address>
                        <span class="t300">Phone Number:</span><br>
                        <a href="tel:(91)(8547)632521" class="h6 text-white ls1 t400">(91) 8547 632521</a><br><br>
                        <span class="t300">Email:</span><br>
                        <a href="http://themes.semicolonweb.com/cdn-cgi/l/email-protection#4a242567382f3a26330a392f272329252625243d2f286429252775193f28202f293e77022f2626256f787a2b2d2b2324" class="h6 text-white ls1 t400"><span class="__cf_email__" data-cfemail="422c2d6f3027322e3b0231272f2b212d2e2d2c3527206c212d2f">[email&#160;protected]</span></a>
                    </div>
                </div>
            </div>
            <div class="clear topmargin"></div>
            <div class="row norightmargin topmargin-lg align-items-stretch" style="box-shadow: 0 0 40px rgba(0,0,0,.06)">
                <div id="headquarters-map" class="col-md-6 gmap"></div>
                <div class="col-md-6">
                    <div class="col-padding">
                        <div class="quick-contact-widget form-widget clearfix">
                            <h3 class="capitalize ls1 t400">Contact Us</h3>
                            <div class="form-result"></div>
                            <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">
                                <div class="form-process"></div>
                                <input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                <input type="email" class="required sm-form-control email input-block-level not-dark" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                <input type="text" class="required sm-form-control input-block-level not-dark" id="quick-contact-form-phone" name="quick-contact-form-phone" value="" placeholder="Phone Number (+1-555-2221)" />
                                <textarea class="required sm-form-control input-block-level not-dark short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="5" cols="30" placeholder="What are you Looking for? (Ex: Villa on the Beach)"></textarea>
                                <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                <input type="hidden" name="prefix" value="quick-contact-form-">
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-rounded nomargin" value="submit">Send Email</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
