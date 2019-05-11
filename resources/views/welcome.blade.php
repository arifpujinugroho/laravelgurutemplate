<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Page title -->
    <title>Guru Able v1.0 Documentation</title>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Guru Able is fully responsive admin template crafed in Bootstrap4 framework with material look and feel.">
    <meta name="keywords" content="admin, admin dashboard, admin template, admin themes, bootstrap, google material design, material design, premium admin templates, responsive, ablepro, premium admin dashboard, CRM dashboard">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" href="{{url('assets/documentation/img/favicon/favicon.ico')}}" type="image/x-icon">

    <!-- Include StyleSheets -->
    <link rel="stylesheet" href="{{url('assets/documentation/css/style.min.css')}}">
    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/documentation/icons/icofont/css/icofont.css')}}">
    <!--font-awesome icon-->
    <link rel="stylesheet" type="text/css" href="{{url('assets/documentation/icons/font-awesome/css/font-awesome.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('assets/documentation/icons/themify-icons/themify-icons.css')}}">
    <!-- <link rel="stylesheet" href="{{url('assets/documentation/css/custom.css')}}"> -->
    <script src="{{url('assets/documentation/js/modernizr.js')}}"></script>
</head>
<body class="">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Preloader: uncomment this if you want to show a smooth preloader while the page is loading. Don't forget to add the 'js-preload-me' class on the <body> tag. -->
<!-- <div class="preloader js-preloader"><div class="preloader-animation"></div></div>
-->
<!-- End of Preloader -->
<div class="page js-page ">
    <!-- One Page Sidebar -->
    <div class="one-page-sidebar">
        <!-- One Page Sidebar Header -->
        <div class="one-page-sidebar-header">
            <!-- One Page Logo -->
            <div class="one-page-logo">
                <!-- Logo Image -->
                <a href="index.html" class="logo-image ">
                    <img src="{{url('assets/documentation/img/logo-text.png')}}" alt="logo">
                </a>
                <!-- End of Logo Image -->
            </div>
            <!-- End of One Page Logo -->
            <!-- One Page Meta -->
            <div class="one-page-meta">
                <ul class="one-page-meta-list">
                    <li>
                        <a href="{{url('index')}}">
                            <i class="one-page-meta-list-icon ti-link"></i>Preview</a>
                    </li>
                    <li>
                        {{--<a href="#">
                            <i class="one-page-meta-list-icon ti-headphone-alt"></i>Support</a>--}}
                    </li>
                </ul>
            </div>
            <!-- End of One Page Meta -->
        </div>
        <!-- End of One Page Sidebar Header -->
        <!-- One Page Nav -->
        <div class="one-page-nav-wrapper js-custom-scrollbar">
            <ul class="one-page-nav js-one-page-nav js-menu-vertical" data-prepend-to=".js-prepend-mobile-menu">
                <li class="is-active">
                    <a href="#content" class="">
							<span class="one-page-nav-icon">
								<i class="ti-location-arrow"></i>
							</span>Getting started</a>
                </li>
                <li class="">
                    <a href="#download-source" class="">
							<span class="one-page-nav-icon">
								<i class="ti-layout-tab-v"></i>
							</span>What's included</a>
                </li>
                <li class="">
                    <a href="#file-structure" class="">
							<span class="one-page-nav-icon">
								<i class="ti-layout-list-thumb"></i>
							</span>File structure</a>
                </li>
                <li class="">
                    <a href="#application-structure" class="">
							<span class="one-page-nav-icon">
								<i class="ti-credit-card"></i>
							</span>Aplication structure</a>
                </li>
                <li class="">
                    <a href="#getting-started" class="">
							<span class="one-page-nav-icon">
								<i class="ti-download"></i>
							</span>Install-template</a>
                </li>
                <li class="">
                    <a href="#table-with-scss" class="">
							<span class="one-page-nav-icon">
								<i class="ti-layout-menu-v"></i>
							</span> SCSS Classes</a>
                </li>

                <li class="">
                    <a href="#table-with-properties" class="">
							<span class="one-page-nav-icon">
								<i class="ti-layout-list-post"></i>
							</span>CSS Classes Reference</a>
                </li>
                <li class="">
                    <a href="#plugins" class="">
							<span class="one-page-nav-icon">
								<i class="ti-settings"></i>
							</span>Plugins</a>
                </li>
                <li class="">
                    <a href="#browser-support" class="">
							<span class="one-page-nav-icon">
								<i class="ti-world"></i>
							</span>Browser support</a>
                </li>
                {{--<li class="">
                    <a href="#faq" class="">
							<span class="one-page-nav-icon">
								<i class="ti-comments"></i>
							</span>FAQ</a>
                </li>--}}
				<li class="">
                    <a href="#change_log" class="">
							<span class="one-page-nav-icon">
								<i class="ti-align-left"></i>
							</span>ChangeLog</a>
                </li>
                {{--<li class="">
                    <a href="#" class="is-external">
							<span class="one-page-nav-icon">
								<i class="ti-shopping-cart"></i>
                                </span>Buy now</a>
                </li>--}}
            </ul>
        </div>
        <!-- End of One Page Nav -->
        <!-- One Page Sidebar Footer -->
        <footer class="one-page-sidebar-footer">
            {{--<a href="#">Support</a>,--}} all rights reserved. {{ date('Y') }} © </footer>
        <!-- End of One Page Sidebar Footer -->
    </div>
    <!-- End of One Page Sidebar -->
    <!-- One Page Content -->
    <div class="one-page-content">
        <!-- Header -->
        <header class="large header-one-page ">
            <div class="container-fluid container-spaced">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-5">
                        <div class="visible-sm-block visible-xs-block">
                            <!-- Logo Image -->
                            <a href="index.html" class="logo-image logo-animated">
                                <img src="img/logo-text.png" alt="logo">
                            </a>
                            <!-- End of Logo Image -->
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-6 col-xs-7">
                    </div>
                </div>
            </div>
        </header>
        <div class="header-back header-back-simple header-back-small">
            <div class="header-back-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Page Info -->
                            <div class="col-md-12">
                                <!-- Rotator -->
                                <div class="rotator rotator-light ">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="rotator-text">
                                                    <span class="js-rotator morphext"><span class="animated bounceIn">Guru Able </span></span> v1.0 documentation.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Rotator -->
                                <div class="header-back-buttons helper center">
                                    <a href="{{url('index')}}" class="button stroke rounded large white">Live Preview</a>
                                </div>
                            </div>
                            <!-- End Page Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header -->
        <div id="content">
            <div class="container-fluid container-spaced">
                <div class="row">
                    <div class="col-md-12">
                        <div class="js-prepend-mobile-menu">
                            <!-- The mobile menu will be prepended here -->
                        </div>
                        <!-- Category Info -->
                        <div class="category-info helper pt0" id="main-features">
                            <h3 class="category-title"> Getting started
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#main-features">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of  Fragment Identifier -->
                            </h3>
                            <p class="category-content">Guru Able is fully responsive bootstrap 4 admin template for your complete need.</p>
                        </div>
                        <!-- End of Caregory Info -->
                        <!--Starts Features-->
                        <div class="row">
                            <div class="col-md-12">
                            <h4 class="category-title"> Features</h4>
                                <p class="category-content">
                            </div>
                            <div class="col-md-4">

                                <!-- Box -->
                                <div class="box box-small-icon">
                                    <!--<img src="http://placehold.it/32x32" class="box-icon" alt="box icon">-->
                                    <i class="icofont icofont-social-bootstrap box-icon bootstrap-icon-color"></i>
                                    <h4 class="box-title">Bootstrap 4 Beta Framework</h4>
                                    <p class="box-description">Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p>
                                </div>
                                <!-- End of Box -->
                            </div>
                            <div class="col-md-4">
                                <!-- Box -->
                                <div class="box box-small-icon">
                                    <i class="icofont icofont-ui-settings customizable-icon-color box-icon"></i>
                                    <h4 class="box-title">Easily customizable</h4>
                                    <p class="box-description">The internet is society’s true equalizer. It gives voices to the masses, as people from across the world can now express their opinions and ideals. Not since the industrial revolution, has humanity experienced such a game-changing invention.</p>
                                </div>
                                <!-- End of Box -->
                            </div>
                            <div class="col-md-4">
                                <!-- Box -->
                                <div class="box box-small-icon">
                                    <i class="icofont icofont-file-html5 html5-icon-color box-icon"></i>
                                    <h4 class="box-title">HTML5/CSS3</h4>
                                    <p class="box-description">HTML5 is a core technology markup language of the Internet used for structuring and presenting content for the World Wide Web.</p>
                                </div>
                                <!-- End of Box -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!-- Box -->
                                <div class="box box-small-icon">
                                    <i class="icofont icofont-responsive box-icon responsive-color"></i>
                                    <h4 class="box-title">Responsive layout</h4>
                                    <p class="box-description">Let this collection of responsive designed websites across a variety of website types help get your creative and developer juices flowing. Each site features a screenshot across 4 device widths and you can see the media queries.</p>
                                </div>
                                <!-- End of Box -->
                            </div>
                            <div class="col-md-4">
                                <!-- Box -->
                                <div class="box box-small-icon">
                                    <!--<img src="http://placehold.it/32x32" class="box-icon" alt="box icon">-->
                                    <i class="icofont icofont-plugin box-icon plugins-color"></i>
                                    <h4 class="box-title">Integrated plugins</h4>
                                    <p class="box-description">You can enable one or more of the integrated Apache Cordova plugins to extend the functionality of your app. The integrated plugins are custom Apache Cordova plugins that the AppBuilder team modifies, configures and updates regularly. </p>
                                </div>
                                <!-- End of Box -->
                            </div>
                            <div class="col-md-4">
                                <!-- Box -->
                                <div class="box box-small-icon">
                                    <i class="icofont icofont-ipod-touch box-icon advanced-color"></i>
                                    <h4 class="box-title">Most advanced</h4>
                                    <p class="box-description">Earum dignissimos odit, cumque impedit magnam nemo sint. Officiis iste expedita ad ipsum est dicta ut ex, ab quidem nobis.</p>
                                </div>
                                <!-- End of Box -->
                            </div>
                        </div>
                        <!--Ends Features-->
                        <!-- What's included start -->
                        <div class="category-info " id="download-source">
                            <h3 class="category-title"> What's included
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#download-source">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <!-- File Tree Text -->
                            <ul class="file-tree-text js-file-tree-text">
                                <li>
                                    <span class="file-tree-text-name">assets/</span>
                                    <ul class="file-tree-text-folder">
                                        <li>
                                            <span class="file-tree-text-name">css/</span>
                                            <ul class="file-tree-text-folder">
                                                <li>
                                                    <span class="file-tree-text-name">component.css</span>

                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">style.css</span>

                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">bootstrap-editable.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">responsive.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">samples.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">tm_validator.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">tm_editable.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">swiper.min.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">slick-theme.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">...- More</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">icon/</span>
                                            <ul class="file-tree-text-folder">
                                                <li>
                                                    <span class="file-tree-text-name">flag-icon.min.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">icofont.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">themify-icons.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">icofont.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">ionicons.min.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">material-design-iconic-font.min.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">simple-line-icons.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">typicons.min.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">weather-icons-wind.min.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">weather-icons-wind.min.css</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">...- More</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">images/</span>
                                            <ul class="file-tree-text-folder">
                                                <li>
                                                    <span class="file-tree-text-name">logo.png</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">user.png</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">other-a.png</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">...-More</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">js/</span>
                                            <ul class="file-tree-text-folder">
                                                <li>
                                                    <span class="file-tree-text-name">bootstrap-growl.min.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">animation.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">classie.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">color-json-common-page.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">common-pages.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">jquery.quicksearch.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">modalEffects.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">swiper-custom.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">...- More</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">custom Page Js/</span>
                                            <ul class="file-tree-text-folder">
                                                <li>
                                                    <span class="file-tree-text-name">accordion.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">ace-editor.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">advance-form.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">animation.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">button-fab.js</span>
                                                </li>
                                                <li>
                                                    <span class="file-tree-text-name">...-More</span>
                                                </li>

                                            </ul>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">Default.html</span>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name"> Ecommerce.html</span>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">CRN.html</span>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">Analytics.html</span>
                                        </li>
                                        <li>
                                            <span class="file-tree-text-name">Project.html</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- End What's included -->
                        </div>
                        <!-- End of Caregory Info -->

                        <!-- Category Info -->
                        <div class="category-info " id="file-structure">
                            <h3 class="category-title"> File structure
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#file-structure">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <h4 class="category-description">Let's talk about what's inside the package.</h4>
                        </div>
                        <!-- End of Caregory Info -->
                        <!-- File Tree -->
                        <div class="file-tree">
                            <div class="file-tree-title"> Docs file hierarchy
                                <ul class="file-tree-buttons">
                                    <li class="js-expand">
                                        <i class="fa fa-plus"></i> Expand all</li>
                                    <li class="js-collapse">
                                        <i class="fa fa-minus"></i> Collapse all</li>
                                </ul>
                            </div>
                            <ul class="file-tree-list js-file-tree" data-expanded="">
                                <li class="is-folder">assets/css -
                                    <span class="file-tree-description">All plugins stylesheet cover under css/ folder</span>
                                    <ul>
                                        <li class="is-file">style.css -
                                            <span class="file-tree-description">Mash able custom made css must required for all the files</span>
                                        </li>
                                        <li class="is-file">component.css -
                                            <span class="file-tree-description">responsive layout included media queries</span>
                                        </li>
                                        <li class="is-file">...more -
                                            <span class="file-tree-description">more css files listed under css folder</span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="is-folder">assets/icon -
                                    <span class="file-tree-description">Internal Icon font's required stylesheet and font cover under icon/ folder</span>
                                    <ul>
                                        <li class="is-file">flag-icon.css
                                        </li>
                                        <li class="is-file">icofont.css
                                        </li>
                                        <li class="is-file">themify.css
                                        </li>
                                        <li class="is-file">ico-fonts.css
                                        </li>
                                        <li class="is-file">ion-icon.css
                                        </li>
                                        <li class="is-file">material-design.css
                                        </li>
                                        <li class="is-file">simple-line-icons.css
                                        </li>
                                        <li class="is-file">....more
                                        </li>
                                    </ul>
                                </li>
                                <li class="is-folder">assets/images - 
                                    <span class="file-tree-description">Required images cover under images/ folder</span>
                                    <ul>
                                        <li class="is-file">logo.png
                                        </li>
                                        <li class="is-file">user.png
                                        </li>
                                        <li class="is-file">...more
                                        </li>
                                    </ul>
                                </li>
                                <li class="is-folder">assets/js -
                                    <span class="file-tree-description">Guru Able required javascript files cover under js/ folder</span>
                                    <ul>
                                        <li class="is-file">animation.js
                                        </li>
                                        <li class="is-file">bootstrap-growl.min.js
                                        </li>
                                        <li class="is-file">classie.min.js
                                        </li>
                                        <li class="is-file">modalEffects.min.js
                                        </li>
                                        <li class="is-file">rating.js
                                        </li>
                                        <li class="is-file">...more
                                        </li>
                                    </ul>
                                </li>
                                <li class="is-folder">assets/pages
                                    <span class="file-tree-description">Page wise custom javascript cover under pages/ folder.</span>
                                    <ul>
                                        <li class="is-file">accordion.js
                                        </li>
                                        <li class="is-file">advance-form.js
                                        </li>
                                        <li class="is-file">animation.js
                                        </li>
                                        <li class="is-file">...more
                                        </li>
                                    </ul>
                                </li>
                                <li class="is-folder">assets/plugins -
                                    <span class="file-tree-description">Guru Able custom plugins javascript cover under plugins/ folder</span>
                                    <ul>
                                        <li class="is-file">ace-editor.css
                                        </li>
                                        <li class="is-file">...more
                                        </li>
                                    </ul>
                                </li>
                                <li class="is-file">index.html -
                                    <span class="file-tree-description">quis cum ratione laboriosam ducimus iure voluptates quaerat si</span>
                                </li>
                                <li class="is-file">dashboard-ecommerce.html -
                                    <span class="file-tree-description">omnis ipsa quas vel alias illum nostrum deleniti officiis</span>
                                </li>
                                <li class="is-file">dashboard-crm.html -
                                    <span class="file-tree-description">libero et id laborum laboriosam dignissimos a! cum molestia</span>
                                </li>
                                <li class="is-file">Project.html -
                                    <span class="file-tree-description">libero et id laborum laboriosam dignissimos a! cum molestia</span>
                                </li>
                                <li class="is-file">Analytics.html -
                                    <span class="file-tree-description">libero et id laborum laboriosam dignissimos a! cum molestia</span>
                                </li>
                                <li class="is-file">... -
                                    <span class="file-tree-description">Entire files comes under root/ folder</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End of FIle Tree -->
                        <!-- Application structure Start -->
                        <div class="category-info " id="application-structure">
                            <h3 class="category-title"> Default Page Layout
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#application-structure">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <h4 class="category-description">Guru Able- Comman page layout structure</h4>
                            <p class="category-content">Guru Able comes with 11+ different pages layout where template's sidebar menu change everytime. Below is the default page layout of Guru Able admin template.</p>
                        </div>
                        <!-- End of Application structure -->
                        <img src="{{url('assets/documentation/img/layout.png')}}" class="helper mb60 mt30 image remove-border">
                        <!-- Install-template Start -->
                        <div class="category-info " id="getting-started">
                            <h3 class="category-title"> Install-template
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#getting-started">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <h4 class="category-description">Yep, as simple as that.</h4>

                        </div>
                            <!-- Bower Install Start -->
                            <div class="category-info" id="table-with-bower">
                                <h3 class="category-title"> Bower Install
                                    <!-- Fragment Identifier -->
                                    <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#table-with-bower">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <!-- End of Fragment Identifier -->
                                </h3>
                                <!-- Note -->
                                <div class="note js-note ">
                                    <h4 class="note-title">Bower Information </h4>
                                    <p class="note-description"> Please note that all detail about Bower visit official main website -
                                        <a href="https://bower.io/#install-bower" target="_blank" style="font-size: 18px; color: #0000ee;">bower.io</a> </p>
									<p class="note-description"> You also must install "Bower Installer" for -
										<strong>Tool for installing bower dependencies that won't include entire repos. Although Bower works great as a light-weight tool to quickly install browser dependencies, it currently does not provide much functionality for installing specific "built" components for the client.</strong>
                                        <a href="https://github.com/rquadling/bower-installer" target="_blank" style="font-size: 18px; color: #0000ee;">Visit Github for more detail</a> </p>
                                </div>
                                <h3>Bower Install </h3>
                                <div class="code-highlight " data-label="">
                                    <span class="js-copy-to-clipboard copy-code">copy</span> <pre><code class="language-markup js-code">
&lt;!-- Bower Install --&gt;

<span class="gp">$ </span>npm install -g bower

&lt;!--After Install Bower - Required to Install "Bower Installer" --&gt; 

&lt;!--Install bower-installer by executing --&gt;
<span class="gp">$ </span>npm install -g bower-installer

&lt;!--From the terminal in the same directory as your bower.json file, enter:--&gt;
<span class="gp">$ </span>bower-installer
&lt;!-- After above command it will run bower.json file and all bower components copy into "build" folder--&gt;


                                    </code></pre> </div>
                            </div>
                            <!-- SCSS Classes Reference Start -->
                            <div class="category-info" id="table-with-scss">
                                <h3 class="category-title"> SCSS
                                    <!-- Fragment Identifier -->
                                    <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#table-with-scss">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <!-- End of Fragment Identifier -->
                                </h3>
                                <!-- Note -->
                                <div class="note js-note ">
                                    <h4 class="note-title"> SCSS Basics </h4>
                                    <p class="note-description"> Please note that all Detail main Web Site..
                                        <a href="http://sass-lang.com/documentation/file.SASS_REFERENCE.html" target="_blank" style="font-size: 18px; color: #0000ee;">Click Here..</a> </p>
                                </div>
                                <h4>SCSS files</h4>
                                <div class="code-highlight " data-label="">
                                    <span class="js-copy-to-clipboard copy-code">copy</span> <pre><code class="language-markup js-code">

    &lt;!-- Variables SCSS Syntax --&gt;

<span class="nv">$font-stack</span><span class="p">:</span>    <span class="n">Helvetica</span><span class="o">,</span> <span class="nb">sans-serif</span><span class="p">;</span>
<span class="nv">$primary-color</span><span class="p">:</span> <span class="mh">#333</span><span class="p">;</span>

<span class="nt">body</span> <span class="p">{</span>
  <span class="nl">font</span><span class="p">:</span> <span class="m">100%</span> <span class="nv">$font-stack</span><span class="p">;</span>
  <span class="nl">color</span><span class="p">:</span> <span class="nv">$primary-color</span><span class="p">;</span>
<span class="p">}</span>


   &lt;!-- Nesting SCSS Syntax --&gt;
   <span class="nt">nav</span> <span class="p">{</span>
  <span class="nt">ul</span> <span class="p">{</span>
    <span class="nl">margin</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
    <span class="nl">padding</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
    <span class="nl">list-style</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
  <span class="p">}</span>

  <span class="nt">li</span> <span class="p">{</span> <span class="nl">display</span><span class="p">:</span> <span class="n">inline-block</span><span class="p">;</span> <span class="p">}</span>

  <span class="nt">a</span> <span class="p">{</span>
    <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
    <span class="nl">padding</span><span class="p">:</span> <span class="m">6px</span> <span class="m">12px</span><span class="p">;</span>
    <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
  <span class="p">}</span>
<span class="p">}</span>
                                    </code></pre> </div>
                                </div>
                            <h4>Css files </h4>
                            <div class="code-highlight " data-label="">
                                <span class="js-copy-to-clipboard copy-code">copy</span> <pre><code class="language-markup js-code">

&lt;!-- Nesting CSS Syntax --&gt;
<span class="nt">body</span> <span class="p">{</span>
<span class="nl">font</span><span class="p">:</span> <span class="m">100%</span> <span class="n">Helvetica</span><span class="p">,</span> <span class="nb">sans-serif</span><span class="p">;</span>
<span class="nl">color</span><span class="p">:</span> <span class="m">#333</span><span class="p">;</span>
<span class="p">}</span>

&lt;!-- Nesting CSS Syntax --&gt;

<span class="nt">nav</span> <span class="nt">ul</span> <span class="p">{</span>
  <span class="nl">margin</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">padding</span><span class="p">:</span> <span class="m">0</span><span class="p">;</span>
  <span class="nl">list-style</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
<span class="p">}</span>

<span class="nt">nav</span> <span class="nt">li</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="n">inline-block</span><span class="p">;</span>
<span class="p">}</span>

<span class="nt">nav</span> <span class="nt">a</span> <span class="p">{</span>
  <span class="nl">display</span><span class="p">:</span> <span class="nb">block</span><span class="p">;</span>
  <span class="nl">padding</span><span class="p">:</span> <span class="m">6px</span> <span class="m">12px</span><span class="p">;</span>
  <span class="nl">text-decoration</span><span class="p">:</span> <span class="nb">none</span><span class="p">;</span>
<span class="p">}</span>
                              </code></pre> </div>
                            <!-- SCSS Classes Reference Ends -->


                        <!-- CSS Classes Reference Start -->
                        <div class="category-info" id="table-with-properties">
                            <h3 class="category-title"> CSS Classes Reference
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#table-with-properties">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped responsive-utilities">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>
                                            Extra small devices
                                            <small>Portrait phones (&lt;544px)</small>
                                        </th>
                                        <th>
                                            Small devices
                                            <small>Landscape phones (≥544px - &lt;768px)</small>
                                        </th>
                                        <th>
                                            Medium devices
                                            <small>Tablets (≥768px - &lt;992px)</small>
                                        </th>
                                        <th>
                                            Large devices
                                            <small>Desktops (≥992px - &lt;1200px)</small>
                                        </th>
                                        <th>
                                            Extra large devices
                                            <small>Desktops (≥1200px)</small>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><code>.hidden-xs-down</code></th>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-sm-down</code></th>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-md-down</code></th>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-lg-down</code></th>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-visible">Visible</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-xl-down</code></th>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-xs-up</code></th>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-sm-up</code></th>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-md-up</code></th>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-lg-up</code></th>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-hidden">Hidden</td>
                                        <td class="is-hidden">Hidden</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>.hidden-xl-up</code></th>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-visible">Visible</td>
                                        <td class="is-hidden">Hidden</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Ends CSS Classes Reference -->
                            <div class="category-info" id="plugins">
                                <h3 class="category-title"> Plugins
                                    <!-- Fragment Identifier -->
                                    <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#table-with-properties">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <!-- End of Fragment Identifier -->
                                </h3>
                                <!-- Table -->
                                <table class="table table-bordered table-striped">
                                    <thead class="header-table">
                                    <tr>
                                        <th>Plugins Name</th>
                                        <th>Plugins page use</th>
                                        <th>Plugins css</th>
                                        <th>customize js</th>
                                        <th>Link</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Ace-editor</td>
                                        <td class="page-link-plugin">ace-editor.html</td>
                                        <td class="text-center bold">____</td>
                                        <td class="text-center bold">____</td>
                                        <td>
                                            <a href="http://alloyui.com/versions/1.5.x/tutorials/ace-editor/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Animation</td>
                                        <td class="page-link-plugin">animation.html</td>
                                        <td class="text-center bold">style.css</td>
                                        <td>assets/pages/animation.js</td>
                                        <td>
                                            <a href="https://daneden.github.io/animate.css/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Calender</td>
                                        <td class="page-link-plugin">full-calender.html</td>
                                        <td class="text-center bold">fullcalendar.css</td>
                                        <td>assets/pages/animation.js</td>
                                        <td>
                                            <a href="assets/pages/calendar.js" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Charts</td>
                                        <td class="page-link-plugin">chartjs.html</td>
                                        <td class="text-center bold">c3.css</td>
                                        <td>chart-chartjs.js</td>
                                        <td>
                                            <a href="http://ubold.coderthemes.com" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ck-Editor</td>
                                        <td class="page-link-plugin">ck-editor.html</td>
                                        <td class="text-center bold">editor.css</td>
                                        <td>assets/pages/ckeditor-custom.js</td>
                                        <td>
                                            <a href="http://ckeditor.com/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Color-Picker</td>
                                        <td class="page-link-plugin">form-elements-advance.html</td>
                                        <td class="text-center bold">spectrum.css</td>
                                        <td>assets/pages/advance-form.js</td>
                                        <td>
                                            <a href="http://ckeditor.com/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Count Down</td>
                                        <td class="page-link-plugin">coming-soon.html</td>
                                        <td class="text-center bold">___</td>
                                        <td>assets/pages/countdown.js</td>
                                        <td>
                                            <a href="http://hilios.github.io/jQuery.countdown/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Data-Table</td>
                                        <td class="page-link-plugin">data-table.html</td>
                                        <td class="text-center bold">buttons.dataTables.min.css</td>
                                        <td>assets/pages/data-table.js</td>
                                        <td>
                                            <a href="https://datatables.net/examples/styling/bootstrap4.html" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Date Picker</td>
                                        <td class="page-link-plugin">form-elements-advance.html</td>
                                        <td class="text-center bold">bootstrap-material-datetimepicker.css</td>
                                        <td>assets/pages/advance-form.js</td>
                                        <td>
                                            <a href="http://t00rk.github.io/bootstrap-material-datetimepicker/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>E-Charts</td>
                                        <td class="page-link-plugin">echart.html</td>
                                        <td class="text-center bold"></td>
                                        <td>assets/pages/echart.js</td>
                                        <td>
                                            <a href="https://ecomfe.github.io/echarts/index-en.html" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Edit-Table</td>
                                        <td class="page-link-plugin">editable-table.html</td>
                                        <td class="text-center bold">____</td>
                                        <td>assets/pages/editable.js</td>
                                        <td>
                                            <a href="http://markcell.github.io/jquery-tabledit/#examples" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>File-Upload</td>
                                        <td class="page-link-plugin">file-upload.html</td>
                                        <td class="text-center bold">dropzone.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="http://www.dropzonejs.com/#server-side-implementation" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Foo-Table</td>
                                        <td class="page-link-plugin">foo-table.html</td>
                                        <td class="text-center bold">footable.standalone.min.css</td>
                                        <td>assets/pages/foo-table.js</td>
                                        <td>
                                            <a href="http://fooplugins.github.io/FooTable/docs/getting-started.html#examples" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Form-Mask</td>
                                        <td class="page-link-plugin">form-mask.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/form-mask.js</td>
                                        <td>
                                            <a href="https://github.com/igorescobar/jQuery-Mask-Plugin" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Forms-Wizard-Validation</td>
                                        <td class="page-link-plugin">forms-validation.html</td>
                                        <td class="text-center bold">jquery.steps.css</td>
                                        <td>assets/pages/form-validation.js</td>
                                        <td>
                                            <a href="https://github.com/igorescobar/jQuery-Mask-Plugin" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gallery</td>
                                        <td class="page-link-plugin">gallery.html</td>
                                        <td class="text-center bold">lightgallery.css</td>
                                        <td>assets/pages/gallery.js</td>
                                        <td>
                                            <a href="http://sachinchoolur.github.io/lightGallery/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Grid Stack</td>
                                        <td class="page-link-plugin">gridstack.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/gridstack.js</td>
                                        <td>
                                            <a href="http://troolee.github.io/gridstack.js/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>High lighter</td>
                                        <td class="page-link-plugin">All Pages</td>
                                        <td class="text-center bold">shThemeDefault.css</td>
                                        <td>assets/pages/gridstack.js</td>
                                        <td>
                                            <a href="http://alexgorbatchev.com/SyntaxHighlighter/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Image-Crop</td>
                                        <td class="page-link-plugin">image-cropper.html</td>
                                        <td class="text-center bold">cropper.css</td>
                                        <td>assets/pages/croper.js</td>
                                        <td>
                                            <a href="https://github.com/fengyuanchen/cropper" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Isotope</td>
                                        <td class="page-link-plugin">landing-page.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/landing-page.js</td>
                                        <td>
                                            <a href="http://isotope.metafizzy.co/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jq Pagination</td>
                                        <td class="page-link-plugin">other.html</td>
                                        <td class="text-center bold">jqpagination.css</td>
                                        <td>assets/pages/other.js</td>
                                        <td>
                                            <a href="http://beneverard.github.io/jqPagination/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jquery-Fab</td>
                                        <td class="page-link-plugin">button-fab.html</td>
                                        <td class="text-center bold">jquery-fab.css</td>
                                        <td>assets/pages/button-fab.js</td>
                                        <td>
                                            <a href="https://github.com/jeffersonrpn/jquery-fab" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Light-Box</td>
                                        <td class="page-link-plugin">gallery.html</td>
                                        <td class="text-center bold">lightbox.css</td>
                                        <td>assets/pages/gallery.js</td>
                                        <td>
                                            <a href="http://fancybox.net/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Light-Box2</td>
                                        <td class="page-link-plugin">gallery.html</td>
                                        <td class="text-center bold">lightbox.css</td>
                                        <td>assets/pages/gallery.js</td>
                                        <td>
                                            <a href="http://lokeshdhakar.com/projects/lightbox2/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>list</td>
                                        <td class="page-link-plugin">list.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/list-custom.js</td>
                                        <td>
                                            <a href="https://h5bp.github.io/Effeckt.css/#0" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>List-Scroll</td>
                                        <td class="page-link-plugin">list.html</td>
                                        <td class="text-center bold">stroll.css</td>
                                        <td>assets/pages/list-custom.js</td>
                                        <td>
                                            <a href="http://lab.hakim.se/scroll-effects/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Map-Google</td>
                                        <td class="page-link-plugin">map-google.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/google-maps.js</td>
                                        <td>
                                            <a href="http://hpneo.github.io/gmaps/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Map-Vector</td>
                                        <td class="page-link-plugin">map-vector.html</td>
                                        <td class="text-center bold">jquery-jvectormap.css</td>
                                        <td>assets/pages/map-vector.js</td>
                                        <td>
                                            <a href="http://jvectormap.com/maps/world/africa/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Max-length</td>
                                        <td class="page-link-plugin">form-elements-advance.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/advance-form.js</td>
                                        <td>
                                            <a href="http://codepen.io/oriadam/pen/QEQGjq" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Modal</td>
                                        <td class="page-link-plugin">modal.html</td>
                                        <td class="text-center bold">component.css</td>
                                        <td>assets/pages/modal.js</td>
                                        <td>
                                            <a href="https://tympanus.net/Development/ModalWindowEffects/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Multi-select</td>
                                        <td class="page-link-plugin">form-elements-advance.html</td>
                                        <td class="text-center bold">bootstrap-multiselect.css</td>
                                        <td>assets/pages/advance-form.js</td>
                                        <td>
                                            <a href="http://loudev.com/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nestable</td>
                                        <td class="page-link-plugin">nestable.html</td>
                                        <td class="text-center bold">nestable.css</td>
                                        <td>assets/pages/nestable.js</td>
                                        <td>
                                            <a href="#!" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Notification</td>
                                        <td class="page-link-plugin">notification.html</td>
                                        <td class="text-center bold">notification.css</td>
                                        <td>assets/pages/notification.js</td>
                                        <td>
                                            <a href="http://bootstrap-notify.remabledesigns.com/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Pricing</td>
                                        <td class="page-link-plugin">pricing.html</td>
                                        <td class="text-center bold">style.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="https://codyhouse.co/demo/pricing-tables/index.html" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Radial</td>
                                        <td class="page-link-plugin">pricing.html</td>
                                        <td class="text-center bold">style.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="#!" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Range-Slider</td>
                                        <td class="page-link-plugin">range-slider.html</td>
                                        <td class="text-center bold">bootstrap-slider.css</td>
                                        <td>assets/pages/range-slider.js</td>
                                        <td>
                                            <a href="http://seiyria.com/bootstrap-slider/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rating</td>
                                        <td class="page-link-plugin">rating.html</td>
                                        <td class="text-center bold">rating.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="http://antenna.io/demo/jquery-bar-rating/examples/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Responsive-Table</td>
                                        <td class="page-link-plugin">responsive-table.html</td>
                                        <td class="text-center bold">rwd-table.min.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="http://gergeo.se/RWD-Table-Patterns/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Search</td>
                                        <td class="page-link-plugin">responsive-table.html</td>
                                        <td class="text-center bold">rwd-table.min.css</td>
                                        <td>assets/js/main.js</td>
                                        <td>
                                            <a href="https://github.com/ded/bonzo" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Select2</td>
                                        <td class="page-link-plugin">form-elements-advance.html</td>
                                        <td class="text-center bold">select2.min.css</td>
                                        <td>assets/pages/advance-form.js</td>
                                        <td>
                                            <a href="https://select2.github.io/examples.html" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Slim Scroll</td>
                                        <td class="page-link-plugin">menu.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/js/menu.js</td>
                                        <td>
                                            <a href="http://areaaperta.com/nicescroll/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sortable</td>
                                        <td class="page-link-plugin">draggable.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/js/menu.js</td>
                                        <td>
                                            <a href="" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sticky</td>
                                        <td class="page-link-plugin">sticky.html</td>
                                        <td class="text-center bold">jquery.postitall.css</td>
                                        <td>assets/pages/sticky.js</td>
                                        <td>
                                            <a href="http://www.jqueryscript.net/other/jQuery-Plugin-For-Sticky-Draggable-Notes-On-The-Web-Post-It-All.html" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Summer Note</td>
                                        <td class="page-link-plugin">email.html</td>
                                        <td class="text-center bold">summernote.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="http://summernote.org/getting-started/#requires-html5-doctype" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Summer Note</td>
                                        <td class="page-link-plugin">email.html</td>
                                        <td class="text-center bold">summernote.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="http://summernote.org/getting-started/#requires-html5-doctype" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sweet Alert</td>
                                        <td class="page-link-plugin">modal.html</td>
                                        <td class="text-center bold">sweetalert.css</td>
                                        <td>assets/pages/modal.js</td>
                                        <td>
                                            <a href="https://github.com/pedant/sweet-alert-dialog" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Switchery</td>
                                        <td class="page-link-plugin">form-elements-advance.html</td>
                                        <td class="text-center bold">switchery.min.css</td>
                                        <td>assets/pages/advance-form.js</td>
                                        <td>
                                            <a href="http://abpetkov.github.io/switchery/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tags</td>
                                        <td class="page-link-plugin">form-elements-advanc.html</td>
                                        <td class="text-center bold">bootstrap-tagsinput.css</td>
                                        <td>assets/pages/advance-form.js</td>
                                        <td>
                                            <a href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Task-Detail</td>
                                        <td class="page-link-plugin">task-detailed.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/task-detail.js</td>
                                        <td>
                                            <a href="http://hilios.github.io/jQuery.countdown/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TimeLine</td>
                                        <td class="page-link-plugin">timeline.html</td>
                                        <td class="text-center bold">style.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="#!" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Todo</td>
                                        <td class="page-link-plugin">todo.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/plugins/todo/js/todo.js</td>
                                        <td>
                                            <a href="#!" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tour</td>
                                        <td class="page-link-plugin">tour.html</td>
                                        <td class="text-center bold">enjoyhint.css</td>
                                        <td>assets/pages/tour.js</td>
                                        <td>
                                            <a href="http://xbsoftware.github.io/enjoyhint/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tree-View</td>
                                        <td class="page-link-plugin">treeview.html</td>
                                        <td class="text-center bold">treeview.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="https://www.jstree.com/" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Waves</td>
                                        <td class="page-link-plugin">button.html</td>
                                        <td class="text-center bold">waves.min.css</td>
                                        <td>__</td>
                                        <td>
                                            <a href="http://fian.my.id/Waves/#examples" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wysiwyg-Editor</td>
                                        <td class="page-link-plugin">wysiwyg-editor.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/wysiwyg-editor.js</td>
                                        <td>
                                            <a href="https://www.froala.com/wysiwyg-editor" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>X-Editable</td>
                                        <td class="page-link-plugin">x-editable.html</td>
                                        <td class="text-center bold">__</td>
                                        <td>assets/pages/xeditable.js</td>
                                        <td>
                                            <a href="http://coderthemes.com/uplon_1.4/light/form-xeditable.html" class="btn-sm">View Resource</a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                                <!-- End of Table -->
                                </div>
                            <!--Plugins Ends-->
                        <!-- Browser support Start -->
                        <div class="category-info " id="browser-support">
                            <h3 class="category-title"> Browser support
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#browser-support">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <h4 class="category-description">Specifically, we support the latest versions of the following browsers and platforms. On Windows, we support Internet Explorer 9+. More specific support information is provided below.</h4>
                        </div>
                        <!-- End of Browser support -->
                        <!-- Browser Support Start-->
                        <ul class="browsers ">
                            <li class="browser-recommended">
                                <div class="browser-icon">
                                    <svg enable-background="new 0 0 515.91 728.5" height="64" id="Layer_2" viewBox="0 0 512.00003 512" width="64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
											<defs id="defs7" />
											<g id="g6625" transform="translate(-141.91412,-143.63566)">
												<path d="m 397.91414,530.64366 c -26.00001,0 -49.66401,-7.008 -71.00801,-20.992 -21.344,-14 -37.344,-32 -48,-54 L 173.91412,271.63565 c -22,39.344 -32,83.344 -32,128.00001 0,64 20.832,119.84 62.496,167.50401 41.66401,47.664 93.50401,76.16 155.50401,85.504 l 74.25601,-128.49601 c -7.472,2.192 -19.936,6.496 -36.256,6.496 z"
												id="path5-5" style="fill:#4aae48" />
												<path d="m 317.41813,296.13165 c 23.648,-18.32 50.496,-24.496 80.49601,-24.496 4,0 220.00001,0 220.00001,0 -22.672,-38.656 -53.504,-71.32801 -92.49601,-94.00001 -39.008,-22.656 -81.504,-34 -127.504,-34 -40.00001,0 -77.34401,8.496 -112.00001,25.504 -34.672,16.992 -66.75201,41.744 -90.25601,73.50401 l 74.25601,124.992 c 7.328,-28.656 23.824,-53.152 47.504,-71.504 z"
												id="path7-1" style="fill:#ea3939" />
												<path d="M 634.66615,303.63565 H 485.91414 c 26,26 43.008,59.344 43.008,96.00001 0,27.344 -7.664,52.336 -23.008,75.008 l -104.992,180.99201 c 70,-0.672 129.664,-26 179.00801,-76 49.312,-50.00001 73.984,-110.00001 73.984,-180.00001 0,-32.65601 -5.504,-67.00801 -19.248,-96.00001 z"
												id="path9-7" style="fill:#fed14b" />
												<circle cx="16" cy="16" id="circle11" r="6" style="fill:#188fd1" transform="matrix(16.000001,0,0,16.000001,141.91412,143.63564)" />
											</g>
										</svg>
                                </div>
                                <h4 class="browser-title"> Chrome </h4>
                            </li>
                            <li>
                                <div class="browser-icon">
                                    <svg enable-background="new 0.907 -0.205 32 32" height="64" viewBox="0.907 -0.205 32 32" width="64" xmlns="http://www.w3.org/2000/svg">
                                        <path clip-rule="evenodd" d="M16.907-.205c-8.836 0-16 7.164-16 16s7.164 16 16 16 16-7.164 16-16-7.164-16-16-16zm0 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13z" fill="#26A6D1" fill-rule="evenodd" />
                                        <path clip-rule="evenodd" d="M25.221 7.48l-6.192 10.436-4.242-4.243 10.434-6.193z" fill="#E2574C" fill-rule="evenodd" />
                                        <path clip-rule="evenodd" d="M8.594 24.11l10.435-6.193-4.242-4.243-6.193 10.436z" fill="#E4E7E7" fill-rule="evenodd" />
                                    </svg>
                                </div>
                                <h4 class="browser-title"> Safari </h4>
                            </li>
                            <li>
                                <div class="browser-icon">
                                    <svg enable-background="new 0 0 32 32" height="64" id="Layer_1" viewBox="0 0 32 32" width="64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											<g>
												<path d="M26.737,4.375c2.842,2.917,4.264,6.75,4.264,11.5c0,4.334-1.422,8.104-4.264,11.312   C23.895,30.396,20.295,32,15.938,32c-4.316,0-7.885-1.604-10.706-4.812C2.41,23.979,1,20.209,1,15.875   c0-4.75,1.39-8.583,4.171-11.5C7.95,1.459,11.54,0,15.938,0C20.295,0,23.895,1.459,26.737,4.375z M21.291,11.062   c-0.124-1.291-0.373-2.552-0.747-3.781c-0.373-1.229-0.944-2.177-1.711-2.844c-0.769-0.666-1.733-1-2.895-1   c-1.162,0-2.116,0.323-2.863,0.969C12.328,5.053,11.778,6,11.426,7.25S10.835,9.75,10.71,11c-0.124,1.25-0.187,2.771-0.187,4.562   c0,1.125,0.021,2.073,0.062,2.844c0.04,0.771,0.113,1.709,0.218,2.812c0.103,1.104,0.27,2.031,0.498,2.781   c0.228,0.75,0.538,1.49,0.934,2.219c0.394,0.729,0.902,1.281,1.524,1.656s1.348,0.562,2.179,0.562c0.829,0,1.565-0.188,2.21-0.562   c0.643-0.375,1.161-0.927,1.556-1.656C20.098,25.49,20.42,24.75,20.669,24s0.436-1.677,0.56-2.781   c0.125-1.104,0.197-2.052,0.219-2.844c0.02-0.791,0.03-1.729,0.03-2.812C21.478,13.854,21.416,12.354,21.291,11.062z"
												fill="#EA3939" />
											</g>
											<g/>
											<g/>
											<g/>
											<g/>
											<g/>
											<g/>
										</svg>
                                </div>
                                <h4 class="browser-title"> Opera </h4>
                            </li>
                            <li>
                                <div class="browser-icon">
                                    <svg enable-background="new -0.002 -0.501 32 31" height="64" viewBox="-0.002 -0.501 32 31" width="64" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.998-.501c8.284 0 15 6.715 15 15 0 8.283-6.716 15-15 15s-15-6.717-15-15c0-8.286 6.716-15 15-15z" fill="#2394BC" />
                                        <path d="M18.562 30.274c7.614-1.229 13.437-7.814 13.437-15.775l-.146.181c.228-1.513.188-2.861-.125-4.037-.112.871-.234 1.397-.357 1.608-.001-.068-.018-.976-.307-2.243-.137-.924-.338-1.793-.616-2.596.068.368.108.675.128.953-1.162-3.118-4.023-6.957-11.072-6.867 0 0 2.479.262 3.646 2.029 0 0-1.193-.285-2.095.152 1.099.438 2.052.896 2.863 1.374l.07.043c.208.125.385.253.573.38 1.498 1.052 2.888 2.553 2.782 4.489-.323-.51-.753-.844-1.304-1.012.679 2.66.746 4.857.197 6.59-.377-1.154-.724-1.846-1.033-2.09.431 3.566-.15 6.203-1.739 7.922.302-1.049.422-1.908.354-2.586-1.867 2.822-3.991 4.281-6.372 4.371-.941-.008-1.83-.15-2.666-.426-1.228-.415-2.339-1.124-3.328-2.13 1.544.129 2.954-.139 4.195-.772l2.033-1.332-.008-.006c.264-.1.512-.092.754.021.496-.068.67-.334.504-.783-.24-.334-.603-.637-1.069-.904-1.017-.531-2.079-.447-3.187.26-1.055.6-2.07.576-3.058-.062-.647-.447-1.272-1.049-1.876-1.801l-.24-.355c-.113.852.015 1.945.398 3.291l.008.018-.008-.016c-.384-1.346-.511-2.442-.398-3.293v-.008c.029-.744.337-1.154.924-1.246l-.249-.021.251.021c.663.061 1.424.213 2.282.463.144-.828-.045-1.695-.564-2.584v-.016c.806-.752 1.521-1.299 2.132-1.648.271-.145.429-.365.481-.662l.022-.016.008-.008.03-.029c.158-.236.105-.426-.165-.594-.565.031-1.131-.008-1.695-.121l-.008.023c-.233-.068-.527-.275-.889-.625l-.927-.912-.278-.219v.029h-.008l.008-.037-.053-.055.075-.053c.128-.691.339-1.285.64-1.795l.068-.061c.302-.502.881-1.041 1.732-1.617-1.582.197-3.013.91-4.285 2.143-1.055-.387-2.305-.305-3.744.25l-.173.132-.013.007.188-.138.008-.008c-.905-.416-1.515-1.611-1.809-3.564-1.152 1.141-1.71 3.178-1.673 6.119l-.33.499-.085.058-.017.016-.007.007-.016.033c-.175.274-.416.688-.72 1.244-.437.786-.584 1.446-.627 2.021l-.004.007.002.019-.014.151.025-.04c.003.133.006.267.04.387l.934-.768c-.339.859-.564 1.77-.678 2.736l-.027.442-.293-.335c0 3.428 1.088 6.597 2.924 9.201l.055.086.088.105c1.32 1.813 3.006 3.338 4.958 4.464 1.403.831 2.911 1.413 4.519 1.759l.331.074c.333.064.674.112 1.016.155.253.033.506.065.762.087l.34.039.483.003.525.026.418-.021.689-.034c.409-.028.812-.073 1.212-.131l.243-.036zm-9.409-16.75h0zm19.527-2.741l-.007.131.005-.132.002.001z"
                                              fill="#EC8840" />
                                    </svg>
                                </div>
                                <h4 class="browser-title"> FireFox </h4>
                            </li>
                            <li class="browser-partial">
                                <div class="browser-icon">
                                    <svg enable-background="new 0.001 -0.001 31.996 29.997" height="64" viewBox="0.001 -0.001 31.996 29.997" width="64" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.841 17.972h8.032c.074-.576.147-1.162.116-1.758-.321-6.163-4.144-11.568-9.642-13.413l.423.084s10.027-4.359 6.644 5.447l.412.677s3.089-7.542-1.688-8.789c-3.909-1.02-9.686 1.814-9.686 1.814l.213.042c-.359-.025-.721-.042-1.088-.042-7.146 0-13.078 4.845-14.215 11.453.81-.907 3.712-4.255 6.979-6.352 0 0-5.566 4.76-7.177 8.671 0 0-2.064 3.502-2.742 6.122-.41 1.588-1.463 7.283 2.742 7.938 4.376.68 7.829-1.551 7.829-1.551l-.084-.047c1.994 1.018 4.261 1.598 6.667 1.598 6.375 0 11.779-4.26 13.68-9.855h-8.242c-1.123 2.213-3.112 3.449-5.467 3.449-3.123 0-5.413-1.84-6.008-5.488h12.302zm-13.819 9.807s-2.421 1.18-4.463 1.236c-6.243-.057-1.565-8.506-1.565-8.506l-.003-.009c1.107 3.051 3.264 5.619 6.048 7.291l-.017-.012zm7.556-19.226c3.617 0 5.309 2.446 5.718 5.45h-11.697c.635-2.98 2.702-5.45 5.979-5.45z"
                                              fill="#26A6D1" />
                                    </svg>
                                </div>
                                <h4 class="browser-title"> IE 9+ </h4>
                            </li>
                        </ul>
                        <!-- End of Browser Support -->

                        <!-- Category FAQ Info -->
                        <div class="category-info " id="faq">
                            <h3 class="category-title"> FAQ
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#faq">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <h4 class="category-description">Begin typing your question. If we don't have an answer for it in our FAQ, please leave us a message on our contact page.</h4>
                        </div>
                        <!-- End of Caregory FAQ Info -->
                        <!-- Faq Start-->
                        <div class="faq-filter js-faq-filter" data-target="#my-faq">
                            <input type="text" placeholder="How to ..."> </div>
                        <ul class="faq js-faq" id="my-faq">
                            <li class="faq-item">
                                <h4 class="faq-question"> What is
                                    <span class="faq-keyword">Guru Able</span>? </h4>
                                <div class="faq-answer">Guru Able is responsive admin template/dashboard which useful for your complete entire projects like CRM system - Task System - User Management System - Social Dashboard etc. Without any trouble Guru Able gives the perfect outcome with tons of ready made plugins which helps you at every step while creating any project.</div>
                            </li>
                            <li class="faq-item">
                                <h4 class="faq-question"> Why
                                    <span class="faq-keyword">choose</span>Guru Able? </h4>
                                <div class="faq-answer">Guru Able built using bootstrap's latest version 4 which have complete compatibility on bootstrap4. It is fully crafted for every one's need and its fullfilled those need too. Tons of Plugins, Forms, Charts, Tables, Custom Pages gives extra smoothness in project.</div>
                            </li>
                            <li class="faq-item">
                                <h4 class="faq-question"> Licence 
                                    <span class="faq-keyword">terms</span>? </h4>
                                <div class="faq-answer"> Guru Able comes with single license usage and support for every single purchase. If you want to use Guru Able for multiple project you must buy the extra licence for that. </div>
                            </li>
                            <li class="faq-item">
                                <h4 class="faq-question"> What about Item
                                    <span class="faq-keyword">Support</span>? </h4>
                                <div class="faq-answer"> We only support those purchaser who purchased Guru Able. 6 months included support comes with every single purchase of Guru Able.</div>
                            </li>
                            <li class="faq-item">
                                <h4 class="faq-question"> What is Support
                                    <span class="faq-keyword">Turnaround time ?</span></h4>
                                <div class="faq-answer">When you comment or submit the ticket for support. Our team takes it very seriously and respond it within a Half or Full day.</div>
                            </li>
                            <li class="faq-item">
                                <h4 class="faq-question"> How i rate the 
                                    <span class="faq-keyword">Guru Able ?</span></h4>
                                <div class="faq-answer">It just a simple. Go to your account. Then check your download section where you found Guru Able Template. Click on start ratings. Simple !!!</div>
                            </li>
                        </ul>
                        <!-- End of Faq -->
                        <!-- Change Log -->
                        <div class="category-info " id="change_log">
                            <h3 class="category-title"> Version Change Log
                                <!-- Fragment Identifier -->
                                <a class="fragment-identifier js-fragment-identifier fragment-identifier-scroll" href="#faq">
                                    <i class="fa fa-link"></i>
                                </a>
                                <!-- End of Fragment Identifier -->
                            </h3>
                            <h4 class="category-description">Detailed version change log describe below.</h4>
							<pre>
						
<strong>v1.0</strong>
-----------

<strong>27-10-2017 - v1.0 Release </strong>


							</pre>
                        </div>
                        <!-- End of change log -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of One Page Content -->
</div>
<script src="{{url('assets/documentation/js/all.js')}}"></script>
<script src="{{url('assets/documentation/js/custom.js')}}"></script>
</body>
</html>
















































{{--<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>--}}