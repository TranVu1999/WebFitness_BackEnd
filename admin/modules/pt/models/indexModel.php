<?php

function get_list_pt(){
    global $conn;
    $strquery = "SELECT PtId, PtFullName, PtAvatar, PtSex, (YEAR(GETDATE())-YEAR(PtBirthday)) AS PtAge 
    			FROM PT";
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}