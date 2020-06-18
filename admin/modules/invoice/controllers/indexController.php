<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['nam'] = get_list_invoice();
    load_view('index', $data);
    
}

function deleteInvoiceAction(){
    $record_id = $_POST['record_id'];
    disable_invoice($record_id);
    echo disable_invoice($record_id);
}