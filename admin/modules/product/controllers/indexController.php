<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['data_lst_prod'] = get_list_product();
    $amount_product = get_amount_product();
    for($i = 0; $i < count($data['data_lst_prod']); $i++){
        $data['data_lst_prod'][$i]['ProductAmount'] = $amount_product[$i]['Amount'];
    }
    
    load_view('index', $data);
    
}

function delProductAction() {
    $product_id = $_POST['product_id'];
    
    echo delete_product($product_id);
}

function editAction() {

}
