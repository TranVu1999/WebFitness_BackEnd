<?php
//echo "<pre>";
//print_r($data_lst_prod_cate);
//echo "</pre>";
//
//echo "<br>";
//echo encode_string($data_lst_prod_cate[0]['ProductCateTitle']);
//echo str_replace(' ',"_",$data_lst_prod_cate[0]['ProductCateTitle']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin - Deleted Product Category List</title>
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
            <?php
            get_template_part('navigation-bar');
            ?>

            <!-- Body Content Wrapper -->
            <div class="ms-content-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb " class="ms-panel-custom">
                            <ol class="breadcrumb pl-0">
                                <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Product Category</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Category List</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <div class="d-flex-between-center">
                                    <h1 class="color-808080 fs-28">List Product Category</h1>
                                    <div class="btn-control">
                                        <a href="product-delete.html" class="btn btn-danger has-icon mr-3"><i class="far fa-trash-alt"></i>Remove Product Category</a>
                                        <a href="?mod=product-category&controller=add" class="btn btn-primary has-icon"><i class="far fa-plus-square"></i> Add Product Category</a>
                                    </div>

                                </div>
                            </div>
                            <div class="ms-panel-body">
                                <ul class="lst-banner">
                                    <?php
                                    foreach ($data_lst_prod_cate as $prod_cate) {
                                        ?>
                                        <li data-banner-id="<?=$prod_cate['ProductCateId']?>">
                                            <div class="banner-thumb">
                                                <div class="thumb-img">
                                                    <img src="<?=$prod_cate['banner']?>" alt="Banner">
                                                </div>
                                                <div class="banner-info">
                                                    <span class="border-bn border-top-bn"></span>
                                                    <span class="border-bn border-right-bn"></span>
                                                    <span class="border-bn border-bottom-bn"></span>
                                                    <span class="border-bn border-left-bn"></span>

                                                    <h2 class="pos-page"><?=$prod_cate['ProductCateTitle']?></h2>

                                                    <ul class="banner-control">
                                                        <li>
                                                            <button type="button" name="button" class="btn-transparent btn-bn-control btn-trash trigger-swal" data-swal="restore-prod-cate" data-id="<?=$prod_cate['ProductCateId']?>">
                                                                <i class="fa fa-reply"></i>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button type="button" name="button" class="btn-transparent btn-bn-control btn-view">
                                                                <a href="?mod=product-category&controller=index&id=<?=$prod_cate['ProductCateId']?>"><i class="fa fa-eye"></i></a>
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
        <script src="public/js/perfect-scrollbar.js"></script>
        <script src="public/js/jquery-ui.min.js"></script>
        <!-- Global Required Scripts End -->

        <!-- Popups -->
        <script src="public/js/promise.min.js"></script>
        <script src="public/js/sweetalert2.min.js"></script>
        <script src="public/js/sweet-alerts.js"></script>

        <!-- Page Specific Scripts Start -->
        <script src="public/js/slick.min.js"></script>
        <script src="public/js/moment.js"></script>
        <script src="public/js/jquery.webticker.min.js"></script>
        <script src="public/js/Chart.bundle.min.js"></script>
        <script src="public/js/Chart.Financial.js"></script>
        <script src="public/js/product-line.js"></script>
        <script src="public/js/datatables.min.js"></script>
        <script src="public/js/data-tables.js"></script>

        <!-- Page Specific Scripts Finish -->

        <!-- Greendash core JavaScript -->
        <script src="public/js/framework.js"></script>

        <!-- Settings -->
        <script src="public/js/settings.js"></script>
        <script src="public/js/mySetting.js"></script>
        <script src="public/js/app.js"></script>

    </body>
</html>
