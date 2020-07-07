<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('add');
    load_model('detail');
    load_model('index');
}

function indexAction() {
    $prod_cate_id = $_GET['id'];
    $data['data_list_banner'] = get_list_banners();
    
    $data['data_prod_cate'] = get_prod_cate_by_id($prod_cate_id);
    $data['data_prod_cate']['amount_product'] = get_amount_product_belong_prod_cate($prod_cate_id);
    
    $data['data_lst_banner_of_prod_cate'] = get_list_banner_of_prod_cate($data['data_prod_cate']['ProductCateTitle']);
    
    load_view('detail', $data);   
}

function editProductCateAction() {
    
}

function editAction() {

}
