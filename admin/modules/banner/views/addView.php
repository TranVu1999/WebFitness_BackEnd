<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Add Banner</title>
    <!-- Iconic Fonts -->
    <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">
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
                    <img src="assets/img/dashboard/greendash-logo-84x41.png" alt="logo"> 
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
                                    <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body">
                                    <span>Hey man, looking forward to your new project.</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                                </div>
                            </a>

                            <a class="media p-2" href="#">
                                <div class="ms-chat-status ms-status-online ms-chat-img mr-2 align-self-center">
                                    <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                                </div>
                                <div class="media-body">
                                    <span>Dear John, I was told you bought Greendash! Send me your feedback</span>
                                    <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 28 minutes ago</p>
                                </div>
                            </a>

                            <a class="media p-2" href="#">
                                <div class="ms-chat-status ms-status-offline ms-chat-img mr-2 align-self-center">
                                    <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
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
                        <img class="ms-user-img ms-img-round float-right" src="assets/img/dashboard/rakhan-potik-1.jpg" alt="people"> 
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

        <!-- Body Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Add Banner</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header ms-panel-body">
                            <div class="d-flex-between-center">
                                <h1 class="color-808080 fs-28">Banner</h1>
                                <div class="btn-control">
                                    <button class="btn btn-primary has-icon trigger-swal mr-3" data-swal="add-tag"><i class="fa fa-eye"></i> View Client</button>
                                    <button type="button" name="button" class="btn btn-primary ms-graph-metrics mr-3 trigger-swal" data-swal="multi-step">
                                        <i class="fa fa-check-circle"></i>
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="ms-panel-body">
                            <div class="thumb-avatar" id="avatar-post">
                                <img src="" alt="" id="post-ava-upload">
                                <i class="fa fa-upload"></i>
                                <input type="file" id="upload-avatar">
                            </div>
                        </div>

                        <div class="ms-panel-header">
                            <h1 class="fs-28 color-808080">Position</h1>
                        </div>
                        <div class="ms-panel-body">
                            <ul class="lst-pos-banner">
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="header-home" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="header-home">
                                            <span> Header Home Page</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="banner-functional-food" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="banner-functional-food">
                                            <span> Banner Functional Foods</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="header-functional-food-page" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="header-functional-food-page">
                                            <span> Header Functional Foods Page</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="header-training-tool-page" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="header-training-tool-page">
                                            <span> Header Training Tool Page</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="banner-training-tool" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="banner-training-tool">
                                            <span> Banner Training Tool</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="header-fashion-fitness-page" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="header-fashion-fitness-page">
                                            <span> Header Fashion Fitness Page</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="banner-fashion-fitness" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="banner-fashion-fitness">
                                            <span> Banner Fashion Fitness</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="line-space"></li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-chest" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-chest">
                                            <span> Avatar Posts Chest</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-back" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-back">
                                            <span> Avatar Posts Back</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-trap" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-trap">
                                            <span> Avatar Posts Traps</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-shoulder" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-shoulder">
                                            <span> Avatar Posts Shoulder</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-tricep" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-tricep">
                                            <span> Avatar Posts Triceps</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-bicep" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-bicep">
                                            <span> Avatar Posts Biceps</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-forearm" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-bicep">
                                            <span> Avatar Posts Forearm</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-leg" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-leg">
                                            <span> Avatar Posts Legs</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-cardio" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-cardio">
                                            <span> Avatar Posts Cardio</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-abs" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-abs">
                                            <span> Avatar Posts Abs</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-glute" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-glute">
                                            <span> Avatar Posts Glutes</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check pl-0">
                                        <label class="ms-checkbox-wrap">
                                            <input class="form-check-input chk-pos-banner" type="checkbox" id="avatar-post-calves" >
                                            <i class="ms-checkbox-check"></i>
                                        </label>
                                        <label for="avatar-post-calves">
                                            <span> Avatar Posts Calves</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
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
