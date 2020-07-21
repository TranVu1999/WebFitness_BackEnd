<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('add');
    load_model('detail');
}

function indexAction() {
    $product_id = $_GET['id'];
    $data['data_lst_prod_cate'] = get_list_product_category();
    $data['data_lst_color'] = get_list_color();
    $data['data_lst_size'] = get_list_size();
    
    $data['data_product'] = get_product($product_id);
    
    load_view('detail', $data);
    
}

function addAction() {

}

function editAction() {

}
