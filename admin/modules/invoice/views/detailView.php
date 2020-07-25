<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Invoice Detail</title>
    <!-- Iconic Fonts -->
    <link href="public/vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="public/vendors/iconic-fonts/flat-icons/flaticon.css">
    <!-- Bootstrap core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="public/css/jquery-ui.min.css" rel="stylesheet">
    <link href="public/css/toastr.min.css" rel="stylesheet">
    <!-- Greendash styles -->
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/myStyle_1.css" rel="stylesheet">
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
                            <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                        </ol>
                    </nav>

                    <div class="ms-panel">
                        <div class="ms-panel-header header-mini">
                            <div class="d-flex justify-content-between">
                                <h6>Invoice</h6>
                                <h6 id="invoice-id" data-id="<?=$invoice_detail[0]['InvoiceId']?>" >#<?=$invoice_detail[0]['InvoiceId']?></h6>
                            </div>
                        </div>

                        <div class="ms-panel-body">

                            <!-- Invoice To -->
                             <div class="row ">
                                <div class="col-md-6">
                                    <div class="invoice-address">
                                        <h5> <span class="label">Reciever:</span> <?=$invoice_detail[0]['InvoiceReceiver']?></h5>
                                        <p><span class="label">Phone Number: </span>037 767 0509</p>
                                        <p><span class="label">Email: </span><?=$invoice_detail[0]['Email']?></p>
                                        <p class="mb-0"> <span class="label">Address: </span><?=$invoice_detail[0]['InvoiceAddress']?></p>
                                    </div>
                                </div>

                                <div class="col-md-6 text-md-right">
                                    <ul class="invoice-date">
                                        <li> <span class="label">Invoice Date :</span> <?=$invoice_detail[0]['InvoiceTime']?></li>
                                        <li><span class="label">Due Date :</span> 
                                             <?php
                                                if ($invoice_detail[0]['InvoiceSituation'] == 'Paid'){
                                                    echo $invoice_detail[0]['LastModified'];
                                                }
                                                else{
                                                    echo '';
                                                }
                                            ?>
                                        </li>
                                        <li class="invoice-status">
                                            <span class="label">Invoice Status :</span> 
                                            <span class="badge badge-pill badge-secondary invoice-status-value">Secondary</span>
                                        </li>
                                        <li><span class="label">Discount Code :</span><u>KHASH-HJASH-HJACH</u> </li>
                                        <li><span class="label">Invoice Total :</span> <b>$155</b></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Invoice Table -->
                            <div class="ms-invoice-table table-responsive mt-5">
                                <table class="table table-hover text-right thead-primary">
                                    <thead>
                                        <tr class="text-capitalize">
                                            <th class="text-center w-5">id</th>
                                            <th class="text-left">title</th>
                                            <th>qty</th>
                                            <th>Unit Cost</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            for ($i = 0; $i < count($invoice_detail); $i++){
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?=$invoice_detail[$i]['ProductId']?></td>
                                                    <td class="text-left"><?=$invoice_detail[$i]['ProductTitle']?></td>
                                                    <td><?=$invoice_detail[$i]['AmountProduct']?></td>
                                                    <td><?=$invoice_detail[$i]['ProductPrice']?></td>
                                                    <td><?php
                                                    echo (int)$invoice_detail[$i]['ProductPrice'] * (int)$invoice_detail[$i]['AmountProduct'];
                                                            ?></td>
                                                </tr>
                                        <?php
                                            }
                                        ?>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">Total Cost: </td>
                                            <td><?=$invoice_detail[0]['InvoiceTotal']?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="invoice-buttons text-right">
                                <button class="btn btn-primary mr-2 btn-save-invoice" id="save-invoice">Save Invoice</button>
                                <button class="btn btn-primary mr-2">Print Invoice</button>
                                <button class="btn btn-primary">Send Invoice123</button
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
    <script src="public/js/toastr.min.js"></script>
    <script src="public/js/toast.js"></script>

    <!-- Greendash core JavaScript -->
    <script src="public/js/framework.js"></script>

    <!-- Settings -->
    <script src="public/js/settings.js"></script>
    <script src="public/js/mySetting_1.js"></script>
    <script src="public/js/setting_detail_invoice.js"></script>

</body>
</html>