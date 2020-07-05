<?php
    function get_list_product_category(){
        global $conn;
        $strquery = "SELECT * FROM dbo.ProductCate where ProductCateStatus = 1";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_list_color(){
        global $conn;
        $strquery = "SELECT * FROM dbo.Color WHERE ColorStatus = 1";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_list_size(){
        global $conn;
        $strquery = "SELECT * FROM dbo.Size WHERE SizeStatus = 1";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    
    function get_amount_row_of_product(){
        global $conn;
        $strquery = "SELECT COUNT(*) AS AmountRow FROM dbo.Product";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0]['AmountRow'];
    }
    
    function get_amount_row_of_product_attr(){
        global $conn;
        $strquery = "SELECT COUNT(*) AS AmountRow FROM dbo.ProductAttr";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0]['AmountRow'];
    }
    
    function add_product($prod_title, $prod_alias, $prod_avatar, $prod_cate, $prod_price, $prod_promo, 
            $prod_desc, $prod_detail, $prod_status){
        global $conn;
        $product_id = (int)get_amount_row_of_product() + 1;
        $strquery = "INSERT dbo.Product
        ( ProductId ,ProductTitle ,ProductAlias ,ProductAvatar ,ProductCateId ,ProductPrice ,ProductPromo ,ProductDesc ,ProductDetail ,
          ProductView ,ProductLike ,ProductStatus ,CreatedDate ,CreatedBy ,ModifiedDate ,ModifiedBy)
            VALUES  ( $product_id , N'$prod_title' , '$prod_alias' , '$prod_avatar' , $prod_cate , $prod_price , $prod_promo , 
                '$prod_desc' , '$prod_detail' , 0 , 0 , $prod_status , GETDATE() , N'' , GETDATE() , N'' )";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
//        return $strquery;
        return $product_id;
    }
    
    function add_producta_attr($prod_color, $prod_id, $prod_size, $prod_img, $prod_amount){
        global $conn;
        $amount_row = (int)get_amount_row_of_product_attr() + 1;
        $strquery = "INSERT dbo.ProductAttr
        ( ProductAttrId, ProductId , ColorId ,SizeId, MoreImage , Amount)
        VALUES  ($amount_row, $prod_id , '$prod_color' , N'$prod_size' , '$prod_img', $prod_amount )";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return True;
    }
?>
