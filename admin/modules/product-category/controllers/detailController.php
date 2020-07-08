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
    
    $data['data_lst_banner_of_prod_cate'] = get_list_banner_of_prod_cate($prod_cate_id);
    
    load_view('detail', $data);   
}

function editProductCateAction() {
    // Update product cate
    $prod_cate_info = $_POST['prod_cate'];
    $prod_cate = json_decode($prod_cate_info);
    $prod_cate_title_format = str_replace(' ', '-', strtolower($prod_cate->pro_cate_title));
//    edit_prod_cate($prod_cate->pro_cate_id, $prod_cate->pro_cate_title, $prod_cate->pro_cate_desc, $prod_cate->pro_cate_avatar, $prod_cate_title_format);
    
//    Update product cate banner
    $lst_banner_info = $_POST['lst_banner'];
    $lst_banner = json_decode($lst_banner_info);
    $data_lst_banner_of_prod_cate = get_list_banner_of_prod_cate($prod_cate->pro_cate_id);
    
    foreach($lst_banner as $banner){
        foreach($data_lst_banner_of_prod_cate as $banner_of_prod_cate){
            remove_banner_address($prod_cate->pro_cate_id, $banner->banner_id);
            add_banner_address($prod_cate->pro_cate_id, $banner->banner_id);
        }
    }
    
//    echo json_encode($lst_banner);
//    echo $lst_banner[0]->banner_id;
}

function editAction() {

}
