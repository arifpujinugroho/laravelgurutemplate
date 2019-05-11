@extends('layout.master')

@section('title')
GURU Able - Premium Admin Template 
@endsection

@section('header')
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/dashboard/horizontal-timeline/css/style.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/dashboard/amchart/css/amchart.css')}}">
    <!-- Calender css -->
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/widget/calender/pignose.calendar.min.css')}}">
@endsection

@section('content')
<div class="page-body">
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card amount-card o-hidden">
                <div class="card-block">
                    <h2 class="f-w-400">$23,567</h2>
                    <p class="text-muted f-w-600 f-16"><span
                            class="text-c-blue">Amount</span> processed</p>
                </div>
                <canvas id="amount-processed" height="100"></canvas>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card amount-card o-hidden">
                <div class="card-block">
                    <h2 class="f-w-400">$14,552</h2>
                    <p class="text-muted f-w-600 f-16"><span class="text-c-pink">Amount</span> spent</p>
                </div>
                <canvas id="amount-spent" height="100"></canvas>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card amount-card o-hidden">
                <div class="card-block">
                    <h2 class="f-w-400">$31,156</h2>
                    <p class="text-muted f-w-600 f-16"><span class="text-c-yellow">Profit</span>
                        processed</p>
                </div>
                <canvas id="profit-processed" height="100"></canvas>
            </div>
        </div>

        <!-- Email Sent Start -->
        <div class="col-md-12 col-xl-12">
            <div class="card email-sent-card">
                <div class="card-header ">
                    <div class="card-header-left ">
                        <h5>Product sale</h5>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div id="email-sent" style="max-width:100%;height:400px;"></div>
                </div>
            </div>
        </div>
        <!-- Email Sent End -->

        <!-- Reviews Start -->
        <div class="col-md-6 col-xl-5">
            <div class="card review-resourse">
                <div class="card-header">
                    <div class="card-header-left">
                        <h5>Traffic resources</h5>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block p-t-10 p-b-10">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>
                                        <h6>Unique visitors</h6></td>
                                    <td>
                                        <span class="f-18 text-muted">4,562</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="visitor1">0,5,0,5,7,6,5.5,10,8</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>Pageviews</h6></td>
                                    <td>
                                        <span class="f-18 text-muted">679</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="visitor2">0,5,0,5,7,6,5.5,10,8</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>Page/visit</h6></td>
                                    <td>
                                        <span class="f-18 text-muted">2,516</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="visitor3">0,5,0,5,7,6,5.5,10,8</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>Bounce rate</h6></td>
                                    <td>
                                        <span class="f-18 text-muted">67%</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="visitor4">0,5,0,5,7,6,5.5,10,8</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6>Visit</h6></td>
                                    <td>
                                        <span class="f-18 text-muted">845</span>
                                    </td>
                                    <td class="text-right">
                                        <span class="visitor5">0,5,0,5,7,6,5.5,10,8</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-7">
            <div class="card review-task">
                <div class="card-header">
                    <div class="card-header-left">
                        <h5>Reviews</h5>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td><a href="#!"><img class="img-rounded" src="assets/images/widget/user-3.png" alt="chat-user"></a>
                                    </td>
                                    <td>
                                        <h6>Josephin Doe</h6>
                                        <p class="text-muted">Lorem ipsum dolor</p>
                                    </td>
                                    <td>
                                        <p class="review-date">04 Jan</p>
                                        <p class="">10:45 AM</p>
                                    </td>
                                    <td>
                                        <a href="#!"><i class="icofont icofont-star  f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><img class="img-rounded" src="assets/images/widget/user-2.png" alt="chat-user"></a>
                                    </td>
                                    <td>
                                        <h6>Josephin Doe</h6>
                                        <p class="text-muted">Lorem ipsum dolor sit amet</p>
                                    </td>
                                    <td>
                                        <p class="review-date">08 Jan</p>
                                        <p class="">1:15 PM</p>
                                    </td>
                                    <td>
                                        <a href="#!"><i class="icofont icofont-star  f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-c-default"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><img class="img-rounded" src="assets/images/widget/user-3.png" alt="chat-user"></a>
                                    </td>
                                    <td>
                                        <h6>Luciano Durk</h6>
                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur</p>
                                    </td>
                                    <td>
                                        <p class="review-date">14 Jan</p>
                                        <p class="">12:25 PM</p>
                                    </td>
                                    <td>
                                        <a href="#!"><i class="icofont icofont-star  f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><img class="img-rounded" src="assets/images/widget/user-4.png" alt="chat-user"></a>
                                    </td>
                                    <td>
                                        <h6>Luciano Durk</h6>
                                        <p class="text-muted">Lorem ipsum amet, consectetur</p>
                                    </td>
                                    <td>
                                        <p class="review-date">04 Feb</p>
                                        <p class="">10:45 AM</p>
                                    </td>
                                    <td>
                                        <a href="#!"><i class="icofont icofont-star  f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-c-blue"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                        <a href="#!"><i class="icofont icofont-star f-18 text-default"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reviews End -->

        <!-- Balance Start -->
        <div class="col-md-12 col-xl-4">
            <div class="card balance-card">
                <div class="card-header ">
                    <div class="card-header-left ">
                        <h5>Your balance</h5>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block">
                    <h2>$167.20</h2>
                    <button class="btn btn-primary m-t-15 m-b-20">Recharge now</button>
                    <p class="text-muted f-15">Payment of next month</p>
                    <h4 class="text-muted f-18 f-w-600">$167.20</h4>
                    <div class="progress m-t-30">
                        <div class="progress-bar" role="progressbar" aria-valuemin="1" aria-valuemax="100" style="width:60% "></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card feed-card">
                        <div class="card-block p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-c-blue border-feed">
                                    <i class="icofont icofont-users-alt-4 f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-30 p-b-30">
                                        <h2 class="f-w-400 m-b-10">2,672</h2>
                                        <p class="text-muted m-0">Last week <span class="text-c-blue f-w-600">user's</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card feed-card">
                        <div class="card-block p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-c-green border-feed">
                                    <i class="icofont icofont-wallet f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-30 p-b-30">
                                        <h2 class="f-w-400 m-b-10">$6,391</h2>
                                        <p class="text-muted m-0">Total <span class="text-c-green f-w-600">earning</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card feed-card">
                        <div class="card-block p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-c-pink border-feed">
                                    <i class="icofont icofont-chart-flow-alt-1 f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-30 p-b-30">
                                        <h2 class="f-w-400 m-b-10">3,619</h2>
                                        <p class="text-muted m-0">New <span class="text-c-pink f-w-600">Order Recieved</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card feed-card">
                        <div class="card-block p-t-0 p-b-0">
                            <div class="row">
                                <div class="col-4 bg-c-yellow border-feed">
                                    <i class="icofont icofont-users-alt-3 f-40"></i>
                                </div>
                                <div class="col-8">
                                    <div class="p-t-30 p-b-30">
                                        <h2 class="f-w-400 m-b-10">9,276</h2>
                                        <p class="text-muted m-0">Today <span class="text-c-yellow f-w-600">New Visitors</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Balance End -->

        <!-- Marketing Start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-header-left">
                        <h5>Marketing compnaigns</h5>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left "></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block marketing-card p-t-0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Companies</th>
                                    <th>Client</th>
                                    <th>Changes</th>
                                    <th colspan="3">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="6" class="marketing-header">Today</td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                        <div class="table-contain">
                                            <h6>FaceBook ads</h6>
                                            <p class="text-muted">6:00am- 8:00am</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted">Softtech</p>
                                    </td>
                                    <td>
                                        <i class="icofont icofont-bird text-c-green"></i>
                                        <p class="m-l-10 text-c-green">6.45%</p>
                                    </td>
                                    <td><span>$5132</span></td>
                                    <td>
                                        <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                                    </td>
                                    <td>
                                        <div class="dropdown-primary dropdown open">
                                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><i class="icofont icofont-social-youtube-play bg-youtube social-icon"></i></a>
                                        <div class="table-contain">
                                            <h6>Youtube Videos</h6>
                                            <p class="text-muted">6:00am- 8:00am</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted">Softtech</p>
                                    </td>
                                    <td>
                                        <i class="icofont icofont-bird text-c-green"></i>
                                        <p class="m-l-10 text-c-green">2.34%</p>
                                    </td>
                                    <td><span>$4257</span></td>
                                    <td>
                                        <button class="btn btn-default btn-bg-c-pink btn-outline-default btn-round btn-action">Closed</button>
                                    </td>
                                    <td>
                                        <div class="dropdown-primary dropdown open">
                                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><i class="icofont icofont-social-twitter bg-twiter social-icon"></i></a>
                                        <div class="table-contain">
                                            <h6>Twitter ads</h6>
                                            <p class="text-muted">6:00am- 8:00am</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted">Softtech</p>
                                    </td>
                                    <td>
                                        <i class="icofont icofont-bird text-c-pink"></i>
                                        <p class="m-l-10 text-c-pink">-3.45%</p>
                                    </td>
                                    <td><span>$5355</span></td>
                                    <td>
                                        <button class="btn btn-default btn-bg-c-blue btn-outline-default btn-round btn-action">Activate</button>
                                    </td>
                                    <td>
                                        <div class="dropdown-primary dropdown open">
                                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><i class="icofont icofont-brand-amazon bg-amazon social-icon"></i></a>
                                        <div class="table-contain">
                                            <h6>Amazon ads</h6>
                                            <p class="text-muted">6:00am- 8:00am</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted">Softtech</p>
                                    </td>
                                    <td>
                                        <i class="icofont icofont-bird text-c-green"></i>
                                        <p class="m-l-10 text-c-green">6.45%</p>
                                    </td>
                                    <td><span>$3365</span></td>
                                    <td>
                                        <button class="btn btn-default btn-bg-c-yellow btn-outline-default btn-round btn-action">Hold</button>
                                    </td>
                                    <td>
                                        <div class="dropdown-primary dropdown open">
                                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="marketing-header">Yesterday</td>
                                </tr>
                                <tr>
                                    <td><a href="#!"><i class="icofont icofont-social-facebook bg-facebook social-icon"></i></a>
                                        <div class="table-contain">
                                            <h6>FaceBook ads</h6>
                                            <p class="text-muted">6:00am- 8:00am</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted">Softtech</p>
                                    </td>
                                    <td>
                                        <i class="icofont icofont-bird text-c-pink"></i>
                                        <p class="m-l-10 text-c-pink">6.45%</p>
                                    </td>
                                    <td><span>$5645</span></td>
                                    <td>
                                        <button class="btn btn-default btn-bg-c-green btn-outline-default btn-round btn-action">Panding</button>
                                    </td>
                                    <td>
                                        <div class="dropdown-primary dropdown open">
                                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="b-b-default">
                                    <td><a href="#!"><i class="icofont icofont-social-dribbble bg-dribble social-icon"></i></a>
                                        <div class="table-contain">
                                            <h6>Youtube Videos</h6>
                                            <p class="text-muted">6:00am- 8:00am</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-muted">Softtech</p>
                                    </td>
                                    <td>
                                        <i class="icofont icofont-bird text-c-pink"></i>
                                        <p class="m-l-10 text-c-pink">2.34%</p>
                                    </td>
                                    <td><span>$4645</span></td>
                                    <td>
                                        <button class="btn btn-default btn-bg-c-pink btn-outline-default btn-round btn-action">Closed</button>
                                    </td>
                                    <td>
                                        <div class="dropdown-primary dropdown open">
                                            <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown"><i class="icofont icofont-brand-flikr text-muted"></i>
                                            </button>
                                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item waves-light waves-effect" href="#">Insert</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Update</a>
                                                <a class="dropdown-item waves-light waves-effect" href="#">Delete</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item waves-light waves-effect" href="#">disable</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row marketing-card-footer">
                        <div class="col-sm-9">
                            <div class="d-inline-block m-r-20">
                                <h6 class=" m-l-10 m-b-20 f-w-600 f-14">Last week status</h6>
                                <div class="tab-cont m-l-10">
                                    <span class="last-week-report" data-peity='{"innerRadius": 10, "radius": 16 }'>1,2,3,2</span>
                                    <p>56,345 <i class="icofont icofont-long-arrow-up text-c-green d-inline-block"></i><span class="text-c-green d-inline-block">( +15.70% )</span></p>
                                </div>
                            </div>
                            <div class="d-inline-block">
                                <h6 class=" m-l-10 m-b-20 f-w-600 f-14">Last month status</h6>
                                <div class="tab-cont m-l-10">
                                    <span class="last-month-report" data-peity='{"innerRadius": 10, "radius": 16 }'>1,3,4,2</span>
                                    <p>5,845 <i class="icofont icofont-long-arrow-down text-c-pink d-inline-block"></i><span class="text-c-pink d-inline-block">( +1.65% )</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right">
                            <button class="btn btn-primary"> View report</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Marketing End -->

        <!-- map & Chart Start -->
        <div class="col-md-12 col-xl-7">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-chart o-hidden">
                        <div class="card-block">
                            <h2 class="f-w-400 m-b-15">43,678K</h2>
                            <h5>Daily income</h5>
                            <h6 class="text-muted d-inline-block card-chart-right f-w-600"><i class="icofont icofont-long-arrow-up f-20 f-w-600"></i>34 %</h6>
                        </div>
                        <div id="realtimeupdate"></div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-left">
                                <h5>Revenue report</h5>
                            </div>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="icofont icofont-simple-left "></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-maximize full-card"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-minus minimize-card"></i>
                                    </li>
                                    <li>
                                        <i class="icofont icofont-refresh reload-card"></i>
                                    </li>
                                    <li><i class="icofont icofont-error close-card"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block p-0">
                            <div class="card-block-big revenue-report">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <h3 class="f-w-400">$5,763</h3>
                                    </div>
                                    <div class="col-lg-3">
                                        <canvas id="revenue-report" height="150"></canvas>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="revenue-card p-b-10">
                                            <span class="bg-c-blue"></span>
                                            <h6 class="text-muted d-inline-block m-l-20">
                                                This month</h6>
                                            <h6 class="d-inline-block m-l-20 f-w-600">
                                                $57,423</h6>
                                        </div>
                                        <div class="revenue-card b-t-default  p-t-10">
                                            <span class="bg-c-green m-t-10"></span>
                                            <h6 class="text-muted d-inline-block m-l-20">
                                                This month</h6>
                                            <h6 class="d-inline-block m-l-20 f-w-600">
                                                $48,689</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-5">
            <div class="card bg-c-pink card-map">
                <div class="card-header">
                    <div class="card-header-left">
                        <h5>Strongest location</h5>
                    </div>
                </div>
                <div class="card-block">
                    <h2 class="d-inline-block">New York <i class="icofont icofont-social-google-map f-35"></i></h2>
                    <h6>Store #45</h6>
                </div>
                <div id="world-map-markers" style="width:100%;height:385px;"></div>
            </div>
        </div>
        <!-- map & Chart End -->

    </div>
</div>
@endsection

@section('footer')
    <!-- Custom js -->
    <script type="text/javascript" src="{{url('assets/pages/dashboard/ecommerce-dashboard.min.js')}}"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="{{url('assets/pages/dashboard/amchart/js/amcharts.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/pages/dashboard/amchart/js/serial.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/pages/dashboard/amchart/js/light.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/pages/dashboard/amchart/js/custom-amchart.js')}}"></script>
    <!-- c3 chart js -->
    <script src="{{url('assets/bower_components/c3/js/c3.js')}}"></script>
    <!-- knob js -->
    <script src="{{url('assets/pages/chart/knob/jquery.knob.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/pages/widget/jquery.sparkline.js')}}"></script>

    <!-- peity Chart js -->
    <script src="{{url('assets/bower_components/peity/js/jquery.peity.js')}}"></script>
    <!-- am chart map -->
    <script src="{{url('assets/pages/widget/amchart/ammap.js')}}"></script>
    <script src="{{url('assets/pages/widget/amchart/worldLow.js')}}"></script>
    <script src="{{url('assets/pages/widget/amchart/light.js')}}"></script>
    <!-- Float Chart js -->
    <script src="{{url('assets/pages/chart/float/jquery.flot.js')}}"></script>
    <script src="{{url('assets/pages/chart/float/jquery.flot.categories.js')}}"></script>
    <script src="{{url('assets/pages/chart/float/jquery.flot.pie.js')}}"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{url('assets/bower_components/chart.js/js/Chart.js')}}"></script>

    <!-- Morris Chart js -->
    <script src="{{url('assets/bower_components/raphael/js/raphael.min.js')}}"></script>
    <script src="{{url('assets/bower_components/morris.js/js/morris.js')}}"></script>
@endsection