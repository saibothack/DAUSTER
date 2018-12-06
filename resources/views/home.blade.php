@extends('layouts.app')

@section('content')

<div aria-controls="g-offcanvas" aria-expanded="false" class="g-offcanvas-hide g-offcanvas-toggle" data-offcanvas-toggle="">
    <i class="fa fa-fw fa-bars">
    </i>
</div>
<section id="g-top">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100 nomarginall nopaddingall">
                <div class="g-system-messages">
                </div>
            </div>
        </div>
    </div>
</section>
<header id="g-header">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100 center hidden-phone">
                <div class="g-content g-particle" id="swiper-7340-particle">
                    <div class="">
                        <div class="g-swiper">
                            <div class="swiper-container g-vertical-slides g-vertical-slides-swiper-1" style="height: 600px;">
                                @if(Session::has('flash_message'))
                                    <div class="container">
                                        <div class="alert alert-success"><em> {!! session('flash_message') !!}</em>
                                        </div>
                                    </div>
                                @endif

                                <div class="row">
                                    <div class="col-md-10 col-md-offset-2">
                                        @include ('errors.list') {{-- Including error file --}}
                                    </div>
                                </div>

                                <br>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Kraken
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Versatile
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Stylistic
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination g-vertical-slides-pagination g-vertical-slides-pagination-swiper-1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        new Swiper('.g-horizontal-slides-swiper-1', {
                               pagination: '.g-horizontal-slides-pagination-swiper-1',
                               paginationClickable: true,   
                               loop: true
                           });
                           new Swiper('.g-vertical-slides-swiper-1', {
                               pagination: '.g-vertical-slides-pagination-swiper-1',
                               paginationClickable: true,
                               direction: 'vertical',       
                               loop: true
                           });
                           new Swiper('.g-carousel-swiper-1', {
                               pagination: '.g-carousel-pagination-swiper-1',
                               paginationClickable: true,
                               slidesPerView: 2,     
                               spaceBetween: 30,
                               nextButton: '.g-carousel-button-next-swiper-1',
                               prevButton: '.g-carousel-button-prev-swiper-1',              
                               loop: true
                           });
                    </script>
                </div>
            </div>
        </div>
        <div class="g-grid">
            <div class="g-block size-100 hidden-phone">
                <div class="g-content g-particle" id="swiper-1655-particle">
                    <div class="">
                        <div class="g-swiper">
                            <div class="swiper-container g-carousel g-carousel-swiper-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Layout
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Infinite Layout Possibilities
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Style
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Configurable Preset Styles
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Menu
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Advanced Menu Editor
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Mobile
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Responsive Layout Support
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Particles
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Simple Content Creation
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Docs
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Extensive Guides Available
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next g-carousel-button-next g-carousel-button-next-swiper-2">
                                    <i class="fa fa-2x fa-arrow-circle-right">
                                    </i>
                                </div>
                                <div class="swiper-button-prev g-carousel-button-prev g-carousel-button-prev-swiper-2">
                                    <i class="fa fa-2x fa-arrow-circle-left">
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        new Swiper('.g-horizontal-slides-swiper-2', {
                               pagination: '.g-horizontal-slides-pagination-swiper-2',
                               paginationClickable: true,   
                               loop: true
                           });
                           new Swiper('.g-vertical-slides-swiper-2', {
                               pagination: '.g-vertical-slides-pagination-swiper-2',
                               paginationClickable: true,
                               direction: 'vertical',       
                               loop: true
                           });
                           new Swiper('.g-carousel-swiper-2', {
                               pagination: '.g-carousel-pagination-swiper-2',
                               paginationClickable: true,
                               slidesPerView: 3,     
                               spaceBetween: 30,
                               nextButton: '.g-carousel-button-next-swiper-2',
                               prevButton: '.g-carousel-button-prev-swiper-2',              
                               loop: true
                           });
                    </script>
                </div>
            </div>
        </div>
        <div class="g-grid">
            <div class="g-block size-100 center visible-phone">
                <div class="g-content g-particle" id="swiper-8656-particle">
                    <div class="">
                        <div class="g-swiper">
                            <div class="swiper-container g-vertical-slides g-vertical-slides-swiper-1b" style="height: 300px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Kraken
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Versatile
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Stylistic
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination g-vertical-slides-pagination g-vertical-slides-pagination-swiper-1b">
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        new Swiper('.g-horizontal-slides-swiper-1b', {
                               pagination: '.g-horizontal-slides-pagination-swiper-1b',
                               paginationClickable: true,   
                               loop: true
                           });
                           new Swiper('.g-vertical-slides-swiper-1b', {
                               pagination: '.g-vertical-slides-pagination-swiper-1b',
                               paginationClickable: true,
                               direction: 'vertical',       
                               loop: true
                           });
                           new Swiper('.g-carousel-swiper-1b', {
                               pagination: '.g-carousel-pagination-swiper-1b',
                               paginationClickable: true,
                               slidesPerView: 2,     
                               spaceBetween: 30,
                               nextButton: '.g-carousel-button-next-swiper-1b',
                               prevButton: '.g-carousel-button-prev-swiper-1b',             
                               loop: true
                           });
                    </script>
                </div>
            </div>
        </div>
        <div class="g-grid">
            <div class="g-block size-100 visible-phone">
                <div class="g-content g-particle" id="swiper-8843-particle">
                    <div class="">
                        <div class="g-swiper">
                            <div class="swiper-container g-carousel g-carousel-swiper-2b">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Layout
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Infinite Layout Possibilities
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Style
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Configurable Preset Styles
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Menu
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Advanced Menu Editor
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Mobile
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Responsive Layout Support
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Particles
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Simple Content Creation
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-subtitle">
                                                    Docs
                                                </div>
                                                <div class="g-swiper-slide-content-title">
                                                    Extensive Guides Available
                                                </div>
                                                <a class="g-swiper-slide-content-link button" href="#">
                                                    <span class="hidden-tablet">
                                                        Learn
                                                    </span>
                                                    More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next g-carousel-button-next g-carousel-button-next-swiper-2b">
                                    <i class="fa fa-2x fa-arrow-circle-right">
                                    </i>
                                </div>
                                <div class="swiper-button-prev g-carousel-button-prev g-carousel-button-prev-swiper-2b">
                                    <i class="fa fa-2x fa-arrow-circle-left">
                                    </i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        new Swiper('.g-horizontal-slides-swiper-2b', {
                               pagination: '.g-horizontal-slides-pagination-swiper-2b',
                               paginationClickable: true,   
                               loop: true
                           });
                           new Swiper('.g-vertical-slides-swiper-2b', {
                               pagination: '.g-vertical-slides-pagination-swiper-2b',
                               paginationClickable: true,
                               direction: 'vertical',       
                               loop: true
                           });
                           new Swiper('.g-carousel-swiper-2b', {
                               pagination: '.g-carousel-pagination-swiper-2b',
                               paginationClickable: true,
                               slidesPerView: 1,     
                               spaceBetween: 30,
                               nextButton: '.g-carousel-button-next-swiper-2b',
                               prevButton: '.g-carousel-button-prev-swiper-2b',             
                               loop: true
                           });
                    </script>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="g-showcase">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100 g-title-promo">
                <div class="g-content g-particle" id="gridstatistic-4655-particle">
                    <div class="">
                        <h2 class="g-title">
                            Today's Summary
                        </h2>
                        <div class="g-gridstatistic">
                            <div class="g-gridstatistic-wrapper g-gridstatistic-4cols">
                                <div class="g-gridstatistic-item">
                                    <div class="g-gridstatistic-item-wrapper">
                                        <div class="g-gridstatistic-item-icon">
                                            <span class="fa fa-comments fa-fw fa-2x">
                                            </span>
                                        </div>
                                        <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="1000">
                                        </div>
                                        <div class="g-gridstatistic-item-text2">
                                            Discussions
                                        </div>
                                    </div>
                                </div>
                                <div class="g-gridstatistic-item">
                                    <div class="g-gridstatistic-item-wrapper">
                                        <div class="g-gridstatistic-item-icon">
                                            <span class="fa fa-file-text fa-fw fa-2x">
                                            </span>
                                        </div>
                                        <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="250">
                                        </div>
                                        <div class="g-gridstatistic-item-text2">
                                            Stories
                                        </div>
                                    </div>
                                </div>
                                <div class="g-gridstatistic-item">
                                    <div class="g-gridstatistic-item-wrapper">
                                        <div class="g-gridstatistic-item-icon">
                                            <span class="fa fa-group fa-fw fa-2x">
                                            </span>
                                        </div>
                                        <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="130">
                                        </div>
                                        <div class="g-gridstatistic-item-text2">
                                            Authors
                                        </div>
                                    </div>
                                </div>
                                <div class="g-gridstatistic-item">
                                    <div class="g-gridstatistic-item-wrapper">
                                        <div class="g-gridstatistic-item-icon">
                                            <span class="fa fa-camera-retro fa-fw fa-2x">
                                            </span>
                                        </div>
                                        <div class="g-gridstatistic-item-text1 odometer" data-odometer-value="34">
                                        </div>
                                        <div class="g-gridstatistic-item-text2">
                                            Photos
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
<section id="g-above">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100 g-title-promo">
                <div class="g-content g-particle" id="gridcontent-8730-particle">
                    <div class="">
                        <h2 class="g-title">
                            Trending Now
                        </h2>
                        <div class="g-gridcontent">
                            <div class="g-gridcontent-wrapper g-gridcontent-2cols">
                                <div class="g-gridcontent-item">
                                    <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-1">
                                        <div class="g-gridcontent-item-img">
                                        </div>
                                        <div class="g-gridcontent-item-content">
                                            <span class="g-gridcontent-item-text1">
                                                Stylistic
                                            </span>
                                            <span class="g-gridcontent-item-text2">
                                                Exclusive Design with Fashion
                                            </span>
                                            <a class="button button-4" href="#">
                                                Read Story
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="g-gridcontent-item">
                                    <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-2">
                                        <div class="g-gridcontent-item-img">
                                        </div>
                                        <div class="g-gridcontent-item-content">
                                            <span class="g-gridcontent-item-text1">
                                                Versatile
                                            </span>
                                            <span class="g-gridcontent-item-text2">
                                                Resourceful All-Around Theme
                                            </span>
                                            <a class="button button-4" href="#">
                                                Read Story
                                            </a>
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
<section id="g-utility">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100">
                <div class="g-content g-particle" id="custom-6780-particle">
                    <div class="g-title-promo center">
                        <h2 class="g-title">
                            From the Blog
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="g-wrapper" id="g-container-5071">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-60">
                <section id="g-mainbar">
                    <div class="g-grid">
                        <div class="g-block size-100 nomarginbottom nopaddingbottom">
                            <div class="g-content g-particle" id="gridcontent-5560-particle">
                                <div class="">
                                    <div class="g-gridcontent">
                                        <div class="g-gridcontent-wrapper g-gridcontent-1cols">
                                            <div class="g-gridcontent-item">
                                                <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-3">
                                                    <div class="g-gridcontent-item-img">
                                                        <img alt="" src="/web/templates/rt_kraken/images/demo/home/mainbar/img01.jpg?5b90d7c0">
                                                        </img>
                                                    </div>
                                                    <div class="g-gridcontent-item-content">
                                                        <span class="g-gridcontent-item-text1">
                                                            Photo
                                                        </span>
                                                        <span class="g-gridcontent-item-text2">
                                                            The new and powerful Gantry 5 framework
                                                        </span>
                                                        <div class="g-gridcontent-item-desc">
                                                            Gantry 5 is an advanced, versatile and multi-platform template framework, perfectly designed for the modern web.
                                                        </div>
                                                        <a class="button arrow" href="#">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g-gridcontent-item">
                                                <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-3">
                                                    <div class="g-gridcontent-item-img">
                                                        <img alt="" src="/web/templates/rt_kraken/images/demo/home/mainbar/img01.jpg?5b90d7c0">
                                                        </img>
                                                    </div>
                                                    <div class="g-gridcontent-item-content">
                                                        <span class="g-gridcontent-item-text1">
                                                            News
                                                        </span>
                                                        <span class="g-gridcontent-item-text2">
                                                            A built-in and versatile dropdown menu system
                                                        </span>
                                                        <div class="g-gridcontent-item-desc">
                                                            Gantry 5 benefits from an integrated menu system, with intuitive mobile support, and extensive controls.
                                                        </div>
                                                        <a class="button arrow" href="#">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g-gridcontent-item">
                                                <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-3">
                                                    <div class="g-gridcontent-item-img">
                                                        <img alt="" src="/web/templates/rt_kraken/images/demo/home/mainbar/img01.jpg?5b90d7c0">
                                                        </img>
                                                    </div>
                                                    <div class="g-gridcontent-item-content">
                                                        <span class="g-gridcontent-item-text1">
                                                            Creation
                                                        </span>
                                                        <span class="g-gridcontent-item-text2">
                                                            Layout manager with drag and drop functionality
                                                        </span>
                                                        <div class="g-gridcontent-item-desc">
                                                            Gantry 5's layout manager utilizes a drag and drop interface, providing an easy mechanism for modifying positions.
                                                        </div>
                                                        <a class="button arrow" href="#">
                                                        </a>
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
            <div class="g-block size-40">
                <aside id="g-aside">
                    <div class="g-grid">
                        <div class="g-block size-100 g-title-bordered center nomargintop nomarginbottom nopaddingtop nopaddingbottom">
                            <div class="g-content g-particle" id="iconmenu-5907-particle">
                                <div class="">
                                    <h2 class="g-title">
                                        Compatibility
                                    </h2>
                                    <div class="g-iconmenu">
                                        <a class="g-iconmenu-item" href="#" target="_blank" title="Firefox">
                                            <span class="g-iconmenu-icon fa fa-firefox fa-fw fa-2x">
                                            </span>
                                            <span class="g-iconmenu-text">
                                                Firefox
                                            </span>
                                            <span class="g-iconmenu-subtext">
                                                v. 40+
                                            </span>
                                        </a>
                                        <a class="g-iconmenu-item" href="#" target="_blank" title="Chrome">
                                            <span class="g-iconmenu-icon fa fa-chrome fa-fw fa-2x">
                                            </span>
                                            <span class="g-iconmenu-text">
                                                Chrome
                                            </span>
                                            <span class="g-iconmenu-subtext">
                                                v. 45+
                                            </span>
                                        </a>
                                        <a class="g-iconmenu-item" href="#" target="_blank" title="Safari">
                                            <span class="g-iconmenu-icon fa fa-safari fa-fw fa-2x">
                                            </span>
                                            <span class="g-iconmenu-text">
                                                Safari
                                            </span>
                                            <span class="g-iconmenu-subtext">
                                                v. 7+
                                            </span>
                                        </a>
                                        <a class="g-iconmenu-item" href="#" target="_blank" title="IE">
                                            <span class="g-iconmenu-icon fa fa-internet-explorer fa-fw fa-2x">
                                            </span>
                                            <span class="g-iconmenu-text">
                                                IE
                                            </span>
                                            <span class="g-iconmenu-subtext">
                                                v. 10+
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-grid">
                        <div class="g-block size-100 g-title-bordered center nomargintop nomarginbottom nopaddingtop nopaddingbottom">
                            <div class="g-content g-particle" id="gridcontent-9944-particle">
                                <div class="">
                                    <h2 class="g-title">
                                        Must Read
                                    </h2>
                                    <div class="g-gridcontent">
                                        <div class="g-gridcontent-wrapper g-gridcontent-1cols">
                                            <div class="g-gridcontent-item">
                                                <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-4">
                                                    <div class="g-gridcontent-item-img">
                                                    </div>
                                                    <div class="g-gridcontent-item-content">
                                                        <span class="g-gridcontent-item-text2">
                                                            <span>
                                                                Contemporary Interface
                                                                <span class="hidden-tablet">
                                                                    provides Multiple Options for Users
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <div class="g-gridcontent-item-desc">
                                                            Gantry 5's administrative interface has been completely rebuilt from the ground up to meet the needs of tomorrow's developer, todays.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g-gridcontent-item">
                                                <div class="g-gridcontent-item-wrapper g-gridcontent-title-style-4">
                                                    <div class="g-gridcontent-item-img">
                                                    </div>
                                                    <div class="g-gridcontent-item-content">
                                                        <span class="g-gridcontent-item-text2">
                                                            <span>
                                                                Mobile Friendly
                                                                <span class="hidden-tablet">
                                                                    Experience made possible with Responsive Layout
                                                                </span>
                                                            </span>
                                                        </span>
                                                        <div class="g-gridcontent-item-desc">
                                                            Kraken is built with a responsive layout, which means it will expand and contract accordingly to the size and resolution of any screen.
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
                    <div class="g-grid">
                        <div class="g-block size-100 g-title-bordered title-center nomargintop nomarginbottom nopaddingtop nopaddingbottom">
                            <div class="g-content g-particle" id="blockcontent-5985-particle">
                                <div class="">
                                    <div class="g-blockcontent">
                                        <h2 class="g-title">
                                            Past Week
                                        </h2>
                                        <div class="g-grid g-blockcontent-subcontent">
                                            <div class="g-block ">
                                                <div class="g-content">
                                                    <a data-rokbox="" data-rokbox-caption="Style Panel" href="/web/templates/rt_kraken/images/demo/home/aside/img01.jpg?5b90d7c0">
                                                        <img alt='<span class="hidden-tablet">Customize from the </span>Styles Panel' class="g-blockcontent-subcontent-img" src="/web/templates/rt_kraken/images/demo/home/aside/img01.jpg?5b90d7c0"/>
                                                    </a>
                                                    <h4 class="g-blockcontent-subcontent-title">
                                                        Customize from the Styles Panel
                                                    </h4>
                                                    <div class="g-blockcontent-subcontent-desc">
                                                        <span>
                                                            Style elements of the Kraken theme
                                                            <span class="hidden-tablet">
                                                                , such as links, font or background colors.
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="g-block ">
                                                <div class="g-content">
                                                    <a data-rokbox="" data-rokbox-caption="Offcanvas Section" href="/web/templates/rt_kraken/images/demo/home/aside/img01.jpg?5b90d7c0">
                                                        <img alt='Offcanvas Section<span class="hidden-tablet"> for extra content</span>' class="g-blockcontent-subcontent-img" src="/web/templates/rt_kraken/images/demo/home/aside/img01.jpg?5b90d7c0"/>
                                                    </a>
                                                    <h4 class="g-blockcontent-subcontent-title">
                                                        Offcanvas section for extra content
                                                    </h4>
                                                    <div class="g-blockcontent-subcontent-desc">
                                                        <span>
                                                            Content placed in the Offcanvas section
                                                            <span class="hidden-tablet">
                                                                will appear outside of the main viewport.
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="g-grid">
                        <div class="g-block size-100 g-title-bordered title-center nomargintop nomarginbottom nopaddingtop nopaddingbottom">
                            <div class="g-content g-particle" id="swiper-6995-particle">
                                <div class="g-swiper-stories">
                                    <h2 class="g-title">
                                        Trending
                                    </h2>
                                    <div class="g-swiper">
                                        <div class="swiper-container g-horizontal-slides g-horizontal-slides-swiper-3" style="height: auto;">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="swiper-slide-content">
                                                        <div class="swiper-slide-content-image">
                                                            <img alt="Particles System" src="/web/templates/rt_kraken/images/demo/home/aside/img03.jpg?5b90d7c0">
                                                            </img>
                                                        </div>
                                                        <div class="swiper-slide-content-text">
                                                            <div class="g-swiper-slide-content-title">
                                                                Particles System
                                                            </div>
                                                            <div class="g-swiper-slide-content-desc">
                                                                Gantry 5's Particles system makes it easy to configure content blocks.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="swiper-slide-content">
                                                        <div class="swiper-slide-content-image">
                                                            <img alt="Twig Templating" src="/web/">
                                                            </img>
                                                        </div>
                                                        <div class="swiper-slide-content-text">
                                                            <div class="g-swiper-slide-content-title">
                                                                Twig Templating
                                                            </div>
                                                            <div class="g-swiper-slide-content-desc">
                                                                Gantry 5 utilizes Twig - a flexible, fast, and secure template engine for PHP.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="swiper-slide-content">
                                                        <div class="swiper-slide-content-image">
                                                            <img alt="YAML Configuration" src="/web/">
                                                            </img>
                                                        </div>
                                                        <div class="swiper-slide-content-text">
                                                            <div class="g-swiper-slide-content-title">
                                                                YAML Configuration
                                                            </div>
                                                            <div class="g-swiper-slide-content-desc">
                                                                YAML makes it easy to create blueprints for back-end configuration options.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination g-horizontal-slides-pagination g-horizontal-slides-pagination-swiper-3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    new Swiper('.g-horizontal-slides-swiper-3', {
                                        pagination: '.g-horizontal-slides-pagination-swiper-3',
                                        paginationClickable: true,   
                                        loop: true
                                    });
                                    new Swiper('.g-vertical-slides-swiper-3', {
                                        pagination: '.g-vertical-slides-pagination-swiper-3',
                                        paginationClickable: true,
                                        direction: 'vertical',       
                                        loop: true
                                    });
                                    new Swiper('.g-carousel-swiper-3', {
                                        pagination: '.g-carousel-pagination-swiper-3',
                                        paginationClickable: true,
                                        slidesPerView: 2,    
                                        spaceBetween: 30,
                                        nextButton: '.g-carousel-button-next-swiper-3',
                                        prevButton: '.g-carousel-button-prev-swiper-3',             
                                        loop: true
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<section id="g-expanded">
    <div class="g-container">
        <div class="g-grid">
            <div class="g-block size-100 nomargintop nopaddingtop">
                <div class="g-content g-particle" id="swiper-8309-particle">
                    <div class="g-swiper-testimonial">
                        <div class="g-swiper">
                            <div class="swiper-container g-horizontal-slides g-horizontal-slides-swiper-4" style="height: 300px;">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Kraken is worth its weight in gold, just fantastic!
                                                </div>
                                                <div class="g-swiper-slide-content-desc">
                                                    - Alex Simon, Think Kraken Co.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Extraordinary. Kraken is by far my favorite theme.
                                                </div>
                                                <div class="g-swiper-slide-content-desc">
                                                    - John Young, Buy Kraken LLC
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide-content">
                                            <div class="swiper-slide-content-text">
                                                <div class="g-swiper-slide-content-title">
                                                    Kraken cannot be ignored, it is a design for the ages!
                                                </div>
                                                <div class="g-swiper-slide-content-desc">
                                                    - Derek Abels, Love Kraken Inc.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination g-horizontal-slides-pagination g-horizontal-slides-pagination-swiper-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        new Swiper('.g-horizontal-slides-swiper-4', {
                               pagination: '.g-horizontal-slides-pagination-swiper-4',
                               paginationClickable: true,   
                               loop: true
                           });
                           new Swiper('.g-vertical-slides-swiper-4', {
                               pagination: '.g-vertical-slides-pagination-swiper-4',
                               paginationClickable: true,
                               direction: 'vertical',       
                               loop: true
                           });
                           new Swiper('.g-carousel-swiper-4', {
                               pagination: '.g-carousel-pagination-swiper-4',
                               paginationClickable: true,
                               slidesPerView: 2,     
                               spaceBetween: 30,
                               nextButton: '.g-carousel-button-next-swiper-4',
                               prevButton: '.g-carousel-button-prev-swiper-4',              
                               loop: true
                           });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
