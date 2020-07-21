<?php
function get_amount_row_of_banner(){
    global $conn;
    $strquery = "SELECT COUNT(*) AS AmountRow FROM dbo.Banner";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['AmountRow'];
}

function add_banner($banner_img){
    global $conn;
    $strquery = "INSERT dbo.Banner
        ( BannerPicture)
        VALUES  ( '$banner_img' )";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    return True;
}
