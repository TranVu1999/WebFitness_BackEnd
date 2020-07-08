<?php
//count($data_lst_invoice)
//    echo '<pre>';
//    print_r($economic_growth);
//    echo '</pre>';
//echo  date('Y-m-d', strtotime('-7 days'));
//echo $economic_growth;
//echo $text;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta lst_invoice_cancele="viewport" content="width=device-width,initial-scale=1">
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
                                    <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> <?=$economic_growth['amount_invoice']?></p>
                                    <p class="fs-12"><?=$economic_growth['economic_growth']?>% From Last 24 Hours</p>
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
                                    <p class="ms-card-change"> $<?=$economic_growth['invoice_complete_current']?></p>
                                    <p class="fs-12"><?=$economic_growth['invoice_complete_current_growth']?>% Decreased from last day</p>
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
                                    <p class="ms-card-change"> $<?=$economic_growth['invoice_peding_current']?></p>
                                    <p class="fs-12"><?=$economic_growth['invoice_peding_current_growth']?>% From Last 24 Hours</p>
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
                                    <p class="ms-card-change "> $<?=$economic_growth['invoice_current']?></p>
                                    <p class="fs-12"><?=$economic_growth['invoice_current_growth']?>% Decreased From Last 24 Hours</p>
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
                                            for ($i = 0; $i < count($data_lst_invoice); $i++) {
                                                ?>
                                                <tr role="row" class="odd" data-id="<?=$data_lst_invoice[$i]['InvoiceId']?>">
                                                    <td><?=$data_lst_invoice[$i]['InvoiceId']?></td>
                                                    <td><?=$data_lst_invoice[$i]['InvoiceReceiver']?></td>
                                                    <td><?=$data_lst_invoice[$i]['InvoiceTime']?></td>
                                                    <td><?=$data_lst_invoice[$i]['AmountProduct']?></td>
                                                    <td><?=$data_lst_invoice[$i]['InvoiceTotal']?></td>
                                                    <td>
                                                        
                                                        <span class="
                                                              <?php
                                                                if ($data_lst_invoice[$i]['InvoiceSituation'] == 'Paid'){
                                                                    echo 'badge badge-primary';
                                                                }
                                                                else if($data_lst_invoice[$i]['InvoiceSituation'] == 'Pending'){
                                                                    echo 'badge badge-danger';
                                                                }else{
                                                                    echo 'badge badge-warning';
                                                                }
                                                              ?>
                                                              "><?=$data_lst_invoice[$i]['InvoiceSituation']?></span>
                                                    </td>
                                                    <td>
                                                        <a href="?mod=invoice&controller=detail&action=index&invoiceId=<?=$data_lst_invoice[$i]['InvoiceId']?>" class="mr-3 ms-text-primary">
                                                            <i class="fa fa-eye "></i>
                                                        </a>
                                                       <a type="button" lst_invoice_cancele="button" class="btn-transparent trigger-swal" data-swal="disable-record" data-id="<?=$data_lst_invoice[$i]['InvoiceId']?>">
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
        <!--<script src="public/js/sweet-alerts.js"></script>-->

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