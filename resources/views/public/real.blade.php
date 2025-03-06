@extends('layouts.app')

@section('title')
    SmartDev || Réalisations
@endsection

@section('content')
    <!-- start page title -->
    <section class="no-padding one-third-screen position-relative parallax wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image: url(image/rea.jpg);">
        <!-- <img src="image/about.jpg" alt="image" /> -->
        <div class="opacity-full bg-gradient-fast-blue-purple z-index-0" style="opacity: 0.4;"></div>
        <div class="h-100 border">
            <div class="row align-items-end justify-content-center h-100">
                <div class="col-xl-6 col-lg-7 col-md-10 position-relative page-title-large text-left">
                    <h1 class="text-white alt-font font-weight-600 letter-spacing-minus-1">Nos Réalisations</h1>
                    <span class="margin-5px-bottom alt-font text-white opacity-8 d-block margin-5-rem-bottom sm-margin-3-rem-bottom">Découvrze ce que nous avons réalisés pendant notre parcours !</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- start section -->
    <section id="portfolio" class="wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 text-center text-md-start sm-margin-5-rem-bottom">
                    <h6 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom">Nos Réalisations</h6>
                </div>
                <div class="col-md-9 text-center text-md-end">
                    <!-- start filter navigation -->
                    <ul class="portfolio-filter grid-filter nav nav-tabs justify-content-end alt-font">
                        <li class="nav active d-xs-inline "><a class="d-xs-inline xs-w-100" data-filter="*" href="#">Tout</a></li>
                        <li class="nav d-xs-inline "><a class="d-xs-inline xs-w-100" data-filter=".web" href="#">Web</a></li>
                        <li class="nav d-xs-inline "><a class="d-xs-inline xs-w-100" data-filter=".mobile" href="#">Mobile</a></li>
                        <li class="nav d-xs-inline "><a class="d-xs-inline xs-w-100" data-filter=".affiche" href="#">Affiche</a></li>
                        <li class="nav d-xs-inline "><a class="d-xs-inline xs-w-100" data-filter=".logo" href="#">Logo</a></li>
                        <li class="nav d-xs-inline "><a class="d-xs-inline xs-w-100" data-filter=".invitation" href="#">Invitation</a></li>
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="filter-content w-100 margin-6-half-rem-top lg-margin-4-rem-top margin-8-half-rem-bottom lg-margin-6-rem-bottom sm-margin-3-rem-tb">
                        <ul class="portfolio-overlay portfolio-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item branding mobile logos wow animate__fadeIn">
                                <a href="single-project-page-01.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/web.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">Daimler Financial</div>
                                                <div class="text-medium d-block text-white opacity-7">Brochure</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web web wow animate__fadeIn" data-wow-delay="0.2s">
                                <a href="single-project-page-02.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/real.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">Waterlly Lake</div>
                                                <div class="text-medium d-block text-white opacity-7">Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item branding affiche wow animate__fadeIn" data-wow-delay="0.4s">
                                <a href="single-project-page-03.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/web.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">Jeremy Dupont</div>
                                                <div class="text-medium d-block text-white opacity-7">Photography</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logo logos wow animate__fadeIn" data-wow-delay="0.6s">
                                <a href="single-project-page-02.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/real.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">Bill Gardner</div>
                                                <div class="text-medium d-block text-white opacity-7">Photography</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item invitation logos wow animate__fadeIn">
                                <a href="single-project-page-04.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/real.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">The Manchester</div>
                                                <div class="text-medium d-block text-white opacity-7">Photography</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web wow animate__fadeIn" data-wow-delay="0.2s">
                                <a href="single-project-page-01.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/web.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">Armchair Mojo</div>
                                                <div class="text-medium d-block text-white opacity-7">Photography</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item logos mobile wow animate__fadeIn" data-wow-delay="0.4s">
                                <a href="single-project-page-05.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/real.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">Truenorth Web</div>
                                                <div class="text-medium d-block text-white opacity-7">Identity</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item invitation graphics wow animate__fadeIn" data-wow-delay="0.6s">
                                <a href="single-project-page-03.html">
                                    <div class="portfolio-box">
                                        <div class="portfolio-image bg-gradient-sky-blue-pink">
                                            <img src="{{ asset('image/web.jpg') }}" alt="" />
                                            <div class="portfolio-hover justify-content-end d-flex flex-column padding-50px-tb xl-padding-30px-tb">
                                                <i class="ti-plus portfolio-plus-icon font-weight-300 text-white absolute-middle-center icon-extra-small move-top-bottom"></i>
                                                <div class="alt-font text-white font-weight-500 d-block">Mass Productions</div>
                                                <div class="text-medium d-block text-white opacity-7">Branding</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@endsection
