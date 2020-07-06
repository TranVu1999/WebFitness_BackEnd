<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['data_lst_invoice'] = get_list_invoice();
    $amount_invoice_at_date = (int)get_amount_row_of_invoice_at_current_date();
    $total_invoice_comlete = get_total_invoice_completed_at_current_date();
    $total_invoice_pending = get_total_invoice_pending_at_current_date();
    
    $last_day = date('Y-m-d', strtotime('-1 days'));
    $amount_invoice_at_last_date = (int)get_amount_row_of_invoice_at_last_date($last_day);
    $total_invoice_complete_last_date = get_total_invoice_completed_at_last_date($last_day);
    $total_invoice_pending_last_date = get_total_invoice_pending_at_last_date($last_day);
    
    if($amount_invoice_at_last_date == 0){
        $data['economic_growth'] = array(
            'economic_growth' => 100,
            'amount_invoice' => $amount_invoice_at_date
        );
    }else{
        $data['economic_growth'] = array(
            'economic_growth' => ($amount_invoice_at_date - $amount_invoice_at_last_date) / $amount_invoice_at_last_date * 100,
            'amount_invoice' => $amount_invoice_at_date
        );
    }
    
    if($total_invoice_complete_last_date == 0 || $total_invoice_complete_last_date == ''){
        $data['economic_growth']['invoice_complete_current'] = $total_invoice_comlete == '' ? 0 :$total_invoice_comlete;
        $data['economic_growth']['invoice_complete_current_growth'] = 100;
    }else{
        $data['economic_growth']['invoice_complete_current'] = $total_invoice_comlete == '' ? 0 :$total_invoice_comlete;
        $data['economic_growth']['invoice_complete_current_growth'] = 
                ($total_invoice_comlete - $total_invoice_complete_last_date) / $total_invoice_complete_last_date * 100;
    }
    
    if($total_invoice_pending_last_date == 0 || $total_invoice_pending_last_date == ''){
        $data['economic_growth']['invoice_peding_current'] = $amount_invoice_at_last_date == '' ? 0 :$amount_invoice_at_last_date;
        $data['economic_growth']['invoice_peding_current_growth'] = 100;
    }else{
        $data['economic_growth']['invoice_pending_current'] = $total_invoice_pending == '' ? 0 :$total_invoice_pending;
        $data['economic_growth']['invoice_pending_current_growth'] = 
                ($total_invoice_pending - $total_invoice_peding_last_date) / $total_invoice_peding_last_date * 100;
    }
    
    $data['economic_growth']['invoice_current'] = 
            $data['economic_growth']['invoice_complete_current'] + $data['economic_growth']['invoice_peding_current'];
    $data['economic_growth']['invoice_current_growth'] = 
            ($data['economic_growth']['invoice_peding_current_growth'] + $data['economic_growth']['invoice_complete_current_growth']) / 2;
    
    load_view('index', $data);
    
}

function deleteInvoiceAction(){
    $record_id = $_POST['record_id'];
    disable_invoice($record_id);
    echo disable_invoice($record_id);
}