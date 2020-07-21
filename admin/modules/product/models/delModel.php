<?php
    function get_list_removed_product(){
        global $conn;
        $strquery = "SELECT * FROM dbo.Product, dbo.ProductCate
        WHERE ProductStatus = 0 AND Product.ProductCateId = ProductCate.ProductCateId AND ProductId IN (
        SELECT DISTINCT(Product.ProductId) FROM dbo.Product, dbo.ProductAttr)";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_amount_removed_product(){
        global $conn;
        $strquery = "SELECT Product.ProductId, SUM(Amount) AS Amount FROM dbo.Product, dbo.ProductAttr
        WHERE ProductStatus = 0 AND Product.ProductId = ProductAttr.ProductId
        GROUP BY Product.ProductId";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function restore_product($product_id){
        try{
            global $conn;
            $strquery = "UPDATE dbo.Product SET ProductStatus = 1 WHERE ProductId = $product_id";

            $getResuld = $conn->prepare($strquery);
            $getResuld->execute();
            return true;
        } catch (Exception $ex) {
            return false;
        }
        
    }
?>