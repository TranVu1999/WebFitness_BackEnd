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
    add_product_cate($prod_cate->pro_cate_title, $prod_cate->pro_cate_desc, $prod_cate->pro_cate_avatar, $prod_cate_title_format);
    
    $lst_banner_info = $_POST['lst_banner'];
    $lst_banner = json_decode($lst_banner_info);         
    
    try {
        foreach($lst_banner as $banner){
            $data_banner_address = get_address_banner_by_id($banner->banner_id);
            $data_banner_address = str_replace("]", "", $data_banner_address);
            $data_banner_address = str_replace("[", "", $data_banner_address);

            $banner_address = '[' . $data_banner_address . ',"' . $banner->banner_address . '"]';

            update_address_banner($banner->banner_id, $banner_address);
        }
    }
    catch(Exception $e) {}

    echo $banner_address;
//    echo json_encode($lst_banner_info);
//    echo $prod_cate_title_format;
}


