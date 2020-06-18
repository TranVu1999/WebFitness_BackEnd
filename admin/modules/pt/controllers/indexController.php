<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['PT_List'] = get_list_pt();
    load_view('index', $data);
//    load_view('index');
    
}

function addAction() {

}

function editAction() {

}
