<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Post detail</title>
    <!-- Iconic Fonts -->
    <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">

    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">

    <link href="public/css/datatables.min.css" rel="stylesheet">
    <link href="public/css/sweetalert2.min.css" rel="stylesheet">
    <!-- Greendash styles -->
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/jquery-comments.css">
    <link rel="stylesheet" href="public/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="public/vendors/css/vendor.bundle.addons.css">
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
            <div class="row ">

                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Post</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post Detail</li>
                        </ol>
                    </nav>
                    <div class="alert alert-success mt-3" role="alert">
                        <i class="flaticon-tick-inside-circle"></i> <strong>Well done!</strong> You successfully add the product.
                    </div>
                </div>

                <div class="col-xl-6 col-md-12 bg-white">
                    <div class="ms-panel shadow-none">
                        <div class="ms-panel-body pb-0">
                            <div class="box-edit-control mb-3 fs-24 w-100">
                                <div class="thumb-avatar" id="avatar-post">
                                    <img src="public/img/dashboard/pd-1.jpg" alt="" id="post-ava-upload" data-focus="edit-post-avatar">
                                    <i class="fa fa-upload"></i>
                                    <input type="file" id="upload-avatar" data-focus="edit-post-avatar">
                                </div>
                            </div>
                            <div class="box-thumb old-data">
                                <img src="public/img/dashboard/pd-1.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ms-panel">
                                <div class="ms-panel-header">
                                    <h6>Ratings</h6>
                                </div>
                                <div class="ms-panel-body">
                                    <span class="progress-label">1 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-light-green" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>

                                    <span class="progress-label">2 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-light-green" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                    </div>

                                    <span class="progress-label">3 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-light-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                    </div>

                                    <span class="progress-label">4 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-light-green" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                    </div>

                                    <span class="progress-label">5 Star</span>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-animated progress-bar-striped bg-light-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12  bg-white">
                    <div class="ms-panel shadow-none ms-panel-fh">
                        <div class="ms-panel-body pb-0">
                            <h3 class="old-data" data-label="edit-post-title">Post Details</h3>
                            <div class="box-edit-control mb-3 fs-24 w-100">
                                <a href="#" class="edit-control" data-focus="edit-post-title">
                                    <i class="fa fa-edit ms-text-primary"></i>
                                </a>

                                <input type="text" value="Post Details" data-focus="edit-post-title">
                            </div>
                            <p  class="old-data" data-label="edit-post-description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <div class="box-edit-control mb-3 w-100">
                                <a href="#" class="edit-control" data-focus="edit-post-description">
                                    <i class="fa fa-edit ms-text-primary"></i>
                                </a>
                                
                                <textarea name="" id="" cols="30" rows="5" data-focus="edit-post-description" placeholder="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry." ></textarea>
                            </div>
                            <table class="table ms-profile-information">
                                <tbody>
                                    <tr>
                                        <th scope="row">Id</th>
                                        <td>101</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Post Category</th>
                                        <td>
                                            <div class="box-edit-control">
                                                <a href="#" class="edit-control" data-focus="edit-post-cate">
                                                    <i class="fa fa-edit ms-text-primary"></i>
                                                </a>

                                                <input type="text" value="Chest Exercise" data-focus="edit-post-cate">
                                            </div>
                                            
                                            <span class="old-data" data-label="edit-post-cate">Chest Exercise</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">View Count</th>
                                        <td>1.200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Created By</th>
                                        <td>Tran Vu</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Created Date</th>
                                        <td>Saturday, April 07 2019</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td><span class="badge badge-primary">In Stock</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <button type="button" name="button" class="btn btn-primary mr-3 edit-data">
                                <i class='fas fa-pencil-alt'></i>
                                Edit
                            </button>
                            <button type="button" name="button" class="btn btn-primary ms-graph-metrics mr-3 trigger-swal btn-save" data-swal="multi-step">
                                <i class="fa fa-save"></i>
                                Save
                            </button>

                            <button type="button" name="button" class="btn btn-dark ms-graph-metrics mr-3 trigger-swal" data-swal="multi-step">
                                <i class="flaticon-trash"></i>
                                Delete
                            </button>

                            <button type="button" name="button" class="btn btn-primary  ms-graph-metrics trigger-swal" data-swal="view-post">
                                <i class="fa fa-eye"></i>
                                View Client
                            </button>
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
                                    <a href="#description" aria-controls="description" class="active show" role="tab" data-toggle="tab"> Description </a>
                                </li>
                                <li role="presentation">
                                    <a href="#lst-comment" aria-controls="lst-comment" role="tab" data-toggle="tab"> List Comments </a>
                                </li>
                                <li role="presentation"><a href="#save-change" aria-controls="save-change" role="tab" data-toggle="tab"> Change History </a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active show fade in" id="description">
                                    <div class="box-edit-control mb-3 fs-24 w-100">
                                        <textarea data-focus="edit-post-detail"></textarea>
                                    </div>
                                    <div class="old-data" data-label="edit-post-detail">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, neque est. Quaerat nihil perspiciatis ea incidunt aliquid nemo atque minima aliquam quod temporibus, beatae voluptas, totam ex corporis est quasi odit nesciunt, quas consectetur sunt alias, suscipit? Dolore voluptatum praesentium, iste totam beatae corporis autem expedita quaerat adipisci. Ex, dolorum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni quia earum error! Consequuntur, molestiae eaque? Dolorem labore laborum, exercitationem, voluptatibus obcaecati, aspernatur expedita aliquam earum aliquid neque quae quod necessitatibus tempore perspiciatis nam. Architecto eum, deleniti, harum provident ea officiis, aliquid consectetur nostrum ab at vero laudantium! Modi qui quod quae, eum sapiente molestiae tempore voluptate quibusdam, libero asperiores explicabo officiis minima harum deserunt. Ducimus necessitatibus, illum cum obcaecati voluptates at maiores accusantium ipsum repudiandae explicabo commodi voluptas quae, tenetur, ad rem! Corporis asperiores eum debitis odio sit aliquam laborum. Illum eveniet quas incidunt facere, odio illo officiis reiciendis.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit tenetur blanditiis in dolorem animi, quo odio facere? Dolores assumenda illo eos quibusdam, ipsam voluptates excepturi a, modi saepe ducimus blanditiis dolor dolorum, perspiciatis sunt voluptas ab corrupti voluptate veritatis odit magni beatae. Harum corrupti ab sapiente debitis autem temporibus dolor enim officiis voluptates vero. Nobis at repellendus officia ex nam, eos laboriosam quod, nemo doloremque? Assumenda nesciunt odit, quo nam dicta, asperiores repudiandae hic. Illo blanditiis neque facilis quas ipsum provident tempora asperiores esse voluptates officiis quia magni optio animi inventore voluptate reprehenderit reiciendis id, quae explicabo recusandae culpa beatae harum. Nemo ea vitae necessitatibus animi aperiam pariatur facilis cum, libero, debitis praesentium voluptates sequi reiciendis. Autem praesentium ratione deserunt reprehenderit reiciendis non atque ex soluta cum voluptatum quibusdam, officiis minima voluptatibus perspiciatis magnam at modi, nesciunt neque, pariatur culpa quos. Accusantium quasi labore, voluptatibus mollitia, similique reiciendis. Quidem molestias voluptas possimus saepe distinctio, voluptate sint, facere soluta quas aspernatur dolore quod nihil, enim atque fuga asperiores impedit molestiae nostrum. Minima inventore labore dolorum consectetur, doloremque beatae totam molestiae officiis minus ut quae placeat iusto veniam quidem dolores fugiat eum eveniet autem optio delectus perferendis magnam voluptatum cumque. Officia, maiores?</p>
                                    </div>
                                    
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="lst-comment">
                                    <div id="comments-container"></div>
                                </div>

                                <div role="tabpanel" class="tab-pane fade" id="save-change">
                                   <div class="ms-panel">
                                        <div class="ms-panel-body">
                                            <div class="table-responsive">
                                                <table id="data-change-product" class="table table-striped thead-primary w-100">
                                                    <tbody>
                                                        <tr>
                                                            <td>SCP1</td>
                                                            <td>Trần Vũ</td>
                                                            <td>05/29/2015 5:50</td>
                                                            <td>
                                                                <button type="button" name="button" class="btn-transparent trigger-swal" data-swal="custom"><i class='fas fa-pencil-alt ms-text-danger ml-3'></i></button>
                                                                <button type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step"><i class='fa fa-reply ms-text-danger ml-3'></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>SCP2</td>
                                                            <td>Trần Vũ</td>
                                                            <td>05/29/2015 5:50</td>
                                                            <td>
                                                                <button type="button" name="button" class="btn-transparent trigger-swal" data-swal="custom"><i class='fas fa-pencil-alt ms-text-danger ml-3'></i></button>
                                                                <button type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step"><i class='fa fa-reply ms-text-danger ml-3'></i></button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>SCP3</td>
                                                            <td>Trần Vũ</td>
                                                            <td>05/29/2015 5:50</td>
                                                            <td>
                                                                <button type="button" name="button" class="btn-transparent trigger-swal" data-swal="custom"><i class='fas fa-pencil-alt ms-text-danger ml-3'></i></button>
                                                                <button type="button" name="button" class="btn-transparent trigger-swal" data-swal="multi-step"><i class='fa fa-reply ms-text-danger ml-3'></i></button>
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
    <script src="public/js/datatables.min.js"> </script>
    <script src="public/js/data-tables.js"> </script>
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

    <!-- Greendash core JavaScript -->
    <script src="public/js/framework.js"></script>

    <!-- Settings -->
    <script src="public/js/settings.js"></script>

    
    <script>
        $('.lst-comment-parent button.show-child-comment').click(function(){
            var index = parseInt($(this).attr('data-num-order'));
            // alert(index);
            var cmt_parent = $('li.parent');
            cmt_parent.eq(index).children('.lst-comment-child').slideToggle();
        })
    </script>

    <script type="text/javascript" src="public/js/textcomplete.js"></script>
    <!-- Data -->
    <script type="text/javascript" src="public/js/comments-data.js"></script>

    <script type="text/javascript" src="public/js/jquery-comments.js"></script>

    <!-- Init jquery-comments -->
    <script type="text/javascript">
        $(function() {
            var saveComment = function(data) {

                // Convert pings to human readable format
                $(Object.keys(data.pings)).each(function(index, userId) {
                    var fullname = data.pings[userId];
                    var pingText = '@' + fullname;
                    data.content = data.content.replace(new RegExp('@' + userId, 'g'), pingText);
                });

                return data;
            }
            $('#comments-container').comments({
                profilePictureURL: 'https://viima-app.s3.amazonaws.com/media/public/defaults/user-icon.png',
                currentUserId: 1,
                roundProfilePictures: true,
                textareaRows: 1,
                enableAttachments: true,
                enableHashtags: true,
                enablePinging: true,
                searchUsers: function(term, success, error) {
                    setTimeout(function() {
                        success(usersArray.filter(function(user) {
                            var containsSearchTerm = user.fullname.toLowerCase().indexOf(term.toLowerCase()) != -1;
                            var isNotSelf = user.id != 1;
                            return containsSearchTerm && isNotSelf;
                        }));
                    }, 500);
                },
                getComments: function(success, error) {
                    setTimeout(function() {
                        success(commentsArray);
                    }, 500);
                },

                postComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                putComment: function(data, success, error) {
                    setTimeout(function() {
                        success(saveComment(data));
                    }, 500);
                },
                deleteComment: function(data, success, error) {
                    setTimeout(function() {
                        success();
                    }, 500);
                },

                upvoteComment: function(data, success, error) {
                    setTimeout(function() {
                        success(data);
                    }, 500);
                },
                
                uploadAttachments: function(dataArray, success, error) {
                    setTimeout(function() {
                        success(dataArray);
                    }, 500);
                },
            });
        });
    </script>
    
    <script src="public/js/mySetting.js"></script>
</body>
</html>
