@extends('layout.app_frontend')
@section('title','Real Estate | Builders')
@section('content')

<section id="page-title" class="page-title-parallax page-title-dark page-title-center" style="background: url('{{ asset('assets/images/builders/page-title.jpg')}}') no-repeat center center / cover; padding: 140px 0;" data-center="background-position: 0px 50%;" data-top-bottom="background-position:0px 0%;">
    <div class="container clearfix">
        <h1>Builders</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Real Estate</a></li>
            <li class="breadcrumb-item active">Builders</li>
        </ol>
    </div>
    <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
        <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
    </div>
</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="heading-block noborder mw-100">
                <h2 class="mb-4">Our Trustable Builders</h2>
                <p class="lead">Rerum morbi wisi purus illum, dolor consectetuer nulla, iusto eveniet? Fuga rem inventore scelerisque, wisi, hac illo wisi iste platea natus ante anim augue convallis. Lacinia laoreet mus quisque repellat.</p>
            </div>
            <ul class="clients-grid grid-6 nobottommargin clearfix">
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/1.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/2.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/3.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/4.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/1.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/2.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/3.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/4.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/1.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/2.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/3.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/4.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/2.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/1.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/2.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/3.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/4.png') }}" alt="Clients"></a></li>
                <li style="padding: 20px;"><a href="#" style="opacity: 0.9"><img src="{{ asset('assets/images/builders/1.png') }}" alt="Clients"></a></li>
            </ul>
        </div>
    </div>
</section>

@endsection
