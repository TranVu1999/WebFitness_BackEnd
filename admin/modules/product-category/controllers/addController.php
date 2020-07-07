<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('add');
}

function indexAction() {
    $data['data_list_banner'] = get_list_banners();
    load_view('add', $data);
    
}

function addProductCategoryAction() {
    $prod_cate_info = $_POST['prod_cate'];
    $prod_cate = json_decode($prod_cate_info); 
    $prod_cate_title_format = str_replace(' ', '-', strtolower($prod_cate->pro_cate_title));
    $prod_cate_id = add_product_cate($prod_cate->pro_cate_title, $prod_cate->pro_cate_desc, $prod_cate->pro_cate_avatar, $prod_cate_title_format);
    
    $lst_banner_info = $_POST['lst_banner'];
    $lst_banner = json_decode($lst_banner_info);         
    
    foreach($lst_banner as $banner){
        add_banner_address($prod_cate_id, $banner->banner_id);
    }

//    echo $banner_address;
    echo $lst_banner[0]->banner_id;
//    echo $prod_cate_title_format;
}


