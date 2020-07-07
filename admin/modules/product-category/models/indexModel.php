<?php
    function get_list_product_category(){
        global $conn;
        $strquery = "SELECT * FROM dbo.ProductCate WHERE ProductCateStatus = 1";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_list_banner_of_prod_cate($prod_cate_id){
        global $conn;
        $strquery = "SELECT * FROM dbo.Banner, dbo.BannerAddress
        WHERE dbo.BannerAddress.BannerId = Banner.BannerId AND ProductCateId = $prod_cate_id";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function delete_product_category($prod_cate_id){
        global $conn;
        $strquery = "UPDATE dbo.ProductCate SET ProductCateStatus = 0 WHERE ProductCateId = $prod_cate_id";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    }
?>