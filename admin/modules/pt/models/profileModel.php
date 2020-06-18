<?php
    
    function get_pt($pt_id){
        global $conn;
        $strquery = "SELECT * FROM dbo.PT WHERE PtId = {$pt_id}";
        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0];
    }
    
    function get_skil_of_pt($pt_id){
        global $conn;
        $strquery = "SELECT * FROM dbo.PtSkill WHERE PtId  = {$pt_id}";
        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_contact_of_pt($pt_id){
        global $conn;
        $strquery = "SELECT * FROM dbo.PtContact WHERE PtId  = {$pt_id}";
        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_amount_class_of_pt($pt_id){
        global $conn;
        $strquery = "SELECT COUNT(*) AS Followers FROM dbo.Class WHERE PtId = {$pt_id}";
        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0]['Followers'];
    }
    
    function get_amount_rate_of_pt($pt_id){
        global $conn;
        $strquery = "SELECT Value FROM dbo.Rate WHERE PtId = {$pt_id}";
        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_timeline_of_pt($pt_id){
        global $conn;
        $strquery = "SELECT * FROM dbo.PtTimeline WHERE PtId = {$pt_id}";
        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
?>
    
    
    
