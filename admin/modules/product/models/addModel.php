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
?>
