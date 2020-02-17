@extends('layout.app_frontend')
@section('title','Real Estate | Register')
@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center" style="background: url('{{ asset('assets/images/contact/page-title.jpg') }}') no-repeat center center / cover; padding: 160px 0;" data-center="background-position: 0px 50%;" data-top-bottom="background-position:0px 0%;">
    <div class="container clearfix">
        <h1>Signup</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Real Estate</a></li>
            <li class="breadcrumb-item active">Signup</li>
        </ol>
    </div>
    <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
        <div class="video-overlay" style="background: rgba(0,0,0,0.6);"></div>
    </div>
</section>
{{ dd($data['country']) }}
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
                <div class="tab-container">
                    <div class="tab-content clearfix" id="tab-register">
                        <div class="card nobottommargin">
                            <div class="card-body" style="padding: 40px;">
                                <h3>Register for an Account</h3>
                                <form id="register-form" name="register-form" class="nobottommargin" action="#" method="post">
                                    <div class="col_full">
                                        <label for="register-form-name">Name:</label>
                                        <input type="text" id="register-form-name" name="name" value="" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-email">Email:</label>
                                        <input type="text" id="register-form-email" name="email" value="" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-mobile">Mobile NO:</label>
                                        <input type="text" id="register-form-mobile" name="mobile_no" value="" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-address1">Address1:</label>
                                        <input type="text" id="register-form-address1" name="address1" value="" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-address2">Address2:</label>
                                        <input type="text" id="register-form-address2" name="address2" value="" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-postcode">Postcode:</label>
                                        <input type="text" id="register-form-postcode" name="postcode" value="" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-country">Country:</label>
                                        <input type="text" id="register-form-country" name="country" value="" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-password">Password:</label>
                                        <input type="password" id="register-form-password" name="password" value="" class="form-control" />
                                    </div>

                                    <div class="col_full nobottommargin">
                                        <button type="class" class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
