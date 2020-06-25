<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Course Detail</title>
    <!-- Iconic Fonts -->
    <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/vendors/iconic-fonts/flat-icons/flaticon.css">
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Greendash styles -->
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/myStyle_1.css">
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
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Advanced UI Elements</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Draggables</li>
                        </ol>
                    </nav>

                    

                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <div class="d-flex-between-center">
                                <h1 class="color-808080 fs-28">Course Detail</h1>
                                <div class="btn-control">
                                    <button type="button" name="button" class="btn btn-primary  ms-graph-metrics" id="open-modal-course">
                                        <i class="fa fa-eye"></i>
                                        Show Course Parameters
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="ms-panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="thumb">
                                        <video controls>
                                            <source src="public/img/course/course_woman_pt/videos/L1.mp4" type="video/mp4">
                                            <source src="public/img/course/course_woman_pt/videos/L1.mp4" type="video/ogg">
                                        </video>
                                    </div>
                                    <div class="lesson-desc">
                                        <div class="lesson-title">
                                            <div class="d-flex-between-center">
                                                <h1 class="color-808080 fs-24">Lesson Description</h1>
                                            </div>
                                        </div>
                                        <div class="lesson-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum consequatur id, esse minus odit unde quas facere, impedit, quod doloribus ipsa nobis inventore ipsam modi voluptatibus mollitia ullam! Consequatur, qui eligendi nobis est facere praesentium aperiam dignissimos excepturi perspiciatis laboriosam optio sed dolorem placeat sunt unde neque esse minima doloribus.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus modi aliquid laboriosam doloremque. Iste nesciunt, eum aut autem aliquid iusto iure voluptate impedit ut, laboriosam sed, amet quo excepturi et illum dignissimos earum, quis optio cupiditate. Tempore perspiciatis eum repellendus enim ullam corporis hic, facilis quos blanditiis commodi perferendis voluptates? Quod aliquam suscipit ipsam, esse doloremque, eveniet minima reiciendis. Autem, reiciendis numquam vel. Cumque minus itaque quam, pariatur eum nisi. Quod fugit deserunt alias culpa asperiores illo maxime pariatur similique reiciendis cum at iste nulla dolores, ipsa facilis, unde ut reprehenderit dicta, beatae assumenda nesciunt suscipit a! A, voluptatem excepturi.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, reiciendis! Vero voluptates et itaque ad id eos, ratione placeat quaerat!</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur incidunt vitae assumenda rerum, maiores sit quis voluptate beatae molestiae quos quia earum, nesciunt aliquid amet molestias vel nostrum reiciendis deleniti repellendus ipsum consectetur veniam. Nesciunt sit non, omnis quam officia!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div id="show-lecture">
                                        <div class="outline-head">
                                            <button class="btn" id="btn-toggle-ouline">
                                                <i class="fa fa-caret-right"></i>
                                            </button>
                                            <h3 class="text-center">MỤC LỤC</h3>
                                        </div>
                                         <div class="outline-body">
                                            <div class="" id="list-chapter">
                                                <ul class="ms-list ms-sortable-list table-of-content">
                                                    <li class="ms-list-item" data-order-chapter="0">
                                                        <div class="part-info">
                                                            <div class="part-title">Chapter 1: Khởi động</div>
                                                            <span class="part-duration">3 bài</span>
                                                            <span class="toggle-lecture"></span>
                                                        </div>

                                                        <ul class="list-lesson ms-list ms-sortable-list" data-order-chapter="0">
                                                            <li>
                                                                <form action="#" class="add-lesson" method="post" data-order-chapter="0">
                                                                    <div class="form-row">
                                                                        <div class="col-12">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control mr-2 lesson-title" required="" placeholder="Add new lesson" data-order-chapter="0">
                                                                                <button type="submit" class="btn btn-outline-primary btn-add-chapter btn-add-lesson">Add Lesson</button>
                                                                                
                                                                            </div>
                                                                            <div class="notify_lesson" data-order-chapter="0"></div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li  class="ms-list-item" data-order-lesson="0">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="" >Bài <span>1</span>: <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li  class="ms-list-item" data-order-lesson="1">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="" >Bài <span>2</span>:  <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li  class="ms-list-item" data-order-lesson="2">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="">Bài <span>3</span>:  <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li  class="ms-list-item" data-order-lesson="3">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="">Bài <span>4</span>:  <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                     <li class="ms-list-item" data-order-chapter="1">
                                                        <div class="part-info">
                                                            <div class="part-title">Chapter 1: Khởi động</div>
                                                            <span class="part-duration">3 bài</span>
                                                            <span class="toggle-lecture"></span>
                                                        </div>

                                                        <ul class="list-lesson ms-list ms-sortable-list" data-order-chapter="1">
                                                            <li>
                                                                <form action="#" class="add-lesson" method="post" data-order-chapter="1">
                                                                    <div class="form-row">
                                                                        <div class="col-12">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control mr-2 lesson-title" required="" placeholder="Add new lesson" data-order-chapter="0">
                                                                                <button type="submit" class="btn btn-outline-primary btn-add-chapter btn-add-lesson">Add Lesson</button>
                                                                                
                                                                            </div>
                                                                            <div class="notify_lesson" data-order-chapter="0"></div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                            <li  class="ms-list-item" data-order-lesson="0">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="" >Bài <span>1</span>: <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li  class="ms-list-item" data-order-lesson="1">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="" >Bài <span>2</span>:  <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li  class="ms-list-item" data-order-lesson="2">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="">Bài <span>3</span>:  <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <li  class="ms-list-item" data-order-lesson="3">
                                                                <div class="lesson-item">
                                                                    <span class="delete-lesson lesson-mark far fa-times-circle text-danger">
                                                                    </span>
                                                                    <div class="lesson-info">
                                                                        <a href="">Bài <span>4</span>:  <span class="lesson-title">Giới thiệu chương trình Jquery siêu tốc</span></a>
                                                                        <div class="lesson-duration">
                                                                            <span class="far fa-play-circle"></span> 8:00
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
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

    <!-- SCRIPTS -->
    <!-- Global Required Scripts Start -->
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/popper.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/perfect-scrollbar.js"> </script>
    <script src="public/js/jquery-ui.min.js"> </script>
    <!-- Global Required Scripts End -->

    <!-- Greendash core JavaScript -->
    <script src="public/js/framework.js"></script>

    <!-- Settings -->
    <script src="public/js/settings.js"></script>
    <!--<script src="public/js/mySetting_1.js"></script>-->
    <script src="public/js/setting-course-detail.js"></script>

</body>
</html>
