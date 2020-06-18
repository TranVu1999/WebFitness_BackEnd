<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
//    show_array($list_users);
    $data['lst_post'] = get_list_post($_GET['post_type_id']);
    $data['post_type_alias'] = get_alias_of_post_type($_GET['post_type_id']);
    
    load_view('index', $data);
    
}

function addAction() {

}

function editAction() {

}
