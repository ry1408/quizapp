@extends('style.index')

@section('content')
    {{-- <?php echo '<pre>';
    print_r($reviews);
    die(); ?> --}}
    <div data-elementor-type="wp-page" data-elementor-id="5" class="elementor elementor-5">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-d02babb elementor-section-full_width elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="d02babb" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elem entor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66a052d"
                                data-id="66a052d" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-ef586cb ts-banner-classic elementor-widget elementor-widget-turitor-main-slider"
                                            data-id="ef586cb" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="turitor-main-slider.default">
                                            <div class="elementor-widget-container">
                                                <div class="hero-area main-slider main-slider-style1 owl-carousel owl-theme owl-rtl owl-loaded"
                                                    data-controls="{&quot;show_nav&quot;:false,&quot;dot_nav_show&quot;:&quot;yes&quot;,&quot;auto_nav_slide&quot;:&quot;yes&quot;,&quot;ts_slider_speed&quot;:8000}">
                                                    <!-- end  banner item -->
                                                    <!-- end  banner item -->
                                                    <!-- end  banner item -->
                                                    <div class="owl-stage-outer">
                                                        <div class="owl-stage"
                                                            style="transform: translate3d(2698px, 0px, 0px); transition: all 0s ease 0s; width: 9443px;">
                                                            <div class="owl-item cloned" style="width: 1349px;">
                                                                <div class="banner-item"
                                                                    style="background-image:url({{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/slider_image2.png)">
                                                                    <div class="container">
                                                                        <div class="row align-items-center ">
                                                                            <div class="col-lg-8 mx-auto text-center">
                                                                                <div
                                                                                    class="slider-content mx-auto text-center">
                                                                                    <p class="sub-title ts-animate">
                                                                                        #Improving lives through learning
                                                                                    </p>
                                                                                    <h1 class="main-title ts-animate"> World
                                                                                        Class best Learning for Anyone </h1>
                                                                                    <p class="slider-desc ts-animate"> We
                                                                                        believe everyone has the capacity to
                                                                                        be creative. Turitor is a <br>place
                                                                                        where people develop their own
                                                                                        potential. </p>
                                                                                    <div class="btn-wrapper ts-animate">
                                                                                        <a target="_self" href="#"
                                                                                            class="btn">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-plus_fill"></i>
                                                                                            view courses </a>
                                                                                        <a target="_self" href="#"
                                                                                            class="btn btn-border">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-user_plus"></i>
                                                                                            start trial </a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Slider content end -->
                                                                            </div>
                                                                            <!-- col end-->
                                                                        </div>
                                                                        <!-- row end-->
                                                                    </div>
                                                                    <!-- Container end -->
                                                                </div>
                                                            </div>
                                                            <div class="owl-item cloned" style="width: 1349px;">
                                                                <div class="banner-item"
                                                                    style="background-image:url({{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/slider_image3.png)">
                                                                    <div class="container">
                                                                        <div class="row align-items-center ">
                                                                            <div class="col-lg-8 mx-auto text-center">
                                                                                <div
                                                                                    class="slider-content mx-auto text-center">
                                                                                    <p class="sub-title ts-animate">
                                                                                        #Improving lives through learning
                                                                                    </p>
                                                                                    <h1 class="main-title ts-animate"> World
                                                                                        class Best Learning </h1>
                                                                                    <p class="slider-desc ts-animate"> We
                                                                                        believe everyone has the capacity to
                                                                                        be creative. Turitor is a <br>place
                                                                                        where people develop their own
                                                                                        potential. </p>
                                                                                    <div class="btn-wrapper ts-animate">
                                                                                        <a target="_self" href="#"
                                                                                            class="btn">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-plus_fill"></i>
                                                                                            view courses </a>
                                                                                        <a target="_self" href="#"
                                                                                            class="btn btn-border">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-user_plus"></i>
                                                                                            start trial </a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Slider content end -->
                                                                            </div>
                                                                            <!-- col end-->
                                                                        </div>
                                                                        <!-- row end-->
                                                                    </div>
                                                                    <!-- Container end -->
                                                                </div>
                                                            </div>
                                                            <div class="owl-item active" style="width: 1349px;">
                                                                <div class="banner-item"
                                                                    style="background-image:url({{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/slider_image1.png)">
                                                                    <div class="container">
                                                                        <div class="row align-items-center ">
                                                                            <div class="col-lg-8 mx-auto text-center">
                                                                                <div
                                                                                    class="slider-content mx-auto text-center">
                                                                                    <p class="sub-title ts-animate">
                                                                                        #Improving lives through learning
                                                                                    </p>
                                                                                    <h1 class="main-title ts-animate"> Top
                                                                                        Class Learning from Everywhere </h1>
                                                                                    <p class="slider-desc ts-animate"> We
                                                                                        believe everyone has the capacity to
                                                                                        be creative. Turitor is a <br>place
                                                                                        where people develop their own
                                                                                        potential. </p>
                                                                                    <div class="btn-wrapper ts-animate">
                                                                                        <a target="_self" href="#"
                                                                                            class="btn">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-plus_fill"></i>
                                                                                            view courses </a>
                                                                                        <a target="_self" href="#"
                                                                                            class="btn btn-border">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-user_plus"></i>
                                                                                            start trial </a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Slider content end -->
                                                                            </div>
                                                                            <!-- col end-->
                                                                        </div>
                                                                        <!-- row end-->
                                                                    </div>
                                                                    <!-- Container end -->
                                                                </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 1349px;">
                                                                <div class="banner-item"
                                                                    style="background-image:url({{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/slider_image2.png)">
                                                                    <div class="container">
                                                                        <div class="row align-items-center ">
                                                                            <div class="col-lg-8 mx-auto text-center">
                                                                                <div
                                                                                    class="slider-content mx-auto text-center">
                                                                                    <p class="sub-title ts-animate">
                                                                                        #Improving lives through learning
                                                                                    </p>
                                                                                    <h1 class="main-title ts-animate">
                                                                                        World Class best Learning for Anyone
                                                                                    </h1>
                                                                                    <p class="slider-desc ts-animate"> We
                                                                                        believe everyone has the capacity to
                                                                                        be creative. Turitor is a <br>place
                                                                                        where people develop their own
                                                                                        potential. </p>
                                                                                    <div class="btn-wrapper ts-animate">
                                                                                        <a target="_self" href="#"
                                                                                            class="btn">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-plus_fill"></i>
                                                                                            view courses </a>
                                                                                        <a target="_self" href="#"
                                                                                            class="btn btn-border">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-user_plus"></i>
                                                                                            start trial </a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Slider content end -->
                                                                            </div>
                                                                            <!-- col end-->
                                                                        </div>
                                                                        <!-- row end-->
                                                                    </div>
                                                                    <!-- Container end -->
                                                                </div>
                                                            </div>
                                                            <div class="owl-item" style="width: 1349px;">
                                                                <div class="banner-item"
                                                                    style="background-image:url({{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/slider_image3.png)">
                                                                    <div class="container">
                                                                        <div class="row align-items-center ">
                                                                            <div class="col-lg-8 mx-auto text-center">
                                                                                <div
                                                                                    class="slider-content mx-auto text-center">
                                                                                    <p class="sub-title ts-animate">
                                                                                        #Improving lives through learning
                                                                                    </p>
                                                                                    <h1 class="main-title ts-animate">
                                                                                        World class Best Learning </h1>
                                                                                    <p class="slider-desc ts-animate"> We
                                                                                        believe everyone has the capacity to
                                                                                        be creative. Turitor is a <br>place
                                                                                        where people develop their own
                                                                                        potential. </p>
                                                                                    <div class="btn-wrapper ts-animate">
                                                                                        <a target="_self" href="#"
                                                                                            class="btn">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-plus_fill"></i>
                                                                                            view courses </a>
                                                                                        <a target="_self" href="#"
                                                                                            class="btn btn-border">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-user_plus"></i>
                                                                                            start trial </a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Slider content end -->
                                                                            </div>
                                                                            <!-- col end-->
                                                                        </div>
                                                                        <!-- row end-->
                                                                    </div>
                                                                    <!-- Container end -->
                                                                </div>
                                                            </div>
                                                            <div class="owl-item cloned" style="width: 1349px;">
                                                                <div class="banner-item"
                                                                    style="background-image:url({{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/slider_image1.png)">
                                                                    <div class="container">
                                                                        <div class="row align-items-center ">
                                                                            <div class="col-lg-8 mx-auto text-center">
                                                                                <div
                                                                                    class="slider-content mx-auto text-center">
                                                                                    <p class="sub-title ts-animate">
                                                                                        #Improving lives through learning
                                                                                    </p>
                                                                                    <h1 class="main-title ts-animate"> Top
                                                                                        Class Learning from Everywhere </h1>
                                                                                    <p class="slider-desc ts-animate"> We
                                                                                        believe everyone has the capacity to
                                                                                        be creative. Turitor is a <br>place
                                                                                        where people develop their own
                                                                                        potential. </p>
                                                                                    <div class="btn-wrapper ts-animate">
                                                                                        <a target="_self" href="#"
                                                                                            class="btn">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-plus_fill"></i>
                                                                                            view courses </a>
                                                                                        <a target="_self" href="#"
                                                                                            class="btn btn-border">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-user_plus"></i>
                                                                                            start trial </a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Slider content end -->
                                                                            </div>
                                                                            <!-- col end-->
                                                                        </div>
                                                                        <!-- row end-->
                                                                    </div>
                                                                    <!-- Container end -->
                                                                </div>
                                                            </div>
                                                            <div class="owl-item cloned" style="width: 1349px;">
                                                                <div class="banner-item"
                                                                    style="background-image:url({{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/slider_image2.png)">
                                                                    <div class="container">
                                                                        <div class="row align-items-center ">
                                                                            <div class="col-lg-8 mx-auto text-center">
                                                                                <div
                                                                                    class="slider-content mx-auto text-center">
                                                                                    <p class="sub-title ts-animate">
                                                                                        #Improving lives through learning
                                                                                    </p>
                                                                                    <h1 class="main-title ts-animate">
                                                                                        World Class best Learning for Anyone
                                                                                    </h1>
                                                                                    <p class="slider-desc ts-animate"> We
                                                                                        believe everyone has the capacity to
                                                                                        be creative. Turitor is a <br>place
                                                                                        where people develop their own
                                                                                        potential. </p>
                                                                                    <div class="btn-wrapper ts-animate">
                                                                                        <a target="_self" href="#"
                                                                                            class="btn">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-plus_fill"></i>
                                                                                            view courses </a>
                                                                                        <a target="_self" href="#"
                                                                                            class="btn btn-border">
                                                                                            <i aria-hidden="true"
                                                                                                class="tsicon tsicon-user_plus"></i>
                                                                                            start trial </a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Slider content end -->
                                                                            </div>
                                                                            <!-- col end-->
                                                                        </div>
                                                                        <!-- row end-->
                                                                    </div>
                                                                    <!-- Container end -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="owl-nav disabled">
                                                        <div class="owl-prev">
                                                            <i class="tsicon tsicon-left-arrow2"></i>
                                                        </div>
                                                        <div class="owl-next">
                                                            <i class="tsicon tsicon-right-arrow2"></i>
                                                        </div>
                                                    </div>
                                                    <div class="owl-dots">
                                                        <div class="owl-dot active">
                                                            <span></span>
                                                        </div>
                                                        <div class="owl-dot">
                                                            <span></span>
                                                        </div>
                                                        <div class="owl-dot">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-1882a15 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="1882a15" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d3171da"
                                data-id="d3171da" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-df7c367 elementor-widget elementor-widget-elementskit-client-logo"
                                            data-id="df7c367" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-client-logo.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="elementskit-clients-slider slick-slider  simple_logo_image"
                                                        data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:1000,&quot;slidesPerView&quot;:5,&quot;slidesPerGroup&quot;:1,&quot;slidesPerColumn&quot;:1,&quot;loop&quot;:false,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:1},&quot;1024&quot;:{&quot;slidesPerView&quot;:5,&quot;slidesPerGroup&quot;:1}}}"
                                                        data-direction="">
                                                        <div
                                                            class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                                            <div class="slick-list swiper-wrapper"
                                                                style="transform: translate3d(-448px, 0px, 0px); transition-duration: 0ms;">
                                                                {{-- <div class="elementskit-client-slider-item swiper-slide"
                                                                    style="width: 224px;">
                                                                    <div class="slick-slide">
                                                                        <div class="single-client image-switcher"
                                                                            title="Client 1">

                                                                            <div class="content-image">

                                                                                <img data-lazyloaded="1"
                                                                                    src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo5.png"
                                                                                    width="110" height="100"
                                                                                    data-src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo5.png"
                                                                                    class="entered litespeed-loaded"
                                                                                    alt=""
                                                                                    data-ll-status="loaded"><noscript><img
                                                                                        width="110" height="100"
                                                                                        src="wp-content/uploads/sites/6/2020/02/sponsor_logo5.png"
                                                                                        class=""
                                                                                        alt="" /></noscript>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                @foreach ($board_images as $images)
                                                                    <div class="elementskit-client-slider-item swiper-slide swiper-slide-prev"
                                                                        style="width: 224px;">
                                                                        <div class="slick-slide">
                                                                            <div class="single-client image-switcher"
                                                                                title="Client 2">
                                                                                <div class="content-image">
                                                                                    <img data-lazyloaded="1"
                                                                                        src="{{ url('Board\images') }}/{{ $images->image }}"
                                                                                        width="146" height="100"
                                                                                        data-src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo4.png"
                                                                                        class="entered litespeed-loaded"
                                                                                        alt=""
                                                                                        data-ll-status="loaded"><noscript><img
                                                                                            width="146" height="100"
                                                                                            src="wp-content/uploads/sites/6/2020/02/sponsor_logo4.png"
                                                                                            class=""
                                                                                            alt="" /></noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                                {{-- <div class="elementskit-client-slider-item swiper-slide swiper-slide-active"
                                                                    style="width: 224px;">
                                                                    <div class="slick-slide">
                                                                        <div class="single-client image-switcher"
                                                                            title="Client 3">

                                                                            <div class="content-image">

                                                                                <img data-lazyloaded="1"
                                                                                    src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo3.png"
                                                                                    width="87" height="100"
                                                                                    data-src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo3.png"
                                                                                    class="entered litespeed-loaded"
                                                                                    alt=""
                                                                                    data-ll-status="loaded"><noscript><img
                                                                                        width="87" height="100"
                                                                                        src="wp-content/uploads/sites/6/2020/02/sponsor_logo3.png"
                                                                                        class=""
                                                                                        alt="" /></noscript>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                {{-- <div class="elementskit-client-slider-item swiper-slide swiper-slide-next"
                                                                    style="width: 224px;">
                                                                    <div class="slick-slide">
                                                                        <div class="single-client image-switcher"
                                                                            title="Client 4">

                                                                            <div class="content-image">

                                                                                <img data-lazyloaded="1"
                                                                                    src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo2.png"
                                                                                    width="97" height="100"
                                                                                    data-src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo2.png"
                                                                                    class="entered litespeed-loaded"
                                                                                    alt=""
                                                                                    data-ll-status="loaded"><noscript><img
                                                                                        width="97" height="100"
                                                                                        src="wp-content/uploads/sites/6/2020/02/sponsor_logo2.png"
                                                                                        class=""
                                                                                        alt="" /></noscript>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                {{-- <div class="elementskit-client-slider-item swiper-slide"
                                                                    style="width: 224px;">
                                                                    <div class="slick-slide">
                                                                        <div class="single-client image-switcher"
                                                                            title="Client 5">

                                                                            <div class="content-image">

                                                                                <img data-lazyloaded="1"
                                                                                    src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo1.png"
                                                                                    width="93" height="100"
                                                                                    data-src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo1.png"
                                                                                    class="entered litespeed-loaded"
                                                                                    alt=""
                                                                                    data-ll-status="loaded"><noscript><img
                                                                                        width="93" height="100"
                                                                                        src="wp-content/uploads/sites/6/2020/02/sponsor_logo1.png"
                                                                                        class=""
                                                                                        alt="" /></noscript>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                {{-- <div class="elementskit-client-slider-item swiper-slide"
                                                                    style="width: 224px;">
                                                                    <div class="slick-slide">
                                                                        <div class="single-client image-switcher"
                                                                            title="Client 6">

                                                                            <div class="content-image">

                                                                                <img data-lazyloaded="1"
                                                                                    src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo2.png"
                                                                                    width="97" height="100"
                                                                                    data-src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo2.png"
                                                                                    class="entered litespeed-loaded"
                                                                                    alt=""
                                                                                    data-ll-status="loaded"><noscript><img
                                                                                        width="97" height="100"
                                                                                        src="wp-content/uploads/sites/6/2020/02/sponsor_logo2.png"
                                                                                        class=""
                                                                                        alt="" /></noscript>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                                {{-- <div class="elementskit-client-slider-item swiper-slide"
                                                                    style="width: 224px;">
                                                                    <div class="slick-slide">
                                                                        <div class="single-client image-switcher"
                                                                            title="Client 7">

                                                                            <div class="content-image">

                                                                                <img data-lazyloaded="1"
                                                                                    src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo4.png"
                                                                                    width="146" height="100"
                                                                                    data-src="https://demo.themewinter.com/wp/turitors/tutor-classic/wp-content/uploads/sites/6/2020/02/sponsor_logo4.png"
                                                                                    class="entered litespeed-loaded"
                                                                                    alt=""
                                                                                    data-ll-status="loaded"><noscript><img
                                                                                        width="146" height="100"
                                                                                        src="wp-content/uploads/sites/6/2020/02/sponsor_logo4.png"
                                                                                        class=""
                                                                                        alt="" /></noscript>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div> --}}

                                                            </div>

                                                            <span class="swiper-notification" aria-live="assertive"
                                                                aria-atomic="true"></span>
                                                        </div><!-- .elementskit-clients-slider END -->

                                                        <ul
                                                            class="slick-dots swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-094cc5f elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="094cc5f" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ccafd44"
                                data-id="ccafd44" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-background-overlay"></div>
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-bfd0efc ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="bfd0efc" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->
                                                    <div
                                                        class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-  gradient-active image-active hover_from_left">
                                                        <div class="elementskit-box-header">
                                                            <div class="elementskit-info-box-icon text-center">
                                                                <img data-lazyloaded="1"
                                                                    src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon1.png"
                                                                    width="44" height="40"
                                                                    data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon1.png"
                                                                    class="attachment- size- entered litespeed-loaded"
                                                                    alt="" data-ll-status="loaded">
                                                                <noscript>
                                                                    <img width="44" height="40"
                                                                        src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon1.png"
                                                                        class="attachment- size-" alt="" />
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title"> Online/Offline
                                                                Classrooms </h3>
                                                            <p>Real skills for real-world application. Experience
                                                                interactive </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-0fecdb7"
                                data-id="0fecdb7" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a486c18 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="a486c18" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->
                                                    <div
                                                        class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-  gradient-active image-active hover_from_left">
                                                        <div class="elementskit-box-header">
                                                            <div class="elementskit-info-box-icon text-center">
                                                                <img data-lazyloaded="1"
                                                                    src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon2.png"
                                                                    width="45" height="40"
                                                                    data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon2.png"
                                                                    class="attachment- size- entered litespeed-loaded"
                                                                    alt="" data-ll-status="loaded">
                                                                <noscript>
                                                                    <img width="45" height="40"
                                                                        src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon2.png"
                                                                        class="attachment- size-" alt="" />
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title"> Personal Mentor Support
                                                            </h3>
                                                            <p>The most impressive is collection of shared me online college
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8a40782"
                                data-id="8a40782" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-592d67d ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="592d67d" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->
                                                    <div
                                                        class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-  gradient-active image-active hover_from_left">
                                                        <div class="elementskit-box-header">
                                                            <div class="elementskit-info-box-icon text-center">
                                                                <img data-lazyloaded="1"
                                                                    src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon3.png"
                                                                    width="38" height="40"
                                                                    data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon3.png"
                                                                    class="attachment- size- entered litespeed-loaded"
                                                                    alt="" data-ll-status="loaded">
                                                                <noscript>
                                                                    <img width="38" height="40"
                                                                        src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon3.png"
                                                                        class="attachment- size-" alt="" />
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title"> Lifetime Slack Chat
                                                                Support </h3>
                                                            <p>North America right at your fingertips. All 24 of Turitor.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-00c6aa4"
                                data-id="00c6aa4" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a1641fb ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                            data-id="a1641fb" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-icon-box.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <!-- link opening -->
                                                    <!-- end link opening -->
                                                    <div
                                                        class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-  gradient-active image-active hover_from_left">
                                                        <div class="elementskit-box-header">
                                                            <div class="elementskit-info-box-icon text-center">
                                                                <img data-lazyloaded="1"
                                                                    src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon4.png"
                                                                    width="43" height="36"
                                                                    data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon4.png"
                                                                    class="attachment- size- entered litespeed-loaded"
                                                                    alt="" data-ll-status="loaded">
                                                                <noscript>
                                                                    <img width="43" height="36"
                                                                        src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/feature_icon4.png"
                                                                        class="attachment- size-" alt="" />
                                                                </noscript>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title"> Job Placement Support
                                                            </h3>
                                                            <p>Experience interactive courses in AWS, Google Cloud, and
                                                                Azure</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-b3842f0 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="b3842f0" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f55ffd4"
                                data-id="f55ffd4" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-fa05177 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="fa05177" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div
                                                        class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h3 class="elementskit-section-subtitle  "> #Top Courses </h3>
                                                        <h2 class="ekit-heading--title elementskit-section-title "> Find
                                                            what Fascinates you </h2>
                                                        <div class="ekit-heading__description">
                                                            <p>Choose the most powerful courses and always be on demand.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-93c46c2 elementor-widget elementor-widget-turitor-tutor-course"
                                            data-id="93c46c2" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="turitor-tutor-course.default">
                                            <div class="elementor-widget-container">
                                                <div class="tutor-wrap tutor-wrap-parent tutor-courses-wrap tutor-container course-archive-page"
                                                    data-tutor_courses_meta="{&quot;course_filter&quot;:false,&quot;supported_filters&quot;:[],&quot;loop_content_only&quot;:false,&quot;column_per_row&quot;:&quot;3&quot;,&quot;course_per_page&quot;:6,&quot;show_pagination&quot;:false}">
                                                    <div class="tutor-row tutor-gx-xl-5">
                                                        <div class="tutor-col-12">
                                                            <div class="">
                                                                <div style="text-align: right;"
                                                                    class="tutor-course-filter">
                                                                    <form style="display: inline-block;">
                                                                        <select class="tutor-form-select"
                                                                            name="course_order" style="display: none;">
                                                                            <option value="newest_first"> Release Date
                                                                                (newest first) </option>
                                                                            <option value="oldest_first"> Release Date
                                                                                (oldest first) </option>
                                                                            <option value="course_title_az"> Course Title
                                                                                (a-z) </option>
                                                                            <option value="course_title_za"> Course Title
                                                                                (z-a) </option>
                                                                        </select>
                                                                        <div
                                                                            class="tutor-form-control tutor-form-select tutor-js-form-select">
                                                                            <span class="tutor-form-select-label"
                                                                                tutor-dropdown-label="">Release Date
                                                                                (newest first)</span>
                                                                            <div class="tutor-form-select-dropdown">
                                                                                <div class="tutor-form-select-search tutor-pt-8 tutor-px-8"
                                                                                    style="display: none;">
                                                                                    <div class="tutor-form-wrap">
                                                                                        <span class="tutor-form-icon">
                                                                                            <i class="tutor-icon-search"
                                                                                                area-hidden="true"></i>
                                                                                        </span>
                                                                                        <input type="search"
                                                                                            class="tutor-form-control"
                                                                                            placeholder="Search ...">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tutor-form-select-options">
                                                                                    <div class="tutor-form-select-option">
                                                                                        <span tutor-dropdown-item=""
                                                                                            data-key="newest_first"
                                                                                            class="tutor-nowrap-ellipsis"
                                                                                            title="Release Date (newest first)">Release
                                                                                            Date (newest first)</span>
                                                                                    </div>
                                                                                    <div class="tutor-form-select-option">
                                                                                        <span tutor-dropdown-item=""
                                                                                            data-key="oldest_first"
                                                                                            class="tutor-nowrap-ellipsis"
                                                                                            title="Release Date (oldest first)">Release
                                                                                            Date (oldest first)</span>
                                                                                    </div>
                                                                                    <div class="tutor-form-select-option">
                                                                                        <span tutor-dropdown-item=""
                                                                                            data-key="course_title_az"
                                                                                            class="tutor-nowrap-ellipsis"
                                                                                            title="Course Title (a-z)">Course
                                                                                            Title (a-z)</span>
                                                                                    </div>
                                                                                    <div class="tutor-form-select-option">
                                                                                        <span tutor-dropdown-item=""
                                                                                            data-key="course_title_za"
                                                                                            class="tutor-nowrap-ellipsis"
                                                                                            title="Course Title (z-a)">Course
                                                                                            Title (z-a)</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <br>
                                                            </div>
                                                            <div class="tutor-pagination-wrapper-replaceable"
                                                                tutor-course-list-container="">
                                                                <div class="tutor-course-list tutor-grid tutor-grid-3">
                                                                    <div class="tutor-card tutor-course-card tutor-course">
                                                                        <div class="tutor-course-header">
                                                                            <div class="tutor-course-loop-header-meta">
                                                                                <div class="tutor-course-lising-category">
                                                                                    <a
                                                                                        href="course-category/business/index.html">Business
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-card-body">
                                                                            <h3 class="tutor-course-name tutor-fs-5 tutor-fw-medium"
                                                                                title="Sales Training: Practical Sales Techniques">
                                                                                <a
                                                                                    href="courses/sales-training-practical-sales-techniques/index.html">Sales
                                                                                    Training: Practical Sales Techniques</a>
                                                                            </h3>
                                                                            <div class="tutor-course-loop-meta">
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-clock1"></i>
                                                                                    <span>
                                                                                        <span class="tutor-meta-level">
                                                                                            01</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            hour</span>
                                                                                        <span class="tutor-meta-level">
                                                                                            50</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            minutes</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-user1"></i>
                                                                                    <span>0</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tutor-loop-author">
                                                                                <div class="tutor-single-course-avatar">
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">
                                                                                        <div class="tutor-avatar">
                                                                                            <div
                                                                                                class="tutor-ratio tutor-ratio-1x1">
                                                                                                <span
                                                                                                    class="tutor-avatar-text">A</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="tutor-single-course-author-name">
                                                                                    <span>by</span>
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">acuraInte</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-loop-course-footer">
                                                                            <div class="tutor-course-loop-price">
                                                                                <div class="price">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount">
                                                                                        <span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>500.00
                                                                                    </span>
                                                                                    <a href="indexe707.html?add-to-cart=1446"
                                                                                        data-quantity="1"
                                                                                        class="tutor-btn tutor-btn-outline-primary tutor-btn-md tutor-btn-block  product_type_simple add_to_cart_button  ajax_add_to_cart"
                                                                                        data-product_id="1446"
                                                                                        data-product_sku=""
                                                                                        aria-label="Add “Sales Training: Practical Sales Techniques” to your cart"
                                                                                        rel="nofollow">
                                                                                        <span
                                                                                            class="tutor-icon-cart-line tutor-mr-8"></span>
                                                                                        <span class="cart-text">Add to
                                                                                            cart</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="course-thumb">
                                                                            <div class="tutor-course-thumbnail">
                                                                                <a href="courses/sales-training-practical-sales-techniques/index.html"
                                                                                    class="tutor-d-block">
                                                                                    <div
                                                                                        class="tutor-ratio tutor-ratio-16x9">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image5-730x465.jpg"
                                                                                            class="tutor-card-image-top entered litespeed-loaded"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image5-730x465.jpg"
                                                                                            alt="Sales Training: Practical Sales Techniques"
                                                                                            loading="lazy"
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img class="tutor-card-image-top"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image5-730x465.jpg"
                                                                                                alt="Sales Training: Practical Sales Techniques"
                                                                                                loading="lazy">
                                                                                        </noscript>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            class="course-shap entered litespeed-loaded"
                                                                            data-src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            alt="shape" data-ll-status="loaded">
                                                                        <noscript>
                                                                            <img class="course-shap"
                                                                                src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                                alt="shape">
                                                                        </noscript>
                                                                    </div>
                                                                    <div class="tutor-card tutor-course-card tutor-course">
                                                                        <div class="tutor-course-header">
                                                                            <div class="tutor-course-loop-header-meta">
                                                                                <div class="tutor-course-lising-category">
                                                                                    <a
                                                                                        href="course-category/graphics-design/index.html">Graphics
                                                                                        Design </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-card-body">
                                                                            <h3 class="tutor-course-name tutor-fs-5 tutor-fw-medium"
                                                                                title="Competitive Strategy and Organization">
                                                                                <a
                                                                                    href="courses/competitive-strategy-and-organization/index.html">Competitive
                                                                                    Strategy and Organization</a>
                                                                            </h3>
                                                                            <div class="tutor-course-loop-meta">
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-clock1"></i>
                                                                                    <span>
                                                                                        <span class="tutor-meta-level">
                                                                                            02</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            hours</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-user1"></i>
                                                                                    <span>84</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tutor-loop-author">
                                                                                <div class="tutor-single-course-avatar">
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">
                                                                                        <div class="tutor-avatar">
                                                                                            <div
                                                                                                class="tutor-ratio tutor-ratio-1x1">
                                                                                                <span
                                                                                                    class="tutor-avatar-text">A</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="tutor-single-course-author-name">
                                                                                    <span>by</span>
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">acuraInte</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-loop-course-footer">
                                                                            <div class="tutor-course-loop-price">
                                                                                <div class="price">
                                                                                    <span class="amount">Free</span>
                                                                                    <div class="tutor-loop-cart-btn-wrap">
                                                                                        <a
                                                                                            href="courses/competitive-strategy-and-organization/index.html">Get
                                                                                            Enrolled</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="course-thumb">
                                                                            <div class="tutor-course-thumbnail">
                                                                                <a href="courses/competitive-strategy-and-organization/index.html"
                                                                                    class="tutor-d-block">
                                                                                    <div
                                                                                        class="tutor-ratio tutor-ratio-16x9">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image4-730x465.jpg"
                                                                                            class="tutor-card-image-top entered litespeed-loaded"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image4-730x465.jpg"
                                                                                            alt="Competitive Strategy and Organization"
                                                                                            loading="lazy"
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img class="tutor-card-image-top"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image4-730x465.jpg"
                                                                                                alt="Competitive Strategy and Organization"
                                                                                                loading="lazy">
                                                                                        </noscript>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            class="course-shap entered litespeed-loaded"
                                                                            data-src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            alt="shape" data-ll-status="loaded">
                                                                        <noscript>
                                                                            <img class="course-shap"
                                                                                src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                                alt="shape">
                                                                        </noscript>
                                                                    </div>
                                                                    <div class="tutor-card tutor-course-card tutor-course">
                                                                        <div class="tutor-course-header">
                                                                            <div class="tutor-course-loop-header-meta">
                                                                                <div class="tutor-course-lising-category">
                                                                                    <a
                                                                                        href="course-category/web-development/index.html">Web
                                                                                        Development </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-card-body">
                                                                            <h3 class="tutor-course-name tutor-fs-5 tutor-fw-medium"
                                                                                title="The Complete JavaScript Course 2020">
                                                                                <a
                                                                                    href="courses/the-complete-javascript-course-2019/index.html">The
                                                                                    Complete JavaScript Course 2020</a>
                                                                            </h3>
                                                                            <div class="tutor-course-loop-meta">
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-clock1"></i>
                                                                                    <span>
                                                                                        <span class="tutor-meta-level">
                                                                                            01</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            hour</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-user1"></i>
                                                                                    <span>0</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tutor-loop-author">
                                                                                <div class="tutor-single-course-avatar">
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">
                                                                                        <div class="tutor-avatar">
                                                                                            <div
                                                                                                class="tutor-ratio tutor-ratio-1x1">
                                                                                                <span
                                                                                                    class="tutor-avatar-text">A</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="tutor-single-course-author-name">
                                                                                    <span>by</span>
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">acuraInte</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-loop-course-footer">
                                                                            <div class="tutor-course-loop-price">
                                                                                <div class="price">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount">
                                                                                        <span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>250.00
                                                                                    </span>
                                                                                    <a href="indexac5a.html?add-to-cart=1451"
                                                                                        data-quantity="1"
                                                                                        class="tutor-btn tutor-btn-outline-primary tutor-btn-md tutor-btn-block  product_type_simple add_to_cart_button  ajax_add_to_cart"
                                                                                        data-product_id="1451"
                                                                                        data-product_sku=""
                                                                                        aria-label="Add “The Complete JavaScript Course 2020” to your cart"
                                                                                        rel="nofollow">
                                                                                        <span
                                                                                            class="tutor-icon-cart-line tutor-mr-8"></span>
                                                                                        <span class="cart-text">Add to
                                                                                            cart</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="course-thumb">
                                                                            <div class="tutor-course-thumbnail">
                                                                                <a href="courses/the-complete-javascript-course-2019/index.html"
                                                                                    class="tutor-d-block">
                                                                                    <div
                                                                                        class="tutor-ratio tutor-ratio-16x9">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image2-730x465.jpg"
                                                                                            class="tutor-card-image-top entered litespeed-loaded"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image2-730x465.jpg"
                                                                                            alt="The Complete JavaScript Course 2020"
                                                                                            loading="lazy"
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img class="tutor-card-image-top"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image2-730x465.jpg"
                                                                                                alt="The Complete JavaScript Course 2020"
                                                                                                loading="lazy">
                                                                                        </noscript>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            class="course-shap entered litespeed-loaded"
                                                                            data-src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            alt="shape" data-ll-status="loaded">
                                                                        <noscript>
                                                                            <img class="course-shap"
                                                                                src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                                alt="shape">
                                                                        </noscript>
                                                                    </div>
                                                                    <div class="tutor-card tutor-course-card tutor-course">
                                                                        <div class="tutor-course-header">
                                                                            <div class="tutor-course-loop-header-meta">
                                                                                <div class="tutor-course-lising-category">
                                                                                    <a
                                                                                        href="course-category/marketing/index.html">Marketing
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-card-body">
                                                                            <h3 class="tutor-course-name tutor-fs-5 tutor-fw-medium"
                                                                                title="Inside Opera: Why Does It Matter?">
                                                                                <a
                                                                                    href="courses/inside-opera-why-does-it-matter/index.html">Inside
                                                                                    Opera: Why Does It Matter?</a>
                                                                            </h3>
                                                                            <div class="tutor-course-loop-meta">
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-clock1"></i>
                                                                                    <span>
                                                                                        <span class="tutor-meta-level">
                                                                                            04</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            hours</span>
                                                                                        <span class="tutor-meta-level">
                                                                                            50</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            minutes</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-user1"></i>
                                                                                    <span>13</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tutor-loop-author">
                                                                                <div class="tutor-single-course-avatar">
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">
                                                                                        <div class="tutor-avatar">
                                                                                            <div
                                                                                                class="tutor-ratio tutor-ratio-1x1">
                                                                                                <span
                                                                                                    class="tutor-avatar-text">A</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="tutor-single-course-author-name">
                                                                                    <span>by</span>
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">acuraInte</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-loop-course-footer">
                                                                            <div class="tutor-course-loop-price">
                                                                                <div class="price">
                                                                                    <span class="amount">Free</span>
                                                                                    <div class="tutor-loop-cart-btn-wrap">
                                                                                        <a
                                                                                            href="courses/inside-opera-why-does-it-matter/index.html">Get
                                                                                            Enrolled</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="course-thumb">
                                                                            <div class="tutor-course-thumbnail">
                                                                                <a href="courses/inside-opera-why-does-it-matter/index.html"
                                                                                    class="tutor-d-block">
                                                                                    <div
                                                                                        class="tutor-ratio tutor-ratio-16x9">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image3-730x465.jpg"
                                                                                            class="tutor-card-image-top entered litespeed-loaded"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image3-730x465.jpg"
                                                                                            alt="Inside Opera: Why Does It Matter?"
                                                                                            loading="lazy"
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img class="tutor-card-image-top"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image3-730x465.jpg"
                                                                                                alt="Inside Opera: Why Does It Matter?"
                                                                                                loading="lazy">
                                                                                        </noscript>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            class="course-shap entered litespeed-loaded"
                                                                            data-src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            alt="shape" data-ll-status="loaded">
                                                                        <noscript>
                                                                            <img class="course-shap"
                                                                                src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                                alt="shape">
                                                                        </noscript>
                                                                    </div>
                                                                    <div class="tutor-card tutor-course-card tutor-course">
                                                                        <div class="tutor-course-header">
                                                                            <div class="tutor-course-loop-header-meta">
                                                                                <div class="tutor-course-lising-category">
                                                                                    <a
                                                                                        href="course-category/wordpress/index.html">WordPress
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-card-body">
                                                                            <h3 class="tutor-course-name tutor-fs-5 tutor-fw-medium"
                                                                                title="WordPress for Beginners – Master WordPress">
                                                                                <a
                                                                                    href="courses/wordpress-for-beginners-master-wordpress/index.html">WordPress
                                                                                    for Beginners – Master WordPress</a>
                                                                            </h3>
                                                                            <div class="tutor-course-loop-meta">
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-clock1"></i>
                                                                                    <span>
                                                                                        <span class="tutor-meta-level">
                                                                                            03</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            hours</span>
                                                                                        <span class="tutor-meta-level">
                                                                                            50</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            minutes</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-user1"></i>
                                                                                    <span>0</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tutor-loop-author">
                                                                                <div class="tutor-single-course-avatar">
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">
                                                                                        <div class="tutor-avatar">
                                                                                            <div
                                                                                                class="tutor-ratio tutor-ratio-1x1">
                                                                                                <span
                                                                                                    class="tutor-avatar-text">A</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="tutor-single-course-author-name">
                                                                                    <span>by</span>
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">acuraInte</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-loop-course-footer">
                                                                            <div class="tutor-course-loop-price">
                                                                                <div class="price">
                                                                                    <span
                                                                                        class="woocommerce-Price-amount amount">
                                                                                        <span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>150.00
                                                                                    </span>
                                                                                    <a href="index195d.html?add-to-cart=1452"
                                                                                        data-quantity="1"
                                                                                        class="tutor-btn tutor-btn-outline-primary tutor-btn-md tutor-btn-block  product_type_simple add_to_cart_button  ajax_add_to_cart"
                                                                                        data-product_id="1452"
                                                                                        data-product_sku=""
                                                                                        aria-label="Add “WordPress for Beginners – Master WordPress” to your cart"
                                                                                        rel="nofollow">
                                                                                        <span
                                                                                            class="tutor-icon-cart-line tutor-mr-8"></span>
                                                                                        <span class="cart-text">Add to
                                                                                            cart</span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="course-thumb">
                                                                            <div class="tutor-course-thumbnail">
                                                                                <a href="courses/wordpress-for-beginners-master-wordpress/index.html"
                                                                                    class="tutor-d-block">
                                                                                    <div
                                                                                        class="tutor-ratio tutor-ratio-16x9">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image1-730x465.jpg"
                                                                                            class="tutor-card-image-top entered litespeed-loaded"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image1-730x465.jpg"
                                                                                            alt="WordPress for Beginners – Master WordPress"
                                                                                            loading="lazy"
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img class="tutor-card-image-top"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image1-730x465.jpg"
                                                                                                alt="WordPress for Beginners – Master WordPress"
                                                                                                loading="lazy">
                                                                                        </noscript>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            class="course-shap entered litespeed-loaded"
                                                                            data-src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            alt="shape" data-ll-status="loaded">
                                                                        <noscript>
                                                                            <img class="course-shap"
                                                                                src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                                alt="shape">
                                                                        </noscript>
                                                                    </div>
                                                                    <div class="tutor-card tutor-course-card tutor-course">
                                                                        <div class="tutor-course-header">
                                                                            <div class="tutor-course-loop-header-meta">
                                                                                <div class="tutor-course-lising-category">
                                                                                    <a
                                                                                        href="course-category/design/index.html">Design
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-card-body">
                                                                            <h3 class="tutor-course-name tutor-fs-5 tutor-fw-medium"
                                                                                title="User Experience Design Essentials">
                                                                                <a
                                                                                    href="courses/user-experience-design-essentials/index.html">User
                                                                                    Experience Design Essentials</a>
                                                                            </h3>
                                                                            <div class="tutor-course-loop-meta">
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-clock1"></i>
                                                                                    <span>
                                                                                        <span class="tutor-meta-level">
                                                                                            02</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            hours</span>
                                                                                        <span class="tutor-meta-level">
                                                                                            50</span>
                                                                                        <span
                                                                                            class="tutor-meta-value tutor-color-secondary tutor-mr-4">
                                                                                            minutes</span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="tutor-single-loop-meta">
                                                                                    <i class="tsicon tsicon-user1"></i>
                                                                                    <span>20</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tutor-loop-author">
                                                                                <div class="tutor-single-course-avatar">
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">
                                                                                        <div class="tutor-avatar">
                                                                                            <div
                                                                                                class="tutor-ratio tutor-ratio-1x1">
                                                                                                <span
                                                                                                    class="tutor-avatar-text">A</span>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </div>
                                                                                <div
                                                                                    class="tutor-single-course-author-name">
                                                                                    <span>by</span>
                                                                                    <a
                                                                                        href="profile/acurainte/index2ccb.html?view=student">acuraInte</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tutor-loop-course-footer">
                                                                            <div class="tutor-course-loop-price">
                                                                                <div class="price">
                                                                                    <span class="amount">Free</span>
                                                                                    <div class="tutor-loop-cart-btn-wrap">
                                                                                        <a
                                                                                            href="courses/user-experience-design-essentials/index.html">Get
                                                                                            Enrolled</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="course-thumb">
                                                                            <div class="tutor-course-thumbnail">
                                                                                <a href="courses/user-experience-design-essentials/index.html"
                                                                                    class="tutor-d-block">
                                                                                    <div
                                                                                        class="tutor-ratio tutor-ratio-16x9">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image6-730x465.jpg"
                                                                                            class="tutor-card-image-top entered litespeed-loaded"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image6-730x465.jpg"
                                                                                            alt="User Experience Design Essentials"
                                                                                            loading="lazy"
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img class="tutor-card-image-top"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/course_image6-730x465.jpg"
                                                                                                alt="User Experience Design Essentials"
                                                                                                loading="lazy">
                                                                                        </noscript>
                                                                                    </div>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            class="course-shap entered litespeed-loaded"
                                                                            data-src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                            alt="shape" data-ll-status="loaded">
                                                                        <noscript>
                                                                            <img class="course-shap"
                                                                                src="{{ url('design/front/wp-content') }}/themes/turitor/assets/images/shape_combined.svg"
                                                                                alt="shape">
                                                                        </noscript>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tutor-modal tutor-login-modal">
                                                    <div class="tutor-modal-overlay"></div>
                                                    <div class="tutor-modal-window tutor-modal-window-sm">
                                                        <div class="tutor-modal-content tutor-modal-content-white">
                                                            <button class="tutor-iconic-btn tutor-modal-close-o"
                                                                data-tutor-modal-close="">
                                                                <span class="tutor-icon-times" area-hidden="true"></span>
                                                            </button>
                                                            <div class="tutor-modal-body">
                                                                <div class="tutor-py-48">
                                                                    <div
                                                                        class="tutor-fs-4 tutor-fw-medium tutor-color-black tutor-mb-32">
                                                                        Hi, Welcome back!</div>
                                                                    <form id="tutor-login-form" method="post">
                                                                        <input type="hidden" name="tutor_action"
                                                                            value="tutor_user_login">
                                                                        <input type="hidden" name="redirect_to"
                                                                            value="index.html">
                                                                        <div class="tutor-mb-20">
                                                                            <input type="text"
                                                                                class="tutor-form-control"
                                                                                placeholder="Username or Email Address"
                                                                                name="log" value=""
                                                                                size="20">
                                                                        </div>
                                                                        <div class="tutor-mb-32">
                                                                            <input type="password"
                                                                                class="tutor-form-control"
                                                                                placeholder="Password" name="pwd"
                                                                                value="" size="20">
                                                                        </div>
                                                                        <div class="tutor-login-error"></div>
                                                                        <div
                                                                            class="tutor-d-flex tutor-justify-between tutor-align-center tutor-mb-40">
                                                                            <div class="tutor-form-check">
                                                                                <input id="tutor-login-agmnt-1"
                                                                                    type="checkbox"
                                                                                    class="tutor-form-check-input tutor-bg-black-40"
                                                                                    name="rememberme" value="forever">
                                                                                <label for="tutor-login-agmnt-1"
                                                                                    class="tutor-fs-7 tutor-color-muted">
                                                                                    Keep me signed in </label>
                                                                            </div>
                                                                            <a href="dashboard-page/retrieve-password/index.html"
                                                                                class="tutor-btn tutor-btn-ghost"> Forgot?
                                                                            </a>
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="tutor-btn tutor-btn-primary tutor-btn-block">
                                                                            Sign In </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-751c088 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="751c088" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2f26a4c"
                                data-id="2f26a4c" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-b6f09f4 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="b6f09f4" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div
                                                        class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h2 class="ekit-heading--title elementskit-section-title "> What
                                                            will you Discover? </h2>
                                                        <div class="ekit-heading__description">
                                                            <p>Explore new skills, deepen existing passions, and get lost in
                                                                creativity.What you find just <br>might surprise and inspire
                                                                you. With so much to explore, real projects to create,and
                                                                the <br>support f fellow-creatives, Turitor empowers </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-8795054 elementor-widget-elementskit-dual-button-center elementor-widget elementor-widget-elementskit-dual-button"
                                            data-id="8795054" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-dual-button.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-element-align-wrapper">
                                                        <div class="ekit_double_button">
                                                            <a class="ekit-double-btn ekit-double-btn-one" href="#">
                                                                <i aria-hidden="true"
                                                                    class="tsicon tsicon-plus_fill"></i>view courses </a>
                                                            <a class="ekit-double-btn ekit-double-btn-two" href="#">
                                                                <i aria-hidden="true"
                                                                    class="tsicon tsicon-user_plus"></i>start trial </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-5ae7e10 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="5ae7e10" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2109d99"
                                data-id="2109d99" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-cceb3f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                                            data-id="cceb3f6" data-element_type="section"
                                            data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0f82e57"
                                                        data-id="0f82e57" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-5ea701d elementor-widget elementor-widget-elementskit-funfact"
                                                                    data-id="5ea701d" data-element_type="widget"
                                                                    data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                    data-widget_type="elementskit-funfact.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con">
                                                                            <div
                                                                                class="elementskit-funfact text-center     ">
                                                                                <div class="elementskit-funfact-inner">
                                                                                    <div class="funfact-icon">
                                                                                        <i></i>
                                                                                    </div>
                                                                                    <div class="funfact-content">
                                                                                        <div
                                                                                            class="number-percentage-wraper">
                                                                                            <span class="number-percentage"
                                                                                                data-value="506"
                                                                                                data-animation-duration="3500">506</span>
                                                                                            +
                                                                                        </div>
                                                                                        <h3 class="funfact-title">Courses
                                                                                            &amp; videos</h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-93b548d"
                                                        data-id="93b548d" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-add506e elementor-widget elementor-widget-elementskit-funfact"
                                                                    data-id="add506e" data-element_type="widget"
                                                                    data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                    data-widget_type="elementskit-funfact.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con">
                                                                            <div
                                                                                class="elementskit-funfact text-center     ">
                                                                                <div class="elementskit-funfact-inner">
                                                                                    <div class="funfact-icon">
                                                                                        <i></i>
                                                                                    </div>
                                                                                    <div class="funfact-content">
                                                                                        <div
                                                                                            class="number-percentage-wraper">
                                                                                            <span class="number-percentage"
                                                                                                data-value="265"
                                                                                                data-animation-duration="3500">265</span>
                                                                                            +
                                                                                        </div>
                                                                                        <h3 class="funfact-title">Expart
                                                                                            teachers</h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-08c0ebe"
                                                        data-id="08c0ebe" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-7b2cbc4 elementor-widget elementor-widget-elementskit-funfact"
                                                                    data-id="7b2cbc4" data-element_type="widget"
                                                                    data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                    data-widget_type="elementskit-funfact.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con">
                                                                            <div
                                                                                class="elementskit-funfact text-center     ">
                                                                                <div class="elementskit-funfact-inner">
                                                                                    <div class="funfact-icon">
                                                                                        <i></i>
                                                                                    </div>
                                                                                    <div class="funfact-content">
                                                                                        <div
                                                                                            class="number-percentage-wraper">
                                                                                            <span class="number-percentage"
                                                                                                data-value="4506"
                                                                                                data-animation-duration="3500">4,506</span>
                                                                                            +
                                                                                        </div>
                                                                                        <h3 class="funfact-title">Students
                                                                                        </h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-e4b6cb7"
                                                        data-id="e4b6cb7" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-b56bd41 elementor-widget elementor-widget-elementskit-funfact"
                                                                    data-id="b56bd41" data-element_type="widget"
                                                                    data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                    data-widget_type="elementskit-funfact.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con">
                                                                            <div
                                                                                class="elementskit-funfact text-center     ">
                                                                                <div class="elementskit-funfact-inner">
                                                                                    <div class="funfact-icon">
                                                                                        <i></i>
                                                                                    </div>
                                                                                    <div class="funfact-content">
                                                                                        <div
                                                                                            class="number-percentage-wraper">
                                                                                            <span class="number-percentage"
                                                                                                data-value="310"
                                                                                                data-animation-duration="3500">310</span>
                                                                                            +
                                                                                        </div>
                                                                                        <h3 class="funfact-title"> Classes
                                                                                            complete</h3>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-8e3f6a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="8e3f6a6" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-83fe981"
                                data-id="83fe981" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-037e712 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                                            data-id="037e712" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-30eb3dd"
                                                        data-id="30eb3dd" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-11ac7f8 elementor-widget elementor-widget-elementskit-heading"
                                                                    data-id="11ac7f8" data-element_type="widget"
                                                                    data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                    data-widget_type="elementskit-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con">
                                                                            <div
                                                                                class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                                                <h3
                                                                                    class="elementskit-section-subtitle  ">
                                                                                    #testimonial </h3>
                                                                                <h2
                                                                                    class="ekit-heading--title elementskit-section-title ">
                                                                                    What People are Saying About us </h2>
                                                                                <div class="ekit-heading__description">
                                                                                    <p>Choose the most powerful courses and
                                                                                        always be on demand.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-df59d10"
                                                        data-id="df59d10" data-element_type="column">
                                                        <div class="elementor-column-wrap">
                                                            <div class="elementor-widget-wrap"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        @foreach ($reviews as $object)
                                            <div class="elementor-element elementor-element-be68060 ts-testimonial-review elementor-widget elementor-widget-elementskit-testimonial"
                                                data-id="be68060" data-element_type="widget"
                                                data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                data-widget_type="elementskit-testimonial.default">
                                                
                                                <div class="elementor-widget-container">
                                                    <div class="ekit-wid-con">
                                                        <div class="elementskit-testimonial-slider ekit_testimonial_style_6 slick-slider arrow_inside "
                                                            data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:false,&quot;speed&quot;:6000,&quot;slidesPerGroup&quot;:1,&quot;slidesPerView&quot;:3,&quot;loop&quot;:false,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:1},&quot;1024&quot;:{&quot;slidesPerView&quot;:3,&quot;slidesPerGroup&quot;:1}}}">
                                                            <div
                                                                class="swiper-container swiper-container-initialized swiper-container-horizontal">
                                                                <div class="slick-list swiper-wrapper"
                                                                    style="transform: translate3d(0px, 0px, 0px);">
                                                                    <div class="swiper-slide swiper-slide-active"
                                                                        style="width: 380px;">
                                                                        <div class="slick-slide">
                                                                            <div
                                                                                class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-three elementor-repeater-item-9e02272">
                                                                                <div class="elementskit-commentor-bio ">
                                                                                    <div
                                                                                        class="elementkit-commentor-details">
                                                                                        <div
                                                                                            class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                            <img data-lazyloaded="1"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client1.png"
                                                                                                width="80"
                                                                                                height="80"
                                                                                                data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client1.png"
                                                                                                class="attachment-full size-full entered litespeed-loaded"
                                                                                                alt=""
                                                                                                data-ll-status="loaded">
                                                                                            <noscript>
                                                                                                <img width="80"
                                                                                                    height="80"
                                                                                                    src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client1.png"
                                                                                                    class="attachment-full size-full"
                                                                                                    alt="" />
                                                                                            </noscript>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementskit-profile-info">
                                                                                    <strong
                                                                                        class="elementskit-author-name">{{ $object->name }}
                                                                                    </strong>
                                                                                    <span
                                                                                        class="elementskit-author-des">{{ $object->position }}</span>
                                                                                </div>
                                                                                <div
                                                                                    class="elementskit-commentor-content">
                                                                                    <ul class="elementskit-stars">
                                                                                        <li>
                                                                                            <a>
                                                                                                <i
                                                                                                    class="eicon-star active"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a>
                                                                                                <i
                                                                                                    class="eicon-star active"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a>
                                                                                                <i
                                                                                                    class="eicon-star active"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a>
                                                                                                <i
                                                                                                    class="eicon-star active"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a>
                                                                                                <i
                                                                                                    class="eicon-star active"></i>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <p></p>
                                                                                    <h5>{{ $object->subject }}</h5>
                                                                                    {{ $object->description }} <p></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="swiper-slide swiper-slide-next"
                                                                    style="width: 380px;">
                                                                    <div class="slick-slide">
                                                                        <div
                                                                            class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-three elementor-repeater-item-7ac890b">
                                                                            <div class="elementskit-commentor-bio ">
                                                                                <div class="elementkit-commentor-details">
                                                                                    <div
                                                                                        class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client2.png"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client2.png"
                                                                                            class="attachment-full size-full entered litespeed-loaded"
                                                                                            alt=""
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img width="80"
                                                                                                height="80"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client2.png"
                                                                                                class="attachment-full size-full"
                                                                                                alt="" />
                                                                                        </noscript>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementskit-profile-info">
                                                                                <strong
                                                                                    class="elementskit-author-name">Lady
                                                                                    Gaga</strong>
                                                                                <span class="elementskit-author-des">Top
                                                                                    Singer, Music Industry</span>
                                                                            </div>
                                                                            <div class="elementskit-commentor-content">
                                                                                <ul class="elementskit-stars">
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                                <p></p>
                                                                                <h5>Ben Long is the best</h5> My children
                                                                                and I LOVE Turitor! The courses are
                                                                                fantastic and the instructors are so fun and
                                                                                knowledgeable. <p></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" style="width: 380px;">
                                                                    <div class="slick-slide">
                                                                        <div
                                                                            class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-three elementor-repeater-item-9c58b25">
                                                                            <div class="elementskit-commentor-bio ">
                                                                                <div class="elementkit-commentor-details">
                                                                                    <div
                                                                                        class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client1.png"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client1.png"
                                                                                            class="attachment-full size-full entered litespeed-loaded"
                                                                                            alt=""
                                                                                            data-ll-status="loaded">
                                                                                        <noscript>
                                                                                            <img width="80"
                                                                                                height="80"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client1.png"
                                                                                                class="attachment-full size-full"
                                                                                                alt="" />
                                                                                        </noscript>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementskit-profile-info">
                                                                                <strong
                                                                                    class="elementskit-author-name">Dawid
                                                                                    Malan</strong>
                                                                                <span class="elementskit-author-des">Lead
                                                                                    Data Scientist, Comfest</span>
                                                                            </div>
                                                                            <div class="elementskit-commentor-content">
                                                                                <ul class="elementskit-stars">
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                                <p></p>
                                                                                <h5>Turitor is a life saver</h5> I believe
                                                                                in lifelong learning and Udemy is a great
                                                                                place to learn from experts. I've learned a
                                                                                lot and recommend it to all my friends to
                                                                                learn from experts. <p></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" style="width: 380px;">
                                                                    <div class="slick-slide">
                                                                        <div
                                                                            class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-three elementor-repeater-item-5dde846">
                                                                            <div class="elementskit-commentor-bio ">
                                                                                <div class="elementkit-commentor-details">
                                                                                    <div
                                                                                        class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client2.png"
                                                                                            class="attachment-full size-full"
                                                                                            alt="">
                                                                                        <noscript>
                                                                                            <img width="80"
                                                                                                height="80"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client2.png"
                                                                                                class="attachment-full size-full"
                                                                                                alt="" />
                                                                                        </noscript>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementskit-profile-info">
                                                                                <strong
                                                                                    class="elementskit-author-name">Lady
                                                                                    Gaga</strong>
                                                                                <span class="elementskit-author-des">Top
                                                                                    Singer, Music Industry</span>
                                                                            </div>
                                                                            <div class="elementskit-commentor-content">
                                                                                <ul class="elementskit-stars">
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                                <p></p>
                                                                                <h5>Ben Long is the best</h5> My children
                                                                                and I LOVE Turitor! The courses are
                                                                                fantastic and the instructors are so fun and
                                                                                great place to learn from experts.that
                                                                                attracted me to Turitor <p></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" style="width: 380px;">
                                                                    <div class="slick-slide">
                                                                        <div
                                                                            class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-three elementor-repeater-item-aea2189">
                                                                            <div class="elementskit-commentor-bio ">
                                                                                <div class="elementkit-commentor-details">
                                                                                    <div
                                                                                        class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client3.png"
                                                                                            class="attachment-full size-full"
                                                                                            alt="">
                                                                                        <noscript>
                                                                                            <img width="80"
                                                                                                height="80"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client3.png"
                                                                                                class="attachment-full size-full"
                                                                                                alt="" />
                                                                                        </noscript>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementskit-profile-info">
                                                                                <strong
                                                                                    class="elementskit-author-name">Jessica
                                                                                    Williams</strong>
                                                                                <span
                                                                                    class="elementskit-author-des">Lecturer,
                                                                                    UN University</span>
                                                                            </div>
                                                                            <div class="elementskit-commentor-content">
                                                                                <ul class="elementskit-stars">
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                                <p></p>
                                                                                <h5>My children &amp; I LOVE Turitor</h5>
                                                                                One of the things was a curriculum developed
                                                                                by people that worked for some of the
                                                                                biggest &amp; most learn from experts. <p>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" style="width: 380px;">
                                                                    <div class="slick-slide">
                                                                        <div
                                                                            class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-three elementor-repeater-item-df1f4e6">
                                                                            <div class="elementskit-commentor-bio ">
                                                                                <div class="elementkit-commentor-details">
                                                                                    <div
                                                                                        class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                        <img data-lazyloaded="1"
                                                                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4MCIgaGVpZ2h0PSI4MCIgdmlld0JveD0iMCAwIDgwIDgwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+"
                                                                                            width="80"
                                                                                            height="80"
                                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client2.png"
                                                                                            class="attachment-full size-full"
                                                                                            alt="">
                                                                                        <noscript>
                                                                                            <img width="80"
                                                                                                height="80"
                                                                                                src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/client2.png"
                                                                                                class="attachment-full size-full"
                                                                                                alt="" />
                                                                                        </noscript>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementskit-profile-info">
                                                                                <strong
                                                                                    class="elementskit-author-name">Lady
                                                                                    Gaga</strong>
                                                                                <span class="elementskit-author-des">Top
                                                                                    Singer, Music Industry</span>
                                                                            </div>
                                                                            <div class="elementskit-commentor-content">
                                                                                <ul class="elementskit-stars">
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a>
                                                                                            <i
                                                                                                class="eicon-star active"></i>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                                <p></p>
                                                                                <h5>Ben Long is the best</h5> My children
                                                                                and I LOVE Turitor! The courses are
                                                                                fantastic and the instructors are so fun <p>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> --}}
                                                                </div>
                                                                <span class="swiper-notification" aria-live="assertive"
                                                                    aria-atomic="true"></span>
                                                            </div>
                                                            

                                                            <ul
                                                                class="slick-dots swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                                            </ul>
                                                            <button type="button"
                                                                class="slick-prev slick-arrow swiper-button-disabled"
                                                                tabindex="0" role="button"
                                                                aria-label="Previous slide" aria-disabled="true">
                                                                <i class="fas fa-chevron-left"></i>
                                                            </button>
                                                            <button type="button" class="slick-next slick-arrow"
                                                                tabindex="0" role="button" aria-label="Next slide"
                                                                aria-disabled="false">
                                                                <i class="fas fa-chevron-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </section>
                @endforeach
             
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-eaf6713 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="eaf6713" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-92c2a73"
                                data-id="92c2a73" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-77f63d1 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="77f63d1" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div
                                                        class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h2 class="ekit-heading--title elementskit-section-title "> Become
                                                            an Instructor </h2>
                                                        <div class="ekit-heading__description">
                                                            <p>We’ve got the solution: world-class training and development
                                                                programs developed by top universities and companies. All on
                                                                Turitor for Business We provide the tools and skills&nbsp;
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-47f396a elementor-widget elementor-widget-elementskit-button"
                                            data-id="47f396a" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-button.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-btn-wraper">
                                                        <a href="#" class="elementskit-btn  whitespace--normal">
                                                            <i aria-hidden="true" class="tsicon tsicon-plus_fill"></i>
                                                            start teaching today </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-49b5ac9"
                                data-id="49b5ac9" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-4126fe7 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="4126fe7" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div
                                                        class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h2 class="ekit-heading--title elementskit-section-title ">
                                                            Turitor for Business </h2>
                                                        <div class="ekit-heading__description">
                                                            <p>Get unlimited access to 4,000+ of Turitor’s top courses for
                                                                your team. Our quality curriculum is designed with top-tier
                                                                industry partners, not academics, so you learn the high.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-9ececb2 elementor-widget elementor-widget-elementskit-button"
                                            data-id="9ececb2" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-button.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div class="ekit-btn-wraper">
                                                        <a href="#" class="elementskit-btn  whitespace--normal">
                                                            <i aria-hidden="true" class="tsicon tsicon-plus_fill"></i>
                                                            get started </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-616bb7d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="616bb7d" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;ekit_section_parallax_multi&quot;:&quot;yes&quot;,&quot;ekit_section_parallax_multi_items&quot;:[{&quot;parallax_style&quot;:&quot;mousemove&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/demo.themewinter.com\/wp\/turitors\/tutor-classic\/{{ url('design/front/wp-content') }}\/uploads\/sites\/6\/2020\/02\/pattern1.png&quot;,&quot;id&quot;:1302},&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;parallax_blur_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;parallax_blur_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;parallax_blur_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:87,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:40,&quot;parallax_transform&quot;:null,&quot;parallax_transform_value&quot;:null,&quot;smoothness&quot;:null,&quot;offsettop&quot;:null,&quot;offsetbottom&quot;:null,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null,&quot;zindex&quot;:&quot;2&quot;,&quot;_id&quot;:&quot;048d00d&quot;},{&quot;parallax_style&quot;:&quot;mousemove&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/demo.themewinter.com\/wp\/turitors\/tutor-classic\/{{ url('design/front/wp-content') }}\/uploads\/sites\/6\/2020\/02\/pattern2.png&quot;,&quot;id&quot;:1304},&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;parallax_blur_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;parallax_blur_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;parallax_blur_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:69,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:40,&quot;parallax_transform&quot;:null,&quot;parallax_transform_value&quot;:null,&quot;smoothness&quot;:null,&quot;offsettop&quot;:null,&quot;offsetbottom&quot;:null,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null,&quot;zindex&quot;:0,&quot;_id&quot;:&quot;32824bf&quot;}]}">
                    <div
                        class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-32824bf ekit-section-parallax-type-mousemove">
                        <img class="elementskit-parallax-graphic "
                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/pattern2.png">
                    </div>
                    <div
                        class="ekit-section-parallax-mousemove ekit-section-parallax-layer elementor-repeater-item-048d00d ekit-section-parallax-type-mousemove">
                        <img class="elementskit-parallax-graphic "
                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/pattern1.png">
                    </div>
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-541404f"
                                data-id="541404f" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <section
                                            class="elementor-section elementor-inner-section elementor-element elementor-element-777ea10 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                                            data-id="777ea10" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4616eba"
                                                        data-id="4616eba" data-element_type="column">
                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-40dfdcc elementor-widget elementor-widget-elementskit-heading"
                                                                    data-id="40dfdcc" data-element_type="widget"
                                                                    data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                    data-widget_type="elementskit-heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con">
                                                                            <div
                                                                                class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                                                <h3
                                                                                    class="elementskit-section-subtitle  ">
                                                                                    # Popular Articles </h3>
                                                                                <h2
                                                                                    class="ekit-heading--title elementskit-section-title ">
                                                                                    From the Newsroom </h2>
                                                                                <div class="ekit-heading__description">
                                                                                    <p>Choose the most powerful courses and
                                                                                        always be on demand.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-8cdfd4d elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="8cdfd4d" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2204108"
                                data-id="2204108" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-a762c74 elementor-widget elementor-widget-elementskit-blog-posts"
                                            data-id="a762c74" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-blog-posts.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div id="post-items--a762c74" class="row post-items">
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="elementskit-post-image-card">
                                                                <div class="elementskit-entry-header">
                                                                    <a href="learn-by-doing-with-real-world-projects-done/index.html"
                                                                        class="elementskit-entry-thumb">
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image3.jpg"
                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image3.jpg"
                                                                            alt="Learn by doing with Real World Projects"
                                                                            data-ll-status="loaded"
                                                                            class="entered litespeed-loaded">
                                                                        <noscript>
                                                                            <img src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image3.jpg"
                                                                                alt="Learn by doing with Real World Projects">
                                                                        </noscript>
                                                                    </a>
                                                                    <!-- .elementskit-entry-thumb END -->
                                                                </div>
                                                                <!-- .elementskit-entry-header END -->
                                                                <div class="elementskit-post-body ">
                                                                    <div class="post-meta-list">
                                                                        <span class="meta-date">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-circle"></i>
                                                                            <span class="meta-date-text"> February 13,
                                                                                2020 </span>
                                                                        </span>
                                                                        <span class="post-cat">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-circle"></i>
                                                                            <a href="category/marketing/index.html"
                                                                                rel="category tag">Marketing</a>
                                                                        </span>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a
                                                                            href="learn-by-doing-with-real-world-projects-done/index.html">
                                                                            Learn by doing with Real World Projects </a>
                                                                    </h2>
                                                                    <div class="btn-wraper">
                                                                        <a href="learn-by-doing-with-real-world-projects-done/index.html"
                                                                            class="elementskit-btn  whitespace--normal">
                                                                            <i aria-hidden="true"
                                                                                class="tsicon tsicon-ts-plus1"></i> Read
                                                                            More </a>
                                                                    </div>
                                                                </div>
                                                                <!-- .elementskit-post-body END -->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="elementskit-post-image-card">
                                                                <div class="elementskit-entry-header">
                                                                    <a href="find-the-right-learning-path-for-your-group/index.html"
                                                                        class="elementskit-entry-thumb">
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image1.jpg"
                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image1.jpg"
                                                                            alt="Find the Right Learning Path for your Group"
                                                                            data-ll-status="loaded"
                                                                            class="entered litespeed-loaded">
                                                                        <noscript>
                                                                            <img src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image1.jpg"
                                                                                alt="Find the Right Learning Path for your Group">
                                                                        </noscript>
                                                                    </a>
                                                                    <!-- .elementskit-entry-thumb END -->
                                                                </div>
                                                                <!-- .elementskit-entry-header END -->
                                                                <div class="elementskit-post-body ">
                                                                    <div class="post-meta-list">
                                                                        <span class="meta-date">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-circle"></i>
                                                                            <span class="meta-date-text"> February 13,
                                                                                2020 </span>
                                                                        </span>
                                                                        <span class="post-cat">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-circle"></i>
                                                                            <a href="category/english/index.html"
                                                                                rel="category tag">English</a>
                                                                        </span>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a
                                                                            href="find-the-right-learning-path-for-your-group/index.html">
                                                                            Find the Right Learning Path for your Group </a>
                                                                    </h2>
                                                                    <div class="btn-wraper">
                                                                        <a href="find-the-right-learning-path-for-your-group/index.html"
                                                                            class="elementskit-btn  whitespace--normal">
                                                                            <i aria-hidden="true"
                                                                                class="tsicon tsicon-ts-plus1"></i> Read
                                                                            More </a>
                                                                    </div>
                                                                </div>
                                                                <!-- .elementskit-post-body END -->
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="elementskit-post-image-card">
                                                                <div class="elementskit-entry-header">
                                                                    <a href="strategic-social-media-marketing-policy/index.html"
                                                                        class="elementskit-entry-thumb">
                                                                        <img data-lazyloaded="1"
                                                                            src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image2.jpg"
                                                                            data-src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image2.jpg"
                                                                            alt="Strategic Social Media &amp; Marketing Policy"
                                                                            data-ll-status="loaded"
                                                                            class="entered litespeed-loaded">
                                                                        <noscript>
                                                                            <img src="{{ url('design/front/wp-content') }}/uploads/sites/6/2020/02/blog_image2.jpg"
                                                                                alt="Strategic Social Media &#038; Marketing Policy">
                                                                        </noscript>
                                                                    </a>
                                                                    <!-- .elementskit-entry-thumb END -->
                                                                </div>
                                                                <!-- .elementskit-entry-header END -->
                                                                <div class="elementskit-post-body ">
                                                                    <div class="post-meta-list">
                                                                        <span class="meta-date">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-circle"></i>
                                                                            <span class="meta-date-text"> February 12,
                                                                                2020 </span>
                                                                        </span>
                                                                        <span class="post-cat">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-circle"></i>
                                                                            <a href="category/arts-gallery/index.html"
                                                                                rel="category tag">Arts &amp; Gallery</a>
                                                                        </span>
                                                                    </div>
                                                                    <h2 class="entry-title">
                                                                        <a
                                                                            href="strategic-social-media-marketing-policy/index.html">
                                                                            Strategic Social Media &amp; Marketing Policy
                                                                        </a>
                                                                    </h2>
                                                                    <div class="btn-wraper">
                                                                        <a href="strategic-social-media-marketing-policy/index.html"
                                                                            class="elementskit-btn  whitespace--normal">
                                                                            <i aria-hidden="true"
                                                                                class="tsicon tsicon-ts-plus1"></i> Read
                                                                            More </a>
                                                                    </div>
                                                                </div>
                                                                <!-- .elementskit-post-body END -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-4ec3749 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                    data-id="4ec3749" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-41353a2"
                                data-id="41353a2" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-b3248b7 elementor-widget elementor-widget-elementskit-heading"
                                            data-id="b3248b7" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="elementskit-heading.default">
                                            <div class="elementor-widget-container">
                                                <div class="ekit-wid-con">
                                                    <div
                                                        class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-">
                                                        <h3 class="elementskit-section-subtitle  "> #newsletter </h3>
                                                        <h2 class="ekit-heading--title elementskit-section-title ">
                                                            Turitor’s Purpose is to Transform Access to Education. </h2>
                                                        <div class="ekit-heading__description">
                                                            <p>Choose the most powerful courses and always be on demand.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-85ff0ce"
                                data-id="85ff0ce" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-95cecd4 elementor-widget elementor-widget-heading"
                                            data-id="95cecd4" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Never miss a
                                                    course.</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-04d3a02 elementor-widget elementor-widget-metform"
                                            data-id="04d3a02" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="metform.default">
                                            <div class="elementor-widget-container">
                                                <div id="mf-response-props-id-356" data-previous-steps-style=""
                                                    data-editswitchopen="" data-response_type="alert"
                                                    data-erroricon="fas fa-exclamation-triangle"
                                                    data-successicon="fas fa-check" data-messageposition="top"
                                                    class="   mf-scroll-top-no">
                                                    <div class="formpicker_warper formpicker_warper_editable"
                                                        data-metform-formpicker-key="356">
                                                        <div class="elementor-widget-container">
                                                            <div id="metform-wrap-04d3a02-356" class="mf-form-wrapper"
                                                                data-form-id="356"
                                                                data-action="wp-json/metform/v1/entries/insert/356.json"
                                                                data-wp-nonce="a0642349f0" data-form-nonce="78f52a0a4e"
                                                                data-save-progress="false" data-stop-vertical-effect="">
                                                                <form class="metform-form-content">
                                                                    <div class="mf-main-response-wrap   mf-response-msg-wrap"
                                                                        data-show="0">
                                                                        <div class="mf-response-msg">
                                                                            <i class="mf-success-icon fas fa-check"></i>
                                                                            <p></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="metform-form-main-wrapper">
                                                                        <div data-elementor-type="wp-post"
                                                                            data-elementor-id="356"
                                                                            class="elementor elementor-356">
                                                                            <div class="elementor-inner">
                                                                                <div class="elementor-section-wrap">
                                                                                    <section
                                                                                        class="elementor-section elementor-top-section elementor-element elementor-element-5903207 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementskit-parallax-multi-container"
                                                                                        data-id="5903207"
                                                                                        data-element_type="section">
                                                                                        <div
                                                                                            class="elementor-container elementor-column-gap-default">
                                                                                            <div class="elementor-row">
                                                                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-66a1a42"
                                                                                                    data-id="66a1a42"
                                                                                                    data-element_type="column">
                                                                                                    <div
                                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap">
                                                                                                            <div class="elementor-element elementor-element-a6957d6 elementor-widget elementor-widget-mf-email"
                                                                                                                data-id="a6957d6"
                                                                                                                data-element_type="widget"
                                                                                                                data-settings="{&quot;mf_input_name&quot;:&quot;mf-email&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                                                                data-widget_type="mf-email.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div
                                                                                                                        class="mf-input-wrapper">
                                                                                                                        <input
                                                                                                                            type="email"
                                                                                                                            class="mf-input "
                                                                                                                            id="mf-input-email-a6957d6"
                                                                                                                            name="mf-email"
                                                                                                                            placeholder="Your Email "
                                                                                                                            aria-invalid="false"
                                                                                                                            value="">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-481148e"
                                                                                                    data-id="481148e"
                                                                                                    data-element_type="column">
                                                                                                    <div
                                                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                                                        <div
                                                                                                            class="elementor-widget-wrap">
                                                                                                            <div class="elementor-element elementor-element-afc6856 mf-btn--left elementor-widget elementor-widget-mf-button"
                                                                                                                data-id="afc6856"
                                                                                                                data-element_type="widget"
                                                                                                                data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                                                                                                data-widget_type="mf-button.default">
                                                                                                                <div
                                                                                                                    class="elementor-widget-container">
                                                                                                                    <div class="mf-btn-wraper "
                                                                                                                        data-mf-form-conditional-logic-requirement="">
                                                                                                                        <button
                                                                                                                            type="submit"
                                                                                                                            class="metform-btn metform-submit-btn "
                                                                                                                            id="">
                                                                                                                            <i aria-hidden="true"
                                                                                                                                class="fas fa-bell"></i>
                                                                                                                            <span>Subscribe
                                                                                                                            </span>
                                                                                                                        </button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </section>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7a0b91d elementor-widget elementor-widget-text-editor"
                                            data-id="7a0b91d" data-element_type="widget"
                                            data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p>No spam. Unsubscribe at any time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function exportTasks(_this) {
            let _url = $(_this).data('href');
            window.location.href = _url;
        }
    </script>
@endsection
