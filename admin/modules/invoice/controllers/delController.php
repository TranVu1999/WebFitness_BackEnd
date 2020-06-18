<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('del');
}

function indexAction() {
    $data['lst_invoice_cancel'] = get_list_invoice_cancel();
    load_view('del', $data);    
}

function restoreInvoiceAction(){
    $recode_id = $_POST['record_id'];
    echo restore_invoice($recode_id);
//    echo $recode_id;
}

function deleteInvoiceAction(){
    $recode_id = $_POST['record_id'];
    echo delete_invoice($recode_id);
}