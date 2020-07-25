

<?php

// Tất cả các action được lưu trong này
// hàm này sẽ được chạy lên trước rồi mới chạy tới mấy hàm sau
function construct() {
    load_model('add');
}

function indexAction() {
    load_view('add');
}

function addPtAction() {
    $res = true;
    $pt_info = $_POST['pt'];
    $pt = json_decode($pt_info);
    
//    Add pt
    $res = add_pt($pt->pt_name, $pt->pt_alias, $pt->pt_avatar, $pt->pt_sex, $pt->pt_birthday, $pt->pt_about, $pt->pt_experience);
    
    $pt_id = get_pt_by_alias($pt->pt_alias)[0]['PtId'];
    
    foreach($pt->pt_contact as $contact){
        $res = add_pt_contact($contact->contact_title, $contact->contact_value, $pt_id);
    }
    
    foreach($pt->pt_skill as $skill){
        $res = add_pt_skill($skill->pt_skill_title, $skill->pt_skill_val, $pt_id);
    }
    
    foreach($pt->pt_timeline as $timeline){
        $res = add_pt_timeline($timeline->pt_timeline_title, $timeline->pt_timeline_desc, $pt_id);
    }
    
    echo $res;
}

