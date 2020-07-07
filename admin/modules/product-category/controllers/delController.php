<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('del');
    load_model('index');
}

function indexAction() {
    $data['data_lst_prod_cate'] = get_list_deleted_product_category();
    $amount_prod_cate = count($data['data_lst_prod_cate'] );
    
    for($i = 0; $i < $amount_prod_cate; $i++){
        $data['data_lst_prod_cate'][$i]['banner'] = get_list_banner_of_prod_cate($data['data_lst_prod_cate'][$i]['ProductCateId'])[0]['BannerPicture'];
    }
    
    load_view('del', $data);
    
}

function restoreProductCateAction() {
    $prod_cate_id = $_POST['prod_cate_id'];
    echo restore_product_category($prod_cate_id);
}

function editAction() {

}
