<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['lst_post_type'] = get_list_post_type();
    load_view('index', $data);
    
}

function addAction() {

}

function editAction() {

}
