<?php
//echo "<pre>";
//print_r($data_lst_size);
//echo "</pre>";
?>
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
        <link rel="stylesheet" href="public/css/product.css">
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
                            </div>
                            
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
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-12">
                        <div class="ms-panel ms-panel-fh">
                            <div class="ms-panel-body">
                                <form class="needs-validation clearfix" novalidate="">
                                    <div class="form-row">
                                        <div class="col-xl-12 col-md-12 ">
                                            <label for="validationCustom06">Product Title</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom08" required>
                                                <div class="invalid-tooltip">Please provide a valid product title.</div>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-md-12">
                                            <label for="validationCustom17" data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Post Category </label>
                                            <div class="input-group">
                                                <select class="form-control" id="validationCustom15" required="">
                                                    <?php
                                                    foreach ($data_lst_prod_cate as $prod_cate) {
                                                        ?>
                                                        <option value="<?= $prod_cate['ProductCateId'] ?>"><?= $prod_cate['ProductCateTitle'] ?></option>

                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 ">
                                            <label for="validationCustom06">Product Price</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom08" required>
                                                <div class="invalid-tooltip">Please provide a valid product title.</div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 ">
                                            <label for="validationCustom06">Product Promo</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="validationCustom08" required>
                                                <div class="invalid-tooltip">Please provide a valid product title.</div>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-md-6 ">
                                            <label>Product Color</label>
                                            <div class="input-group">
                                                <?php
                                                foreach ($data_lst_color as $color) {
                                                    ?>
                                                    <label class="checkbox-wrap" style="border-color: #<?= $color['ColorId'] ?>">
                                                        <input type="radio" name="product-color" value="" class="hide">
                                                        <i class="my-checkbox-check" style="background: #<?= $color['ColorId'] ?>"></i>
                                                    </label>
                                                    <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6">
                                            <label  data-toggle="tooltip" data-placement="left" title="3 digit number at the back of your card">Product Size </label>
                                            <div class="input-group">
                                                <select class="form-control" required="">
                                                    <?php
                                                    foreach ($data_lst_size as $size) {
                                                        ?>
                                                        <option value="<?= $size['SizeId'] ?>"><?= $size['SizeId'] ?></option>

                                                        <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        
                                         <div class="col-xl-6 col-md-6 ">
                                            <label for="validationCustom06">Product Amount</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" required>
                                                <div class="invalid-tooltip">Please provide a valid product title.</div>
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
                                <h1 class="fs-28 color-808080">Product Detail</h1>
                            </div>
                            <div class="ms-panel-body">
                                <textarea id='detail-post' class="tinymce">
                                </textarea>
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
        <script src="public/js/setting_product_add.js"></script>

    </body>
</html>
