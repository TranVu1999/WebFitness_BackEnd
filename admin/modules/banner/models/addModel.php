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
    $amount_row = (int)get_amount_row_of_banner() + 1;
    global $conn;
    $strquery = "INSERT dbo.Banner
        ( BannerId ,BannerPicture ,BannerAddress ,CreatedDate ,CreatedBy , ModifiedDate ,ModifiedBy ,BannerStatus)
        VALUES  ( $amount_row , '$banner_img' , N'[]' ,GETDATE() ,N'' ,  GETDATE() ,N'' ,1)";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    return True;
}
