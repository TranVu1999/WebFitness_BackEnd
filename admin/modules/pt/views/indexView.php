<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - PT List</title>
    <!-- Iconic Fonts -->
    <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/vendors/iconic-fonts/flat-icons/flaticon.css">
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Page Specific Css (Datatables.css) -->
    <link href="public/css/datatables.min.css" rel="stylesheet">
    <!-- Sweet   -->
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
    
        <!-- Body Content Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb " class="ms-panel-custom">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product List</li>
                        </ol>
                        <a href="#" class="pt-3 ms-text-primary">Add Product</a>
                    </nav>

                    <div class="alert alert-success" role="alert">
                        <i class="flaticon-tick-inside-circle"></i> <strong>Well done!</strong> You successfully Deleted the Product.
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-header">
                            <h6>Order Graph</h6>
                            <p>Track Order Purchage</p>
                        </div>
                        <div class="ms-panel-body">
                            <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Bitcoin rating graph -->
                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh ms-crypto-rating">
                        <div class="ms-panel-header header-mini">
                            <div class="d-flex justify-content-between">
                                <div class="ms-header-text">
                                    <h6>Product Report</h6>
                                    <p>Cannabis Orders information and rating data</p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a href="#" class="has-chevron" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cc BTC"></i> Orders</a>
                                <ul class="dropdown-menu">
                                    <li class="ms-dropdown-list">
                                        <a class="media p-2" href="#">
                                            <div class="media-body">
                                                <span>Hemp Oil</span>
                                            </div>
                                        </a>
                                        <a class="media p-2" href="#">
                                            <div class="media-body">
                                                <span>Super Skunk</span>
                                            </div>
                                        </a>
                                        <a class="media p-2" href="#">
                                            <div class="media-body">
                                                <span>Low Rider</span>
                                            </div>
                                        </a>
                                  </li>
                                </ul>
                            </div>
                        </div>
                        <div class="ms-panel-body">
                            <canvas id="crypto-rating-graph"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <div class="d-flex-between-center">
                                <h1 class="color-808080 fs-28">List Personal Trainer</h1>
                                <div class="btn-control">
                                    <a href="product-delete.html" class="btn btn-danger has-icon mr-3"><i class="far fa-trash-alt"></i>Remove Personal Trainer</a>
                                    <a href="pt-add.html" class="btn btn-primary has-icon"><i class="far fa-plus-square"></i> Add Personal Trainer</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="ms-panel-body">
                            <div class="row">
                                <?php
                                for ($i = 0; $i < count($PT_List); $i++) {
                                ?>
                                <div class="col-lg-4">
                                    <div class="pt-card">
                                        <div class="pt-thumb" style="background: url(<?=$PT_List[$i]['PtAvatar']?>); background-repeat: no-repeat; background-size: cover;">
                                            <div class="pt-name"><?=$PT_List[$i]['PtFullName']?></div>
                                            <hr />
                                        </div>
                                        <div class="pt-tab-control">
                                            <ul class="pt-navigation nav nav-tabs tabs-bordered" role="tablist">
                                                <li role="presentation">
                                                    <a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a>
                                                </li>
                                                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-tab">
                                            <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Overview</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b><?=$PT_List[$i]['PtFullName']?></p>
                                                            <p><b>Age: </b><?=$PT_List[$i]['PtAge']?></p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Profile</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b><?=$PT_List[$i]['PtFullName']?></p>
                                                            <p><b>Age: </b><?=$PT_List[$i]['PtAge']?></p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                
                                
                                
                                <div class="col-lg-4">
                                    <div class="pt-card">
                                        <div class="pt-thumb" style="background: url(public/img/dashboard/pd-1.jpg); background-repeat: no-repeat; background-size: cover;">
                                            <div class="pt-name">Đoạn này trở đi là code mẫu</div>
                                            <hr />
                                        </div>
                                        <div class="pt-tab-control">
                                            <ul class="pt-navigation nav nav-tabs tabs-bordered" role="tablist">
                                                <li role="presentation">
                                                    <a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-tab">
                                            <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Overview</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary">
                                                            <i class="fa fa-eye "></i>
                                                        </a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Profile</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pt-card">
                                        <div class="pt-thumb" style="background: url(public/img/dashboard/pd-1.jpg); background-repeat: no-repeat; background-size: cover;">
                                            <div class="pt-name">Chicago</div>
                                            <hr />
                                        </div>
                                        <div class="pt-tab-control">
                                            <ul class="pt-navigation nav nav-tabs tabs-bordered" role="tablist">
                                                <li role="presentation">
                                                    <a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a>
                                                </li>
                                                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-tab">
                                            <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Overview</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Profile</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="pt-card">
                                        <div class="pt-thumb" style="background: url(public/img/dashboard/pd-1.jpg); background-repeat: no-repeat; background-size: cover;">
                                            <div class="pt-name">Chicago</div>
                                            <hr />
                                        </div>
                                        <div class="pt-tab-control">
                                            <ul class="pt-navigation nav nav-tabs tabs-bordered" role="tablist">
                                                <li role="presentation">
                                                    <a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a>
                                                </li>
                                                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-tab">
                                            <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Overview</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Profile</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pt-card">
                                        <div class="pt-thumb" style="background: url(public/img/dashboard/pd-1.jpg); background-repeat: no-repeat; background-size: cover;">
                                            <div class="pt-name">Chicago</div>
                                            <hr />
                                        </div>
                                        <div class="pt-tab-control">
                                            <ul class="pt-navigation nav nav-tabs tabs-bordered" role="tablist">
                                                <li role="presentation">
                                                    <a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a>
                                                </li>
                                                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-tab">
                                            <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Overview</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Profile</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pt-card">
                                        <div class="pt-thumb" style="background: url(public/img/dashboard/pd-1.jpg); background-repeat: no-repeat; background-size: cover;">
                                            <div class="pt-name">Chicago</div>
                                            <hr />
                                        </div>
                                        <div class="pt-tab-control">
                                            <ul class="pt-navigation nav nav-tabs tabs-bordered" role="tablist">
                                                <li role="presentation">
                                                    <a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a>
                                                </li>
                                                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-tab">
                                            <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Overview</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Profile</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="pt-card">
                                        <div class="pt-thumb" style="background: url(public/img/dashboard/pd-1.jpg); background-repeat: no-repeat; background-size: cover;">
                                            <div class="pt-name">Chicago</div>
                                            <hr />
                                        </div>
                                        <div class="pt-tab-control">
                                            <ul class="pt-navigation nav nav-tabs tabs-bordered" role="tablist">
                                                <li role="presentation">
                                                    <a href="#tab1" aria-controls="tab1" class="active show" role="tab" data-toggle="tab"> Overview </a>
                                                </li>
                                                <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Profile </a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content pt-tab">
                                            <div role="tabpanel" class="tab-pane active show fade in" id="tab1">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Overview</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="pt-info">
                                                    <div class="pt-info-left">
                                                        <div class="pt-title">Profile</div>
                                                        <div class="pt-content">
                                                            <p><b>Name: </b>Tran Vu</p>
                                                            <p><b>Age: </b>18</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-info-right">
                                                        <a href="pt-profile.html" class="mr-3 ms-text-primary"><i class="fa fa-eye "></i></a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
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

    <!-- Global Required Scripts Start -->
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/perfect-scrollbar.js"> </script>
    <script src="public/js/jquery-ui.min.js"> </script>
    <!-- Global Required Scripts End -->

    <!-- Popups -->
    <script src="public/js/promise.min.js"> </script>
    <script src="public/js/sweetalert2.min.js"> </script>
    <script src="public/js/sweet-alerts.js"> </script>

    <!-- Page Specific Scripts Start -->
    <script src="public/js/slick.min.js"> </script>
    <script src="public/js/moment.js"> </script>
    <script src="public/js/jquery.webticker.min.js"> </script>
    <script src="public/js/Chart.bundle.min.js"> </script>
    <script src="public/js/Chart.Financial.js"> </script>
    <script src="public/js/product-line.js"> </script>
    <script src="public/js/datatables.min.js"> </script>
    <script src="public/js/data-tables.js"> </script>

    <!-- Page Specific Scripts Finish -->

    <!-- Greendash core JavaScript -->
    <script src="public/js/framework.js"></script>

    <!-- Settings -->
    <script src="public/js/settings.js"></script>
    <script src="public/js/mySetting.js"></script>

</body>
</html>
