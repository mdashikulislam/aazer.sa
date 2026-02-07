
<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if(app()->getLocale() == 'ar') dir="rtl" @endif>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ __('messages.education_consultancy') }} - Aazer</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Specialized consultancy services for early childhood education in Saudi Arabia. Expert guidance in curriculum development, facility planning, and quality assurance." />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <!-- Favicon -->
    <link
        rel="shortcut icon"
        type="image/x-icon"
        href="assets/images/favicon.ico"
    />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">

    <!-- CSS
    ============================================ -->
    <!-- Bootstrap CSS -->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/language-switcher.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/menu-language-dropdown.css') }}" />
</head>

<body>
<div class="main-page">
    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a
                    href="javascript: void(0);"
                    data-theme="light"
                    class="setColor light"
                >
                    <img src="{{ asset('assets/images/sun-01.svg') }}" alt="Sun images" /><span
                        title="Light Mode"
                    >
                Light</span
                    >
                </a>
            </li>
            <li>
                <a
                    href="javascript: void(0);"
                    data-theme="dark"
                    class="setColor dark"
                >
                    <img
                        src="{{ asset('assets/images/vector.svg') }}"
                        alt="Vector Images"
                    /><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Start Header -->
    <header
        class="header-area formobile-menu header--transparent black-logo-version"
    >
        <div class="header-wrapper" id="header-wrapper">
            <div class="header-left">
                <div class="logo">
                    <a href="index.html">
                        <img
                            src="{{ asset('assets/images/logo.png') }}"
                            alt="aazer"
                        />
                    </a>
                </div>
            </div>
            <div class="header-right">
                <div class="mainmenunav d-lg-block">
                    <!-- Start Mainmanu Nav -->
                    <nav class="main-menu-navbar">
                        <ul class="mainmenu">
                            <li>
                                <a href="#home">{{ __('messages.home') }}</a>
                            </li>
                            <li>
                                <a href="#about">{{ __('messages.about') }}</a>
                            </li>
                            <li>
                                <a href="#services">{{ __('messages.services') }}</a>
                            </li>
                            <li>
                                <a href="#profile">{{ __('messages.profile') }}</a>
                            </li>
                            <li>
                                <a href="#contact">{{ __('messages.contact') }}</a>
                            </li>
                            <li class="language-menu-item">
                                <a class="language-dropdown-toggle">
                                    <img src="{{ app()->getLocale() == 'ar' ? asset('assets/images/flag-ar.svg') : asset('assets/images/flag-en.svg') }}" alt="{{ app()->getLocale() }}" class="flag-icon-small">
                                    {{ app()->getLocale() == 'ar' ? 'العربية' : 'English' }}
                                    <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="language-dropdown">
                                    <li>
                                        <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">
                                            <img src="{{ asset('assets/images/flag-en.svg') }}" alt="English" class="flag-icon-small">
                                            English
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('lang.switch', 'ar') }}" class="{{ app()->getLocale() == 'ar' ? 'active' : '' }}">
                                            <img src="{{ asset('assets/images/flag-ar.svg') }}" alt="Arabic" class="flag-icon-small">
                                            العربية
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Start Humberger Menu  -->
                <div class="humberger-menu d-block d-lg-none pl--20">
              <span class="menutrigger text-white">
                <i data-feather="menu"></i>
              </span>
                </div>
                <!-- End Humberger Menu  -->
                <!-- Start Close Menu  -->
                <div class="close-menu d-block d-lg-none">
              <span class="closeTrigger">
                <i data-feather="x"></i>
              </span>
                </div>
                <!-- End Close Menu  -->
            </div>
        </div>
    </header>

    <!-- Start Page Wrapper  -->
    <main class="page-wrapper">
        <!-- Start Slider Area  -->
        <div id="home" class="rn-slider-area">
            <!-- Start Single Slide  -->
            <div
                class="slide slide-style-1 slider-fixed--height d-flex align-items-center bg_image bg_image--1"
                data-black-overlay="6"
            >
                <div class="container position-relative">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner">
                                <h1 class="title theme-gradient">
                                    {{ __('messages.education_consultancy') }}
                                </h1>
                                <p class="description" style="color: #ffffff; font-size: 18px; margin-top: 20px;">
                                    {{ __('messages.hero_desc') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="service-wrapper service-white">
                        <div class="row">
                            <!-- Start Single Service  -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service service__style--3 text-white">
                                    <div class="icon">
                                        <img
                                            src="{{ asset('assets/images/icon-01.png') }}"
                                            alt="Professionalism"
                                        />
                                    </div>
                                    <div class="content">
                                        <h3 class="title">{{ __('messages.professionalism') }}</h3>
                                        <p>
                                            {{ __('messages.professionalism_desc') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Service  -->

                            <!-- Start Single Service  -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service service__style--3 text-white">
                                    <div class="icon">
                                        <img
                                            src="{{ asset('assets/images/icon-02.png') }}"
                                            alt="Quality Standards"
                                        />
                                    </div>
                                    <div class="content">
                                        <h3 class="title">{{ __('messages.quality_standards') }}</h3>
                                        <p>
                                            {{ __('messages.quality_standards_desc') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Service  -->

                            <!-- Start Single Service  -->
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="single-service service__style--3 text-white">
                                    <div class="icon">
                                        <img
                                            src="{{ asset('assets/images/icon-03.png') }}"
                                            alt="Comprehensive Support"
                                        />
                                    </div>
                                    <div class="content">
                                        <h3 class="title">{{ __('messages.comprehensive_support') }}</h3>
                                        <p>
                                            {{ __('messages.comprehensive_support_desc') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Service  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slide  -->
        </div>
        <!-- End Slider Area  -->

        <!-- Start About Area  -->
        <div id="about" class="about-area about-position-top pb--120 bg_color--1">
            <div class="about-wrapper">
                <div class="container">
                    <div class="row row--35 align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="thumbnail-wrapper" style="position: relative;">
                                <style>
                                    .thumbnail-wrapper {
                                        position: relative;
                                        padding: 20px;
                                    }

                                    .thumbnail-wrapper::before {
                                        content: '';
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        width: 200px;
                                        height: 200px;
                                        background: linear-gradient(135deg, #f81f01 0%, #ee076e 100%);
                                        border-radius: 30px;
                                        opacity: 0.1;
                                        z-index: 0;
                                    }

                                    .thumbnail-wrapper::after {
                                        content: '';
                                        position: absolute;
                                        bottom: 0;
                                        right: 0;
                                        width: 150px;
                                        height: 150px;
                                        background: linear-gradient(135deg, #ee076e 0%, #f81f01 100%);
                                        border-radius: 30px;
                                        opacity: 0.1;
                                        z-index: 0;
                                    }

                                    .about-image-main {
                                        position: relative;
                                        border-radius: 20px;
                                        overflow: hidden;
                                        box-shadow: 0 20px 60px rgba(0,0,0,0.15);
                                        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
                                        z-index: 1;
                                    }

                                    .about-image-main:hover {
                                        transform: scale(1.03);
                                        box-shadow: 0 30px 80px rgba(248, 31, 1, 0.2);
                                    }

                                    .about-image-main img {
                                        width: 100%;
                                        display: block;
                                        transition: all 0.5s ease;
                                    }

                                    .about-image-main:hover img {
                                        transform: scale(1.05);
                                    }

                                    .about-stats-overlay {
                                        position: absolute;
                                        bottom: 30px;
                                        left: 30px;
                                        right: 30px;
                                        background: rgba(255, 255, 255, 0.95);
                                        backdrop-filter: blur(10px);
                                        border-radius: 15px;
                                        padding: 25px;
                                        display: flex;
                                        justify-content: space-around;
                                        box-shadow: 0 10px 40px rgba(0,0,0,0.1);
                                        z-index: 2;
                                    }

                                    .stat-item {
                                        text-align: center;
                                    }

                                    .stat-number {
                                        font-size: 32px;
                                        font-weight: 800;
                                        background: linear-gradient(135deg, #f81f01 0%, #ee076e 100%);
                                        -webkit-background-clip: text;
                                        -webkit-text-fill-color: transparent;
                                        background-clip: text;
                                        display: block;
                                        line-height: 1;
                                        margin-bottom: 8px;
                                    }

                                    .stat-label {
                                        font-size: 13px;
                                        color: #666;
                                        font-weight: 600;
                                        text-transform: uppercase;
                                        letter-spacing: 0.5px;
                                    }

                                    @media (max-width: 767px) {
                                        .about-stats-overlay {
                                            flex-direction: column;
                                            gap: 15px;
                                        }

                                        .thumbnail-wrapper {
                                            margin-bottom: 40px;
                                        }
                                    }
                                </style>
                                <div class="about-image-main">
                                    <img
                                        src="{{ asset('assets/images/about-1.jpg') }}"
                                        alt="About aazer"
                                    />
                                    <div class="about-stats-overlay">
                                        <div class="stat-item">
                                            <span class="stat-number">60+</span>
                                            <span class="stat-label">{{ __('messages.years_experience') }}</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">24+</span>
                                            <span class="stat-label">{{ __('messages.years_in_field') }}</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-number">100%</span>
                                            <span class="stat-label">{{ __('messages.dedicated') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="about-inner inner">
                                <div class="section-title">
                                    <span class="subtitle" style="color: #f81f01; font-weight: 600; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 15px;">
                                        <i data-feather="award" style="width: 18px; height: 18px; margin-right: 8px; vertical-align: middle;"></i>
                                        {{ __('messages.excellence_ece') }}
                                    </span>
                                    <h2 class="title" style="font-size: 42px; font-weight: 800; line-height: 1.3; margin-bottom: 25px;">{{ __('messages.who_we_are') }}</h2>
                                    <p class="description" style="font-size: 16px; line-height: 1.9; color: #555; margin-bottom: 30px;">
                                        {!! __('messages.aazer_desc_1') !!}
                                    </p>
                                    <p class="description" style="font-size: 16px; line-height: 1.9; color: #555; margin-bottom: 35px;">
                                        {{ __('messages.aazer_desc_2') }}
                                    </p>
                                </div>

                                <style>
                                    .about-feature-box {
                                        background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
                                        border-radius: 15px;
                                        padding: 30px;
                                        margin-bottom: 25px;
                                        border-left: 5px solid #f81f01;
                                        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
                                        transition: all 0.3s ease;
                                    }

                                    .about-feature-box:hover {
                                        transform: translateX(10px);
                                        box-shadow: 0 10px 30px rgba(248, 31, 1, 0.15);
                                    }

                                    .about-feature-box h3 {
                                        font-size: 20px;
                                        font-weight: 700;
                                        color: #1e1e1e;
                                        margin-bottom: 12px;
                                        display: flex;
                                        align-items: center;
                                    }

                                    .about-feature-box h3 i {
                                        width: 24px;
                                        height: 24px;
                                        color: #f81f01;
                                        margin-right: 12px;
                                    }

                                    .about-feature-box p {
                                        font-size: 15px;
                                        line-height: 1.8;
                                        color: #666;
                                        margin: 0;
                                    }

                                    .about-belief-quote {
                                        background: linear-gradient(135deg, #f81f01 0%, #ee076e 100%);
                                        border-radius: 15px;
                                        padding: 35px 30px;
                                        margin-top: 30px;
                                        position: relative;
                                        overflow: hidden;
                                    }

                                    .about-belief-quote::before {
                                        content: '"';
                                        position: absolute;
                                        top: -20px;
                                        left: 20px;
                                        font-size: 150px;
                                        font-weight: 900;
                                        color: rgba(255,255,255,0.1);
                                        line-height: 1;
                                    }

                                    .about-belief-quote h3 {
                                        font-size: 18px;
                                        font-weight: 700;
                                        color: #ffffff;
                                        margin-bottom: 15px;
                                        position: relative;
                                        z-index: 1;
                                    }

                                    .about-belief-quote p {
                                        font-size: 16px;
                                        line-height: 1.8;
                                        color: #ffffff;
                                        margin: 0;
                                        position: relative;
                                        z-index: 1;
                                        font-style: italic;
                                    }
                                </style>

                                <div class="row mt--30">
                                    <div class="col-12">
                                        <div class="about-feature-box">
                                            <h3>
                                                <i data-feather="eye" class="me-2"></i>
                                                Our Vision
                                            </h3>
                                            <p>
                                                To achieve qualitative leadership in providing educational and operational consultancy services for early childhood in the Kingdom of Saudi Arabia, setting the benchmark for excellence and innovation.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="about-feature-box">
                                            <h3>
                                                <i data-feather="target" class="me-2"></i>
                                                Our Mission
                                            </h3>
                                            <p>
                                                To provide integrated, high-quality consultancy and operational services based on the latest internationally recognized standards and research, while respecting and integrating Saudi cultural values and educational priorities.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="about-belief-quote">
                                            <h3>Our Fundamental Belief</h3>
                                            <p>
                                                We believe that our children deserve the best services. Every student deserves a great educator, not by chance, but by design. This belief drives everything we do.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area  -->

        <!-- Start Service Area  -->
        <div id="services" class="rn-service-area ptb--80 bg_image bg_image--3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb--50">
                            <h2 class="title">{{ __('messages.comprehensive_services') }}</h2>
                            <p>
                                {{ __('messages.services_desc') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row service-one-wrapper">
                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="layout"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_1_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_1_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="home"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_2_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_2_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="users"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_3_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_3_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="book-open"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_4_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_4_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="box"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_5_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_5_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="clipboard"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_6_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_6_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="award"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_7_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_7_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="monitor"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_8_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_8_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->

                    <!-- Start Single Service  -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="single-service service__style--4 h-100">
                            <div class="service">
                                <div class="icon">
                                    <i data-feather="check-circle"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">{{ __('messages.service_9_title') }}</h3>
                                    <p>
                                        {{ __('messages.service_9_desc') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Service  -->
                </div>
            </div>
        </div>
        <!-- End Service Area  -->

        <!-- Start Profile Area  -->
        <div id="profile" class="rn-service-area rn-section-gap bg_color--1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb--60">
                            <h2 class="title">{{ __('messages.professional_profile') }}</h2>
                            <p class="description">
                                {{ __('messages.profile_desc') }}<br/>
                                <span style="color: #f81f01; font-weight: 500;">{{ __('messages.quality_making') }}</span>
                            </p>
                        </div>
                    </div>
                </div>

                <style>
                    .profile-card {
                        background: #ffffff;
                        border-radius: 10px;
                        padding: 40px 30px;
                        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
                        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                        height: 100%;
                        position: relative;
                        overflow: hidden;
                        border: 1px solid #f0f0f0;
                    }

                    .profile-card::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 4px;
                        background: linear-gradient(90deg, #f81f01 0%, #ee076e 100%);
                        transform: scaleX(0);
                        transition: transform 0.4s ease;
                    }

                    .profile-card:hover {
                        transform: translateY(-10px);
                        box-shadow: 0 20px 60px rgba(248, 31, 1, 0.15);
                    }

                    .profile-card:hover::before {
                        transform: scaleX(1);
                    }

                    .profile-icon-wrapper {
                        width: 70px;
                        height: 70px;
                        border-radius: 15px;
                        background: linear-gradient(135deg, #f81f01 0%, #ee076e 100%);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin-bottom: 25px;
                        box-shadow: 0 8px 20px rgba(248, 31, 1, 0.3);
                        transition: all 0.3s ease;
                    }

                    .profile-card:hover .profile-icon-wrapper {
                        transform: scale(1.1) rotate(5deg);
                    }

                    .profile-icon-wrapper i {
                        width: 35px;
                        height: 35px;
                        color: #ffffff !important;
                        stroke: #ffffff !important;
                    }

                    .profile-card h3.card-title {
                        font-size: 22px;
                        font-weight: 700;
                        color: #1e1e1e;
                        margin-bottom: 20px;
                        line-height: 1.3;
                    }

                    .profile-card ul {
                        list-style: none;
                        padding: 0;
                        margin: 0;
                    }

                    .profile-card ul li {
                        padding: 10px 0;
                        padding-left: 25px;
                        color: #666;
                        line-height: 1.7;
                        position: relative;
                        font-size: 15px;
                        border-bottom: 1px solid #f5f5f5;
                        transition: all 0.3s ease;
                    }

                    .profile-card ul li:last-child {
                        border-bottom: none;
                    }

                    .profile-card ul li::before {
                        content: '';
                        position: absolute;
                        left: 0;
                        top: 18px;
                        width: 8px;
                        height: 8px;
                        background: linear-gradient(135deg, #f81f01 0%, #ee076e 100%);
                        border-radius: 50%;
                        transition: all 0.3s ease;
                    }

                    .profile-card:hover ul li {
                        padding-left: 30px;
                    }

                    .profile-card:hover ul li::before {
                        width: 12px;
                        height: 12px;
                        top: 16px;
                    }

                    .profile-card ul li strong {
                        color: #1e1e1e;
                        font-weight: 600;
                    }

                    .profile-quote {
                        margin-top: 25px;
                        padding: 20px 25px;
                        background: linear-gradient(135deg, #fff5f5 0%, #ffe5f0 100%);
                        border-left: 4px solid #f81f01;
                        border-radius: 8px;
                        font-style: italic;
                        color: #666;
                        line-height: 1.7;
                    }

                    @media (max-width: 767px) {
                        .profile-card {
                            margin-bottom: 30px;
                        }
                    }
                </style>

                <div class="row">
                    <!-- Study and Training -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="profile-card">
                            <div class="profile-icon-wrapper">
                                <i data-feather="award" class="text-white"></i>
                            </div>
                            <h3 class="card-title">Study and Training</h3>
                            <ul>
                                <li><strong>Higher Diploma Program</strong> in preparing trainers for building leadership capacities for school-based development (American University of Beirut)</li>
                                <li><strong>Bachelor's Degree</strong> in Early Childhood (King Saud University)</li>
                                <li><strong>INSEAD Leadership Program</strong></li>
                                <li><strong>Early Childhood Program</strong></li>
                                <li><strong>Professional Trainer Program</strong></li>
                                <li><strong>Quality in Early Childhood Projects Program</strong> (Standards and Requirements)</li>
                                <li><strong>Backward Planning Program</strong></li>
                                <li><strong>Strategic Planning Program</strong> for Educational Projects</li>
                                <li><strong>Certified Trainer Program</strong></li>
                                <li><strong>Standards and Requirements Program</strong> in School Buildings</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Additional Training & Frameworks -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="profile-card">
                            <div class="profile-icon-wrapper">
                                <i data-feather="book" class="text-white"></i>
                            </div>
                            <h3 class="card-title">Additional Training & Frameworks</h3>
                            <ul>
                                <li><strong>Teaching Strategies</strong></li>
                                <li><strong>Understand by Design</strong></li>
                                <li><strong>ECERS</strong> (Early Childhood Environment Rating Scale)</li>
                                <li><strong>NCFE CACHE</strong></li>
                                <li><strong>GAS</strong></li>
                                <li><strong>Relationship Systems Intelligence for Organizations</strong> (CRR Global)</li>
                            </ul>
                            <div class="profile-quote">
                                "Passion drives me, purpose guides me, and professional competencies lead me. I believe in lifelong learning."
                            </div>
                        </div>
                    </div>

                    <!-- Key Consultancy Roles -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="profile-card">
                            <div class="profile-icon-wrapper">
                                <i data-feather="briefcase" class="text-white"></i>
                            </div>
                            <h3 class="card-title">Key Consultancy Roles</h3>
                            <ul>
                                <li><strong>Founder and CEO</strong> of aazer</li>
                                <li><strong>Consultant</strong> at the Royal Commission for AlUla (General Education Development Program)</li>
                                <li><strong>Consultant</strong> for "Model Schools" project, Vision Realization Office, Ministry of Education</li>
                                <li><strong>Consultant</strong> for Prince Mohammed bin Salman Center for Autism and Developmental Disorders</li>
                                <li><strong>Consultant and Preparer</strong> in the Experts Committee, Tatweer Educational Company</li>
                                <li><strong>Coach</strong> in Leadership Capacity Building Program for School-Based Development in AlUla</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Leadership & Professional Roles -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="profile-card">
                            <div class="profile-icon-wrapper">
                                <i data-feather="star" class="text-white"></i>
                            </div>
                            <h3 class="card-title">Leadership & Professional Roles</h3>
                            <ul>
                                <li><strong>Director</strong> of Early Childhood Projects at the Childhood Care Association</li>
                                <li><strong>Member</strong> of the Continuous Development Committee at Dhahran Schools</li>
                                <li><strong>Early Childhood Teacher</strong> at Riyadh Schools and Dhahran National Schools</li>
                                <li><strong>Author</strong> of the book "Quality and Sustainability in Early Childhood Projects (Checklists)"</li>
                                <li><strong>Trainer</strong> on various topics related to early childhood and its projects</li>
                                <li><strong>Founding Member</strong> of "Let's Read Together for Children" Association in Al-Khobar</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Professional Memberships -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="profile-card">
                            <div class="profile-icon-wrapper">
                                <i data-feather="users" class="text-white"></i>
                            </div>
                            <h3 class="card-title">Professional Memberships & Committees</h3>
                            <ul>
                                <li><strong>Member</strong> of the Women's Committee – Early Childhood Track, Women's Committee for Community Development, Riyadh Emirate</li>
                                <li><strong>Consultant</strong> in the National Committee for Child Protection</li>
                                <li><strong>Member</strong> of the Saudi Society for Special Education</li>
                                <li><strong>Member</strong> of the Arab Childhood Association</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Additional Responsibilities -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <div class="profile-card">
                            <div class="profile-icon-wrapper">
                                <i data-feather="compass" class="text-white"></i>
                            </div>
                            <h3 class="card-title">Additional Roles & Responsibilities</h3>
                            <ul>
                                <li>Organizing and participating in dialogue sessions</li>
                                <li>Participating in forums, exhibitions, and conferences</li>
                                <li>Planning programs and initiatives</li>
                                <li>Reviewing educational outcomes and outputs</li>
                                <li>Building and leading teams</li>
                                <li>Planning and participating in projects for the non-profit sector</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Profile Area  -->

        <!-- Start Values Area  -->
        <div class="rn-blog-area rn-section-gap bg_color--5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb--60">
                            <h2 class="title">{{ __('messages.core_values') }}</h2>
                            <p class="description">
                                {{ __('messages.belief_desc') }}
                            </p>
                        </div>
                    </div>
                </div>

                <style>
                    .value-card-wrapper {
                        perspective: 1000px;
                    }

                    .value-card {
                        background: #ffffff;
                        border-radius: 15px;
                        padding: 45px 35px;
                        height: 100%;
                        box-shadow: 0 5px 30px rgba(0,0,0,0.08);
                        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                        position: relative;
                        overflow: hidden;
                        border: 2px solid transparent;
                    }

                    .value-card::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 5px;
                        background: linear-gradient(90deg, #f81f01 0%, #ee076e 100%);
                        transform: scaleX(0);
                        transform-origin: left;
                        transition: transform 0.5s ease;
                    }

                    .value-card:hover {
                        transform: translateY(-15px) scale(1.02);
                        box-shadow: 0 25px 60px rgba(248, 31, 1, 0.2);
                        border-color: rgba(248, 31, 1, 0.2);
                    }

                    .value-card:hover::before {
                        transform: scaleX(1);
                    }

                    .value-icon-container {
                        width: 85px;
                        height: 85px;
                        border-radius: 20px;
                        background: linear-gradient(135deg, #f81f01 0%, #ee076e 100%);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 auto 30px;
                        box-shadow: 0 10px 30px rgba(248, 31, 1, 0.3);
                        transition: all 0.4s ease;
                        position: relative;
                    }

                    .value-card:hover .value-icon-container {
                        transform: rotateY(360deg) scale(1.1);
                        box-shadow: 0 15px 40px rgba(248, 31, 1, 0.5);
                    }

                    .value-icon-container::after {
                        content: '';
                        position: absolute;
                        width: 100%;
                        height: 100%;
                        border-radius: 20px;
                        background: linear-gradient(135deg, #f81f01 0%, #ee076e 100%);
                        opacity: 0.3;
                        transform: scale(1.3);
                        transition: all 0.4s ease;
                    }

                    .value-card:hover .value-icon-container::after {
                        transform: scale(1.5);
                        opacity: 0;
                    }

                    .value-icon-container i {
                        width: 42px;
                        height: 42px;
                        color: #ffffff !important;
                        stroke: #ffffff !important;
                        z-index: 1;
                    }

                    .value-card h4.value-title {
                        font-size: 24px;
                        font-weight: 700;
                        color: #1e1e1e;
                        margin-bottom: 20px;
                        text-align: center;
                        transition: all 0.3s ease;
                    }

                    .value-card:hover h4.value-title {
                        color: #f81f01;
                    }

                    .value-card p.value-description {
                        font-size: 15px;
                        line-height: 1.8;
                        color: #666;
                        text-align: center;
                        margin-bottom: 20px;
                        transition: all 0.3s ease;
                    }

                    .value-card:hover p.value-description {
                        color: #555;
                    }

                    .value-highlight {
                        padding: 15px 20px;
                        background: linear-gradient(135deg, #fff5f5 0%, #ffe5f0 100%);
                        border-radius: 10px;
                        border-left: 4px solid #f81f01;
                        margin-top: 20px;
                    }

                    .value-highlight p {
                        font-size: 13px;
                        color: #f81f01;
                        font-weight: 600;
                        margin: 0;
                        text-align: center;
                        line-height: 1.6;
                    }

                    @media (max-width: 767px) {
                        .value-card {
                            margin-bottom: 30px;
                        }
                    }
                </style>

                <div class="row">
                    <!-- Professionalism -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="value-card-wrapper">
                            <div class="value-card">
                                <div class="value-icon-container">
                                    <i data-feather="award" class="text-white"></i>
                                </div>
                                <h4 class="value-title">Professionalism</h4>
                                <p class="value-description">
                                    Delivering expert services with the highest standards of competence and dedication to early childhood education. Our team brings over 60 years of combined experience to every project.
                                </p>
                                <div class="value-highlight">
                                    <p>Certified consultants with proven track records in transforming educational institutions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Excellence -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="value-card-wrapper">
                            <div class="value-card">
                                <div class="value-icon-container">
                                    <i data-feather="star" class="text-white"></i>
                                </div>
                                <h4 class="value-title">Excellence</h4>
                                <p class="value-description">
                                    Ensuring quality in every aspect of our work, aligned with international standards and best practices. We strive for continuous improvement in all our consultancy services.
                                </p>
                                <div class="value-highlight">
                                    <p>Adherence to ECERS, Teaching Strategies, and globally recognized frameworks</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Innovation -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="value-card-wrapper">
                            <div class="value-card">
                                <div class="value-icon-container">
                                    <i data-feather="zap" class="text-white"></i>
                                </div>
                                <h4 class="value-title">Innovation</h4>
                                <p class="value-description">
                                    Embracing cutting-edge methodologies and modern brain research to create optimal learning environments. We stay ahead of educational trends and technological advancements.
                                </p>
                                <div class="value-highlight">
                                    <p>Integrating latest research with practical, culturally-aligned solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Collaboration -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="value-card-wrapper">
                            <div class="value-card">
                                <div class="value-icon-container">
                                    <i data-feather="users" class="text-white"></i>
                                </div>
                                <h4 class="value-title">Collaboration</h4>
                                <p class="value-description">
                                    Working together with institutions, educators, and stakeholders to achieve the best outcomes for children. Building strong partnerships based on trust and mutual growth.
                                </p>
                                <div class="value-highlight">
                                    <p>Team-based approach ensuring all voices are heard and valued</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Integrity -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="value-card-wrapper">
                            <div class="value-card">
                                <div class="value-icon-container">
                                    <i data-feather="shield" class="text-white"></i>
                                </div>
                                <h4 class="value-title">Integrity</h4>
                                <p class="value-description">
                                    Maintaining honesty, transparency, and ethical practices in all our consultancy services. We build lasting relationships through trustworthy guidance and authentic support.
                                </p>
                                <div class="value-highlight">
                                    <p>Transparent processes with clear communication at every stage</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Child-Centered Focus -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="value-card-wrapper">
                            <div class="value-card">
                                <div class="value-icon-container">
                                    <i data-feather="heart" class="text-white"></i>
                                </div>
                                <h4 class="value-title">Child-Centered Focus</h4>
                                <p class="value-description">
                                    Every decision we make prioritizes the well-being, development, and future of children. We believe our children deserve nothing less than the absolute best services.
                                </p>
                                <div class="value-highlight">
                                    <p>Developmentally appropriate practices that nurture each child's unique potential</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Values Area  -->

    </main>
    <!-- End Page Wrapper  -->

    <footer id="contact" class="footer-area footer-default">
        <div class="footer-wrapper">
            <div class="row align-items-end row--0">
                <div class="col-lg-6">
                    <div class="footer-left">
                        <div class="inner">
                            <span>{{ __('messages.ready_to_start') }}</span>
                            <h2>
                                {!! __('messages.transform_childhood') !!}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-right" data-black-overlay="6">
                        <div class="row">
                            <!-- Start Single Widget -->
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="footer-widget">
                                    <h4>{{ __('messages.quick_links') }}</h4>
                                    <ul class="ft-link">
                                        <li><a href="#about">{{ __('messages.about') }}</a></li>
                                        <li><a href="#services">{{ __('messages.services') }}</a></li>
                                        <li><a href="#profile">{{ __('messages.profile') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Single Widget  -->
                            <!-- Start Single Widget -->
                            <div class="col-lg-6 col-sm-6 col-12 mt_mobile--30">
                                <div class="footer-widget">
                                    <h4>{{ __('messages.contact_info') }}</h4>
                                    <ul class="ft-link">
                                        <li>
                                            <a href="mailto:info@aazer.sa">info@aazer.sa</a>
                                        </li>
                                        <li>
                                            <a href="mailto:Ghadah@aazer.sa">Ghadah@aazer.sa</a>
                                        </li>

                                        <li>
                                            <a href="tel:+966531660925">+966 53 16 60 925</a>
                                        </li>
                                    </ul>

                                    <div class="social-share-inner">
                                        <ul
                                            class="social-share social-style--2 d-flex justify-content-start liststyle mt--15"
                                        >
                                            <li>
                                                <a href="https://twitter.com/aazersa" target="_blank"><i class="fab fa-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Widget  -->

                            <div class="col-lg-12">
                                <div class="copyright-text">
                                    <p>
                                        © {{ date('Y') }} aazer.sa. {{ __('messages.all_rights_reserved') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>
<!-- jQuery JS -->
<script src="{{ asset('assets/js/vendor/jquery.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/stellar.js') }}"></script>
<script src="{{ asset('assets/js/vendor/particles.js') }}"></script>
<script src="{{ asset('assets/js/vendor/masonry.js') }}"></script>
<script src="{{ asset('assets/js/vendor/stickysidebar.js') }}"></script>
<script src="{{ asset('assets/js/vendor//plugins.js') }}"></script>
<script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-one-page-nav.js') }}"></script>

<script>
    // Smooth scrolling for navigation links
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('a[href^="#"]');

        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                if (href !== '#') {
                    e.preventDefault();

                    const targetElement = document.querySelector(href);

                    if (targetElement) {
                        const offsetTop = targetElement.offsetTop - 80; // Adjust for fixed header

                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    });
</script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
