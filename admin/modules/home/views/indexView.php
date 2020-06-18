<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Home</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
    <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="public/css/slick.css" rel="stylesheet">
    <!-- Greendash styles -->
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/myStyle.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ">
    <!-- Preloader -->
    <?php 
        get_template_part('loadpage')
    ?>

    <!-- Overlays -->
    <!-- <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
    <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div> -->

    <!-- Sidebar Navigation Left -->
    <?php
        get_sidebar('admin')
    ?>

    <!-- Sidebar Right -->
    <?php
        get_sidebar('admin-right')
    ?>

    <!-- Main Content -->
    <main class="body-content">

        <!-- Navigation Bar -->
        <nav class="navbar ms-navbar">

            <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>


            <div class="logo-sn logo-sm ms-d-block-sm">
                <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html">
                    <img src="public/img/dashboard/greendash-logo-84x41.png" alt="logo"> 
                </a>
            </div>

            <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
                <li class="ms-nav-item ms-search-form pb-0 py-0">
                    <form class="ms-form" method="post">
                        <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                            <input type="search" class="ms-form-input" name="search" placeholder="Search here..." value="">
                            <i class="flaticon-search text-disabled"></i>
                        </div>
                    </form>
                </li>

                <li class="ms-nav-item dropdown">
                    <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="mailDropdown">
                        <li class="dropdown-menu-header">
                            <h6 class="dropdown-header ms-inline m-0">
                                <span class="text-disabled">Mail</span>
                            </h6>
                            <span class="badge badge-pill badge-success">3 New</span>
                        </li>

                        <li class="dropdown-divider"></li>
                        <li class="ms-scrollable ms-dropdown-list">
                            <a class="media p-2" href="#">
                                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                                    <img src="public/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body">
                                    <span>Hey man, looking forward to your new project.</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                                </div>
                            </a>

                            <a class="media p-2" href="#">
                                <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                                    <img src="public/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body">
                                    <span>Dear John, I was told you bought Greendash! Send me your feedback</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                                </div>
                            </a>

                            <a class="media p-2" href="#">
                                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                                    <img src="public/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body">
                                    <span>How many people are we inviting to the dashboard?</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 6 hours ago</p>
                                </div>
                            </a>
                        </li>

                        <li class="dropdown-divider"></li>
                        <li class="dropdown-menu-footer text-center">
                            <a href="pages/apps/email.html">Go to Inbox</a>
                        </li>
                    </ul>
                </li>

                <li class="ms-nav-item dropdown">
                    <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flaticon-bell"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
                        <li class="dropdown-menu-header">
                            <h6 class="dropdown-header ms-inline m-0">
                                <span class="text-disabled">Notifications</span>
                            </h6>
                            <span class="badge badge-pill badge-info">4 New</span>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="ms-scrollable ms-dropdown-list">
                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>12 ways to improve your crypto dashboard</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                                </div>
                            </a>
                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>You have newly registered users</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                                </div>
                            </a>

                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>Your account was logged in from an unauthorized IP</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                                </div>
                            </a>

                            <a class="media p-2" href="#">
                                <div class="media-body">
                                    <span>An application form has been submitted</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                                </div>
                            </a>
                        </li>

                        <li class="dropdown-divider"></li>
                        <li class="dropdown-menu-footer text-center">
                            <a href="#">View all Notifications</a>
                        </li>
                    </ul>
                </li>

                <li class="ms-nav-item m-0 display-none-sm">
                    <label class="ms-switch m-0">
                        <input type="checkbox" id="remove-quickbar" checked="">
                        <span class="ms-switch-slider round"></span>
                    </label>
                </li>

                <li class="ms-nav-item ms-nav-user dropdown">
                    <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <img class="ms-user-img ms-img-round float-right" src="public/img/dashboard/rakhan-potik-1.jpg" alt="people"> 
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                        <li class="dropdown-menu-header">
                            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Anny Farisha</span></h6>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="ms-dropdown-list">
                            <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/prebuilt-pages/user-profile.html"> 
                                <span><i class="flaticon-user mr-2"></i> Profile</span> 
                            </a>
                            <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/apps/email.html"> 
                                <span><i class="flaticon-mail mr-2"></i> Inbox</span> 
                                <span class="badge badge-pill badge-info">3</span> 
                            </a>
                            <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/prebuilt-pages/user-profile.html"> 
                                <span><i class="flaticon-gear mr-2"></i> Account Settings</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-menu-footer">
                            <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/prebuilt-pages/lock-screen.html"> 
                                <span><i class="flaticon-security mr-2"></i> Lock</span> 
                            </a>
                        </li>
                        <li class="dropdown-menu-footer">
                            <a class="media fs-14 p-2" href="http://slidesigma.com/themes/html/prebuilt-pages/default-login.html"> 
                                <span><i class="flaticon-shut-down mr-2"></i> Logout</span> 
                            </a>
                        </li>
                  </ul>
                </li>
            </ul>

            <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
                <span class="ms-toggler-bar bg-primary"></span>
            </div>
        </nav>

        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Total Orders</h6>
                                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                                <p class="fs-12">48% From Last 24 Hours</p>
                            </div>
                        </div>
                        <i class="flaticon-archive"></i>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Compeleted Orders</h6>
                                <p class="ms-card-change"> $80,950</p>
                                <p class="fs-12">2% Decreased from last day</p>
                            </div>
                        </div>
                        <i class="flaticon-supermarket"></i>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Pending Orders</h6>
                                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                                <p class="fs-12">48% From Last 24 Hours</p>
                            </div>
                        </div>
                        <i class="flaticon-reuse"></i>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                        <div class="ms-card-body pos media">
                            <div class="media-body">
                                <h6>Total Products</h6>
                                <p class="ms-card-change "> $80,950</p>
                                <p class="fs-12">2% Decreased from last week</p>
                            </div>
                        </div>
                        <i class="fas fa-cannabis "></i>
                    </div>
                </div>

                <div class="col-md-12 col-xl-6">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header ms-panel-custom align-items-center">
                            <h6>Orders Graph</h6>
                            <ul class="nav nav-tabs d-flex nav-justified mb-0" role="tablist">
                                <li>
                                    <a href="#tab13" aria-controls="tab13" class=" pb-0" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="fas fa-chart-bar fa-2x "></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab14" aria-controls="tab14" role="tab" data-toggle="tab" class="active pb-0 show" aria-selected="true">
                                        <i class="fas fa-chart-line fa-2x "></i> 
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="ms-panel-body clearfix">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in" id="tab13">
                                    <div class="ms-panel-body">
                                        <canvas id="bar-chart"></canvas>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade active show" id="tab14">
                                    <div class="ms-panel-body">
                                        <canvas id="line-chart"></canvas>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab15"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh ms-crypto-orders">
                        <div class="ms-panel-header">
                            <div class="d-flex justify-content-between">
                                <div class="ms-header-text">
                                    <h6>Current Sales</h6>
                                    <p>Manage your current sale and buy orders</p>
                                </div>
                                <ul class="btn-group btn-group-toggle nav nav-tabs ms-graph-metrics" role="tablist">
                                    <li role="presentation">
                                        <a href="#b-orders" aria-controls="b-orders" class="btn btn-sm active show" role="tab" data-toggle="tab" aria-selected="true"> Buy Orders </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#s-orders" aria-controls="s-orders" class="btn btn-sm" role="tab" data-toggle="tab" aria-selected="false"> Sell Orders </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="ms-panel-body p-0">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active show" id="b-orders">
                                    <div class="table-responsive">
                                        <table class="table table-hover thead-light">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Price ($)</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Track ID</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>

                                                <tr>
                                                    <td>$5813.44</td>
                                                    <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>

                                                <tr>
                                                    <td>$1264.99</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i> 0.117</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>

                                                <tr>
                                                    <td>$3789.31</td>
                                                    <td><i class="fas fa-euro-sign PPC-alt"></i>0.217</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>

                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>

                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>

                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>

                                                <tr>
                                                    <td>$5813.44</td>
                                                    <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="s-orders">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Price ($)</th>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Track ID</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                                <tr>
                                                    <td>$5813.44</td>
                                                    <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                                <tr>
                                                    <td>$1264.99</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i> 0.117</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                                <tr>
                                                    <td>$3789.31</td>
                                                    <td><i class="fas fa-euro-sign PPC-alt"></i>0.217</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                                <tr>
                                                    <td>$7860.24</td>
                                                    <td><i class="fas fa-dollar-sign BTC"></i>0.528</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                                <tr>
                                                    <td>$5813.44</td>
                                                    <td><i class="fas fa-pound-sign ETH"></i>0.345</td>
                                                    <td>#TR34351</td>
                                                    <td>12.01.2019</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-custom ">

                            <div class="ms-heading">
                                <h6>Top Sallers Products</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>
                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover thead-primary">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Avalability</th>
                                            <th>Last Purchase</th>
                                            <th>Ratings</th>
                                            <th>Price</th>
                                            <th>Total Orders</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ms-table-f-w"> 
                                                <img src="public/img/dashboard/product-1.jpg" alt="people"> 
                                                <a href="#">White Widow </a>
                                            </td>
                                            <td><span class="badge badge-success">In Stock</span></td>
                                            <td>26-10-2019</td>
                                            <td>
                                                <ul class="ms-star-rating rating-fill mb-0 rating-circle heart-rating">
                                                    <li class="ms-rating-item rating-custome"> 
                                                        <i class="material-icons">star</i> 
                                                    </li>
                                                    <li class="ms-rating-item rating-custome rated"> 
                                                        <i class="material-icons">star</i> 
                                                    </li>
                                                    <li class="ms-rating-item rating-custome rated"> 
                                                        <i class="material-icons">star</i> 
                                                    </li>
                                                    <li class="ms-rating-item rating-custome rated"> 
                                                        <i class="material-icons">star</i> 
                                                    </li>
                                                    <li class="ms-rating-item rating-custome rated"> 
                                                        <i class="material-icons">star</i> 
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>$450.50</td>
                                            <td>752</td>
                                        </tr>

                                        <tr>
                                            <td class="ms-table-f-w"> 
                                                <img src="public/img/dashboard/product-2.jpg" alt="people"> 
                                                <a href="#">Super Sunk </a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success">In Stock</span>
                                            </td>
                                            <td>27-10-2019</td>
                                            <td>
                                                <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                                                    <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                                                </ul>
                                            </td>
                                            <td>$350.50</td>
                                            <td>365</td>
                                        </tr>

                                        <tr>
                                            <td class="ms-table-f-w"> 
                                                <img src="public/img/dashboard/product-3.jpg" alt="people">
                                                <a href="#">Low Rider</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger">Out Of Stock</span>
                                            </td>
                                            <td>28-10-2019</td>
                                            <td>
                                                <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                                                    <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                                                </ul>
                                            </td>
                                            <td>$550.50</td>
                                            <td>165</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header  ms-panel-custom">
                            <div class="ms-heading">
                                <h6>Product Ratings</h6>
                                <p>Lorem Ipsum is simply dummy text of the printing</p>
                            </div>
                        </div>

                        <div class="ms-panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover thead-primary">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Product Ratings</th>
                                            <th>Total Order </th>
                                            <th>Repeat Order</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td class="ms-table-f-w"> 
                                                <img src="public/img/dashboard/product-1.jpg" alt="people">
                                                <a href="#">White Widow</a> 
                                            </td>

                                            <td>
                                                <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                                                    <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item  rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome  rated"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rating-custome rated"> <i class="material-icons">star</i> </li>
                                                </ul>
                                            </td>
                                            <td>245</td>
                                            <td>45</td>
                                        </tr>

                                        <tr>
                                            <td class="ms-table-f-w"> 
                                                <img src="public/img/dashboard/product-2.jpg" alt="people">
                                                <a href="#">Super Skunk</a>
                                            </td>
                                            <td>
                                                <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                                                    <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                </ul>
                                            </td>
                                            <td>546</td>
                                            <td>146</td>
                                        </tr>

                                        <tr>
                                            <td class="ms-table-f-w"> 
                                                <img src="public/img/dashboard/product-2.jpg" alt="people"> <a href="#">Low Rider</a> 
                                            </td>

                                            <td>
                                                <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                                                    <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                    <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                </ul>
                                            </td>
                                            <td>365</td>
                                            <td>265</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Social Media Followers</h6>
                        </div>

                        <div class="ms-panel-body p-0">
                            <div class="ms-social-media-followers">
                                <div class="ms-social-grid">
                                    <i class="fab fa-linkedin-in bg-linkedin"></i>
                                    <p class="ms-text-dark">8,033</p>
                                    <span>Followers</span>
                                </div>
                                <div class="ms-social-grid">
                                    <i class="fab fa-twitter bg-twitter"></i>
                                    <p class="ms-text-dark">8,039</p>
                                    <span>Followers</span>
                                </div>
                            </div>

                            <div class="ms-social-media-followers">
                                <div class="ms-social-grid">
                                    <i class="fab fa-facebook-f bg-facebook"></i>
                                    <p class="ms-text-dark">8,039</p>
                                    <span>Likes</span>
                                </div>
                                <div class="ms-social-grid">
                                    <i class="fab fa-instagram bg-instagram"></i>
                                    <p class="ms-text-dark">98,039</p>
                                    <span>Followers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Active Orders Graph -->


                <!-- Orders Table Expanded -->
                <div class="col-md-12">
                    <div class="ms-panel ms-crypto-orders-expanded">
                        <div class="ms-panel-header">
                            <div class="d-flex justify-content-between">
                                <div class="ms-header-text">
                                    <h6>Order History</h6>
                                    <p>Track your active orders</p>
                                </div>
                            </div>
                        </div>

                        <div class="ms-panel-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover thead-primary ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Product ID</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Orders</th>
                                            <th scope="col">Repeats</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>12.01.2019</td>
                                            <td>Hemp Oil</td>
                                            <td>#TR137381</td>
                                            <td>$900.50</td>
                                            <td> Oil </td>
                                            <td class="ms-trend"> <canvas id="trend-01"></canvas> </td>
                                            <td>$5.85</td>
                                        </tr>

                                        <tr>
                                            <td>11.01.2019</td>
                                            <td>Gummy Bears</td>
                                            <td>#TR371893</td>
                                            <td>$335.50</td>
                                            <td> Edibles </td>
                                            <td class="ms-trend"> <canvas id="trend-02"></canvas> </td>
                                            <td>$5.85</td>
                                        </tr>

                                        <tr>
                                            <td>10.01.2019</td>
                                            <td>Mango Kush</td>
                                            <td>#TR137381</td>
                                            <td>$378.50</td>
                                            <td> Plants </td>
                                            <td class="ms-trend"> <canvas id="trend-03"></canvas> </td>
                                            <td>$5.85</td>
                                        </tr>

                                        <tr>
                                            <td>09.01.2019</td>
                                            <td>Purple Haze</td>
                                            <td>#TR371893</td>
                                            <td>$219.30</td>
                                            <td> FLowers</td>
                                            <td class="ms-trend"> <canvas id="trend-04"></canvas> </td>
                                            <td>$5.85</td>
                                        </tr>

                                        <tr>
                                            <td>08.01.2019</td>
                                            <td>UK Cheese</td>
                                            <td>#TR137381</td>
                                            <td>$438.50</td>
                                            <td>Leafs</td>
                                            <td class="ms-trend"> <canvas id="trend-05"></canvas> </td>
                                            <td>$5.85</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-4 ">

                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Total Revenue </h6>
                        </div>
                        <div class="ms-panel-body">
                            <span class="progress-label bold">Weekly Earnings</span>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">55%</div>
                            </div>
                            <span class="progress-label  bold">Monthly Earnings</span>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                            <span class="progress-label  bold">Quaterly Earnings</span>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                            </div>
                            <span class="progress-label  bold">Yearly Earnings</span>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header header-mini">
                            <h6>Average Users By Country</h6>
                            <p>The top locations where users of your product are located</p>
                        </div>
                        <div class="ms-panel-body ms-average-users-country">
                            <div class="row">
                                <div class="col-xl-4 col-md-12">
                                    <span class="progress-label">United States</span>
                                    <span class="progress-status">14,805</span>
                                    <div class="progress progress-tiny">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="progress-label">Brazil</span>
                                    <span class="progress-status">11,651</span>

                                    <div class="progress progress-tiny">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> 
                                    <span class="progress-label">Russia</span>
                                    <span class="progress-status">9,157</span>

                                    <div class="progress progress-tiny">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span class="progress-label">India</span>
                                    <span class="progress-status">7,846</span>
                                    <div class="progress progress-tiny">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <span class="progress-label">Australia</span>
                                    <span class="progress-status">6,789</span>
                                    <div class="progress progress-tiny mb-0">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="offset-xl-1 col-xl-7 col-md-12">
                                    <div id="world-map" class="vector-map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Quick bar -->
    <?php 
        get_template_part('quick-bar')
    ?>

    <!-- MODALS -->
    <!-- -- Reminder Modal -->
    <?php 
        get_template_part('reminder-modal')
    ?>

    <!-- Notes Modal -->
    <?php 
        get_template_part('note-modal')
    ?>

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/perfect-scrollbar.js"> </script>
    <script src="public/js/jquery-ui.min.js"> </script>
    <!-- Global Required Scripts End -->

    <!-- Page Specific Scripts Start -->
    <script src="public/js/moment.js"> </script>
    <script src="public/js/jquery.webticker.min.js"> </script>
    <script src="public/js/Chart.bundle.min.js"> </script>
    <script src="public/js/Chart.Financial.js"> </script>
    <script src="public/js/table-line.js"> </script>
    <script src="public/js/index-chart.js"> </script>

    <script src="public/js/d3.v3.min.js"> </script>
    <script src="public/js/topojson.v1.min.js"> </script>
    <script src="public/js/datamaps.all.min.js"> </script>
    <script src="public/js/index-map.js"> </script>

    <!-- Page Specific Scripts End -->

    <!-- Greendash core JavaScript -->
    <script src="public/js/framework.js"></script>

    <!-- Settings -->
    <script src="public/js/settings.js"></script>
    <script src="public/js/mySetting.js"></script>

</body>
</html>
