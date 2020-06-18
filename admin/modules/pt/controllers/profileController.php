<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('profile');
}

function indexAction() {
    
    $data['pt'] = get_pt(1);
    $data['pt_skill'] = get_skil_of_pt(1);
    $pt_contact = get_contact_of_pt(1);
    $data['pt_follow'] = get_amount_class_of_pt(1);
    $pt_rate = get_amount_rate_of_pt(1);
    $data['pt_timeline'] = get_timeline_of_pt(1);
    
    
    $data['pt_contact'] = array();
    $amountContact = count($pt_contact);
    
    // Format contact value
    for($i = 0; $i < $amountContact; $i++){
        if($pt_contact[$i]['ContactTitle'] == 'Phone Number'){
            array_push($data['pt_contact'], 
                array(
                    'ContactTitle' => $pt_contact[$i]['ContactTitle'],
                    'ContactValue' => FormatPhoneNumber($pt_contact[$i]['ContactValue'])
                )
            );
        } else if($pt_contact[$i]['ContactTitle'] == 'Facebook Link'){
            array_push($data['pt_contact'], 
                array(
                    'ContactTitle' => $pt_contact[$i]['ContactTitle'],
                    'ContactValue' => FormatLink($pt_contact[$i]['ContactValue'])
                )
            );
        }else{
            array_push($data['pt_contact'], 
                array(
                    'ContactTitle' => $pt_contact[$i]['ContactTitle'],
                    'ContactValue' => $pt_contact[$i]['ContactValue']
                )
            );
        }
    }
    
    $data['pt_rate'] = 0;
    $amountRate = count($pt_rate);
    for($i = 0; $i < $amountRate; $i++){
        $data['pt_rate'] += (int)$pt_rate[$i]['Value'];
    }
    $data['pt_rate'] = (float)$data['pt_rate'] / $amountRate;
    $data['pt_rate'] = round($data['pt_rate'],1);
    
    load_view('profile', $data);
    
}

function addAction() {

}

function editAction() {

}
