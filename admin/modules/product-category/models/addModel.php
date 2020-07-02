<?php
function get_list_banners(){
    global $conn;
    $strquery = "SELECT * FROM dbo.Banner WHERE BannerStatus = 1";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
?>