<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin - Add PT</title>
        <!-- Iconic Fonts -->
        <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="public/vendors/iconic-fonts/flat-icons/flaticon.css">
        <!-- Bootstrap core CSS -->
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery UI -->
        <link href="public/css/jquery-ui.min.css" rel="stylesheet">
        <!-- Data table -->
        <link href="public/css/datatables.min.css" rel="stylesheet">
         <!-- Slide -->
        <link href="public/css/toastr.min.css" rel="stylesheet">
        <!-- Sweet -->
        <link href="public/css/sweetalert2.min.css" rel="stylesheet">

        <link href="public/css/ion.rangeSlider.min.css" rel="stylesheet">
        <!-- Greendash styles -->
        <link href="public/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="public/css/myStyle.css">
        <link rel="stylesheet" href="public/css/setting_add_pt.css">
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
                get_sidebar('admin');
            ?>


            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">

                <div class="ms-profile-overview">
                    <div class="ms-profile-cover">
                        <div class="thumb-avatar ms-profile-img" id="prod-avatar">
                            <img src="" alt="" id="pt-avatar">
                            <i class="fa fa-upload"></i>
                            <input type="file" id="upload-avatar">
                        </div>
                        <div class="ms-profile-user-info">
                            <!--<h1 class="ms-profile-username">Chihoo Hwang</h1>-->
                            <input type="text" class="input-text fs-60 fw-5" id="pt-name">
                            <h2 class="ms-profile-role">Professional UX Manager</h2>
                        </div>

                        <div class="ms-profile-user-buttons">
                            <button id="add-pt" class="btn btn-primary"> <i class="material-icons">person_add</i> Add</button>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-7 col-md-12">
                        <div class="ms-panel ms-panel-fh">
                            <div class="ms-panel-body">
                                <h2 class="section-title">About Me</h2>
                                <textarea class="textarea-input-text" cols="30" rows="5" id="pt-about"></textarea>

                                <div class="ms-profile-skills">
                                    <h2 class="section-title">Professional Skills</h2>
                                    <ul class="ms-skill-list">
                                        <li class="ms-skill">
                                            <input type="text" class="input-skill">
                                            <span class="text-danger remove-skill" data-skill-id="0"><i class="far fa-times-circle"></i></span>
                                        </li>
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
                                        <h3 class="ms-count">0</h3>
                                        <span>Followers</span>
                                    </li>
                                    <li>
                                        <h3 class="ms-count">0</h3>
                                        <span>User Rating</span>
                                    </li>
                                </ul>

                                <h2 class="section-title">Basic Information</h2>
                                <table class="table ms-profile-information">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Full Name</th>
                                            <td>
                                                <input type="text" class="input-attr" id="pt-full-name">
                                                <div id="notify-pt-name"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Birthday</th>
                                            <td>
                                                <input type="text" class="input-attr" id="pt-birthday">
                                                <div id="notify-pt-birthday"></div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <th scope="row">Sex</th>
                                            <td>
                                                <input type="text" class="input-attr" id="pt-sex">
                                                <div id="notify-pt-sex"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Experience</th>
                                            <td>
                                                <input type="text" class="input-attr" id="pt-experience">
                                                <div id="notify-pt-experience"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Phone Number</th>
                                            <td>
                                                <input type="text" class="input-attr" id="pt-phone">
                                                <div id="notify-pt-phone"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email Address</th>
                                            <td><input type="text" class="input-attr" id="pt-email"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Facebook Link</th>
                                            <td><input type="text" class="input-attr" id="pt-fb-link"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="ms-panel ms-panel-fh">
                            <div class="ms-panel-body">
                                <div id="skill-box">
                                    <h2 class="section-title">Skill level</h2>
                                    <div class="ms-range-slider my-4">
                                        <input  type="text" class="js-range-slider my-range" name="slider1" value="" />
                                        <button class="btn btn-primary add-val-skill"><i class="fa fa-plus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-body">
                                <h2 class="section-title">My Timeline</h2>
                                
                                <form id="add-timeline">
                                    <div class="form-group">
                                        <label for="pt-timeline-title">Timeline Title</label>
                                        <input type="text" class="form-control" id="pt-timeline-title">
                                    </div>
                                    <div class="form-group">
                                        <label for="pt-timeline-time">Timeline Time</label>
                                        <input type="text" class="form-control" id="pt-timeline-time">
                                    </div>
                                    <div class="form-group">
                                        <label for="pt-timeline-desc">Timeline Description</label>
                                        <textarea class="form-control" id="pt-timeline-desc" rows="3"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" id="abort-time-line" class="btn btn-dark mr-3">
                                            <i class="far fa-smile"></i>
                                            Abort
                                        </button>
                                        <button type="button" id="save-time-line" class="btn btn-info">
                                            <i class="fa fa-edit"></i>
                                            Save
                                        </button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-plus-circle"></i>
                                            Save
                                        </button>
                                        
                                    </div>
                                </form>
                                
                                <ul id="pt-time-line" class="ms-activity-log mt-5">
                                    
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
        
        <!-- Page Specific Scripts Start -->
        <script src="public/js/toastr.min.js"></script>
        <script src="public/js/toast.js"></script>

        <!-- Data table -->
        <script src="public/js/datatables.min.js"></script>
        <script src="public/js/data-tables.js"></script>

        <!-- Page Specific Script Start -->
        <script src="public/js/ion.rangeSlider.min.js"></script>
        <script src="public/js/range-slider.js"></script>

        <!-- Popups -->
        <script src="public/js/promise.min.js"></script>
        <script src="public/js/sweetalert2.min.js"></script>
        <script src="public/js/sweet-alerts.js"></script>

        <!-- Greendash core JavaScript -->
        <script src="public/js/framework.js"></script>

        <!-- Settings -->
        <script src="public/js/settings.js"></script>
        <script src="public/js/mySetting.js"></script>
        
        <script src="public/js/class.js"></script>
        <script src="public/js/helper.js"></script>
        <script src="public/js/setting_add_pt.js"></script>

    </body>
</html>


