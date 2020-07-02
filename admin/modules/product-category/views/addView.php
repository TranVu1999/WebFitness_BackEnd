<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin - Product Category Add</title>
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
        <link rel="stylesheet" href="public/css/mySlide.css">
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

            <?php
            get_template_part('navigation-bar');
            ?>

            <!-- Body Wrapper -->
            <div class="ms-content-wrapper">
                <div class="row">

                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Product Category</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-md-12 col-xl-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <h2>Slide Image</h2>
                            </div>
                            <div class="ms-panel-body">
                                <div id="slide">
                                    <div id="slide-thumb">
                                        <img src="public/img/upload.PNG">
                                    </div>
                                    <div id="slide-item">
                                        <ul>
                                            <li class="active">
                                                <img src="public/img/upload.PNG">
                                            </li>
                                            <li>
                                                <img src="public/img/upload.PNG">
                                            </li>
                                            <li >
                                                <img src="public/img/upload.PNG">
                                            </li>
                                            <li >
                                                <img src="public/img/upload.PNG">
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div id="slide-banner">
                                    <ul>
                                        <li class="btn-prev">
                                            <i class="fa fa-angle-left"></i>
                                        </li>
                                        <?php
                                        $amount_banner = count($data_list_banner);
                                        for ($i = 0; $i < $amount_banner; $i++) {
                                            ?>
                                            <li class="banner-item<?php if ($i == 0) echo " first-item active-item" ?>" data-id="<?= $data_list_banner[$i]['BannerId'] ?>">
                                                <img src="<?= $data_list_banner[$i]['BannerPicture'] ?>">
                                            </li>
                                            <?php
                                        }
                                        ?>

                                        <li class="btn-next">
                                            <i class="fa fa-angle-right"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-6">
                        <div class="ms-panel">

                            <div class="ms-panel-body">
                                <div class="thumb-avatar" id="avatar-post">
                                    <img src="" alt="" id="post-ava-upload">
                                    <i class="fa fa-upload"></i>
                                    <input type="file" id="upload-avatar">
                                </div>
                                <div id="notify_upload_avatar" class="mt-3"></div>
                            </div>


                            <div class="ms-panel-header">
                                <div class="ms-panel-custom">
                                    <h6>Status Available</h6>

                                    <ul class="ms-list ms-list-display">

                                        <li class="mb-0">
                                            <label class="ms-switch">
                                                <input type="checkbox" checked="">
                                                <span class="ms-switch-slider ms-switch-primary round"></span>
                                            </label>

                                        </li>

                                    </ul>
                                </div>

                                <a href="#" class="ms-text-primary ">Active</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="ms-panel ms-panel-fh">

                            <div class="ms-panel-body">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <label for="validationCustom10">Product Category Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="product-cate-title" placeholder="Product name" required="">
                                        </div>
                                        <div id="notify_prod_cate_title" class="mt-3"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="validationCustom12">Description</label>
                                        <div class="input-group">
                                            <textarea rows="5" id="product-cate-desc" class="form-control" required=""></textarea>

                                        </div>
                                        <div id="notify_prod_cate_desc" class="mt-3"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn btn-dark mr-2  ms-graph-metrics">Delete</button>
                                        <button class="btn btn-primary " id="save-prod-cate">Save</button>
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
        <script src="public/js/perfect-scrollbar.js"></script>
        <script src="public/js/jquery-ui.min.js"></script>
        <!-- Global Required Scripts End -->

        <!-- Popups -->
        <script src="public/js/promise.min.js"></script>
        <script src="public/js/sweetalert2.min.js"></script>
        <script src="public/js/sweet-alerts.js"></script>

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
        <script src="public/js/helper.js"></script>
        <script src="public/js/class.js"></script>
        <script src="public/js/setting_add_proCate.js"></script>

    </body>
</html>
