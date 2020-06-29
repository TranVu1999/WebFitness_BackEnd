<?php
//    echo '<pre>';
//    print_r($nam);
//    echo $nam[11]['InvoiceId'];
//    echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin - Invoice List</title>
        <base href="http://localhost:8080/unitop/back-end/lesson/MyFitness/admin/" target="_blank">
        <!-- Iconic Fonts -->
        <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="public/vendors/iconic-fonts/flat-icons/flaticon.css">
        <!-- Bootstrap core CSS -->
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <!-- Sweet   -->
        <link href="public/css/sweetalert2.min.css" rel="stylesheet">
        <!-- jQuery UI -->
        <link href="public/css/jquery-ui.min.css" rel="stylesheet">
        <!-- Page Specific Css (Datatables.css) -->
        <link href="public/css/datatables.min.css" rel="stylesheet">

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
                                <li class="breadcrumb-item"><a href="#">Invoice</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                            </ol>
                        </nav>
                    </div>
                    
                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6>Total Orders</h6>
                                    <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                                    <p class="fs-12">48% From Last 24 Hours</p>
                                </div>
                            </div>
                            <i class="flaticon-archive"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6>Compeleted Orders</h6>
                                    <p class="ms-card-change"> $80,950</p>
                                    <p class="fs-12">2% Decreased from last day</p>
                                </div>
                            </div>
                            <i class="flaticon-supermarket"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
                            <div class="ms-card-body media">
                                <div class="media-body">
                                    <h6>Pending Orders</h6>
                                    <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 4567</p>
                                    <p class="fs-12">48% From Last 24 Hours</p>
                                </div>
                            </div>
                            <i class="flaticon-reuse"></i>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
                            <div class="ms-card-body pos media">
                                <div class="media-body">
                                    <h6>Total Products</h6>
                                    <p class="ms-card-change "> $80,950</p>
                                    <p class="fs-12">2% Decreased from last week</p>
                                </div>
                            </div>
                            <i class="fas fa-cannabis "></i>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="ms-panel">
                            <div class="ms-panel-header">
                                <div class="d-flex-between-center">
                                    <h1 class="color-808080 fs-28">List Invoice</h1>
                                    <div class="btn-control">
                                        <a href="?mod=invoice&controller=del" class="btn btn-danger has-icon mr-3"><i class="far fa-trash-alt"></i>Remove Invoice</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ms-panel-body">
                                <div class="table-responsive">
                                    <table id="data-invoice" class="table table-striped thead-primary w-100">
                                        <tbody>
                                            <?php
                                            for ($i = 0; $i < count($nam); $i++) {
                                                ?>
                                                <tr role="row" class="odd" data-id="<?=$nam[$i]['InvoiceId']?>">
                                                    <td><?=$nam[$i]['InvoiceId']?></td>
                                                    <td><?=$nam[$i]['InvoiceReceiver']?></td>
                                                    <td><?=$nam[$i]['InvoiceTime']?></td>
                                                    <td><?=$nam[$i]['AmountProduct']?></td>
                                                    <td><?=$nam[$i]['InvoiceTotal']?></td>
                                                    <td>
                                                        
                                                        <span class="
                                                              <?php
                                                                if ($nam[$i]['InvoiceSituation'] == 'Paid'){
                                                                    echo 'badge badge-primary';
                                                                }
                                                                else if($nam[$i]['InvoiceSituation'] == 'Pending'){
                                                                    echo 'badge badge-danger';
                                                                }else{
                                                                    echo 'badge badge-warning';
                                                                }
                                                              ?>
                                                              "><?=$nam[$i]['InvoiceSituation']?></span>
                                                    </td>
                                                    <td>
                                                        <a href="?mod=invoice&controller=detail&action=index&invoiceId=<?=$nam[$i]['InvoiceId']?>" class="mr-3 ms-text-primary">
                                                            <i class="fa fa-eye "></i>
                                                        </a>
                                                        <a type="button" name="button" class="btn-transparent trigger-swal" data-swal="disable-record" data-id="<?=$nam[$i]['InvoiceId']?>">
                                                            <i class="far fa-trash-alt ms-text-danger"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>


                                        </tbody>
                                    </table>
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

        <!-- Page Specific Scripts Start -->
        <script src="public/js/slick.min.js"></script>
        <script src="public/js/moment.js"></script>
        <script src="public/js/jquery.webticker.min.js"></script>
        <script src="public/js/Chart.bundle.min.js"></script>
        <script src="public/js/Chart.Financial.js"></script>
        <script src="public/js/product-line.js"></script>

        <!-- Page Specific Scripts Start -->
        <script src="public/js/datatables.min.js"></script>
        <script src="public/js/data-tables.js"></script>
        <!-- Greendash core JavaScript -->
        <script src="public/js/framework.js"></script>

        <!-- Settings -->
        <script src="public/js/settings.js"></script>
        <script src="public/js/mySetting.js"></script>
        <script src="public/js/app.js"></script>

    </body>
</html>