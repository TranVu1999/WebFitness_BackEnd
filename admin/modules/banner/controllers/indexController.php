<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('index');
}

function indexAction() {
    $data['data_lst_banner'] = get_list_banner();
    $amount_banner = count($data['data_lst_banner']);
    for($i = 0; $i < $amount_banner; $i++){
        $temp = substr_replace($data['data_lst_banner'][$i]['BannerAddress'], '', 0, 3);
        $temp = substr_replace($temp, '', strlen($temp) - 2, 2);
//        $data['data_lst_banner'][$i]['BannerAddress'] = $temp;
        
        
        $data['data_lst_banner'][$i]['BannerAddress'] = encode_string(explode(", ",$temp)[0]);
    }
    
    load_view('index', $data);
    
}

//Format string
function encode_string($str){
    $result = '';
    $arr_word = explode("_",$str);
    for($i = 0; $i < count($arr_word); $i++){
        
        $result .= ucwords(str_replace('"',"",$arr_word[$i])) . " ";
    }
    return $result;
}

function delBannerAction() {
    $banner_id = $_POST['banner_id'];
    
    echo delete_banner($banner_id);
}

function addAction() {

}

function editAction() {

}
