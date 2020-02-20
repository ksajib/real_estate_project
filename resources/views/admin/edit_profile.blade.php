@extends('layout.app_admin')
@section('title','Real Estate Admin | Dashboard')
@section('content')
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li class='active'><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            </ol>
            <h1>Edit Profile</h1>
        </div>


        {{ dd($data) }}

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                    Edit Profile
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

@endsection
