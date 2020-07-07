<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['data_lst_prod_cate'] = get_list_product_category();
    $amount_prod_cate = count($data['data_lst_prod_cate'] );
    
    for($i = 0; $i < $amount_prod_cate; $i++){
        $data['data_lst_prod_cate'][$i]['banner'] = get_list_banner_of_prod_cate($data['data_lst_prod_cate'][$i]['ProductCateId']);
    }
//    $data['test'] = $amount_prod_cate;
    
    load_view('index', $data);
    
}

function delProductCateAction() {
    $prod_cate_id = $_POST['prod_cate_id'];
    
    echo delete_product_category($prod_cate_id);
}

function editAction() {

}
