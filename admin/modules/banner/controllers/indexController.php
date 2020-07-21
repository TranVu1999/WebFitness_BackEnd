<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['data_lst_banner'] = get_list_banner();
    $amount_banner = count($data['data_lst_banner']);
    
    load_view('index', $data);
    
}

function delBannerAction() {
    $banner_id = $_POST['banner_id'];
    
    echo delete_banner($banner_id);
}

function addAction() {

}

function editAction() {

}
