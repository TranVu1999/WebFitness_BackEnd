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
                            <li class="breadcrumb-item"><a href="#">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product List</li>
                        </ol>
                        <a href="#" class="pt-3 ms-text-primary">Add Product</a>
                    </nav>
                </div>

                <div class="col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <div class="d-flex-between-center">
                                <h1 class="color-808080 fs-28">List Personal Trainer</h1>
                                <div class="btn-control">
                                    <a href="product-delete.html" class="btn btn-danger has-icon mr-3"><i class="far fa-trash-alt"></i>Remove Personal Trainer</a>
                                    <a href="?mod=pt&controller=add" class="btn btn-primary has-icon"><i class="far fa-plus-square"></i> Add Personal Trainer</a>
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
