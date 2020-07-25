<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('detail');
}

function indexAction() {
    $data['id'] = $_GET['invoiceId'];
    $data['invoice_detail'] = get_list_invoice_by_id($data['id']);
    load_view('detail', $data);
    
}

function updateStatusInvoiceAction() {
    $invoice_id = $_POST['invoice_id'];
    $invoice_status = $_POST['invoice_status'];
    
    echo $invoice_id . $invoice_status;
}

function editAction() {

}