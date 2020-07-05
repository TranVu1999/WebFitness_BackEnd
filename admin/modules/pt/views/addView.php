<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin - Add PT</title>
        <!-- Iconic Fonts -->
        <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
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
            <?php
            get_template_part('navigation-bar');
            ?>


            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">

                <div class="ms-profile-overview">
                    <div class="ms-profile-cover">
                        <img class="ms-profile-img" src="public/img/dashboard/rakhan-potik-1.jpg" alt="people">
                        <div class="ms-profile-user-info">
                            <h1 class="ms-profile-username">Chihoo Hwang</h1>
                            <h2 class="ms-profile-role">Professional UX Manager</h2>
                        </div>

                        <div class="ms-profile-user-buttons">
                            <a href="#" class="btn btn-primary"> <i class="material-icons">person_add</i> Follow</a>
                            <a href="#" class="btn btn-light"> <i class="material-icons">file_download</i> Download Resume</a>
                        </div>
                    </div>

                    <ul class="ms-profile-navigation nav nav-tabs tabs-bordered" role="tablist">
                        <li role="presentation">
                            <a href="#profile" class="active show" aria-controls="profile" role="tab" data-toggle="tab"> Profile </a>
                        </li>

                        <li role="presentation">
                            <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab"> Overview </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show fade in" id="profile">
                        <div class="row">
                            <div class="col-xl-7 col-md-12">
                                <div class="ms-panel ms-panel-fh">
                                    <div class="ms-panel-body">
                                        <h2 class="section-title">About Me</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                            Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                            Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean non elit nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                                            Aenean luctus, justo id pellentesque imperdiet, augue metus ornare quam, in pulvinar massa erat nec dui. Nam at facilisis nulla.</p>

                                        <div class="ms-profile-skills">
                                            <h2 class="section-title">Professional Skills</h2>
                                            <ul class="ms-skill-list">
                                                <li class="ms-skill">Web Design</li>
                                                <li class="ms-skill">Development</li>
                                                <li class="ms-skill">Interface Design</li>
                                                <li class="ms-skill">Illustration</li>
                                                <li class="ms-skill">Brand Design</li>
                                                <li class="ms-skill">Adobe</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5 col-md-12">
                                <div class="ms-panel ms-panel-fh">
                                    <div class="ms-panel-body">
                                        <ul class="ms-profile-stats">
                                            <li>
                                                <h3 class="ms-count">5790</h3>
                                                <span>Followers</span>
                                            </li>
                                            <li>
                                                <h3 class="ms-count">4.8</h3>
                                                <span>User Rating</span>
                                            </li>
                                        </ul>

                                        <h2 class="section-title">Basic Information</h2>
                                        <table class="table ms-profile-information">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Full Name</th>
                                                    <td>Chihoo Hwang</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Birthday</th>
                                                    <td>January 25th, 1996</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Language</th>
                                                    <td>English (US)</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Website</th>
                                                    <td>www.example.com</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Phone Number</th>
                                                    <td>+123 456 789</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Email Address</th>
                                                    <td>example@mail.com</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Location</th>
                                                    <td>New York, USA</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-12">
                                <div class="ms-panel ms-panel-fh">
                                    <div class="ms-panel-body">
                                        <h2 class="section-title">Skill level</h2>
                                        <span class="progress-label">Web Design</span><span class="progress-status">83%</span>
                                        <div class="progress progress-tiny">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 83%" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <span class="progress-label">Development</span>
                                        <span class="progress-status">50%</span>
                                        <div class="progress progress-tiny">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <span class="progress-label">Interface Design</span>
                                        <span class="progress-status">75%</span>
                                        <div class="progress progress-tiny">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <span class="progress-label">Illustration</span><span class="progress-status">92%</span>
                                        <div class="progress progress-tiny">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <span class="progress-label">Brand Design</span><span class="progress-status">97%</span>
                                        <div class="progress progress-tiny">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 97%" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                        <span class="progress-label">Adobe</span><span class="progress-status">90%</span>
                                        <div class="progress progress-tiny">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 col-md-12">
                                <div class="ms-panel">
                                    <div class="ms-panel-body">
                                        <h2 class="section-title">My Timeline</h2>
                                        <ul class="ms-activity-log">
                                            <li>
                                                <div class="ms-btn-icon btn-pill icon btn-success">
                                                    <i class="flaticon-tick-inside-circle"></i>
                                                </div>
                                                <h6>Computer Science Degree</h6>
                                                <span> <i class="material-icons">event</i>1 January, 2018</span>
                                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                                            </li>

                                            <li>
                                                <div class="ms-btn-icon btn-pill icon btn-info">
                                                    <i class="flaticon-information"></i>
                                                </div>
                                                <h6>Landed first Job</h6>
                                                <span> <i class="material-icons">event</i>4 March, 2018</span>
                                                <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                                            </li>

                                            <li>
                                                <div class="ms-btn-icon btn-pill icon btn-success">
                                                    <i class="flaticon-tick-inside-circle"></i>
                                                </div>
                                                <h6>Started my own Company</h6>
                                                <span> <i class="material-icons">event</i>1 March, 2020</span>
                                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="overview">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <h1 class="ms-title-panel">List Teach Course</h1>
                            </div>
                            <div class="ms-panel-body">
                                <table id="data-list-course-teach" class="table table-striped thead-primary w-100">
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-success">Finished</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-danger">Cancel</span></td>
                                            <td>
                                                <a href="">     <i  class="fas fa-pencil-alt ms-text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="far fa-trash-alt ms-text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>C001</td>
                                            <td>Tran Le Anh Vu</td>
                                            <td>Thursday, May 14 2020</td>
                                            <td>24/30</td>
                                            <td><span class="badge badge-outline-primary">Already used</span></td>
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
                                            <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
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
                                            <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
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
                                            <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
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
                                            <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
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
                                            <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
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
                                            <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round ms-img-small" alt="This is another feature">
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

        <<!-- SCRIPTS -->
        <!-- Global Required Scripts Start -->
        <script src="public/js/jquery-3.3.1.min.js"></script>
        <script src="public/js/popper.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/perfect-scrollbar.js"></script>
        <script src="public/js/jquery-ui.min.js"></script>
        <!-- Global Required Scripts End -->

        <!-- Data table -->
        <script src="public/js/datatables.min.js"></script>
        <script src="public/js/data-tables.js"></script>

        <!-- Popups -->
        <script src="public/js/promise.min.js"></script>
        <script src="public/js/sweetalert2.min.js"></script>
        <script src="public/js/sweet-alerts.js"></script>

        <!-- Greendash core JavaScript -->
        <script src="public/js/framework.js"></script>

        <!-- Settings -->
        <script src="public/js/settings.js"></script>
        <script src="public/js/mySetting.js"></script>

    </body>
</html>


