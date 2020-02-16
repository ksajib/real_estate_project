@extends('layout.app_frontend')
@section('title','Single Property')
<style>
.slider-element .real-estate-info-wrap {
			position: absolute;
			left: auto;
			bottom: 20px;
			width: 100%;
		}

		.real-estate-price {
			position: absolute;
			top: auto;
			left: auto;
			right: 0;
			bottom: 50px;
			z-index: 1;
		}

		.real-estate-price h3 {
			display: block;
			color: #FFF;
			font-size: 44px;
			margin: 0;
			font-weight: 400;
		}

		@media (max-width: 991px) {
			.real-estate-price {
				position: relative;
				top: auto;
				bottom: auto;
				right: 0;
				margin-top: 15px;
			}

			.slider-element .heading-block >h2 {
				font-size: 24px;
			}

			.slider-element .heading-block { width: auto !important; }
		}
	</style>
@section('content')

<section id="slider" class="slider-element dark parallax clearfix" style="background-image: url({{ asset('assets/images/single-condo.jpg') }} ); background-size: cover; height: 550px;" data-bottom-top="background-position:0px 200px;" data-top-bottom="background-position:0px -200px;">
    <div class="container clearfix" style="z-index: 2;">
        <div class="real-estate-info-wrap">
            <div class="heading-block nobottommargin nobottomborder d-md-flex d-block align-items-center justify-content-between">
                <h2 class="mr-auto">Luxury Modern Condo Apartment / <span class="h5 text-info">Apartments</span></h2>
                <div class="d-flex flex-shrink-1" data-lightbox="gallery">
                    <a href="{{ asset('assets/images/hero/4.jpg') }}" class="button button-color button-rounded nott nomargin t500 align-self-end" data-lightbox="gallery-item"><i class="icon-picture"></i> View Gallery</a>
                    <a href="{{ asset('assets/images/hero/2.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="{{ asset('assets/images/hero/3.jpg') }}" class="hidden" data-lightbox="gallery-item"></a>
                    <a href="https://www.youtube.com/watch?v=GU58qaKmZhQ" data-lightbox="iframe" class="button button-color button-rounded nott t500 align-self-end my-0 ml-2"><i class="icon-play"></i> Play Video</a>
                </div>
            </div>
            <div class="real-estate-price mb-md-0 mb-lg-4 mb-xl-0">
                <h3>$120<span class="text-light h6">/day</span></h3>
            </div>
        </div>
    </div>
    <div class="video-wrap" style="position: absolute; top: 0; left: 0; height: 100%;z-index: 1">
        <div class="video-overlay" style="background:linear-gradient(180deg,rgba(0,0,0,.3) 0,transparent 40%,transparent 60%,rgba(0,0,0,.8));"></div>
    </div>
</section>

<section id="content">
    <div class="content-wrap notoppadding">
        <div class="section notopmargin" style="padding: 30px 0">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-2 col-6 center">
                        <img src="{{ asset('assets/images/user.jpg') }}" alt="" class="img-circle" style="width: 60px; height: 60px;">
                        <h5 class="my-2"><a href="#">P. Robert/<span class="text-muted t400" style="font-family: 'Roboto'">Host</span></a></h5>
                    </div>
                    <div class="col-md-2 col-6 center">
                        <i class="icon-realestate-rent i-plain i-xlarge divcenter nobottommargin"></i>
                        <h5 class="my-1">Rental Only</h5>
                    </div>
                    <div class="col-md-2 col-6 center">
                        <i class="icon-realestate-bed i-plain i-xlarge divcenter nobottommargin"></i>
                        <h5 class="my-1">3 Bedrooms</h5>
                    </div>
                    <div class="col-md-2 col-6 center">
                        <i class="icon-realestate-plan2 i-plain i-xlarge divcenter nobottommargin"></i>
                        <h5 class="my-1">1401 SqFt.</h5>
                    </div>
                    <div class="col-md-2 col-6 center">
                        <i class="icon-realestate-bathtub i-plain i-xlarge divcenter nobottommargin"></i>
                        <h5 class="my-1">2 Bathrooms</h5>
                    </div>
                    <div class="col-md-2 col-6 center">
                        <i class="icon-realestate-garage2 i-plain i-xlarge divcenter nobottommargin"></i>
                        <h5 class="my-1">Garage</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="container clearfix">
            <div class="postcontent nobottommargin clearfix">
                <p>The interior of the house is focused around a large central hallway serving as the main avenue of traffic and entrance area to the adjacent rooms. The hallway flows into a large, wide staircase that provides the main means of egress. <br><br>On the south side of the hall is the large front parlor. This room contains original wallpaper including ceiling panels of small birds and orange flowers with vibrant leaves of green and yellow set upon a light blue background. The main body of the wallpaper is shades.</p>
                <h4 class="nobottommargin topmargin">Sepicification</h4>
                <div class="line line-sm mt-1 mb-3"></div>
                <div class="row clearfix">
                    <div class="col-md-4">
                        <ul class="iconlist">
                            <li class="mb-1"><i class="icon-line2-check"></i>Construction year: 2017</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Square Areas: 1401</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Living rooms: 12</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Bathrooms: 2</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="iconlist">
                            <li class="mb-1"><i class="icon-line2-check"></i>Bedrooms: 3</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Balconies: 3</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Car Parking: 5</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Total Floors: 25</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="iconlist">
                            <li class="mb-1"><i class="icon-line2-check"></i>Kitchens: 1</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Garages: 1</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Pools: 2</li>
                            <li class="mb-1"><i class="icon-line2-check"></i>Insurance: Yes</li>
                        </ul>
                    </div>
                </div>
                <h4 class="nobottommargin mt-3">Amenities</h4>
                <div class="line line-sm mt-1 mb-3"></div>
                <div class="row clearfix">
                    <div class="col-md-4">
                        <ul class="iconlist">
                            <li class="mb-1"><i class="icon-realestate-garage2"></i>Parking/Garage</li>
                            <li class="mb-1"><i class="icon-realestate-realtor"></i>Porter/security</li>
                            <li class="mb-1"><i class="icon-realestate-air-conditioning"></i>Air Conditioning</li>
                            <li class="mb-1"><i class="icon-realestate-washing-machine"></i>Washer</li>
                            <li><i class="icon-realestate-tv"></i>Television</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="iconlist">
                            <li class="mb-1"><i class="icon-realestate-balcony"></i>Balcony/terrace</li>
                            <li class="mb-1"><i class="icon-realestate-fireplace"></i>Fireplace</li>
                            <li class="mb-1"><i class="icon-realestate-restaurant"></i>Barbeque</li>
                            <li class="mb-1"><i class="icon-realestate-ventilation"></i>Ventilation</li>
                            <li><i class="icon-realestate-shower"></i>Outdoor Shower</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="iconlist">
                            <li class="mb-1"><i class="icon-realestate-wood"></i>Garden</li>
                            <li class="mb-1"><i class="icon-realestate-barrow"></i>Rural/secluded</li>
                            <li class="mb-1"><i class="icon-realestate-vacuum-cleaner"></i>Microwave</li>
                            <li><i class="icon-realestate-phone2"></i>Intercom</li>
                            <li><i class="icon-realestate-parking"></i>Parking</li>
                        </ul>
                    </div>
                </div>
                <p class="mt-3">Put this magnificent property on the top of your list, oozing quality from the moment you enter through the unique brick portico into the Tuscan style courtyard with Mural and vertical garden.. *Floors of European oak and parquetry *Award winning kitchen with limed solid American oak, bevelled glass cabinets, polished marble bench tops and separate scullery *Bi folds doors open out to the sun filled courtyard *Elegant lounge which also includes a drop down screen for a home theatre *Guest bedroom or an ideal home office Throughout this incredible residence you will find a vast array of imported features. Doors and fittings from France, stained glass windows from Europe. Wine cellar under the staircase. Upper level: Elegant master bedroom with balcony, ensuite with Emperador Scuro marble bench tops, mirrors with bevelled glass and American cherry frames. A most spacious dressing room...every woman's dream! Many fixtures have been especially commissioned, including the stand alone bath in the second bathroom, light switches and power points, door hardware is all imported from France. Even the grandchildren are catered for with their own space built into the roof area. An ideal cubby! The home has another two bedrooms with built in robes. *Quality fixtures and fittings *Reverse cycle air conditioning *Security alarm and intercom Designed by Award winner Peter Fryer this landmark Centro residence will impress and delight...a viewing is a must! Contact Susan Taylor on 0417 771 112 or Trevor Neil 0438 354 556 your private viewing.</p>
                <div class="line"></div>
                <div class="comments topmargin">
                    <h3>Reviews</h3>

                    <ol class="commentlist nobottomborder clearfix">
                        <li class="comment even thread-even depth-1" id="li-comment-1">
                            <div id="comment-1" class="comment-wrap clearfix">
                                <div class="comment-meta">
                                    <div class="comment-author vcard">
                                        <span class="comment-avatar clearfix">
                                            <img alt='' src='https://jurko.net/' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>
                                    </div>
                                </div>
                                <div class="comment-content clearfix">
                                    <div class="comment-author">Max Conversion<span><a href="#" title="Permalink to this comment">October 31, 2017 at 1:10 am</a></span></div>
                                    <p>Canvas is an extremely beautiful and well coded and robust template. I can pretty much customize to meet any of my needs as a designer. Thank you guys so much for doing this. Please keep adding more stunning themes and animations. You're making the web a much more beautiful place.</p>
                                    <div style="position: absolute; top: 0; left: auto; right: 40px; color: #FEC42D;"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></div>
                                    <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <ul class='children'>
                                <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">
                                    <div id="comment-3" class="comment-wrap clearfix">
                                        <div class="comment-meta">
                                            <div class="comment-author vcard">
                                                <span class="comment-avatar clearfix">
                                                    <img alt='' src="{{ asset('assets/images/user.jpg') }}" class='avatar avatar-40 photo' height='40' width='40' /></span>
                                            </div>
                                        </div>
                                        <div class="comment-content clearfix">
                                            <div class="comment-author"><a href='#' rel='external nofollow' class='url'>P. Robert</a><span><a href="#" title="Permalink to this comment">October 31, 2017 at 1:16 am</a></span></div>
                                            <p>Thank You so much. I am really glad that you like our template.</p>
                                            <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">
                            <div id="comment-2" class="comment-wrap clearfix">
                                <div class="comment-meta">
                                    <div class="comment-author vcard">
                                        <span class="comment-avatar clearfix">
                                            <img alt='' src='https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50' class='avatar avatar-60 photo' height='60' width='60' /></span>
                                    </div>
                                </div>
                                <div class="comment-content clearfix">
                                    <div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>Hilary Ouse</a><span><a href="#" title="Permalink to this comment">June 21, 2016 at 1:03 am</a></span></div>
                                    <p>I don't think I'll be using any other templates from now on. It's perfect. Great, fast responsive support. Super flexible, easy to customize. One warning. If you don't know any code it's not for you. If you know your code then this is SOOO good :) Thank you SemiColon team. Most excellent job.</p>
                                    <div style="position: absolute; top: 0; left: auto; right: 40px; color: #FEC42D;"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></div>
                                    <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">
                            <div id="comment-3" class="comment-wrap clearfix">
                                <div class="comment-meta">
                                    <div class="comment-author vcard">
                                        <span class="comment-avatar clearfix">
                                            <img alt='' src='https://www.gravatar.com/avatar/00000000000000000000000000000000?d=retro&amp;f=y' class='avatar avatar-60 photo' height='60' width='60' /></span>
                                    </div>
                                </div>
                                <div class="comment-content clearfix">
                                    <div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>AL3XL</a><span><a href="#" title="Permalink to this comment">April 25, 2015 at 1:03 am</a></span></div>
                                    <p>Awesome quality, highly structured. The detailed documentation is included, but it is all clear from just looking into the code. Comes with free updates. There is an invite--only support forum for customers. This purchase makes perfect sense to save you an immense amount of time. Thank you.</p>
                                    <div style="position: absolute; top: 0; left: auto; right: 40px; color: #FEC42D;"><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></div>
                                    <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="sidebar sticky-sidebar-wrap nobottommargin col_last clearfix">
                <div class="sidebar-widgets-wrap">
                    <div class="sticky-sidebar">
                        <div class="widget quick-contact-widget form-widget clearfix">
                            <div class="card bg-light">
                                <div class="card-header">Reserve Now</div>
                                <div class="card-body">
                                    <div class="form-result"></div>
                                    <form id="quick-contact-form" name="quick-contact-form" action="http://themes.semicolonweb.com/html/canvas/include/form.php" method="post" class="quick-contact-form nobottommargin">
                                        <div class="form-process"></div>
                                        <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
                                        <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
                                        <input type="number" class="required sm-form-control number input-block-level" id="quick-contact-form-number" name="quick-contact-form-number" value="" placeholder="Phone Number" />
                                        <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
                                        <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                        <input type="hidden" name="prefix" value="quick-contact-form-">
                                        <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button  button-rounded btn-block nomargin" value="submit">Book Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="widget clearfix">
                            <h4>Map</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8401081815946!2d144.9537363153534!3d-37.81721397975177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1513601296579" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="widget clearfix">
                            <h4>Video</h4>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/GU58qaKmZhQ" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                        <div class="widget clearfix">
                            <h4>Share</h4>
                            <div>
                                <a href="#" class="social-icon si-colored si-small si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-small si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-small si-rounded si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-small si-rounded si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-small si-rounded si-rss">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#" class="social-icon si-colored si-small si-rounded si-instagram">
                                    <i class="icon-instagram"></i>
                                    <i class="icon-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear topmargin"></div>
        <div class="container clearfix">
            <h3>Similar Properties</h3>
            <div class="real-estate-item col_one_third">
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
            <div class="real-estate-item col_one_third">
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
            <div class="real-estate-item col_one_third col_last">
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
        </div>
    </div>
</section>
@endsection
