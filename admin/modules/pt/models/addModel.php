<?php
function add_pt($pt_name, $pt_alias, $pt_avatar, $pt_sex, $pt_birthday, $pt_about, $pt_eperience){
    try{
        global $conn;
        $strquery = "INSERT dbo.PT
        (PtFullName ,PtAlias ,PtAvatar ,PtSex ,PtBirthday ,PtAbout ,PtExperience ,PtStatus ,
          CreatedDate ,CreatedBy ,ModifiedDate ,MOdifiedBy)
        VALUES  (N'$pt_name' , '$pt_alias' , '$pt_avatar' , N'$pt_sex' , GETDATE() , '$pt_about' , $pt_eperience , 1 , GETDATE() , N'' , 
          GETDATE() , N'' )";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    } catch (Exception $ex) {
        return false;
    }
    
}

function get_pt_by_alias($pt_alias){
    global $conn;
    $strquery = "SELECT * FROM dbo.PT WHERE PtAlias = '$pt_alias'";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function add_pt_contact($contact_title, $contact_value, $pt_id){
    try{
        global $conn;
        $strquery = "INSERT dbo.PtContact
        (ContactTitle ,ContactValue ,PtId)
        VALUES  (N'$contact_title' , '$contact_value' , $pt_id  )";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    } catch (Exception $ex) {
        return false;
    }
    
}

function add_pt_skill($skill_title, $skill_value, $pt_id){
    try{
        global $conn;
        $strquery = "INSERT dbo.PtSkill
        (SkillTitle ,SkillValue ,PtId)
        VALUES  ( N'$skill_title' , $skill_value , $pt_id )";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    } catch (Exception $ex) {
        return false;
    }
    
}

function add_pt_timeline($timeline_title, $timeline_desc, $pt_id){
    try{
        global $conn;
        $strquery = "INSERT dbo.PtTimeline
        (PtTimelineTitle ,PtTimelineTime ,PtTimelineDecs ,PtId)
        VALUES  ( N'$timeline_title' , GETDATE() , '$timeline_desc' , $pt_id )";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    } catch (Exception $ex) {
        return false;
    }
    
}

?>

