<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['post_detail'] = get_post_by_id($_GET['post_id']);
    $data['lst_ask'] = get_list_ask_post_by_post_id($_GET['post_id']);
//    $data['post_id'] = $_GET['post_id'];
    load_view('index', $data);
    
}

function addAction() {

}

function editAction() {

}
