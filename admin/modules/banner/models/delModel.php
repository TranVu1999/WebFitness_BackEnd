<?php
    function get_list_banner(){
        global $conn;
        $strquery = "SELECT * FROM dbo.Banner Where BannerStatus = 0";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function restore_banner($banner_id){
        global $conn;
        $strquery = "UPDATE dbo.Banner SET BannerStatus = 1 WHERE BannerId = $banner_id";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    }
?>