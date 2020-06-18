<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Product Add</title>
    <!-- Iconic Fonts -->
    <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/vendors/iconic-fonts/flat-icons/flaticon.css">
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">
    <link href="public/css/sweetalert2.min.css" rel="stylesheet">

    <!-- Slide -->

    <!-- Greendash styles -->
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="public/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="public/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="public/css/myStyle.css">
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

        <!-- Body Wrapper -->
        <div class="ms-content-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <h6>Latest Poducts</h6>
                            <p>Some of your latest works</p>
                        </div>
                        <div class="ms-panel-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="public/img/dashboard/product-1-530x240.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body">
                                            <h6>Green Crack</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                                            <a href="post-detail.html" class="btn btn-primary btn-block">View Post</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="public/img/dashboard/product-1-530x240.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body">
                                            <h6>Green Crack</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                                            <a href="post-detail.html" class="btn btn-primary btn-block">View Post</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="ms-card">
                                        <div class="ms-card-img">
                                            <img src="public/img/dashboard/product-1-530x240.jpg" alt="card_img">
                                        </div>
                                        <div class="ms-card-body">
                                            <h6>Green Crack</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                                            <a href="post-detail.html" class="btn btn-primary btn-block">View Post</a>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-xl-6">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <h1 class="fs-28 color-808080">Avatar</h1>
                        </div>
                        <div class="ms-panel-body">
                            <div class="thumb-avatar" id="avatar-post">
                                <img src="" alt="" id="post-ava-upload">
                                <i class="fa fa-upload"></i>
                                <input type="file" id="upload-avatar">
                            </div>
                        </div>

                        <div class="ms-panel-header">
                            <h2>Slide Image</h2>
                        </div>
                        <div class="ms-panel-body">
                            <div id="imagesSlider" class="ms-dotted-indicator-slider ms-image-slider carousel slide" data-ride="carousel" data-interval="false">
                                <div class="carousel-inner inner-img">

                                    <div class="carousel-item active" data-thumb-slide="0">
                                        <!-- <img class="d-block w-100" src="public/img/dashboard/pd-3.jpg" alt="First slide"> -->
                                        <div class="thumb-avatar" >
                                            <img src="" alt="" data-thumb-slide="0" id="blah">
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="input-slide" data-thumb-slide="0">
                                        </div>
                                    </div>

                                    <div class="carousel-item" data-thumb-slide="1">
                                        <div class="thumb-avatar">
                                            <img src="" alt="" data-thumb-slide="1">
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="input-slide" data-thumb-slide="1">
                                        </div>
                                    </div>

                                    <div class="carousel-item" data-thumb-slide="2">
                                        <div class="thumb-avatar">
                                            <img src="" alt="" data-thumb-slide="2">
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="input-slide" data-thumb-slide="2">
                                        </div>
                                    </div>

                                    <div class="carousel-item" data-thumb-slide="3">
                                        <div class="thumb-avatar">
                                            <img src="" alt="" data-thumb-slide="3">
                                            <i class="fa fa-upload"></i>
                                            <input type="file" class="input-slide" data-thumb-slide="3">
                                        </div>
                                    </div>                                    
                                </div>

                                <ol class="carousel-indicators slide-img">
                                    <li data-target="#imagesSlider" data-slide-to="0" class="active"> 
                                        <img class="d-block w-100" src="public/img/upload.PNG" alt="First slide" data-slide="0">
                                    </li>

                                    <li data-target="#imagesSlider" data-slide-to="1">
                                        <img class="d-block w-100" src="public/img/upload.PNG" alt="First slide" data-slide="1">
                                    </li>
                                    <li data-target="#imagesSlider" data-slide-to="2">
                                        <img class="d-block w-100" src="public/img/upload.PNG" alt="First slide" data-slide="2">
                                    </li>
                                    <li data-target="#imagesSlider" data-slide-to="3">
                                        <img class="d-block w-100" src="public/img/upload.PNG" alt="First slide" data-slide="3">
                                    </li>
                                </ol>

                                <a class="carousel-control-prev" href="#imagesSlider" role="button" data-slide="prev">
                                    <span class="material-icons" aria-hidden="true">keyboard_arrow_left</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#imagesSlider" role="button" data-slide="next">
                                    <span class="material-icons" aria-hidden="true">keyboard_arrow_right</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="button-add-remove">
                                <a href="#" class="btn btn-primary btn-add-img mr-3"><i class="fa fa-plus mr-3"></i>Add Image</a>
                                <a href="#" class="btn btn-primary btn-remove-img"><i class="fa fa-minus mr-3"></i>Remove Image</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-body">
                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <label for="validationCustom06">Post Title</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom08" placeholder="Post Title: " required>
                                            <div class="invalid-tooltip">Please provide a valid city.</div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12">
                                        <label for="validationCustom17" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Post Category </label>
                                        <div class="input-group">
                                            <select class="form-control" id="validationCustom15" required="">
                                                <option value="">Chest Exercise</option>
                                                <option value="">Back Exercise</option>
                                                <option value="">Leg Exercise</option>
                                                <option value="">Abs Exercise</option>
                                                <option value="">Triceps Exercise</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationCustom12">Description</label>
                                        <div class="input-group">
                                            <textarea rows="5" id="validationCustom12" class="form-control" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="ms-panel-header">
                                            <div class="ms-panel-custom">
                                                <h6>Status Available</h6>

                                                <ul class="ms-list ms-list-display">
                                                    <li class="mb-0">
                                                        <label class="ms-switch">
                                                            <input type="checkbox" checked="" id="check-status-box">
                                                            <span class="ms-switch-slider ms-switch-primary round"></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <a href="#" class="" id="check-status-text"><span class="ms-text-primary">Active</span></a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="button-control">
                                <button type="button" name="button" class="btn btn-primary ms-graph-metrics mr-3 trigger-swal" data-swal="multi-step">
                                    <i class="fa fa-check-circle"></i>
                                    Save
                                </button>
                                <button type="button" name="button" class="btn btn-primary  ms-graph-metrics trigger-swal" data-swal="view-post">
                                    <i class="fa fa-eye"></i>
                                    View Client
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ms-panel ms-panel-fh">
                        <div class="ms-panel-head">
                            <h1 class="fs-28 color-808080">Detail Post</h1>
                        </div>
                        <div class="ms-panel-body">
                            <textarea id='detail-post' class="tinymce">
                            </textarea>
                        </div>
                        <!-- <button id="view"> show</button> -->
                        <!-- <div id="content"></div> -->
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

    <!-- Editor -->
    <script src="public/js/vendor.bundle.base.js"></script>
    <script src="public/js/vendor.bundle.addons.js"></script>
    <script src="public/vendors/tinymce/tinymce.min.js"></script>
    <script src="public/vendors/tinymce/themes/modern/theme.js"></script>
    <script src="public/vendors/summernote/dist/summernote-bs4.min.js"></script>
    <script src="public/js/editorDemo.js"></script>

    <!-- Slide -->
    <script src="public/js/slick.js" type="text/javascript" charset="utf-8"></script>

    <!-- Greendash core JavaScript -->
    <script src="public/js/framework.js"></script>

    <!-- Settings -->
    <script src="public/js/settings.js"></script>

    <!-- My Setting -->
    <script src="public/js/mySetting.js"></script>

</body>
</html>
