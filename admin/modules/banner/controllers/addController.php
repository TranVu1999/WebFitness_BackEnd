<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('add');
}

function indexAction() {

    load_view('add');
    
}

function addBannerAction() {
    $banner_info = $_POST['path_banner'];
    add_banner($banner_info);
    echo 'ok';
}
