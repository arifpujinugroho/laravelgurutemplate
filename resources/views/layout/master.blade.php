<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/icofont/css/icofont.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!--SVG Icons Animated-->
    <link rel="stylesheet" type="text/css" href="assets/icon/SVG-animated/svg-weather.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/menu-search/css/component.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/jquery.mCustomScrollbar.css')}}">

    @yield('header')
</head>


<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="{{url('/index')}}">
                            <img class="img-fluid" src="{{url('assets/images/logo.png')}}" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a class="main-search morphsearch-search" href="#">
                                    <!-- themify icon -->
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                            </li>
                            <li class="mega-menu-top">
                                <a href="#">
                                        Mega
                                        <i class="ti-angle-down"></i>
                                    </a>
                                <ul class="show-notification row">
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Popular Links</h6>
                                        <ul class="mega-menu-links">
                                            <li><a href="{{url('form-elements-component')}}">Form Elements</a></li>
                                            <li><a href="{{url('button')}}">Buttons</a></li>
                                            <li><a href="{{url('map-google')}}">Maps</a></li>
                                            <li><a href="{{url('user-card')}}">Contact Cards</a></li>
                                            <li><a href="{{url('user-profile')}}">User Information</a></li>
                                            <li><a href="{{url('auth-lock-screen')}}">Lock Screen</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Mailbox</h6>
                                        <ul class="mega-mailbox">
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-folder"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Data Backup</h5>
                                                        <small class="text-muted">Store your data</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-headphone-alt"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Support</h5>
                                                        <small class="text-muted">24-hour support</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-dropbox"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Drop-box</h5>
                                                        <small class="text-muted">Store large amount of data in one-box only
                                                            </small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="media">
                                                    <div class="media-left">
                                                        <i class="ti-location-pin"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>Location</h5>
                                                        <small class="text-muted">Find Your Location with ease of use</small>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Gallery</h6>
                                        <div class="row m-b-20">
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{url('assets/images/avatar-2.jpg')}}" alt="Gallery-1">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{url('assets/images/avatar-3.jpg')}}" alt="Gallery-2">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{url('assets/images/avatar-4.jpg')}}" alt="Gallery-3">
                                            </div>
                                        </div>
                                        <div class="row m-b-20">
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{url('assets/images/avatar-3.jpg')}}" alt="Gallery-4">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{url('assets/images/avatar-4.jpg')}}" alt="Gallery-5">
                                            </div>
                                            <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="{{url('assets/images/avatar-2.jpg')}}" alt="Gallery-6">
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
                                    </li>
                                    <li class="col-sm-3">
                                        <h6 class="mega-menu-title">Contact Us</h6>
                                        <div class="mega-menu-contact">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input1">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                                <div class="col-9">
                                                    <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                                </div>
                                            </div>
                                            <div class="form-group row"> <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                                <div class="col-9"> <textarea class="form-control" id="exampleTextarea" rows="3"></textarea> </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-12 text-right"> <button class="btn btn-primary">Submit</button> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification lng-dropdown">
                                <a href="#" id="dropdown-active-item">
                                        <img src="{{url('assets/images/flags/ENGLISH.jpg')}}" alt=""> English
                                    </a>
                                <ul class="show-notification">
                                    <li>
                                        <a href="#" data-lng="en">
                                                <img src="{{url('assets/images/flags/ENGLISH.jpg')}}" alt=""> English
                                            </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="es">
                                                <img src="{{url('assets/images/flags/SPAIN.jpg')}}" alt=""> Spanish
                                            </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="pt">
                                                <img src="{{url('assets/images/flags/PORTO.jpg')}}" alt=""> Portuguese
                                            </a>
                                    </li>
                                    <li>
                                        <a href="#" data-lng="fr">
                                                <img src="{{url('assets/images/flags/FRANCE.jpg')}}" alt=""> French
                                            </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-notification">
                                <a href="#!">
                                        <i class="ti-bell"></i>
                                        <span class="badge bg-c-pink"></span>
                                    </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{url('assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{url('assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{url('assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="header-notification">
                                <a href="#!" class="displayChatbox">
                                        <i class="ti-comments"></i>
                                        <span class="badge bg-c-green"></span>
                                    </a>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                        <img src="{{url('assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{url('user-profile')}}">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{url('email-inbox')}}">
                                                <i class="ti-email"></i> My Messages
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{url('auth-lock-screen')}}">
                                                <i class="ti-lock"></i> Lock Screen
                                            </a>
                                    </li>
                                    <li>
                                        <a href="{{url('auth-normal-sign-in')}}">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- search -->
                        <div id="morphsearch" class="morphsearch">
                            <form class="morphsearch-form">
                                <input class="morphsearch-input" type="search" placeholder="Search..." />
                                <button class="morphsearch-submit" type="submit">Search</button>
                            </form>
                            <div class="morphsearch-content">
                                <div class="dummy-column">
                                    <h2>People</h2>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="{{url('assets/images/avatar-4.jpg')}}" class="img-radius" alt="Sara Soueidan" />
                                            <h3>Sara Soueidan</h3>
                                        </a>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="{{url('assets/images/avatar-2.jpg')}}" class="img-radius" alt="Shaun Dona" />
                                            <h3>Shaun Dona</h3>
                                        </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Popular</h2>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="{{url('assets/images/avatar-3.jpg')}}" class="img-radius" alt="PagePreloadingEffect" />
                                            <h3>Page Preloading Effect</h3>
                                        </a>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="{{url('assets/images/avatar-4.jpg')}}" class="img-radius" alt="DraggableDualViewSlideshow" />
                                            <h3>Draggable Dual-View Slideshow</h3>
                                        </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Recent</h2>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="{{url('assets/images/avatar-2.jpg')}}" class="img-radius" alt="TooltipStylesInspiration" />
                                            <h3>Tooltip Styles Inspiration</h3>
                                        </a>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="{{url('assets/images/avatar-3.jpg')}}" class="img-radius" alt="NotificationStyles" />
                                            <h3>Notification Styles Inspiration</h3>
                                        </a>
                                </div>
                            </div>
                            <!-- /morphsearch-content -->
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                        <!-- search end -->
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="{{url('assets/images/avatar-3.jpg')}}" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{url('assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{url('assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{url('assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="{{url('assets/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="{{url('assets/images/avatar-3.jpg')}}" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="{{url('assets/images/avatar-4.jpg')}}" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            @include('layout.left-side')
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    @yield('content')
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="{{url('assets/images/browser/chrome.png')}}" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="{{url('assets/images/browser/firefox.png')}}" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="{{url('assets/images/browser/opera.png')}}" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="{{url('assets/images/browser/safari.png')}}" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="{{url('assets/images/browser/ie.png')}}" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="{{url('assets/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{url('assets/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{url('assets/bower_components/modernizr/js/modernizr.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{url('assets/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{url('assets/js/SmoothScroll.js')}}"></script>
    <script src="{{url('assets/js/pcoded.min.js')}}"></script>
    <script src="{{url('assets/js/demo-12.js')}}"></script>
    <script src="{{url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/js/script.min.js')}}"></script>

    @yield('footer')
</body>

</html>
