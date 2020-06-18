<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Customer Profile</title>
    <!-- Iconic Fonts -->
    <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Data table -->
    <link href="public/css/datatables.min.css" rel="stylesheet">
    <!-- Sweet -->
    <link href="public/css/sweetalert2.min.css" rel="stylesheet">
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

        <!-- body wrapper -->
        <div class="ms-content-wrapper">
            <div class="ms-profile-overview">
                <div class="ms-profile-cover">
                    <img class="ms-profile-img" src="public/img/dashboard/rakhan-potik-1.jpg" alt="people">
                    <div class="ms-profile-user-info">
                        <h1 class="ms-profile-username">Chihoo Hwang</h1>
                        <h2 class="ms-profile-role">Professional UX Manager</h2>
                    </div>

                    <div class="ms-profile-user-buttons ms-panel-body">
                        <button type="button" name="button" class="btn btn-danger trigger-swal" data-swal="custom"><i class="fa fa-lock"></i> Block</button>
                        <button type="button" name="button" class="btn btn-light trigger-swal" data-swal="mail-box"><i class="fa fa-paper-plane"></i> Send Mail</button>
                    </div>
                </div>

                <ul class="ms-profile-navigation nav nav-tabs tabs-bordered" role="tablist">
                    <li role="presentation"><a href="#overview" aria-controls="overview" class="active show" role="tab" data-toggle="tab"> Overview </a></li>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> Profile </a></li>
                </ul>
            </div>

            
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active show fade in" id="overview">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ms-panel ms-panel-fh">
                                <div class="ms-panel-body">
                                    <span class="progress-label bold">5 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                    <span class="progress-label bold">4 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>
                                    <span class="progress-label bold"> 3 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                    <span class="progress-label bold"> 2 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                    </div>
                                    <span class="progress-label bold"> 1 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                                        <div class="ms-card-body media">
                                            <div class="media-body">
                                                <h6>1 Star Ratings</h6>
                                                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                                                <p class="fs-12">48% From Last 24 Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6  col-md-6">
                                    <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
                                        <div class="ms-card-body media">
                                            <div class="media-body">
                                                <h6>4 Star Ratings</h6>
                                                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i>80,950</p>
                                                <p class="fs-12">2% Decreased from last day</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                                        <div class="ms-card-body media">
                                            <div class="media-body">
                                                <h6>2 Star Ratings</h6>
                                                <p class="ms-card-change"><i class="material-icons">arrow_upward</i>80,950</p>
                                                <p class="fs-12">3% Decreased from last day</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                                        <div class="ms-card-body media">
                                            <div class="media-body">
                                                <h6>5 Star Ratings</h6>
                                                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                                                <p class="fs-12">48% From Last 64 Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                                        <div class="ms-card-body media">
                                            <div class="media-body">
                                                <h6>3 Star Ratings</h6>
                                                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                                                <p class="fs-12">48% From Last 32 Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                                        <div class="ms-card-body media">
                                            <div class="media-body">
                                                <h6>Total Reviews</h6>
                                                <p class="ms-card-change"> $80,950</p>
                                                <p class="fs-12">3% Decreased from last day</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="ms-panel ms-panel-fh">
                                <div class="ms-panel-header">
                                    <!-- <h6>Tabs Bordered</h6> -->
                                </div>
                                <div class="ms-panel-body">
                                    
                                    <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-4" role="tablist">
                                        <li role="presentation">
                                            <a href="#lst-review" aria-controls="lst-review" role="tab" data-toggle="tab" class="active show"> Reviews </a>
                                        </li>
                                        <li role="presentation"><a href="#lst-invoice" aria-controls="lst-invoice" role="tab" data-toggle="tab"> Invoices</a></li>
                                    </ul>

                                    <div class="tab-content">

                                        <div role="tabpanel" class="tab-pane active show fade in" id="lst-review">
                                            <div class="col-xl-12 col-md-12">
                                                <div class="ms-panel ms-panel-fh">
                                                    <div class="ms-panel-header">
                                                        <div class="d-flex justify-content-between">
                                                            <div>
                                                                <h6>Latest Reviwes</h6>
                                                                <p>Some of the recent support tickets</p>
                                                            </div>
                                                            <a href="#" class="btn btn-primary"> View All</a>
                                                        </div>
                                                    </div>

                                                    <div class="ms-panel-body p-0">
                                                        <ul class="ms-list ms-feed ms-twitter-feed ms-recent-support-tickets">
                                                            <li class="ms-list-item">
                                                                <a href="#" class="media clearfix">
                                                                    <img src="public/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
                                                                    <div class="media-body">
                                                                        <div class="d-flex  ">
                                                                            <h4 class="ms-feed-user mb-0 ">Nina Williams</h4>
                                                                            <h4 class="ms-feed-user ms-text-primary ml-2 mb-0 ">Product: Seeds</h4>
                                                                        </div>

                                                                        <ul class="ms-star-rating rating-fill mb-0 rating-circle heart-rating">
                                                                            <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                        </ul>
                                                                        <span class="my-2 d-block"> <i class="material-icons ms-text-primary">date_range</i> November 16, 2019</span>
                                                                        <p class="d-block"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum. Duis quis convallis sapien ... </p>
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div class="ms-feed-controls">
                                                                                <span>
                                                                                    <i class="material-icons ms-text-primary">chat</i> 16
                                                                                </span>
                                                                                <span>
                                                                                    <i class="material-icons ms-text-primary ">attachment</i> 3
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="ms-list-item">
                                                                <a href="#" class="media clearfix">
                                                                    <img src="public/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
                                                                    <div class="media-body">
                                                                        <div class="d-flex ">
                                                                            <h4 class="ms-feed-user mb-0">Daryl Michaels</h4>
                                                                            <h4 class="ms-feed-user ms-text-primary ml-2 mb-0 ">Product: Oil</h4>
                                                                        </div>
                                                                        <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                                                                            <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                        </ul>
                                                                        <span class="my-2 d-block"> <i class="material-icons ms-text-primary">date_range</i> September 04, 2019</span>
                                                                        <p class="d-block"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum. Duis quis convallis sapien ... </p>
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div class="ms-feed-controls">
                                                                                <span><i class="material-icons ms-text-primary">chat</i> 11</span>
                                                                                <span><i class="material-icons ms-text-primary">attachment</i> 1</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="ms-list-item">
                                                                <a href="#" class="media clearfix">
                                                                    <img src="public/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
                                                                    <div class="media-body">
                                                                        <div class="d-flex ">
                                                                            <h4 class="ms-feed-user mb-0">Brian Dunkst</h4>
                                                                            <h4 class="ms-feed-user ms-text-primary ml-2 mb-0 ">Product: Edibles</h4>
                                                                        </div>
                                                                        <ul class="ms-star-rating mb-0 rating-fill rating-circle heart-rating">
                                                                            <li class="ms-rating-item rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                            <li class="ms-rating-item rated rating-custome"> <i class="material-icons">star</i> </li>
                                                                        </ul>
                                                                        <span class="my-2 d-block"> <i class="material-icons ms-text-primary">date_range</i> February 24, 2019</span>
                                                                        <p class="d-block"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lectus a facilisis bibendum. Duis quis convallis sapien ... </p>
                                                                        <div class="d-flex justify-content-between align-items-end">
                                                                            <div class="ms-feed-controls">
                                                                                <span><i class="material-icons ms-text-primary">chat</i> 21</span>
                                                                            
                                                                                <span><i class="material-icons ms-text-primary">attachment</i> 5</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div role="tabpanel" class="tab-pane fade" id="lst-invoice">
                                           <div class="ms-panel">
                                                <div class="ms-panel-body">
                                                    <div class="table-responsive">
                                                        <table id="data-table-7" class="table table-striped thead-primary w-100"></table>
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
                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <h1 class="color-808080 fs-28">Customer profile</h1>

                        </div>
                        <div class="ms-panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="info-group">
                                        <label>Customer name:</label>
                                        <p>Tran Vu</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="info-group">
                                        <label>Customer email:</label>
                                        <p>tranvudpqn123@gmail.com</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="info-group">
                                        <label>Customer address:</label>
                                        <p>01, Vo Van Ngan street, Binh Tho ward, Thu Duc disct, Ho Chi Minh city</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="info-group">
                                        <label>Customer Phone:</label>
                                        <p>037 767 0509</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="info-group">
                                        <label>Joined time:</label>
                                        <p>31 Dec 1969</p>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="info-group">
                                        <label>Amount invoice:</label>
                                        <p>356</p>
                                    </div>
                                </div>


                                <div class="col-lg-12" style="padding: 0;">
                                    <div class="ms-panel">
                                        <div class="ms-panel-header">
                                            <div class="d-flex-between-center">
                                                <h1 class="color-808080 fs-28">List Discount</h1>
                                                <button type="button" class="btn btn-primary has-icon"><i class="far fa-plus-square"></i> Add Discount</button>
                                            </div>
                                            
                                        </div>
                                        <div class="ms-panel-body">
                                            <table id="data-discount" class="table table-striped thead-primary w-100">
                                                <tbody>
                                                    <tr>
                                                        <td>Dc1</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-danger">Already used</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dc2</td>
                                                        <td>MKT-JMJHT-MJHC</td>
                                                        <td>500.000</td>
                                                        <td>Congratulations! You are VIP member.</td>
                                                        <td><span class="badge badge-outline-primary">Not used yet</span></td>
                                                        <td>
                                                            <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                            </a>
                                                            <a href="">
                                                                <i class="far fa-trash-alt ms-text-danger"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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

    
    <!-- Data table -->
    <script src="public/js/datatables.min.js"> </script>
    <script src="public/js/data-tables.js"> </script>

    <!-- Popups -->
    <script src="public/js/promise.min.js"> </script>
    <script src="public/js/sweetalert2.min.js"> </script>
    <script src="public/js/sweet-alerts.js"> </script>

    <!-- Greendash core JavaScript -->
    <script src="public/js/framework.js"></script>

    <!-- Settings -->
    <script src="public/js/settings.js"></script>
    <script src="public/js/mySetting.js"></script>

</body>
</html>