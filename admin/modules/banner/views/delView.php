<?php
//echo "<pre>";
//print_r($data_lst_banner);
//echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin - Remove Banner List</title>
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
        <!-- Main Content -->
        <main class="body-content">

            <!-- Navigation Bar -->
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

                                <li class="breadcrumb-item active" aria-current="page">List Banner</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <div class="d-flex-between-center">
                                    <h1 class="color-808080 fs-28">List Banner</h1>
                                    <div class="btn-control">
                                        <a href="?mod=banner&controller=del" class="btn btn-danger has-icon mr-3"><i class="far fa-trash-alt"></i>Remove Banner</a>
                                        <a href="?mod=banner&controller=add" class="btn btn-primary has-icon"><i class="far fa-plus-square"></i> Add Banner</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ms-panel-body">
                                <?php
                                if (count($data_lst_banner) == 0) {
                                    echo "<p>No result</p>";
                                } else {
                                    ?>
                                    <ul class="lst-banner">

                                        <?php
                                        foreach ($data_lst_banner as $banner) {
                                            ?>
                                            <li data-banner-id="<?= $banner['BannerId'] ?>">
                                                <div class="banner-thumb">
                                                    <div class="thumb-img">
                                                        <img src="<?= $banner['BannerPicture'] ?>" alt="Banner">
                                                    </div>
                                                    <div class="banner-info">
                                                        <span class="border-bn border-top-bn"></span>
                                                        <span class="border-bn border-right-bn"></span>
                                                        <span class="border-bn border-bottom-bn"></span>
                                                        <span class="border-bn border-left-bn"></span>

                                                        <h2 class="pos-page">Banner</h2>

                                                        <ul class="banner-control">
                                                            <li>
                                                                <button type="button" name="button" class="btn-transparent btn-bn-control btn-trash trigger-swal" data-swal="restore-banner" data-id="<?= $banner['BannerId'] ?>">
                                                                    <i class="fa fa-reply"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" name="button" class="btn-transparent btn-bn-control btn-view trigger-swal" data-swal="multi-step">
                                                                    <i class="fa fa-eye"></i>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" name="button" class="btn-transparent btn-bn-control btn-edit trigger-swal" data-swal="multi-step">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <?php
                                        }
                                        ?>
                                    </ul>

                                    <?php
                                }
                                ?>
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
        <script src="public/js/app.js"></script>

    </body>
</html>
