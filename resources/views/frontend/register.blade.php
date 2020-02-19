@extends('layout.app_frontend')
@section('title','Real Estate | Register')
@section('content')
<section id="page-title" class="page-title-parallax page-title-dark page-title-center" style="background: url('{{ asset('assets/images/contact/page-title.jpg') }}') no-repeat center center / cover; padding: 160px 0;" data-center="background-position: 0px 50%;" data-top-bottom="background-position:0px 0%;">
    <div class="container clearfix">
        <h1>Signup</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Real Estate</a></li>
            <li class="breadcrumb-item active">Signup</li>
        </ol>
    </div>
    <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
        <div class="video-overlay" style="background: rgba(0,0,0,0.6);"></div>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
                <div class="tab-container">
                    <div class="tab-content clearfix" id="tab-register">
                        <div class="card nobottommargin">
                            <div class="card-body" style="padding: 40px;">
                                <h3>Register for an Account</h3>

                                @if(session()->has('success'))
                                    @if(session()->get('success')['status'] == 1)
                                        <div class="alert alert-success">
                                            {{ session()->get('success')['text'] }}
                                        </div>
                                    @elseif(session()->get('success')['status'] == 0)
                                        <div class="alert alert-success">
                                            {{ session()->get('success')['text'] }}
                                        </div>
                                    @endif
                                @endif

                                <form action="{{ route('create-account') }}" id="register-form" name="register-form" class="nobottommargin" method="post">
                                    @csrf

                                    <div class="col_full">
                                        <label for="register-form-name">Name:</label>
                                        @if ($errors->has('name'))
                                            <br/><span class="error">{{ $errors->first('name') }}</span>
                                        @endif
                                        <input type="text" id="register-form-name" name="name" value="{{ old('name') }}" class="form-control" />
                                    </div>

                                    <div class="col_full">
                                        <label for="register-form-email">Email:</label>
                                        @if ($errors->has('email'))
                                            <br/><span class="error">{{ $errors->first('email') }}</span>
                                        @endif
                                        <input type="text" id="register-form-email" name="email" value="{{ old('email') }}" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-mobile">Mobile NO:</label>
                                        @if ($errors->has('mobile_no'))
                                            <br/><span class="error">{{ $errors->first('mobile_no') }}</span>
                                        @endif
                                        <input type="text" id="register-form-mobile" name="mobile_no" value="{{ old('mobile_no') }}" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-address1">Address1:</label>
                                        @if ($errors->has('address1'))
                                            <br/><span class="error">{{ $errors->first('address1') }}</span>
                                        @endif
                                        <input type="text" id="register-form-address1" name="address1" value="{{ old('address1') }}" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-address2">Address2:</label>
                                        <input type="text" id="register-form-address2" name="address2" value="{{ old('address2') }}" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-postcode">Postcode:</label>
                                        <input type="text" id="register-form-postcode" name="postcode" value="{{ old('postcode') }}" class="form-control" />
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-country">Country:</label>
                                        @if ($errors->has('country'))
                                            <br/><span class="error">{{ $errors->first('country') }}</span>
                                        @endif
                                        <select class="form-control" id="register-form-country" name="country">
                                            <option value="">Select Country</option>
                                            @if(!empty($data))
                                                @foreach($data['country'] as $key => $country)
                                                    @if(old('country') == $key)
                                                        <option value="{{ $key }}" selected>{{ $country['name'].' '.$country['nativetongue'] }}</option>
                                                    @else
                                                        <option value="{{ $key }}">{{ $country['name'].' '.$country['nativetongue'] }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="col_full">
                                        <label for="register-form-password">Password:</label>
                                        @if ($errors->has('password'))
                                            <br/><span class="error">{{ $errors->first('password') }}</span>
                                        @endif
                                        <input type="password" id="register-form-password" name="password" value="{{ old('postcode') }}" class="form-control" />

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
