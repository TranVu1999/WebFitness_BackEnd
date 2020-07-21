<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('del');
}

function indexAction() {
    $data['data_lst_prod'] = get_list_removed_product();
    $amount_product = get_amount_removed_product();
    for($i = 0; $i < count($data['data_lst_prod']); $i++){
        $data['data_lst_prod'][$i]['ProductAmount'] = $amount_product[$i]['Amount'];
    }
    
    load_view('del', $data);
    
}

function restoreProductAction() {
    $product_id = $_POST['product_id'];
    echo restore_product($product_id);
}
