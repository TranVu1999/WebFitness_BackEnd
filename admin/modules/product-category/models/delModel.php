<?php
    function get_list_deleted_product_category(){
        global $conn;
        $strquery = "SELECT * FROM dbo.ProductCate WHERE ProductCateStatus = 0";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function restore_product_category($prod_cate_id){
        global $conn;
        $strquery = "UPDATE dbo.ProductCate SET ProductCateStatus = 1 WHERE ProductCateId = $prod_cate_id";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    }
?>