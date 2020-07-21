<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('del');
}

function indexAction() {
    $data['data_lst_banner'] = get_list_banner();
    $amount_banner = count($data['data_lst_banner']);
    
    load_view('del', $data);
    
}

function restoreBannerAction() {
    $banner_id = $_POST['banner_id'];
    
    echo restore_banner($banner_id);
//    echo $banner_id;
}

function addAction() {

}

function editAction() {

}
