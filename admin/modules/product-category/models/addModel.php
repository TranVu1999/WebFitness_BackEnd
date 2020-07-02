<?php
function get_list_banners(){
    global $conn;
    $strquery = "SELECT * FROM dbo.Banner WHERE BannerStatus = 1";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function get_address_banner_by_id($banner_id){
    global $conn;
    $strquery = "SELECT * FROM dbo.Banner WHERE BannerId = $banner_id";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['BannerAddress'];
}

function get_amount_row_product_cate(){
    global $conn;
    $strquery = "SELECT COUNT(*) AS AmountRow FROM dbo.ProductCate";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['AmountRow'];
}

function add_product_cate($prod_cate_title, $prod_cate_desc, $prod_cate_avatar, $prod_alias){
    $amount_row = (int)get_amount_row_product_cate() + 1;
    global $conn;
    $strquery = "INSERT dbo.ProductCate
        ( ProductCateId, ProductCateTitle,ProductCateDesc ,ProductAvatar ,ProductCateAlias ,CreatedDate ,CreatedBy ,ModifiedDate ,ModifiedBy ,ProductCateStatus)
        VALUES  ( $amount_row , N'$prod_cate_title' , N'$prod_cate_desc' , N'$prod_cate_avatar' , '$prod_alias' , GETDATE() , N'' , GETDATE() , N'' , 1 )";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    return True;
}

function update_address_banner($banner_id, $banner_address){
    global $conn;
    $strquery = "UPDATE dbo.Banner SET BannerAddress = '$banner_address' WHERE BannerId = $banner_id";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    return True;
}
?>