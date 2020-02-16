@extends('layout.app_frontend')
@section('title','Reat Estate | Listing')
<style>
		.slider-element { padding: 250px 0 0px; }

		.device-md .slider-element,
		.device-sm .slider-element,
		.device-xs .slider-element { padding: 60px 0; }

		.expand-link { display: none; }
		.more-search {
			display: block;
			margin-top: 10px;
			float: right;
			text-align: right;
			color: #FFF;
			cursor: pointer;
		}

		label {font-family: 'Raleway', sans-serif !important;}

		.bootstrap-select.btn-group > .dropdown-toggle {
			background-color: #dae0e5;
			border-color: #d3d9df;
		}

        .slider-element .container {
            height: 40% !important;
        }
	</style>
@section('content')
<section id="slider" class="slider-element clearfix" style="background: url({{ asset('assets/images/items/page-title.jpg') }}) center center no-repeat; background-size: cover; overflow: visible;">
    <div class="container clearfix" style="z-index: 2">
        <div class="tabs advanced-real-estate-tabs clearfix">
            <div class="tab-container">
                <div class="tab-content clearfix" id="tab-properties">
                    <form action="#" method="post" class="nobottommargin">
                        <div class="row clearfix">
                            <div class="col-md-2 col-sm-12">
                                <label for="" class="d-block">Type</label>
                                <input class="bt-switch" type="checkbox" checked data-on-text="Buy" data-off-text="Rent" data-on-color="themecolor" data-off-color="themecolor">
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label for="">Locations</label>
                                <select class="selectpicker form-control" multiple data-live-search="true" data-size="5" style="width:100%;">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-6 col-12">
                                <label for="">Property Type</label>
                                <select class="selectpicker form-control" style="width:100%; line-height: 30px;">
                                    <option value="Any">Any</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Condo">Condo</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Building">Building</option>
                                    <option value="Shop">Shop</option>
                                    <option value="Office">Office</option>
                                    <option value="Warehouse">Warehouse</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-6 col-6">
                                <button class="button button-3d button-rounded btn-block nomargin" style="margin-top: 29px !important;">Search</button>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="expand-link">
                            <div class="row justify-content-between mt-3">
                                <div class="col-md-4 col-sm-6 col-12">
                                    <label for="" style="margin-bottom: 20px !important;">Price Range</label>
                                    <input class="price-range-slider" />
                                </div>
                                <div class="clear d-xl-none d-lg-none d-md-none d-sm-none bottommargin-sm"></div>
                                <div class="col-md-4 col-sm-6 col-12">
                                    <label for="" style="margin-bottom: 20px !important;">Property Area</label>
                                    <input class="area-range-slider" />
                                </div>
                                <div class="col-md-2 col-sm-6 bottommargin-sm">
                                    <label for="">Beds</label>
                                    <select class="selectpicker form-control" multiple data-size="6" data-placeholder="Any" style="width:100%; line-height: 30px;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5+">5+</option>
                                    </select>
                                </div>
                                <div class="col-md-2 col-sm-6 bottommargin-sm">
                                    <label for="">Baths</label>
                                    <select class="selectpicker form-control" multiple data-size="6" data-placeholder="Any" style="width:100%; line-height: 30px;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5+">5+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <span class="more-search"><i class="icon-line-plus"></i> Advanced Search</span>
        </div>
    </div>
    <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%; z-index:1;">
        <div class="video-overlay" style="background: rgba(0,0,0,0.3); z-index: 1;"></div>
    </div>
</section>

<section id="content">
    <div class="content-wrap notoppadding">
        <div class="section nobg nomargin clearfix">
            <div class="container clearfix">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <a href="#" class="btn text-white bgcolor px-4"><i class="icon-line2-list"></i> List</a>
                        <a href="#" class="btn btn-light ml-2 px-4"><i class="icon-map-marker2"></i> Map</a>
                    </div>
                    <div class="col-8 tright">
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Listing</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">New Listing</button>
                                    <button class="dropdown-item" type="button">Home Opens</button>
                                </div>
                            </div>
                            <div class="dropdown ml-2">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Popular Listed</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button">A - Z Listed</button>
                                    <button class="dropdown-item" type="button">Price: Lowest First</button>
                                    <button class="dropdown-item" type="button">Price: Highest First</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="real-estate topmargin grid-container portfolio-3 portfolio w-100 mw-100 clearfix" data-layout="fitRows">
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger bgcolor-2">For Sale</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/1.jpg') }}" alt="Image 1">
                            </a>
                            <div class="real-estate-item-price">
                                $1.2m<span>Leasehold</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">3 Bedroom Villa</a></h3>
                            <span>Seminyak Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 font-primary px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-danger"><i class="icon-minus-sign-alt"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-success">Hot Deal</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/2.jpg') }}" alt="Image 2">
                            </a>
                            <div class="real-estate-item-price">
                                $200,000<span>bi-annually</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">3 Bedroom Villa</a></h3>
                            <span>Seminyak Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger">Sale</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/3.jpg') }}" alt="Image 3">
                            </a>
                            <div class="real-estate-item-price">
                                $1600<span>per Sale</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">3 Bedroom Villa</a></h3>
                            <span>Seminyak Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger">Long Term Rental</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/4.jpg') }}" alt="Image 3">
                            </a>
                            <div class="real-estate-item-price">
                                $799<span>per month</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">2 Bedroom Appartment</a></h3>
                            <span>Ubud Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger">Long Term Rental</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/5.jpg') }}" alt="Image 3">
                            </a>
                            <div class="real-estate-item-price">
                                $1600<span>per month</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">4 Bedroom Villa</a></h3>
                            <span>Kutta Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger">Day/Monthly Rental</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/6.jpg') }}" alt="Image 3">
                            </a>
                            <div class="real-estate-item-price">
                                $99<span>per Day</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">3 Bedroom Villa</a></h3>
                            <span>Seminyak Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger">Monthly Rental</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/7.jpg') }}" alt="Image 3">
                            </a>
                            <div class="real-estate-item-price">
                                $1600<span>per month</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">5 Bedroom Villa</a></h3>
                            <span>Seminyak Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger">Long Term Rental</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/8.jpg') }}" alt="Image 3">
                            </a>
                            <div class="real-estate-item-price">
                                $1199<span>per month</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">Corporate Office</a></h3>
                            <span>Legian Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="real-estate-item portfolio-item bottommargin-sm">
                        <div class="real-estate-item-image">
                            <div class="label badge badge-danger">Coworking Space</div>
                            <a href="#">
                                <img src="{{ asset('assets/images/items/9.jpg') }}" alt="Image 3">
                            </a>
                            <div class="real-estate-item-price">
                                $99<span>per Week</span>
                            </div>
                            <div class="real-estate-item-info clearfix" data-lightbox="gallery">
                                <a href="{{ asset('assets/images/items/1.jpg') }}" data-toggle="tooltip" title="Images" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="{{ asset('assets/images/items/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                                <a href="#" data-toggle="tooltip" title="Like"><i class="icon-line-heart"></i></a>
                            </div>
                        </div>
                        <div class="real-estate-item-desc nopadding">
                            <h3><a href="#">Coworking Office</a></h3>
                            <span>Ubud Area</span>
                            <a href="#" class="real-estate-item-link"><i class="icon-info"></i></a>
                            <div class="line" style="margin-top: 15px; margin-bottom: 15px;"></div>
                            <div class="real-estate-item-features row t500 px-3 clearfix">
                                <div class="col-lg-4 col-6 nopadding">Beds: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Baths: <span class="color">3</span></div>
                                <div class="col-lg-4 col-6 nopadding">Area: <span class="color">150 sqm</span></div>
                                <div class="col-lg-4 col-6 nopadding">Pool: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Internet: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                                <div class="col-lg-4 col-6 nopadding">Cleaning: <span class="text-success"><i class="icon-check-sign"></i></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="section center nomargin" style="padding:80px 0 ">
                <h3 class="t400 ls1">Special Offers on Villa Long Term Rentals &amp; Lease Agreements</h3>
                <a href="contact.html" class="button button-color button-large button-rounded">Contact Now</a>
            </div>
        </div>
    </div>
</section>
@endsection
