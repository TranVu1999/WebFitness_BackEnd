<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('add');
}

function indexAction() {
    $data['data_lst_prod_cate'] = get_list_product_category();
    $data['data_lst_color'] = get_list_color();
    $data['data_lst_size'] = get_list_size();
    load_view('add', $data);
    
}

function addProductAction() {
    $product_info = $_POST['product'];
    $product = json_decode($product_info);
    
    $product_id = add_product($product->product_title, $product->product_alias, $product->product_avatar, $product->product_cate, 
            $product->product_price, $product->product_promo,
            $product->product_desc, $product->product_detail, $product->product_status);
    
    foreach($product->product_attr as $product_attr){
        $str_img = '[';
        foreach($product_attr->lst_product_img as $img){
            $str_img .= "$img, ";
        }
        $str_img .= ']';
        add_producta_attr($product_attr->product_color, $product_id, $product_attr->product_size, 
                $str_img, $product_attr->product_amount);
    }
    
//    echo json_encode($product);
    echo $product_id;
}

