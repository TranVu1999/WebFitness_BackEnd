<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('add');
}

function indexAction() {
    $data['data_list_banner'] = get_list_banners();
    load_view('add', $data);
    
}

function addAction() {

}

function editAction() {

}
